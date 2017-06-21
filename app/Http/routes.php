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
    return view('zero');
});

Route::get('/first', function () {
    return view('first');
});

Route::get('/second', function () {
    return view('second');
});

Route::get('/third', function () {
    return view('third');
});

Route::get('/fourth', function () {
    return view('fourth');
});
