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
Route::get('user/{id}','UserController@showprofile')->name('user');

Route::get('passport/edit','UserController@editpassport')->name('passport/edit');
Route::get('passport/{id}','UserController@showpassport')->name('passport');


Route::get('forum/create','UserController@createforum')->name('forum/create');
Route::get('forum/update','UserController@updateforum')->name('forum/update');
Route::get('forum/delete','UserController@deleteforum')->name('forum/delete');


Route::get('lesson/create','UserController@createlesson')->name('create/lesson');
Route::get('lesson/delete','UserController@deletelesson')->name('delete/lesson');
Route::get('lesson/sync','UserController@synclesson')->name('sync/lesson');


Route::get('lesson/{id}','UserController@showlesson')->name('lesson');
