<?php

namespace App\Http\Controllers;

use App\Guest;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class PartyController extends Controller
{
    public function guests($paid = null) {
		$guests = Guest::orderBy('character')
				->where('character', '!=', '')
				->get();
		return view('guests', ['guests' => $guests, 'paid' => $paid]);
	}
	public function rsvp($character) {
		$guest = Guest::where('character', $character)->first();
		return view('rsvp', ['guest' => $guest]);
	}
	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
			'guest' => 'required|max:255',
		]);

		if ($request->dog != "tipsy" && $request->dog != "Tipsy") {
			return redirect('/halloween/guest/' . $request->character)
				->withInput()
				->withErrors("Incorrect dogs name");
		}

		if ($validator->fails()) {
			return redirect('/halloween/guest/' . $request->character)
				->withInput()
				->withErrors("You forgot your name!");
		}

		$guest = Guest::find($request->id);
        $guest->guest = $request->guest;
        $guest->diet = $request->diet;
        $guest->driving = $request->driving;
        $guest->extra = $request->extra;
        $guest->music = $request->song;
		$guest->save();

		return redirect('/halloween/guests')
			->withErrors("Thank you " . $request->guest . ". Dying to see you there!");;
	}
	public function declined(Request $request) {

		$validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
		]);

		if ($request->dog != "tipsy" && $request->dog != "Tipsy") {
			return redirect('/halloween')
				->withInput()
				->withErrors("Incorrect dogs name");
		}

		if ($validator->fails()) {
			return redirect('/halloween')
				->withInput()
				->withErrors("You forgot your name!");
		}

		$guest = new Guest;
        $guest->guest = $request->name;
        $guest->party = "20171104";
        $guest->extra = "declined";
		$guest->save();

		return redirect('/halloween')
				->withErrors("Thank you " . $request->name . ". R.I.P. You will be missed.");
;
	}
}
