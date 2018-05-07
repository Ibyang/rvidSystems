@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form">
            <h3 class="my-account-title">Standard Video System - Step 4</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            
            <h3>Voice/Music Preferences</h3>
            Voice Format
            <div class="register-form">
                <select name="state" class="form-control col-7">
                        <option>Random Voice</option>
                </select>
            </div>
            <h3 class="mt-3 mb-3">You can Select from 3 options</h3>
            <div class="c0066ff"><span class="font-weight-bold">1. RANDOM VOICE</span>(Standard)</div>
            <div>We Pick Random Voices for Your Videos</div>
            <div class="c0066ff pt-3 font-weight-bold"><span class="font-weight-bold">2. ONE VOICE</span> (+ $5.00)</div>
            <div>You Pick One Voice for Your Videos</div>
            <div class="c0066ff pt-3 font-weight-bold"><span class="font-weight-bold">3. ROTATION VOICE</span> (+ $5.00)</div>
            <div>You Pick Many Voice and Rotated for Your Videos</div>
            <ul class="reg-video-format">
                    <li>
                        <div class="row ml-1">
                            <div class="col-sm-8 pl-0 pt-2">
                                <div class="row">
                                    <div class="col-sm-4"><img src="{{ asset('storage/register/thumbnail-blank.jpg') }}"></div>
                                    <div class="col-sm-8 pr-0">
                                                    <h4 class="font-weight-bold">Oli</h4>
                                                    <p class="font12">Corporate, Soothing, Upbeat, Fresh, Great voice over
                                                    artist as well as highly qualified sound engineer</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 my-account-subcription step-three-register">
                                    <span>OK to use</span>
                                    <div class="custom-control custom-checkbox standard ml-3">
                                          <input type="checkbox" class="custom-control-input" id="customCheck15">
                                          <label class="custom-control-label" for="customCheck15"></label>
                                    </div>
                            </div>
                        </div>
                    </li>
            </ul>
            <h3>Select Music Style</h3>
            <div class="register-form">
                <select name="state" class="form-control col-7">
                        <option></option>
                </select>
            </div>
            <div class="row">
                <div class="col-md-auto">
                    <div class="music-block active"><a href="">Cafe Jazz</a></div>
                    <div class="music-block"><a href="">Middle of the Road</a></div>
                    <div class="music-block"><a href="">Upbeat</a></div>
                    <div class="music-block"><a href="">Jazz Latin</a></div>
                    <div class="music-block"><a href="">Classical</a></div>
                    <div class="music-block"><a href="">Modern</a></div>
                    <div class="music-block"><a href="">New Age</a></div>
                </div>
                <div class="col-sm step-three-register">
                    <div class="row mt-2">
                        <div class="col-sm">
                            <div class="music-block-play"><i class="play-icon"></i>Cafe Jazz 1</div>
                        </div>
                        <div class="col-sm my-account-subcription">
                            <div class="custom-control custom-checkbox standard">
                                <input type="checkbox" class="custom-control-input" id="customCheck16">
                                <label class="custom-control-label" for="customCheck16"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="music-block-play"><i class="play-icon"></i>Cafe Jazz 2</div>
                        </div>
                        <div class="col-sm my-account-subcription">
                            <div class="custom-control custom-checkbox standard">
                                <input type="checkbox" class="custom-control-input" id="customCheck17">
                                <label class="custom-control-label" for="customCheck17"></label>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <div class="float-r mt-3 mb-5">
                <button class="btn btn-primary">SAVE : Next Step 5<i class="arrow-right"></i></button>
          </div>
        </div>
    </div>
</div>
@endsection
