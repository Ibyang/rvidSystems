<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ProductionController extends Controller
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
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $prods = User::where('role', 'Production')->orderBy('id', 'desc')->get(); //limit to 10 records the users whose role is production
        return view('admin.listproduction', compact('prods', 'fullname', 'role', 'pic'));
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
        return view('admin.addproduction', compact('fullname', 'role', 'pic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'email' => 'email|required',
            'phone' => 'required',
            'address' => 'required',
            'status' => 'required',
            'role' => 'required',
            'password' => 'min:4|required|confirmed'
        ]);

        $fullname = Auth::user()->name;

        if ($file = $request->file('file_image')) {
            $extension = $file->extension()?: 'png';
            $destinationPath = 'uploads/profile_pics/';
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            //delete old pic if exists

//            if(!empty($pic)){
//                if (File::exists($destinationPath . $pic)) {
//                    $filepath = $destinationPath . $pic;
//                    unlink($filepath);
////                    File::delete($destinationPath . $pic);
//                }
//            }

            User::create([
                'name' => Input::get('name'),
                'email' => Input::get('email'),
                'phone' => Input::get('phone'),
                'address' => Input::get('address'),
                'status' => Input::get('status'),
                'role' => Input::get('role'),
                'password' => bcrypt(Input::get('password')),
                'profile_pic' => $safeName,
            ]);
        }
        else{

            User::create([
                'name' => Input::get('name'),
                'email' => Input::get('email'),
                'phone' => Input::get('phone'),
                'address' => Input::get('address'),
                'status' => Input::get('status'),
                'role' => Input::get('role'),
                'password' => bcrypt(Input::get('password'))
            ]);
        }


        return redirect()->route('production.index')
            ->with('success','Production User created successfully');
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
        $user = User::find($id);
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('admin.editproduction',compact('user', 'fullname', 'role', 'pic'));
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
            'name' => 'required|min:2',
            'email' => 'email|required',
            'phone' => 'required',
            'address' => 'required',
            'status' => 'required',
            'role' => 'required',
            'password' => 'min:4|required|confirmed'
        ]);

        //$pic = Auth::user()->profile_pic;
        if ($file = $request->file('file_image')) {
            $extension = $file->extension()?: 'png';
            $destinationPath = 'uploads/profile_pics/';
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            //delete old pic if exists

//            if(!empty($pic)){
//                if (File::exists($destinationPath . $pic)) {
//                    $filepath = $destinationPath . $pic;
//                    unlink($filepath);
////                    File::delete($destinationPath . $pic);
//                }
//            }

            $user = User::where('id', $id)->update([
                'profile_pic' => $safeName
            ]);
        }


        $prod = User::where('id', $id)->update(['name' => Input::get('name'), 'email' => Input::get('email'),
            'phone' => Input::get('phone'), 'address' => Input::get('address'), 'status' => Input::get('status'), 'role' => Input::get('role'), 'password' => Input::get('password')]);

        return redirect()->route('production.index')
            ->with('success','Production User updated successfully');

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
        $user = User::where('id', $id)->delete();
        return redirect()->route('production.index')
            ->with('success','Production User deleted successfully');
    }
}
