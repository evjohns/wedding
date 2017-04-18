<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home-page');
});

Route::get('home-page', function () {
    return view('home-page');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('rsvp', 'RsvpController@index');

Route::get('venue', function () {
    return view('venue');
});

Route::post('rsvp/submit', 'RsvpController@actionSubmit');

Route::post('rsvp/submitnotattending', 'RsvpController@actionSubmitNotAttending');

Route::auth();

Route::get('/admin', 'HomeController@index');

Route::get('/register', 'HomeController@index');
