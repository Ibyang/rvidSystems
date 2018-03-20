<?php

//namespace App\Http\Controllers\Auth;
//use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
////use Auth;

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Auth;

class AgentLoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    //protected $guard = 'userAgent';

//    public function __construct()
//    {
////        $this->middleware('guest:userAgent');
//        $this->middleware( 'guest' )->except( 'logout' );
//    }

//    protected function guard()
//    {
//        return Auth::guard('userAgent');
//    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'passwd' => 'required|min:6'
        ]);
        // Attempt to log the user in
//        if (Auth::guard('userAgent')->attempt(['email' => $request->email, 'passwd' => $request->passwd])) {
        if (auth()->guard( 'userAgent' )->attempt(['email' => $request->email, 'passwd' => $request->passwd])) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('agent.dashboard'));
//            return redirect()->intended(route('contact'));
        }
        else{
            return redirect()->intended(route('contact'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        //return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
