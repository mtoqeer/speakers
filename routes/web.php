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


// Pages

// Admin Pages Routes
Route::get('active-speakers', 'Admin\HomeController@showactivespeakers')->name('active-speaker-page');
Route::get('inactive-speakers', 'Admin\HomeController@showinactivespeakers')->name('inactive-speaker-page');
Route::get('/{speakername}', 'Admin\HomeController@showprofilepage')->name('speaker-profile');