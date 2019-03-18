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
Route::get('/', 'UserMetaController@websiteHomePage')->name('webhome');
// Single Profile Website
Route::get('/singlespeaker/{id}', 'UserMetaController@ShowSingleProfileOnWbsite')->name('websingle');
// All Speakers Page
Route::get('/speakers', 'UserMetaController@ShowAllSpeakersOnWbsite')->name('webspeakers');

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


// All Contact Forms Routes
Route::post('/sendcontactform', 'AllFormsSubmissionController@sendContactFormsDetails')->name('contactform');
Route::post('/speakerscontactform', 'AllFormsSubmissionController@speakersContactForm')->name('speakersContactForm');
// MailChimp Form
Route::post('/mailchimp', 'AllFormsSubmissionController@mailChimpSubscribe')->name('mailChimpSubscribe');

// Search Quries Controller
Route::post('/homepagesearch', 'AllSearchQueriesController@homePageSearch')->name('homepagesearch');


Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->name('userdashboard')->middleware('verified');

// User User Meta Routes
Route::get('dashboard/generalinfo', 'UserMetaController@userMetaIndex')->name('dashboard.generalinfo')->middleware('verified');
Route::post('dashboard/generalinfo', 'UserMetaController@userMetaSave')->name('userMetaSave')->middleware('verified');
// Route::get('dashboard/generalinfo/{id}', 'UserMetaController@userMetaDelete')->name('userMetaDelete')->middleware('auth');
// User Meta Update Reqest
Route::post('/dashboard/generalinfo/update', 'UserMetaController@userMetaupdate')->name('user-generalinfo-update')->middleware('verified');;

// User Expertise Routes
Route::get('dashboard/expertise', 'ExpertiseController@userExpertiseIndex')->name('dashboard.expertise')->middleware('verified');
Route::post('dashboard/expertise', 'ExpertiseController@userExpertiseSave')->name('userexpertisesave')->middleware('verified');
Route::get('dashboard/expertise/{id}', 'ExpertiseController@userExpertiseDelete')->name('userexpertisedelete')->middleware('verified');

// User Languages Routes
Route::get('dashboard/languages', 'LanguageController@userLanguageIndex')->name('dashboard.language')->middleware('verified');
Route::post('dashboard/languages', 'LanguageController@userLanguageSave')->name('userLanguagesave')->middleware('verified');
Route::get('dashboard/languages/{id}', 'LanguageController@userLanguageDelete')->name('userLanguagedelete')->middleware('verified');


// User Achievements Routes
Route::get('dashboard/achievements', 'AchievementController@userAchievementIndex')->name('dashboard.achievements')->middleware('verified');
Route::post('dashboard/achievements', 'AchievementController@userAchievementSave')->name('userachievementsave')->middleware('verified');
Route::get('dashboard/achievements/{id}', 'AchievementController@userAchievementDelete')->name('userachievementdelete')->middleware('verified');

// User Articlre Routes
Route::get('dashboard/articles', 'ArticleController@userArticleIndex')->name('dashboard.articles')->middleware('verified');
Route::post('dashboard/articles', 'ArticleController@userArticleSave')->name('userArticleSave')->middleware('verified');
Route::get('dashboard/articles/{id}', 'ArticleController@userArticleDelete')->name('userArticleDelete')->middleware('verified');

// User Award Routes
Route::get('dashboard/awards', 'AwardController@userAwardIndex')->name('dashboard.awards')->middleware('verified');
Route::post('dashboard/awards', 'AwardController@userAwardSave')->name('userAwardSave')->middleware('verified');
Route::get('dashboard/awards/{id}', 'AwardController@userAwardDelete')->name('userAwardDelete')->middleware('verified');

// User Books Routes
Route::get('dashboard/books', 'BookController@userBookIndex')->name('dashboard.books')->middleware('verified');
Route::post('dashboard/books', 'BookController@userBookSave')->name('userBookSave')->middleware('verified');
Route::get('dashboard/books/{id}', 'BookController@userBookDelete')->name('userBookDelete')->middleware('verified');

// User Current Position Routes
Route::get('dashboard/current-positions', 'CurrentPositionController@userCurrentPositionIndex')->name('dashboard.current-positions')->middleware('verified');
Route::post('dashboard/current-positions', 'CurrentPositionController@userCurrentPositionSave')->name('userCurrentPositionSave')->middleware('verified');
Route::get('dashboard/current-positions/{id}', 'CurrentPositionController@userCurrentPositionDelete')->name('userCurrentPositionDelete')->middleware('verified');

// User Degree Routes
Route::get('dashboard/degrees', 'DegreeController@userDegreeIndex')->name('dashboard.degress')->middleware('verified');
Route::post('dashboard/degrees', 'DegreeController@userDegreeSave')->name('userDegreeSave')->middleware('verified');
Route::get('dashboard/degrees/{id}', 'DegreeController@userDegreeDelete')->name('userDegreeDelete')->middleware('verified');

// User Past Talks Routes
Route::get('dashboard/past-talks', 'PastTalkController@userPastTaskIndex')->name('dashboard.past-talks')->middleware('verified');
Route::post('dashboard/past-talks', 'PastTalkController@userPastTaskSave')->name('userPastTaskSave')->middleware('verified');
Route::get('dashboard/past-talks/{id}', 'PastTalkController@userPastTaskDelete')->name('userPastTaskDelete')->middleware('verified');


// User Presentations Routes
Route::get('dashboard/presentations', 'PresentationController@userPresentationIndex')->name('dashboard.presentations')->middleware('verified');
Route::post('dashboard/presentations', 'PresentationController@userPresentationSave')->name('userPresentationSave')->middleware('verified');
Route::get('dashboard/presentations/{id}', 'PresentationController@userPresentationDelete')->name('userPresentationDelete')->middleware('verified');

// User Workshops Routes
Route::get('dashboard/workshops', 'WorkshopController@userWorkshopIndex')->name('dashboard.workshops')->middleware('verified');
Route::post('dashboard/workshops', 'WorkshopController@userWorkshopSave')->name('userWorkshopSave')->middleware('verified');
Route::get('dashboard/workshops/{id}', 'WorkshopController@userWorkshopDelete')->name('userWorkshopDelete')->middleware('verified');

// User Videos Routes
Route::get('dashboard/videos', 'VideoController@userVideoIndex')->name('dashboard.videos')->middleware('verified');
Route::post('dashboard/videos', 'VideoController@userVideoSave')->name('userVideoSave')->middleware('verified');
Route::get('dashboard/videos/{id}', 'VideoController@userVideoDelete')->name('userVideoDelete')->middleware('verified');


// User Images Routes
Route::get('dashboard/images', 'ImageController@userImageIndex')->name('dashboard.images')->middleware('verified');
Route::post('dashboard/images', 'ImageController@userImageSave')->name('userImageSave')->middleware('verified');
Route::get('dashboard/images/{id}', 'ImageController@userImageDelete')->name('userImageDelete')->middleware('verified');


// User social-media-accounts Routes
Route::get('dashboard/social-media-accounts', 'SocialMediaAccountController@userSocialMediaAccountIndex')->name('dashboard.social-media-accounts')->middleware('verified');
Route::post('dashboard/social-media-accounts', 'SocialMediaAccountController@userSocialMediaAccountSave')->name('userSocialMediaAccountSave')->middleware('verified');
Route::post('dashboard/social-media-accounts/update', 'SocialMediaAccountController@userSocialMediaAccountUpdate')->name('userSocialMediaAccountUpdate')->middleware('verified');


// User AVailbale For Routes
Route::get('dashboard/available-for', 'AvailableForController@userAvailableForIndex')->name('dashboard.available-for')->middleware('verified');
Route::post('dashboard/available-for', 'AvailableForController@userAvailableForSave')->name('userAvailableForSave')->middleware('verified');
Route::post('dashboard/available-for/update', 'AvailableForController@userAvailableForUpdate')->name('userAvailableForUpdate')->middleware('verified');


// Basic Details Update Reqest
Route::post('/dashboard/update', 'HomeController@update')->name('user-basic-update')->middleware('verified');;