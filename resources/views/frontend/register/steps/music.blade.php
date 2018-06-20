<h3><div class="register-icon reg-music mb-2"></div><span class="pl-1">Music</span></h3>
        <div class="row">
            <div class="col-sm">
                <select name="stateMusicStyle" class="form-control col-9">
                    <option value="Random Music Tracks" {{{ (isset($template['music_style']) && $template['music_style'] == 'Random Music Tracks') ? "selected=\"selected\"" : "" }}}>Random Music Tracks</option>
                    <option value="Same Music for all my Videos" {{{ (isset($template['music_style']) && $template['music_style'] == 'Same Music for all my Videos') ? "selected=\"selected\"" : "" }}}>Same Music for all my Videos</option>
                    <option value="Rotate My Music" {{{ (isset($template['music_style']) && $template['music_style'] == 'Rotate My Music') ? "selected=\"selected\"" : "" }}}>Rotate My Music</option>
                </select>
                <div class="row">
                    <div class="col-md-auto">
                        <div class="music-block active" id="cafejazz"><a href="">Cafe Jazz</a></div>
                        <div class="music-block" id="middleroad"><a href="">Middle of the Road</a></div>
                        <div class="music-block" id="upbeat"><a href="">Upbeat</a></div>
                        <div class="music-block" id="jazzlatin"><a href="">Jazz Latin</a></div>
                        <div class="music-block" id="classical"><a href="">Classical</a></div>
                        <div class="music-block" id="modern"><a href="">Modern</a></div>
                        <div class="music-block" id="newage"><a href="">New Age</a></div>
                    </div>
                    <div class="col-sm step-three-register">
                        <div class="row mt-2">
                            <div class="col-sm">
                                <div class="music-block-play"><i class="play-icon"></i>Cafe Jazz 1</div>
                            </div>
                            <div class="col-sm my-account-subcription">
                                <div class="custom-control custom-checkbox standard">
                                    <input type="checkbox" class="custom-control-input" id="customCheck19" name="musicSelection[]" value="music1"
                                           {{--@if(in_array('music1', $music_list))--}}
                                              {{--checked--}}
                                           {{--@endif>--}}
                                            {{{ (!empty($music_list) && (in_array('music1', $music_list))) ? "checked" : ""}}}>
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
                                           {{--@if(in_array('music2', $music_list))--}}
                                               {{--checked--}}
                                           {{--@endif>--}}
                                            {{{ (!empty($music_list) && (in_array('music2', $music_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label" for="customCheck20"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                You can Select from 3 options
                <div class="c0066ff font-weight-bold">1. RANDOM MUSIC TRACKS</div>
                <div>We Pick Random Music for Your Videos</div>
                <div class="c0066ff pt-3 font-weight-bold">2. ONE MUSIC TRACK</div>
                <div>You use the same Music for all Your Videoe</div>
                <div class="c0066ff pt-3 font-weight-bold">3. ROTATED MUSIC TRACKS</div>
                <div>You pick many Music Tracks and they are rotated for each new individual video</div>
            </div>
        </div>
        <div class="float-r align-items-end">
            <div style="float: left; margin-right: 10px"><a href="/getStarted/step1"><button class="btn btn-primary" type="button"><i class="arrow-left"></i> Previous Step</button></a></div>
            <button class="btn btn-primary" type="submit">NEXT: Preferences <i class="arrow-right"></i></button>
        </div>
        <div class="clear"></div>