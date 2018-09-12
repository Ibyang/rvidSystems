<?php

namespace App\Http\Controllers;

use App\Agent;
use App\AgentInvoice;
use App\User;
use App\State;
use App\Suburb;
use App\FAQ;
use App\SocialMedia;
use App\AgentEmail;
use App\AgentBroadcast;
use App\AgentPreferences;
use App\AgentTemplate;
use App\AgencyTemplate;
use App\Content;
use App\voiceFiles;
use App\AutomaticDirectUpload;
use App\topAgencies;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $email = Input::get('email');
//        if($email != null)
//            $details = Agent::where('email', $email)->first();
//        else
//            $details = null;
////        dd($details);
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.get-started', compact('email', 'states', 'groups', 'agencies'));
    }


    public function genericLogin(Request $request)
    {
        
        $groups = Agent::distinct()->orderBy('group', 'ASC')->get(['group']);
        $agencies = Agent::distinct()->orderBy('name_agency', 'ASC')->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        $content = Content::where('ID', 3)->get(['content_text'])->first();

        $url_generic = Input::get('url_generic');

        return view('auth.login', compact('url_generic', 'social', 'groups', 'agencies', 'states', 'content'));
    }


    public function getStarted(Request $request)
    {
        //
        $email = Input::get('email');
        if($email != null)
            $details = Agent::where('email', $email)->first();
        else
            $details = null;
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $social = SocialMedia::where('ID', 1)->first();
        $agent = $request->session()->get('agent_arr');
        return view('frontend.pages.get-started', compact('email', 'details', 'states', 'social', 'groups', 'agencies', 'agent'));
    }

    public function getStep1(Request $request)
    {
        $email = Input::get('email');
        if($email != null)
            $details = Agent::where('email', $email)->first();
        else
            $details = null;
//        dd($details);
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        $agent = $request->session()->get('agent_arr');
//        dd($email);
//        if(isset($details) || $details != null)
            return view('frontend.register.register-step1', compact('email', 'agent', 'details', 'states', 'groups', 'agencies'));
//        else
//            return view('frontend.register.register-step1', compact('email', 'agent', 'states', 'groups', 'agencies'));
    }

    public function getStep2(Request $request)
    {
        //$agent = Session::get('agent_arr');
        $username = preg_replace('/\s/', '', Session::get('fullname'));

        //for creating subfolder for a particular client
        $path = public_path('storage\client_images\\' . $username . '\\general_images\\');

//        if($userId){
//            $template = AgentTemplate::where('agent_ID', $userId)->get()->first();
//        }

//        return view('frontend.register.register-step2', compact('agent', 'template', 'path', 'mainframe_list', 'middleframe_list', 'endframe_list', 'voice_list', 'music_list'));

        $template = $request->session()->get('template');
        $agent = $request->session()->get('agent_arr');

        $agency = $agent['group'];

        if(isset($template))
        {
            // $mainframe_list = explode(',', $template['main_frame_template_format']);
            // $middleframe_list = explode(',', $template['middle_frame_template_format']);
            // $endframe_list = explode(',', $template['end_frame_template_format']);

            $mainframe_list = $template['main_frame_template_format'];
            $endframe_list = $template['end_frame_template_format'];


            $voice_list = explode(',', $template['voice_file_selection']);
            $music_list = explode(',', $template['music_file_format']);
        }

        $agencyname = $agent['name_agency'];

        $agent_website = Agent::where('email', $agent['email'])->get(['website'])->first();

        $temp = AgencyTemplate::where('agency_name', $agency)->first();

<<<<<<< HEAD
        $agencylist = topAgencies::where('agency_name', $agencyname)->get();

        return view('frontend.register.register-step2', compact('agent', 'agent_website', 'template', 'mainframe_list', 'middleframe_list', 'endframe_list', 'voice_list', 'music_list', 'temp', 'path', 'agencylist'));
=======
        return view('frontend.register.register-step2', compact('agent', 'template', 'mainframe_list', 'middleframe_list', 'endframe_list', 'voice_list', 'music_list', 'temp', 'path'));
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

    }

    public function getStep3(Request $request)
    {

        $userId = Session::get('userId');

//        if($userId){
//            $preference = AgentPreferences::where('agent_ID', $userId)->get()->first();
//
//            $emails = AgentEmail::where('agent_ID', $userId)->get();
//            $areas = AgentBroadcast::where('agent_ID', $userId)->get();
//
//        }

        $surge_offer = $request->session()->get('surge_offer');
        $broadcast_status = $request->session()->get('broadcast_status');
        $e_list = $request->session()->get('email_list');
        $area_list = $request->session()->get('suburb_list');

        $emails = explode(',', $e_list);
        $areas = explode(',', $area_list);


        $suburbs = Suburb::distinct(['suburb', 'post_code'])
            ->whereNotNull('suburb')
            ->whereNotNull('post_code')
            ->orderBy('suburb', 'ASC')
            ->get();
//        dd($suburbs);
//        return view('frontend.register.register-step3', compact('suburbs', 'preference', 'emails', 'areas'));
        return view('frontend.register.register-step3', compact('suburbs', 'surge_offer', 'broadcast_status', 'emails', 'areas'));

    }

    public function getStep4()
    {

        $email = Session::get('email_add');
        $details = Agent::where('email', $email)->first();
        $agent = Session::get('agent_arr');
        $subscription = Session::get('subscription');
        $plantype = Session::get('plantype');
        $content = Content::where('ID', 1)->get(['content_text'])->first();

        //details for plan selection
        if($plantype == 'Casual'){
            $plan_arr = array(
                'planName' => 'Casual',
                'planAmt' => '0',
                'automaticAmt' => '149',
                'manualAmt' => '199',
                'customAmt' => '399',
                'freeMonths' => '0'
            );
        } 
        elseif($plantype == 'Standard'){
            $plan_arr = array(
                'planName' => 'Standard',
                'planAmt' => '66',
                'automaticAmt' => '99',
                'manualAmt' => '139',
                'customAmt' => '399',
                'freeMonths' => '2' 
            );
        }
        elseif($plantype == 'Basic'){
            $plan_arr = array(
                'planName' => 'Basic',
                'planAmt' => '0',
                'automaticAmt' => '99',
                'manualAmt' => '139',
                'customAmt' => '399',
                'freeMonths' => '3'
            );
        }
        elseif($plantype == 'Casual'){
            $plan_arr = array(
                'planName' => 'Premium',
                'planAmt' => '0',
                'automaticAmt' => '99',
                'manualAmt' => '139',
                'customAmt' => '399',
                'freeMonths' => '4'

            );
        }

//        $user_id = Session::get('userId');
//
//        if($user_id){
//            $payment = AgentInvoice::where('agent_ID', $user_id)->get()->first();
//        }

//        return view('frontend.register.register-step4', compact('details', 'agent', 'user_id', 'payment'));
        return view('frontend.register.register-step4', compact( 'agent', 'subscription', 'details', 'content', 'plantype', 'plan_arr'));
    }

    public function processStep1(Request $request)
    {

        $this->validate($request, [
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'email',
            'mobile' => 'required',
            'password' => 'min:4|required|confirmed'
        ]);

        $agent_arr = array(
            'firstname' => trim(Input::get('firstname')),
            'lastname' => trim(Input::get('lastname')),
            'email' => Input::get('email'),
            'mobile' => Input::get('mobile'),
            'password' => bcrypt(request()->input('password')),
            'agent_password' => Input::get('password'),
            'group' => Input::get('group'),
            'name_agency' => Input::get('name_agency'),
            //'role_title' => Input::get('role_title'),
            'address' => Input::get('address'),
            'address2' => Input::get('address2'),
            'suburb' => Input::get('suburb'),
            //'postcode' => Input::get('postcode'),
            'state' => Input::get('state'),
            'postcode' => Input::get('postcode')
        );

        $plantype = Input::get('plantype');
        Session::put('agent_arr', $agent_arr);
        Session::put('plantype', $plantype);

        $fullname = Input::get('firstname') . ' ' . Input::get('lastname');
        $passwrd = bcrypt(Input::get('password'));
        $pass_arr = array(
            'name' => $fullname,
            'status' => 'Pending',
            'role' => 'Agent',
            'email' => Input::get('email'),
            'password' => $passwrd,
            'passwd' => Input::get('password')
        );

        //for getting the last inserted ID
//        $user = User::create($pass_arr);
//        $userId = $user->id;

        Session::put('fullname', $fullname);
        Session::put('pass_arr', $pass_arr);
//        Session::put('email_add', Input::get('email'));
//        Session::put('passwrd', $passwrd);
//        Session::put('userId', $userId);


        return redirect()->route('get-started-step2');
    }

    //module to upload MainImage using DropZone
    public function uploadMainImage(Request $request)
    {

        $username = preg_replace('/\s/', '', Session::get('fullname'));

        $temp = $request->session()->get('template');

        //for creating subfolder for a particular client
        // $path = public_path('storage\app\public\client_images\\' . $username . '\\general_images\\');
        $path = 'storage/app/public/client_images/' . $username . '/general_images/';
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true);
        }
        //move to folder if there is file uploaded for Main Image
        if ($file = $request->hasFile('mainImage')) {

            //for Main Image
            $mImage = $request->file('mainImage');
            $fnameMainImage = time() . '_' . $mImage->getClientOriginalName();

            $directory = 'storage/client_images/' . $username . '/general_images/';
//            $directory = 'images/';

            $upload_success = $mImage->move($directory, $fnameMainImage);
//            $upload_success = $mImage->storeAs($directory, $fnameMainImage, 'public');

            Session::put('mainImagePath', $directory);
            Session::put('mainImageFile', $fnameMainImage);

            if($upload_success){
                return response()->json($upload_success, 200);
            }
            else
            {
                return response()->json('error', 400);
            }


        }
        else{
            $fnameMainImage = $temp['main_image'];
        }

    }


    public function imageMainDelete($mainImage)
    {
//        $username = Session::get('fullname');
        $username = preg_replace('/\s/', '', Session::get('fullname'));

        $file = 'storage/app/public/client_images/' . $username . '/general_images/' . $mainImage;
        unlink($file);

        session()->forget('mainImageFile');

    }

    public function uploadLogoImage(Request $request)
    {
//        $username = Session::get('fullname');
        $username = preg_replace('/\s/', '', Session::get('fullname'));

        $temp = $request->session()->get('template');

        //for creating subfolder for a particular client
        // $path = public_path('storage\app\public\client_images\\' . $username . '\\general_images\\');
        $path = 'storage/app/public/client_images/' . $username . '/general_images/';
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true);
        }
        //move to folder if there is file uploaded for Main Image
        if ($file = $request->hasFile('logoImage')) {

            //for Main Image
            $logoImage = $request->file('logoImage');
            $fnamelogoImage = 'logo_' . $logoImage->getClientOriginalName();

            $directory = 'storage/app/public/client_images/' . $username . '/general_images/';
//            $directory = 'images/';

            $upload_success = $logoImage->move($directory, $fnamelogoImage);
//            $upload_success = $mImage->storeAs($directory, $fnameMainImage, 'public');

            Session::put('logoImagePath', $directory);
            Session::put('logoImageFile', $fnamelogoImage);

            if($upload_success){
                return response()->json($upload_success, 200);
            }
            else
            {
                return response()->json('error', 400);
            }

        }
        else{
            $fnameMainImage = $temp['main_image'];
        }

    }


    public function imageLogoDelete($logoImage)
    {
//        $username = Session::get('fullname');
        $username = preg_replace('/\s/', '', Session::get('fullname'));

        $file = 'storage/app/public/client_images/' . $username . '/general_images/' . $logoImage;
        unlink($file);

        session()->forget('logoImageFile');

    }


    public function processStep2(Request $request)
    {

//        $username = Session::get('fullname');
        $username = preg_replace('/\s/', '', Session::get('fullname'));

        $temp = $request->session()->get('template');

       //for creating subfolder for a particular client
<<<<<<< HEAD
       // $path = public_path('storage\app\public\client_images\\' . $username . '\\general_images\\');
       // $path = 'storage/app/public/client_images/' . $username . '/general_images/'; 
       // if (!File::exists($path)) {
       //     File::makeDirectory($path, 0775, true);
       // }
       //move to folder if there is file uploaded for Main Image
       // if ($file = $request->hasFile('mainImage')) {
       //     //for Main Image
       //     $mainImage = $request->file('mainImage');
       //     $fnameMainImage = time() . '_' . $mainImage->getClientOriginalName();

       //     $mainImage->move($path, $fnameMainImage);
       // }
       // else{
       //     $fnameMainImage = $temp['main_image'];
       // }
=======
       $path = public_path('storage\client_images\\' . $username . '\\general_images\\');
       if (!File::exists($path)) {
           File::makeDirectory($path, 0775, true);
       }
       //move to folder if there is file uploaded for Main Image
       if ($file = $request->hasFile('mainImage')) {
           //for Main Image
           $mainImage = $request->file('mainImage');
           $fnameMainImage = time() . '_' . $mainImage->getClientOriginalName();

           $mainImage->move($path, $fnameMainImage);
       }
       else{
           $fnameMainImage = $temp['main_image'];
       }
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

        //move to folder if there is file uploaded for Main Image 2 (Optional)
//        if ($file = $request->hasFile('mainImage2')) {
//            //for Main Image 2 (Optional)
//            $mainImage2 = $request->file('mainImage2');
//            $fnameMainImage2 = time() . '_' . $mainImage2->getClientOriginalName();
//
//            $mainImage2->move($path, $fnameMainImage2);
//        }
//        else{
//            $fnameMainImage2 = $temp['extra_image1'];
//        }

        //move to folder if there is file uploaded for Main Image 3 (Optional)
//        if ($file = $request->hasFile('mainImage3')) {
//            //for Main Image 3 (Optional)
//            $mainImage3 = $request->file('mainImage3');
//            $fnameMainImage3 = time() . '_' . $mainImage3->getClientOriginalName();
//
//            $mainImage3->move($path, $fnameMainImage3);
//        }
//        else{
//            $fnameMainImage3 = $temp['extra_image2'];
//        }

       // for uploading of logo
<<<<<<< HEAD
       // if ($file = $request->hasFile('logoImage')) {
       //     //for Main Image 3 (Optional)
       //     $logoImage = $request->file('logoImage');
       //     $fnamelogoImage = 'logo_' . $logoImage->getClientOriginalName();

       //     $logoImage->move($path, $fnamelogoImage);
       // }
       // else{
       //     $fnamelogoImage = $temp['logo'];
       // }
=======
       if ($file = $request->hasFile('logoImage')) {
           //for Main Image 3 (Optional)
           $logoImage = $request->file('logoImage');
           $fnamelogoImage = 'logo_' . $logoImage->getClientOriginalName();

           $logoImage->move($path, $fnamelogoImage);
       }
       else{
           $fnamelogoImage = $temp['logo'];
       }
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

        //for main frame template selection
        $MainFboxes = Input::get('main_frame');
        if ($MainFboxes != null)
        {
            // $MFboxes = $MainFboxes;
            $MFboxes = implode(',', $MainFboxes);
        }
        else
        {
            $mf_input = array("main-frame-1", "main-frame-2", "main-frame-3", "main-frame-4");
            $MFboxes = array_rand($mf_input, 1);
            // $MFboxes = "main-frame-1";
        }


        //for end frame template selection
        $EFboxes = Input::get('end_frame');
        if ($EFboxes != null)
        {
            // $EndFboxes = $EFboxes;
            $EndFboxes = implode(',', $EFboxes);
        }
        else
        {
            $ef_input = array("end-frame-1", "end-frame-2", "end-frame-3", "end-frame-4");
            $EndFboxes = array_rand($ef_input, 1);
            // $EndFboxes = "end-frame-1";
        }


        $stateVoiceFormat = Input::get('stateVoiceFormat');
        if($stateVoiceFormat == 'Random Voice') {
            //for picking a random voice over to be used on the video
            // $input = array("grant.wav", "luke.wav", "mark.wav", "karin.wav", "louisa.wav", "odette.wav");
            // $voiceboxes = array_rand($input, 1);
            $voiceboxes = "grant.wav";

        }
        else{
            //for voice format selection
            $voiceSelection = Input::get('voiceSelection');
            if ($voiceSelection != null)
            {
                $voiceboxes = implode(',', $voiceSelection);
            }
            else
            {
                $voiceboxes = "grant.wav";
            }
        }


        //for music file format selection
        $stateMusicStyle = Input::get('stateMusicStyle');
        if($stateMusicStyle == 'Random Music Tracks') {
            //for picking a random voice over to be used on the video
            $musicboxes = 'OPUZZ_CP_08_Road_Trip.mp3';

<<<<<<< HEAD
        }
        else{
            //for voice format selection
            $musicSelection = Input::get('musicSelection');
            if ($musicSelection != null)
                $musicboxes = implode(',', $musicSelection);
            else
                $musicboxes = 'OPUZZ_CP_08_Road_Trip.mp3';
        }

        $path2 = '/storage/app/public/client_images/' . $username . '/general_images/';
        $fnameMainImage = Session::get('mainImageFile');
        $fnamelogoImage = Session::get('logoImageFile');
=======
        $path2 = '/storage/client_images/' . $username . '/general_images/';
        // $fnameMainImage = Session::get('mainImageFile');
        // $fnamelogoImage = Session::get('logoImageFile');
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

        $template = array(
            //'agent_ID' => $userId,
            'path' => $path2,
            'main_image' => $fnameMainImage,
//            'extra_image1' => $fnameMainImage2,
//            'extra_image2' => $fnameMainImage3,
            'logo' => $fnamelogoImage,
            'main_frame_template' => Input::get('stateMainFrame'),
            'main_frame_template_format' => $MFboxes,
            'main_frame_colours' => Input::get('stateMainFrameColour'),
            'main_frame_colours_sub' => Input::get('stateMainFrameColourSub'),
            'end_frame_template' => Input::get('stateEndFrame'),
            'end_frame_template_format' => $EndFboxes,
            'end_frame_colours' => Input::get('stateEndFrameColour'),
            'end_frame_colours_sub' => Input::get('stateEndFrameColourSub'),   //temporarily disabled
            'video_frame_name' => Input::get('videoName'),
            'video_frame_mobile' => Input::get('videoMobile'),
            'video_frame_web_emailadd' => Input::get('videoEmailAdd'),
            'video_frame_agency_name' => Input::get('videoAgencyName'),
            'video_frame_content' => Input::get('videoContent'),
            'voice_format' => Input::get('stateVoiceFormat'),
            'voice_file_selection' => $voiceboxes,
            'music_style' => Input::get('stateMusicStyle'),
            'music_file_format' => $musicboxes
        );

        Session::put('template', $template);

        // dd($template);

//        $stateMode = Input::get('modeAction');
//
//        if($stateMode == 'addTemplate') {
//            $template_arr = array(
//                'agent_ID' => $userId,
//                'main_image' => $fnameMainImage,
//                'extra_image1' => $fnameMainImage2,
//                'extra_image2' => $fnameMainImage3,
//                'logo' => $fnamelogoImage,
//                'main_frame_template' => Input::get('stateMainFrame'),
//                'main_frame_template_format' => $MFboxes,
//                'main_frame_colours' => Input::get('stateMainFrameColour'),
//                'main_frame_colours_sub' => Input::get('stateMainFrameColourSub'),
//                'middle_frame_template' => Input::get('stateMiddleFrame'),
//                'middle_frame_template_format' => $MidFboxes,
//                'middle_frame_colours' => Input::get('stateMiddleFrameColour'),
//                'middle_frame_colours_sub' => Input::get('stateMiddleFrameColourSub'),
//                'end_frame_template' => Input::get('stateEndFrame'),
//                'end_frame_template_format' => $EndFboxes,
//                'end_frame_colours' => Input::get('stateEndFrameColour'),
//                'end_frame_colours_sub' => Input::get('stateEndFrameColourSub'),   //temporarily disabled
//                'video_frame_name' => Input::get('videoName'),
//                'video_frame_mobile' => Input::get('videoMobile'),
//                'video_frame_web_emailadd' => Input::get('videoEmailAdd'),
//                'video_frame_agency_name' => Input::get('videoAgencyName'),
//                'video_frame_content' => Input::get('videoContent'),
//                'randomise_statement_mf' => $chkRandomiseMF,
//                'video_middle_frame_statement' => Input::get('statementMF'),
//                'randomise_statement_ef' => $chkRandomiseEF,
//                'video_end_frame_statement' => Input::get('statementEF'),
//                'voice_format' => Input::get('stateVoiceFormat'),
//                'voice_file_selection' => $voiceboxes,
//                'music_style' => Input::get('stateMusicStyle'),
//                'music_file_format' => $musicboxes
//
//            );
//            AgentTemplate::create($template_arr);
//        }
//        else
//        {
//            AgentTemplate::where('ID', $userId)->update([
//                'main_image' => $fnameMainImage,
//                'extra_image1' => $fnameMainImage2,
//                'extra_image2' => $fnameMainImage3,
//                'logo' => $fnamelogoImage,
//                'main_frame_template' => Input::get('stateMainFrame'),
//                'main_frame_template_format' => $MFboxes,
//                'main_frame_colours' => Input::get('stateMainFrameColour'),
//                'main_frame_colours_sub' => Input::get('stateMainFrameColourSub'),
//                'middle_frame_template' => Input::get('stateMiddleFrame'),
//                'middle_frame_template_format' => $MidFboxes,
//                'middle_frame_colours' => Input::get('stateMiddleFrameColour'),
//                'middle_frame_colours_sub' => Input::get('stateMiddleFrameColourSub'),
//                'end_frame_template' => Input::get('stateEndFrame'),
//                'end_frame_template_format' => $EndFboxes,
//                'end_frame_colours' => Input::get('stateEndFrameColour'),
//                'end_frame_colours_sub' => Input::get('stateEndFrameColourSub'),   //temporarily disabled
//                'video_frame_name' => Input::get('videoName'),
//                'video_frame_mobile' => Input::get('videoMobile'),
//                'video_frame_web_emailadd' => Input::get('videoEmailAdd'),
//                'video_frame_agency_name' => Input::get('videoAgencyName'),
//                'video_frame_content' => Input::get('videoContent'),
//                'randomise_statement_mf' => $chkRandomiseMF,
//                'video_middle_frame_statement' => Input::get('statementMF'),
//                'randomise_statement_ef' => $chkRandomiseEF,
//                'video_end_frame_statement' => Input::get('statementEF'),
//                'voice_format' => Input::get('stateVoiceFormat'),
//                'voice_file_selection' => $voiceboxes,
//                'music_style' => Input::get('stateMusicStyle'),
//                'music_file_format' => $musicboxes
//            ]);
//        }

//        User::where('ID', $userId)->update([
//            'logo_user' => $fnamelogoImage
//        ]);

        return redirect()->route('get-started-step3');

    }

    public function processStep3()
    {
        //$userId = Session::get('userId');

        $surge_offer = Input::get('surgeoffer');
        $broadcast_status = Input::get('broadcast_status');
        $email_list = Input::get('emails_arr');
        $suburb_list = Input::get('areas_arr');

        Session::put('surge_offer', $surge_offer);
        Session::put('broadcast_status', $broadcast_status);
        Session::put('email_list', $email_list);
        Session::put('suburb_list', $suburb_list);

//        dd($email_list);


//        $stateMode = Input::get('modeActionPreference');
//
//        if($stateMode === 'addModePreference'){
//            //for Surge Offer Preferences Section
//            $surge_arr = array(
//                'agent_ID' => $userId,
//                'surge_offer_option' => $surge_offer[0],
//                'broadcast_agent' => $broadcast_status
//            );
//            AgentPreferences::create($surge_arr);
//
//            //for Email Distribution List
//            $emails = explode(',', $email_list);
//
//            if ($email_list != null) {
//                AgentPreferences::where('agent_ID', $userId)->update([
//                    'email_distribution' => 1
//                ]);
//
//                for ($i = 0; $i < count($emails); $i++) {
//                    $email_arr = array(
//                        'agent_ID' => $userId,
//                        'email' => $emails[$i],
//                    );
//                    AgentEmail::create($email_arr);
//                }
//            }
//
//            $areas = explode(',', $suburb_list);
//            if ($suburb_list != null) {
//                for ($i = 0; $i < count($areas); $i++) {
//                    $broadcast_arr = array(
//                        'agent_ID' => $userId,
//                        'suburb' => $areas[$i],
//                    );
//                    AgentBroadcast::create($broadcast_arr);
//                }
//            }
//        }
//        elseif($stateMode === 'editModePreference'){
//
//            $emails = Input::get('email_list');
//            $areas = Input::get('suburb_list');
//
//            AgentPreferences::where('agent_ID', $userId)->update([
//                'surge_offer_option' => $surge_offer[0],
//            ]);
//
//            if ($emails != null) {
//
//                AgentEmail::where('agent_ID', $userId)->delete();
//
//                for ($i = 0; $i < count($emails); $i++) {
//                    $email_arr = array(
//                        'agent_ID' => $userId,
//                        'email' => $emails[$i],
//                    );
//                    AgentEmail::create($email_arr);
//                }
//            }
//
//            if ($areas != null) {
//
//                AgentBroadcast::where('agent_ID', $userId)->delete();
//
//                for ($i = 0; $i < count($areas); $i++) {
//                    $email_arr = array(
//                        'agent_ID' => $userId,
//                        'suburb' => $areas[$i],
//                    );
//                    AgentEmail::create($email_arr);
//                }
//            }
//        }


        return redirect()->route('get-started-step4');
    }

    public function stateAjaxUser($state)
    {
        $suburbs = Suburb::where('state', $state)->pluck("suburb");
        return json_encode($suburbs);
    }


    public function groupAgencyAjax($group)
    {
        $agencies = Agent::where('name_agency', 'like', $group . '%')->distinct()->pluck("name_agency");
        return json_encode($agencies);
    }


    public function stateSuburbAgencyAjax($agency)
    {
        $statesuburb = Agent::where('name_agency', $agency)->first();
        return json_encode($statesuburb);
    }


    //function after going through the registration steps
    public function processStep4(Request $request)
    {

        switch ($request->input('action'))
        {
            case 'previousStep':
                // Save model
                $subscription = Input::get('subscription1');
                Session::put('subscription', $subscription);

                return redirect()->route('get-started-step3');

                break;

            case 'accept':
                // Preview model

                $email = Session::get('email_add');
                $passwrd = Session::get('passwrd');

                //getting Session array values
                $agent_arr = $request->session()->get('agent_arr');
                $pass_arr = $request->session()->get('pass_arr');
                $template = $request->session()->get('template');
                $logofilename = $template['logo'];


                $surge_offer = $request->session()->get('surge_offer');
                $broadcast_status = $request->session()->get('broadcast_status');
                $email_list = $request->session()->get('email_list');
                $suburb_list = $request->session()->get('suburb_list');

                //Saving of Step 1 Details
                Agent::create($agent_arr);

                $user = User::create($pass_arr);
                $userId = $user->id;

//                $template['voice_file_selection'] = $rand_voice;
                $template['agent_ID'] = $userId;
                $request->session()->put('template', $template);
//                Session::put('template', $template);

                //Saving of Step 2 Details
                AgentTemplate::create($template);

                User::where('ID', $userId)->update([
                     'logo_user' => $template['logo']
                ]);

                $voice_format = $template['voice_format'];
                if($voice_format == "Random Voice"){

                    $voice_arr = array(
                      'agent_ID' => $userId,
                      'voice_over_name' => $template['voice_file_selection']
                    );
                    voiceFiles::create($voice_arr);
                }


                //Saving of Step 3 Details
                $surge_arr = array(
                    'agent_ID' => $userId,
                    'surge_offer_option' => $surge_offer[0],
                    'broadcast_agent' => $broadcast_status
                );
                AgentPreferences::create($surge_arr);

                //for Email Distribution List
                $emails = explode(',', $email_list);

                if ($email_list != null) {
                    AgentPreferences::where('agent_ID', $userId)->update([
                        'email_distribution' => 1
                    ]);

                    AgentEmail::where('agent_ID', $userId)->delete();

                    for ($i = 0; $i < count($emails); $i++) {
                        $email_arr = array(
                            'agent_ID' => $userId,
                            'email' => $emails[$i],
                        );
                        AgentEmail::create($email_arr);
                    }
                }

                $areas = explode(',', $suburb_list);
                if ($suburb_list != null) {
                    for ($i = 0; $i < count($areas); $i++) {
                        $broadcast_arr = array(
                            'agent_ID' => $userId,
                            'suburb' => $areas[$i],
                        );
                        AgentBroadcast::create($broadcast_arr);
                    }
                }

                //Saving of Step 4 Details
                // $subscription1 = Input::get('subscription1');

                // foreach ($subscription1 as $sub) {
                //     if ($sub === 'Casual') {
                //         $subscription_type = $sub;
                //         $storage_plan = '$11';
                //     } else if ($sub === 'Basic') {
                //         $subscription_type = $sub;
                //         $storage_plan = '$33';
                //     } else if ($sub === 'Standard') {
                //         $subscription_type = $sub;
                //         $storage_plan = '$66';
                //     } else if ($sub === 'Premium') {
                //         $subscription_type = $sub;
                //         $storage_plan = '$99';
                //     }
                // }

                // $payment_arr = array(
                //     'agent_ID' => $userId,
                //     'subscription_type' => $subscription_type,
                //     'storage_plan' => $storage_plan,
                //     'invoice_to' => Input::get('person_name'),
                //     'address' => Input::get('invoice_address'),
                //     'suburb' => Input::get('invoice_suburb'),
                //     'state' => Input::get('postcode'),
                //     'person_name' => Input::get('contact_name'),
                //     'contact_num' => Input::get('mobile'),
                //     'email' => Input::get('email'),
                // );


                $payment_arr = array(
                    'agent_ID' => $userId,
                    'subscription_type' => Input::get('plantype'),
                    'storage_plan' => Input::get('plan_month'),
                    'invoice_to' => Input::get('person_name'),
                    'address' => Input::get('invoice_address'),
                    'suburb' => Input::get('invoice_suburb'),
                    'state' => Input::get('postcode'),
                    'person_name' => Input::get('contact_name'),
                    'contact_num' => Input::get('mobile'),
                    'email' => Input::get('email'),
                );


                AgentInvoice::create($payment_arr);


                $credentials = array(
                    'email' => $email,
                    'password' => $passwrd
                );

                Auth::loginUsingId($userId);

                if (Auth::check($credentials)) {
                    return redirect()->route('account-make-video');
                }
                Session::flush();

                break;

        }

    }

    public function agentPostalAjaxUser($state, $suburb)
    {
        $postcode = Suburb::where('state', $state)
            ->where('suburb', $suburb)
            ->pluck("post_code");
        return json_encode($postcode);
    }


    //for checking Emails
    public function getEmailAjax($email)
    {
        $details = Agent::where('email', $email)->first();
        return json_encode($details);
    }

    //for getting the answer when question is selected for FAQ module
    public function getFAQAjax($question)
    {
        $faq = FAQ::where('ID', $question)->first();
        return json_encode($faq);
    }

    //for sending FAQ email to help@revid.com.au
    public function sendFAQEmail($recipient, $message)
    {
        Mail::to($recipient)->send(new DemoMail());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'email',
            'mobile' => 'required',
            'password' => 'min:4|required|confirmed'
        ]);

        $modeAction = request()->input('modeAction');
        $agentID = request()->input('agentID');

        if ($modeAction === 'edit') {

            $agent = Agent::where('ID', $agentID)->update([
                'firstname' => trim(Input::get('firstname')),
                'lastname' => trim(Input::get('lastname')),
                'email' => Input::get('email'),
                'mobile' => Input::get('mobile'),
                'password' => bcrypt(request()->input('password')),
                'agent_password' => Input::get('password'),
                'group' => Input::get('group'),
                'name_agency' => Input::get('name_agency'),
                //'role_title' => Input::get('role_title'),
                'address' => Input::get('address'),
                'suburb' => Input::get('suburb'),
                //'postcode' => Input::get('postcode'),
                'state' => Input::get('state'),
            ]);

            $agent_arr = array(
                'firstname' => trim(Input::get('firstname')),
                'lastname' => trim(Input::get('lastname')),
                'email' => Input::get('email'),
                'mobile' => Input::get('mobile'),
                'password' => bcrypt(request()->input('password')),
                'agent_password' => Input::get('password'),
                'group' => Input::get('group'),
                'name_agency' => Input::get('name_agency'),
                //'role_title' => Input::get('role_title'),
                'address' => Input::get('address'),
                'suburb' => Input::get('suburb'),
                //'postcode' => Input::get('postcode'),
                'state' => Input::get('state'),
            );

            Session::put('agent_arr', $agent_arr);

        } else {
            $agent_arr = array(
                'firstname' => trim(request()->input('firstname')),
                'lastname' => trim(request()->input('lastname')),
                'group' => request()->input('group'),
                'name_agency' => request()->input('name_agency'),
                'mobile' => request()->input('mobile'),
                'email' => request()->input('email'),
                'password' => bcrypt(request()->input('password')),
                'agent_password' => request()->input('password'),
                'address' => request()->input('address'),
                'state' => request()->input('state'),
                'suburb' => request()->input('suburb')
            );
            Agent::create($agent_arr);

            Session::put('agent_arr', $agent_arr);
        }

        $fullname = Input::get('firstname') . ' ' . Input::get('lastname');
        $passwrd = bcrypt(Input::get('password'));
        $pass_arr = array(
            'name' => $fullname,
            'status' => 'Pending',
            'role' => 'Agent',
            'email' => Input::get('email'),
            'password' => $passwrd,
            'passwd' => Input::get('password')
        );
        $user = User::create($pass_arr);
        $userId = $user->id;

        //for storing values on the Invoice Section
//        $invoice_arr = array(
//            'agent_ID' => $user->id,
//            'invoice_to' => $fullname,
//            'invoice_to_type' => 'Agent',
//            'address' => Input::get('address'),
//            'person_name' => $fullname,
//            'contact_num' => Input::get('mobile'),
//            'email' => Input::get('email'),
//        );
//        AgentInvoice::create($invoice_arr);

        Session::put('email_add', Input::get('email'));
        Session::put('passwrd', $passwrd);
        Session::put('userId', $userId);


        return redirect()->route('get-started-step2');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'email',
            'mobile' => 'required',
            'password' => 'min:4|required|confirmed'
        ]);

        $agent = Agent::where('ID', $id)->update([
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'email' => Input::get('email'),
            'mobile' => Input::get('mobile'),
            'password' => bcrypt(Input::get('password')),
            'agent_password' => Input::get('password'),
            'group' => Input::get('group'),
            'name_agency' => Input::get('name_agency'),
            //'role_title' => Input::get('role_title'),
            'address' => Input::get('address'),
            'suburb' => Input::get('suburb'),
            //'postcode' => Input::get('postcode'),
            'state' => Input::get('state'),
        ]);

        $agent_arr = array(
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'email' => Input::get('email'),
            'mobile' => Input::get('mobile'),
            'password' => bcrypt(Input::get('password')),
            'agent_password' => Input::get('password'),
            'group' => Input::get('group'),
            'name_agency' => Input::get('name_agency'),
            //'role_title' => Input::get('role_title'),
            'address' => Input::get('address'),
            'suburb' => Input::get('suburb'),
            //'postcode' => Input::get('postcode'),
            'state' => Input::get('state'),
        );
        Session::put('agent_arr', $agent_arr);

        $fullname = Input::get('firstname') . ' ' . Input::get('lastname');
        $passwrd = bcrypt(Input::get('password'));
        $pass_arr = array(
            'name' => $fullname,
            'status' => 'Pending',
            'role' => 'Agent',
            'email' => Input::get('email'),
            'password' => $passwrd,
            'passwd' => Input::get('password')
        );
        $user = User::create($pass_arr);
        $userId = $user->id;

        Session::put('email_add', Input::get('email'));
        Session::put('passwrd', $passwrd);
        Session::put('userId', $userId);

        return redirect()->route('get-started-step2');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //for printing documents
    public function getPDFDocument($doc){

        $content = Content::where('ID', $doc)->get(['ID', 'content_text'])->first();

//        dd($content['content_text']);

        $pdf = PDF::loadView('frontend.pages.documents-pdf', compact('content'));

        if($doc == 1)
            return $pdf->download('terms_and_conditions.pdf');
        else if($doc == 2)
            return $pdf->download('copyright.pdf');
        else if($doc == 3)
            return $pdf->download('privacy.pdf');

    }


}
