<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Suburb;
use App\AgentPreferences;
use App\AgentEmail;
use App\AgentBroadcast;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class MyPreferencesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suburbs = Suburb::distinct(['suburb', 'post_code'])
            ->whereNotNull('suburb')
            ->whereNotNull('post_code')
            ->orderBy('suburb', 'ASC')
            ->get();
        $email = Auth::user()->email;
        $userId = Auth::user()->id;
        $emails = AgentEmail::where('agent_ID', $userId)->get();
        $areas = AgentBroadcast::where('agent_ID', $userId)->get();
        $preference = AgentPreferences::where('agent_ID', $userId)->first();

//        dd($emails);
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $username = Auth::user()->name;
        $path = '/storage/client_images/' . $username . '/general_images/';
        $logo_pic = $path . $logo;

        return view('frontend.pages.account-preferences', compact('suburbs', 'agent', 'userId', 'emails', 'areas', 'preference', 'logo_pic'));
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

//        $userId = Auth::user()->id;

        $surge_offer = Input::get('surgeoffer');
        $broadcast_status = Input::get('broadcast_status');
//        $email_list = Input::get('emails_arr');
        $email_list = Input::get('email_list');
        $suburb_list = Input::get('areas_arr');

        dd($email_list);

        //for Surge Offer Preferences Section
        AgentPreferences::where('agent_ID', $id)->update([
            'surge_offer_option' => $surge_offer[0],
            'broadcast_agent' => $broadcast_status
        ]);

        //$emailist = AgentEmail::where('agent_ID', $id)->get();

        //$emails2 = explode(',',$email_list2);


        //for Email Distribution List

//        $emails = explode(',',$email_list);
//        AgentEmail::where('agent_ID', $id)->delete();
//        if($emails != null) {
//
//            $emails2 = explode(',',$email_list2);
//            if($emails2 != null)
//                $emails = array_diff($emails, $emails2);
//
//            for ($i=0; $i<count($emails); $i++){
//                $email_arr = array(
//                    'agent_ID' => $id,
//                    'email' => $emails[$i],
//                );
//                AgentEmail::create($email_arr);
//            }
//        }
//
//        //for Broadcast Areas of Agents
//        $areas = explode(',',$suburb_list);
//        if($areas != null) {
//            for ($i=0; $i<count($areas); $i++){
//                $broadcast_arr = array(
//                    'agent_ID' => $id,
//                    'suburb' => $areas[$i],
//                );
//                AgentBroadcast::create($broadcast_arr);
//            }
//        }
//
//        return redirect()->route('account-preferences');

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
