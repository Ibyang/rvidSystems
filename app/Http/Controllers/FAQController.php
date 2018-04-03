<?php

namespace App\Http\Controllers;

use App\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class FAQController extends Controller
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
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $faqs = FAQ::orderBy('ID', 'desc')->get(); //limit to 10 records the display for agents
        return view('admin.listfaqs', compact('faqs', 'fullname', 'role', 'pic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('admin.addfaq', compact('fullname', 'role', 'pic'));
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
        $role = Auth::user()->role;
        FAQ::create($request->all());
        return redirect()->route('faq.index')
            ->with('success','FAQ created successfully');

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
        $faq = FAQ::find($id);
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('admin.editfaq',compact('faq', 'fullname', 'role', 'pic'));
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
            $faq = FAQ::where('ID', $id)->update([
                'question' => Input::get('question'),
                'answer' => Input::get('answer')
            ]);

            return redirect()->route('faq.index')
                ->with('success','FAQ updated successfully');
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
        $faq = FAQ::where('ID', $id)->delete();
        return redirect()->route('faq.index')
            ->with('success','FAQ deleted successfully');
    }
}
