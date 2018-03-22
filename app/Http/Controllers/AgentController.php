<?php

namespace App\Http\Controllers;

use App\Agent;
use App\State;
use App\Suburb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


class AgentController extends Controller
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
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//    	$agents = Agent::all(); // display all the records
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $agents = Agent::orderBy('ID', 'desc')->take(1000)->get(); //limit to 10 records the display for agents
    	return view('admin.listagents', compact('agents', 'fullname', 'role', 'pic'));
    }


    /**
	  * Show the form for creating a new resource.
	  *
	  * @return \Illuminate\Http\Response
	  */
	public function create()
	{
	   $fullname = Auth::user()->name;
       $role = Auth::user()->role;
       $pic = Auth::user()->profile_pic;
       $rols = Agent::distinct()->whereNotNull('role_title')->get(['role_title']);
       $states = State::get(['state_code', 'state_name']);
	   return view('admin.addagent', compact('fullname', 'role', 'pic', 'rols', 'states'));
	}

	public function stateAjax($state)
    {
        $suburbs = Suburb::where('state', $state)->pluck("suburb");
        return json_encode($suburbs);
    }

    public function agentPostalAjax($state, $suburb)
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
	public function store(Request $request)
	{
//	   //$agent = new Agent();
	   $this->validate($request, [
	   		'firstname' => 'required|min:2',
	   		'lastname' => 'required',
	   		'email' => 'email',
	   		'mobile' => 'required',
	   		'password' => 'min:4|required|confirmed'
	   ]);

	   $fullname = Auth::user()->name;
       $role = Auth::user()->role;
	   Agent::create($request->all());
	   return redirect()->route('agents.index')
           ->with('success','Agent created successfully')
           ->with('fullname', 'fullname');

//        return view('admin.listagents');

	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = Agent::find($id);
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('agents.show',compact('agent', 'fullname', 'role', 'pic'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Agent::find($id);
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $states = State::get(['state_code', 'state_name']);
        $rols = Agent::distinct()->whereNotNull('role_title')->get(['role_title']);
        return view('admin.editagent',compact('agent', 'fullname', 'role', 'pic', 'rols', 'states'));
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
        $this->validate($request, [
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'email',
            'mobile' => 'required',
            'password' => 'min:4|required|confirmed'
        ]);

//        $agents = Agent::find($id)->update($request->all());
        //$input = $request->input();
//        dd($input);

        //$agent->fill($input);
        //$agent->save();

        $agent = Agent::where('ID', $id)->update([
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'email' => Input::get('email'),
            'mobile' => Input::get('mobile'),
            'passwd' => Input::get('passwd'),
            'group' => Input::get('group'),
            'name_agency' => Input::get('name_agency'),
            'role_title' => Input::get('role_title'),
            'address' => Input::get('address'),
            'suburb' => Input::get('suburb'),
            'postcode' => Input::get('postcode'),
            'state' => Input::get('state'),
            ]);

//        $agent->firstname = Input::get('firstname');
//        $agent->lastname = Input::get('lastname');
//        $agent->email = Input::get('email');
//        $agent->mobile = Input::get('mobile');
//        $agent->passwd = Input::get('passwd');
//        dd($agent);
//        $agent->update();
        return redirect()->route('agents.index')
            ->with('success','Article updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agent = Agent::where('ID', $id)->delete();
        return redirect()->route('agents.index')
            ->with('success','Agent deleted successfully');
    }

}
