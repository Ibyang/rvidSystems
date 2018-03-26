<?php

namespace App\Http\Controllers;

use App\Agent;
use App\User;
use App\AgentInvoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        $invoice = AgentInvoice::where('email', $email)->first();
        return view('frontend.pages.my-account', compact('fullname', 'passwd', 'agent', 'invoice'));
    }


    public function editAccount(Request $request)
    {
        $details_arr = array(
            'role_title' => request()->input('title'),
            'name_agency' => request()->input('company'),
            'group' => request()->input('agency')
        );

        $user_details_arr = array(
            'name' => request()->input('name'),
            'password' => bcrypt(request()->input('password')),
            'passwd' => request()->input('password')
        );

        $email = request()->input('email');
        $agentID = request()->input('agentID');
        //dd($email);
        Agent::where('email', $email)->update($details_arr);
        User::where('email', $email)->update($user_details_arr);

        return redirect('/account/home');

//        $email = Auth::user()->email;
//        $fullname = Auth::user()->name;
//        $passwd = Auth::user()->passwd;
//        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group'])->first();
//        return view('frontend.pages.my-account', compact('fullname', 'passwd', 'agent'));

    }


    public function editInvoice(Request $request)
    {
        $invoice_arr = array(
            'invoice_to' => request()->input('invoiceTo'),
            'invoice_to_type' => request()->input('invoice_to'),
            'address' => request()->input('invoice_address'),
            'person_name' => request()->input('invoice_agent'),
            'contact_num' => request()->input('invoice_contact'),
            'email' => request()->input('invoice_email')
        );

        $agentID = request()->input('agentID');
        //dd($email);
        AgentInvoice::where('agent_ID', $agentID)->update($invoice_arr);

        return redirect('/account/home');

//        $email = Auth::user()->email;
//        $fullname = Auth::user()->name;
//        $passwd = Auth::user()->passwd;
//        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group'])->first();
//        return view('frontend.pages.my-account', compact('fullname', 'passwd', 'agent'));

    }


}
