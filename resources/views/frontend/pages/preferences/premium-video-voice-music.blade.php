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
                <h3 class="my-account-title">Premium Video Update Voice + Music</h3>
                <table class="table-action mb-4" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>Video #</td>
                        <td>Address</td>
                    </tr>
                    <tr>
                        <td>#<b>{{ $videoid }}</b></td>
                        <td>
                            <div class="d-flex">
                                <div><b> {{ $videoAddress }}</b></div>
                                <div class="ml-auto"><a href=" {{ route('account-video-tracker') }} ">Return My Tracker</a></div>
                            </div>
                        </td>
                    </tr>
                </table>

                <form id="frmStep4" method="POST" action="{{ route('account-video-system-processStep4')}}">
                    {{ csrf_field() }}

                    <h3>Voice/Music Preferences</h3>
                    Voice Format
                    <div class="register-form">
                        <select name="stateVoiceFormat" class="form-control col-7">
                            <option value="Random Voice(Standard)" {{ $voice['voice_format'] === 'Random Voice(Standard)' ? 'selected' : '' }}>Random Voice (Standard)</option>
                            <option value="One Voice" {{ $voice['voice_format'] === 'One Voice' ? 'selected' : '' }}>One Voice</option>
                            <option value="Rotation Voice" {{ $voice['voice_format'] === 'Rotation Voice' ? 'selected' : '' }}>Rotation Voice</option>
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
                    <h3>Select Music Style</h3>
                    <div class="register-form">
                        <select name="stateMusicStyle" class="form-control col-7">
                            <option value="Random Music(Standard)" {{ $music['music_style'] === 'Random Music(Standard)' ? 'selected' : '' }}>Random Music (Standard)</option>
                            <option value="One Music" {{ $music['music_style'] === 'One Music' ? 'selected' : '' }}>One Music</option>
                            <option value="Rotation Music" {{ $music['music_style'] === 'Rotation Music' ? 'selected' : '' }}>Rotation Music</option>
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
                                        <input type="checkbox" class="custom-control-input" id="customCheck19" name="musicSelection[]" value="music1"
                                               @if(in_array('music1', $music_list))
                                                   checked
                                               @endif>>
                                        <label class="custom-control-label" for="customCheck19"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="music-block-play"><i class="play-icon"></i>Cafe Jazz 2</div>
                                </div>
                                <div class="col-sm my-account-subcription">
                                    <div class="custom-control custom-checkbox standard">
                                        <input type="checkbox" class="custom-control-input" id="customCheck20" name="musicSelection[]" value="music2"
                                               @if(in_array('music2', $music_list))
                                                    checked
                                               @endif>
                                        <label class="custom-control-label" for="customCheck20"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
