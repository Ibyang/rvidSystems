<h3><div class="register-icon r-i-content mb-2"></div><span class="pl-1">Content for Video Frame Templates</span></h3>
<div class="row">
        <div class="col-sm">
                <br><br><br><br><br>
                <div class="color-404"><b>Required (Enter as you wish it to appear)</b></div>
                <input type="text" class="form-control mt-3 mb-3" name="videoName" required autofocus placeholder="Name" value="{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}">
                <input type="text" class="form-control mt-3 mb-3" name="videoMobile" required autofocus placeholder="Mobile"  value="{{$agent['mobile']}}">
                <input type="text" class="form-control mt-3 mb-3" name="videoEmailAdd" required autofocus placeholder="Web or Email Address" value="{{$agent['email']}}">
                <textarea placeholder="Agency Name and details (as required)" name="videoAgencyName" class="form-control mt-3 mb-3 textarea-txt">{{$agent['name_agency']}}</textarea>
                <textarea placeholder="Content or Other or Address (Optional)" name="videoContent" class="form-control mt-3 mb-3 textarea-txt">{{$agent['address']}}&nbsp;{{$agent['suburb']}}&nbsp;{{$agent['state']}}</textarea>
        </div>
        <div class="col-sm pl-4 select-form">
                <b>ADD FRAME CONTACT DETAILS</b>
                <p>Please enter your content as you wish it to
                appear on your video templates.</p>
                <b>Main Frame</b>
                <br><br>
                <b>Preview</b>

                <div id="default_template_mf">
                    <img src="{{ asset('storage/register/example-frame.jpg') }}">
                </div>
                <!-- inline html template layout -->

                <!-- start of the section for main frame DIV template -->
                <!-- First Main Frame Template -->
                <div id="first_template_mf" style="display: none">
                    <h6>First Template</h6>

                        <div class="twb337">
                            <div id="{{ $temp['folder_name'] }}-main-1" class="raywhite-main-small-1">   
                                <div id="wrapper">

                                    <div id="sidebar" class="col-md-3 cont">
                                        <div class="col-md-12 cont">
                                            <div class="img-cont yellow"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/2/image/' . $temp['agency_logo']) }}" width="55" class="branding"></div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="img-cont"><img src="image/helen-yan.jpg" width="55"></div>
                                        </div>
                                        <div class="col-md-12 text-center" style="padding-top:0;">
                                            <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                            <h2>{{$agent['mobile']}}<br>
                                                <br>
                                                 </h2> 
                                                <br><br>
                                        </div>
                                    </div>
                                    <div id="content" class="col-md-9 cont">
                                        <div class="col-md-6 info yellow content-header">
                                            <div class="col-md-2 col-md-offset-1 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/1/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/1/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-2 header-icon">
                                                <div><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/1/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                            </div>
                                            <div class="col-md-3 header-text">
                                                <div class="house grey-txt">House</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 add content-header">
                                            <!-- 24 Townsend Street<br>
                                            Ivanhoe East VIC 3079 -->
                                            {{$agent['address']}}<br>
                                            {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                        </div>
                                        <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/1/image/' . $temp['agency_main_pic']) }}" width="361" height="202"></div>
                                    </div>
                                
                                </div><!-- end wrapper -->
                            <!--/div--><!-- end raywhite-small -->
                        </div><!-- end twb337 -->

                        <div class="d-flex justify-content-between mt-2">
                            <div class="align-self-center">
                                <a href="" data-toggle="modal" data-target="#expandMFTemplateModal" data-dbid="1" class="d-inline-block">< Click to Expand ></a>
                            </div>
                            <!-- <div>
                                <div class="d-inline-block pr-3">Change</div>
                                <div class="d-inline-block">
                                    <select name="" class="form-control">
                                        <option>1</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                      </div>  
                </div>


                <!-- Second Main Frame Template -->
                <div id="second_template_mf" style="display: none">
                <h6>Second Template</h6>

                 <div class="twb337">   
                  <div id="{{ $temp['folder_name'] }}-main-2" class="raywhite-main-small-2">  
                    <div id="wrapper">
                        <!--div class="col-md-12 cont"-->
                        <div id="sidebar" class="col-md-3 cont">
                            <div class="col-md-12 cont img-cont"></div>
                            <!--div>
                             <div class="img-cont"><img src="image/helen-yan.jpg" width="266"></div>
                            </div-->

                            <div class="col-md-12 text-center" style="padding-top:0;">
                                <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                <!-- <h2>0404 078 588<br>
                                    (03) 8538 0588<br>
                                    <br>
                                    raywhite.com</h2> -->
                                <h2>{{$agent['mobile']}}<br>
                                    <br>
                                    </h2> 
                                    <br><br>    

                            </div>
                            <div class="branding-container">
                                <div class="col-md-12 cont">
                                    <div class="img-logo-cont yellow"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/2/image/' . $temp['agency_logo']) }}" width="55" class="branding"></div>
                                </div>
                            </div>

                            <!--div class="col-md-3 cont branding-container">
                              <div class="img-logo-cont yellow"><img src="image/ray-white-logo.jpg" width="200" class="branding"></div>
                            </div-->

                        </div>

                        <div id="content" class="col-md-9 cont">
                            <div class="col-md-12 cont"><img src="image/revid-house.jpg" width="361" height="201"></div>
                            <div class="col-md-6 info yellow content-header">
                                <div class="col-md-2 col-md-offset-1 header-icon">
                                    <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                </div>
                                <div class="col-md-2 header-icon">
                                    <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                </div>
                                <div class="col-md-2 header-icon">
                                    <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
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

                    <div class="d-flex justify-content-between mt-2">
                        <div class="align-self-center">
                            <a href="" data-toggle="modal" data-target="#expandMFTemplateModal" data-dbid="2" class="d-inline-block">< Click to Expand ></a>
                        </div>
                        <!-- <div>
                            <div class="d-inline-block pr-3">Change</div>
                            <div class="d-inline-block">
                                <select name="" class="form-control">
                                    <option>1</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                  </div>  
                </div>


                <!-- Third Main Frame Template -->
                <div id="third_template_mf" style="display: none">
                  <h6>Third Template</h6>

                  <div class="twb337">
                      <div id="{{ $temp['folder_name'] }}-main-3" class="raywhite-main-small-3">  
                        <div id="wrapper">
                            <!--div class="col-md-12 cont"-->
                            <div id="content" class="col-md-9 cont">
                                <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/1/image/' . $temp['agency_main_pic']) }}" width="361" height="201"></div>
                                <div class="col-md-6 info gray content-header">
                                    <div class="col-md-2 col-md-offset-1 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                    </div>
                                    <div class="col-md-2 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-2 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-3 header-text">
                                        <div class="house grey-txt">House</div>
                                    </div>
                                </div>
                                <div class="col-md-6 add yellow content-header">
                                    <!-- 24 Townsend Street<br>
                                    Ivanhoe East VIC 3079  -->
                                    {{$agent['address']}}<br>
                                    {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                </div>
                            </div>

                            <div id="sidebar" class="col-md-3 cont">
                                <div class="col-md-12 profile-image text-center" style="padding-top:0;"><img src="image/helen-yan.jpg" width="55"></div>
                                <div class="col-md-12 text-center">
                                    <h1 class="profile-name" style="margin-top:0; margin-bottom:0;">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                    <!-- <h2>0404 078 588<br>
                                        (03) 8538 0588<br>
                                        <br>
                                        raywhite.com</h2> -->
                                     <h2>{{$agent['mobile']}}<br>
                                        <br>
                                         </h2> 
                                        <br><br>                 
                                </div>
                                <div class="branding-container">
                                    <div class="col-md-12 cont">
                                        <div class="img-logo-cont yellow"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/2/image/' . $temp['agency_logo']) }}" width="55" class="branding"></div>
                                    </div>
                                </div>
                            </div>

                            <!--/div-->
                           </div> <!-- end of wrapper -->
                         </div>  
                         <div style="clear: both;"></div>
                         <div class="d-flex justify-content-between mt-2">
                            <div class="align-self-center">
                                <a href="" data-toggle="modal" data-target="#expandMFTemplateModal" data-dbid="3" class="d-inline-block">< Click to Expand ></a>
                            </div>
                            <!-- <div>
                                <div class="d-inline-block pr-3">Change</div>
                                <div class="d-inline-block">
                                    <select name="" class="form-control">
                                        <option>1</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                  </div> <!-- end of twb337 --> 
                </div> <!-- end of template -->


                <!-- Fourth Main Frame Template -->
                <div id="fourth_template_mf" style="display: none">
                <h6>Fourth Template</h6>

                  <div class="twb337">
                      <div id="{{ $temp['folder_name'] }}-main-4" class="raywhite-main-small-4">  
                        <div id="wrapper">
                            <!--div class="col-md-12 cont"-->
                            <div id="sidebar" class="col-md-3 cont">
                                <div class="branding-container">
                                    <div class="col-md-12 cont">
                                        <div class="img-logo-cont yellow"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/2/image/' . $temp['agency_logo']) }}" width="55" class="branding"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 cont img-cont"></div>
                                <div class="col-md-12 text-center">
                                    <h1 class="profile-name">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                    <!-- <h2>0404 078 588<br>
                                        (03) 8538 0588<br>
                                        <br>
                                        raywhite.com</h2> -->
                                     <h2>{{$agent['mobile']}}<br>
                                        <br>
                                         </h2>
                                        <br><br>        
                                </div>
                            </div>
                            <div id="content" class="col-md-9 cont">
                                <div class="col-md-6 info yellow content-header">
                                    <div class="col-md-2 col-md-offset-1 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/bed.jpg') }}" height=10><span class="ctr grey-txt">4</span></div>
                                    </div>
                                    <div class="col-md-2 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/shower.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-2 header-icon">
                                        <div><img src="{{ asset('storage/agency_css/' . $agent['group'] . '/mainframe/2/image/car.jpg') }}" height=10><span class="ctr grey-txt">3</span></div>
                                    </div>
                                    <div class="col-md-3 header-text">
                                        <div class="house grey-txt">House</div>
                                    </div>
                                </div>
                                <div class="col-md-6 add content-header">
                                    <!-- 24 Townsend Street<br>
                                    Ivanhoe East VIC 3079  -->
                                    {{$agent['address']}}<br>
                                    {{$agent['suburb']}}&nbsp;{{$agent['state']}}&nbsp;{{$agent['postcode']}}
                                </div>
                                <div class="col-md-12 cont"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/mainframe/1/image/' . $temp['agency_main_pic']) }}" height="201"></div>
                            </div>
                            <!--/div-->
                        </div> <!-- end of wrapper -->
                      </div>   

                    <div class="d-flex justify-content-between mt-2">
                        <div class="align-self-center">
                            <a href="" data-toggle="modal" data-target="#expandMFTemplateModal" data-dbid="4" class="d-inline-block">< Click to Expand ></a>
                        </div>
                        <!-- <div>
                            <div class="d-inline-block pr-3">Change</div>
                            <div class="d-inline-block">
                                <select name="" class="form-control">
                                    <option>1</option>
                                </select>
                            </div>
                        </div> -->
                    </div>
                  </div>  <!-- end of twb337 --> 
                </div> <!-- end of template -->


                <!-- for End Frame Template -->
                <br>
                <div class="select-form-2">
                    <b>End Frame</b><br><br>
                    Preview<br><br>

                    <div id="default_template_ef">
                        <img src="{{ asset('storage/register/end-frame2.jpg') }}">
                    </div>
                    <!-- inline html template layout -->

                    <!-- start of the section for main frame DIV template -->
                    <!-- First End Frame Template -->
                    <div id="first_template_ef" style="display: none">
                    <h6>First Template</h6>

                        <div class="twb337">   
                          <div id="{{ $temp['folder_name'] }}-end-2" class="raywhite-end-small-2"> 

                           <div id="wrapper">
                            <div id="sidebar">
                                <div class="col-md-12 cont profile-bg"></div>
                            </div>
                            <div id="content" class="col-md-8 cont">
                                <div class="col-md-12 cont">
                                    <h1 class="profile">{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}</h1>
                                </div>
                                <div class="col-md-12 cont logo"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/endframe/2/image/' . $temp['agency_logo']) }}" width="77"></div>
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

                            <div class="d-flex justify-content-between mt-2">
                                <div class="align-self-center">
                                    <a href="" data-toggle="modal" data-target="#expandEFTemplateModal" data-dbid="4" class="d-inline-block font12">< Click to Expand ></a>
                                </div>
                                <!-- <div>
                                    <div class="d-inline-block pr-3">Change</div>
                                    <div class="d-inline-block">
                                        <select name="" class="form-control">
                                            <option>1</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                          </div>  
                    </div>

                    <!-- Second End Frame Template -->
                    <div id="second_template_ef" style="display: none">
                        <h6>Second Template</h6>

                     <div class="twb337">
                      <div id="{{ $temp['folder_name'] }}-end-1" class="raywhite-end-small-1">

                        <div id="wrapper">
                                <div class="col-md-12 cont">
                                    <div id="sidebar">
                                        <div class="col-md-3 cont">
                                            <div class="col-md-12 cont"><img class="img-profile" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/endframe/1/image/helen-yan.jpg') }}" width="173">
                                            </div>
                                        </div>
                                        <div class="col-md-12 cont logo-cont"><img class="img-logo" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/endframe/1/image/' . $temp['folder_name'] . '-logo.jpg') }}" width="60"></div>
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
                            </div> <!-- end of wrapper -->

                       </div> 
                        <div class="d-flex justify-content-between mt-2">
                            <div class="align-self-center">
                                <a href="" data-toggle="modal" data-target="#expandEFTemplateModal" data-dbid="2" class="d-inline-block">< Click to Expand ></a>
                            </div>
                            <!-- <div>
                                <div class="d-inline-block pr-3">Change</div>
                                <div class="d-inline-block">
                                    <select name="" class="form-control">
                                        <option>1</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                       </div>  
                    </div>

                    <!-- Third End Frame Template -->
                    <div id="third_template_ef" style="display: none">
                        <h6>Third Template</h6>

                     <div class="twb337">   
                      <div id="{{ $temp['folder_name'] }}-end-3" class="raywhite-end-small-3">  
                        <div id="wrapper">
                            <div id="sidebar">
                                <div class="col-md-12 cont profile-bg">
                                    
                                </div>
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
                                <div class="col-md-12 cont logo"><img src="image/ray-white-logo.jpg" width="60"></div>
                            </div>
                        </div> <!-- end of wrapper -->
                       </div> 
                        <div class="d-flex justify-content-between mt-2">
                            <div class="align-self-center">
                                <a href="" data-toggle="modal" data-target="#expandEFTemplateModal" data-dbid="3" class="d-inline-block">< Click to Expand ></a>
                            </div>
                            <!-- <div>
                                <div class="d-inline-block pr-3">Change</div>
                                <div class="d-inline-block">
                                    <select name="" class="form-control">
                                        <option>1</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                      </div> 
                    </div>

                    <!-- Fourth End Frame Template -->
                    <div id="fourth_template_ef" style="display: none">
                    <h6>Fourth Template</h6>

                    <div class="twb337">
                      <div id="{{ $temp['folder_name'] }}-end-4" class="raywhite-end-small-4">  
                        <div id="wrapper">
                            <div id="sidebar">
                                <div class="col-md-12 cont profile-bg"></div>
                            </div>
                            <div id="content" class="col-md-8 cont" style="margin-top: 0">
                                <div class="col-md-12 cont logo"><img src="{{ asset('storage/agency_css/'. $agent['group'] . '/endframe/1/image/' . $temp['agency_logo']) }}" width="77"></div>
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
                        <div class="d-flex justify-content-between mt-2">
                            <div class="align-self-center">
                                <a href="" data-toggle="modal" data-target="#expandEFTemplateModal" data-dbid="1" class="d-inline-block">< Click to Expand ></a>
                            </div>
                            <!-- <div>
                                <div class="d-inline-block pr-3">Change</div>
                                <div class="d-inline-block">
                                    <select name="" class="form-control">
                                        <option>1</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                      </div>  

                    </div>

                </div>
        </div>
</div>


