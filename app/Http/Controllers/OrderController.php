<?php

namespace App\Http\Controllers;

//use App\AgentGeneric;
//use App\AgentStandard;
//use App\AgentPremium;
use App\AgentVideoOrders;
use App\videoProgress;
use App\standardVideoPicture;
use App\premiumVideoPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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
        $videos = DB::table("agent_video_orders")->select("agent_video_orders.*", "users.name")
                    ->leftjoin("users", function($join) {
                       $join->on("users.id", "=", "agent_video_orders.agent_ID");
                    })->where('agent_video_orders.category', '=', 'Generic')
                    ->get();
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
        $videos = DB::table("agent_video_orders")->select("agent_video_orders.*", "users.name", "users.id")
            ->leftjoin("users", function($join) {
                $join->on("users.id", "=", "agent_video_orders.agent_ID");
            })->where('agent_video_orders.category', '=', 'Standard')
            ->get();
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
        $videos = DB::table("agent_video_orders")->select("agent_video_orders.*", "users.name", "users.id")
            ->leftjoin("users", function($join) {
                $join->on("users.id", "=", "agent_video_orders.agent_ID");
            })->where('agent_video_orders.category', '=', 'Premium')
            ->get();
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


    //get Video Order Details
    public function getVideoDetails($videoid){


        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;

        $video = DB::table("agent_video_orders")->select("agent_video_orders.*", "users.name")
                ->leftjoin("users", function($join) {
                    $join->on("users.id", "=", "agent_video_orders.agent_ID");
                })->where('agent_video_orders.ID', $videoid)
                ->first();

//        $videos = AgentGeneric::orderBy('ID', 'ASC')->get();
//        if($videotype === 'Generic'){
//            $video = DB::table("agent_generic_videos")->select("agent_generic_videos.*", "users.name")
//                ->leftjoin("users", function($join) {
//                    $join->on("users.id", "=", "agent_generic_videos.agent_ID");
//                })->where('agent_generic_videos.ID', $videoid)
//                ->first();
//        }
//        else if($videotype === 'Standard'){
//            $video = DB::table("agent_standard_videos")->select("agent_standard_videos.*", "users.name")
//                ->leftjoin("users", function($join) {
//                    $join->on("users.id", "=", "agent_standard_videos.agent_ID");
//                })->where('agent_standard_videos.ID', $videoid)
//                ->first();
//        }
//        else if($videotype === 'Premium'){
//            $video = DB::table("agent_premium_videos")->select("agent_premium_videos.*", "users.name")
//                ->leftjoin("users", function($join) {
//                    $join->on("users.id", "=", "agent_premium_videos.agent_ID");
//                })->where('agent_premium_videos.ID', $videoid)
//                ->first();
//        }

        $progress = videoProgress::where('video_ID', $videoid)->first();
        return view('admin.editVideoOrder', compact('fullname', 'role', 'pic', 'video', 'progress'));

    }


    //post Video Progress
    public function postVideoProgress(){

        $production_id = Auth::user()->id;
//        $videotype = Input::get('videotype');
        $videoid = Input::get('videoid');
        $status = Input::get('status');
        $completion_date = date('Y-m-d H:i:s', strtotime(Input::get('completion_date')));

        $picture = (int)Input::get('picture_progress');
        $script = (int)Input::get('script_progress');
        $template = (int)Input::get('template_progress');
        $voice_music = (int)Input::get('voice_music');
        $edits = (int)Input::get('edits');

        $total_progress = $picture + $script + $template + $voice_music + $edits;

        videoProgress::where('video_ID', $videoid)->update([
            'production_ID' => $production_id,
            'picture_progress' => $picture,
            'script_progress' => $script,
            'template_progress' => $template,
            'voice_and_music' => $voice_music,
            'edits' => $edits,
            'total_progress' => $total_progress,
            'status' => $status,
            'completion_date' => $completion_date

        ]);

        AgentVideoOrders::where('ID', $videoid)->update([
            'progress_value' => $total_progress,
            'completion_date' => $completion_date,
            'status' => $status
        ]);

//        if($videotype === 'Generic'){
//
//            agentGeneric::where('ID', $videoid)->update([
//                'progress_value' => $total_progress,
//                'completion_date' => $completion_date,
//                'status' => $status
//            ]);
//
//        }
//        else if($videotype === 'Standard'){
//
//            agentStandard::where('ID', $videoid)->update([
//                'progress_value' => $total_progress,
//                'completion_date' => $completion_date,
//                'status' => $status
//            ]);
//
//        }
//        else if($videotype === 'Premium'){
//
//            agentPremium::where('ID', $videoid)->update([
//                'progress_value' => $total_progress,
//                'completion_date' => $completion_date,
//                'status' => $status
//            ]);
//
//        }

        return redirect(url('getVideoDetails/' . $videoid));

    }


    public function viewStandardVideoMaterials($userid, $videoid)
    {
        $fname = Auth::user()->name;
        $fullname = preg_replace('/\s/', '', $fname);
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;

        $path2 = '../../storage/client_images/' . $fullname . '/standard_pictures/Video' . $videoid . '/';

        $standards = standardVideoPicture::where('agent_ID', $userid)->where('video_ID', $videoid)->get();

        return view('admin.listStandardStoryboard', compact('fullname', 'role', 'pic', 'standards', 'path2'));

    }


    public function viewPremiumVideoMaterials($userid, $videoid)
    {
        $fname = Auth::user()->name;
        $fullname = preg_replace('/\s/', '', $fname);
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;

        $path2 = '../../storage/client_images/' . $fullname . '/premium_pictures/Video' . $videoid . '/';

        $premiums = premiumVideoPicture::where('agent_ID', $userid)->where('video_ID', $videoid)->get();

        return view('admin.listPremiumStoryboard', compact('fullname', 'role', 'pic', 'premiums', 'path2'));

    }




}
