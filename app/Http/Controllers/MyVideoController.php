<?php

namespace App\Http\Controllers;

use App\Agent;
use App\AgentPreferences;
use App\User;
use App\AgentInvoice;
use App\AgentGeneric;
use App\AgentPremium;
use App\AgentStandard;
use App\AgentBilling;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Integer;

class MyVideoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        $invoice = AgentInvoice::where('email', $email)->first();
        return view('frontend.pages.my-videos', compact('fullname', 'passwd', 'agent', 'invoice'));
    }
    
    public function VideoTracker()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video.video-tracker', compact('fullname', 'passwd', 'agent'));
    }
    
    
    public function VoiceOvers()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video.voice-overs', compact('fullname', 'passwd', 'agent'));
    }

    public function ExplorePicture()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.explore-picture', compact('fullname', 'passwd', 'agent'));
    }

    public function GenericVideoOrder()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video.generic-video-order', compact('fullname', 'agent'));
    }


    public function StandardVideoOrder()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video.standard-video-order', compact('fullname', 'agent'));
    }


    public function PremiumVideoOrder()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video.premium-video-order', compact('fullname', 'agent'));
    }


    public function getGenericVideo()
    {
        $user_id = Auth::user()->id;
        $url = Input::get('url_generic');

        $url_arr = array(
            'agent_ID' => $user_id,
            'url_address' => $url
        );

        $uid = AgentGeneric::create($url_arr);
        $urlId = $uid->id;

        $urldetail = AgentGeneric::where('ID', $urlId)->first();
        $preference = AgentPreferences::where('agent_ID', $user_id)->first();
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;

        $email_list = $preference->email_distribution;
        $broadcast_agent = $preference->broadcast_agent;
        $surge = $preference->surge_offer_option;

        if($email_list == 1)
            $cost_email_list = 5;
        else
            $cost_email_list = 0;

        if($broadcast_agent == 1)
            $cost_broadcast_agent = 5;
        else
            $cost_broadcast_agent = 0;

        if($surge === 'Always Surge')
            $cost_surge = 15;
        else if($surge === 'Always Rush')
            $cost_surge = 45;
        else
            $cost_surge = 0;

        $cost_total_preference = $cost_email_list + $cost_broadcast_agent;
        $cost_generic_video = 75;
        $cost_extra = 0;
        $total_cost = $cost_generic_video + $cost_surge + $cost_total_preference + $cost_extra;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video.generic-video-order', compact('fullname',  'agent', 'urldetail',
                    'preference', 'cost_generic_video', 'cost_total_preference', 'cost_surge', 'cost_extra', 'total_cost'));

    }


    public function getStandardVideo()
    {
        $user_id = Auth::user()->id;
//        $url = Input::get('url_generic');

        $url_arr = array(
            'agent_ID' => $user_id,
//            'url_address' => $url
        );

        $uid = AgentStandard::create($url_arr);
        $urlId = $uid->id;

        $preference = AgentPreferences::where('agent_ID', $user_id)->first();
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;

        $email_list = $preference->email_distribution;
        $broadcast_agent = $preference->broadcast_agent;
        $surge = $preference->surge_offer_option;

        if($email_list == 1)
            $cost_email_list = 5;
        else
            $cost_email_list = 0;

        if($broadcast_agent == 1)
            $cost_broadcast_agent = 5;
        else
            $cost_broadcast_agent = 0;

        if($surge === 'Always Surge')
            $cost_surge = 15;
        else if($surge === 'Always Rush')
            $cost_surge = 45;
        else
            $cost_surge = 0;

        $cost_total_preference = $cost_email_list + $cost_broadcast_agent;
        $cost_standard_video = 105;
        $cost_extra = 0;
        $total_cost = $cost_standard_video + $cost_surge + $cost_total_preference + $cost_extra;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile', 'suburb', 'state', 'postcode'])->first();
        return view('frontend.pages.video.standard-video-order', compact('fullname',  'agent', 'urlId', 'preference',
                    'cost_standard_video', 'cost_total_preference', 'cost_surge', 'cost_extra', 'total_cost'));

    }


    public function getPremiumVideo()
    {
        $user_id = Auth::user()->id;
        $url = Input::get('url_premium');

        $url_arr = array(
            'agent_ID' => $user_id,
            'url_address' => $url
        );

        $uid = AgentPremium::create($url_arr);
        $urlId = $uid->id;

        $urldetail = AgentPremium::where('ID', $urlId)->first();
        $preference = AgentPreferences::where('agent_ID', $user_id)->first();
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;

        $email_list = $preference->email_distribution;
        $broadcast_agent = $preference->broadcast_agent;
        $surge = $preference->surge_offer_option;

        if($email_list == 1)
            $cost_email_list = 5;
        else
            $cost_email_list = 0;

        if($broadcast_agent == 1)
            $cost_broadcast_agent = 5;
        else
            $cost_broadcast_agent = 0;

        if($surge === 'Always Surge')
            $cost_surge = 15;
        else if($surge === 'Always Rush')
            $cost_surge = 45;
        else
            $cost_surge = 0;

        $cost_total_preference = $cost_email_list + $cost_broadcast_agent;
        $cost_premium_video = 375;
        $cost_extra = 0;
        $total_cost = $cost_premium_video + $cost_surge + $cost_total_preference + $cost_extra;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile', 'suburb', 'state', 'postcode'])->first();
        return view('frontend.pages.video.premium-video-order', compact('fullname',  'agent', 'urldetail', 'preference',
            'cost_premium_video', 'cost_total_preference', 'cost_surge', 'cost_extra', 'total_cost'));

    }


    public function postGenericVideo(){

        $user_id = Auth::user()->id;
        $url = Input::get('url_generic');
        $videoid = Input::get('videonumber');

        $status_email_distribution = Input::get('emailist');
        $status_broadcast = Input::get('broadcast');

        if($status_email_distribution === 'On')
            $email_status = 1;
        else
            $email_status = 0;

        if($status_broadcast === 'On')
            $broadcast_status = 1;
        else
            $broadcast_status = 0;

        $total_cost_video = Input::get('total_cost');
        $ldate = date('Y-m-d H:i:s');

        AgentGeneric::where('ID', $videoid)->update([
            'url_address' => $url,
            'total_cost' => $total_cost_video,
            'apply_driveby' => Input::get('apply_driveby'),
            'apply_lookfirst' => Input::get('apply_lookfirst'),
        ]);

        AgentPreferences::where('agent_ID', $user_id)->update([
            'surge_offer_option' => Input::get('surgeoffer'),
            'email_distribution' => $email_status,
            'broadcast_agent' => Input::get('broadcast')
        ]);

        $cost_arr = array(
            'agent_ID' => $user_id,
            'video_id' => $videoid,
            'video_type' => 'Standard',
            'video_cost' => Input::get('cost_generic_video'),
            'surge_cost' => Input::get('cost_surge'),
            'preferences_cost' => Input::get('cost_preferences'),
            'extra_cost' => Input::get('cost_extra'),
            'total_cost' => $total_cost_video,
            'to_bill' => 1,
            'billing_date' => $ldate
        );

        AgentBilling::create($cost_arr);

        return redirect()->route('account-home');

    }


    public function postStandardVideo(){

        $user_id = Auth::user()->id;
//        $url = Input::get('url_generic');
        $videoid = Input::get('videonumber');

        $status_email_distribution = Input::get('emailist');
        $status_broadcast = Input::get('broadcast');

        if($status_email_distribution === 'On')
            $email_status = 1;
        else
            $email_status = 0;

        if($status_broadcast === 'On')
            $broadcast_status = 1;
        else
            $broadcast_status = 0;

        $total_cost_video = Input::get('total_cost');
        $ldate = date('Y-m-d H:i:s');

        AgentStandard::where('ID', $videoid)->update([
//            'url_address' => $url,
            'total_cost' => $total_cost_video,
            'apply_driveby' => Input::get('apply_driveby'),
            'apply_lookfirst' => Input::get('apply_lookfirst'),
        ]);

        AgentPreferences::where('agent_ID', $user_id)->update([
            'surge_offer_option' => Input::get('surgeoffer'),
            'email_distribution' => $email_status,
            'broadcast_agent' => Input::get('broadcast')
        ]);

        $cost_arr = array(
            'agent_ID' => $user_id,
            'video_id' => $videoid,
            'video_type' => 'Standard',
            'video_cost' => Input::get('cost_standard_video'),
            'surge_cost' => Input::get('cost_surge'),
            'preferences_cost' => Input::get('cost_preferences'),
            'extra_cost' => Input::get('cost_extra'),
            'total_cost' => $total_cost_video,
            'to_bill' => 1,
            'billing_date' => $ldate
        );

        AgentBilling::create($cost_arr);

        return redirect()->route('account-home');

        //take note that these should redirect to the AI Page (Standard Video System - Step 1)

    }


    public function postPremiumVideo(){

        $user_id = Auth::user()->id;
        $url = Input::get('url_generic');
        $videoid = Input::get('videonumber');

        $status_email_distribution = Input::get('emailist');
        $status_broadcast = Input::get('broadcast');

        if($status_email_distribution === 'On')
            $email_status = 1;
        else
            $email_status = 0;

        if($status_broadcast === 'On')
            $broadcast_status = 1;
        else
            $broadcast_status = 0;

        $total_cost_video = Input::get('total_cost');
        $ldate = date('Y-m-d H:i:s');

        AgentPremium::where('ID', $videoid)->update([
            'url_address' => $url,
            'total_cost' => $total_cost_video,
            'apply_driveby' => Input::get('apply_driveby'),
            'apply_lookfirst' => Input::get('apply_lookfirst'),
        ]);

        AgentPreferences::where('agent_ID', $user_id)->update([
            'surge_offer_option' => Input::get('surgeoffer'),
            'email_distribution' => $email_status,
            'broadcast_agent' => Input::get('broadcast')
        ]);

        $cost_arr = array(
            'agent_ID' => $user_id,
            'video_id' => $videoid,
            'video_type' => 'Generic',
            'video_cost' => Input::get('cost_premium_video'),
            'surge_cost' => Input::get('cost_surge'),
            'preferences_cost' => Input::get('cost_preferences'),
            'extra_cost' => Input::get('cost_extra'),
            'total_cost' => $total_cost_video,
            'to_bill' => 0,
            'billing_date' => $ldate
        );

        AgentBilling::create($cost_arr);

        return redirect()->route('account-home');

        //take note that these should redirect to a different page

    }



}
