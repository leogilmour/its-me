<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Guest;
use App\Party;
use App\Reply;

class WildcardController extends Controller
{
    public function party($id)
    {
        $party = Party::findOrFail($id);
        $party->date = date("jS F Y", strtotime($party->date));

        $attending = $party->replies()->attending()->get();
        $attending_guests = [];
        foreach($attending as $a) {
            $attending_guest['guest'] = $a->guest()->first();
            if($a->plus_one_id) {
                $attending_guest['plus_one'] = Guest::findOrFail($a->plus_one_id);
            } else {
                $rsvp = Reply::where('plus_one_id', $a->guest_id)->first();
                $attending_guest['plus_one'] = Guest::find($rsvp->guest_id);
            }
            $attending_guest['fact'] = $attending_guest['guest']->cupids()->first();
            $attending_guests[] = $attending_guest;
        }

        $declined = $party->replies()->notAttending()->get();
        $declined_guests = [];
        foreach($declined as $d) {
            $declined_guests[] = $d->guest()->first();
        }

        return view('wildcard.party', ['party' => $party, 'guests' => $attending_guests, 'absent' => $declined_guests]);
    }
}
