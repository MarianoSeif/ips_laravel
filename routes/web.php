<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@home')->name('home');
Route::get('about', 'Controller@about')->name('about');
Route::get('contact', 'Controller@contact')->name('contact');

//Search User
Route::get('searchUser', 'UserController@searchUser')->name('searchUser');

//List Users
Route::get('getUsers', 'UserController@getUsers')->name('getUsers');

//Add User
Route::post('addUser', 'UserController@addUser')->name('addUser');

//Delete User
Route::delete('delUser/{user}', 'UserController@delUser')->name('delUser');

//Update User
Route::put('updateUser/{user}', 'UserController@updateUser')->name('updateUser');

//Show Edit User Form
Route::get('editUser/{user}', 'UserController@editUser')->name('editUser');

//Show Create User Form
Route::get('createUser', 'UserController@createUser')->name('createUser');
