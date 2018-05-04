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
                <h3 class="my-account-title">Explore Voice Overs</h3>
                Voice Format
                <form>
                    <select name="stateVoiceFormat" class="form-control">
                        <option value="Random Voice(Standard)" {{ $voice->voice_format === 'Random Voice(Standard)' ? 'selected' : '' }}>Random Voice (Standard)</option>
                        <option value="One Voice" {{ $voice->voice_format === 'One Voice' ? 'selected' : '' }}>One Voice</option>
                        <option value="Rotation Voice" {{ $voice->voice_format === 'Rotation Voice' ? 'selected' : '' }}>Rotation Voice</option>
                    </select>
                </form>
                <div class="col-sm">
                    You can Select from 3 options
                    <div class="c0066ff font-weight-bold">1. RANDOM VOICE (Standard)</div>
                    <div>We Pick Random Voices for Your Videos</div>
                    <div class="c0066ff pt-3 font-weight-bold">2. ONE VOICE (+ $5.00)</div>
                    <div>You Pick One Voice for Your Videos</div>
                    <div class="c0066ff pt-3 font-weight-bold">3. ROTATION VOICE (+ $5.00)</div>
                    <div>You Pick Many Voice and Rotated for Your Videos</div>
                </div>
                <ul class="reg-video-format">
                    <li>
                        <div class="row ml-1">
                            <div class="col-sm-9 pl-0 pt-2">
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="voiceSelection[]" value="voice1"
                                        @if(in_array('voice1', $voice_list))
                                            checked
                                        @endif>
                                    <label class="custom-control-label" for="customCheck15"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row ml-1">
                            <div class="col-sm-9 pl-0 pt-2">
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck16" name="voiceSelection[]" value="voice2"
                                         @if(in_array('voice2', $voice_list))
                                            checked
                                         @endif>
                                    <label class="custom-control-label" for="customCheck16"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row ml-1">
                            <div class="col-sm-9 pl-0 pt-2">
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck17" name="voiceSelection[]" value="voice3"
                                          @if(in_array('voice3', $voice_list))
                                             checked
                                          @endif>
                                    <label class="custom-control-label" for="customCheck17"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row ml-1">
                            <div class="col-sm-9 pl-0 pt-2">
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck18" name="voiceSelection[]" value="voice4"
                                          @if(in_array('voice4', $voice_list))
                                             checked
                                          @endif>
                                    <label class="custom-control-label" for="customCheck18"></label>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="">More +</a>
                {{--<div class="row">--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<h3>Oli</h3>--}}
                        {{--Corporate, Soothing, Upbeat, Fresh, Great voice over artist as well as highly qualified sound engineer--}}
                        {{----}}
                    {{--</div>--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<h3>OK to use</h3>--}}
                        {{--<div class="custom-control custom-checkbox casual">--}}
                          {{--<input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                          {{--<label class="custom-control-label" for="customCheck1"></label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
        </div>
    </div>
</div>
@endsection

