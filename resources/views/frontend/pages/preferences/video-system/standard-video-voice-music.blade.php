@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title mb-3">Manual Video System - Step 4</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            
            <div class="d-flex justify-content-between join-step-next p-1 mb-3 border-bot pb-3">
                    <button class="btn btn-primary bg-333 btn-no-border px-4"><i class="arrow-left"></i> BACK</button>
            </div>

            <form id="frmStep4" method="POST" action="{{ route('account-video-system-processStep4')}}">
                {{ csrf_field() }}

                <h3>Voice Preference</h3>
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
                <div class="row m-r-l">
                    <div class="col-sm-8 select-form">
                         <!-- <select name="" class="col-11 form-control mt-2 mb-4">
                                    <option>Random Voice</option>
                         </select> -->
                         <select name="stateVoiceFormat" class="form-control col-8">
                                    <option value="Random Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'Random Voice') ? "selected=\"selected\"" : "" }}}>Random Voice</option>
                                    <option value="One Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'One Voice') ? "selected=\"selected\"" : "" }}}>One Voice</option>
                                    <option value="Rotated Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'Rotated Voice') ? "selected=\"selected\"" : "" }}}>Rotated Voice</option>
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
                                                            <div class="color-0066ff font12 pt-2"><a href="javascript:void(0)" onclick="document.getElementById('voiceGrant').play()"><i class="voice-icon v-i-play"></i></a><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck6" name="voiceSelection[]" value="grant.wav" {{{ (!empty($voice_list) && (in_array('grant.wav', $voice_list))) ? "checked" : ""}}}>
                                                                        <label class="custom-control-label" for="customCheck6"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <audio id="voiceGrant" src="{{ asset('storage/voice_over_files/grant.wav') }}"></audio>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Professional, corporate, and "very now".</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseGrant" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
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
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseLuke" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseLuke">
                                                        Luke is a talented voice over artist with a smooth and fresh-sounding voice. He is in his 20’s, which makes him perfect for both serious and light-hearted reads that require a younger-adult feel. Luke has done a range of different types of voice overs – from the answering messages of local businesses, to television spots for international clients.
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
                                                            <div class="color-0066ff font12 pt-2"><a href="javascript:void(0)" onclick="document.getElementById('voiceMark').play()"><i class="voice-icon v-i-play"></i></a><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck8" name="voiceSelection[]" value="mark.wav" {{{ (!empty($voice_list) && (in_array('mark.wav', $voice_list))) ? "checked" : ""}}}>
                                                                        <label class="custom-control-label" for="customCheck8"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <audio id="voiceMark" src="{{ asset('storage/voice_over_files/mark.wav') }}"></audio>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Friendly, mature, and smooth</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseMark" role="button" aria-expanded="false" aria-controls="collapseMark"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseMark">
                                                        Mark is a voice over artist with almost 30 years in the radio industry. You can hear Mark each morning on Perth’s 96fm. His voice over style is versatile, smooth, warm and friendly, and suits corporate, soft-sell, informative & training projects.
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
                                                            <div class="color-0066ff font12 pt-2"><i class="voice-icon v-i-play"></i><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck9" name="voiceSelection[]" value="karin.wav" {{{ (!empty($voice_list) && (in_array('karin.wav', $voice_list))) ? "checked" : ""}}}>
                                                                        <label class="custom-control-label" for="customCheck9"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Professional, corporate, and "very now".</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseKarin" role="button" aria-expanded="false" aria-controls="collapseKarin"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseKarin">
                                                        Karin’s mature, warm Australian voice has been heard on many Perth Television and Radio commercials and was a regular presenter on Channel 7 Perth’s long-running travel show, Home in WA. With 20 years’ experience across all forms of Media, Karin’s style ranges from corporate to casual and takes in voice-overs for TV, radio & cinema advertising, documentary and corporate video narration, on-hold messaging and live event hosting.
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
                                                            <div class="color-0066ff font12 pt-2"><a href="javascript:void(0)" onclick="document.getElementById('voiceOddete').play()"><i class="voice-icon v-i-play mr-0"></i></a><b>Play Sample</b></div>
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
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseOdette" role="button" aria-expanded="false" aria-controls="collapseOdette"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseOdette">
                                                        Odette has a velvety, warm voice with a soft Australian accent. She easily slips into accents and characters and is often asked to voice projects for global brands that require a distinctly “neutral” accent. She has been working as an actor and voice artist since graduating from The Victorian College Of The Arts in 1997. Some of her television and film credits include, Underbelly – Fat Tony and Co, Stingers, The Secret Life Of Us, City Homicide, Eugenie Sandler P.I, Little Deaths and The Book Of Revelation.
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
                                                            <div class="color-0066ff font12 pt-2"><a href="javascript:void(0)" onclick="document.getElementById('voiceLouisa').play()"><i class="voice-icon v-i-play mr-0"></i></a><b>Play Sample</b></div>
                                                            <div>
                                                                <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                    <div class="custom-control custom-checkbox standard ml-2">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck11" name="voiceSelection[]" value="louisa.wav" {{{ (!empty($voice_list) && (in_array('louisa.wav', $voice_list))) ? "checked" : ""}}}>
                                                                        <label class="custom-control-label" for="customCheck11"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <audio id="voiceLouisa" src="{{ asset('storage/voice_over_files/louisa.wav') }}"></audio>
                                                    </div>
                                                    <div class="font14 my-2 v-s-text">Fresh, playful and energetic</div>
                                                    <a class="font12 color-0066ff v-s-text" data-toggle="collapse" href="#collapseLuisa" role="button" aria-expanded="false" aria-controls="collapseLuisa"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                                    <div class="collapse text-justify font14 mt-2 v-s-text" id="collapseLuisa">
                                                        Louisa has a bright, friendly and polished voice with a subtle Australian accent. She has been working as a voice over artist for ten years, and has voiced everything from instructional videos on how to teat-seal cows to sensual air-conditioning commercials. Recent clients include Coles, Domayne, University of Wollongong, Bendigo Bank, IGA, Harvey Norman, Bupa and News Corp Australia. You’ve probably heard her voice if you’ve ever been stuck on hold, as she has voiced dozens of phone systems for companies across Australia and New Zealand. Louisa’s speciality is long-form explainer and e-learning reads – with her clear and friendly tone and a hint of humour, she can make your product shine!
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="color-404"><b>Select Music Style</b></div>
                <div class="row m-r-l">
                    <div class="col-sm-8 select-form">
                         <!-- <select name="state" class="col-11 form-control mt-2 mb-4">
                                    <option>Random Music</option>
                         </select> -->
                         <select name="stateMusicStyle" class="col-11 form-control mt-2 mb-4">
                            <option value="Random Music Tracks" {{{ (isset($template['music_style']) && $template['music_style'] == 'Random Music Tracks') ? "selected=\"selected\"" : "" }}}>Random Music Tracks</option>
                            <option value="Same Music for all my Videos" {{{ (isset($template['music_style']) && $template['music_style'] == 'Same Music for all my Videos') ? "selected=\"selected\"" : "" }}}>Same Music for all my Videos</option>
                            <option value="Rotate My Music" {{{ (isset($template['music_style']) && $template['music_style'] == 'Rotate My Music') ? "selected=\"selected\"" : "" }}}>Rotate My Music</option>
                        </select>
                    </div>
                </div>
                <div class="row m-r-l">

                        <div class="col-sm">
                                <div class="d-flex flex-column">
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-chill"></i></div>
                                              <div class="align-self-center"><b>CHILLED AND AMBIENT</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Low-tempo, down-beat, light electronic music. Modern sounding, without the heavy, pounding beats&#0010; of dance music. Often lots of pads, strings, and light melodic sounds."><i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <div class="align-self-center text-center"><a class="color-0066ff" data-toggle="collapse" href="#collapseChilled" role="button" aria-expanded="false" aria-controls="collapseChilled"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseChilled">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioRoadTrip" style="display:none;" src="{{ asset('storage/revid_music/Chilled_Ambient/OPUZZ_CP_08_Road_Trip.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="roadTrip"></i><b>Road Trip</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="rtrip" name="musicSelection[]" value="OPUZZ_CP_08_Road_Trip.mp3" 
                                                                        @if(in_array('OPUZZ_CP_08_Road_Trip.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="rtrip"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioSilk" style="display:none;" src="{{ asset('storage/revid_music/Chilled_Ambient/SCAC_03_Silk.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="silk"></i><b>Silk</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="slk" name="musicSelection[]" value="SCAC_03_Silk.mp3" 
                                                                        @if(in_array('SCAC_03_Silk.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="slk"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioSunSpots" style="display:none;" src="{{ asset('storage/revid_music/Chilled_Ambient/SCAC_05_Sun_Spots.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="sunSpots"></i><b>Sun Spots</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="sun-spots" name="musicSelection[]" value="SCAC_05_Sun_Spots.mp3" 
                                                                        @if(in_array('SCAC_05_Sun_Spots.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="sun-spots"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioUltramarine" style="display:none;" src="{{ asset('storage/revid_music/Chilled_Ambient/SCAC_08_Ultramarine.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="ultramarine"></i><b>Ultramarine</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="ultram" name="musicSelection[]" value="SCAC_08_Ultramarine.mp3" 
                                                                        @if(in_array('SCAC_08_Ultramarine.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="ultram"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioWorldOnline" style="display:none;" src="{{ asset('storage/revid_music/Chilled_Ambient/SCAC_10_World_Online.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="worldOnline"></i><b>World Online</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="world-online" name="musicSelection[]" value="SCAC_10_World_Online.mp3" 
                                                                        @if(in_array('SCAC_10_World_Online.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="world-online"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioSolarGroove" style="display:none;" src="{{ asset('storage/revid_music/Chilled_Ambient/SG08-Solar_Groove.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="solarGroove"></i><b>Solar Groove</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="solar-groove" name="musicSelection[]" value="SG08-Solar_Groove.mp3" 
                                                                        @if(in_array('SG08-Solar_Groove.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="solar-grove"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-clc"></i></div>
                                              <div class="align-self-center"><b>CLASSICAL</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Classical music creates a sense of quality, sophistication and class for your brand message and&#0010; products. These music tracks contain a mix of well-known orchestral pieces and symphonies, string&#0010; and piano-led pieces.">
                                                  <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseClassical" role="button" aria-expanded="false" aria-controls="collapseClassical"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseClassical">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioBizet" style="display:none;" src="{{ asset('storage/revid_music/Classical/CSS40_Light_02_BIZET_Entracte_to_Act3_Carmen.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="bizet"></i><b>Bizet</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="cbizet" name="musicSelection[]" value="CSS40_Light_02_BIZET_Entracte_to_Act3_Carmen.mp3" 
                                                                        @if(in_array('CSS40_Light_02_BIZET_Entracte_to_Act3_Carmen.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cbizet"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioMassenet" style="display:none;" src="{{ asset('storage/revid_music/Classical/CSS40_Light_04_MASSENET_Meditation.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="massenet"></i><b>Massenet</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="cmassenet" name="musicSelection[]" value="CSS40_Light_04_MASSENET_Meditation.mp3" 
                                                                        @if(in_array('CSS40_Light_04_MASSENET_Meditation.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cmassenet"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioVerdi" style="display:none;" src="{{ asset('storage/revid_music/Classical/CSS40_Light_05_VERDI_Libiamo_Ne_Lieti_Calici.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="verdi"></i><b>Verdi</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="cverdi" name="musicSelection[]" value="CSS40_Light_05_VERDI_Libiamo_Ne_Lieti_Calici.mp3" 
                                                                        @if(in_array('CSS40_Light_05_VERDI_Libiamo_Ne_Lieti_Calici.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cverdi"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioMozart" style="display:none;" src="{{ asset('storage/revid_music/Classical/CSS40_Light_08_MOZART_Divertimento_No2.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="mozart"></i><b>Mozart</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="cmozart" name="musicSelection[]" value="CSS40_Light_08_MOZART_Divertimento_No2.mp3" 
                                                                        @if(in_array('CSS40_Light_08_MOZART_Divertimento_No2.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cmozart"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioDittersdorf" style="display:none;" src="{{ asset('storage/revid_music/Classical/CSS40_Light_11_DITTERSDORF_Andante_in_Eb_Major.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="dittersdorf"></i><b>Dittersdorf</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="cdittersdorf" name="musicSelection[]" value="CSS40_Light_11_DITTERSDORF_Andante_in_Eb_Major.mp3" 
                                                                        @if(in_array('CSS40_Light_11_DITTERSDORF_Andante_in_Eb_Major.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cdittersdorf"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioBach" style="display:none;" src="{{ asset('storage/revid_music/Classical/OPUZZ_CF_05_BACH_French_Suite_No5_in_G_Allemande.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="bach"></i><b>Bach</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="cbach" name="musicSelection[]" value="OPUZZ_CF_05_BACH_French_Suite_No5_in_G_Allemande.mp3" 
                                                                        @if(in_array('OPUZZ_CF_05_BACH_French_Suite_No5_in_G_Allemande.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cbach"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-cntry"></i></div>
                                              <div class="align-self-center"><b>COUNTRY</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Country, Western, Country Rock, Country Blues and the like. Generally simple harmonies&#0010; accompanied mostly by banjos, electric & acoustic guitars, fiddles and harmonicas.">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseCountry" role="button" aria-expanded="false" aria-controls="collapseCountry"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseCountry">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioSuburbanCowboy" style="display:none;" src="{{ asset('storage/revid_music/Country/COR2_C&W3_Suburban_Cowboy.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="suburbanCowboy"></i><b>Suburban Cowboy</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="scowboy" name="musicSelection[]" value="COR2_C&W3_Suburban_Cowboy.mp3" 
                                                                        @if(in_array('OPUZZ_CP_08_Road_Trip.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="scowboy></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioMonOncle" style="display:none;" src="{{ asset('storage/revid_music/Country/COR2_C&W4_Mon_Oncle_Alfred.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="monOncle"></i><b>Mon Oncle Alfred</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="oncle" name="musicSelection[]" value="COR2_C&W4_Mon_Oncle_Alfred.mp3" 
                                                                        @if(in_array('COR2_C&W4_Mon_Oncle_Alfred.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="oncle"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioLivingRoom" style="display:none;" src="{{ asset('storage/revid_music/Country/GMP_Wooden_03_Living Room_Jam.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="livingRoom"></i><b>Living Room Jam</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="lroom" name="musicSelection[]" value="GMP_Wooden_03_Living_Room_Jam.mp3" 
                                                                        @if(in_array('GMP_Wooden_03_Living_Room_Jam.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="lroom"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioOnTheEdge" style="display:none;" src="{{ asset('storage/revid_music/Country/GMP_Wooden_07_On_the_Edge.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="onTheEdge"></i><b>On the Edge</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="edge" name="musicSelection[]" value="GMP_Wooden_07_On_the_Edge.mp3" 
                                                                        @if(in_array('GMP_Wooden_07_On_the_Edge.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="edge"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioRockin" style="display:none;" src="{{ asset('storage/revid_music/Country/QCCS_CO18_07_Rockin.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="rockin"></i><b>Rockin</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="arock" name="musicSelection[]" value="QCCS_CO18_07_Rockin.mp3" 
                                                                        @if(in_array('QCCS_CO18_07_Rockin.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="arock"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioBluesDiddy" style="display:none;" src="{{ asset('storage/revid_music/Country/QCCS_CV24_08_Blues_Diddy.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="bluesDiddy"></i><b>Blues Diddy</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="blues" name="musicSelection[]" value="QCCS_CV24_08_Blues_Diddy.mp3" 
                                                                        @if(in_array('QCCS_CV24_08_Blues_Diddy.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="blues"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-dance"></i></div>
                                              <div class="align-self-center"><b>DANCE AND CLUB</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Fast-paced, up-tempo electronic music, typically with a heavy 4/4 kick drum beat accompanied by&#0010; deep bass, synths, and keyboard leads.">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseDanceClub" role="button" aria-expanded="false" aria-controls="collapseDanceClub"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseDanceClub">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioClubMusic" style="display:none;" src="{{ asset('storage/revid_music/Dance_Club/AB_club-music-broadcast-bed.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="clubMusic"></i><b>Club Music Broadcast Bed</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="cmusic" name="musicSelection[]" value="AB_club-music-broadcast-bed.mp3" 
                                                                        @if(in_array('AB_club-music-broadcast-bed.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cmusic"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioDanceElevation" style="display:none;" src="{{ asset('storage/revid_music/Dance_Club/AB_dance-elevation.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="danceElevation"></i><b>Dance Elevation</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="dancelevation" name="musicSelection[]" value="AB_dance-elevation.mp3" 
                                                                        @if(in_array('AB_dance-elevation.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="dancelevation"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioHighJinks" style="display:none;" src="{{ asset('storage/revid_music/Dance_Club/AB_high-jinks.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="highJinks"></i><b>High Jinks</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="hjinks" name="musicSelection[]" value="AB_high-jinks.mp3" 
                                                                        @if(in_array('AB_high-jinks.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="hjinks"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioHouseMyHome" style="display:none;" src="{{ asset('storage/revid_music/Dance_Club/OPUZZ_CH_07_House_My_Home.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="houseMyHome"></i><b>House My Home</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="house" name="musicSelection[]" value="OPUZZ_CH_07_House_My_Home.mp3" 
                                                                        @if(in_array('OPUZZ_CH_07_House_My_Home.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="house"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioHeavenEarth" style="display:none;" src="{{ asset('storage/revid_music/Dance_Club/SCAC_06_Heaven_And_Earth.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="heavenEarth"></i><b>Heaven and Earth</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="hearth" name="musicSelection[]" value="SCAC_06_Heaven_And_Earth.mp3" 
                                                                        @if(in_array('SCAC_06_Heaven_And_Earth.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="hearth"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioPleasureMe" style="display:none;" src="{{ asset('storage/revid_music/Dance_Club/SG07-Pleasure_Me.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="pleasureMe"></i><b>Pleasure Me</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="pleaMe" name="musicSelection[]" value="SG07-Pleasure_Me.mp3" 
                                                                        @if(in_array('SG07-Pleasure_Me.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="pleaMe"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-easy"></i></div>
                                              <div class="align-self-center"><b>EASY LISTENING</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Easy on the ears, these tracks are neither harsh and heavy, or slow and sleepy. Typically guitar or&#0010; piano driven with an array of influences, ">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseEasyListening" role="button" aria-expanded="false" aria-controls="collapseEasyListening"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseEasyListening">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioFGUkulele" style="display:none;" src="{{ asset('storage/revid_music/Easy_Listening/AB_fun-guitar-and-ukulele.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="fGUkulele"></i><b>Fun Guitar and Ukulele</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="fg" name="musicSelection[]" value="AB_fun-guitar-and-ukulele.mp3" 
                                                                        @if(in_array('AB_fun-guitar-and-ukulele.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="fg"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioRising" style="display:none;" src="{{ asset('storage/revid_music/Easy_Listening/AB_rising-up.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="rising"></i><b>Rising</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="adrising" name="musicSelection[]" value="AB_rising-up.mp3" 
                                                                        @if(in_array('AB_rising-up.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="adrising"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioCitrine" style="display:none;" src="{{ asset('storage/revid_music/Easy_Listening/SCFO_01_Citrine.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="citrine"></i><b>Citrine</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="crine" name="musicSelection[]" value="SCFO_01_Citrine.mp3" 
                                                                        @if(in_array('SCFO_01_Citrine.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="crine"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioTopDown" style="display:none;" src="{{ asset('storage/revid_music/Easy_Listening/SCFO_04_Top_Down.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="topDown"></i><b>Top Down</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="down" name="musicSelection[]" value="SCFO_04_Top_Down.mp3" 
                                                                        @if(in_array('SCFO_04_Top_Down.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="down"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioUtopia" style="display:none;" src="{{ asset('storage/revid_music/Easy_Listening/SCFO_05_Utopia.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="utopia"></i><b>Utopia</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="utpia" name="musicSelection[]" value="SCFO_05_Utopia.mp3" 
                                                                        @if(in_array('SCFO_05_Utopia.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="utpia"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioPacificCoast" style="display:none;" src="{{ asset('storage/revid_music/Easy_Listening/SM_WW06_Pacific_Coast_Cool.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="pacificCoast"></i><b>Pacific Coast Cool</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="coast" name="musicSelection[]" value="SM_WW06_Pacific_Coast_Cool.mp3" 
                                                                        @if(in_array('SM_WW06_Pacific_Coast_Cool.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="coast"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-funk"></i></div>
                                              <div class="align-self-center"><b>FUNK AND SOUL</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Bass-popping, groovy Funk and smooth Soul, with jazzy rhythms. Electric guitar and bass with&#0010; wailing organs and a touch of brass. ‘Get On Up!’">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseFunkSoul" role="button" aria-expanded="false" aria-controls="collapseFunkSoul"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseFunkSoul">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioSenorFunk" style="display:none;" src="{{ asset('storage/revid_music/Funk_Soul/Amber04_Senor_Funk.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="senorFunk"></i><b>Senor Funk</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="senor" name="musicSelection[]" value="Amber04_Senor_Funk.mp3" 
                                                                        @if(in_array('Amber04_Senor_Funk.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="senor"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioTootsie" style="display:none;" src="{{ asset('storage/revid_music/Funk_Soul/OPUZZ_FE_03_Tootsie.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="tootsie"></i><b>Tootsie</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="toot" name="musicSelection[]" value="OPUZZ_FE_03_Tootsie.mp3" 
                                                                        @if(in_array('OPUZZ_FE_03_Tootsie.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="toot"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioGrooveConquest" style="display:none;" src="{{ asset('storage/revid_music/Funk_Soul/OPUZZ_FE_04_Groove_Conquest.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="grooveConquest"></i><b>Groove Conquest</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="groove" name="musicSelection[]" value="OPUZZ_FE_04_Groove_Conquest.mp3" 
                                                                        @if(in_array('OPUZZ_FE_04_Groove_Conquest.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="groove"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioLoveCrazy" style="display:none;" src="{{ asset('storage/revid_music/Funk_Soul/OPUZZ_FE_06_Love_Crazy.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="loveCrazy"></i><b>Love Crazy</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="crazy" name="musicSelection[]" value="OPUZZ_FE_06_Love_Crazy.mp3" 
                                                                        @if(in_array('OPUZZ_FE_06_Love_Crazy.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="crazy"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioGettingDown" style="display:none;" src="{{ asset('storage/revid_music/Funk_Soul/OPUZZ_FE_08_Getting_Down.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="gettingDown"></i><b>Getting Down</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="getdown" name="musicSelection[]" value="OPUZZ_FE_08_Getting_Down.mp3" 
                                                                        @if(in_array('OPUZZ_FE_08_Getting_Down.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="getdown"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioTalkBack" style="display:none;" src="{{ asset('storage/revid_music/Funk_Soul/OPUZZ_FE_10_Talk_Back.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="talkBack"></i><b>Talk Back</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="tback" name="musicSelection[]" value="OPUZZ_FE_10_Talk_Back.mp3" 
                                                                        @if(in_array('OPUZZ_FE_10_Talk_Back.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="tback"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                </div>
                        </div>
                        <div class="col-sm">
                                <div class="d-flex flex-column">
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-jazz"></i></div>
                                              <div class="align-self-center"><b>JAZZ</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Comes in many flavours. Using elements of swing, syncopation and improvisation, Jazz brings the&#0010; style into the modern age with mid-tempo electro-styles, smooth bass and synth lines.">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseJazz" role="button" aria-expanded="false" aria-controls="collapseJazz"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseJazz">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioIntoPink" style="display:none;" src="{{ asset('storage/revid_music/Jazz/COR1_Pop5_Into_the_Pink.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="intoPink"></i><b>Into the Pink</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="inPink" name="musicSelection[]" value="COR1_Pop5_Into_the_Pink.mp3" 
                                                                        @if(in_array('COR1_Pop5_Into_the_Pink.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="inPink"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioMelloBossa" style="display:none;" src="{{ asset('storage/revid_music/Jazz/COR3_Jazz2_Mello_Bossa.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="melloBossa"></i><b>Mello Bossa</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="mBossa" name="musicSelection[]" value="COR3_Jazz2_Mello_Bossa.mp3" 
                                                                        @if(in_array('COR3_Jazz2_Mello_Bossa.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="mBossa"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioWaveHello" style="display:none;" src="{{ asset('storage/revid_music/Jazz/CSS10_Smooth_01_Wave_Hello.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="waveHello"></i><b>Wave Hello</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="wave" name="musicSelection[]" value="CSS10_Smooth_01_Wave_Hello.mp3" 
                                                                        @if(in_array('CSS10_Smooth_01_Wave_Hello.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="wave"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioGiveMe" style="display:none;" src="{{ asset('storage/revid_music/Jazz/CSS27_RealJazz_05_Give_Me_Five.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="giveMe"></i><b>Give Me Five</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="gMe" name="musicSelection[]" value="CSS27_RealJazz_05_Give_Me_Five.mp3" 
                                                                        @if(in_array('CSS27_RealJazz_05_Give_Me_Five.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="gMe"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioWestCoast" style="display:none;" src="{{ asset('storage/revid_music/Jazz/CSS27_RealJazz_06_West_Coast_Blues.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="westCoast"></i><b>West Coast Blues</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="wCoast" name="musicSelection[]" value="CSS27_RealJazz_06_West_Coast_Blues.mp3" 
                                                                        @if(in_array('CSS27_RealJazz_06_West_Coast_Blues.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="wCoast"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioLaidDown" style="display:none;" src="{{ asset('storage/revid_music/Jazz/OPUZZ_LD_01_Laid_Down.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="laidDown"></i><b>Laid Down</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="lDown" name="musicSelection[]" value="OPUZZ_LD_01_Laid_Down.mp3" 
                                                                        @if(in_array('OPUZZ_LD_01_Laid_Down.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="lDown"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-lounge"></i></div>
                                              <div class="align-self-center"><b>LOUNGE AND GROOVES</b></div>
                                              <div class="align-self-center px-1">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Electronic-styled, mid-tempo with soft synths, varied percussion and a cool groove. Can incorporate&#0010; elements from many styles, like jazz, electro, funk and dance.">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseLounge" role="button" aria-expanded="false" aria-controls="collapseLounge"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseLounge">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioDeepChill" style="display:none;" src="{{ asset('storage/revid_music/Lounge_Grooves/AB_deep-chill.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="deepChill"></i><b>Deep Chill</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="dChill" name="musicSelection[]" value="AB_deep-chill.mp3" 
                                                                        @if(in_array('AB_deep-chill.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="dChill"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioReversal" style="display:none;" src="{{ asset('storage/revid_music/Lounge_Grooves/OPUZZ_LD_06_Reversal.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="reversal"></i><b>Reversal</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="rever" name="musicSelection[]" value="OPUZZ_LD_06_Reversal.mp3" 
                                                                        @if(in_array('OPUZZ_LD_06_Reversal.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="rever"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioCruiseMuse" style="display:none;" src="{{ asset('storage/revid_music/Lounge_Grooves/OPUZZ_LD_07_Cruise_Muse.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="cruiseMuse"></i><b>Cruise Muse</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="cMuse" name="musicSelection[]" value="OPUZZ_LD_07_Cruise_Muse.mp3" 
                                                                        @if(in_array('OPUZZ_LD_07_Cruise_Muse.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cMuse"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioFluffyTrip" style="display:none;" src="{{ asset('storage/revid_music/Lounge_Grooves/SM_DCP04_FluffyTrip.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="fluffyTrip"></i><b>Fluffy Trip</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="fTrip" name="musicSelection[]" value="SM_DCP04_FluffyTrip.mp3" 
                                                                        @if(in_array('SM_DCP04_FluffyTrip.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="fTrip"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioAcousticDreams" style="display:none;" src="{{ asset('storage/revid_music/Lounge_Grooves/SM_SG15_AcousticDreams.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="acousticsDreams"></i><b>Acoustic Dreams</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="acousticDream" name="musicSelection[]" value="SM_SG15_AcousticDreams.mp3" 
                                                                        @if(in_array('SM_SG15_AcousticDreams.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="acousticDream"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioYesterdayTheme" style="display:none;" src="{{ asset('storage/revid_music/Lounge_Grooves/SM_SG16_YesterdaysTheme.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="yesterdayTheme"></i><b>Yesterdays Theme</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="yesterTheme" name="musicSelection[]" value="SM_SG16_YesterdaysTheme.mp3" 
                                                                        @if(in_array('SM_SG16_YesterdaysTheme.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="yesterTheme"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-pop"></i></div>
                                              <div class="align-self-center"><b>POP</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Modern & classic Pop. Upbeat, cheerful, easy to bop to. Incorporates a number of musical styles,&#0010; from rock to dance and everything in between.">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapsePop" role="button" aria-expanded="false" aria-controls="collapsePop"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapsePop">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioRefreshed" style="display:none;" src="{{ asset('storage/revid_music/Pop/OPUZZ_PM_01_Refreshed.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="refreshed"></i><b>Refreshed</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="refresh" name="musicSelection[]" value="OPUZZ_PM_01_Refreshed.mp3" 
                                                                        @if(in_array('OPUZZ_PM_01_Refreshed.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="refresh"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioPastTimes" style="display:none;" src="{{ asset('storage/revid_music/Pop/OPUZZ_PM_03_PastTimes.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="pastTimes"></i><b>Past Times</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="ptimes" name="musicSelection[]" value="OPUZZ_PM_03_PastTimes.mp3" 
                                                                        @if(in_array('OPUZZ_PM_03_PastTimes.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="ptimes"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioPopTop" style="display:none;" src="{{ asset('storage/revid_music/Pop/OPUZZ_PM_04_PopTop.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="popTop"></i><b>Pop Top</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="ptop" name="musicSelection[]" value="OPUZZ_PM_04_PopTop.mp3" 
                                                                        @if(in_array('OPUZZ_PM_04_PopTop.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="ptop"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioNewChemistry" style="display:none;" src="{{ asset('storage/revid_music/Pop/OPUZZ_PM_05_NewChemistry.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="newChemistry"></i><b>New Chemistry</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="newchem" name="musicSelection[]" value="OPUZZ_PM_05_NewChemistry.mp3" 
                                                                        @if(in_array('OPUZZ_PM_05_NewChemistry.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="newchem"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioAppeaseMe" style="display:none;" src="{{ asset('storage/revid_music/Pop/SM_PP01_AppeaseMe.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="appeaseMe"></i><b>Appease Me</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="appme" name="musicSelection[]" value="OPSM_PP01_AppeaseMe.mp3" 
                                                                        @if(in_array('OPSM_PP01_AppeaseMe.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="appme"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioSleepOnIt" style="display:none;" src="{{ asset('storage/revid_music/Pop/SM_PP13_SleepOnIt.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="sleepOnIt"></i><b>Sleep On It</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="sleepit" name="musicSelection[]" value="SM_PP13_SleepOnIt.mp3" 
                                                                        @if(in_array('SM_PP13_SleepOnIt.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="sleepit"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                             </div> 
                                        </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-rock"></i></div>
                                              <div class="align-self-center"><b>ROCK</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Includes the sub-categories of Blues, Classic Rock, Heavy Rock and Pop Rock&#0010; Rock & Roll in all its guises. Guitar-driven with a solid bass line and strong back beat.">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseRock" role="button" aria-expanded="false" aria-controls="collapseRock"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseRock">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioToughTalking" style="display:none;" src="{{ asset('storage/revid_music/Rock/COR1_Rock3_ToughTalking.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="toughTalking"></i><b>Tough Talking</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="ttalking" name="musicSelection[]" value="COR1_Rock3_ToughTalking.mp3" 
                                                                        @if(in_array('COR1_Rock3_ToughTalking.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="ttalking"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioBlackWidow" style="display:none;" src="{{ asset('storage/revid_music/Rock/OPUZZ_MR_05_BlackWidow.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="blackWidow"></i><b>Black Widow</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="bwidow" name="musicSelection[]" value="OPUZZ_MR_05_BlackWidow.mp3" 
                                                                        @if(in_array('OPUZZ_MR_05_BlackWidow.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="bwidow"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioVistaPop" style="display:none;" src="{{ asset('storage/revid_music/Rock/SCIM_05_Vistapop.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="vistaPop"></i><b>Vista Pop</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="vpop" name="musicSelection[]" value="SCIM_05_Vistapop.mp3" 
                                                                        @if(in_array('SCIM_05_Vistapop.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="vpop"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioHarmonicSpark" style="display:none;" src="{{ asset('storage/revid_music/Rock/SCIM_06_HarmonicSpark.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="harmonicSpark"></i><b>Harmonic Spark</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="hspark" name="musicSelection[]" value="SCIM_06_HarmonicSpark.mp3" 
                                                                        @if(in_array('SCIM_06_HarmonicSpark.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="hspark"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioLiberator" style="display:none;" src="{{ asset('storage/revid_music/Rock/SCIM_08_Liberator.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="liberator"></i><b>Liberator</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="liberat" name="musicSelection[]" value="SCIM_08_Liberator.mp3" 
                                                                        @if(in_array('SCIM_08_Liberator.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="liberat"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioTheWolf" style="display:none;" src="{{ asset('storage/revid_music/Rock/SCIM_10_TheWolf.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="theWolf"></i><b>The Wolf</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="twolf" name="musicSelection[]" value="SCIM_10_TheWolf.mp3" 
                                                                        @if(in_array('SCIM_10_TheWolf.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="twolf"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-upbeat"></i></div>
                                              <div class="align-self-center"><b>UPBEAT</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Incorporating various genres from pop to rock, these tracks are easy listening with an up-tempo,&#0010; cheerful and positive vibe.">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseUpbeat" role="button" aria-expanded="false" aria-controls="collapseUpbeat"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseUpbeat">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioAlmostSummer" style="display:none;" src="{{ asset('storage/revid_music/Upbeat/AB_almost-summer.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="almostSummer"></i><b>Almost Summer</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="summer" name="musicSelection[]" value="AB_almost-summer.mp3" 
                                                                        @if(in_array('AB_almost-summer.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="summer"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioBHorizons" style="display:none;" src="{{ asset('storage/revid_music/Upbeat/AB_brilliant-horizons.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="bHorizons"></i><b>Brilliant Horizons</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="horizons" name="musicSelection[]" value="AB_brilliant-horizons.mp3" 
                                                                        @if(in_array('AB_brilliant-horizons.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="horizons"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioFGuitar" style="display:none;" src="{{ asset('storage/revid_music/Upbeat/AB_fun-guitar-and-ukulele.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="fGuitar"></i><b>Fun Guitar and Ukulele</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="guitar" name="musicSelection[]" value="AB_fun-guitar-and-ukulele.mp3" 
                                                                        @if(in_array('AB_fun-guitar-and-ukulele.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="guitar"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioLiveMoment" style="display:none;" src="{{ asset('storage/revid_music/Upbeat/AB_live-the-moment.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="liveMoment"></i><b>Live the Moment</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="lmoment" name="musicSelection[]" value="AB_live-the-moment.mp3" 
                                                                        @if(in_array('AB_live-the-moment.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="lmoment"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioRisingUp" style="display:none;" src="{{ asset('storage/revid_music/Upbeat/AB_rising-up.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="risingUp"></i><b>Rising Up</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="rising" name="musicSelection[]" value="AB_rising-up.mp3" 
                                                                        @if(in_array('AB_rising-up.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="rising"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioChangeWorld" style="display:none;" src="{{ asset('storage/revid_music/Upbeat/SCIM_01_ChangeTheWorld.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="changeWorld"></i><b>Change the World</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="cworld" name="musicSelection[]" value="SCIM_01_ChangeTheWorld.mp3" 
                                                                        @if(in_array('SCIM_01_ChangeTheWorld.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="cworld"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="d-flex flex-row msc-ctg py-2 px-2">
                                              <div><i class="music-icon m-i-hop"></i></div>
                                              <div class="align-self-center"><b>URBAN AND HIP HOP</b></div>
                                              <div class="align-self-center px-2">
                                                <a href="#" data-placement="auto" data-html="true" data-toggle="tooltip" title="Music from the streets – hip hop, rap, urban and grime, based on beefy beats and slick production,&#0010; with edgy samples and breaks.">
                                                <i class="voice-icon v-i-info"></i></a>
                                              </div>
                                              <!-- <div class="align-self-center text-center ml-auto"><a href="" class="color-0066ff"><b>Click <br>to Select</b></a></div> -->
                                              <div class="align-self-center text-center ml-auto"><a class="color-0066ff" data-toggle="collapse" href="#collapseUrban" role="button" aria-expanded="false" aria-controls="collapseUrban"><b>Click <br>to Select</b></a></div>
                                          </div>
                                          <div class="collapse msc-ctg-txt px-3 py-2" id="collapseUrban">
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioNewWay" style="display:none;" src="{{ asset('storage/revid_music/Urban_Hip_Hop/OPUZZ_CP_09_NewWay.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="newWay"></i><b>New Way</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard">
                                                                        <input type="checkbox" class="custom-control-input" id="neway" name="musicSelection[]" value="OPUZZ_CP_09_NewWay.mp3" 
                                                                        @if(in_array('OPUZZ_CP_09_NewWay.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="neway"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioGoingPlaces" style="display:none;" src="{{ asset('storage/revid_music/Urban_Hip_Hop/OPUZZ_PM_07_GoingPlaces.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="goingPlaces"></i><b>Going Places</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="gplaces" name="musicSelection[]" value="OPUZZ_PM_07_GoingPlaces.mp3" 
                                                                        @if(in_array('OPUZZ_PM_07_GoingPlaces.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="gplaces"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioOverShoulder" style="display:none;" src="{{ asset('storage/revid_music/Urban_Hip_Hop/OPUZZ_US_01_OverMyShoulder.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="overShoulder"></i><b>Over My Shoulder</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="oshoulder" name="musicSelection[]" value="OPUZZ_US_01_OverMyShoulder.mp3" 
                                                                        @if(in_array('OPUZZ_US_01_OverMyShoulder.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="oshoulder"></label>
                                                                </div>
                                                     </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioBlink" style="display:none;" src="{{ asset('storage/revid_music/Urban_Hip_Hop/OPUZZ_US_03_Blink.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="blink"></i><b>Blink</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="b_link" name="musicSelection[]" value="OPUZZ_US_03_Blink.mp3" 
                                                                        @if(in_array('OPUZZ_US_03_Blink.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="b_link"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between">
                                                <audio id="audioDownTime" style="display:none;" src="{{ asset('storage/revid_music/Urban_Hip_Hop/OPUZZ_US_04_DownTime.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="downTime"></i><b>Down Time</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="dtime" name="musicSelection[]" value="OPUZZ_US_04_DownTime.mp3" 
                                                                        @if(in_array('OPUZZ_US_04_DownTime.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="dtime"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="d-flex justify-content-between my-2">
                                                <audio id="audioMappedOut" style="display:none;" src="{{ asset('storage/revid_music/Urban_Hip_Hop/OPUZZ_US_07_MappedOut.mp3') }}" controls controlsList="nodownload"></audio>
                                                <div class="align-self-center"><i class="voice-icon v-i-play" id="mappedOut"></i><b>Mapped Out</b></div>
                                                <div><div class="msc-chck align-self-center">
                                                                <div class="custom-control custom-checkbox standard ml-3">
                                                                        <input type="checkbox" class="custom-control-input" id="mout" name="musicSelection[]" value="OPUZZ_US_07_MappedOut.mp3" 
                                                                        @if(in_array('OPUZZ_US_07_MappedOut.mp3', $music_list))
                                                                                checked
                                                                        @endif>
                                                                        <label class="custom-control-label" for="mout"></label>
                                                                </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                </div>
                        </div>



                </div>

                 <div class="d-flex my-4 join-step-next">
                    <div><button class="btn btn-primary bg-333 btn-no-border v-s-btn-t px-5"><i class="arrow-left"></i>BACK</button></div>
                    <div class="ml-auto"><button class="btn btn-primary v-s-btn-t">SAVE : Next Step 5<i class="arrow-right"></i></button></div>
                 </div>
                 
            </form> 
        </div>
    </div>
</div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')

  <script src="{{ asset('assets/js/music_selection.js') }}" type="text/javascript"></script>

@stop



