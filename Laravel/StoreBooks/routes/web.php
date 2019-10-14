<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/view','User\UserController@index')->name('users.view');

Route::post('/user/insert','User\UserController@create')->name('users.create');

Route::get('/user/seach/{id}','User\UserController@edit')->name('users.edit');

Route::post('/user/update/{id}', 'User\UserController@update')->name('user.update');



