<?php

namespace App\Http\Controllers;

use App\Agent;
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
        $passwd = Auth::user()->password;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group'])->first();
        return view('frontend.pages.my-account', compact('fullname', 'passwd', 'agent'));
    }
}
