<?php

namespace App\Http\Controllers;

use App\User;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $user = User::where('id', $userid)->first(); //limit to 10 records the display
//        dd($user);
        return view('admin.view_user', compact('user', 'fullname', 'role', 'pic'));
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

        $pic = Auth::user()->profile_pic;

        if ($file = $request->file('file_image')) {
            $extension = $file->extension()?: 'png';
            $destinationPath = 'uploads/profile_pics/';
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            //delete old pic if exists

            if(!empty($pic)){
                if (File::exists($destinationPath . $pic)) {
                    $filepath = $destinationPath . $pic;
                    unlink($filepath);
//                    File::delete($destinationPath . $pic);
                }
            }

            //save new file path into db
            $user = User::where('id', $id)->update([
                'profile_pic' => $safeName
            ]);

        }

        //
        $user = User::where('id', $id)->update([
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone'),
            'address' => Input::get('address')]);

        return redirect()->route('user.index')
            ->with('success','User Profile updated successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, $id)
    {

        $this->validate($request, [
            'password' => 'min:4|required|confirmed'
        ]);

        $user = User::where('id', $id)->update([
            'password' => bcrypt(Input::get('password'))]);

        return redirect()->route('user.index')
            ->with('success','User Profile updated successfully');
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
