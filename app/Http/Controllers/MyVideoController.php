<?php

namespace App\Http\Controllers;

use App\Agent;
use App\AgentPreferences;
use App\User;
use App\AgentInvoiceList;
use App\AgentVideoOrders;
use App\AgentBilling;
use App\videoProgress;
use App\AgentTemplate;
use App\AgentEmail;
use App\standardVideoPicture;
use App\premiumVideoPicture;
use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $emails = AgentEmail::where('agent_ID', $userid)->get();

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.my-videos', compact('fullname', 'passwd', 'emails', 'agent', 'logo_pic'));
    }

    public function updateEmailList()
    {
        $userId = Auth::user()->id;

        //delete the records
        //AgentEmail::where('agent_ID', $userId)->delete();

        //recreate all the records
        $email_list = Input::get('emails_arr');
//        $email_list = Input::get('emailCurrentList');

//        dd($email_list);
        $emails = explode(',', $email_list);

//        dd($emails);


        if ($email_list != null) {
//            AgentPreferences::where('agent_ID', $userId)->update([
//                'email_distribution' => 1
//            ]);

            for ($i = 0; $i < count($emails); $i++) {
                $email_arr = array(
                    'agent_ID' => $userId,
                    'email' => $emails[$i],
                );
                AgentEmail::create($email_arr);
            }
        }

        return redirect()->route('account-my-videos');
    }

    public function VideoTracker()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userId = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $awaiting_videos = videoProgress::where('videotype', 'Premium')->where('agent_ID', $userId)->get();

//        $production_videos = videoProgress::where('videotype', 'Generic')->orWhere('videotype', 'Standard')->where('agent_ID', $userId)->get();
//        $production_videos = videoProgress::where(function($query) use($userId)  {
//            $query->where('agent_ID', $userId)
//                ->orWhere('videotype', 'Generic')
//                ->orWhere('videotype', 'Standard');
//        });

        $production_videos = videoProgress::where('agent_ID', $userId)
            ->where(function($query){
                $query->where('videotype', 'Generic')
                    ->orWhere('videotype', 'Standard');
            })->get();

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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $voice = AgentTemplate::where('agent_ID', $userid)->get(['voice_format', 'voice_file_selection'])->first();

        $voice_list = explode(',', $voice['voice_file_selection']);
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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $music = AgentTemplate::where('agent_ID', $userid)->get(['music_style', 'music_file_format'])->first();

        $music_list = explode(',', $music['music_file_format']);
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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $path2 = '/storage/register/';

        $template = AgentTemplate::where('agent_ID', $userid)->get(['main_frame_template', 'main_frame_template_format', 'main_frame_colours', 'main_frame_colours_sub',
                                                                    'middle_frame_template', 'middle_frame_template_format', 'middle_frame_colours', 'middle_frame_colours_sub',
                                                                    'end_frame_template', 'end_frame_template_format', 'end_frame_colours', 'end_frame_colours_sub'])->first();

        $mainframe_list = explode(',', $template['main_frame_template_format']);
        $middleframe_list = explode(',', $template['middle_frame_template_format']);
        $endframe_list = explode(',', $template['end_frame_template_format']);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.explore-templates', compact('fullname', 'passwd', 'agent', 'logo_pic', 'mainframe_list', 'middleframe_list', 'endframe_list', 'template', 'path2'));
    }


    public function GenericVideoOrder()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.premium-video-order', compact('fullname', 'agent', 'logo_pic'));
    }


    public function getGenericVideo()
    {
        $user_id = Auth::user()->id;
        $url_generic = Input::get('url_generic');

        $vidid = (AgentVideoOrders::max('ID'));
        if($vidid == NULL)
            $vidid = 1;
        else
            $vidid = (AgentVideoOrders::max('ID')) + 1;

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

        //path for logo pic
        $logo_pic = Auth::user()->logo_user;
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo_pic;



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

        $vidid = (AgentVideoOrders::max('ID'));
        if($vidid == NULL)
            $vidid = 1;
        else
            $vidid = (AgentVideoOrders::max('ID')) + 1;

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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        return view('frontend.pages.video-creator.standard-video-order', compact('fullname',  'agent', 'due_arr', 'vidid', 'preference',
                    'cost_standard_video', 'cost_total_preference', 'cost_surge', 'cost_extra', 'total_cost', 'logo_pic'));

    }


    public function getPremiumVideo()
    {
        $user_id = Auth::user()->id;
        $url_premium = Input::get('url_premium');

        $vidid = (AgentVideoOrders::max('ID'));
        if($vidid == NULL)
            $vidid = 1;
        else
            $vidid = (AgentVideoOrders::max('ID')) + 1;

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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
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
//        $url_address = Input::get('url_address');


        //to store videoID in session
        Session::put('videoID', $videoid);

        $billdate = date('Y-m-d');

        $status_email_distribution = Input::get('emailist');
        $status_broadcast = Input::get('broadcast');

        $agent = Agent::where('email', $email)->get(['address','suburb', 'state', 'postcode'])->first();

        //store record to corresponding Video Type Table
        if($videotype === 'Generic'){
            $video_desc = "#" . $videoid . " Generic Video Production";
            $video_total_cost = Input::get('cost_generic_video');

            $video_invoice_description = "#" . $videoid . ' ' . $url;

            $generic_arr = array(
                'agent_ID' => $user_id,
                'category' => 'Generic',
                'videoAddress' => $url,
                'status' => 'Compiling',
                'apply_driveby' => Input::get('apply_driveby'),
                'apply_lookfirst' => Input::get('apply_lookfirst'),
                'due_date' => Input::get('due_date'),
            );

            AgentVideoOrders::create($generic_arr);

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
            $video_invoice_description = "#" . $videoid . ' ' . $video_address_standard;

            $standard_arr = array(
                'agent_ID' => $user_id,
                'category' => 'Standard',
                'videoAddress' => $video_address_standard,
                'status' => 'Compiling',
                'apply_driveby' => Input::get('apply_driveby'),
                'apply_lookfirst' => Input::get('apply_lookfirst'),
                'due_date' => Input::get('due_date'),
            );

            AgentVideoOrders::create($standard_arr);

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

            //to store videoAddress in session
            Session::put('videoAddress', $url_premium);

            $video_invoice_description = "#" . $videoid . ' ' . $url_premium;

            $premium_arr = array(
                'agent_ID' => $user_id,
                'category' => 'Premium',
                //'url_address' => $url_premium,
                'videoAddress' => $url_premium,
                'status' => 'Compiling',
                'apply_driveby' => Input::get('apply_driveby'),
                'apply_lookfirst' => Input::get('apply_lookfirst'),
                'account_manager' => Input::get('acct_manager'),
                'email' => Input::get('acct_email'),
                'telephone' => Input::get('telephone'),
                'skype' => Input::get('skype'),
            );

            AgentVideoOrders::create($premium_arr);

            //for creating record in the Video Progress table for updating value later..
            $progress_arr = array(
                'video_ID' => $videoid,
                'videotype' => 'Premium',
                'agent_ID' => $user_id,
                'videoAddress' => $url_premium
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

        //for redirection
        if($videotype === 'Generic')
            return redirect()->route('account-make-video');
        else if($videotype === 'Standard')
            return redirect()->route('account-video-system-pictures');
        else if($videotype === 'Premium')
            return redirect()->route('account-premium-video');

    }


    public function postExplorePictures(Request $request){

        $user_id = Auth::user()->id;

        $username = Auth::user()->name;
        $path = public_path('storage\client_images\\' . $username . '\\general_images\\');

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
            $filename = public_path().'/storage/client_images/' . $user_id . '/general_images/'. $oldFileMainImage;
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
            $filename = public_path().'/storage/client_images/' . $user_id . '/general_images/' . $oldFileMainImage2;
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
            $filename = public_path().'/storage/client_images/' . $user_id . '/general_images/' . $oldFileMainImage3;
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
            $filename = public_path().'/storage/client_images/' . $user_id . '/general_images/' . $oldLogoImage;
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
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.premium-video', compact('fullname', 'agent', 'logo_pic'));
    }




    //for Premium Video System
    public function getPremiumVideoSystem($videoid)
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userId = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $premium = AgentVideoOrders::where('ID', $videoid)->get()->first();

        $premium_progress = videoProgress::where('video_ID', $videoid)->get()->first();

        //to store videoID and videoAddress in Session
        Session::put('videoID', $videoid);
        Session::put('videoAddress', $premium['videoAddress']);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.premium-video', compact('fullname',  'agent', 'logo_pic', 'premium', 'premium_progress'));

    }


    //modules for editing Standard Template
    public function editMainFrame()
    {
        $userid = Auth::user()->id;
        $pageName = Input::get('pageName');

        //for main frame template selection
        $mainFrameSelections = Input::get('main_frame');
        if ($mainFrameSelections != null)
            $MFboxes = implode(',', $mainFrameSelections);
        else
            $MFboxes = '';

        AgentTemplate::where('agent_ID', $userid)->update([
            'main_frame_template' => Input::get('stateMainFrame'),
            'main_frame_template_format' => $MFboxes,
            'main_frame_colours' => Input::get('stateMainFrameColour'),
            'main_frame_colours_sub' => Input::get('stateMainFrameColourSub')
        ]);

        if($pageName === 'exploreTemplate')
            return redirect()->route('account-explore-templates');
        elseif($pageName === 'premiumVideoTemplate')
            return redirect()->route('account-premium-video-system-template');
        else
            return redirect()->route('account-video-system-template');
    }


    public function editMiddleFrame()
    {
        $userid = Auth::user()->id;
        $pageName = Input::get('pageName');

        //for middle frame template selection
        $middleFrameSelections = Input::get('middle_frame');
        if ($middleFrameSelections != null)
            $MidFboxes = implode(',', $middleFrameSelections);
        else
            $MidFboxes = '';


        AgentTemplate::where('agent_ID', $userid)->update([
            'middle_frame_template' => Input::get('stateMiddleFrame'),
            'middle_frame_template_format' => $MidFboxes,
            'middle_frame_colours' => Input::get('stateMiddleFrameColour'),
            'middle_frame_colours_sub' => Input::get('stateMiddleFrameColourSub')
        ]);

        if($pageName == 'exploreTemplate')
            return redirect()->route('account-explore-templates');
        elseif($pageName === 'premiumVideoTemplate')
            return redirect()->route('account-premium-video-system-template');
        else
            return redirect()->route('account-video-system-template');
    }


    public function editEndFrame()
    {
        $userid = Auth::user()->id;
        $pageName = Input::get('pageName');

        //for end frame template selection
        $EndFrameSelections = Input::get('end_frame');
        if ($EndFrameSelections != null)
            $EndFboxes = implode(',', $EndFrameSelections);
        else
            $EndFboxes = '';


        AgentTemplate::where('agent_ID', $userid)->update([
            'end_frame_template' => Input::get('stateEndFrame'),
            'end_frame_template_format' => $EndFboxes,
            'end_frame_colours' => Input::get('stateEndFrameColour'),
            'end_frame_colours_sub' => Input::get('stateEndFrameColourSub'),   //temporarily disabled
        ]);

        if($pageName == 'exploreTemplate')
            return redirect()->route('account-explore-templates');
        elseif($pageName === 'premiumVideoTemplate')
            return redirect()->route('account-premium-video-system-template');
        else
            return redirect()->route('account-video-system-template');
    }


    //for Standard Video System Process
    public function VideoSystemPictures()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //$videoid = 20;
        $videoid = Session::get('videoID');

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        //path for uploaded images
        $path2 = '/storage/client_images/' . $fullname . '/standard_pictures/Video' . $videoid . '/';

        $pics = standardVideoPicture::where('agent_iD', $userid)->where('video_ID', $videoid)->get(['ID', 'video_ID', 'effect_style', 'old_filename', 'new_filename']);
        Session::put('pics', $pics);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-pictures', compact('fullname', 'agent', 'logo_pic', 'pics', 'path2', 'userid'));
    }

    public function VideoSystemScript()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //$videoid = 20;
        $videoid = Session::get('videoID');  //retrieving value from session enable this once doing the testing

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        //path for uploaded images
        $path2 = '/storage/client_images/' . $fullname . '/standard_pictures/Video' . $videoid . '/';

        $pics = standardVideoPicture::where('agent_iD', $userid)->where('video_ID', $videoid)->get(['ID', 'video_ID', 'old_filename', 'new_filename', 'statement']);
        Session::put('pics', $pics);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-script', compact('fullname', 'agent', 'logo_pic', 'videoid', 'pics', 'path2'));

    }

    public function VideoSystemTemplate()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $path2 = '/storage/register/';

        $template = AgentTemplate::where('agent_ID', $userid)->get(['main_frame_template', 'main_frame_template_format', 'main_frame_colours', 'main_frame_colours_sub',
            'middle_frame_template', 'middle_frame_template_format', 'middle_frame_colours', 'middle_frame_colours_sub',
            'end_frame_template', 'end_frame_template_format', 'end_frame_colours', 'end_frame_colours_sub'])->first();

        $mainframe_list = explode(',', $template['main_frame_template_format']);
        $middleframe_list = explode(',', $template['middle_frame_template_format']);
        $endframe_list = explode(',', $template['end_frame_template_format']);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-template', compact('fullname', 'agent', 'logo_pic', 'path2', 'template', 'mainframe_list', 'middleframe_list', 'endframe_list'));
    }

    public function VideoSystemVoice()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        //for music
        $music = AgentTemplate::where('agent_ID', $userid)->get(['music_style', 'music_file_format'])->first();
        $music_list = explode(',', $music['music_file_format']);

        //for voice-overs
        $voice = AgentTemplate::where('agent_ID', $userid)->get(['voice_format', 'voice_file_selection'])->first();
        $voice_list = explode(',', $voice['voice_file_selection']);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-voice-music', compact('fullname', 'agent', 'logo_pic', 'music', 'music_list', 'voice', 'voice_list'));
    }

    public function VideoSystemFinish()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;
        $videoid = Session::get('videoID');

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;



        //path for uploaded images
        $path2 = '/storage/client_images/' . $fullname . '/standard_pictures/Video' . $videoid . '/';
        $pics = standardVideoPicture::where('agent_ID', $userid)->where('video_ID', $videoid)->get();

        $cnt_pics = count($pics);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-finish', compact('fullname', 'agent', 'logo_pic', 'path2', 'pics', 'cnt_pics'));
    }

    //process for uploading Image

    public function uploadStandardImage(Request $request)
    {

        $userid = Auth::user()->id;
        $fullname = Auth::user()->name;
        $videoid = Session::get('videoID');

        $sortorder = Input::get('sortorder');
        $duration = Input::get('duration');

        $path = public_path('storage\client_images\\' . $fullname . '\\standard_pictures\\Video' . $videoid . '\\');
        if(!File::exists($path)){
            File::makeDirectory($path, 0775, true);
        }

        //for Standard Images upload using dropZone.js
        if($file = $request->hasFile('file')) {

            $file = $request->file('file');
//            $fname = date('Ym') . $videoid . '_' . $file->getClientOriginalName();
            $fname = $file->getClientOriginalName();

            $directory = 'storage/client_images/' . $fullname . '/standard_pictures/Video' . $videoid . '/';

            $upload_success = $file->move($directory, $fname);


            if($upload_success)
            {
                //create record to store to the database
                $picdetails_arr = array(
                    'agent_ID' => $userid,
                    'video_ID' => $videoid,
                    'old_filename' => $fname,
                    'sort_order' => $sortorder,
                    'duration' => $duration
                );
                standardVideoPicture::create($picdetails_arr);

                return response()->json($upload_success, 200);
            }
            else
            {
                return response()->json('error', 400);
            }

        }

    }


    public function deleteStandardImage($simage)
    {

        $fullname = Auth::user()->name;
        $videoid = Session::get('videoID');

        $uploaded_image = standardVideoPicture::where('old_filename', $simage)->first();

        if (!empty($uploaded_image)) {

            //remove from the Storage
            $file = 'storage/client_images/' . $fullname . '/standard_pictures/Video' . $videoid . '/' . $simage;
            unlink($file);

            //remove from the DB
            $file_image = standardVideoPicture::where('ID', $uploaded_image->ID)->delete();
        }

    }


    //process for the Steps of Ztandard Video System
    public function VideoSystemProcessStep1(Request $request)
    {

        $userid = Auth::user()->id;
        $username = Auth::user()->name;
        $effects = Input::get('transition');
        //$ctr_effects = count($effects);

        //$videoid = 20;  //need to get the value of the video ID generated
        $videoid = $videoid = Session::get('videoID');
        //Session::put('videoID', $videoid);  //store to session; NOTE: TO REMOVE ONCE TESTED FROM VIDEO ORDER PAGE

        $images = Input::get('selectedImages');
        $arr_images = explode(',', $images);

        if ($request->file('image_files')) {
            $ctr = 0;
            foreach($request->file('image_files') as $image)
            {
                if(!empty($image) && ($ctr < count($arr_images))){
                    $path = public_path('storage\client_images\\' . $username . '\\standard_pictures\\Video' . $videoid . '\\');
                    if(!File::exists($path)){
                        File::makeDirectory($path, 0775, true);
                    }

                    $filename = date('Ym') . $videoid . '_' .$image->getClientOriginalName();
                    $image->move($path, $filename);

//                    for($i=0; $i<$ctr_effects; $i++){
                    $fname = date('Ym') . $videoid . '_' . $arr_images[$ctr];
                    //store date to database
                    $picdetails_arr = array(
                        'agent_ID' => $userid,
                        'video_ID' => $videoid,
                        'old_filename' => $fname,
                        'effect_style' => $effects[$ctr],
                    );
                    standardVideoPicture::create($picdetails_arr);
//                    }
                }
                $ctr++;
            }
        }

        videoProgress::where('video_ID', $videoid)->update([
            'picture_progress' => 15
        ]);

        return redirect()->route('account-video-system-script');

    }


    public function VideoSystemProcessStep2(){

        $userid = Auth::user()->id;
        $username = Auth::user()->name;
        $statements = Input::get('selectedStatements');
        $arr_statements = explode(',', $statements);
        $pics = Session::get('pics');
        //$arr_pics_details = explode(',', $pics);
//        dd(count($pics));

        $videoid = Session::get('videoID');

        $ctr_statements = count($arr_statements);

        for($i=0; $i<$ctr_statements; $i++){
            $videoID = $pics[$i]['video_ID'];
            $picID = $pics[$i]['ID'];

            //code for changing filename after uploading
            $fname_statements = preg_replace('/\s+/', '_', $arr_statements[$i]);
            $path2 = '../public/storage/client_images/' . $username . '/standard_pictures/Video' . $videoID . '/';
            $path = public_path('storage\client_images\\' . $username . '\\standard_pictures\\Video' . $videoID . '\\');
            $picname = $pics[$i]['old_filename'];
            $imagePath = $path . $picname;
//            $ext = pathinfo($imagePath, PATHINFO_EXTENSION);
            $ext = File::extension($picname);
            $file = basename($imagePath, ".".$ext);
            $newfilename = $file . '_' . $fname_statements . '.' . $ext;
            $oldimagePath = $path2 . $picname;
            $newimagePath = $path2 . $newfilename;
//
            if($arr_statements[$i]){
                standardVideoPicture::where('ID', $picID)->update([
                    'statement' => $arr_statements[$i],
                    'new_filename' => $newfilename
                ]);
            }
//            Storage::move($imagePath, $newimagePath);
            rename($oldimagePath, $newimagePath);

        }

        videoProgress::where('video_ID', $videoid)->update([
            'script_progress' => 15
        ]);

        return redirect()->route('account-video-system-template');
    }


    public function VideoSystemProcessStep3(){

        $userid = Auth::user()->id;
        $videoid = Session::get('videoID');

        videoProgress::where('video_ID', $videoid)->update([
            'template_progress' => 15
        ]);

        return redirect()->route('account-video-system-music');
    }


    public function VideoSystemProcessStep4(){

        $userid = Auth::user()->id;

        //for voice format selection
        $voiceSelection = Input::get('voiceSelection');
        if ($voiceSelection != null)
            $voiceboxes = implode(',', $voiceSelection);


        //for music file format selection
        $musicSelection = Input::get('musicSelection');
        if ($musicSelection != null)
            $musicboxes = implode(',', $musicSelection);

        $voice_music_data = AgentTemplate::where('agent_ID', $userid)->get()->first();
//        dd($voice_music_data);

        if($voice_music_data != NULL){

            AgentTemplate::where('agent_ID', $userid)->update([
                'voice_format' => Input::get('stateVoiceFormat'),
                'voice_file_selection' => $voiceboxes,
                'music_style' => Input::get('stateMusicStyle'),
                'music_file_format' => $musicboxes
            ]);

        }
        else{

            $voice_music_arr = array(
                'agent_ID' => $userid,
                'voice_format' => Input::get('stateVoiceFormat'),
                'voice_file_selection' => $voiceboxes,
                'music_style' => Input::get('stateMusicStyle'),
                'music_file_format' => $musicboxes
            );

            AgentTemplate::create($voice_music_arr);
        }

        $videoid = Session::get('videoID');
        videoProgress::where('video_ID', $videoid)->update([
            'voice_and_music' => 15
        ]);

        return redirect()->route('account-video-system-finish');
    }


    public function VideoSystemProcessStep5(){

        $userid = Auth::user()->id;

//        $videoid = 20;
        $videoid = Session::get('videoID');  //to enable during integration and testing of modules

        AgentVideoOrders::where('ID', $videoid)->where('agent_ID', $userid)->update([
            'status' => 'In-Production'
        ]);

        $video_progress = videoProgress::where('video_ID', $videoid)->get()->first();
        $total_progress = $video_progress['picture_progress'] + $video_progress['script_progress'] + $video_progress['template_progress'] + $video_progress['voice_and_music'];

        videoProgress::where('video_ID', $videoid)->update([
            'total_progress' => $total_progress
        ]);

        return redirect()->route('account-make-video');
    }


    //for Premium Video System Process
    public function PremiumVideoSystemPictures()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //retrieve values stored from Session
        $videoid = Session::get('videoID');
        $videoAddress = Session::get('videoAddress');

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        //path for uploaded images
        $path2 = '/storage/client_images/' . $fullname . '/premium_pictures/Video' . $videoid . '/';

        $pics = premiumVideoPicture::where('agent_iD', $userid)->where('video_ID', $videoid)->get(['ID', 'video_ID', 'effect_style', 'old_filename', 'new_filename']);
        Session::put('pics', $pics);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.premium-video-picture', compact('fullname', 'agent', 'logo_pic', 'pics', 'path2', 'userid', 'videoid', 'videoAddress'));
    }

    public function PremiumVideoSystemScript()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //retrieve values stored from Session
        $videoid = Session::get('videoID');
        $videoAddress = Session::get('videoAddress');

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        //path for uploaded images
        $path2 = '/storage/client_images/' . $fullname . '/premium_pictures/Video' . $videoid . '/';

        $pics = premiumVideoPicture::where('agent_ID', $userid)->where('video_ID', $videoid)->get(['ID', 'video_ID', 'old_filename', 'new_filename', 'statement']);
        Session::put('pics', $pics);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.premium-video-script', compact('fullname', 'agent', 'logo_pic', 'videoid', 'pics', 'path2', 'videoAddress'));

    }

    public function PremiumVideoSystemTemplate()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //retrieve values stored from Session
        $videoid = Session::get('videoID');
        $videoAddress = Session::get('videoAddress');

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        $path2 = '/storage/register/';

        $template = AgentTemplate::where('agent_ID', $userid)->get(['main_frame_template', 'main_frame_template_format', 'main_frame_colours', 'main_frame_colours_sub',
            'middle_frame_template', 'middle_frame_template_format', 'middle_frame_colours', 'middle_frame_colours_sub',
            'end_frame_template', 'end_frame_template_format', 'end_frame_colours', 'end_frame_colours_sub'])->first();

        $mainframe_list = explode(',', $template['main_frame_template_format']);
        $middleframe_list = explode(',', $template['middle_frame_template_format']);
        $endframe_list = explode(',', $template['end_frame_template_format']);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.premium-video-update', compact('fullname', 'agent', 'logo_pic', 'path2', 'template', 'mainframe_list', 'middleframe_list', 'endframe_list', 'videoid', 'videoAddress'));
    }

    public function PremiumVideoSystemVoice()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //retrieve values stored from Session
        $videoid = Session::get('videoID');
        $videoAddress = Session::get('videoAddress');

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        //for music
        $music = AgentTemplate::where('agent_ID', $userid)->get(['music_style', 'music_file_format'])->first();
        $music_list = explode(',', $music['music_file_format']);

        //for voice-overs
        $voice = AgentTemplate::where('agent_ID', $userid)->get(['voice_format', 'voice_file_selection'])->first();
        $voice_list = explode(',', $voice['voice_file_selection']);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.premium-video-voice-music', compact('fullname', 'agent', 'logo_pic', 'music', 'music_list', 'voice', 'voice_list', 'videoid', 'videoAddress'));
    }

    public function PremiumVideoSystemStoryboard()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;
        $videoid = Session::get('videoID');

        //retrieve values stored from Session
        $videoid = Session::get('videoID');
        $videoAddress = Session::get('videoAddress');

        //path for logo pic
        $path = '/storage/client_images/' . $fullname . '/general_images/';
        $logo_pic = $path . $logo;

        //path for uploaded images
        $path2 = '/storage/client_images/' . $fullname . '/premium_pictures/Video' . $videoid . '/';
        $pics = premiumVideoPicture::where('agent_ID', $userid)->where('video_ID', $videoid)->get();

        $cnt_pics = count($pics);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.premium-video-storyboard', compact('fullname', 'agent', 'logo_pic', 'path2', 'pics', 'cnt_pics', 'videoid', 'videoAddress'));
    }

    //process for the Steps of Ztandard Video System
    public function PremiumVideoSystemProcessStep1(Request $request)
    {

        $userid = Auth::user()->id;
        $username = Auth::user()->name;
        $effects = Input::get('transition');
        $ctr_effects = count($effects);

//        $arr_ids = [];
//        $arrids = [];
//        $vIDs = [];

        //dd($effects[2]);

        //$videoid = 20;  //need to get the value of the video ID generated
        $videoid = $videoid = Session::get('videoID');
        //Session::put('videoID', $videoid);  //store to session; NOTE: TO REMOVE ONCE TESTED FROM VIDEO ORDER PAGE

        $images = Input::get('selectedImages');
        $arr_images = explode(',', $images);


        if ($request->file('image_files')) {
            $ctr = 0;
            foreach($request->file('image_files') as $image)
            {

//                if(!empty($image) && ($ctr < count($arr_images))){
                if(!empty($image)){
                    $path = public_path('storage\client_images\\' . $username . '\\premium_pictures\\Video' . $videoid . '\\');
                    if(!File::exists($path)){
                        File::makeDirectory($path, 0775, true);
                    }

                    $filename = date('Ym') . $videoid . '_' .$image->getClientOriginalName();
                    $image->move($path, $filename);

//                    for($i=0; $i<$ctr_effects; $i++){
                    $fname = date('Ym') . $videoid . '_' . $arr_images[$ctr];
                    //store date to database
                    $picdetails_arr = array(
                        'agent_ID' => $userid,
                        'video_ID' => $videoid,
                        'old_filename' => $fname,
                        'effect_style' => $effects[$ctr],
                    );
                    $picID = premiumVideoPicture::create($picdetails_arr);
//                    $lastInsertedId = $picID->ID;
//                    array_push($arr_ids, $lastInsertedId);
//                    }
                }
                $ctr++;
            }
            //dd($arr_ids);
//            Session::put('arrids', $arr_ids);
        }
        else
        {
            $cnt = 0;
            $pics = premiumVideoPicture::where('video_ID', $videoid)->get();
            foreach($pics as $pic){
//                dd($pic['effect_style']);
                premiumVideoPicture::where('ID', $pic['ID'])->update([
                    'effect_style' => $effects[$cnt],
                ]);
                $cnt++;
            }


//            $vIDs = Session::get('arrids');
//            dd("hello world");
//            for($cnt=0; $cnt < $ctr_effects; $cnt++){
//                premiumVideoPicture::where('video_ID', $videoid)->update([
//                    'effect_style' => $effects[$cnt],
////                    'new_filename' => $newfilename
//                ]);
//
//            }
        }

        return redirect()->route('getPremiumVideoSystem', ['id' => $videoid]);

    }


    public function PremiumVideoSystemProcessStep2(){

        $userid = Auth::user()->id;
//        $statements = Input::get('selectedStatements');
//        $arr_statements = explode(',', $statements);
        $pics = Session::get('pics');

        $scripts = Input::get('script');

        $videoid = Session::get('videoID');

        $ctr_scripts = count($scripts);

        for($i=0; $i<$ctr_scripts; $i++){
            $videoID = $pics[$i]['video_ID'];
            $picID = $pics[$i]['ID'];

            //code for changing filename after uploading
//            $fname_statements = preg_replace('/\s+/', '_', $arr_statements[$i]);
//            $path2 = '../public/storage/client_images/' . $userid . '/premium_pictures/Video' . $videoID . '/';
//            $path = public_path('storage\client_images\\' . $userid . '\\premium_pictures\\Video' . $videoID . '\\');
//            $picname = $pics[$i]['old_filename'];
//            $imagePath = $path . $picname;

//            $ext = File::extension($picname);
//            $file = basename($imagePath, ".".$ext);
//            $newfilename = $file . '_' . $fname_statements . '.' . $ext;
//            $oldimagePath = $path2 . $picname;
//            $newimagePath = $path2 . $newfilename;
//
            if($scripts[$i]){
                premiumVideoPicture::where('ID', $picID)->update([
                    'statement' => $scripts[$i],
//                    'new_filename' => $newfilename
                ]);
            }
//            Storage::move($imagePath, $newimagePath);
//            rename($oldimagePath, $newimagePath);

        }

        //return redirect()->route('account-premium-video-system-template');
        return redirect()->route('getPremiumVideoSystem', ['id' => $videoid]);

    }


    public function PremiumVideoSystemProcessStep3(){

        $userid = Auth::user()->id;
        $videoid = Session::get('videoID');

//        return redirect()->route('account-premium-video-system-music');
        return redirect()->route('getPremiumVideoSystem', ['id' => $videoid]);
    }


    public function PremiumVideoSystemProcessStep4(){

        $userid = Auth::user()->id;

        //for voice format selection
        $voiceSelection = Input::get('voiceSelection');
        if ($voiceSelection != null)
            $voiceboxes = implode(',', $voiceSelection);


        //for music file format selection
        $musicSelection = Input::get('musicSelection');
        if ($musicSelection != null)
            $musicboxes = implode(',', $musicSelection);

        $voice_music_data = AgentTemplate::where('agent_ID', $userid)->get()->first();
//        dd($voice_music_data);

        if($voice_music_data != NULL){

            AgentTemplate::where('agent_ID', $userid)->update([
                'voice_format' => Input::get('stateVoiceFormat'),
                'voice_file_selection' => $voiceboxes,
                'music_style' => Input::get('stateMusicStyle'),
                'music_file_format' => $musicboxes
            ]);

        }
        else{

            $voice_music_arr = array(
                'agent_ID' => $userid,
                'voice_format' => Input::get('stateVoiceFormat'),
                'voice_file_selection' => $voiceboxes,
                'music_style' => Input::get('stateMusicStyle'),
                'music_file_format' => $musicboxes
            );

            AgentTemplate::create($voice_music_arr);
        }

        $videoid = Session::get('videoID');

//        return redirect()->route('account-premium-video-system-storyboard');
        return redirect()->route('getPremiumVideoSystem', ['id' => $videoid]);

    }


    public function PremiumApproveStoryboard(){

        $userid = Auth::user()->id;

//        $videoid = 20;
        $videoid = Session::get('videoID');  //to enable during integration and testing of modules

        AgentVideoOrders::where('ID', $videoid)->where('agent_ID', $userid)->update([
            'status' => 'In-Production'
        ]);

//        return redirect()->route('account-make-video');
        return redirect()->route('getPremiumVideoSystem', ['id' => $videoid]);

    }

    public function updateVoiceOvers(){

        $userid = Auth::user()->id;

        //for voice format selection
        $stateVoiceFormat = Input::get('stateVoiceFormat');
        $voiceSelection = Input::get('voiceSelection');
        if ($voiceSelection != null)
            $voiceboxes = implode(',', $voiceSelection);
        else
            $voiceboxes = '';

        AgentTemplate::where('agent_ID', $userid)->update([
            'voice_format' => $stateVoiceFormat,
            'voice_file_selection' => $voiceboxes
        ]);

        return redirect()->route('account-explore-voice-overs');

    }


    public function updateMusic(){

        $userid = Auth::user()->id;

        //for voice format selection
        $music_style = Input::get('music_style');
        //for music file format selection
        $musicSelection = Input::get('musicSelection');
        if ($musicSelection != null)
            $musicboxes = implode(',', $musicSelection);
        else
            $musicboxes = '';

        AgentTemplate::where('agent_ID', $userid)->update([
            'music_style' => $music_style,
            'music_file_format' => $musicboxes
        ]);

        return redirect()->route('account-explore-music');

    }

}
