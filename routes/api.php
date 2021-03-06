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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/users', 'UserController@getUsers');
// Route::get('/admin', 'AdminController@getAdmin');
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');
// Route::resource('users', 'UserController');
Route::get('/users/create', 'UserController@create')->name('users.create');

Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
Route::post('/users', 'UserController@store')->name('users.store');
Route::put('/users/{id}', 'UserController@update')->name('users.update');