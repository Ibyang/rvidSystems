<?php

namespace App\Http\Controllers;

use App\AgentGeneric;
use App\AgentStandard;
use App\AgentPremium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the Generic Video Order resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
//        $videos = AgentGeneric::orderBy('ID', 'ASC')->get();
        $videos = DB::table("agent_generic_videos")->select("agent_generic_videos.*", "users.name")
                    ->leftjoin("users", function($join) {
                       $join->on("users.id", "=", "agent_generic_videos.agent_ID");
                    })->get();
        return view('admin.listGeneric', compact('fullname', 'role', 'pic', 'videos'));

    }


    /**
     * Display a listing of the Standard Video Order resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStandard()
    {
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
//        $videos = AgentStandard::orderBy('ID', 'ASC')->get();
        $videos = DB::table("agent_standard_videos")->select("agent_standard_videos.*", "users.name")
            ->leftjoin("users", function($join) {
                $join->on("users.id", "=", "agent_standard_videos.agent_ID");
            })->get();
        return view('admin.listStandard', compact('fullname', 'role', 'pic', 'videos'));

    }


    /**
     * Display a listing of the Premium Video Order resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPremium()
    {
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
//        $videos = AgentPremium::orderBy('ID', 'ASC')->get();
        $videos = DB::table("agent_premium_videos")->select("agent_premium_videos.*", "users.name")
            ->leftjoin("users", function($join) {
                $join->on("users.id", "=", "agent_premium_videos.agent_ID");
            })->get();
        return view('admin.listPremium', compact('fullname', 'role', 'pic', 'videos'));

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
