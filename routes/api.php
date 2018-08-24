<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List all bookings
Route::get('bookings', 'BookingController@index');

// List single booking
Route::get('booking/{id}', 'BookingController@show');

// Crete new booking
Route::post('booking', 'BookingController@store');

// Update booking
Route::put('booking', 'BookingController@store');

// Delete booking
Route::delete('booking/{id}', 'BookingController@destroy');