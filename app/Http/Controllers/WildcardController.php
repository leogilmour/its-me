<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Party;

class WildcardController extends Controller
{
    public function admin() {
        $parties = Party::orderBy('date')
        ->get();
        return view('admin.list', ['parties' => $parties]);
    }

    public function party($party) {
        $party = Party::find($party);
        $guests = $party->guests();
        var_dump($guests);
        die;
        return view('admin.party', ['party' => $party, 'guests' => $guests]);
    }
}
