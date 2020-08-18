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

// First Method
Route::get('country', 'CountryController@country');
Route::get('country/{id}', 'CountryController@countryById');
//create
Route::post('country', 'CountryController@countrySave');
//update
Route::put('country/{id}', 'CountryController@countryUpdate');
//delete
Route::delete('country/{id}', 'CountryController@countryDelete');

// Second Method
Route::apiResource('customer', 'CustomerController');
