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
        <div class="col-lg-8">
           <h3 class="my-account-title pb-3 font-weight-bold mb-2">My Templates<br><div class="mt-3 color-ff0033">Current Template</div></h3>
           <div class="my-3">Main Template (1)</div>
           <div class="border-bot pt-0 pb-2">
                           <div class="row">
                                <div class="col">

                                    <!-- <img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"> -->

                                    <!-- Main Template -->
                                  <div>  
                                    <div id="first_template_mf" style="display: none">
                                      
                                          <div class="twb337">
<<<<<<< HEAD
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
=======
                                              <div id="{{ $temp['folder_name'] }}-main-1" class="raywhite-main-small-1">   
                                                  <div id="wrapper">
                                                    <div id="sidebar" class="col-md-3 cont">
                                                      <div class="col-md-12 cont">
                                                        <div class="img-cont yellow"><img src="image/ray-white-logo.jpg" width="87" class="branding"></div>
                                                      </div>
                                                      <div class="col-md-12" style="padding-bottom:0;">
                                                        <div class="img-cont"><img src="image/helen-yan.jpg" width="87"></div>
                                                      </div>
                                                      <div class="col-md-12 text-center">
                                                        <h1 class="profile-name" style="margin-top:0; margin-bottom:0;">Helen Yan</h1>
                                                        <h2>0404 078 588<br>
                                                          (03) 8538 0588<br>
                                                          <br>
                                                          raywhite.com</h2>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                      </div>
                                                    </div>
                                                    <div id="content" class="col-md-9 cont">
                                                      <div class="col-md-6 info yellow content-header">
                                                        <div class="col-md-3 col-md-offset-0 header-icon">
<<<<<<< HEAD
                                                          <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-bed-icon.jpg') }}" height=20><span class="ctr grey-txt">4</span></div>
                                                        </div>
                                                        <div class="col-md-3 header-icon">
                                                          <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-shower-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
                                                        </div>
                                                        <div class="col-md-3 header-icon">
                                                          <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-car-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
=======
                                                          <div><img src="image/bed.jpg" height=20><span class="ctr grey-txt">4</span></div>
                                                        </div>
                                                        <div class="col-md-3 header-icon">
                                                          <div><img src="image/shower.jpg" height=20><span class="ctr grey-txt">3</span></div>
                                                        </div>
                                                        <div class="col-md-3 header-icon">
                                                          <div><img src="image/car.jpg" height=20><span class="ctr grey-txt">3</span></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                        </div>
                                                        <div class="col-md-3 header-text">
                                                          <div class="house grey-txt">House</div>
                                                        </div>
                                                      </div>
<<<<<<< HEAD
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
=======
                                                      <div class="col-md-6 add content-header">24 Townsend Street<br>
                                                        Ivanhoe East VIC 3079
                                                      </div>
                                                      <div class="col-md-12 cont"><img src="image/revid-house.jpg" width="573" height="320"></div>
                                                    </div>
                                                  </div><!-- end wrapper -->
                                              <!--/div--><!-- end raywhite-small -->
                                          </div><!-- end twb337 -->
                                        </div>  
                                  </div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754


                                  <!-- Second Main Frame Template -->
                                  <div id="second_template_mf" style="display: none">
                                  
                                   <div class="twb337">   
<<<<<<< HEAD
                                    <div id="{{ $temp['folder_name'] }}-main-2" class="{{ $temp['folder_name'] }}-main-medium-2">
=======
                                    <div id="{{ $temp['folder_name'] }}-main-2" class="raywhite-main-small-2">  
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

                                      <div id="wrapper">
                                            <!--div class="col-md-12 cont"-->
                                              <div id="sidebar" class="col-md-3 cont">
                                                <div class="col-md-12 cont img-cont"></div>
                                                <!--div>
                                                 <div class="img-cont"><img src="image/helen-yan.jpg" width="266"></div>
                                                </div-->

                                                <div class="col-md-12 text-center">
<<<<<<< HEAD
                                                  <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                  <h2>{{$agent['mobile']}}<br>
                                                    <!-- (03) 8538 0588<br> -->
                                                    <br>
                                                    {{$agent['website']}}</h2>
                                                </div>
                                                <div class="branding-container">
                                                  <div class="col-md-12 cont">
                                                    <div class="img-logo-cont yellow"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="87" class="branding"></div>
=======
                                                  <h1 class="profile-name">Helen Yan</h1>
                                                  <h2>0404 078 588<br>
                                                    (03) 8538 0588<br>
                                                    <br>
                                                    raywhite.com</h2>
                                                </div>
                                                <div class="branding-container">
                                                  <div class="col-md-12 cont">
                                                    <div class="img-logo-cont yellow"><img src="image/ray-white-logo.jpg" width="87" class="branding"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                  </div>
                                                </div>


                                                <!--div class="col-md-3 cont branding-container">
                                                  <div class="img-logo-cont yellow"><img src="image/ray-white-logo.jpg" width="200" class="branding"></div>
                                                </div-->

                                              </div>

                                              <div id="content" class="col-md-9 cont">
<<<<<<< HEAD
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
=======
                                                <div class="col-md-12 cont"><img src="image/revid-house.jpg" width="573" height="320"></div>
                                                <div class="col-md-6 info yellow content-header">
                                                  <div class="col-md-3 col-md-offset-0 header-icon">
                                                    <div><img src="image/bed.jpg" height=20><span class="ctr grey-txt">4</span></div>
                                                  </div>
                                                  <div class="col-md-3 header-icon">
                                                    <div><img src="image/shower.jpg" height=20><span class="ctr grey-txt">3</span></div>
                                                  </div>
                                                  <div class="col-md-3 header-icon">
                                                    <div><img src="image/car.jpg" height=20><span class="ctr grey-txt">3</span></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                  </div>
                                                  <div class="col-md-3 header-text">
                                                    <div class="house grey-txt">House</div>
                                                  </div>
                                                </div>
<<<<<<< HEAD
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
=======
                                                <div class="col-md-6 add content-header">24 Townsend Street<br>
                                                  Ivanhoe East VIC 3079 </div>
                                                 
                                              </div>
                                            <!--/div-->
                                          <div> <!-- end of wrapper -->

                                      </div>  
                                    </div>  
                                  </div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754


                                  <!-- Third Main Frame Template -->
                                  <div id="third_template_mf" style="display: none">
                          
                                    <div class="twb337">
<<<<<<< HEAD
                                        <div id="{{ $temp['folder_name'] }}-main-3" class="{{ $temp['folder_name'] }}-main-medium-3">
=======
                                        <div id="{{ $temp['folder_name'] }}-main-3" class="raywhite-main-small-3">  
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

                                          <div id="wrapper">
                                              <!--div class="col-md-12 cont"-->
                                                <div id="content" class="col-md-9 cont">
<<<<<<< HEAD
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
=======
                                                  <div class="col-md-12 cont"><img src="image/revid-house.jpg" width="573" height="320"></div>
                                                  <div class="col-md-6 info gray content-header">
                                                    <div class="col-md-3 col-md-offset-0 header-icon">
                                                      <div><img src="image/bed.jpg" height=20><span class="ctr white-txt">4</span></div>
                                                    </div>
                                                    <div class="col-md-3 header-icon">
                                                      <div><img src="image/shower.jpg" height=20><span class="ctr white-txt">3</span></div>
                                                    </div>
                                                    <div class="col-md-3 header-icon">
                                                      <div><img src="image/car.jpg" height=20><span class="ctr white-txt">3</span></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                    </div>
                                                    <div class="col-md-3 header-text">
                                                      <div class="house white-txt">House</div>
                                                    </div>
                                                  </div>
<<<<<<< HEAD
                                                  <div class="col-md-6 add yellow content-header">
                                                    {{$agent['address']}}<br>
                                                    {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}} 
                                                  </div>
=======
                                                  <div class="col-md-6 add yellow content-header">24 Townsend Street<br>
                                                    Ivanhoe East VIC 3079 </div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                  <!----> 
                                                </div>

                                                <div id="sidebar" class="col-md-3 cont">
<<<<<<< HEAD
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
=======
                                                  <div class="col-md-12 profile-image text-center" style="padding-top:0; padding-bottom:0;"><img src="image/helen-yan.jpg" width="87"></div>
                                                  <div class="col-md-12 text-center">
                                                    <h1 class="profile-name" style="margin-top:0; margin-bottom:0;">Helen Yan</h1>
                                                    <h2>0404 078 588<br>
                                                      (03) 8538 0588<br>
                                                      <br>
                                                      raywhite.com</h2>
                                                  </div>
                                                  <div class="branding-container">
                                                    <div class="col-md-12 cont">
                                                      <div class="img-logo-cont yellow"><img src="image/ray-white-logo.jpg" width="87" class="branding"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
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
<<<<<<< HEAD
                                        <div id="{{ $temp['folder_name'] }}-main-4" class="{{ $temp['folder_name'] }}-main-medium-4">
=======
                                        <div id="{{ $temp['folder_name'] }}-main-4" class="raywhite-main-small-4">  
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

                                          <div id="wrapper">
                                          <!--div class="col-md-12 cont"-->
                                            <div id="sidebar" class="col-md-3 cont">
                                              <div class="branding-container">
                                                <div class="col-md-12 cont">
<<<<<<< HEAD
                                                  <div class="img-logo-cont yellow"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="87" class="branding"></div>
=======
                                                  <div class="img-logo-cont yellow"><img src="image/ray-white-logo.jpg" width="87" class="branding"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                </div>
                                              </div>
                                              <div class="col-md-12 cont img-cont"></div>
                                              <div class="col-md-12 text-center">
<<<<<<< HEAD
                                                <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                                <h2>{{$agent['mobile']}}<br>
                                                  <!-- (03) 8538 0588<br> -->
                                                  <br>
                                                  {{$agent['website']}}</h2>
=======
                                                <h1 class="profile-name">Helen Yan</h1>
                                                <h2>0404 078 588<br>
                                                  (03) 8538 0588<br>
                                                  <br>
                                                  raywhite.com</h2>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                              </div>
                                            </div>
                                            <div id="content" class="col-md-9 cont">
                                              <div class="col-md-6 info yellow content-header">
                                                <div class="col-md-3 col-md-offset-0 header-icon">
<<<<<<< HEAD
                                                  <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-bed-icon.jpg') }}" height=20><span class="ctr grey-txt">4</span></div>
                                                </div>
                                                <div class="col-md-3 header-icon">
                                                  <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-shower-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
                                                </div>
                                                <div class="col-md-3 header-icon">
                                                  <div><img src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['folder_name'] . '-car-icon.jpg') }}" height=20><span class="ctr grey-txt">3</span></div>
=======
                                                  <div><img src="image/bed.jpg" height=20><span class="ctr grey-txt">4</span></div>
                                                </div>
                                                <div class="col-md-3 header-icon">
                                                  <div><img src="image/shower.jpg" height=20><span class="ctr grey-txt">3</span></div>
                                                </div>
                                                <div class="col-md-3 header-icon">
                                                  <div><img src="image/car.jpg" height=20><span class="ctr grey-txt">3</span></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                </div>
                                                <div class="col-md-3 header-text">
                                                  <div class="house grey-txt">House</div>
                                                </div>
                                              </div>
<<<<<<< HEAD
                                              <div class="col-md-6 add content-header">
                                                {{$agent['address']}}<br>
                                                {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                              </div>
                                              <!---->
                                              <div class="col-md-12 cont"><img src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_main_pic']) }}" width="573" height="320"></div>
=======
                                              <div class="col-md-6 add content-header">24 Townsend Street<br>
                                                Ivanhoe East VIC 3079 </div>
                                              <!---->
                                              <div class="col-md-12 cont"><img src="image/revid-house.jpg" width="573" height="320"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                            </div>
                                          <!--/div-->
                                          </div> <!-- end of wrapper -->

                                        </div>   

                                    </div>  <!-- end of twb337 --> 
                                  </div> <!-- end of template -->
                                </div> <!-- end of div Main Template -->  

<<<<<<< HEAD
                                </div> <!-- end of div class col -->
                           </div> <!-- end of  div class row -->

=======
                                </div>
                           </div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                           <div class="d-flex flex-row-reverse">
                              <div class="p-2"><a data-toggle="collapse" href="#ExpandedMF" role="button" aria-expanded="false" aria-controls="collapseExample" class="color-ff0033">Change</a></div>
                           </div>

                           <form id="frmMainFrame" method="POST" action="{{ route('editMainFrame') }}">
                            {{ csrf_field() }}
                               <div class="collapse my-template-checkbox pb-3" id="ExpandedMF">
                                   <div class="rules-arrow7"></div>
                                   <div class="ExpandForm px-3 pb-3">
                                       <div class="row register-form">
                                            <div class="col-sm">
                                                <div class="font-t-ms color-404 mb-3"><b>Select Main Frame</b></div> 
                                                <select name="stateMainFrame" id="stateMainFrame" class="form-control">
                                                    <option value="Use selected main frame template" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Use selected main frame template') ? "selected=\"selected\"" : "" }}}>Use selected main frame template</option>
                                                    <option value="Please select main frame template for me" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Please select main frame template for me') ? "selected=\"selected\"" : "" }}}>Please select main frame template for me</option>
                                                </select>
                                            </div>
                                            <div class="col-sm">
                                               <div class="font-t-ms color-404 mb-3"><b>Select Colours</b></div> 
                                               <div id="color_selection" style="display: none">
                                                  <div class="row my-4 font12"> 
                                                      <div class="col-sm-1"><div class="circle-area bg-ccc"></div></div> 
                                                      <div class="col-sm-2">#cccccc</div> 
                                                      <div class="col-sm pl-3 pr-0"><a href="" class="font-t-ms color-ff0033"><b>Change</b></a> <span class="color-ff0033"><b>+</b></span></div> 
                                                      <div class="col-sm-1"><div class="circle-area bg-6600cc"></div></div> 
                                                      <div class="col-sm-2">#cccccc</div> 
                                                      <div class="col-sm"><a href="" class="font-t-ms color-ff0033"><b>Change</b></a> <span class="color-ff0033"><b>+</b></span></div> 
                                                  </div> 
                                                </div>  
                                                <!-- <div class="row font12"> 
                                                    <div class="col-sm-1"><div class="circle-area bg-ccc"></div></div> 
                                                    <div class="col-md-2">#6600cc</div> 
                                                    <div class="col-sm pl-3 pr-0"><a href="" class="font-t-ms color-ff0033"><b>Change</b></a> <span class="color-ff0033"><b>+</b></span></div> 
                                                    <div class="col-sm-1"><div class="circle-area bg-333"></div></div> 
                                                    <div class="col-sm-2">#333333</div> 
                                                    <div class="col-sm"><a href="" class="font-t-ms color-ff0033"><b>Change</b></a> <span class="color-ff0033"><b>+</b></span></div> 
                                                </div>  -->
                                            </div>  

                                       </div>
                                       <h3 class="font20 my-3"><b>Video Frame (Main Frame)</b><div>Please select the one you would like to use below</div></h3> 
                                       <div class="row">
                                            <div class="col-sm">
                                                  {{--<img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid"><br>--}}
                                                  <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_1']) }}"><br>
                                                  <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_1'] }}">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck1">
                                                        <label class="custom-control-label font12" for="customCheck1">Select</label> -->
                                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck1" value="main-frame-1" 
                                                           @if($template['main_frame_template_format'] === 'main-frame-1')
                                                                checked
                                                           @endif>
                                                        <label class="custom-control-label font12" for="customCheck1">Select</label>
                                                  </div>  
                                            </div>
                                            <div class="col-sm">
                                                  {{--<img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid">--}}
                                                  <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_2']) }}"><br>
                                                  <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_2'] }}">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck2">
                                                        <label class="custom-control-label font12" for="customCheck2">Select</label> -->
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
                                                  {{--<img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid">--}}
                                                  <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_3']) }}"><br>
                                                  <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_3'] }}">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck3">
                                                        <label class="custom-control-label font12" for="customCheck3">Select</label> -->
                                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck3" value="main-frame-3" 
                                                            @if($template['main_frame_template_format'] === 'main-frame-3')
                                                                checked
                                                           @endif>
                                                        <label class="custom-control-label font12" for="customCheck3">Select</label>    
                                                  </div>  
                                            </div>
                                            <div class="col-sm">
                                                  {{--<img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid">--}}
                                                  <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_4']) }}"><br>
                                                  <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_4'] }}">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck4">
                                                        <label class="custom-control-label font12" for="customCheck4">Select</label> -->
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
                                              <input type="hidden" name="pageName" id="pageName" value="exploreTemplate">
                                              <input type="submit" class="form-control" value="Update Details">
                                       </div>

                                   </div>
                                </div>
                            </form>    
           </div> <!-- end of first div pt -->
           
           <div class="border-bot pt-0 pb-2">
                               <div class="my-3">End Template (2)</div>
                               <div class="row">
                                  <div class="col">

                                    <!-- <img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"> -->

                                    <!-- for Dynamic End Template -->
                                  <div>  
                                    <div id="first_template_ef" style="display: none">
                                    
<<<<<<< HEAD
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
=======
                                        <div class="twb337">   
                                          <div id="{{ $temp['folder_name'] }}-end-2" class="raywhite-end-small-2"> 
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

                                           <div id="wrapper">
                                              <div class="col-md-12 cont">
                                                <div id="sidebar">
                                                  <div class="col-md-3 cont">
<<<<<<< HEAD
                                                    <div class="col-md-12 cont"><img class="img-profile" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/endframe/1/image/helen-yan.jpg') }}" width="273">
                                                  </div>
                                                </div>
                                                  <div class="col-md-12 cont logo-cont"><img class="img-logo" src="{{ asset('storage/app/public/template_materials/'. $temp['folder_name'] . '/' . $temp['agency_logo']) }}" width="92"></div>
                                                </div>
                                                <div id="content" class="col-md-9 cont" style="margin-top: 0">
                                                  <div class="col-md-12 cont">
                                                    <h1 class="profile">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
=======
                                                    <div class="col-md-12 cont"><img class="img-profile" src="image/helen-yan.jpg" width="273">
                                                  </div>
                                                </div>
                                                  <div class="col-md-12 cont logo-cont"><img class="img-logo" src="image/ray-white-logo.jpg" width="92"></div>
                                                </div>
                                                <div id="content" class="col-md-9 cont">
                                                  <div class="col-md-12 cont">
                                                    <h1 class="profile">Helen Yan</h1>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                  </div>
                                                  <div class="col-md-12 cont">
                                                    <h2 class="profile"> Contact Me Today!<br>
                                                      <br>
<<<<<<< HEAD
                                                          {{$agent['mobile']}}<br>
                                                          {{$agent['email']}}<br>
=======
                                                      0404 078 588<br>
                                                      helen.yan@raywhite.com<br>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                                    </h2>
                                                  </div>
                                                  <div class="col-md-12 cont empty-cont"> </div>
                                                </div>
                                              </div>
                                            </div>  <!-- end of wrapper -->

                                           </div> 
<<<<<<< HEAD
                                          </div> 
                                     
=======
                                          </div>  
                                    </div>

                                    <!-- Second End Frame Template -->
                                    <div id="second_template_ef" style="display: none">

                                     <div class="twb337">
                                      <div id="{{ $temp['folder_name'] }}-end-1" class="raywhite-end-small-1">

                                        <div id="wrapper">
                                            <div id="sidebar">
                                              <div class="col-md-12 cont profile-bg"></div>
                                            </div>
                                            <div id="content" class="col-md-8 cont">
                                              <div class="col-md-12 cont">
                                                <h1 class="profile">Helen Yan</h1>
                                              </div>
                                              <div class="col-md-12 cont logo"><img src="image/ray-white-logo.jpg" width="125"></div>
                                              <div class="col-md-12 cont">
                                                <h2 class="profile">
                                                Contact Me Today!<br>
                                                <br>
                                                0404 078 588<br>
                                                helen.yan@raywhite.com<br>
                                                </h2>
                                              </div>
                                            </div>
                                          </div> <!-- end of wrapper -->

                                       </div> 
                                      </div>  
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                    </div>

                                    <!-- Third End Frame Template -->
                                    <div id="third_template_ef" style="display: none">

                                     <div class="twb337">   
                                      <div id="{{ $temp['folder_name'] }}-end-3" class="raywhite-end-small-3">  
                                        
                                        <div id="wrapper">
                                            <div id="sidebar">
                                              <div class="col-md-12 cont profile-bg"></div>
                                            </div>
<<<<<<< HEAD
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
=======
                                            <div id="content" class="col-md-8 cont">
                                              <div class="col-md-12 cont">
                                                <h1 class="profile">Helen Yan</h1>
                                              </div>
                                              <div class="col-md-12 cont">
                                                <h2 class="profile"> Contact Me Today!<br>
                                                  <br>
                                                  0404 078 588<br>
                                                  helen.yan@raywhite.com<br>
                                                </h2>
                                              </div>
                                              <div class="col-md-12 cont logo"><img src="image/ray-white-logo.jpg" width="92"></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                            </div>
                                          </div> <!-- end of wrapper -->
                                       </div> 
                                      </div> 

                                    </div>

                                    <!-- Fourth End Frame Template -->
                                    <div id="fourth_template_ef" style="display: none">

                                      <div class="twb337">
<<<<<<< HEAD
                                        <div id="{{ $temp['folder_name'] }}-end-4" class="{{ $temp['folder_name'] }}-end-medium-4">
=======
                                        <div id="{{ $temp['folder_name'] }}-end-4" class="raywhite-end-small-4">  
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                                          <div id="wrapper">
                                              <div id="sidebar">
                                                  <div class="col-md-12 cont profile-bg"></div>
                                              </div>
<<<<<<< HEAD
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
=======
                                              <div id="content" class="col-md-8 cont">
                                                <div class="col-md-12 cont logo"><img src="image/ray-white-logo.jpg" width="125"></div>
                                                <div class="col-md-12 cont">
                                                  <h1 class="profile">Helen Yan</h1>
                                                </div>
                                                <div class="col-md-12 cont">
                                                  <h2 class="profile"> Contact Me Today!<br>
                                                    <br>
                                                    0404 078 588<br>
                                                    helen.yan@raywhite.com<br>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
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
                                  <div class="p-2"><a data-toggle="collapse" href="#ExpandedEF" role="button" aria-expanded="false" aria-controls="collapseExample" class="color-ff0033">Change</a></div>
                               </div>

                               <form id="frmEndFrame" method="POST" action=" {{ route('editEndFrame') }}">
                                {{ csrf_field() }}
                                   <div class="collapse my-template-checkbox pb-3" id="ExpandedEF">
                                       <div class="rules-arrow7"></div>
                                       <div class="ExpandForm p-3">
                                           <div class="row register-form">
                                                <div class="col-sm">
                                                    <div class="font-t-ms color-404 mb-3"><b>Select End Frame</b></div> 
                                                    <!-- <select name="" class="form-control">
                                                        <option>Use Only One as Selected</option>
                                                    </select> -->
                                                    <select name="stateEndFrame" id="stateEndFrame" class="form-control">
                                                        <option value="Use selected end frame template" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == "Use selected main frame template") ? "selected=\"selected\"" : "" }}}>Use selected main frame template</option>
                                                        <option value="Please select end frame template for me" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == "Please select end frame template for me") ? "selected=\"selected\"" : "" }}}>Please select main frame template for me</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="font-t-ms color-404 mb-3"><b>Select Colours</b></div> 
                                                    <!-- <select name="" class="form-control">
                                                        <option>Agency Standards</option>
                                                    </select>
                                                    <select name="" class="form-control mt-2">
                                                        <option>Professionals</option>
                                                    </select> -->

                                                    <div class="col-sm" style="display: none">
                                                      <div class="row my-4 font12"> 
                                                          <div class="col-sm-1"><div class="circle-area bg-ccc"></div></div> 
                                                          <div class="col-sm-2">#cccccc</div> 
                                                          <div class="col-sm pl-3 pr-0"><a href="" class="font-t-ms color-ff0033"><b>Change</b></a> <span class="color-ff0033"><b>+</b></span></div> 
                                                          <div class="col-sm-1"><div class="circle-area bg-6600cc"></div></div> 
                                                          <div class="col-sm-2">#cccccc</div> 
                                                          <div class="col-sm"><a href="" class="font-t-ms color-ff0033"><b>Change</b></a> <span class="color-ff0033"><b>+</b></span></div> 
                                                      </div> 
                                                      <!-- <div class="row font12"> 
                                                          <div class="col-sm-1"><div class="circle-area bg-ccc"></div></div> 
                                                          <div class="col-md-2">#6600cc</div> 
                                                          <div class="col-sm pl-3 pr-0"><a href="" class="font-t-ms color-ff0033"><b>Change</b></a> <span class="color-ff0033"><b>+</b></span></div> 
                                                          <div class="col-sm-1"><div class="circle-area bg-333"></div></div> 
                                                          <div class="col-sm-2">#333333</div> 
                                                          <div class="col-sm"><a href="" class="font-t-ms color-ff0033"><b>Change</b></a> <span class="color-ff0033"><b>+</b></span></div> 
                                                      </div>  -->
                                                    </div> 
                                                </div>
                                           </div>
                                          <h3 class="font20 my-3"><b>End Frame</b><div>Please select the one you would like to use below</div></h3>
                                           <div class="row">
                                                <div class="col-sm">
                                                      {{--<img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid">--}}
                                                      <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_1']) }}"><br>
                                                      <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_1'] }}">< Click to Enlarge >{{ $temp['zoom_end_template_1'] }}</a>
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck9">
                                                            <label class="custom-control-label font12" for="customCheck9">Select</label> -->
                                                            <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck9" value="end-frame-1"
                                                              @if($template['end_frame_template_format'] === 'end-frame-1')
                                                                checked
                                                              @endif>
                                                            <label class="custom-control-label font12" for="customCheck9">Select</label>
                                                      </div>  
                                                </div>
                                                <div class="col-sm">
                                                      {{--<img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid">--}}
                                                      <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_2']) }}"><br>
                                                      <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_2'] }}">< Click to Enlarge ></a>
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck10">
                                                            <label class="custom-control-label font12" for="customCheck10">Select</label> -->
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
                                                      {{--<img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid">--}}
                                                      <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_3']) }}"><br>
                                                      <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_3'] }}">< Click to Enlarge ></a>
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck11">
                                                            <label class="custom-control-label font12" for="customCheck11">Select</label> -->
                                                            <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck11" value="end-frame-3"
                                                              @if($template['end_frame_template_format'] === 'end-frame-3')
                                                                checked
                                                              @endif>
                                                            <label class="custom-control-label font12" for="customCheck11">Select</label>
                                                      </div>  
                                                </div>
                                                <div class="col-sm">
                                                    {{--<img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid">--}}
                                                      <img class="img-fluid" src="{{ asset('storage/app/public/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_4']) }}"><br>
                                                      <a class="d-inline-block font12 color-424244" href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_4'] }}">< Click to Enlarge ></a>
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck12">
                                                            <label class="custom-control-label font12" for="customCheck12">Select</label> -->
                                                            <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck12" value="end-frame-4"
                                                              @if($template['end_frame_template_format'] === 'end-frame-4')
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
                                                <input type="hidden" name="pageName" id="pageName" value="exploreTemplate">
                                                <input type="submit" class="form-control" value="Update Details">
                                            </div>
                                           
                                       </div>
                                    </div>
                                </form>    
            </div> <!-- end of div pt -->

        </div>
    </div>
</div>

<!-- for Template Modal -->

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

    <script type="text/javascript">

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


            var stateMiddleColour = $('#middleFrameColor').val();
            var stateMiddleColorSub = $('#middleFrameColorSub').val();

            if(stateMiddleColour === 'Agency Group Templates' || stateMiddleColour === 'Themed Templates'){
                $('#stateMiddleFrameColourSub').append('<option value="' + stateMiddleColorSub + '">' + stateMiddleColorSub + '</option>');
            }
            else{
                $('#stateMiddleFrameColourSelection').show();
                $('#stateMiddleFrameColourSub').hide();
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



            // if($('#stateMainFrameColour').val()=='Agency Group Templates') {
            //     $('#stateMainFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
            //     $('#stateMainFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
            //     $('#stateMainFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
            //     $('#stateMainFrameColourSelection').hide();
            // }
            //
            // if($('#stateMiddleFrameColour').val()=='Agency Group Templates'){
            //     $('#stateMiddleFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
            //     $('#stateMiddleFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
            //     $('#stateMiddleFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
            //     $('#stateMiddleFrameColourSelection').hide();
            // }
            //
            // if($('#stateEndFrameColour').val()=='Agency Group Templates'){
            //     $('#stateEndFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
            //     $('#stateEndFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
            //     $('#stateEndFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
            //     $('#stateEndFrameColourSelection').hide();
            // }



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

            //for Middle Main Frame
            $('#stateMiddleFrameColour').on('change', function(){
                $('#stateMiddleFrameColourSub').html('');
                if($('#stateMiddleFrameColour').val()=='Agency Group Templates'){
                    $('#stateMiddleFrameColourSub').show();
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateMiddleFrameColourSelection').hide();
                }else if($('#stateMiddleFrameColour').val()=='Themed Templates'){
                    $('#stateMiddleFrameColourSub').show();
                    $('#stateMiddleFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateMiddleFrameColourSelection').hide();
                }else if($('#stateMiddleFrameColour').val()=='Customise Your Template'){
                    $('#stateMiddleFrameColourSelection').show();
                    $('#stateMiddleFrameColourSub').hide();
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
                $('#first_template_mf').show();
                $('#second_template_mf').hide();
                $('#third_template_mf').hide();
                $('#fourth_template_mf').hide();

                console.log("the value is ", agency_folder);
                var url_mf1_link = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/1/style/' + agency_folder + '-custom.css';
                var url_mf1_link2 = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/1/style/' + agency_folder + '-grid.css';
                var url_mf1_link_medium = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/1/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_mf1_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf1_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf1_link_medium + '" rel="stylesheet" type="text/css" />');
                
            }
            else if(mainTemplate === 'main-frame-2')
            {
                $('#first_template_mf').hide();
                $('#second_template_mf').show();
                $('#third_template_mf').hide();
                $('#fourth_template_mf').hide();

                console.log("the value is ", agency_folder);
                var url_mf2_link = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/2/style/' + agency_folder + '-custom.css';
                var url_mf2_link2 = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/2/style/' + agency_folder + '-grid.css';
                var url_mf2_link_medium = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/2/style/' + agency_folder + '-medium.css';

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
                var url_mf3_link = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/3/style/' + agency_folder + '-custom.css';
                var url_mf3_link2 = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/3/style/' + agency_folder + '-grid.css';
                var url_mf3_link_medium = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/3/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_mf3_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf3_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_mf3_link_medium + '" rel="stylesheet" type="text/css" />'); 
            }
            else if(mainTemplate === 'main-frame-4')
            {
                $('#first_template_mf').hide();
                $('#second_template_mf').hide();
                $('#third_template_mf').hide();
                $('#fourth_template_mf').show();

                console.log("the value is ", agency_folder);
                var url_mf4_link = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/4/style/' + agency_folder + '-custom.css';
                var url_mf4_link2 = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/4/style/' + agency_folder + '-grid.css';
                var url_mf4_link_medium = '../../storage/app/public/template_materials/' + agency_folder + '/mainframe/4/style/' + agency_folder + '-medium.css';

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
                var url_ef1_link = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/2/style/' + agency_folder + '-custom.css';
                var url_ef1_link2 = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/2/style/' + agency_folder + '-grid.css';
                var url_ef1_link_medium = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/2/style/' + agency_folder + '-medium.css';

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
                var url_ef2_link = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/1/style/' + agency_folder + '-custom.css';
                var url_ef2_link2 = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/1/style/' + agency_folder + '-grid.css';
                var url_ef2_link_medium = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/1/style/' + agency_folder + '-medium.css';

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
                var url_ef3_link = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/3/style/' + agency_folder + '-custom.css';
                var url_ef3_link2 = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/3/style/' + agency_folder + '-grid.css';
                var url_ef3_link_medium = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/3/style/' + agency_folder + '-medium.css';

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
                var url_ef4_link = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/4/style/' + agency_folder + '-custom.css';
                var url_ef4_link2 = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/4/style/' + agency_folder + '-grid.css';
                var url_ef4_link_medium = '../../storage/app/public/template_materials/' + agency_folder + '/endframe/4/style/' + agency_folder + '-medium.css';

                $('#css_container').append('<link href="' + url_ef4_link + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef4_link2 + '" rel="stylesheet" type="text/css" />');
                $('#css_container').append('<link href="' + url_ef4_link_medium + '" rel="stylesheet" type="text/css" />'); 
            }





        });
    </script>
    

@stop
