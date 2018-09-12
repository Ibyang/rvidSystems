@extends('frontend.layouts.main')

<div id="css_container"></div>

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title mb-3">Manual Video System - Step 3</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            <div class="d-flex justify-content-between join-step-next py-1 pb-3 mb-3 border-bot2">
                    <button class="btn btn-primary bg-333 btn-no-border px-4" type="button" onclick="goBack()"><i class="arrow-left"></i> BACK</button>
            </div>
            <h3>Template Preferences</h3>
            <div class="border-bot py-2">
                Main Template (1)
                <div class="row">
                    <div class="col p-0">
                        
                        <!-- <img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"> -->

                        <div>  
                                    <div id="first_template_mf" style="display: none">
                                      
                                          <div class="twb337">
                                              <div id="{{ $temp['folder_name'] }}-main-1" class="{{ $temp['folder_name'] }}-main-medium-1">
                                                  <div id="wrapper">
                                                    <div id="sidebar" class="col-md-3 cont">
                                                      <div class="col-md-12 cont">
                                                        <div class="img-cont yellow"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="87" class="branding"></div>
                                                      </div>
                                                      <div class="col-md-12" style="padding-bottom:0;">
                                                        <div class="img-cont"><img src="{{ asset('storage/app/public/agency_css/'. $agent['group'] . '/mainframe/2/image/helen-yan.jpg') }}" width="87"></div>
                                                      </div>
                                                      <div class="col-md-12 text-center">
                                                        <h1 class="profile-name" style="margin-top:0; margin-bottom:0;">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                        <h2>{{$agent['mobile']}}<br>
                                                          <!-- (03) 8538 0588<br> -->
                                                          <br>
                                                          {{$agent['website']}}</h2>
                                                      </div>
                                                    </div>
                                                    <div id="content" class="col-md-9 cont">
                                                      <div class="col-md-6 info yellow content-header">
                                                        <div class="col-md-3 col-md-offset-0 header-icon">
                                                          <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-bed-icon.jpg') }}" height=20><span class="ctr grey-txt">4</span></div>
                                                        </div>
                                                        <div class="col-md-3 header-icon">
                                                          <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-shower-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
                                                        </div>
                                                        <div class="col-md-3 header-icon">
                                                          <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-car-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
                                                        </div>
                                                        <div class="col-md-3 header-text">
                                                          <div class="house grey-txt">House</div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6 add content-header">
                                                        {{$agent['address']}}<br>
                                                        {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                                      </div>
                                                      <div class="col-md-12 cont"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_main_pic']) }}" width="573" height="320"></div>
                                                    </div>
                                                  </div><!-- end wrapper -->
                                              <!--/div--><!-- end raywhite-small -->
                                          </div>
                                        </div><!-- end twb337 -->  
                                  </div> <!-- end of first template -->


                                  <!-- Second Main Frame Template -->
                                  <div id="second_template_mf" style="display: none">
                                  
                                   <div class="twb337">   
                                    <div id="{{ $temp['folder_name'] }}-main-2" class="{{ $temp['folder_name'] }}-main-medium-2">

                                      <div id="wrapper">
                                            <!--div class="col-md-12 cont"-->
                                              <div id="sidebar" class="col-md-3 cont">
                                                <div class="col-md-12 cont img-cont"></div>
                                                <!--div>
                                                 <div class="img-cont"><img src="image/helen-yan.jpg" width="266"></div>
                                                </div-->

                                                <div class="col-md-12 text-center">
                                                  <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                  <h2>{{$agent['mobile']}}<br>
                                                    <!-- (03) 8538 0588<br> -->
                                                    <br>
                                                    {{$agent['website']}}</h2>
                                                </div>
                                                <div class="branding-container">
                                                  <div class="col-md-12 cont">
                                                    <div class="img-logo-cont yellow"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="87" class="branding"></div>
                                                  </div>
                                                </div>


                                                <!--div class="col-md-3 cont branding-container">
                                                  <div class="img-logo-cont yellow"><img src="image/ray-white-logo.jpg" width="200" class="branding"></div>
                                                </div-->

                                              </div>

                                              <div id="content" class="col-md-9 cont">
                                                <div class="col-md-12 cont"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_main_pic']) }}" width="573" height="320"></div>
                                                <div class="col-md-6 info yellow content-header">
                                                  <div class="col-md-3 col-md-offset-0 header-icon">
                                                    <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-bed-icon.jpg') }}" height=20><span class="ctr grey-txt">4</span></div>
                                                  </div>
                                                  <div class="col-md-3 header-icon">
                                                    <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-shower-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
                                                  </div>
                                                  <div class="col-md-3 header-icon">
                                                    <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-car-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
                                                  </div>
                                                  <div class="col-md-3 header-text">
                                                    <div class="house grey-txt">House</div>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 add content-header">
                                                  {{$agent['address']}}<br>
                                                  {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}} 
                                                </div>
                                              </div>
                                            <!--/div-->
                                          </div> <!-- end of wrapper -->

                                      </div>  
                                    </div>  <!-- end of twb337 -->
                                  </div> <!-- end of second template -->


                                  <!-- Third Main Frame Template -->
                                  <div id="third_template_mf" style="display: none">
                          
                                    <div class="twb337">
                                        <div id="{{ $temp['folder_name'] }}-main-3" class="{{ $temp['folder_name'] }}-main-medium-3">

                                          <div id="wrapper">
                                              <!--div class="col-md-12 cont"-->
                                                <div id="content" class="col-md-9 cont">
                                                  <div class="col-md-12 cont"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_main_pic']) }}" width="573" height="320"></div>
                                                  <div class="col-md-6 info gray content-header">
                                                    <div class="col-md-3 col-md-offset-0 header-icon">
                                                      <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-bed-icon.jpg') }}" height=20><span class="ctr white-txt">4</span></div>
                                                    </div>
                                                    <div class="col-md-3 header-icon">
                                                      <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-shower-icon.jpg') }}" height=20><span class="ctr white-txt">3</span></div>
                                                    </div>
                                                    <div class="col-md-3 header-icon">
                                                      <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-car-icon.jpg') }}" height=20><span class="ctr white-txt">3</span></div>
                                                    </div>
                                                    <div class="col-md-3 header-text">
                                                      <div class="house white-txt">House</div>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 add yellow content-header">
                                                    {{$agent['address']}}<br>
                                                    {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}} 
                                                  </div>
                                                  <!----> 
                                                </div>

                                                <div id="sidebar" class="col-md-3 cont">
                                                  <div class="col-md-12 profile-image text-center" style="padding-top:0; padding-bottom:0;"><img src="{{ asset('storage/app/public/agency_css/'. $agent['group'] . '/mainframe/2/image/helen-yan.jpg') }}" width="87"></div>
                                                  <div class="col-md-12 text-center">
                                                    <h1 class="profile-name" style="margin-top:0; margin-bottom:0;">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                    <h2>{{$agent['mobile']}}<br>
                                                      <!-- (03) 8538 0588<br> -->
                                                      <br>
                                                      {{$agent['website']}}</h2>
                                                  </div>
                                                  <div class="branding-container">
                                                    <div class="col-md-12 cont">
                                                      <div class="img-logo-cont yellow"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="87" class="branding"></div>
                                                    </div>
                                                  </div>
                                                </div>

                                              <!--/div-->
                                              </div> <!-- end of wrapper -->

                                           </div>  
                                    </div> <!-- end of twb337 --> 
                                  </div> <!-- end of template -->


                                  <!-- Fourth Main Frame Template -->
                                  <div id="fourth_template_mf" style="display: none">
                                  
                                    <div class="twb337">
                                        <div id="{{ $temp['folder_name'] }}-main-4" class="{{ $temp['folder_name'] }}-main-medium-4">

                                          <div id="wrapper">
                                          <!--div class="col-md-12 cont"-->
                                            <div id="sidebar" class="col-md-3 cont">
                                              <div class="branding-container">
                                                <div class="col-md-12 cont">
                                                  <div class="img-logo-cont yellow"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="87" class="branding"></div>
                                                </div>
                                              </div>
                                              <div class="col-md-12 cont img-cont"></div>
                                              <div class="col-md-12 text-center">
                                                <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                <h2>{{$agent['mobile']}}<br>
                                                  <!-- (03) 8538 0588<br> -->
                                                  <br>
                                                  {{$agent['website']}}</h2>
                                              </div>
                                            </div>
                                            <div id="content" class="col-md-9 cont">
                                              <div class="col-md-6 info yellow content-header">
                                                <div class="col-md-3 col-md-offset-0 header-icon">
                                                  <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-bed-icon.jpg') }}" height=20><span class="ctr grey-txt">4</span></div>
                                                </div>
                                                <div class="col-md-3 header-icon">
                                                  <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-shower-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
                                                </div>
                                                <div class="col-md-3 header-icon">
                                                  <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-car-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
                                                </div>
                                                <div class="col-md-3 header-text">
                                                  <div class="house grey-txt">House</div>
                                                </div>
                                              </div>
                                              <div class="col-md-6 add content-header">
                                                {{$agent['address']}}<br>
                                                {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                              </div>
                                              <!---->
                                              <div class="col-md-12 cont"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_main_pic']) }}" width="573" height="320"></div>
                                            </div>
                                          <!--/div-->
                                          </div> <!-- end of wrapper -->

                                        </div>   

                                    </div>  <!-- end of twb337 --> 
                                  </div> <!-- end of template -->
                                </div> <!-- end of div Main Template -->


                    </div>
                </div>
                <div class="d-flex flex-row-reverse">
                  <div class="p-2"><a data-toggle="collapse" href="#ExpandedMF" role="button" aria-expanded="false" aria-controls="collapseExample">Change</a></div>
                </div>
            </div>

            <!-- for the section of collapsible for Main Template -->
            <form id="frmMainFrame" method="POST" action="{{ route('editMainFrame') }}">
                    {{ csrf_field() }}
                    <div class="collapse" id="ExpandedMF" style="background-color: #F4F4F4">
                        <div class="rules-arrow"></div>
                        <div class="ExpandForm p-3">
                            <div class="row register-form">
                                <div class="col-sm">
                                    Select Main Frame
                                    <select name="stateMainFrame" id="stateMainFrame" class="form-control mt-3 mb-3 col-10">
                                        <option value="Use selected main frame template" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Use selected main frame template') ? "selected=\"selected\"" : "" }}}>Use selected main frame template</option>
                                        <option value="Please select main frame template for me" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Please select main frame template for me') ? "selected=\"selected\"" : "" }}}>Please select main frame template for me</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    Select Colours
                                    <select name="stateMainFrameColour" id="stateMainFrameColour" class="form-control mt-3 mb-3 col-10">
                                        <option value="Agency Group Colours" {{{ (!empty($template['main_frame_colours']) && $template['main_frame_colours'] == 'Agency Group Colours') ? "selected=\"selected\"" : "" }}}>Agency Group Colours</option>
                                        <option value="Themed Colours" {{{ (!empty($template['main_frame_colours']) && $template['main_frame_colours'] == 'Themed Colours') ? "selected=\"selected\"" : "" }}}>Themed Colours</option>
                                        <option value="Customise Your Colours" {{{ (!empty($template['main_frame_colours']) && $template['main_frame_colours'] == 'Customise Your Colours') ? "selected=\"selected\"" : "" }}}>Customise Your Colours</option>
                                    </select>
                                    <select name="stateMainFrameColourSub" id="stateMainFrameColourSub" class="form-control mt-3 mb-3 col-10">
                                         @if(!empty($template['main_frame_colours_sub']))
                                            <option value="{{ $template['main_frame_colours_sub'] }}"> {{ $template['main_frame_colours_sub'] }} </option>
                                        @endif
                                    </select>
                                    <div id="stateMainFrameColourSelection" style='display:none;'>
                                        <div class="row">
                                            <div class="col"><input type="radio" name="color">#cccccc</div>
                                            <div class="col">Change +</div>
                                            {{--<div class="col"> <input type="checkbox" class="custom-control-input" name="middle_frame[]" id="customCheck7" value="MiddleFrameTemplate3"></div>--}}
                                            <div class="col"><input type="radio" name="color">#660cc</div>
                                            <div class="col">Change +</div>
                                            {{--<div class="col"> <input type="checkbox" class="custom-control-input" name="middle_frame[]" id="customCheck7" value="MiddleFrameTemplate3"></div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col"><input type="radio" name="color">#cccccc</div>
                                            <div class="col">Change +</div>
                                            {{--<div class="col"> <input type="checkbox" class="custom-control-input" name="middle_frame[]" id="customCheck7" value="MiddleFrameTemplate3"></div>--}}
                                            <div class="col"><input type="radio" name="color">#33333</div>
                                            <div class="col">Change +</div>
                                            {{--<div class="col"> <input type="checkbox" class="custom-control-input" name="middle_frame[]" id="customCheck7" value="MiddleFrameTemplate3"></div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Video Frame (Main Frame)</h3>
                            You have 4 Main Frame Template Formats
                            <div class="row">
                                <div class="col-sm">
                                    <!-- <img src="{{ asset('storage/register/main-frame-1.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a> -->
                                    <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_1']) }}"><br>
                                    <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_1'] }}">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck1" value="main-frame-1" 
                                               @if($template['main_frame_template_format'] === 'main-frame-1')
                                                    checked
                                               @endif>>
                                        <label class="custom-control-label font12" for="customCheck1">Select</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <!-- <img src="{{ asset('storage/register/main-frame-2.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a> -->
                                    <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_2']) }}"><br>
                                    <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_2'] }}">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck2" value="main-frame-2" 
                                              @if($template['main_frame_template_format'] === 'main-frame-2')
                                                checked
                                              @endif>
                                        <label class="custom-control-label font12" for="customCheck2">Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <!-- <img src="{{ asset('storage/register/main-frame-3.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a> -->
                                    <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_3']) }}"><br>
                                    <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_3'] }}">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck3" value="main-frame-3" 
                                            @if($template['main_frame_template_format'] === 'main-frame-3')
                                                checked
                                            @endif>
                                        <label class="custom-control-label font12" for="customCheck3">Select</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <!-- <img src="{{ asset('storage/register/main-frame-4.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a> -->
                                    <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_4']) }}"><br>
                                    <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_4'] }}">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck4" value="main-frame-4" 
                                           @if($template['main_frame_template_format'] === 'main-frame-4')
                                                checked
                                           @endif>
                                        <label class="custom-control-label font12" for="customCheck4">Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row-mt-3">
                                <input type="hidden" id="mfTemplate" value="{{ $template['main_frame_template_format'] }}">
                                <input type="hidden" name="mainFrameColor" id="mainFrameColor" value="{{ $template['main_frame_colours'] }}">
                                <input type="hidden" name="mainFrameColorSub" id="mainFrameColorSub" value="{{ $template['main_frame_colours_sub'] }}">
                                <input type="hidden" name="pageName" id="pageName" value="standardVideoTemplate">
                                <input type="submit" class="form-control" value="Update Details">
                            </div>
                        </div>
                    </div>
            </form>


            End Template (2)
            <div class="row">
                <div class="col p-0">

                    <!-- <img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"> -->

                    <!-- for Dynamic End Template -->
                                  <div>  
                                    <div id="first_template_ef" style="display: none">
                                    
                                          <div class="twb337">
                                            <div id="{{ $temp['folder_name'] }}-end-2" class="{{ $temp['folder_name'] }}-end-medium-2">

                                              <div id="wrapper">
                                                  <div id="sidebar">
                                                    <div class="col-md-12 cont profile-bg"></div>
                                                  </div>
                                                  <div id="content" class="col-md-8 cont" style="margin-top: 0">
                                                    <div class="col-md-12 cont">
                                                      <h1 class="profile">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                    </div>
                                                    <div class="col-md-12 cont logo"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="125"></div>
                                                    <div class="col-md-12 cont">
                                                      <h2 class="profile"> Contact Me Today!<br>
                                                        <br>
                                                          {{$agent['mobile']}}<br>
                                                          {{$agent['email']}}<br>
                                                        </h2>
                                                    </div>
                                                  </div>
                                                </div> <!-- end of wrapper -->

                                             </div> 
                                          </div>  

                                    </div>

                                    <!-- Second End Frame Template -->
                                    <div id="second_template_ef" style="display: none">

                                        <div class="twb337">   
                                          <div id="{{ $temp['folder_name'] }}-end-1" class="{{ $temp['folder_name'] }}-end-medium-1">

                                           <div id="wrapper">
                                              <div class="col-md-12 cont">
                                                <div id="sidebar">
                                                  <div class="col-md-3 cont">
                                                    <div class="col-md-12 cont"><img class="img-profile" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/endframe/1/image/helen-yan.jpg') }}" width="273">
                                                  </div>
                                                </div>
                                                  <div class="col-md-12 cont logo-cont"><img class="img-logo" src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="92"></div>
                                                </div>
                                                <div id="content" class="col-md-9 cont" style="margin-top: 0">
                                                  <div class="col-md-12 cont">
                                                    <h1 class="profile">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                  </div>
                                                  <div class="col-md-12 cont">
                                                    <h2 class="profile"> Contact Me Today!<br>
                                                      <br>
                                                          {{$agent['mobile']}}<br>
                                                          {{$agent['email']}}<br>
                                                    </h2>
                                                  </div>
                                                  <div class="col-md-12 cont empty-cont"> </div>
                                                </div>
                                              </div>
                                            </div>  <!-- end of wrapper -->

                                           </div> 
                                          </div> 
                                     
                                    </div>

                                    <!-- Third End Frame Template -->
                                    <div id="third_template_ef" style="display: none">

                                     <div class="twb337">   
                                      <div id="{{ $temp['folder_name'] }}-end-3" class="raywhite-end-small-3">  
                                        
                                        <div id="wrapper">
                                            <div id="sidebar">
                                              <div class="col-md-12 cont profile-bg"></div>
                                            </div>
                                            <div id="content" class="col-md-8 cont" style="margin-top: 0">
                                              <div class="col-md-12 cont">
                                                <h1 class="profile">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                              </div>
                                              <div class="col-md-12 cont">
                                                <h2 class="profile"> Contact Me Today!<br>
                                                    <br>
                                                    {{$agent['mobile']}}<br>
                                                    {{$agent['email']}}<br>
                                                </h2>
                                              </div>
                                              <div class="col-md-12 cont logo"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="92"></div>
                                            </div>
                                          </div> <!-- end of wrapper -->
                                       </div> 
                                      </div> 

                                    </div>

                                    <!-- Fourth End Frame Template -->
                                    <div id="fourth_template_ef" style="display: none">

                                      <div class="twb337">
                                        <div id="{{ $temp['folder_name'] }}-end-4" class="{{ $temp['folder_name'] }}-end-medium-4">
                                          <div id="wrapper">
                                              <div id="sidebar">
                                                  <div class="col-md-12 cont profile-bg"></div>
                                              </div>
                                              <div id="content" class="col-md-8 cont" style="margin-top: 0">
                                                <div class="col-md-12 cont logo"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="125"></div>
                                                <div class="col-md-12 cont">
                                                  <h1 class="profile">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                </div>
                                                <div class="col-md-12 cont">
                                                  <h2 class="profile"> Contact Me Today!<br>
                                                      <br>
                                                          {{$agent['mobile']}}<br>
                                                          {{$agent['email']}}<br>
                                                  </h2>
                                                </div>
                                              </div>
                                            </div> <!-- end of wrapper -->
                                         </div>  
                                        </div>  
                                    </div>
                                  </div> <!-- end div End Template Section -->


                </div>
            </div>
            <div class="d-flex flex-row-reverse">
              <div class="p-2"><a data-toggle="collapse" href="#ExpandedEF" role="button" aria-expanded="false" aria-controls="collapseExample">Change</a></div>
            </div>


            <!-- for the section of collapsible of End Template -->
            <form id="frmEndFrame" method="POST" action=" {{ route('editEndFrame') }}">
                    {{ csrf_field() }}

                    <div class="collapse" id="ExpandedEF" style="background-color: #F4F4F4">
                        <div class="rules-arrow"></div>
                        <div class="ExpandForm p-3">
                            <div class="row register-form">
                                <div class="col-sm">
                                    Select End Frame
                                    <select name="stateEndFrame" id="stateEndFrame" class="form-control col-10">
                                        <option value="Use selected end frame template" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == "Use selected end frame template") ? "selected=\"selected\"" : "" }}}>Use selected main frame template</option>
                                        <option value="Please select end frame template for me" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == "Please select end frame template for me") ? "selected=\"selected\"" : "" }}}>Please select main frame template for me</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    Select Colours
                                    <select name="stateEndFrameColour" id="stateEndFrameColour" class="form-control col-10">
                                        <option value="Agency Group Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Agency Group Colours') ? "selected=\"selected\"" : "" }}}>Agency Group Colours</option>
                                        <option value="Themed Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Themed Colours') ? "selected=\"selected\"" : "" }}}>Themed Colours</option>
                                        <option value="Customise Your Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Customise Your Colours') ? "selected=\"selected\"" : "" }}}>Custom Colours</option>
                                    </select>
                                    <select name="stateEndFrameColourSub" id="stateEndFrameColourSub" class="form-control mt-3 mb-3 col-10">
                                        @if(!empty($template['end_frame_colours_sub']))
                                            <option value="{{ $template['end_frame_colours_sub'] }}"> {{ $template['end_frame_colours_sub'] }} </option>
                                        @endif
                                    </select>
                                    <div id="stateEndFrameColourSelection" style='display:none;'>
                                        <div class="row">
                                            <div class="col"><input type="radio" name="color">#cccccc</div>
                                            <div class="col">Change +</div>
                                            {{--<div class="col"> <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck7" value="EndFrameTemplate3"></div>--}}
                                            <div class="col"><input type="radio" name="color">#660cc</div>
                                            <div class="col">Change +</div>
                                            {{--<div class="col"> <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck7" value="EndFrameTemplate3"></div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col"><input type="radio" name="color">#cccccc</div>
                                            <div class="col">Change +</div>
                                            {{--<div class="col"> <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck7" value="EndFrameTemplate3"></div>--}}
                                            <div class="col"><input type="radio" name="color">#33333</div>
                                            <div class="col">Change +</div>
                                            {{--<div class="col"> <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck7" value="EndFrameTemplate3"></div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Video Frame (End Frame)</h3>
                            You have 4 End Frame Template Formats
                            <div class="row">
                                <div class="col-sm">
                                   <!--  <img src="{{ asset('storage/register/main-frame-1.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a> -->
                                    <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_1']) }}"><br>
                                    <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_1'] }}">< Click to Enlarge >{{ $temp['zoom_end_template_1'] }}</a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck9" value="end-frame-1" 
                                               @if($template['end_frame_template_format'] === 'end-frame-1')
                                                    checked
                                                @endif>
                                        <label class="custom-control-label font12" for="customCheck9">Select</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <!-- <img src="{{ asset('storage/register/main-frame-2.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a> -->
                                    <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_2']) }}"><br>
                                    <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_2'] }}">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck10" value="end-frame-2" 
                                               @if($template['end_frame_template_format'] === 'end-frame-2')
                                                    checked
                                                @endif>
                                        <label class="custom-control-label font12" for="customCheck10">Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <!-- <img src="{{ asset('storage/register/main-frame-3.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a> -->
                                     <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_3']) }}"><br>
                                    <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_3'] }}">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck11" value="end-frame-3" 
                                               @if($template['end_frame_template_format'] === 'end-frame-3')
                                                    checked
                                                @endif>
                                        <label class="custom-control-label font12" for="customCheck11">Select</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <!-- <img src="{{ asset('storage/register/main-frame-4.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a> -->
                                    <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_4']) }}"><br>
                                    <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_4'] }}">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck12" value="end-frame-4" 
                                               @if($template['end_frame_template_format'] === 'end-frame-3')
                                                    checked
                                               @endif>
                                        <label class="custom-control-label font12" for="customCheck12">Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row-mt-3">
                                <input type="hidden" id="folder_name" value="{{ $temp['folder_name'] }}">
                                <input type="hidden" id="efTemplate" value="{{ $template['end_frame_template_format'] }}">
                                <input type="hidden" name="endFrameColor" id="endFrameColor" value="{{ $template['end_frame_colours'] }}">
                                <input type="hidden" name="endFrameColorSub" id="endFrameColorSub" value="{{ $template['end_frame_colours_sub'] }}">
                                <input type="hidden" name="pageName" id="pageName" value="standardVideoTemplate">
                                <input type="submit" class="form-control" value="Update Details">
                            </div>
                        </div>
                    </div>
                </form>
            <div class="d-flex my-4">
              <div><button class="btn btn-primary bg-333 btn-no-border v-s-btn-t pr-4" type="button" onclick="goBack()"><i class="arrow-left"></i>BACK</button></div>
              <div class="ml-auto">
                <form method="POST" action="{{ route('account-video-system-processStep3') }}">
                    {{ csrf_field() }}
                    <button class="btn btn-primary v-s-btn-t" type="submit">SAVE : Next Step 4<i class="arrow-right"></i></button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>

                        <!-- Display Modal to view the Main template in an Enlarge Mode -->
                               <div class="modal fade" id="mainTemplateModal"
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
                                               <img src="" id="mainTemplate">
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button"
                                                       class="btn btn-default"
                                                       data-dismiss="modal">Close</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>


                               <!-- Display Modal to view the End template in an Enlarge Mode -->
                               <div class="modal fade" id="endTemplateModal"
                                    tabindex="-1" role="dialog"
                                    aria-labelledby="VideoModalLabel">
                                   <div class="modal-dialog" role="document" style="max-width: 930px;">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <h4 class="modal-title">End Template</h4>
                                               <button type="button" class="close"
                                                       data-dismiss="modal"
                                                       aria-label="Close">
                                                   <span aria-hidden="true">&times;</span></button>
                                           </div>
                                           <div class="modal-body">
                                               <img src="" id="endTemplate">
                                           </div>
                                           <div class="modal-footer">
                                               <button type="button"
                                                       class="btn btn-default"
                                                       data-dismiss="modal">Close</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>


@endsection


{{-- page level scripts --}}
@section('footer_scripts')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

        function goBack(){
            window.history.back();
        }

        $(document).ready(function() {

            var stateMainColour = $('#mainFrameColor').val();
            var stateMainColorSub = $('#mainFrameColorSub').val();

            if(stateMainColour === 'Agency Group Templates' || stateMainColour === 'Themed Templates'){
                $('#stateMainFrameColourSub').append('<option value="' + stateMainColorSub + '">' + stateMainColorSub + '</option>');
            }
            else{
                $('#stateMainFrameColourSelection').show();
                $('#stateMainFrameColourSub').hide();
            }


            var stateEndColour = $('#endFrameColor').val();
            var stateEndColorSub = $('#endFrameColorSub').val();

            if(stateEndColour === 'Agency Group Templates' || stateEndColour === 'Themed Templates'){
                $('#stateEndFrameColourSub').append('<option value="' + stateEndColorSub + '">' + stateEndColorSub + '</option>');
            }
            else{
                $('#stateEndFrameColourSelection').show();
                $('#stateEndFrameColourSub').hide();
            }


            //auto populating values of the dropdown Sub Colour based on the selection of the Colour Item
            //for State Main Frame
            $('#stateMainFrameColour').on('change', function(){
                $('#stateMainFrameColourSub').html('');
                if($('#stateMainFrameColour').val()=='Agency Group Templates'){
                    $('#stateMainFrameColourSub').show();
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateMainFrameColourSelection').hide();
                }else if($('#stateMainFrameColour').val()=='Themed Templates'){
                    $('#stateMainFrameColourSub').show();
                    $('#stateMainFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateMainFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateMainFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateMainFrameColourSelection').hide();
                }else if($('#stateMainFrameColour').val()=='Customise Your Template'){
                    $('#stateMainFrameColourSelection').show();
                    $('#stateMainFrameColourSub').hide();
                }
            });


            //for End Main Frame
            $('#stateEndFrameColour').on('change', function(){
                $('#stateEndFrameColourSub').html('');
                if($('#stateEndFrameColour').val()=='Agency Group Templates'){
                    $('#stateEndFrameColourSub').show();
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateEndFrameColourSelection').hide();
                }else if($('#stateEndFrameColour').val()=='Themed Templates'){
                    $('#stateEndFrameColourSub').show();
                    $('#stateEndFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateEndFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateEndFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateEndFrameColourSelection').hide();
                }else if($('#stateEndFrameColour').val()=='Customise Your Template'){
                    $('#stateEndFrameColourSelection').show();
                    $('#stateEndFrameColourSub').hide();
                }
            });



             //for checkboxGroup of Main Frame Templates
            $('#ExpandedMF input[type=checkbox]').change(function() {
                if (this.checked) {
                    $('#ExpandedMF input[type=checkbox]').not(
                        $(this)).prop('checked', false);
                }
            });


            //for checkboxGroup of End Frame Templates
            $('#ExpandedEF input[type=checkbox]').change(function() {
                if (this.checked) {
                    $('#ExpandedEF input[type=checkbox]').not(
                        $(this)).prop('checked', false);
                }
            });


            var agency_folder = $('#folder_name').val();


            $('#mainTemplateModal').on('show.bs.modal', function(e) {
                $('body').addClass('test');
                var mainTemplate = $(e.relatedTarget).attr('data-dbid');

                $("#mainTemplate").attr('src', '/storage/app/public/template_materials/' + agency_folder + '/' + mainTemplate);
            });


            //passing values from links of end templates
            $('#endTemplateModal').on('show.bs.modal', function(e) {
                $('body').addClass('test');
                var endTemplate = $(e.relatedTarget).attr('data-dbid');

                // $("#endTemplate").attr('src', '/storage/register/' + endTemplate);
                $("#endTemplate").attr('src', '/storage/app/public/template_materials/' + agency_folder + '/' + endTemplate);
            });


            var mainTemplate = $('#mfTemplate').val();

            //for dynamic display for Main Template
            if(mainTemplate === 'main-frame-1')
            {
                $('#first_template_mf').hide();
                $('#second_template_mf').hide();
                $('#third_template_mf').hide();
                $('#fourth_template_mf').show();

                console.log("the value is ", agency_folder);
                var url_mf1_link = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/4/style/' + agency_folder + '-custom.css';
                var url_mf1_link2 = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/4/style/' + agency_folder + '-grid.css';
                var url_mf1_link_medium = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/4/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_mf1_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf1_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf1_link_medium + '" rel="stylesheet" type="text/css" />');
                
            }
            else if(mainTemplate === 'main-frame-2')
            {
                $('#first_template_mf').show();
                $('#second_template_mf').hide();
                $('#third_template_mf').hide();
                $('#fourth_template_mf').hide();

                console.log("the value is ", agency_folder);
                var url_mf2_link = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/1/style/' + agency_folder + '-custom.css';
                var url_mf2_link2 = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/1/style/' + agency_folder + '-grid.css';
                var url_mf2_link_medium = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/1/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_mf2_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf2_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf2_link_medium + '" rel="stylesheet" type="text/css" />');
            }
            else if(mainTemplate === 'main-frame-3')
            {
                $('#first_template_mf').hide();
                $('#second_template_mf').hide();
                $('#third_template_mf').show();
                $('#fourth_template_mf').hide();

                console.log("the value is ", agency_folder);
                var url_mf3_link = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/3/style/' + agency_folder + '-custom.css';
                var url_mf3_link2 = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/3/style/' + agency_folder + '-grid.css';
                var url_mf3_link_medium = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/3/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_mf3_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf3_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf3_link_medium + '" rel="stylesheet" type="text/css" />'); 
            }
            else if(mainTemplate === 'main-frame-4')
            {
                $('#first_template_mf').hide();
                $('#second_template_mf').show();
                $('#third_template_mf').hide();
                $('#fourth_template_mf').hide();

                console.log("the value is ", agency_folder);
                var url_mf4_link = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/2/style/' + agency_folder + '-custom.css';
                var url_mf4_link2 = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/2/style/' + agency_folder + '-grid.css';
                var url_mf4_link_medium = '/storage/app/public/template_materials/' + agency_folder + '/mainframe/2/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_mf4_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf4_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf4_link_medium + '" rel="stylesheet" type="text/css" />'); 
            }


            var endTemplate = $('#efTemplate').val();

            //for dynamic display for End Template
            if(endTemplate === 'end-frame-1')
            {
                $('#first_template_ef').show();
                $('#second_template_ef').hide();
                $('#third_template_ef').hide();
                $('#fourth_template_ef').hide();

                console.log("the value is ", agency_folder);
                var url_ef1_link = '/storage/app/public/template_materials/' + agency_folder + '/endframe/2/style/' + agency_folder + '-custom.css';
                var url_ef1_link2 = '/storage/app/public/template_materials/' + agency_folder + '/endframe/2/style/' + agency_folder + '-grid.css';
                var url_ef1_link_medium = '/storage/app/public/template_materials/' + agency_folder + '/endframe/2/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_ef1_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef1_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef1_link_medium + '" rel="stylesheet" type="text/css" />');
                
            }
            else if(endTemplate === 'end-frame-2')
            {
                $('#first_template_ef').hide();
                $('#second_template_ef').show();
                $('#third_template_ef').hide();
                $('#fourth_template_ef').hide();

                console.log("the value is ", agency_folder);
                var url_ef2_link = '/storage/app/public/template_materials/' + agency_folder + '/endframe/1/style/' + agency_folder + '-custom.css';
                var url_ef2_link2 = '/storage/app/public/template_materials/' + agency_folder + '/endframe/1/style/' + agency_folder + '-grid.css';
                var url_ef2_link_medium = '/storage/app/public/template_materials/' + agency_folder + '/endframe/1/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_ef2_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef2_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef2_link_medium + '" rel="stylesheet" type="text/css" />');
            }
            else if(endTemplate === 'end-frame-3')
            {
                $('#first_template_ef').hide();
                $('#second_template_ef').hide();
                $('#third_template_ef').show();
                $('#fourth_template_ef').hide();

                console.log("the value is ", agency_folder);
                var url_ef3_link = '/storage/app/public/template_materials/' + agency_folder + '/endframe/3/style/' + agency_folder + '-custom.css';
                var url_ef3_link2 = '/storage/app/public/template_materials/' + agency_folder + '/endframe/3/style/' + agency_folder + '-grid.css';
                var url_ef3_link_medium = '/storage/app/public/template_materials/' + agency_folder + '/endframe/3/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_ef3_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef3_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef3_link_medium + '" rel="stylesheet" type="text/css" />'); 
            }
            else if(endTemplate === 'end-frame-4')
            {
                $('#first_template_ef').hide();
                $('#second_template_ef').hide();
                $('#third_template_ef').hide();
                $('#fourth_template_ef').show();

                console.log("the value is ", agency_folder);
                var url_ef4_link = '/storage/app/public/template_materials/' + agency_folder + '/endframe/4/style/' + agency_folder + '-custom.css';
                var url_ef4_link2 = '/storage/app/public/template_materials/' + agency_folder + '/endframe/4/style/' + agency_folder + '-grid.css';
                var url_ef4_link_medium = '/storage/app/public/template_materials/' + agency_folder + '/endframe/4/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_ef4_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef4_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef4_link_medium + '" rel="stylesheet" type="text/css" />'); 
            }



        });
    </script>

@stop    
