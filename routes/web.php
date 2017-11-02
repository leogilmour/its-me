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
Route::get('/liberty', function () {
    return view('liberty');
});
Route::get('/halloween', function () {
    return view('halloween');
});
Route::post('/halloween', 'PartyController@declined');

Route::get('/halloween/guests/{paid?}', 'PartyController@guests');

Route::get('/halloween/guest/{character}', 'PartyController@rsvp');
Route::post('/halloween/guest/{character}', 'PartyController@store');