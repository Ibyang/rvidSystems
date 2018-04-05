<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    //function for sending FAQ Email
    public function sendFAQEmail(Request $request){

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
        return redirect()->route('help')
            ->with('success_email','Email Send Successfully!!!');;

    }

    //function for Sending Priority Email Help
    public function callmeEmail(Request $request){
        $contact_name = Input::get('contact_name');
        $contact_mobile = Input::get('contact_mobile');
        $email = Input::get('email');

        $data = array(
            'contact_name' => $contact_name,
            'contact_mobile' => $contact_mobile,
            'email' => $email
        );

        Mail::send('emails.mailtemplate2', $data, function ($message) {
            $email = Input::get('email');
            $contact_name = Input::get('contact_name');
            $message->from($email, $contact_name);
            $message->to('help@revid.com.au')->subject('Priority - Call Me');
        });
//        return redirect('/help');
        return redirect()->route('help')
            ->with('success_email','Email Send Successfully!!!');;
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
