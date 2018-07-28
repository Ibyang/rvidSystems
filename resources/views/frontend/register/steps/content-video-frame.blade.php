    <h3><div class="register-icon reg-content mb-2"></div><span class="pl-1">Content for Video Frame Templates</span></h3>
            Required (Enter as you wish it to appear)
            <div class="row">
                <div class="col-sm">
                    <input type="text" class="form-control mt-3 mb-3" name="videoName" placeholder="Name" value="{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}">
                    <input type="text" class="form-control mt-3 mb-3" name="videoMobile" placeholder="Mobile" value="{{$agent['mobile']}}">
                    <input type="text" class="form-control mt-3 mb-3" name="videoEmailAdd" placeholder="Web or Email Address" value="{{$agent['email']}}">
                    <textarea placeholder="Agency Name and details (as required)" name="videoAgencyName" class="form-control mt-3 mb-3">{{$agent['name_agency']}}</textarea>
                    <textarea placeholder="Content or Other or Address (Optional)" name="videoContent" class="form-control mt-3 mb-3">{{$agent['address']}}&nbsp;{{$agent['suburb']}}&nbsp;{{$agent['state']}}</textarea>
                </div>
                <div class="col-sm header-title pl-5 select-form">
                    <b>Required</b>
                    <br><br>
                    Content is required for use in the three frame<br>
                    templates used in your videos.
                    <br><br>
                    Video Frame Templates
                    <br><br>
                    Example
                    <div id="default_template">
                        <img src="{{ asset('storage/register/example-frame.jpg') }}">
                    </div>

                    <!-- inline html template layout -->

                    <!-- start of the section for main frame DIV template -->
                    <!-- First Main Frame Template -->
                    <div id="first_template" style="display: none">
                        <h6>First Template</h6>
                        <div id="small-wrapper">
                            <div id="sidebar_template" class="col-md-3 cont">
                                <div class="col-md-12 cont">
                                    <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/' . $temp["agency_logo"]) }}" width="55" class="branding"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="img-cont"><img src="{{ asset('storage/agency_css/' .  $agent["group"] . '/mainframe/1/image/helen-yan.jpg') }}" width="55"></div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                    <h2 style="text-align: center">
                                        {{$agent['mobile']}}<br><br>
                                        {{$agent['email']}}
                                    </h2>
                                </div>
                            </div>
                            <div id="main-container" class="col-md-9 cont">
                                <div class="col-md-6 info yellow content-header">
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                    </div>
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/'. $agent["group"] . '/mainframe/1/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/'. $agent["group"] . '/mainframe/1/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-4 header-text">
                                        <div class="house grey-txt">House</div>
                                    </div>
                                </div>
                                <div class="col-md-6 add content-header">
                                    {{$agent['address']}}<br>
                                    {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                </div>
                                <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/'. $agent["group"] . '/mainframe/1/image/' . $temp["agency_main_pic"]) }}" width="361" height="202"></div>
                            </div>
                        </div>
                        <a href="" data-toggle="modal" data-target="#expandTemplateModal" data-dbid="1" class="d-inline-block font12">< Click to Expand ></a>
                    </div>

                    <!-- Second Main Frame Template -->
                    <div id="second_template" style="display: none">
                        <h6>Second Template</h6>
                        <div id="small-wrapper">
                            <div id="sidebar_template" class="col-md-3 cont">
                                <div class="col-md-12 cont">
                                    <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/'. $agent["group"] . '/mainframe/2/image/' . $temp["agency_logo"]) }}" width="55" class="branding"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="img-cont"><img src="{{ asset('storage/agency_css/'. $agent["group"] . '/mainframe/2/image/helen-yan.jpg') }}" width="55"></div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                    <h2 style="text-align: center">
                                        {{$agent['mobile']}}<br><br>
                                        {{$agent['email']}}
                                    </h2>
                                </div>
                            </div>
                            <div id="main-container" class="col-md-9 cont">
                                <div class="col-md-6 info yellow content-header">
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/2/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                    </div>
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/2/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/2/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-4 header-text">
                                        <div class="house grey-txt">House</div>
                                    </div>
                                </div>
                                <div class="col-md-6 add content-header">
                                    {{$agent['address']}}<br>
                                    {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                </div>
                                <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/2/image/' . $temp["agency_main_pic"]) }}" width="361" height="202"></div>
                            </div>
                        </div>
                        <a href="" data-toggle="modal" data-target="#expandTemplateModal" data-dbid="2" class="d-inline-block font12">< Click to Expand ></a>
                        {{--<a href="" class="d-inline-block font12">< Click to Expand ></a>--}}
                    </div>

                    <!-- Third Main Frame Template -->
                    <div id="third_template" style="display: none">
                        <h6>Third Template</h6>
                        <div id="small-wrapper">
                            <div id="sidebar_template" class="col-md-3 cont">
                                <div class="col-md-12 cont">
                                    <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/3/image/' . $temp["agency_logo"]) }}" width="55" class="branding"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="img-cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/3/image/helen-yan.jpg') }}" width="55"></div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                    <h2 style="text-align: center">
                                        {{$agent['mobile']}}<br><br>
                                        {{$agent['email']}}
                                    </h2>
                                </div>
                            </div>
                            <div id="main-container" class="col-md-9 cont">
                                <div class="col-md-6 info yellow content-header">
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/3/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                    </div>
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/3/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/3/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-4 header-text">
                                        <div class="house grey-txt">House</div>
                                    </div>
                                </div>
                                <div class="col-md-6 add content-header">
                                    {{$agent['address']}}<br>
                                    {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                </div>
                                <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/3/image/' . $temp["agency_main_pic"]) }}" width="361" height="202"></div>
                            </div>
                        </div>
                        <a href="" data-toggle="modal" data-target="#expandTemplateModal" data-dbid="3" class="d-inline-block font12">< Click to Expand ></a>
                    </div>

                    <!-- Fourth Main Frame Template -->
                    <div id="fourth_template" style="display: none">
                        <h6>Fourth Template</h6>
                        <div id="small-wrapper">
                            <div id="sidebar_template" class="col-md-3 cont">
                                <div class="col-md-12 cont">
                                    <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/' . $temp["agency_logo"]) }}" width="55" class="branding"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="img-cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/helen-yan.jpg') }}" width="55"></div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                    <h2 style="text-align: center">
                                        {{$agent['mobile']}}<br><br>
                                        {{$agent['email']}}
                                    </h2>
                                </div>
                            </div>
                            <div id="main-container" class="col-md-9 cont">
                                <div class="col-md-6 info yellow content-header">
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                    </div>
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-3 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-4 header-text">
                                        <div class="house grey-txt">House</div>
                                    </div>
                                </div>
                                <div class="col-md-6 add content-header">
                                    {{$agent['address']}}<br>
                                    {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                </div>
                                <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/' . $temp["agency_main_pic"]) }}" width="361" height="202"></div>
                            </div>
                        </div>
                        <a href="" data-toggle="modal" data-target="#expandTemplateModal" data-dbid="4" class="d-inline-block font12">< Click to Expand ></a>
                    </div>

                    <!-- end of inline html layout -->
                    {{--<br><a href="" class="d-inline-block font12">< Click to Expand ></a>--}}
                    {{--<div class="float-r">--}}
                        {{--<div class="d-inline-block font12">Change</div>--}}
                        {{--<div class="d-inline-block">--}}
                            {{--<select name="" class="form-control">--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <hr>
                    <div style="clear: both"></div>
                    <b>End Frame</b><br>
                    Example
                    <img src="{{ asset('storage/register/end-frame.jpg') }}">
                    <a href="" class="d-inline-block font12">< Click to Expand ></a>

                </div>
            </div>


            <!-- modal for displaying expand mode for html template -->
            <div class="modal fade" id="expandTemplateModal"
                 tabindex="-1" role="dialog"
                 aria-labelledby="VideoModalLabel">
                <div class="modal-dialog" role="document" style="max-width: 930px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Main Template</h4>
                            <button type="button" class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <!-- First Template -->
                            <div id="firstMFTemplateModal" style="display: none">
                                <div id="medium-wrapper">
                                    <div id="medium-sidebar" class="col-md-3 cont">
                                        <div class="col-md-12 cont">
                                            <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/' . $temp["agency_logo"]) }}" width="87" class="branding"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="img-cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/helen-yan.jpg') }}" width="87"></div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                            <h2 style="text-align: center">
                                                {{$agent['mobile']}}<br><br>
                                                {{$agent['email']}}
                                            </h2>
                                        </div>
                                    </div>
                                    <div id="medium-content" class="col-md-9 cont">
                                        <div class="col-md-6 info yellow content-header">
                                            <div class="col-md-2 col-md-offset-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-3 header-text">
                                                <div class="house grey-txt">House</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 add content-header">
                                            {{$agent['address']}}<br>
                                            {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                        </div>
                                        <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/' . $temp["agency_main_pic"]) }}" width="361" height="202"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Template -->
                            <div id="secondMFTemplateModal" style="display: none">
                                <div id="medium-wrapper">
                                    <div id="medium-sidebar" class="col-md-3 cont">
                                        <div class="col-md-12 cont">
                                            <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/' . $temp["agency_logo"]) }}" width="87" class="branding"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="img-cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/helen-yan.jpg') }}" width="87"></div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                            <h2 style="text-align: center">
                                                {{$agent['mobile']}}<br><br>
                                                {{$agent['email']}}
                                            </h2>
                                        </div>
                                    </div>
                                    <div id="medium-content" class="col-md-9 cont">
                                        <div class="col-md-6 info yellow content-header">
                                            <div class="col-md-2 col-md-offset-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-3 header-text">
                                                <div class="house grey-txt">House</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 add content-header">
                                            {{$agent['address']}}<br>
                                            {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                        </div>
                                        <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/' . $temp["agency_main_pic"]) }}" width="361" height="202"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Third Template -->
                            <div id="thirdMFTemplateModal" style="display: none">
                                <div id="medium-wrapper">
                                    <div id="medium-sidebar" class="col-md-3 cont">
                                        <div class="col-md-12 cont">
                                            <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/' . $temp["agency_logo"]) }}" width="87" class="branding"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="img-cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/helen-yan.jpg') }}" width="87"></div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                            <h2 style="text-align: center">
                                                {{$agent['mobile']}}<br><br>
                                                {{$agent['email']}}
                                            </h2>
                                        </div>
                                    </div>
                                    <div id="medium-content" class="col-md-9 cont">
                                        <div class="col-md-6 info yellow content-header">
                                            <div class="col-md-2 col-md-offset-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-3 header-text">
                                                <div class="house grey-txt">House</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 add content-header">
                                            {{$agent['address']}}<br>
                                            {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                        </div>
                                        <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/' . $temp["agency_main_pic"]) }}" width="361" height="202"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Fourth Template -->
                            <div id="fourthMFTemplateModal" style="display: none">
                                <div id="medium-wrapper">
                                    <div id="medium-sidebar" class="col-md-3 cont">
                                        <div class="col-md-12 cont">
                                            <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/' . $temp["agency_logo"]) }}" width="87" class="branding"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="img-cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/helen-yan.jpg') }}" width="87"></div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                            <h2 style="text-align: center">
                                                {{$agent['mobile']}}<br><br>
                                                {{$agent['email']}}
                                            </h2>
                                        </div>
                                    </div>
                                    <div id="medium-content" class="col-md-9 cont">
                                        <div class="col-md-6 info yellow content-header">
                                            <div class="col-md-2 col-md-offset-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/1/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-3 header-text">
                                                <div class="house grey-txt">House</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 add content-header">
                                            {{$agent['address']}}<br>
                                            {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                        </div>
                                        <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/' . $agent["group"] . '/mainframe/4/image/' . $temp["agency_main_pic"]) }}" width="361" height="202"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                    class="btn btn-default"
                                    data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            {{--<hr>--}}
            {{--<div class="row select-form">--}}
                {{--<div class="col-sm select-form">--}}
                    {{--<h3>Middle Frame</h3>--}}
                    {{--<div class="custom-control custom-checkbox premium">--}}
                        {{--<input type="checkbox" class="custom-control-input" name="chkrandomiseMF" id="chkrandomiseMF" value="1" checked>--}}
                        {{--<label class="custom-control-label" for="chkrandomiseMF">Let us randomise statement selections with voice over.</label>--}}
                    {{--</div>--}}
                    {{--<textarea placeholder="Your personalise statement or saying (optional)" class="mt-4" name="statementMF" id="statementMF" disabled></textarea>--}}
                {{--</div>--}}
                {{--<div class="col-sm header-title pl-5">--}}
                    {{--<b>Middle Frame</b><br><br>--}}
                    {{--Example--}}
                    {{--<img src="{{ asset('storage/register/example-frame.jpg') }}">--}}
                    {{--<a href="" class="d-inline-block font12">< Click to Expand ></a>--}}
                    {{--<div class="float-r">--}}
                        {{--<div class="d-inline-block font12">Change</div>--}}
                        {{--<div class="d-inline-block">--}}
                            {{--<select name="" class="form-control">--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="row select-form">--}}
                {{--<div class="col-sm">--}}
                    {{--<h3>End Frame</h3>--}}
                    {{--<div class="custom-control custom-checkbox premium">--}}
                        {{--<input type="checkbox" class="custom-control-input" name="chkrandomiseEF" id="chkrandomiseEF" value="1" checked>--}}
                        {{--<label class="custom-control-label" for="chkrandomiseEF">Let us randomise statement selections with voice over.</label>--}}
                    {{--</div>--}}
                    {{--<textarea placeholder="Your personalise statement or saying (optional)" class="mt-4" name="statementEF" id="statementEF" disabled></textarea>--}}
                {{--</div>--}}
                {{--<div class="col-sm pl-5 header-title">--}}
                    {{--<b>End Frame</b><br><br>--}}
                    {{--Example--}}
                    {{--<img src="{{ asset('storage/register/end-frame.jpg') }}">--}}
                    {{--<a href="" class="d-inline-block font12">< Click to Expand ></a>--}}
                    {{--<div class="float-r">--}}
                        {{--<div class="d-inline-block font12">Change</div>--}}
                        {{--<div class="d-inline-block">--}}
                            {{--<select name="" class="form-control">--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


