@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form">
                <h3>Explore Voice Overs</h3>
                Voice Format
                <form>
                    <select>
                        <option>Random Voice</option>
                    </select>
                </form>
                You can Select from 3 options
                <ol>
                    <li>RANDOM VOICE (Standard)<br><span>We Pick Random Voices for Your Videos</span></li>
                    <li>ONE VOICE (+ $5.00)<br><span>You Pick One Voice for Your Videos</span></li>
                    <li>ROTATION VOICE (+ $5.00)<br><span>You Pick Many Voice and Rotated for Your Videos</span></li>
                </ol>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <h3>Oli</h3>
                        Corporate, Soothing, Upbeat, Fresh, Great voice over artist as well as highly qualified sound engineer
                        
                    </div>
                    <div class="">
                        <h3>OK to use</h3>
                        <div class="custom-control custom-checkbox casual">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1"></label>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection

