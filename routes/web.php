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

//Route::get('/', function () {
//    return view('welcome');
//});

use App\State;
use App\SocialMedia;

//USED FOR FRONT END PAGES

Route::prefix('agent')->group(function() {
//    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AgentLoginController@login')->name('agent.login.submit');
    Route::get('/dashboard', 'MyAccountController@index')->name('agent.dashboard');
});

Route::get('/', function () {
    $social = SocialMedia::where('ID', 1)->first();
    return view('frontend.pages.frontpage', compact('social'));
})->name('home');

Route::get('/why-use-revid', function () {
    return view('frontend.pages.why-use-revid');
})->name('why-use-revid');

Route::get('/use-revid-marketing', function () {
    return view('frontend.pages.use-revid-marketing');
})->name('use-revid-marketing');

Route::get('/use-revid-email', function () {
    return view('frontend.pages.use-revid-email');
})->name('use-revid-email');

Route::get('/use-revid-website', function () {
    return view('frontend.pages.use-revid-website');
})->name('use-revid-website');

Route::get('/use-revid-corporate', function () {
    return view('frontend.pages.use-revid-corporate');
})->name('use-revid-corporate');

Route::get('/use-revid-affordable', function () {
    return view('frontend.pages.use-revid-affordable');
})->name('use-revid-affordable');

Route::get('/use-revid-easy', function () {
    return view('frontend.pages.use-revid-easy');
})->name('use-revid-easy');

Route::get('/use-revid-buyers', function () {
    return view('frontend.pages.use-revid-buyers');
})->name('use-revid-buyers');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::get('/driveby', function () {
    return view('frontend.pages.driveby');
})->name('driveby');

Route::get('/look-first', function () {
    return view('frontend.pages.look-first');
})->name('look-first');

Route::get('/look-first-video', function () {
    return view('frontend.pages.look-first-video');
})->name('look-first-video');

Route::get('/get-started', function () {
    $states = State::get(['state_code', 'state_name']);
    return view('frontend.pages.get-started', compact('states'));
})->name('get-started');

Route::get('/how-system-works', function () {
    return view('frontend.pages.system-works');
})->name('how-system-works');

Route::get('/help', function () {
    return view('frontend.pages.help');
})->name('help');

Route::get('/make-video-premium', function () {
    return view('frontend.pages.make-video.make-video-premium');
})->name('make-video-premium');

Route::get('/make-video-standard', function () {
    return view('frontend.pages.make-video.make-video-standard');
})->name('make-video-standard');

Route::get('/make-video-generic', function () {
    return view('frontend.pages.make-video.make-video-generic');
})->name('make-video-generic');

Route::get('/pricing', function () {
    return view('frontend.pages.pricing');
})->name('pricing');

Route::get('/terms-condition', function () {
    return view('frontend.pages.terms-condition');
})->name('terms-condition');

Route::get('/copyright', function () {
    return view('frontend.pages.copyright');
})->name('copyright');

Route::get('/privacy-terms', function () {
    return view('frontend.pages.privacy-terms');
})->name('privacy-terms');

Route::get('/account/home','MyAccountController@index');

Route::get('/account/my-videos','MyVideoController@index');

Route::get('/account/help','MyHelpController@index');

Route::get('/account/billing-history', function () {
    return view('frontend.pages.video.billing-history');
});

Route::get('/account/make-video', function () {
    return view('frontend.pages.video.make-video');
});

Route::resource('registerAgent','RegisterController');


Auth::routes();

//USED FOR ADMIN ROUTES

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

//Route::post('agents/update', 'AgentController@update')->name('agents.update');

Route::resource('agents','AgentController');

Route::resource('socialmedia','SocialMediaController');

Route::resource('user','UserController');

Route::resource('production','ProductionController');

Route::resource('content','ContentController');

//Route::resource('file','FileController');

//for uploading of Image files
Route::post('/uploadImage', 'FileController@uploadImage')->name('uploadImage');

//for uploading of Image files
Route::post('/uploadAudio', 'FileController@uploadAudio')->name('uploadAudio');

//for uploading of Image files
Route::post('/uploadVideo', 'FileController@uploadVideo')->name('uploadVideo');

//for agent ajax
Route::get('/agentAjax/{id}', 'AgentController@stateAjax');

Route::get('/agentPostalAjax/{state}/{suburb}', 'AgentController@agentPostalAjax');

//for user portal ajax
Route::get('/stateAjaxUser/{id}', 'RegisterController@stateAjaxUser');

//for registration form to capture if email exists in the database
Route::get('/getEmailAjax/{email}', 'RegisterController@getEmailAjax');

//Route::get('/agentPostalAjaxUser/{state}/{suburb}', 'EmailController@agentPostalAjax');

//for Files
Route::get('/audio', 'FileController@indexAudio')->name('audio');

Route::get('/video', 'FileController@indexVideo')->name('video');

Route::get('/image', 'FileController@index')->name('image');

Route::get('/audio/upload', 'FileController@createAudio')->name('showUploadAudio');

Route::get('/video/upload', 'FileController@createVideo')->name('showUploadVideo');

Route::get('/image/upload', 'FileController@create')->name('showUploadImage');

Route::get('/imageDelete/{id}', 'FileController@deleteImage');

Route::get('/audioDelete/{id}', 'FileController@deleteAudio');

Route::get('/videoDelete/{id}', 'FileController@deleteVideo');

//to delete files
Route::post('/imageDelete/{id}', 'FileController@destroyImage');

Route::post('/audioDelete/{id}', 'FileController@destroyAudio');

Route::post('/videoDelete/{id}', 'FileController@destroyVideo');

//for orders page
Route::resource('order','OrderController');

Route::get('/standard', 'OrderController@indexStandard')->name('standard');

Route::get('/premium', 'OrderController@indexPremium')->name('premium');

//passing values from the Front End pages
Route::post('/get-started', 'RegisterController@index')->name('get-started');

//Route::get('/voice/upload', 'FileController@createVoice')->name('showUploadVideo');

//for User Profile
//Route::post('user/update/{id}', 'UserController@update')->name('agents.update');











