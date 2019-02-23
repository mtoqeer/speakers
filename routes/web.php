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
// Website Pages
Route::get('/', function () {
    return view('home');
})->name('webhome');

Route::get('/about', function () {
    return view('about');
})->name('webabout');

Route::get('/contact', function () {
    return view('contact');
})->name('webcontact');

Route::get('/faq', function () {
    return view('faq');
})->name('webfaq');

Route::get('/privacy', function () {
    return view('privacy');
})->name('webprivacy');

Route::get('/single', function () {
    return view('single');
})->name('websingle');

Route::get('/speakers', function () {
    return view('speakers');
})->name('webspeakers');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');




