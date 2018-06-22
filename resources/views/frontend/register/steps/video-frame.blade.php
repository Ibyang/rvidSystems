               <h3><div class="register-icon reg-frame mb-2"></div><span class="pl-1">Video Frame Templates</span></h3>
                   <div class="row">
                       <div class="col-sm">
                           Select Main Frame
                           <select name="stateMainFrame" id="stateMainFrame" class="form-control mt-3 mb-3 col-10">
                               <option value="Use selected main frame template" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Use selected main frame template') ? "selected=\"selected\"" : "" }}}>Use selected main frame template</option>
                               <option value="Please select main frame template for me" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Please select main frame template for me') ? "selected=\"selected\"" : "" }}}>Please select main frame template for me</option>
                           </select>
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
                               {{--<option value="Professionals">Professionals</option>--}}
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
                       <div class="col-sm pl-5 select-form">
                           <div class="header-title mb-4"><b>Video Frame (Main Frame)</b><br>
                               Please Click to Select your preferred Main Frame Template</div>
                           <div class="row">
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-1.jpg') }}"><br>
                                   <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="main-frame-1.jpg" class="d-inline-block font12" >< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck1" value="1"
                                            {{{ (isset($mainframe_list) && (in_array('1', $mainframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck1">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-2.jpg') }}"><br>
                                   <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="main-frame-2.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck2" value="2"
                                            {{{ (isset($mainframe_list) && (in_array('2', $mainframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck2">Select</label>
                                   </div>
                               </div>
                           </div>
                           <div class="row mt-3">
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-3.jpg') }}"><br>
                                   <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="main-frame-3.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck3" value="3"
                                             {{{ (isset($mainframe_list) && (in_array('3', $mainframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck3">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-4.jpg') }}"><br>
                                   <a href="" data-toggle="modal" data-target="#mainTemplateModal" data-dbid="main-frame-4.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck4" value="4"
                                             {{{ (isset($mainframe_list) && (in_array('4', $mainframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck4">Select</label>
                                   </div>
                               </div>
                           </div>
                           <input type="hidden" name="main_frame_order">
                       </div>
                   </div>
                   <hr>
                   <div class="row">
                       <div class="col-sm">
                           Select End Frame
                           <select name="stateEndFrame" class="form-control mt-3 mb-3 col-10">
                               <option value="Use selected main frame template" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == 'Use selected main frame template') ? "selected=\"selected\"" : "" }}}>Use selected main frame template</option>
                               <option value="Please select main frame template for me" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == 'Please select main frame template for me') ? "selected=\"selected\"" : "" }}}>Please select main frame template for me</option>
                           </select>
                           Select Colours
                           <select name="stateEndFrameColour" id="stateEndFrameColour" class="form-control mt-3 mb-3 col-10">
                               <option value="Agency Group Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Agency Group Colours') ? "selected=\"selected\"" : "" }}}>Agency Group Colours</option>
                               <option value="Themed Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Themed Colours') ? "selected=\"selected\"" : "" }}}>Themed Colours</option>
                               <option value="Customise Your Colours" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Customise Your Colours') ? "selected=\"selected\"" : "" }}}>Custom Colours</option>
                           </select>
                           <select name="stateEndFrameColourSub" id="stateEndFrameColourSub" class="form-control mt-3 mb-3 col-10">
                               @if(!empty($template['end_frame_colours_sub']))
                                   <option value="{{ $template['end_frame_colours_sub'] }}"> {{ $template['end_frame_colours_sub'] }} </option>
                               @endif
                               {{--<option value="Theme 1"><5 Selections HERE + "Random"</option>--}}
                           </select>
                           <div id="stateEndFrameColourSelection" style='display:none;'>
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
                       <div class="col-sm select-form pl-5">
                           <div class="header-title mb-4">End Frame<br>You have 4 End Frame Template Formats</div>
                           <div class="row">
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-1.jpg') }}"><br>
                                   <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="main-frame-1.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck9" value="1"
                                               {{{ (isset($endframe_list) && (in_array('1', $endframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck9">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-2.jpg') }}"><br>
                                   <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="main-frame-2.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck10" value="2"
                                               {{{ (isset($endframe_list) && (in_array('2', $endframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck10">Select</label>
                                   </div>
                               </div>
                           </div>
                           <div class="row mt-3">
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-3.jpg') }}"><br>
                                   <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="main-frame-3.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck11" value="3"
                                               {{{ (isset($endframe_list) && (in_array('3', $endframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck11">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-4.jpg') }}"><br>
                                   <a href="" data-toggle="modal" data-target="#endTemplateModal" data-dbid="main-frame-4.jpg" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck12" value="4"
                                               {{{ (isset($endframe_list) && (in_array('4', $endframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck12">Select</label>
                                   </div>
                               </div>
                           </div>
                           <input type="hidden" name="end_frame_order">
                       </div>
                   </div>

                   <!-- Display Modal to view the Main template in an Enlarge Mode -->
                   <div class="modal fade" id="mainTemplateModal"
                        tabindex="-1" role="dialog"
                        aria-labelledby="VideoModalLabel">
                       <div class="modal-dialog" role="document" style="max-width: 700px;">
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
                       <div class="modal-dialog" role="document" style="max-width: 700px;">
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