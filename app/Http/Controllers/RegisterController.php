<?php

namespace App\Http\Controllers;

use App\Agent;
use App\AgentInvoice;
use App\User;
use App\State;
use App\Suburb;
use App\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
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


    //for checking Emails
    public function getEmailAjax($email)
    {
        $details = Agent::where('email', $email)->first();
        return json_encode($details);
    }

    //for getting the answer when question is selected for FAQ module
    public function getFAQAjax($question){
        $faq = FAQ::where('ID', $question)->first();
        return json_encode($faq);
    }

    //for sending FAQ email to help@revid.com.au
    public function sendFAQEmail($recipient, $message){
        Mail::to($recipient)->send(new DemoMail());
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
        $this->validate($request, [
            'firstname' => 'required|min:2',
            'lastname' => 'required',
            'email' => 'email',
            'mobile' => 'required',
            'password' => 'min:4|required|confirmed'
        ]);

        $modeAction = request()->input('modeAction');
        $agentID = request()->input('agentID');

        if($modeAction === 'edit'){
            $agent = Agent::where('ID', $agentID)->update([
                'firstname' => trim(Input::get('firstname')),
                'lastname' => trim(Input::get('lastname')),
                'email' => Input::get('email'),
                'mobile' => Input::get('mobile'),
                'agent_password' => Input::get('password'),
                'group' => Input::get('group'),
                'name_agency' => Input::get('name_agency'),
                //'role_title' => Input::get('role_title'),
                'address' => Input::get('address'),
                'suburb' => Input::get('suburb'),
                //'postcode' => Input::get('postcode'),
                'state' => Input::get('state'),
            ]);
        }
        else
        {

            $agent_arr = array(
                'firstname' => trim(request()->input('firstname')),
                'lastname' => trim(request()->input('lastname')),
                'group' => request()->input('group'),
                'name_agency' => request()->input('name_agency'),
                'middle_name' => request()->input('mobile'),
                'email' => request()->input('email'),
                'passwd' => bcrypt(request()->input('passwd')),
                'agent_password' => request()->input('passwd'),
                'address' => request()->input('address'),
                'state' => request()->input('state'),
                'suburb' => request()->input('suburb')
            );
            Agent::create($agent_arr);
        }

        $fullname = Input::get('firstname') .  ' ' . Input::get('lastname');
        $pass_arr = array(
            'name' => $fullname,
            'status' => 'Pending',
            'role' => 'Agent',
            'email' => Input::get('email'),
            'password' => bcrypt(Input::get('password')),
            'passwd' => Input::get('password')
        );
        $user = User::create($pass_arr);

        //for storing values on the Invoice Section
        $invoice_arr = array(
            'agent_ID' => $user->id,
            'invoice_to' => $fullname,
            'invoice_to_type' => 'Agent',
            'address' => Input::get('address'),
            'person_name' => $fullname,
            'contact_num' => Input::get('mobile'),
            'email' => Input::get('email'),
        );
        AgentInvoice::create($invoice_arr);


        return redirect()->route('home');
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
            'passwd' => bcrypt(Input::get('passwd')),
            'agent_password' => Input::get('passwd'),
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
