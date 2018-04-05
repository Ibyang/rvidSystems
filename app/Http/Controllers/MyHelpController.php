<?php

namespace App\Http\Controllers;

use App\FAQ;
use App\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

class MyHelpController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        $faqs = FAQ::get(['ID', 'question']);
        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.account-help', compact('faqs', 'agent', 'fullname'));
    }



    //function for sending FAQ Email of My Account
    public function sendFAQEmailAcct(Request $request){

        $sender_name = Input::get('sender_name');
        $sender_email = Input::get('sender_email');
        $recipient_email = Input::get('recipient_email');
        $msg = Input::get('message');

        $data = array(
            'sender_name' => $sender_name,
            'sender_email' => $sender_email,
            'msg' => $msg
        );

        Mail::send('emails.mailtemplate', $data, function ($message) {
            $sender_email = Input::get('sender_email');
            $sender_name = Input::get('sender_name');
            $message->from($sender_email, $sender_name);
            $message->to('help@revid.com.au')->subject('Email - Need Help');
        });
//        return redirect('/help');
        return redirect()->route('account-help')
            ->with('success_email','Email Send Successfully!!!');;

    }

    //function for Sending Priority Email Help of My Account
    public function callmeHelp(Request $request){

        $contact_name = Input::get('contact_name');
        $contact_mobile = Input::get('contact_mobile');
        $email = Auth::user()->email;

        $data = array(
            'contact_name' => $contact_name,
            'contact_mobile' => $contact_mobile,
            'email' => $email
        );

        Mail::send('emails.mailtemplate2', $data, function ($message) {
            $email = Auth::user()->email;
            $contact_name = Input::get('contact_name');
            $message->from($email, $contact_name);
            $message->to('help@revid.com.au')->subject('Priority - Call Me');
        });
//        return redirect('/help');
        return redirect()->route('account-help')
            ->with('success_email','Email Send Successfully!!!');;

    }

}
