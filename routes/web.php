<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/learn-to-code', function () {
    return view('learn');
});
// Route::get('/liberty', function () {
    // return view('liberty');
// });
// Route::get('/halloween', function () {
    // return view('halloween');
// });
// Route::post('/halloween', 'PartyController@declined');

// Route::get('/halloween/guests/{paid?}', 'OldPartyController@guests');

// Route::get('/halloween/guest/{character}', 'PartyController@rsvp');
// Route::post('/halloween/guest/{character}', 'PartyController@store');

// Route::get('/index.html', function () {
    // return view('ss');
// });

// Route::get('/parties/{slug}', 'PartiesController@invite');

// Route::get('/parties/{slug}/rsvp', 'PartiesController@rsvp');
// Route::post('/parties/{slug}/rsvp', 'PartiesController@store');
// Route::get('/parties/{slug}/attending', 'PartiesController@attending');

// Route::get('/parties/{slug}/decline', 'PartiesController@decline');
// Route::post('/parties/{slug}/decline', 'PartiesController@store_decline');

// Route::get('/parties/{slug}/{guest_id}/{guest}', 'PartiesController@plus_one');
// Route::post('/parties/{slug}/{guest_id}/{guest}', 'PartiesController@store_plus_one');

// Route::get('/wildcardmin/{id}', 'WildcardController@party');
// Auth::routes();

// Route::get('/home', 'HomeController@index');
// 