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

Route::get('/dashboard', 'HomeController@index')->name('userdashboard');

Route::get('dashboard/generalinfo', function(){
    return view('user.general');
})->name('dashboard.generalinfo')->middleware('auth');

// User Expertise Routes
Route::get('dashboard/expertise', 'ExpertiseController@userExpertiseIndex')->name('dashboard.expertise')->middleware('auth');
Route::post('dashboard/expertise', 'ExpertiseController@userExpertiseSave')->name('userexpertisesave')->middleware('auth');
Route::get('dashboard/expertise/{id}', 'ExpertiseController@userExpertiseDelete')->name('userexpertisedelete')->middleware('auth');


// User Achievements Routes
Route::get('dashboard/achievements', 'AchievementController@userAchievementIndex')->name('dashboard.achievements')->middleware('auth');
Route::post('dashboard/achievements', 'AchievementController@userAchievementSave')->name('userachievementsave')->middleware('auth');
Route::get('dashboard/achievements/{id}', 'AchievementController@userAchievementDelete')->name('userachievementdelete')->middleware('auth');

// User Articlre Routes
Route::get('dashboard/articles', 'ArticleController@userArticleIndex')->name('dashboard.articles')->middleware('auth');
Route::post('dashboard/articles', 'ArticleController@userArticleSave')->name('userArticleSave')->middleware('auth');
Route::get('dashboard/articles/{id}', 'ArticleController@userArticleDelete')->name('userArticleDelete')->middleware('auth');

// User Award Routes
Route::get('dashboard/awards', 'AwardController@userAwardIndex')->name('dashboard.awards')->middleware('auth');
Route::post('dashboard/awards', 'AwardController@userAwardSave')->name('userAwardSave')->middleware('auth');
Route::get('dashboard/awards/{id}', 'AwardController@userAwardDelete')->name('userAwardDelete')->middleware('auth');

// User Books Routes
Route::get('dashboard/books', 'BookController@userBookIndex')->name('dashboard.books')->middleware('auth');
Route::post('dashboard/books', 'BookController@userBookSave')->name('userBookSave')->middleware('auth');
Route::get('dashboard/books/{id}', 'BookController@userBookDelete')->name('userBookDelete')->middleware('auth');



Route::get('dashboard/current-positions', function(){
    return view('user.current-positions');
})->name('dashboard.current-positions')->middleware('auth');

Route::get('dashboard/degrees', function(){
    return view('user.degrees');
})->name('dashboard.degress')->middleware('auth');

Route::get('dashboard/images', function(){
    return view('user.images');
})->name('dashboard.images')->middleware('auth');


Route::get('dashboard/past-talks', function(){
    return view('user.past-talks');
})->name('dashboard.past-talks')->middleware('auth');


Route::get('dashboard/presentations', function(){
    return view('user.presentations');
})->name('dashboard.presentations')->middleware('auth');

Route::get('dashboard/social-media-accounts', function(){
    return view('user.social-media-accounts');
})->name('dashboard.social-media-accounts')->middleware('auth');

Route::get('dashboard/videos', function(){
    return view('user.videos');
})->name('dashboard.videos')->middleware('auth');

Route::get('dashboard/workshops', function(){
    return view('user.workshops');
})->name('dashboard.workshops')->middleware('auth');

Route::get('dashboard/available-for', function(){
    return view('user.available-for');
})->name('dashboard.available-for')->middleware('auth');

// Basic Details Update Reqest
Route::post('/dashboard/update', 'HomeController@update')->name('user-basic-update');