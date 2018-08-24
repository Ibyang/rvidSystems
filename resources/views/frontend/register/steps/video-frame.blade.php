<h3><div class="register-icon r-i-frame mb-2"></div><span class="pl-1">Video Frame Templates</span></h3>
<div class="border-bot pt-0">
    <div class="row">
            <div class="col-sm align-self-center">
                    <div class="color-404"><b>Select Main Frame</b></div>

                    <select name="stateMainFrame" id="stateMainFrame" class="form-control mt-3 mb-3 col-10">
                        <option value="Use selected main frame template" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Use selected main frame template') ? "selected=\"selected\"" : "" }}}>Use selected main frame template</option>
                        <option value="Please select main frame template for me" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Please select main frame template for me') ? "selected=\"selected\"" : "" }}}>Please select main frame template for me</option>
                    </select>

                    <div class="color-404"><b>Select Colours</b></div>
                    
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

            @if($temp != null)

                <div class="col-sm-6 select-form" id="checkboxGroupMF">
                        <div class="header-title text-justify"><b>PICK YOUR VIDEO FRAME TEMPLATES <br></br>AND COLOURS</b></div>
                        <div class="my-4"><b>Main Frame</b><br>
                        Please select the one you would like to use below</div>
                        <div class="row">
                            <div class="col-sm">
                                        <img class="img-fluid w-100" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_1']) }}"><br>
                                        <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_1'] }}" class="d-inline-block font12" >< Click to Enlarge ></a>
                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                          <input type="checkbox" class="custom-control-input" name="main_frame[]" id="mainframe1" value="main-frame-1"
                                                   {{{ (isset($mainframe_list) && (in_array('main-frame-1', $mainframe_list))) ? "checked" : ""}}}>
                                          <label class="custom-control-label font12" for="mainframe1">Select</label>
                                        </div>
                            </div>
                            <div class="col-sm">
                                        <img class="img-fluid w-100" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_2']) }}"><br>
                                        <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_2'] }}" class="d-inline-block font12">< Click to Enlarge ></a>
                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                          <input type="checkbox" class="custom-control-input" name="main_frame[]" id="mainframe2" value="main-frame-2"
                                                   {{{ (isset($mainframe_list) && (in_array('main-frame-2', $mainframe_list))) ? "checked" : ""}}}>
                                          <label class="custom-control-label font12" for="mainframe2">Select</label>
                                        </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm">
                                        <img class="img-fluid w-100" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_3']) }}""><br>
                                        <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_3'] }}" class="d-inline-block font12">< Click to Enlarge ></a>
                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                          <input type="checkbox" class="custom-control-input" name="main_frame[]" id="mainframe3" value="main-frame-3"
                                                   {{{ (isset($mainframe_list) && (in_array('main-frame-3', $mainframe_list))) ? "checked" : ""}}}>
                                          <label class="custom-control-label font12" for="mainframe3">Select</label>
                                        </div>
                            </div>
                            <div class="col-sm">
                                        <img class="img-fluid w-100" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_main_template_4']) }}"><br>
                                        <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="{{ $temp['zoom_main_template_4'] }}" class="d-inline-block font12">< Click to Enlarge ></a>
                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                          <input type="checkbox" class="custom-control-input" name="main_frame[]" id="mainframe4" value="main-frame-4"
                                                   {{{ (isset($mainframe_list) && (in_array('main-frame-4', $mainframe_list))) ? "checked" : ""}}}>
                                          <label class="custom-control-label font12" for="mainframe4">Select</label>
                                        </div>
                            </div>
                        </div>
                </div>

            @else
            
                 <div class="col-sm-6 select-form" id="checkboxGroupMF">
                        <div class="header-title text-justify"><b>PICK YOUR VIDEO FRAME TEMPLATES <br></br>AND COLOURS</b></div>
                        <div class="my-4"><b>Main Frame</b><br>
                        Please select the one you would like to use below</div>
                        <div class="row">
                            <div class="col-sm">
                                        <img class="img-fluid w-100" src="{{ asset('storage/register/main-frame-1b.jpg') }}"><br>
                                        <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="main-frame-1.jpg" class="d-inline-block font12" >< Click to Enlarge ></a>
                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                          <input type="checkbox" class="custom-control-input" name="main_frame[]" id="mainframe1" value="main-frame-1"
                                                   {{{ (isset($mainframe_list) && (in_array('main-frame-1', $mainframe_list))) ? "checked" : ""}}}>
                                          <label class="custom-control-label font12" for="mainframe1">Select</label>
                                        </div>
                            </div>
                            <div class="col-sm">
                                        <img class="img-fluid w-100" src="{{ asset('storage/register/main-frame-2b.jpg') }}"><br>
                                        <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                          <input type="checkbox" class="custom-control-input" name="main_frame[]" id="mainframe2" value="main-frame-2"
                                                   {{{ (isset($mainframe_list) && (in_array('main-frame-2', $mainframe_list))) ? "checked" : ""}}}>
                                          <label class="custom-control-label font12" for="mainframe2">Select</label>
                                        </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm">
                                        <img class="img-fluid w-100" src="{{ asset('storage/register/main-frame-3b.jpg') }}"><br>
                                        <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                          <input type="checkbox" class="custom-control-input" name="main_frame[]" id="mainframe3" value="main-frame-3"
                                                   {{{ (isset($mainframe_list) && (in_array('main-frame-3', $mainframe_list))) ? "checked" : ""}}}>
                                          <label class="custom-control-label font12" for="mainframe3">Select</label>
                                        </div>
                            </div>
                            <div class="col-sm">
                                        <img class="img-fluid w-100" src="{{ asset('storage/register/main-frame-4b.jpg') }}"><br>
                                        <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                        <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                          <input type="checkbox" class="custom-control-input" name="main_frame[]" id="mainframe4" value="main-frame-4"
                                                   {{{ (isset($mainframe_list) && (in_array('main-frame-4', $mainframe_list))) ? "checked" : ""}}}>
                                          <label class="custom-control-label font12" for="mainframe4">Select</label>
                                        </div>
                            </div>
                        </div>
                </div>  
            @endif     
    </div> <!-- end row -->
</div> <!--end border-bot pt-0 -->

<div class="row mt-3">
                    <div class="col-sm align-self-center">
                            <div class="color-404"><b>Select End Frame</b></div>
                            <!-- <select name="state" class="form-control col-10 mt-3 mb-5">
                                    <option>No Preference (Randomise All)</option>
                            </select> -->
                            <select name="stateEndFrame" class="form-control mt-3 mb-3 col-10">
                               <option value="Use selected end frame template" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == "Use selected main frame template") ? "selected=\"selected\"" : "" }}}>Use selected main frame template</option>
                               <option value="Please select end frame template for me" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == "Please select end frame template for me") ? "selected=\"selected\"" : "" }}}>Please select main frame template for me</option>
                            </select>

                            <div class="color-404"><b>Select Colours</b></div>
                            <select name="stateEndFrameColour" id="stateEndFrameColour" class="form-control col-10 mt-3 mb-3">
                               <option value="Agency Group Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Agency Group Colours') ? "selected=\"selected\"" : "" }}}>Agency Group Colours</option>
                               <option value="Themed Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Themed Colours') ? "selected=\"selected\"" : "" }}}>Themed Colours</option>
                               <option value="Customise Your Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Customise Your Colours') ? "selected=\"selected\"" : "" }}}>Custom Colours</option>
                           </select>
                           <select name="stateEndFrameColourSub" id="stateEndFrameColourSub" class="form-control col-10 mt-3 mb-3">
                               @if(!empty($template['end_frame_colours_sub']))
                                   <option value="{{ $template['end_frame_colours_sub'] }}"> {{ $template['end_frame_colours_sub'] }} </option>
                               @endif
                           </select>
                           <div id="stateEndFrameColourSelection" style='display:none;'>
                               <div class="row my-4">
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

                    @if($temp != null)

                      <div class="col-sm-6 select-form" id="checkboxGroupEF">
                          <div class="header-title mb-4"><b>End Frame</b><br>Please select the one you would like to use below</div>
                          <div class="row">
                              <div class="col-sm">
                                  <img class="img-fluid w-100" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_1']) }}"><br>
                                  <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_1'] }}" class="d-inline-block font12">< Click to Enlarge ></a>
                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="end_frame[]" id="endframe1" value="end-frame-1" 
                                                   {{{ (isset($endframe_list) && (in_array('end-frame-1', $endframe_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label font12" for="endframe1">Select</label>
                                  </div>
                              </div>
                              <div class="col-sm">
                                  <img class="img-fluid w-100" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_2']) }}"><br>
                                  <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_2'] }}" class="d-inline-block font12">< Click to Enlarge ></a>
                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="end_frame[]" id="endframe2" value="end-frame-2"
                                                   {{{ (isset($endframe_list) && (in_array('end-frame-2', $endframe_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label font12" for="endframe2">Select</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row mt-3">
                              <div class="col-sm">
                                  <img class="img-fluid w-100" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_3']) }}"><br>
                                  <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_3'] }}" class="d-inline-block font12">< Click to Enlarge ></a>
                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="end_frame[]" id="endframe3" value="end-frame-3"
                                                   {{{ (isset($endframe_list) && (in_array('end-frame-3', $endframe_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label font12" for="endframe3">Select</label>
                                  </div>
                              </div>
                              <div class="col-sm">
                                  <img class="img-fluid w-100" src="{{ asset('storage/template_materials/' . $temp['folder_name'] . '/' . $temp['thumb_end_template_4']) }}"><br>
                                  <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="{{ $temp['zoom_end_template_4'] }}" class="d-inline-block font12">< Click to Enlarge ></a>
                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="end_frame[]" id="endframe4" value="end-frame-4"
                                                   {{{ (isset($endframe_list) && (in_array('end-frame-4', $endframe_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label font12" for="endframe4">Select</label>
                                  </div>
                              </div>
                          </div>
                          <input type="hidden" name="end_frame_order">
                          <input type="hidden" name="folder_name" id="folder_name" value="{{ $temp['folder_name'] }}">
                      </div>

                  @else

                      <div class="col-sm-6 select-form" id="checkboxGroupEF">
                          <div class="header-title mb-4"><b>End Frame</b><br>Please select the one you would like to use below</div>
                          <div class="row">
                              <div class="col-sm">
                                  <img class="img-fluid w-100" src="{{ asset('storage/register/main-frame-1.jpg') }}"><br>
                                  <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="main-frame-1.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="end_frame[]" id="endframe1" value="end-frame-1"
                                                   {{{ (isset($endframe_list) && (in_array('end-frame-1', $endframe_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label font12" for="endframe1">Select</label>
                                  </div>
                              </div>
                              <div class="col-sm">
                                  <img class="img-fluid w-100" src="{{ asset('storage/register/main-frame-2.jpg') }}"><br>
                                  <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="main-frame-2.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="end_frame[]" id="endframe2" value="end-frame-2"
                                                   {{{ (isset($endframe_list) && (in_array('end-frame-2', $endframe_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label font12" for="endframe2">Select</label>
                                  </div>
                              </div>
                          </div>
                          <div class="row mt-3">
                              <div class="col-sm">
                                  <img class="img-fluid w-100" src="{{ asset('storage/register/main-frame-3.jpg') }}"><br>
                                  <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="main-frame-3.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="end_frame[]" id="endframe3" value="end-frame-3"
                                                   {{{ (isset($endframe_list) && (in_array('end-frame-3', $endframe_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label font12" for="customCheck11">Select</label>
                                  </div>
                              </div>
                              <div class="col-sm">
                                  <img class="img-fluid w-100" src="{{ asset('storage/register/main-frame-4.jpg') }}"><br>
                                  <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="main-frame-4.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="end_frame[]" id="endframe4" value="end-frame-4"
                                                   {{{ (isset($endframe_list) && (in_array('end-frame-4', $endframe_list))) ? "checked" : ""}}}>
                                    <label class="custom-control-label font12" for="endframe4">Select</label>
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endif  

</div> <!-- row mt-3 -->


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