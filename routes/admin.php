<?php

Route::group(['namespace' => 'Admin'], function() {

    Route::get('/', 'HomeController@adminIndex')->name('admin.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');

    // Register first one for first time admin creation
    // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::get('register', 'HomeController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('admin.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('admin.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('admin.verification.verify');

    // Pages

// Admin Pages Routes
Route::get('active-speakers', 'HomeController@showactivespeakers')->name('active-speaker-page');
Route::get('active-speakers/{id}', 'HomeController@changeToUnapprovespeakers')->name('statusChangeToUnapproved');
Route::get('active-speakers/featured/{id}', 'HomeController@changeToFeaturedSpeakers')->name('statusChangeToFeatured');


Route::get('inactive-speakers', 'HomeController@showinactivespeakers')->name('inactive-speaker-page');
Route::get('inactive-speakers/{id}', 'HomeController@changeToApprovespeakers')->name('statusChangeToApproved');
Route::get('inactive-speakers/delete/{id}', 'HomeController@userDelete')->name('userDelete');


Route::get('/featured', 'HomeController@showFeaturedSpeaker')->name('featured-speaker-page');
Route::get('/featured/{id}', 'HomeController@changeToUnfeaturedSpeakers')->name('statusChangeToUnfeatured');


Route::get('/profile/{id}', 'HomeController@showProfilePage')->name('speaker-profile');

Route::get('privacyedit', 'PrivacyContentController@showpage')->name('privacy-edit-page')->middleware('admin.auth:admin');
Route::post('privacyedit/{id}', 'PrivacyContentController@savecontent')->name('savecontent-privacy')->middleware('admin.auth:admin');;
// Route::get('inactive-speakers/delete/{id}', 'HomeController@userDelete')->name('userDelete');

Route::get('termsedit', 'AboutContentController@showpage')->name('about-edit-page')->middleware('admin.auth:admin');
Route::post('termsedit/{id}', 'AboutContentController@savecontent')->name('savecontent-privacy')->middleware('admin.auth:admin');;
// Route::get('inactive-speakers/delete/{id}', 'HomeController@userDelete')->name('userDelete');
    


});