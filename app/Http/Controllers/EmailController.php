<?php

namespace App\Http\Controllers;

use App\Agent;
use App\State;
use App\Suburb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EmailController extends Controller
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
        $states = State::get(['state_code', 'state_name']);
        return view('frontend.pages.get-started',compact('email', 'details', 'states'));
    }

    public function stateAjaxUser($state)
    {
        $suburbs = Suburb::where('state', $state)->pluck("suburb");
        return json_encode($suburbs);
    }

    public function agentPostalAjaxUser($state, $suburb)
    {
        $postcode = Suburb::where('state', $state)
            ->where('suburb', $suburb)
            ->pluck("post_code");
        return json_encode($postcode);
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
        $this->validate($request, [
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'email',
            'mobile' => 'required',
            'passwd' => 'min:4|required|confirmed'
        ]);

        $agent = Agent::where('ID', $id)->update([
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'email' => Input::get('email'),
            'mobile' => Input::get('mobile'),
            'passwd' => Input::get('passwd'),
            'group' => Input::get('group'),
            'name_agency' => Input::get('name_agency'),
            //'role_title' => Input::get('role_title'),
            'address' => Input::get('address'),
            'suburb' => Input::get('suburb'),
            //'postcode' => Input::get('postcode'),
            'state' => Input::get('state'),
        ]);

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
