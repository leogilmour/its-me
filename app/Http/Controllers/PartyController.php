<?php

namespace App\Http\Controllers;

use App\Guest;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;

class PartyController extends Controller
{
    public function guests() {
		$guests = Guest::all();
		return view('guests', ['guests' => $guests]);
	}
	public function rsvp($character) {
		$guest = Guest::where('character', $character)->first();
		return view('rsvp', ['guest' => $guest]);
	}
	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
			'guest' => 'required|max:255',
		]);

		if ($validator->fails()) {
			return redirect('/halloween/guests/' . $request->character)
				->withInput()
				->withErrors($validator);
		}

		$guest = Guest::find($request->id);
		var_dump($guest);
		die;
		$guest->extra = $request->extra;
		$guest->save();

		return redirect('/');
	}
}
