<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
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
//        $agent = Content::find($id);
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('admin.content_page',compact('fullname', 'role', 'pic'));
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


    //get content for Terms and Conditions
    public function getTermsCondition()
    {
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $content = Content::where('ID', 1)->get(['content_text'])->first();
        return view('admin.content_terms_conditions',compact('fullname', 'role', 'pic', 'content'));
    }


    //get content for Copyright Terms
    public function getCopyrightTerms()
    {
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $content = Content::where('ID', 2)->get(['content_text'])->first();
        return view('admin.content_copyright',compact('fullname', 'role', 'pic', 'content'));
    }


    //get content for Privacy Terms
    public function getPrivacyTerms()
    {
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $content = Content::where('ID', 3)->get(['content_text'])->first();
        return view('admin.content_privacy',compact('fullname', 'role', 'pic', 'content'));
    }


    //get content for About Page
    public function getAbout()
    {
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $content = Content::where('ID', 4)->get(['content_text'])->first();
        return view('admin.content_about',compact('fullname', 'role', 'pic', 'content'));
    }


    public function updateContent()
    {
        $contentid = Input::get('contentid');

        if($contentid == 1) {
            $termscondition = Input::get('termsconditions');
            Content::where('ID', 1)->update([
                'content_text' => $termscondition
            ]);

            return redirect('/TermsCondition');

        }
        else if($contentid == 2) {
            $copyright = Input::get('copyright');
            Content::where('ID', 2)->update([
                'content_text' => $copyright
            ]);

            return redirect('/CopyrightTerms');

        }
        else if($contentid == 3) {
            $privacy = Input::get('privacy');
            Content::where('ID', 3)->update([
                'content_text' => $privacy
            ]);

            return redirect('/PrivacyTerms');

        }
        else if($contentid == 4) {
            $about = Input::get('about');
            Content::where('ID', 4)->update([
                'content_text' => $about
            ]);

            return redirect('/About');

        }


    }

}
