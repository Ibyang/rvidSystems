<<<<<<< HEAD
<h3>
    <div class="d-flex flex-row">
        <div class="register-icon r-i-voice mb-2"></div>
        <div class="align-self-center font25 pl-3 font-t-ms">Voice Selection</div>
    </div> 
</h3>
<div class="font-t-ms color-404 font20 mb-3"><b>You can Select from 3 options</b></div>
<div class="row mb-4">
    <div class="col-sm">
        <div class="c0066ff font-weight-bold">1. RANDOM VOICE</div>
        <div>We Pick <b>Random</b> Voice for <br>Your Videos</div>
    </div>
    <div class="col-sm mx-auto border-left-right-ccc">
        <div class="mx-auto w-205">
            <div class="c0066ff font-weight-bold">2. SAME VOICE</div>
            <div>You Pick the <b>Same</b> Voice for <b>ALL</b> Your Videos</div>
        </div>
    </div>
    <div class="col-sm text-justify">
        <div class="m-l-4">
            <div class="c0066ff font-weight-bold">3. ROTATED VOICE</div>
            <div>You Pick Voices and they are <b>Rotated</b> for each New Video</div>
        </div>
    </div>
</div>
<div class="color-404 mt-4"><b>Select</b></div>
=======
<h3><div class="register-icon r-i-voice mb-2"></div><span class="pl-1">Voice</span></h3>
<h5 class="font-weight-bold my-4">You can Select from 3 options</h5>            
<div class="row">
    <div class="col-sm text-center">
        <div class="c0066ff font-weight-bold">1. RANDOM VOICE (Standard)</div>
        <div>We Pick Random Voices for <br>Your Videos</div>
    </div>
    <div class="col-sm text-center">
        <div class="c0066ff font-weight-bold">2. ONE VOICE</div>
        <div>You use the same Voice for all <br>Your Videos</div>
    </div>
    <div class="col-sm text-center">
        <div class="c0066ff font-weight-bold">3. ROTATION VOICE</div>
        <div>You pick many voices and they are <br>rotated for each new individual video</div>
    </div>
</div>
<div class="color-404 mt-4"><b>Voice</b></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
<div class="row mb-4">
    <div class="col-sm-6">
        <select name="stateVoiceFormat" class="col-11 form-control mt-2 mb-4">
            <option value="Random Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'Random Voice') ? "selected=\"selected\"" : "" }}}>Random Voice</option>
            <option value="One Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'One Voice') ? "selected=\"selected\"" : "" }}}>One Voice</option>
            <option value="Rotated Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'Rotated Voice') ? "selected=\"selected\"" : "" }}}>Rotation Voice</option>
        </select>
    </div>
</div>
<div class="row">
        <div class="col-sm">
                <div class="d-flex justify-content-between mb-4">
                        <div class="color-404"><b>Select Voice Overs</b></div>  
                        <div class="color-0066ff font12 align-self-center"><b>OK to use</b></div>  
                </div>
                <div class="border-bot2 pb-3">
                        <div class="row">
<<<<<<< HEAD
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/app/public/account/voice/grant.jpg') }}"></div>
=======
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/grant.jpg') }}"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                <div class="col-sm">
                                    <div class="d-flex justify-content-between my-2">
                                                <div class="color-0066ff font12 pt-2 v-s-text"><b>GRANT</b></div>
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="color-0066ff font12 pt-2 px-4"><i class="voice-icon v-i-play" id="grantVoice"></i><b>Play Sample</b></div>
                                                        <div>
                                                            <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                <div class="custom-control custom-checkbox standard ml-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" name="voiceSelection[]" value="grant.wav" {{{ (!empty($voice_list) && (in_array('grant.wav', $voice_list))) ? "checked" : ""}}}>
                                                                    <label class="custom-control-label" for="customCheck6"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
<<<<<<< HEAD
                                                <audio id="audioGrant" src="{{ asset('storage/app/public/voice_over_files/grant.wav') }}"></audio>
=======
                                                <audio id="audioGrant" src="{{ asset('storage/voice_over_files/grant.wav') }}"></audio>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                    </div>
                                    <div class="font12">Professional, corporate, and "very now".</div>
                                    <a class="font11 v-s-text" data-toggle="collapse" href="#collapseGrant" role="button" aria-expanded="false" aria-controls="collapseGrant"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                    <div class="collapse text-justify font12 mt-2" id="collapseGrant">
                                            With a background in commercial radio and broadcasting starting back in 1999, during which he took on announcing and audio production roles all around Australia, Grant is a voice actor with over 18 years’ experience, voicing daily for some of Australia’s biggest brands and labels.
                                    </div>

                                </div>
                        </div>
                </div>
                <div class="border-bot2 pb-3">
                        <div class="row">
<<<<<<< HEAD
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/app/public/account/voice/luke.jpg') }}"></div>
=======
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/luke.jpg') }}"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                <div class="col-sm">
                                   <div class="d-flex justify-content-between my-2">
                                                <div class="color-0066ff font12 pt-2 v-s-text"><b>LUKE</b></div>
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="color-0066ff font12 pt-2 px-4"><i class="voice-icon v-i-play" id="lukeVoice"></i><b>Play Sample</b></div>
                                                        <div>
                                                            <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                <div class="custom-control custom-checkbox standard ml-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="voiceSelection[]" value="luke.wav" {{{ (!empty($voice_list) && (in_array('luke.wav', $voice_list))) ? "checked" : ""}}}>
                                                                    <label class="custom-control-label" for="customCheck7"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<<<<<<< HEAD
                                                <audio id="audioLuke" src="{{ asset('storage/app/public/voice_over_files/luke.mp3') }}"></audio>
=======
                                                <audio id="audioLuke" src="{{ asset('storage/voice_over_files/luke.wav') }}"></audio>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                    </div>
                                    <div class="font12">Young, fresh, and warm.</div>
                                    <a class="font11 v-s-text" data-toggle="collapse" href="#collapseLuke" role="button" aria-expanded="false" aria-controls="collapseLuke"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                    <div class="collapse text-justify font12 mt-2" id="collapseLuke">
                                        Luke is a talented voice over artist with a smooth and fresh-sounding voice. He is in his 20’s, which makes him perfect for both serious and light-hearted reads that require a younger-adult feel. Luke has done a range of different types of voice overs – from the answering messages of local businesses, to television spots for international clients.
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="border-bot2 pb-3">
                        <div class="row">
<<<<<<< HEAD
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/app/public/account/voice/mark.jpg') }}"></div>
=======
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/mark.jpg') }}"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                <div class="col-sm">
                                    <div class="d-flex justify-content-between my-2">
                                                <div class="color-0066ff font12 pt-2 v-s-text"><b>MARK</b></div>
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="color-0066ff font12 pt-2 px-4"><i class="voice-icon v-i-play" id="markVoice"></i><b>Play Sample</b></div>
                                                        <div>
                                                            <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                <div class="custom-control custom-checkbox standard ml-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" name="voiceSelection[]" value="mark.wav" {{{ (!empty($voice_list) && (in_array('mark.wav', $voice_list))) ? "checked" : ""}}}>
                                                                    <label class="custom-control-label" for="customCheck8"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div>
<<<<<<< HEAD
                                                <audio id="audioMark" src="{{ asset('storage/app/public/voice_over_files/mark.wav') }}"></audio>
=======
                                                <audio id="audioMark" src="{{ asset('storage/voice_over_files/mark.wav') }}"></audio>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                    </div>
                                    <div class="font12">Friendly, mature, and smooth</div>
                                    <a class="font11 v-s-text" data-toggle="collapse" href="#collapseMark" role="button" aria-expanded="false" aria-controls="collapseMark"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                    <div class="collapse text-justify font12 mt-2" id="collapseMark">
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
                <div class="border-bot2 pb-3">
                        <div class="row">
<<<<<<< HEAD
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/app/public/account/voice/karin.jpg') }}"></div>
=======
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/karin.jpg') }}"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                <div class="col-sm">
                                    <div class="d-flex justify-content-between my-2">
                                                <div class="color-0066ff font12 pt-2 v-s-text"><b>KARIN</b></div>
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="color-0066ff font12 pt-2 px-4"><i class="voice-icon v-i-play" id="karinVoice"></i><b>Play Sample</b></div>
                                                        <div>
                                                            <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                <div class="custom-control custom-checkbox standard ml-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck13" name="voiceSelection[]" value="karin.wav" {{{ (!empty($voice_list) && (in_array('karin.wav', $voice_list))) ? "checked" : ""}}}>
                                                                    <label class="custom-control-label" for="customCheck13"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<<<<<<< HEAD
                                                <audio id="audioKarin" src="{{ asset('storage/app/public/voice_over_files/karin.wav') }}"></audio>
=======
                                                <audio id="audioKarin" src="{{ asset('storage/voice_over_files/karin.wav') }}"></audio>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                    </div>
                                    <div class="font12">Professional, corporate, and "very now".</div>
                                    <a class="font11 v-s-text" data-toggle="collapse" href="#collapseKarin" role="button" aria-expanded="false" aria-controls="collapseKarin"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                    <div class="collapse text-justify font12 mt-2" id="collapseKarin">
                                        Karin’s mature, warm Australian voice has been heard on many Perth Television and Radio commercials and was a regular presenter on Channel 7 Perth’s long-running travel show, Home in WA.

                                        With 20 years’ experience across all forms of Media, Karin’s style ranges from corporate to casual and takes in voice-overs for TV, radio & cinema advertising, documentary and corporate video narration, on-hold messaging and live event hosting.
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="border-bot2 pb-3">
                        <div class="row">
<<<<<<< HEAD
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/app/public/account/voice/odette.jpg') }}"></div>
=======
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/odette.jpg') }}"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                <div class="col-sm">
                                    <div class="d-flex justify-content-between my-2">
                                                <div class="color-0066ff font12 pt-2 v-s-text"><b>ODETTE</b></div>
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="color-0066ff font12 pt-2 px-4"><i class="voice-icon v-i-play" id="odetteVoice"></i><b>Play Sample</b></div>
                                                        <div>
                                                            <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                <div class="custom-control custom-checkbox standard ml-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck15" name="voiceSelection[]" value="odette.wav" {{{ (!empty($voice_list) && (in_array('odette.wav', $voice_list))) ? "checked" : ""}}}>
                                                                    <label class="custom-control-label" for="customCheck15"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<<<<<<< HEAD
                                                <audio id="audioOdette" src="{{ asset('storage/app/public/voice_over_files/odette.mp3') }}"></audio>
=======
                                                <audio id="audioOdette" src="{{ asset('storage/voice_over_files/odette.wav') }}"></audio>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                    </div>
                                    <div class="font12">Warm, familiar nature and mature.</div>
                                    <a class="font11 v-s-text" data-toggle="collapse" href="#collapseOdette" role="button" aria-expanded="false" aria-controls="collapseOdette"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                    <div class="collapse text-justify font12 mt-2" id="collapseOdette">
                                        Odette has a velvety, warm voice with a soft Australian accent. She easily slips into accents and characters and is often asked to voice projects for global brands that require a distinctly “neutral” accent. She has been working as an actor and voice artist since graduating from The Victorian College Of The Arts in 1997. Some of her television and film credits include, Underbelly – Fat Tony and Co, Stingers, The Secret Life Of Us, City Homicide, Eugenie Sandler P.I, Little Deaths and The Book Of Revelation.
                                    </div>

                                </div>
                        </div>
                </div>
                <div class="border-bot2 pb-3">
                        <div class="row">
<<<<<<< HEAD
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/app/public/account/voice/luisa.jpg') }}"></div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-between my-2">
                                                <div class="color-0066ff font12 pt-2 v-s-text"><b>LOUISA</b></div>
=======
                                <div class="col-md-auto text-center"><img class="img-fluid" src="{{ asset('storage/account/voice/luisa.jpg') }}"></div>
                                <div class="col-sm">
                                    <div class="d-flex justify-content-between my-2">
                                                <div class="color-0066ff font12 pt-2 v-s-text"><b>LUISA</b></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="color-0066ff font12 pt-2 px-4"><i class="voice-icon v-i-play" id="luisaVoice"></i><b>Play Sample</b></div>
                                                        <div>
                                                            <div class="my-account-subcription step-three-register align-self-center v-s-width">
                                                                <div class="custom-control custom-checkbox standard ml-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck16" name="voiceSelection[]" value="louisa.wav" {{{ (!empty($voice_list) && (in_array('louisa.wav', $voice_list))) ? "checked" : ""}}}>
                                                                    <label class="custom-control-label" for="customCheck16"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<<<<<<< HEAD
                                                <audio id="audioLuisa" src="{{ asset('storage/app/public/voice_over_files/louisa.mp3') }}"></audio>
=======
                                                <audio id="audioLuisa" src="{{ asset('storage/voice_over_files/louisa.wav') }}"></audio>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                    </div>
                                    <div class="font12">Fresh, playful and energetic.</div>
                                    <a class="font11 v-s-text" data-toggle="collapse" href="#collapseLuisa" role="button" aria-expanded="false" aria-controls="collapseLuisa"><i class="voice-icon v-i-info"></i><b>More Information</b><i class="v-i-down"></i><i class="v-i-up"></i></a>
                                    <div class="collapse text-justify font12 mt-2" id="collapseLuisa">
                                            Louisa has a bright, friendly and polished voice with a subtle Australian accent. She has been working as a voice over artist for ten years, and has voiced everything from instructional videos on how to teat-seal cows to sensual air-conditioning commercials. Recent clients include Coles, Domayne, University of Wollongong, Bendigo Bank, IGA, Harvey Norman, Bupa and News Corp Australia. You’ve probably heard her voice if you’ve ever been stuck on hold, as she has voiced dozens of phone systems for companies across Australia and New Zealand. Louisa’s speciality is long-form explainer and e-learning reads – with her clear and friendly tone and a hint of humour, she can make your product shine!
                                    </div>

                                </div>
                        </div>
                </div>
        </div>
</div>