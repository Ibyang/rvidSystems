<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyVideoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        return view('frontend.pages.my-videos');
    }
    
    public function VideoTracker()
    {
        return view('frontend.pages.video.video-tracker');
    }
    
    
    public function VoiceOvers()
    {
        return view('frontend.pages.video.voice-overs');
    }
}
