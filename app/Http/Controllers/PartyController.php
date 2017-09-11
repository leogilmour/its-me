<?php

namespace App\Http\Controllers;

use App\Guest;

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
}
