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
use App\FAQ;
use App\Agent;

//USED FOR FRONT END PAGES

//Route::prefix('agent')->group(function() {
//    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//});

Route::group(['middleware' => 'guest'], function() {

    Route::post('/agent-login', 'AgentAuth\LoginController@login')->name('agent-login');
//    Route::post('/agent-login', 'Auth\LoginController@login')->name('agent-login');

    Route::get('/', function () {
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.frontpage', compact('social'));
    })->name('home');

    Route::get('/why-use-revid', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.why-use-revid' , compact('states', 'groups', 'agencies'));
    })->name('why-use-revid');

    Route::get('/use-revid-social-media', function () {
        $groups = Agent::select('group')->distinct()->get();
        $agencies = Agent::select('name_agency')->distinct()->get();
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-social-media', compact('states', 'groups', 'agencies'));
    })->name('use-revid-social-media');

    Route::get('/use-revid-marketing', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-marketing', compact('states', 'groups', 'agencies'));
    })->name('use-revid-marketing');

    Route::get('/use-revid-email', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-email' , compact('states', 'groups', 'agencies'));
    })->name('use-revid-email');

    Route::get('/use-revid-website', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-website', compact('states', 'groups', 'agencies'));
    })->name('use-revid-website');

    Route::get('/use-revid-corporate', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-corporate', compact('states', 'groups', 'agencies'));
    })->name('use-revid-corporate');

    Route::get('/use-revid-fast', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-fast', compact('states', 'groups', 'agencies'));
    })->name('use-revid-fast');

    Route::get('/use-revid-affordable', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-affordable', compact('states', 'groups', 'agencies'));
    })->name('use-revid-affordable');

    Route::get('/use-revid-easy', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-easy' , compact('states', 'groups', 'agencies'));
    })->name('use-revid-easy');

    Route::get('/use-revid-buyers', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-buyers', compact('states', 'groups', 'agencies'));
    })->name('use-revid-buyers');

    Route::get('/use-revid-helps-sell', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.use-revid-helps-sell', compact('states', 'groups', 'agencies'));
    })->name('use-revid-helps-sell');

    Route::get('/where-use-revid', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.use-revid.where-use-revid', compact('states', 'groups', 'agencies'));
    })->name('where-use-revid');

    Route::get('/revid-video', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.revid-video', compact('states', 'social', 'agencies', 'groups'));
    })->name('revid-video');

    Route::get('/how-to-join', function () {
        return view('frontend.pages.join');
    })->name('how-to-join');

    Route::get('/contact', function () {
        return view('frontend.pages.contact');
    })->name('contact');

    Route::get('/about', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.about', compact('states', 'social', 'groups', 'agencies'));
    })->name('about');

    Route::get('/driveby', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.driveby', compact('states', 'social'));
    })->name('driveby');

    Route::get('/look-first', function () {
        return view('frontend.pages.look-first');
    })->name('look-first');

    Route::get('/look-first-video', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.look-first-video', compact('states', 'groups', 'agencies'));
    })->name('look-first-video');

    Route::get('/get-started', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.get-started', compact('states', 'groups', 'agencies'));
    })->name('get-started');

    Route::get('/how-system-works', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.system-works', compact('states', 'social', 'groups', 'agencies'));
    })->name('how-system-works');

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
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.pricing', compact('states', 'groups', 'agencies'));
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

    Route::resource('registerAgent', 'RegisterController');

});

//Route::group(['middleware' => 'agent_auth'], function(){
    //Route::post('seller_logout', 'SellerAuth\LoginController@logout');
    //Route::get('/agent-dashboard', 'MyAccountController@index')->name('agent-dashboard');

    Route::get('/help', function () {
        $faqs = FAQ::get(['ID', 'question']);
        return view('frontend.pages.help', compact('faqs'));
    })->name('help');


    Route::get('/agent-dashboard', function () {
        return view('frontend.pages.my-account');
    })->name('my-account');

    //for getting the corresponding answer for FAQ
    Route::get('/getFAQAjax/{question}', 'RegisterController@getFAQAjax');

    //for sending FAQ Email
    Route::post('/sendFAQEmail', 'SendEmail@sendFAQEmail')->name('sendFAQEmail');

    //for sending FAQ Email in My Account
    Route::post('account/sendFAQEmail', 'MyHelpController@sendFAQEmailAcct')->name('sendFAQEmailAcct');

    //for CallMe Email function in Front End
    Route::post('/helpCallMe', 'SendEmail@callmeEmail')->name('callmeEmail');

    //for CallMe Email function in MyAccount
    Route::post('account/help/callMe', 'MyHelpController@callmeHelp')->name('callmeHelp');

    //passing values from the Front End pages
    Route::post('/get-started', 'RegisterController@index')->name('get-started');

    //passing values via enter of Email field
    Route::post('/get-started/step1', 'RegisterController@getStep1')->name('get-started-step1');

    //redirect to Step 2 of Registration
    Route::get('/get-started/step2', 'RegisterController@getStep2')->name('get-started-step2');

    //redirect to Step 3 of Registration
    Route::get('/get-started/step3', 'RegisterController@getStep3')->name('get-started-step3');

    //redirect to Step 4 of Registration
    Route::get('/get-started/step4', 'RegisterController@getStep4')->name('get-started-step4');

    //modules for processing of the steps in registration
    Route::post('/processStep2', 'RegisterController@processStep2')->name('processStep2');

    Route::post('/processStep3', 'RegisterController@processStep3')->name('processStep3');

    Route::post('/processStep4', 'RegisterController@processStep4')->name('processStep4');

    Route::get('/account/home', 'MyAccountController@index')->name('account-home');

    Route::get('/account/my-videos', 'MyVideoController@index')->name('account-my-videos');

    Route::get('/account/help', 'MyHelpController@index')->name('account-help');

    Route::get('/account/preferences', 'MyPreferencesController@index')->name('account-preferences');

    Route::post('/account/preferences/process/{id}', 'MyPreferencesController@update')->name('account-preferences-process');

    Route::get('/account/billing-history', function () {
        return view('frontend.pages.video.billing-history');
    })->name('account-billing-history');

//    Route::get('/account/make-video', function () {
//        return view('frontend.pages.video.make-video');
//    })->name('account-make-video');

    Route::get('/account/make-video', 'MyAccountController@makeVideo')->name('account-make-video');

    Route::get('/account/video-tracker','MyVideoController@VideoTracker')->name('account-video-tracker');

    Route::get('/account/explore-voice-overs','MyVideoController@VoiceOvers')->name('account-explore-voice-overs');

    Route::get('/account/explore-pictures','MyVideoController@ExplorePicture')->name('account-explore-pictures');

    Route::get('/account/generic-video-order','MyVideoController@GenericVideoOrder')->name('account-generic-video-order');

    Route::get('/account/standard-video-order','MyVideoController@StandardVideoOrder')->name('account-standard-video-order');

    Route::get('/account/premium-video-order','MyVideoController@PremiumVideoOrder')->name('account-premium-video-order');

    //procoess for Generic Video Order
    Route::post('/account/getGenericVideo', 'MyVideoController@getGenericVideo')->name('getGenericVideo');

    //procoess for Standard Video Order
    Route::get('/account/getStandardVideo', 'MyVideoController@getStandardVideo')->name('getStandardVideo');

    //procoess for Standard Video Order
    Route::post('/account/getPremiumVideo', 'MyVideoController@getPremiumVideo')->name('getPremiumVideo');

    //process to save Billing History and other edits for Generic Video
    Route::post('/account/postGenericVideo', 'MyVideoController@postGenericVideo')->name('postGenericVideo');

    //process to save Billing History and other edits for Standard Video
    Route::post('/account/postStandardVideo', 'MyVideoController@postStandardVideo')->name('postStandardVideo');

    //process to save Billing History and other edits for Premium Video
    Route::post('/account/postPremiumVideo', 'MyVideoController@postPremiumVideo')->name('postPremiumVideo');

    //for posting data for editing of My Account details
    Route::post('/userLogout', 'Auth\LoginController@userLogout')->name('userLogout');

    //routing for editing the User Details under My Account section
    Route::post('/editAccount', 'MyAccountController@editAccount')->name('editAccount');

    //routing for editing the User Details under My Account section
    Route::post('/editInvoice', 'MyAccountController@editInvoice')->name('editInvoice');

    //route for editing the Subscription section under My Account section
    Route::post('/editSubscription', 'MyAccountController@editSubscription')->name('editSubscription');



//});


    Auth::routes();

    //USED FOR ADMIN ROUTES

    //Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin', 'AdminController@index')->name('admin');

    //Route::post('agents/update', 'AgentController@update')->name('agents.update');

    Route::resource('agents', 'AgentController');

    Route::resource('socialmedia', 'SocialMediaController');

    Route::resource('user', 'UserController');

    Route::resource('production', 'ProductionController');

    Route::resource('content', 'ContentController');

    Route::resource('faq', 'FAQController');

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
    Route::resource('order', 'OrderController');

    Route::get('/standard', 'OrderController@indexStandard')->name('standard');

    Route::get('/premium', 'OrderController@indexPremium')->name('premium');

//});

//Route::get('/voice/upload', 'FileController@createVoice')->name('showUploadVideo');

//for User Profile
//Route::post('user/update/{id}', 'UserController@update')->name('agents.update');











