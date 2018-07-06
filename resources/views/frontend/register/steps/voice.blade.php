    <h3><div class="register-icon reg-voice mb-2"></div><span class="pl-1">Voice</span></h3>
                    <div class="row">
                        <div class="col-sm">
                            Voice Selector
                            <select name="stateVoiceFormat" class="form-control col-8">
                                <option value="Random Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'Random Voice') ? "selected=\"selected\"" : "" }}}>Random Voice</option>
                                <option value="One Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'One Voice') ? "selected=\"selected\"" : "" }}}>One Voice</option>
                                <option value="Rotated Voice" {{{ (isset($template['voice_format']) && $template['voice_format'] == 'Rotated Voice') ? "selected=\"selected\"" : "" }}}>Rotated Voice</option>
                            </select>
                            <ul class="reg-video-format">
                                <li>
                                    <div class="row ml-1">
                                        <div class="col-sm-9 pl-0 pt-2">
                                            <div class="row">
                                                <div class="col-sm-4"><img src="{{ asset('storage/voice_over_pics/grant.png') }}"></div>
                                                <div class="col-sm-8 pr-0">
                                                    <h4 class="font-weight-bold"><a href="javascript:void(0)" onclick="document.getElementById('voiceGrant').play()">GRANT</a></h4>
                                                    <p class="font12" style="text-align: justify">Grant has a very friendly voice style often described as ‘Fresh’, ‘Versatile’ and very ‘Now’.
                                                        With a background in commercial radio and broadcasting starting back in 1999, during which he took on announcing
                                                        and audio production roles all around Australia, Grant is a voice actor with over 18 years’ experience,
                                                        voicing daily for some of Australia’s biggest brands and labels.
                                                    </p>
                                                </div>
                                            </div>
                                            <audio id="voiceGrant" src="{{ asset('storage/voice_over_files/grant.wav') }}"></audio>
                                        </div>
                                        <div class="col-sm-3 my-account-subcription step-three-register">
                                            <span>OK to use</span>
                                            <div class="custom-control custom-checkbox standard ml-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15" name="voiceSelection[]" value="grant.wav"
                                                        {{{ (!empty($voice_list) && (in_array('grant.wav', $voice_list))) ? "checked" : ""}}}>
                                                <label class="custom-control-label" for="customCheck15"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row ml-1">
                                        <div class="col-sm-9 pl-0 pt-2">
                                            <div class="row">
                                                <div class="col-sm-4"><img src="{{ asset('storage/voice_over_pics/luke.png') }}"></div>
                                                <div class="col-sm-8 pr-0">
                                                    <h4 class="font-weight-bold"><a href="javascript:void(0)" onclick="document.getElementById('voiceLuke').play()">LUKE</a></h4>
                                                    <p class="font12" style="text-align: justify">Luke is a talented voice over artist with a smooth and fresh-sounding voice. He is in his 20’s,
                                                        which makes him perfect for both serious and light-hearted reads that require a younger-adult feel.
                                                        Luke has done a range of different types of voice overs – from
                                                        the answering messages of local businesses, to television spots for international clients.</p>
                                                </div>
                                            </div>
                                            <audio id="voiceLuke" src="{{ asset('storage/voice_over_files/luke.wav') }}"></audio>
                                        </div>
                                        <div class="col-sm-3 my-account-subcription step-three-register">
                                            <span>OK to use</span>
                                            <div class="custom-control custom-checkbox standard ml-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck16" name="voiceSelection[]" value="luke.wav"
                                                        {{{ (!empty($voice_list) && (in_array('luke.wav', $voice_list))) ? "checked" : ""}}}>
                                                <label class="custom-control-label" for="customCheck16"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row ml-1">
                                        <div class="col-sm-9 pl-0 pt-2">
                                            <div class="row">
                                                <div class="col-sm-4"><img src="{{ asset('storage/voice_over_pics/steve.png') }}"></div>
                                                <div class="col-sm-8 pr-0">
                                                    <h4 class="font-weight-bold"><a href="javascript:void(0)" onclick="document.getElementById('voiceMark').play()">MARK</a></h4>
                                                    <p class="font12" style="text-align: justify">Steve began his radio career at the age of 18, leaving a Telecom apprenticeship to
                                                        follow his dream. In the 24 years following, presented shows in Newcastle, Brisbane, Sydney, Perth, Cairns,
                                                        Perth again, and is currently semi-retired and indulging in his hobbies of home-renovation and car-restoration
                                                        somewhere in rural NSW.</p>
                                                </div>
                                            </div>
                                            <audio id="voiceMark" src="{{ asset('storage/voice_over_files/mark.wav') }}"></audio>
                                        </div>
                                        <div class="col-sm-3 my-account-subcription step-three-register">
                                            <span>OK to use</span>
                                            <div class="custom-control custom-checkbox standard ml-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck17" name="voiceSelection[]" value="mark.wav"
                                                        {{{ (!empty($voice_list) && (in_array('mark.wav', $voice_list))) ? "checked" : ""}}}>
                                                <label class="custom-control-label" for="customCheck17"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row ml-1">
                                        <div class="col-sm-9 pl-0 pt-2">
                                            <div class="row">
                                                <div class="col-sm-4"><img src="{{ asset('storage/voice_over_pics/karin.png') }}"></div>
                                                <div class="col-sm-8 pr-0">
                                                    <h4 class="font-weight-bold"><a href="javascript:void(0)" onclick="document.getElementById('voiceKarin').play()">KARIN</a></h4>
                                                    <p class="font12" style="text-align: justify">Karin’s mature, warm Australian voice has been heard on many Perth Television and
                                                        Radio commercials and was a regular presenter on Channel 7 Perth’s long-running travel show, Home in WA.
                                                        With 20 years’ experience across all forms of Media, Karin’s style ranges from corporate to casual and
                                                        takes in voice-overs for TV, radio & cinema advertising, documentary and corporate video narration,
                                                        on-hold messaging and live event hosting.</p>
                                                </div>
                                            </div>
                                            <audio id="voiceKarin" src="{{ asset('storage/voice_over_files/karin.wav') }}"></audio>
                                        </div>
                                        <div class="col-sm-3 my-account-subcription step-three-register">
                                            <span>OK to use</span>
                                            <div class="custom-control custom-checkbox standard ml-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck18" name="voiceSelection[]" value="karin.wav"
                                                        {{{ (!empty($voice_list) && (in_array('karin.wav', $voice_list))) ? "checked" : ""}}}>
                                                <label class="custom-control-label" for="customCheck18"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row ml-1">
                                        <div class="col-sm-9 pl-0 pt-2">
                                            <div class="row">
                                                <div class="col-sm-4"><img src="{{ asset('storage/voice_over_pics/louisa.png') }}"></div>
                                                <div class="col-sm-8 pr-0">
                                                    <h4 class="font-weight-bold"><a href="javascript:void(0)" onclick="document.getElementById('voiceLouisa').play()">LOUISA</a></h4>
                                                    <p class="font12" style="text-align: justify">Louisa has a bright, friendly and polished voice with a subtle Australian accent.
                                                        She has been working as a voice over artist for ten years. Recent clients include Coles, Domayne, University of Wollongong,
                                                        Bendigo Bank, IGA, Harvey Norman, Bupa and News Corp Australia. You’ve probably heard her voice if you’ve ever been stuck on
                                                        hold, as she has voiced dozens of phone systems for companies across Australia and New Zealand.
                                                        With her clear and friendly tone and a hint of humor, she can make your product shine!</p>
                                                </div>
                                            </div>
                                            <audio id="voiceLouisa" src="{{ asset('storage/voice_over_files/louisa.wav') }}"></audio>
                                        </div>
                                        <div class="col-sm-3 my-account-subcription step-three-register">
                                            <span>OK to use</span>
                                            <div class="custom-control custom-checkbox standard ml-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck19" name="voiceSelection[]" value="louisa.wav"
                                                        {{{ (!empty($voice_list) && (in_array('louisa.wav', $voice_list))) ? "checked" : ""}}}>
                                                <label class="custom-control-label" for="customCheck19"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row ml-1">
                                        <div class="col-sm-9 pl-0 pt-2">
                                            <div class="row">
                                                <div class="col-sm-4"><img src="{{ asset('storage/voice_over_pics/oddete.png') }}"></div>
                                                <div class="col-sm-8 pr-0">
                                                    <h4 class="font-weight-bold"><a href="javascript:void(0)" onclick="document.getElementById('voiceOddete').play()">ODDETE</a></h4>
                                                    <p class="font12" style="text-align: justify">Odette has a velvety, warm voice with a soft Australian accent and is often
                                                        asked to voice projects for global brands that require a distinctly “neutral” accent. She has been working as an actor and
                                                        voice artist since graduating from The Victorian College of The Arts in 1997. Some of her television and film credits include,
                                                        Underbelly – Fat Tony and Co, Stingers, The Secret Life Of Us, City Homicide, Eugenie Sandler P.I, Little Deaths and
                                                        The Book Of Revelation. If it’s experience and quality you’re after, you need look no further.</p>
                                                </div>
                                            </div>
                                            <audio id="voiceOddete" src="{{ asset('storage/voice_over_files/odette.wav') }}"></audio>
                                        </div>
                                        <div class="col-sm-3 my-account-subcription step-three-register">
                                            <span>OK to use</span>
                                            <div class="custom-control custom-checkbox standard ml-3">
                                                <input type="checkbox" class="custom-control-input" id="customCheck20" name="voiceSelection[]" value="odette.wav"
                                                        {{{ (!empty($voice_list) && (in_array('odette.wav', $voice_list))) ? "checked" : ""}}}>
                                                <label class="custom-control-label" for="customCheck20"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            {{--<a href="">More +</a>--}}
                        </div>
                        <div class="col-sm">
                            You can Select from 3 options
                            <div class="c0066ff font-weight-bold">1. RANDOM VOICE (Standard)</div>
                            <div>We pick random voices for your videos </div>
                            <div class="c0066ff pt-3 font-weight-bold">2. ONE VOICE </div>
                            <div>You use the same Voice for all Your Videos</div>
                            <div class="c0066ff pt-3 font-weight-bold">3. ROTATED VOICE </div>
                            <div>You pick many voices and they are rotated for each new individual video</div>
                        </div>
                    </div>

