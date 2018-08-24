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
use App\Content;

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

    Route::get('/what-is-revid', function () {
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.revid', compact('social'));
    })->name('what-is-revid');

    Route::get('/what-is-driveby', function () {
        $social = SocialMedia::where('ID', 1)->first();
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.what-is-driveby', compact('social', 'groups', 'agencies', 'states'));
    })->name('what-is-driveby');

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
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-social-media', compact('states', 'groups', 'agencies', 'social'));
    })->name('use-revid-social-media');

    Route::get('/use-revid-marketing', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-marketing', compact('states', 'groups', 'agencies', 'social'));
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
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-website', compact('states', 'groups', 'agencies', 'social'));
    })->name('use-revid-website');

    Route::get('/use-revid-corporate', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-corporate', compact('states', 'groups', 'agencies', 'social'));
    })->name('use-revid-corporate');

    Route::get('/use-revid-fast', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-fast', compact('states', 'groups', 'agencies', 'social'));
    })->name('use-revid-fast');

    Route::get('/use-revid-affordable', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-affordable', compact('states', 'groups', 'agencies', 'social'));
    })->name('use-revid-affordable');

    Route::get('/use-revid-easy', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-easy' , compact('states', 'groups', 'agencies', 'social'));
    })->name('use-revid-easy');

    Route::get('/use-revid-buyers', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-buyers', compact('states', 'groups', 'agencies', 'social'));
    })->name('use-revid-buyers');

    Route::get('/use-revid-helps-sell', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.use-revid.use-revid-helps-sell', compact('states', 'groups', 'agencies', 'social'));
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
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.join', compact('states', 'social', 'agencies', 'groups'));
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

    Route::get('/driveby-video', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.driveby-video', compact('states', 'social', 'groups', 'agencies'));
    })->name('driveby-video');

    Route::get('/what-is-lookfirst', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.look-first', compact('states', 'social', 'groups', 'agencies'));
    })->name('what-is-lookfirst');

    Route::get('/look-first-video', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.look-first-video', compact('states', 'groups', 'agencies', 'social'));
    })->name('look-first-video');

    Route::get('/get-started', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.get-started', compact('states', 'groups', 'agencies','social'));
    })->name('get-started');

    Route::get('/how-system-works', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.system-works', compact('states', 'social', 'groups', 'agencies'));
    })->name('how-system-works');


    Route::get('/how-system-works-video', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.system-works-video', compact('states', 'social', 'groups', 'agencies'));
    })->name('how-system-works-video');


    Route::get('/make-video-custom', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.make-video.make-video-custom', compact('groups', 'agencies', 'states', 'social'));
    })->name('make-video-custom');

    Route::get('/make-video-manual', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.make-video.make-video-manual', compact('groups', 'agencies', 'states', 'social'));
    })->name('make-video-manual');

    Route::get('/make-video-automatic', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.make-video.make-video-automatic', compact('groups', 'agencies', 'states', 'social'));
    })->name('make-video-automatic');

    Route::get('/pricing', function () {
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        return view('frontend.pages.pricing', compact('states', 'groups', 'agencies', 'social'));
    })->name('pricing');

    Route::get('/terms-condition', function () {
        $social = SocialMedia::where('ID', 1)->first();
        $content = Content::where('ID', 1)->get(['content_text'])->first();
        return view('frontend.pages.terms-condition', compact('content', 'social'));
    })->name('terms-condition');

    Route::get('/copyright', function () {
        $social = SocialMedia::where('ID', 1)->first();
        $content = Content::where('ID', 2)->get(['content_text'])->first();
        return view('frontend.pages.copyright', compact('content', 'social'));
    })->name('copyright');

    Route::get('/privacy-terms', function () {
        $social = SocialMedia::where('ID', 1)->first();
        $content = Content::where('ID', 3)->get(['content_text'])->first();
        return view('frontend.pages.privacy-terms', compact('content', 'social'));
    })->name('privacy-terms');


    //for default login page
    Route::get('/login-page', function () {
        $social = SocialMedia::where('ID', 1)->first();
        $content = Content::where('ID', 3)->get(['content_text'])->first();
        return view('frontend.pages.privacy-terms', compact('content', 'social'));
    })->name('login-page');


    Route::get('/login-page', function () {
        return view('auth.login');
    })->name('login-page');


    //for direct upload
    // Route::get('/account/make-video/direct-upload', function () {
    //     $states = State::get(['state_code', 'state_name']);
    //     return view('frontend.pages.make-video.direct-upload', compact('states'));
    // })->name('direct-upload');


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
    // Route::post('/get-started', 'RegisterController@index')->name('get-started');
    Route::post('/get-started', 'RegisterController@getStarted')->name('getStarted');

    //passing values via enter of Email field
    Route::post('/get-started/step1', 'RegisterController@getStep1')->name('get-started-step1');

    //redirect to Step 1 of Registration
    Route::get('/getStarted/step1', 'RegisterController@getStep1')->name('getStarted-step1');

    //redirect to Step 2 of Registration
    Route::get('/get-started/step2', 'RegisterController@getStep2')->name('get-started-step2');

    //redirect to Step 3 of Registration
    Route::get('/get-started/step3', 'RegisterController@getStep3')->name('get-started-step3');

    //redirect to Step 4 of Registration
    Route::get('/get-started/step4', 'RegisterController@getStep4')->name('get-started-step4');

    //modules for processing of the steps in registration
    Route::post('/processStep1', 'RegisterController@processStep1')->name('processStep1');

    Route::post('/processStep2', 'RegisterController@processStep2')->name('processStep2');

    Route::post('/processStep3', 'RegisterController@processStep3')->name('processStep3');

    Route::post('/processStep4', 'RegisterController@processStep4')->name('processStep4');

    //process for Payment Details
    Route::post('/postPaymentDetails', 'PaymentController@postPaymentDetails')->name('postPaymentDetails');

    Route::get('/payment-status', 'PaymentController@paymentInfo')->name('payment-status');

    Route::get('/payment-cancel', function() {
        return 'Payment has been canceled';
    })->name('payment-cancel');

    Route::get('/account/home', 'MyAccountController@index')->name('account-home');

    Route::get('/account/my-videos', 'MyVideoController@index')->name('account-my-videos');

    Route::post('/account/myvideos/updateEmail', 'MyVideoController@updateEmailList')->name('myvideos-updateEmail');

    Route::get('/account/help', 'MyHelpController@index')->name('account-help');

    Route::get('/account/terms-condition', 'MyAccountController@getTermsCondition')->name('account-terms-condition');

    Route::get('/account/copyright', 'MyAccountController@getCopyright')->name('account-copyright');

    Route::get('/account/privacy-terms', 'MyAccountController@getPrivacy')->name('account-privacy-terms');

    Route::get('/account/preferences', 'MyPreferencesController@index')->name('account-preferences');

    Route::post('/account/preferences/process/{id}', 'MyPreferencesController@update')->name('account-preferences-process');

    Route::get('/account/billing-history', 'MyAccountController@getBilling')->name('account-billing-history');

    Route::post('/account/tax-inquiry', 'MyAccountController@taxInquiry')->name('account-tax-inquiry');

    //print PDF for the license documents
    Route::get('/account/getDocumentPDF/{id}', 'RegisterController@getPDFDocument')->name('account-getpdf');


//    Route::get('/account/billing-history', function () {
//        return view('frontend.pages.video.billing-history');
//    })->name('account-billing-history');

//    Route::get('/account/make-video', function () {
//        return view('frontend.pages.video.make-video');
//    })->name('account-make-video');

    Route::get('/account/make-video', 'MyAccountController@makeVideo')->name('account-make-video');

    Route::get('/account/video-tracker','MyVideoController@VideoTracker')->name('account-video-tracker');

    Route::get('/account/premium-video','MyVideoController@PremiumVideoDetails')->name('account-premium-video');

    Route::get('/account/settings/explore-voice-overs','MyVideoController@VoiceOvers')->name('account-explore-voice-overs');

    Route::get('/account/settings/explore-music','MyVideoController@ExploreMusic')->name('account-explore-music');

    Route::get('/account/settings/explore-pictures','MyVideoController@ExplorePicture')->name('account-explore-pictures');

    Route::get('/account/settings/explore-templates','MyVideoController@ExploreTemplate')->name('account-explore-templates');

    //module for editing templates (Explore Templates)
    Route::post('/account/explore-templates/editMainFrame', 'MyVideoController@editMainFrame')->name('editMainFrame');

    Route::post('/account/explore-templates/editMiddleFrame', 'MyVideoController@editMiddleFrame')->name('editMiddleFrame');

    Route::post('/account/explore-templates/editEndFrame', 'MyVideoController@editEndFrame')->name('editEndFrame');

    //module for editing voice over selection
    Route::post('/account/explore-voice-overs/editVoice', 'MyVideoController@updateVoiceOvers')->name('account-update-voiceovers');

    Route::post('/account/explore-music/editMusic', 'MyVideoController@updateMusic')->name('account-update-music');

    //Standard Video System Steps
//    Route::get('/account/preferences/video-system/storePics/{file}','MyVideoController@storePics');

    Route::get('/account/make-video/video-system/1','MyVideoController@VideoSystemPictures')->name('account-video-system-pictures');

    Route::get('/account/make-video/video-system/2','MyVideoController@VideoSystemScript')->name('account-video-system-script');

    Route::get('/account/make-video/video-system/3','MyVideoController@VideoSystemTemplate')->name('account-video-system-template');

    Route::get('/account/make-video/video-system/4','MyVideoController@VideoSystemVoice')->name('account-video-system-music');

    Route::get('/account/make-video/video-system/5','MyVideoController@VideoSystemFinish')->name('account-video-system-finish');

    Route::post('/account/video-system/processStep1', 'MyVideoController@VideoSystemProcessStep1')->name('account-video-system-processStep1');

    Route::post('/account/video-system/processStep2', 'MyVideoController@VideoSystemProcessStep2')->name('account-video-system-processStep2');

    Route::post('/account/video-system/processStep3', 'MyVideoController@VideoSystemProcessStep3')->name('account-video-system-processStep3');

    Route::post('/account/video-system/processStep4', 'MyVideoController@VideoSystemProcessStep4')->name('account-video-system-processStep4');

    Route::post('/account/video-system/processStep5', 'MyVideoController@VideoSystemProcessStep5')->name('account-video-system-processStep5');

    //Premium Video Order System Steps
    Route::get('/account/premium/video-system/1','MyVideoController@PremiumVideoSystemPictures')->name('account-premium-video-system-pictures');

    Route::get('/account/premium/video-system/2','MyVideoController@PremiumVideoSystemScript')->name('account-premium-video-system-script');

    Route::get('/account/premium/video-system/3','MyVideoController@PremiumVideoSystemTemplate')->name('account-premium-video-system-template');

    Route::get('/account/premium/video-system/4','MyVideoController@PremiumVideoSystemVoice')->name('account-premium-video-system-music');

    Route::get('/account/premium/video-system/5','MyVideoController@PremiumVideoSystemStoryboard')->name('account-premium-video-system-storyboard');

    Route::post('/account/premium-video-system/processStep1', 'MyVideoController@PremiumVideoSystemProcessStep1')->name('account-premium-video-system-processStep1');

    Route::post('/account/premium-video-system/processStep2', 'MyVideoController@PremiumVideoSystemProcessStep2')->name('account-premium-video-system-processStep2');

    Route::post('/account/premium-video-system/processStep3', 'MyVideoController@PremiumVideoSystemProcessStep3')->name('account-premium-video-system-processStep3');

    Route::post('/account/premium-video-system/processStep4', 'MyVideoController@PremiumVideoSystemProcessStep4')->name('account-premium-video-system-processStep4');

    Route::post('/account/premium-video-system/processStep5', 'MyVideoController@PremiumApproveStoryboard')->name('account-premium-video-system-processStep5');

    //for processes done on the Explore Section of the Account Dashboard
    Route::post('/account/explore-pictures/postImages','MyVideoController@postExplorePictures')->name('account-explore-picture-postImages');

//    Route::post('/account/explore-pictures/postImages','MyVideoController@postExplorePictures')->name('account-explore-picture-postImages');

    Route::get('/account/generic-video-order','MyVideoController@GenericVideoOrder')->name('account-generic-video-order');

    Route::get('/account/standard-video-order','MyVideoController@StandardVideoOrder')->name('account-standard-video-order');

    Route::get('/account/premium-video-order','MyVideoController@PremiumVideoOrder')->name('account-premium-video-order');

    //procoess for Generic Video Order
    // Route::post('/account/getGenericVideo', 'MyVideoController@getGenericVideo')->name('getGenericVideo');
    Route::get('/account/getGenericVideo', 'MyVideoController@getGenericVideo')->name('getGenericVideo');

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

    //process to save to Invoice, Billing Details and other edits for Premium Video
    Route::post('/account/postVideoOrder', 'MyVideoController@postVideoOrder')->name('postVideoOrder');

    //for posting data for editing of My Account details
    Route::post('/userLogout', 'Auth\LoginController@userLogout')->name('userLogout');

    //routing for editing the User Details under My Account section
    Route::post('/editAccount', 'MyAccountController@editAccount')->name('editAccount');

    //routing for editing the User Details under My Account section
    Route::post('/editInvoice', 'MyAccountController@editInvoice')->name('editInvoice');

    //route for editing the Subscription section under My Account section
    Route::post('/account/editSubscription', 'MyAccountController@editSubscription')->name('editSubscription');

    //for getting the Invoice Details
    Route::get('/getInvoiceDetails/{vidid}', 'MyAccountController@getInvoiceDetails');

    //for generating PDF Documents
    Route::post('/account/getInvoicePDF', 'MyAccountController@getInvoicePDF')->name('getInvoicePDF');

    //option to send to Email the Invoice
    Route::post('/account/emailInvoice', 'MyAccountController@emailInvoice')->name('emailInvoice');

    //update Surge Offer in Video Tracker
    Route::post('/account/updateSurgeOffer', 'MyAccountController@updateSurgeOffer')->name('account-update-surge');

    //get SurgeDetails
    Route::get('getSurgeDetails/{vidid}', 'MyAccountController@getSurgeDetails');

    //update Surge Per Video
    Route::post('/account/updateSurgeVideo', 'MyAccountController@updateSurgeVideo')->name('account-update-surge-video');
//});

    //for removing Main Image from the dropZone container
    Route::get('/imageMainDelete/{mainImage}', 'RegisterController@imageMainDelete');

    //for removing Logo Image from the dropZone container
    Route::get('/imageLogoDelete/{logoImage}', 'RegisterController@imageLogoDelete');

    //for uploading standard images in dropZone container
    Route::post('/uploadStandardImage', 'MyVideoController@uploadStandardImage')->name('uploadStandardImage');

    //for removing Images from DropBox container
    Route::get('/deleteStandardImage/{simage}/{img}', 'MyVideoController@deleteStandardImage');


    //for Direct Upload
    Route::get('/account/getDirectUpload', 'MyVideoController@getDirectUpload')->name('getDirectUpload');

    Route::post('/account/direct-upload/postdata', 'MyVideoController@postDirect')->name('direct-post-details');

    //for uploading standard images in dropZone container
    Route::post('/account/uploadDirectImage', 'MyVideoController@uploadDirectImage')->name('uploadDirectImage');

    //for removing Images from DropBox container
    Route::get('/deleteDirectImage/{simage}/{img}', 'MyVideoController@deleteDirectImage');


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

    //for uploading of MainImageFile using dropZone
    Route::post('/uploadMainImage', 'RegisterController@uploadMainImage')->name('uploadMainImage');

    //for uploading of MainImageFile using dropZone
    Route::post('/uploadLogoImage', 'RegisterController@uploadLogoImage')->name('uploadLogoImage');

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

    //maintenance of Content Pages
    Route::get('/TermsCondition', 'ContentController@getTermsCondition')->name('getTermsCondition');

    Route::get('/CopyrightTerms', 'ContentController@getCopyrightTerms')->name('getCopyrightTerms');

    Route::get('/PrivacyTerms', 'ContentController@getPrivacyTerms')->name('getPrivacyTerms');

    Route::get('/About', 'ContentController@getAbout')->name('getAbout');

    Route::post('/updateContent', 'ContentController@updateContent')->name('updateContent');

    Route::get('/videoOrder', 'AdminController@videoOrder');

    //get Video Details
    Route::get('/getVideoDetails/{id}', 'OrderController@getVideoDetails')->name('getVideoDetails');

    //post Video Progress
    Route:: post('/postVideoProgress', 'OrderController@postVideoProgress')->name('postVideoProgress');

    //for displaying list of agents in the production portal
    Route:: get('/list-agents', 'AgentController@listAgents')->name('list-agents');

    //to view video materials uploaded by a particular client
    Route:: get('/viewMaterials/{id}', 'AgentController@viewMaterials')->name('viewMaterials');

    //to view video materials for Standard Video
    Route:: get('/viewStandardVideoMaterials/{userid}/{id}', 'OrderController@viewStandardVideoMaterials')->name('viewStandardVideoMaterials');

    //to view video materials for Standard Video
    Route:: get('/viewPremiumVideoMaterials/{userid}/{id}', 'OrderController@viewPremiumVideoMaterials')->name('viewPremiumVideoMaterials');

    //to view Premium Video System
    Route:: get('/account/getPremiumVideoSystem/{id}', 'MyVideoController@getPremiumVideoSystem')->name('getPremiumVideoSystem');




//});

//Route::get('/voice/upload', 'FileController@createVoice')->name('showUploadVideo');

//for User Profile
//Route::post('user/update/{id}', 'UserController@update')->name('agents.update');











