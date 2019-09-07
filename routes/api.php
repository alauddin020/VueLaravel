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
// Route::get('/all','UserController@index');

// Route::post('/store','UserController@store');
// Route::get('/edit/{id}','UserController@edit');
// Route::post('/edit/{id}','UserController@update');
// Route::post('/delete/{id}','UserController@destroy');
Route::resource('user','UserController');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
