    <h3><div class="register-icon reg-voice mb-2"></div><span class="pl-1">Voice</span></h3>
                    <div class="row">
                        <div class="col-sm">
                            Voice Format
                            <select name="stateVoiceFormat" class="form-control col-8">
                                <option value="Random Voice(Standard)">Random Voice (Standard)</option>
                                <option value="One Voice">One Voice</option>
                                <option value="Rotation Voice">Rotation Voice</option>
                            </select>
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
                                                        {{{ (!empty($voice_list) && (in_array('voice1', $voice_list))) ? "checked" : ""}}}>
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
                                                        {{{ (!empty($voice_list) && (in_array('voice2', $voice_list))) ? "checked" : ""}}}>
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
                                                        {{{ (!empty($voice_list) && (in_array('voice3', $voice_list))) ? "checked" : ""}}}>
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
                                                        {{{ (!empty($voice_list) && (in_array('voice4', $voice_list))) ? "checked" : ""}}}>
                                                <label class="custom-control-label" for="customCheck18"></label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="">More +</a>
                        </div>
                        <div class="col-sm">
                            You can Select from 3 options
                            <div class="c0066ff font-weight-bold">1. RANDOM VOICE (Standard)</div>
                            <div>We Pick Random Voices for Your Videos</div>
                            <div class="c0066ff pt-3 font-weight-bold">2. ONE VOICE (+ $5.00)</div>
                            <div>You Pick One Voice for Your Videos</div>
                            <div class="c0066ff pt-3 font-weight-bold">3. ROTATION VOICE (+ $5.00)</div>
                            <div>You Pick Many Voice and Rotated for Your Videos</div>
                        </div>
                    </div>

