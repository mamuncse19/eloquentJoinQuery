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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users.hasOne','UserController@index')->name('users.hasOne');
Route::get('/users.belongsTo','PhoneController@index')->name('users.belongsTo');
Route::get('users.post','PostController@index')->name('users.post');
Route::get('postByUser','UserController@allUser')->name('postByUser');
Route::get('totalPost/{id}','PostController@postByUser');
