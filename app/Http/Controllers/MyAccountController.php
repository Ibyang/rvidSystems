<?php

namespace App\Http\Controllers;

use App\Agent;
use App\User;
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
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group'])->first();
        return view('frontend.pages.my-account', compact('fullname', 'passwd', 'agent'));
    }


    public function editAccount(Request $request)
    {
        $details_arr = array(
            'role_title' => request()->input('title'),
            'name_agency' => request()->input('company'),
            'group' => request()->input('agency'),
            'password' => bcrypt(request()->input('password')),
            'passwd' => request()->input('password')
        );

        $email = request()->input('email');
        $name = request()->input('name');
        Agent::where('email', $email)->update($details_arr);
        User::where('email', $email)->update(['name' => $name]);

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $passwd = Auth::user()->passwd;
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group'])->first();
        return view('frontend.pages.my-account', compact('fullname', 'passwd', 'agent'));

    }
}
