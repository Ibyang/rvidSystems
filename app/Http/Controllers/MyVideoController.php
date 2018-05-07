<?php

namespace App\Http\Controllers;

use App\Agent;
use App\AgentPreferences;
use App\User;
use App\AgentInvoiceList;
use App\AgentGeneric;
use App\AgentPremium;
use App\AgentStandard;
use App\AgentBilling;
use App\videoProgress;
use App\AgentTemplate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Facades\File;

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
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.my-videos', compact('fullname', 'passwd', 'agent', 'logo_pic'));
    }
    
    public function VideoTracker()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userId = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userId . '/';
        $logo_pic = $path . $logo;

        $awaiting_videos = videoProgress::where('videotype', 'Premium')->get();
        $production_videos = videoProgress::where('videotype', 'Generic')->orWhere('videotype', 'Standard')->get();

        $preference = AgentPreferences::where('agent_ID', $userId)->first();

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-tracker.video-tracker', compact('fullname', 'agent', 'awaiting_videos', 'production_videos', 'preference', 'logo_pic'));

    }

    
    public function VoiceOvers()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $voice = AgentTemplate::where('agent_ID', $userid)->get(['voice_format', 'voice_file_selection'])->first();

        $voice_list = explode(',', $voice->voice_file_selection);
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.voice-overs', compact('fullname', 'passwd', 'agent', 'logo_pic', 'voice', 'voice_list'));
    }

    public function ExploreMusic()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $music = AgentTemplate::where('agent_ID', $userid)->get(['music_style', 'music_file_format'])->first();

        $music_list = explode(',', $music->music_file_format);
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.explore-music', compact('fullname', 'passwd', 'agent', 'logo_pic', 'music', 'music_list'));
    }

    public function ExplorePicture()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $pic = AgentTemplate::where('agent_ID', $userid)->get(['main_image', 'extra_image1', 'extra_image2', 'logo'])->first();

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.explore-picture', compact('fullname', 'passwd', 'agent', 'logo_pic', 'path', 'pic'));
    }

    public function ExploreTemplate()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.explore-templates', compact('fullname', 'passwd', 'agent', 'logo_pic'));
    }


    public function GenericVideoOrder()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.generic-video-order', compact('fullname', 'agent', 'logo_pic'));
    }


    public function StandardVideoOrder()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.standard-video-order', compact('fullname', 'agent', 'logo_pic'));
    }


    public function PremiumVideoOrder()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.premium-video-order', compact('fullname', 'agent', 'logo_pic'));
    }


    public function getGenericVideo()
    {
        $user_id = Auth::user()->id;
        $url_generic = Input::get('url_generic');

        $vidid = (AgentGeneric::max('ID')) + 1;

//        date("Y-m-d H:i:s", strtotime('+3 hours', $now));

        $due_arr = array(
            'num_hrs' => '36 hours',
            'due_date' => date("Y-m-d H:i:s", strtotime('+36 hours'))
        );

//        $url_arr = array(
//            'agent_ID' => $user_id,
//            'url_address' => $url
//        );
//
//        $uid = AgentGeneric::create($url_arr);
//        $urlId = $uid->id;

//        $urldetail = AgentGeneric::where('ID', $urlId)->first();
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
        $logo_pic = Auth::user()->logo_user;

        return view('frontend.pages.video-creator.generic-video-order', compact('fullname',  'agent', 'due_arr', 'url_generic', 'vidid',
                    'preference', 'cost_generic_video', 'cost_total_preference', 'cost_surge', 'cost_extra', 'total_cost', 'logo_pic'));

    }


    public function getStandardVideo()
    {
        $user_id = Auth::user()->id;
//        $url = Input::get('url_generic');

//        $url_arr = array(
//            'agent_ID' => $user_id,
//            'url_address' => $url
//        );

        $vidid = (AgentStandard::max('ID')) + 1;

        $due_arr = array(
            'num_hrs' => '36 hours',
            'due_date' => date("Y-m-d H:i:s", strtotime('+36 hours'))
        );

//        $uid = AgentStandard::create($url_arr);
//        $urlId = $uid->id;

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
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $user_id . '/';
        $logo_pic = $path . $logo;

        return view('frontend.pages.video-creator.standard-video-order', compact('fullname',  'agent', 'due_arr', 'vidid', 'preference',
                    'cost_standard_video', 'cost_total_preference', 'cost_surge', 'cost_extra', 'total_cost', 'logo_pic'));

    }


    public function getPremiumVideo()
    {
        $user_id = Auth::user()->id;
        $url_premium = Input::get('url_premium');
        $vidid = (AgentPremium::max('ID')) + 1;

//        $url_arr = array(
//            'agent_ID' => $user_id,
//            'url_address' => $url
//        );
//
//        $uid = AgentPremium::create($url_arr);
//        $urlId = $uid->id;

//        $urldetail = AgentPremium::where('ID', $urlId)->first();

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
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $user_id . '/';
        $logo_pic = $path . $logo;

        return view('frontend.pages.video-creator.premium-video-order', compact('fullname',  'agent', 'url_premium', 'vidid', 'preference',
            'cost_premium_video', 'cost_total_preference', 'cost_surge', 'cost_extra', 'total_cost', 'logo_pic'));

    }


    public function postVideoOrder()
    {
        $user_id = Auth::user()->id;
        $email = Auth::user()->email;
        $url = Input::get('url');
        $videoid = Input::get('videonumber');
        $videotype = Input::get('videotype');
        $total_cost_video = Input::get('total_cost');
        $surgeoffer = Input::get('surgeoffer');
        $surge_value = $surgeoffer[0];
        $url_address = Input::get('url_address');

        $billdate = date('Y-m-d');

        $status_email_distribution = Input::get('emailist');
        $status_broadcast = Input::get('broadcast');

        $agent = Agent::where('email', $email)->get(['address','suburb', 'state', 'postcode'])->first();

        //store record to corresponding Video Type Table
        if($videotype === 'Generic'){
            $video_desc = "#" . $videoid . " Generic Video Production";
            $video_total_cost = Input::get('cost_generic_video');

            $video_invoice_description = "#" . $videoid . $url;

            $generic_arr = array(
                'agent_ID' => $user_id,
                'url_address' => $url,
                'status' => 'Compiling',
                'apply_driveby' => Input::get('apply_driveby'),
                'apply_lookfirst' => Input::get('apply_lookfirst'),
                'due_date' => Input::get('due_date'),
            );

            AgentGeneric::create($generic_arr);

            //for creating record in the Video Progress table for updating value later..
            $progress_arr = array(
                'video_ID' => $videoid,
                'videotype' => 'Generic',
                'agent_ID' => $user_id,
                'videoAddress' => $url
            );

            videoProgress::create($progress_arr);


        }
        elseif($videotype === 'Standard'){
            $video_desc = "#" . $videoid . " Standard Video Production";
            $video_total_cost = Input::get('cost_standard_video');

            $video_address_standard = Input::get('address') . ' ' . Input::get('suburb') . ' ' . Input::get('state'). Input::get('postcode');
            $video_invoice_description = "#" . $videoid . $video_address_standard;

            $standard_arr = array(
                'agent_ID' => $user_id,
                //'url_address' => $url,
                'videoAddress' => $video_address_standard,
                'status' => 'Compiling',
                'apply_driveby' => Input::get('apply_driveby'),
                'apply_lookfirst' => Input::get('apply_lookfirst'),
                'due_date' => Input::get('due_date'),
            );

            AgentStandard::create($standard_arr);

            //for creating record in the Video Progress table for updating value later..
            $progress_arr = array(
                'video_ID' => $videoid,
                'videotype' => 'Standard',
                'agent_ID' => $user_id,
                'videoAddress' => $video_address_standard
            );

            videoProgress::create($progress_arr);


        }
        elseif($videotype === 'Premium'){
            $video_desc = "#" . $videoid . " Premium Video Production";
            $video_total_cost = Input::get('cost_premium_video');

            $url_premium = Input::get('url_premium');
            $video_invoice_description = "#" . $videoid . $url_premium;

            $premium_arr = array(
                'agent_ID' => $user_id,
                'url_address' => $url,
                'videoAddress' => $url_premium,
                'status' => 'Compiling',
                'apply_driveby' => Input::get('apply_driveby'),
                'apply_lookfirst' => Input::get('apply_lookfirst'),
            );

            AgentPremium::create($premium_arr);

            //for creating record in the Video Progress table for updating value later..
            $progress_arr = array(
                'video_ID' => $videoid,
                'videotype' => 'Premium',
                'agent_ID' => $user_id,
                'video_address' => $url_premium
            );

            videoProgress::create($progress_arr);
        }

        //store record to Invoice Table
        $invoice_arr = array(
            'agent_ID' => $user_id,
            'video_ID' => $videoid,
            'description' => $video_invoice_description,
            'total_amount' => $total_cost_video,
            'billing_date' => $billdate
        );

        AgentInvoiceList::create($invoice_arr);

        //for storing cost of email distribution
        $videocost_arr = array(
            'agent_ID' => $user_id,
            'video_ID' => $videoid,
            'description' => $video_desc,
            'amount' => $video_total_cost,
            'to_bill' => 1,
            'billing_date' => $billdate
        );
        AgentBilling::create($videocost_arr);

        //for storing cost of surge (applicable for Generic and Standard Video Type)
        if($videotype === 'Generic' || $videotype === 'Standard') {
            if ($surge_value === 'Always Rush') {
                $surge_rush_arr = array(
                    'agent_ID' => $user_id,
                    'video_ID' => $videoid,
                    'description' => 'Surge (+$45.00)',
                    'amount' => 45,
                    'to_bill' => 1,
                    'billing_date' => $billdate
                );
                AgentBilling::create($surge_rush_arr);

            } else if ($surge_value === 'Always Surge') {
                $surge_cost_arr = array(
                    'agent_ID' => $user_id,
                    'video_ID' => $videoid,
                    'description' => 'Surge (+$15.00)',
                    'amount' => 15,
                    'to_bill' => 1,
                    'billing_date' => $billdate
                );
                AgentBilling::create($surge_cost_arr);
            }
        }

        if ($status_email_distribution === 'On')
        {
            $email_status = 1;
            $email_cost = 5;

            //for storing cost of email distribution
            $emailcost_arr = array(
                'agent_ID' => $user_id,
                'video_ID' => $videoid,
                'description' => 'Email Distribution (+$5.00)',
                'amount' => $email_cost,
                'to_bill' => 1,
                'billing_date' => $billdate
            );
            AgentBilling::create($emailcost_arr);
        }
        else
            $email_status = 0;

        if($status_broadcast === 'On')
        {
            $broadcast_status = 1;
            $broadcast_cost = 5;

            //for storing cost of email distribution
            $broadcastcost_arr = array(
                'agent_ID' => $user_id,
                'video_ID' => $videoid,
                'description' => 'Broadcast Distribution (+$5.00)',
                'amount' => $broadcast_cost,
                'to_bill' => 1,
                'billing_date' => $billdate
            );
            AgentBilling::create($broadcastcost_arr);
        }
        else
            $broadcast_status = 0;

        if($videotype === 'Generic' || $videotype === 'Standard') {
            AgentPreferences::where('agent_ID', $user_id)->update([
                'surge_offer_option' => $surge_value,
                'email_distribution' => $email_status,
                'broadcast_agent' => $broadcast_status
            ]);
        }
        elseif($videotype === 'Premium'){
            AgentPreferences::where('agent_ID', $user_id)->update([
                'email_distribution' => $email_status,
                'broadcast_agent' => $broadcast_status
            ]);
        }

        return redirect()->route('account-make-video');

    }


    public function postExplorePictures(Request $request){

        $user_id = Auth::user()->id;
        $path = public_path('storage\client_images\\' . $user_id . '\\');

        //move to folder if there is file uploaded for Main Image
        if($file = $request->hasFile('mainImage'))
        {
            //for Main Image
            $mainImage = $request->file('mainImage');
            $fnameMainImage = time() . '_' . $mainImage->getClientOriginalName();

            $mainImage->move($path, $fnameMainImage);
            AgentTemplate::where('agent_ID', $user_id)->update([
                'main_image' => $fnameMainImage,
            ]);

            //delete old file
            $oldFileMainImage = Input::get('oldFileMainImage');
            $filename = public_path().'/storage/client_images/' . $user_id . '/'. $oldFileMainImage;
            \File::delete($filename);

        }

        //move to folder if there is file uploaded for Extra Image
        if($file = $request->hasFile('mainImage2'))
        {
            //for Main Image
            $mainImage2 = $request->file('mainImage2');
            $fnameMainImage2 = time() . '_' . $mainImage2->getClientOriginalName();

            $mainImage2->move($path, $fnameMainImage2);
            AgentTemplate::where('agent_ID', $user_id)->update([
                'extra_image1' => $fnameMainImage2,
            ]);

            //delete old file
            $oldFileMainImage2 = Input::get('oldFileMainImage2');
            $filename = public_path().'/storage/client_images/' . $user_id . '/' . $oldFileMainImage2;
            \File::delete($filename);

        }

        //move to folder if there is file uploaded for Exra Image 2
        if($file = $request->hasFile('mainImage3'))
        {
            //for Main Image
            $mainImage3 = $request->file('mainImage3');
            $fnameMainImage3 = time() . '_' . $mainImage3->getClientOriginalName();

            $mainImage3->move($path, $fnameMainImage3);
            AgentTemplate::where('agent_ID', $user_id)->update([
                'extra_image2' => $fnameMainImage3,
            ]);

            //delete old file
            $oldFileMainImage3 = Input::get('oldFileMainImage3');
            $filename = public_path().'/storage/client_images/' . $user_id . '/' . $oldFileMainImage3;
            \File::delete($filename);

        }

        //move to folder if there is file uploaded for Logo Image
        if($file = $request->hasFile('logoImage'))
        {
            //for Main Image
            $logoImage = $request->file('logoImage');
            $fnameLogoImage = time() . '_' . $logoImage->getClientOriginalName();

            $logoImage->move($path, $fnameLogoImage);
            AgentTemplate::where('agent_ID', $user_id)->update([
                'logo' => $fnameLogoImage,
            ]);

            User::where('id', $user_id)->update([
                'logo_user' => $fnameLogoImage
            ]);

            //delete old file
            $oldLogoImage = Input::get('oldLogoImage');
            $filename = public_path().'/storage/client_images/' . $user_id . '/' . $oldLogoImage;
            \File::delete($filename);

            //return redirect()->route('account-explore-pictures');
        }

        return redirect()->route('account-explore-pictures');

    }

    //for displaying the Premium Video System Details
    public function PremiumVideoDetails() {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.premium-video', compact('fullname', 'agent', 'logo_pic'));
    }

    //for Standard Video System Process
    public function VideoSystemPictures()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-pictures', compact('fullname', 'agent', 'logo_pic'));
    }

    public function VideoSystemScript()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-script', compact('fullname', 'agent', 'logo_pic'));

    }

    public function VideoSystemTemplate()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-template', compact('fullname', 'agent', 'logo_pic'));
    }

    public function VideoSystemVoice()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-voice-music', compact('fullname', 'agent', 'logo_pic'));
    }

    public function VideoSystemFinish()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-finish', compact('fullname', 'agent', 'logo_pic'));
    }




}
