<?php

namespace App\Http\Controllers;

use App\Agent;
use App\AgentInvoice;
use App\User;
use App\State;
use App\Suburb;
use App\FAQ;
use App\AgentEmail;
use App\AgentBroadcast;
use App\AgentPreferences;
use App\AgentTemplate;
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
        $email = Input::get('email');
        $details = Agent::where('email', $email)->first();
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.get-started',compact('email', 'details', 'states', 'groups', 'agencies'));
    }

    public function getStep1(){
        $email = Input::get('email');
        $details = Agent::where('email', $email)->first();
        $groups = Agent::distinct()->get(['group']);
        $agencies = Agent::distinct()->get(['name_agency']);
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.register.register-step1',compact('email', 'details', 'states', 'groups', 'agencies'));
    }

    public function getStep2(){

        return view('frontend.register.register-step2');
    }

    public function getStep3(){

        $suburbs = Suburb::distinct(['suburb', 'post_code'])
                        ->whereNotNull('suburb')
                        ->whereNotNull('post_code')
                        ->orderBy('suburb', 'ASC')
                        ->get();
//        dd($suburbs);
        return view('frontend.register.register-step3', compact('suburbs'));
    }

    public function getStep4(){

        $email = Session::get('email_add');
        $details = Agent::where('email', $email)->first();
        $agent = Session::get('agent_arr');
        $user_id = Session::get('userId');
//        dd($agent);
        return view('frontend.register.register-step4', compact('details', 'agent', 'user_id'));
    }

    public function processStep2(Request $request){

        $userId = Session::get('userId');

        $this->validate($request, [
           'mainImage' => 'required|image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048',
           'mainImage2' => 'image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048',
           'mainImage3' => 'image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048',
           'logoImage' => 'required|image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048'
        ]);

        //for creating subfolder for a particular client
        $path = public_path('storage\client_images\\' . $userId . '\\');
        if(!File::exists($path)){
            File::makeDirectory($path, 0775, true);
        }

        //move to folder if there is file uploaded for Main Image
        if($file = $request->hasFile('mainImage'))
        {
            //for Main Image
            $mainImage = $request->file('mainImage');
            $fnameMainImage = time() . '_' . $mainImage->getClientOriginalName();

            $mainImage->move($path, $fnameMainImage);
        }

        //move to folder if there is file uploaded for Main Image 2 (Optional)
        if($file = $request->hasFile('mainImage2'))
        {
            //for Main Image 2 (Optional)
            $mainImage2 = $request->file('mainImage2');
            $fnameMainImage2 = time() . '_' . $mainImage2->getClientOriginalName();

            $mainImage2->move($path, $fnameMainImage2);
        }

        //move to folder if there is file uploaded for Main Image 3 (Optional)
        if($file = $request->hasFile('mainImage3'))
        {
            //for Main Image 3 (Optional)
            $mainImage3 = $request->file('mainImage3');
            $fnameMainImage3 = time() . '_' . $mainImage3->getClientOriginalName();

            $mainImage3->move($path, $fnameMainImage3);
        }

        //for uploading of logo
        if($file = $request->hasFile('logoImage'))
        {
            //for Main Image 3 (Optional)
            $logoImage = $request->file('logoImage');
            $fnamelogoImage = 'logo_' . $userId .  '_' . $logoImage->getClientOriginalName();

            $logoImage->move($path, $fnamelogoImage);
        }

        //for main frame template selection
        $mainFrameSelections = Input::get('main_frame');
        if($mainFrameSelections != null )
            $MFboxes = implode(',', $mainFrameSelections);

        //for middle frame template selection
        $middleFrameSelections = Input::get('middle_frame');
        if($middleFrameSelections != null )
            $MidFboxes = implode(',', $middleFrameSelections);

        //for end frame template selection
        $EndFrameSelections = Input::get('end_frame');
        if($EndFrameSelections != null )
            $EndFboxes = implode(',', $EndFrameSelections);

        //for capturing state of randomise text in middle frame
        $stateRandomiseMF = Input::get('chkrandomiseMF');
        if($stateRandomiseMF == null)
            $chkRandomiseMF = 0;
        else
            $chkRandomiseMF = 1;

        //for capturing state of randomise text in end frame
        $stateRandomiseEF = Input::get('chkrandomiseEF');
        if($stateRandomiseEF == null)
            $chkRandomiseEF = 0;
        else
            $chkRandomiseEF = 1;

        //for voice format selection
        $voiceSelection = Input::get('voiceSelection');
        if($voiceSelection != null )
            $voiceboxes = implode(',', $voiceSelection);


        //for music file format selection
        $musicSelection = Input::get('musicSelection');
        if($musicSelection != null )
            $musicboxes = implode(',', $musicSelection);


        $template_arr = array(
            'mainImage' => $fnameMainImage,
            'extra_image1' => $fnameMainImage2,
            'extra_image2' => $fnameMainImage3,
            'logo' => $fnamelogoImage,
            'main_frame_template' => Input::get('stateMainFrame'),
            'main_frame_template_format' => $MFboxes,
            'main_frame_colours' => Input::get('stateMainFrameColour'),
            'main_frame_colours_sub' => Input::get('stateMainFrameColourSub'),
            'middle_frame_template' => Input::get('stateMiddleFrame'),
            'middle_frame_template_format' => $MidFboxes,
            'middle_frame_colours' => Input::get('stateMiddleFrameColour'),
            'middle_frame_colours_sub' => Input::get('stateMiddleFrameColourSub'),
            'end_frame_template' => Input::get('stateEndFrame'),
            'end_frame_template_format' => $EndFboxes,
            'end_frame_colours' => Input::get('stateEndFrameColour'),
            'end_frame_colours_sub' => Input::get('stateEndFrameColourSub'),
            'video_frame_name' => Input::get('videoName'),
            'video_frame_mobile' => Input::get('videoMobile'),
            'video_frame_web_emailadd' => Input::get('videoEmailAdd'),
            'video_frame_agency_name' => Input::get('videoAgencyName'),
            'video_frame_content' => Input::get('videoContent'),
            'randomise_statement_mf' => $chkRandomiseMF,
            'video_middle_frame_statement' => Input::get('statementMF'),
            'randomise_statement_ef' => $chkRandomiseEF,
            'video_end_frame_statement' => Input::get('statementEF'),
            'voice_format' => Input::get('stateVoiceFormat'),
            'voice_file_selection' => $voiceboxes,
            'music_style' => Input::get('stateMusicStyle'),
            'music_file_format' => $musicboxes

        );
        AgentTemplate::create($template_arr);
        return redirect()->route('get-started-step3');

    }

    public function processStep3()
    {
        $userId = Session::get('userId');

        $surge_offer = Input::get('surgeoffer');
        $broadcast_status = Input::get('broadcast_status');
        $email_list = Input::get('emails_arr');
        $suburb_list = Input::get('areas_arr');

        //for Surge Offer Preferences Section
        $surge_arr = array(
            'agent_ID' => $userId,
            'surge_offer_option' => $surge_offer[0],
            'broadcast_agent' => $broadcast_status
        );
        AgentPreferences::create($surge_arr);

        //for Email Distribution List
        $emails = explode(',',$email_list);

        if($email_list != null) {
            AgentPreferences::where('agent_ID', $userId)->update([
                'email_distribution' => 1
            ]);

            for ($i=0; $i<count($emails); $i++){
                $email_arr = array(
                    'agent_ID' => $userId,
                    'email' => $emails[$i],
                );
                AgentEmail::create($email_arr);
            }
        }

        $areas = explode(',',$suburb_list);
        if($suburb_list != null) {
            for ($i=0; $i<count($areas); $i++){
                $broadcast_arr = array(
                    'agent_ID' => $userId,
                    'suburb' => $areas[$i],
                );
                AgentBroadcast::create($broadcast_arr);
            }
        }

        return redirect()->route('get-started-step4');
    }

    public function stateAjaxUser($state)
    {
        $suburbs = Suburb::where('state', $state)->pluck("suburb");
        return json_encode($suburbs);
    }


    //function after going through the registration steps
    public function processStep4(){

        //return view('frontend.pages.register-step4');
        $email = Session::get('email_add');
        $passwrd = Session::get('passwrd');

        $userId = Session::get('userId');

        $subscription1 = Input::get('subscription1');

        foreach($subscription1 as $sub){
            if($sub === 'Casual'){
                $subscription_type = $sub;
                $storage_plan = '$11';
            }
            else if($sub === 'Basic'){
                $subscription_type = $sub;
                $storage_plan = '$33';
            }
            else if($sub === 'Standard') {
                $subscription_type = $sub;
                $storage_plan = '$66';
            }
            else if($sub === 'Premium') {
                $subscription_type = $sub;
                $storage_plan = '$99';
            }
        }

        $payment_arr = array(
          'agent_ID' => $userId,
          'subscription_type' => $subscription_type,
          'storage_plan' => $storage_plan,
          'invoice_to' => Input::get('person_name'),
          'address' => Input::get('invoice_address'),
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

        if(Auth::check($credentials)) {
            return redirect()->route('account-make-video');
        }
        Session::flush();

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
    public function getFAQAjax($question){
        $faq = FAQ::where('ID', $question)->first();
        return json_encode($faq);
    }

    //for sending FAQ email to help@revid.com.au
    public function sendFAQEmail($recipient, $message){
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
     * @param  \Illuminate\Http\Request  $request
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

        if($modeAction === 'edit'){
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
        }
        else
        {
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
        }

        $fullname = Input::get('firstname') .  ' ' . Input::get('lastname');
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
        Session::put('agent_arr', $agent_arr);


        return redirect()->route('get-started-step2');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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

        $fullname = Input::get('firstname') .  ' ' . Input::get('lastname');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
