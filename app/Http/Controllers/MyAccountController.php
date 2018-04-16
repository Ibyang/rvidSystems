<?php

namespace App\Http\Controllers;

use App\Agent;
use App\User;
use App\AgentInvoice;
use App\FAQ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

    }


    public function editSubscription()
    {
        $subscription = Input::get('subscription1');
        $storage_plan = '';

        foreach($subscription as $sub){
            if($sub === 'Casual'){
                $subscription_arr = array(
                    'subscription_type' => $sub,
                    'storage_plan' => '$11'
                );
            }
            else if($sub === 'Basic'){
                $subscription_arr = array(
                    'subscription_type' => $sub,
                    'storage_plan' => '$33'
                );
            }
            else if($sub === 'Standard') {
                $subscription_arr = array(
                    'subscription_type' => $sub,
                    'storage_plan' => '$66'
                );
            }
            else if($sub === 'Premium') {
                $subscription_arr = array(
                    'subscription_type' => $sub,
                    'storage_plan' => '$99'
                );
            }
        }

        $agentID = Input::get('agentID');
        AgentInvoice::where('agent_ID', $agentID)->update($subscription_arr);

        return redirect('/account/home');
    }


    public function makeVideo(){

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
//        dd($userid);
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video.make-video', compact('fullname', 'agent', 'userid'));

    }

}
