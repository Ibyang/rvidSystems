<?php

namespace App\Http\Controllers;


use App\Agent;
use App\AgentPreferences;
use App\User;
use App\AgentVideoOrders;
use App\videoProgress;
use App\AgentTemplate;
use App\standardVideoPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class StandardVideoController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
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
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        //path for uploaded images
        $path2 = '/storage/client_images/' . $userid . '/pictures/Video' . $videoid . '/';

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
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;

        //path for uploaded images
        $path2 = '/storage/client_images/' . $userid . '/pictures/Video' . $videoid . '/';

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
        $path = '/storage/client_images/' . $userid . '/';
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
        $path = '/storage/client_images/' . $userid . '/';
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
        $path = '/storage/client_images/' . $userid . '/';
        $logo_pic = $path . $logo;



        //path for uploaded images
        $path2 = '/storage/client_images/' . $userid . '/pictures/Video' . $videoid . '/';
        $pics = standardVideoPicture::where('agent_ID', $userid)->where('video_ID', $videoid)->get();

        $cnt_pics = count($pics);

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.preferences.video-system.standard-video-finish', compact('fullname', 'agent', 'logo_pic', 'path2', 'pics', 'cnt_pics'));
    }

    //process for the Steps of Ztandard Video System
    public function VideoSystemProcessStep1(Request $request)
    {

        $userid = Auth::user()->id;
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
                if(!empty($image)){
                    $path = public_path('storage\client_images\\' . $userid . '\\pictures\\Video' . $videoid . '\\');
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
            $path2 = '../public/storage/client_images/' . $userid . '/pictures/Video' . $videoID . '/';
            $path = public_path('storage\client_images\\' . $userid . '\\pictures\\Video' . $videoID . '\\');
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


}
