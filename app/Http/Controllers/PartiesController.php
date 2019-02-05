<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Http\Requests;

use App\Party;
use App\Guest;
use App\Reply;
use App\Cupid;

use Redirect;
use Input;
use NumberFormatter;

class PartiesController extends Controller
{
    public function invite($slug)
    {
        $party = Party::where('slug', $slug)->first();
			$party->date = date("jS F Y", strtotime($party->date));
			$formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
			$hour = $formatter->format(date("g", strtotime($party->time)));
			$day = date("a", strtotime($party->time)) === 'pm' ? 'evening' : 'morning';
			$party->time = $hour . " o'clock in the " . $day;
			$party->deadline = date("jS F", strtotime($party->deadline)); // Add day of the week for emphasis
        return view('parties.invite', ['party' => $party]);
    }
    
    public function rsvp($slug)
    {
        $party = Party::where('slug', $slug)->first();
        return view('parties.rsvp', ['party' => $party]);
	}
	
	public function plus_one($slug, $guest_id)
    {
		$party = Party::where('slug', $slug)->first();
			$guest = Guest::findOrFail($guest_id);
			$reply = Reply::where('guest_id', $guest->id)
								->where('party_id', $party->id)
								->first();
			$plus_one = Guest::findOrFail($reply->plus_one_id);
        return view('parties.rsvp', ['party' => $party, 'guest' => $guest, 'plus_one' => $plus_one]);
	}
	
    public function store_plus_one(Request $request, $slug, $guest_id) {

		$party = Party::findOrFail($request->party_id);
		$original_guest = Guest::findOrFail($guest_id);

		if (trim(strtolower($request->password)) !== $party->passcode) {
            return \Redirect::back()
				->withInput($request->input())
				->withErrors("Incorrect password.");
		}

		$emptyValidator = Validator::make($request->all(), [
            'fact' => 'required'
		]);

		if ( $emptyValidator->fails()) {
			return \Redirect::back()
				->withInput($request->input())
				->withErrors("You missed some fields...");
		}

		$reply = Reply::where('guest_id', $original_guest->id)
						->where('party_id', $party->id)
						->first();

		$plus_one = Guest::findOrFail($reply->plus_one_id);

		$reply = Reply::where('party_id', '=', $party->id)
						->where('guest_id', '=', $plus_one->id)
						->first();
		if($reply) {
			return \Redirect::back()
				->withErrors("Sorry. We already have your R.S.V.P.");
		};

		// now create guest for plus one, then add to this reply. Associate?
		$reply = new Reply(['party_id' => $party->id, 'reply' => $request->reply]);
		$plus_one->replies()->save($reply);

		$cupid = new Cupid(['party_id' => $party->id, 'guest_id' => $original_guest->id, 'cupid_fact' => $request->fact]);
		$cupid->save();

		return redirect('/parties/' . $party->slug . '/attending')->with([
			'guest_name' => $plus_one->name,
			'first_address' => $party->first_address,
			'second_address' => $party->second_address,
			'city' => $party->city,
			'county' => $party->county,
			'postcode' => $party->postcode
		]);
	}

    public function store(Request $request) {

		$party = Party::findOrFail($request->party_id);

		if (trim(strtolower($request->password)) !== $party->passcode) {
            return \Redirect::back()
				->withInput($request->input())
				->withErrors("Incorrect password.");
		}

		$emptyValidator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'email' => 'required|max:255',
			'plus_one' => 'required|max:255',
            'fact' => 'required'
		]);

		$emailValidator = Validator::make($request->all(), [
			'email' => 'required|email',
		]);

		if ( $emptyValidator->fails()) {
			return \Redirect::back()
				->withInput($request->input())
				->withErrors("You missed some fields...");
		}
		
		if ($emailValidator->fails()) {
			return \Redirect::back()
				->withInput($request->input())
				->withErrors("Funny email...?");
		}

		$guest = Guest::where('email', '=', $request->email)
						->first(); //firstOrCreate based on one variable?
		
		if ($guest) {
			$guest->update([
				'name' => $request->name,
				'allergies' => $request->allergy
			]);
		} else {
			$guest = new Guest([
				'name' => $request->name,
				'email' => $request->email,
				'allergies' => $request->allergy
			]);
			$guest->save();
		}
		
		// try
		// {
		// 	$user = User::findOrFail($id);
		// }
		// catch(ModelNotFoundException $e)
		// {
		// 	dd(get_class_methods($e)); // lists all available methods for exception object
		// 	dd($e);
		// }
		$reply = Reply::where('party_id', '=', $party->id)
						->where('guest_id', '=', $guest->id)
						->first();
		if($reply) {
			return \Redirect::back()
			->withErrors("Sorry. We already have your R.S.V.P.");
		};

		// search for plus one for this party first.
		$plus_one = new Guest(['name' => $request->plus_one]);
		$plus_one->save();

		// now create guest for plus one, then add to this reply. Associate?
		$reply = new Reply(['party_id' => $party->id, 'reply' => $request->reply, 'plus_one_id' => $plus_one->id]);
		$guest->replies()->save($reply);
	
		// search for fact for this guest & party first.
		$cupid = new Cupid(['party_id' => $request->party_id, 'guest_id' => $plus_one->id, 'cupid_fact' => $request->fact]);
		$cupid->save();

		// slugify plus one name into URL???

		return redirect('/parties/' . $party->slug . '/attending')->with([
			'guest_name' => $guest->name,
			'first_address' => $party->first_address,
			'second_address' => $party->second_address,
			'city' => $party->city,
			'county' => $party->county,
			'postcode' => $party->postcode,
			'plus_one_link' => '/parties/' . $party->slug . '/' . $guest->id . '/' . str_slug($plus_one->name, '-')
		]);

		return redirect('/');
	}

    public function attending($slug)
    {
		$party = Party::where('slug', $slug)->first();
        return view('parties.attending', ['party' => $party]);
	}

	public function decline($slug)
	{
		$party = Party::where('slug', $slug)->first();
		return view('parties.decline', ['party' => $party]);
	}
	
	public function store_decline(Request $request, $slug) {
		$party = Party::where('slug', $slug)->first(); // first or fail? what if it doesn't exist.

		if (trim(strtolower($request->password)) !== "eros") {
            return \Redirect::back()
				->withInput($request->input())
				->withErrors("Incorrect password.");
		}

		$declineValidator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'email' => 'required|max:255',
			'reply'=> 'required' 
		]);

		$emailValidator = Validator::make($request->all(), [
			'email' => 'required|email',
		]);

		if ($declineValidator->fails()) {
			return \Redirect::back()
				->withInput($request->input())
				->withErrors("You missed some fields...");
		}
		if ($emailValidator ->fails()) {
			return \Redirect::back()
				->withInput($request->input())
				->withErrors("Something funny about your email...");
		}

		$guest = Guest::where('email', '=', $request->email)
			->first(); //firstOrCreate based on one variable?

		if ($guest) {
			$guest->update([
				'name' => $request->name
			]);
		} else {
			$guest = new Guest([
				'name' => $request->name,
				'email' => $request->email
			]);
			$guest->save();
		}

		$reply = Reply::where('party_id', '=', $party->id)
			->where('guest_id', '=', $guest->id)
			->first();

		if ($reply) {
			return \Redirect::back()
			->withErrors("Sorry. We already have your R.S.V.P.");
		};

		$reply = new Reply(['party_id' => $party->id, 'reply' => $request->reply]);
		$guest->replies()->save($reply);

		return \Redirect::back()->with([ 'guest_name' => $guest->name ]);
	}

}

// // save user and business
// // do what you need with the dealership, then..
// $dealership->save();

// $dealership->businesses()->save($business);
// You may want to do this, to save one query:

// // user stuff
// $user->save();

// // dealer stuff
// $dealership->save();

// // business stuff
// $business->user()->associate($user);
// $business->dealership()->associate($dealership);
// $business->save();