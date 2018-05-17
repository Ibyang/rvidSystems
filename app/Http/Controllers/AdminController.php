<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $email = Auth::user()->email;

        $generic_videos = DB::table("agent_generic_videos")->select("agent_generic_videos.*", "users.name")
            ->leftjoin("users", function($join) {
                $join->on("users.id", "=", "agent_generic_videos.agent_ID");
              })->where('agent_generic_videos.status', '=', 'Compiling')
                ->get();

        $standard_videos = DB::table("agent_standard_videos")->select("agent_standard_videos.*", "users.name")
            ->leftjoin("users", function($join) {
                $join->on("users.id", "=", "agent_standard_videos.agent_ID");
            })->where('agent_standard_videos.status', '=', 'Compiling')
            ->orWhere('agent_standard_videos.status', '=', 'In-Production')
            ->get();

        $premium_videos = DB::table("agent_premium_videos")->select("agent_premium_videos.*", "users.name")
            ->leftjoin("users", function($join) {
                $join->on("users.id", "=", "agent_premium_videos.agent_ID");
            })->where('agent_premium_videos.status', '=', 'Compiling')
            ->get();


        //Mail::to($email)->send(new DemoMail());
        return view('admin.dashboard', compact('fullname', 'role', 'pic', 'generic_videos', 'standard_videos', 'premium_videos'));
//            ->with('fullname', $fullname)
//            ->with('role', $role)
//            ->with('pic', $pic);
    }


    public function videoOrder(){
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $email = Auth::user()->email;

        return view('admin.editVideoOrder', compact('fullname', 'role', 'pic'));


    }
}
