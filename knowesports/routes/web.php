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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page1', 'events@show');

Route::get('/page2', 'events@show2');

Route::get('/page3', 'events@show3');

Route::get('/readrov1', 'events@rov1');

Route::get('/readrov2', 'events@rov2');

Route::get('/readrov3', 'events@rov3');

Route::get('/readlol1', 'events@lol1');

Route::get('/readlol2', 'events@lol2');

Route::get('/readlol3', 'events@lol3');

Route::get('/readdota1', 'events@dota1');

Route::get('/readdota2', 'events@dota2');

Route::get('/readdota3', 'events@dota3');