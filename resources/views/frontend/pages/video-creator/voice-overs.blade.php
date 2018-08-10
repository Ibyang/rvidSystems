@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form mb-5">
                <h3 class="my-account-title mb-3">Explore Voice Overs</h3>
                <h3 class="mt-5 mb-3">Voice Preference</h3>
                <b>You can select from 3 options</b>
                <div class="row m-r-l">
                    <div class="col-md-auto text-center">
                        <div class="c0066ff font-weight-bold">1. RANDOM VOICE</div>
                        <div>We Pick Random Voices <br>for Your Videos</div>
                    </div>
                    <div class="col-md-auto text-center p-0">
                        <div class="c0066ff font-weight-bold">2. ONE VOICE</div>
                        <div>You use the same Voice <br>for all Your Videos</div>
                    </div>
                    <div class="col-md-auto text-center p-0">
                        <div class="c0066ff font-weight-bold">3. ROTATION VOICE</div>
                        <div>You pick many voices and they are <br>rotated for each new individual video</div>
                    </div>
                </div>
                <div class="color-404 mt-4"><b>Voice</b></div>

                <form class="form-horizontal" method="POST" action="{{ route('account-update-voiceovers') }}">
                    {{ csrf_field() }}

                        <div class="row m-r-l">
                            <div class="col-sm-8 select-form">
                                 <!-- <select name="" class="col-11 form-control mt-2 mb-4">
                                            <option>Random Voice</option>
                                 </select> -->
                                 <select name="stateVoiceFormat" class="col-11 form-control mt-2 mb-4">
                                        <option value="Random Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'Random Voice') ? "selected=\"selected\"" : "" }}}>Random Voice</option>
                                        <option value="One Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'One Voice') ? "selected=\"selected\"" : "" }}}>One Voice</option>
                                        <option value="Rotated Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'Rotated Voice') ? "selected=\"selected\"" : "" }}}>Rotation Voice</option>
                                 </select>
                            </div>
                        </div>
                        <div class="row m-r-l">
                                <div class="col-sm">
                                        <div class="d-flex justify-content-between mb-4">
                                                <div class="color-404"><b>Select Voice Overs</b></div>  
                                                <div class="color-0066ff font12 align-self-center"><b>OK to use</b></div>  
                                        </div>
                                        <div class="border-bot5">
                                                <div class="row m-r-l">
                                                        <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/grant.jpg') }}"></div>
                                                        <div class="col-sm-7 p-0">
                                                            <div class="d-flex justify-content-between my-2">
                                                                    <div class="color-0066ff font12 pt-2 v-s-text"><b>GRANT</b></div>
                                                                    <div class="color-0066ff font12 pt-2">
                                                                        <a href="javascript:void(0)" onclick="document.getElementById('voiceGrant').play()"><i class="voice-icon v-i-play"></i></a><b>Play Sample</b></div>
                                                                    <div>
                                                                        <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                            <div class="custom-control custom-checkbox standard ml-2">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck6" name="voiceSelection[]" value="grant.wav" {{{ (!empty($voice_list) && (in_array('grant.wav', $voice_list))) ? "checked" : ""}}}>
                                                                                <label class="custom-control-label" for="customCheck6"></label>
                                                                            </div>
                                                                        </div>
                                                                        <audio id="voiceGrant" src="{{ asset('storage/voice_over_files/grant.wav') }}"></audio>
                                                                    </div>
                                                            </div>
                                                            <div class="font14 my-2 v-s-text">Professional, corporate, and "very now".</div>
                                                            <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseGrant" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b></a><i class="v-i-up"></i>
                                                            <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseGrant">
                                                                With a background in commercial radio and broadcasting starting back in 1999, during which he took on announcing and audio production roles all around Australia, Grant is a voice actor with over 18 years’ experience, voicing daily for some of Australia’s biggest brands and labels.
                                                            </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="border-bot5">
                                                <div class="row m-r-l">
                                                        <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/luke.jpg') }}"></div>
                                                        <div class="col-sm-7 p-0">
                                                            <div class="d-flex justify-content-between my-2">
                                                                    <div class="color-0066ff font12 pt-2 v-s-text"><b>LUKE</b></div>
                                                                    <div class="color-0066ff font12 pt-2"><a href="javascript:void(0)" onclick="document.getElementById('voiceLuke').play()"><i class="voice-icon v-i-play"></i></a><b>Play Sample</b></div>
                                                                    <div>
                                                                        <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                            <div class="custom-control custom-checkbox standard ml-2">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck7" name="voiceSelection[]" value="luke.wav" {{{ (!empty($voice_list) && (in_array('luke.wav', $voice_list))) ? "checked" : ""}}}>
                                                                                <label class="custom-control-label" for="customCheck7"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <audio id="voiceLuke" src="{{ asset('storage/voice_over_files/luke.wav') }}"></audio>
                                                            </div>
                                                            <div class="font14 my-2 v-s-text">Young, fresh, and warm.</div>
                                                            <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseLuke" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b></a><i class="v-i-up"></i>
                                                            <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseLuke">
                                                                data
                                                            </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="border-bot5">
                                                <div class="row m-r-l">
                                                        <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/mark.jpg') }}"></div>
                                                        <div class="col-sm-7 p-0">
                                                            <div class="d-flex justify-content-between my-2">
                                                                    <div class="color-0066ff font12 pt-2 v-s-text"><b>MARK</b></div>
                                                                    <div class="color-0066ff font12 pt-2"><i class="voice-icon v-i-play"></i><b>Play Sample</b></div>
                                                                    <div>
                                                                        <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                            <div class="custom-control custom-checkbox standard ml-2">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck8" name="voiceSelection[]" value="mark.wav"  {{{ (!empty($voice_list) && (in_array('mark.wav', $voice_list))) ? "checked" : ""}}}>
                                                                                <label class="custom-control-label" for="customCheck8"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <audio id="voiceLuke" src="{{ asset('storage/voice_over_files/mark.wav') }}"></audio>
                                                            </div>
                                                            <div class="font14 my-2 v-s-text">Friendly, mature, and smooth</div>
                                                            <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseMark" role="button" aria-expanded="false" aria-controls="collapseMark"><i class="voice-icon v-i-info"></i><b>More Information</b></a><i class="v-i-up"></i>
                                                            <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseMark">
                                                                data
                                                            </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-sm">
                                        <div class="d-flex justify-content-between mb-4">
                                                <div class="color-404"><b>Select Voice Overs</b></div>  
                                                <div class="color-0066ff font12 align-self-center"><b>OK to use</b></div>  
                                        </div>
                                        <div class="border-bot5">
                                                <div class="row m-r-l">
                                                        <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/karin.jpg') }}"></div>
                                                        <div class="col-sm-7 p-0">
                                                            <div class="d-flex justify-content-between my-2">
                                                                    <div class="color-0066ff font12 pt-2 v-s-text"><b>KARIN</b></div>
                                                                    <div class="color-0066ff font12 pt-2"><a href="javascript:void(0)" onclick="document.getElementById('voiceKarin').play()"><i class="voice-icon v-i-play"></i></a><b>Play Sample</b></div>
                                                                    <div>
                                                                        <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                            <div class="custom-control custom-checkbox standard ml-2">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck9" name="voiceSelection[]" value="karin.wav" {{{ (!empty($voice_list) && (in_array('karin.wav', $voice_list))) ? "checked" : ""}}}>
                                                                                <label class="custom-control-label" for="customCheck9"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <audio id="voiceKarin" src="{{ asset('storage/voice_over_files/karin.wav') }}"></audio>
                                                            </div>
                                                            <div class="font14 my-2 v-s-text">Professional, corporate, and "very now".</div>
                                                            <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseKarin" role="button" aria-expanded="false" aria-controls="collapseKarin"><i class="voice-icon v-i-info"></i><b>More Information</b></a><i class="v-i-up"></i>
                                                            <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseKarin">
                                                                data
                                                            </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="border-bot5">
                                                <div class="row m-r-l">
                                                        <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/odette.jpg') }}"></div>
                                                        <div class="col-sm-7 p-0">
                                                            <div class="d-flex justify-content-between my-2">
                                                                    <div class="color-0066ff font12 pt-2 v-s-text"><b>ODETTE</b></div>
                                                                    <div class="color-0066ff font12 pt-2"><a href="javascript:void(0)" onclick="document.getElementById('voiceOddete').play()"><i class="voice-icon v-i-play"></i></a><b>Play Sample</b></div>
                                                                    <div>
                                                                        <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                            <div class="custom-control custom-checkbox standard ml-2">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck10" name="voiceSelection[]" value="odette.wav" {{{ (!empty($voice_list) && (in_array('odette.wav', $voice_list))) ? "checked" : ""}}}>
                                                                                <label class="custom-control-label" for="customCheck10"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <audio id="voiceOddete" src="{{ asset('storage/voice_over_files/odette.wav') }}"></audio>
                                                            </div>
                                                            <div class="font14 my-2 v-s-text">Warm, familiar nature and mature.</div>
                                                            <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseOdette" role="button" aria-expanded="false" aria-controls="collapseOdette"><i class="voice-icon v-i-info"></i><b>More Information</b></a><i class="v-i-up"></i>
                                                            <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseOdette">
                                                                data
                                                            </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="border-bot5">
                                                <div class="row m-r-l">
                                                        <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/luisa.jpg') }}"></div>
                                                        <div class="col-sm-7 p-0">
                                                            <div class="d-flex justify-content-between my-2">
                                                                    <div class="color-0066ff font12 pt-2 v-s-text"><b>LUISA</b></div>
                                                                    <div class="color-0066ff font12 pt-2"><a href="javascript:void(0)" onclick="document.getElementById('voiceLouisa').play()"><i class="voice-icon v-i-play"></i></a><b>Play Sample</b></div>
                                                                    <div>
                                                                        <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                            <div class="custom-control custom-checkbox standard ml-2">
                                                                                <input type="checkbox" class="custom-control-input" id="customCheck11" name="voiceSelection[]" value="odette.wav"  {{{ (!empty($voice_list) && (in_array('odette.wav', $voice_list))) ? "checked" : ""}}}>
                                                                                <label class="custom-control-label" for="customCheck11"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <audio id="voiceOddete" src="{{ asset('storage/voice_over_files/odette.wav') }}"></audio>
                                                            </div>
                                                            <div class="font14 my-2 v-s-text">Fresh, playful and energetic</div>
                                                            <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseLuisa" role="button" aria-expanded="false" aria-controls="collapseLuisa"><i class="voice-icon v-i-info"></i><b>More Information</b></a><i class="v-i-up"></i>
                                                            <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseLuisa">
                                                                data
                                                            </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary font-weight-bold">
                                            Update Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>    
              </form>  
        </div>
    </div>
</div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">
        $(document).ready(function(){

        
        });
    </script>

@stop

