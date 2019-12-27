<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*//List Users
Route::get('getUsers', 'UserController@getUsers');

//Add User
Route::post('addUser', 'UserController@addUser');

//Delete User
Route::delete('delUser/{id}', 'UserController@delUser');

//Update User
Route::put('updateUser/{id}', 'UserController@updateUser');*/
