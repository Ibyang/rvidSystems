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

//USED FOR FRONT END PAGES
Route::get('/', function () {
    return view('frontend.pages.frontpage');
});

Route::get('/why-use-revid', function () {
    return view('frontend.pages.why-use-revid');
});

Route::get('/use-revid-marketing', function () {
    return view('frontend.pages.use-revid-marketing');
});

Route::get('/use-revid-email', function () {
    return view('frontend.pages.use-revid-email');
});

Route::get('/use-revid-website', function () {
    return view('frontend.pages.use-revid-website');
});

Route::get('/use-revid-corporate', function () {
    return view('frontend.pages.use-revid-corporate');
});

Route::get('/use-revid-affordable', function () {
    return view('frontend.pages.use-revid-affordable');
});

Route::get('/use-revid-easy', function () {
    return view('frontend.pages.use-revid-easy');
});

Route::get('/use-revid-buyers', function () {
    return view('frontend.pages.use-revid-buyers');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/driveby', function () {
    return view('frontend.pages.driveby');
});

Route::get('/look-first', function () {
    return view('frontend.pages.look-first');
});

Route::get('/look-first-video', function () {
    return view('frontend.pages.look-first-video');
});

Route::get('/get-started', function () {
    return view('frontend.pages.get-started');
});

Route::get('/how-system-works', function () {
    return view('frontend.pages.system-works');
});

Route::get('/help', function () {
    return view('frontend.pages.help');
});

Route::get('/make-video-premium', function () {
    return view('frontend.pages.make-video.make-video-premium');
});

Route::get('/make-video-standard', function () {
    return view('frontend.pages.make-video.make-video-standard');
});

Route::get('/make-video-generic', function () {
    return view('frontend.pages.make-video.make-video-generic');
});

Route::get('/pricing', function () {
    return view('frontend.pages.pricing');
});

Route::get('/account/home','MyAccountController@index');

Route::get('/account/my-videos','MyVideoController@index');

Route::get('/account/help','MyHelpController@index');

Route::get('/account/billing-history', function () {
    return view('frontend.pages.video.billing-history');
});


Auth::routes();

//USED FOR ADMIN ROUTES

Route::get('/home', 'HomeController@index')->name('home');

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


//Route::get('/voice/upload', 'FileController@createVoice')->name('showUploadVideo');

//for User Profile
//Route::post('user/update/{id}', 'UserController@update')->name('agents.update');











