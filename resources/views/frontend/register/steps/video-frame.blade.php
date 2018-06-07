               <h3><div class="register-icon reg-frame mb-2"></div><span class="pl-1">Video Frame Templates</span></h3>
                   <div class="row">
                       <div class="col-sm">
                           Select Main Frame
                           <select name="stateMainFrame" id="stateMainFrame" class="form-control mt-3 mb-3 col-10">
                               <option value="Use One Template as Selected" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Use One Template as Selected') ? "selected=\"selected\"" : "" }}}>Use One Template as Selected</option>
                               <option value="Randomly Use Selected Templates" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'Randomly Use Selected Templates') ? "selected=\"selected\"" : "" }}}>Randomly Use Selected Templates</option>
                               <option value="No Preference(Random)" {{{ (!empty($template['main_frame_template']) && $template['main_frame_template'] == 'No Preference(Random)') ? "selected=\"selected\"" : "" }}}>No Preference(Random)</option>
                           </select>
                           Select Colours
                           <select name="stateMainFrameColour" id="stateMainFrameColour" class="form-control mt-3 mb-3 col-10">
                               <option value="Agency Group Templates" {{{ (!empty($template['main_frame_colours']) && $template['main_frame_colours'] == 'Agency Group Templates') ? "selected=\"selected\"" : "" }}}>Agency Group Templates</option>
                               <option value="Themed Templates" {{{ (!empty($template['main_frame_colours']) && $template['main_frame_colours'] == 'Themed Templates') ? "selected=\"selected\"" : "" }}}>Themed Templates</option>
                               <option value="Customise Your Template" {{{ (!empty($template['main_frame_colours']) && $template['main_frame_colours'] == 'Customise Your Template') ? "selected=\"selected\"" : "" }}}>Customise Your Template</option>
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
                               You have 4 Main Frame Template Formats</div>
                           <div class="row">
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-1.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck1" value="1"
                                            {{{ (isset($mainframe_list) && (in_array('1', $mainframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck1">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-2.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
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
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck3" value="3"
                                             {{{ (isset($mainframe_list) && (in_array('3', $mainframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck3">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-4.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
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
                           Select Middle Frame
                           <select name="stateMiddleFrame" class="form-control mt-3 mb-3 col-10">
                               <option value="Use One Template as Selected" {{{ (isset($template['middle_frame_template']) && $template['middle_frame_template'] == 'Use One Template as Selected') ? "selected=\"selected\"" : "" }}}>Use One Template as Selected</option>
                               <option value="Randomly Use Selected Templates" {{{ (isset($template['middle_frame_template']) && $template['middle_frame_template'] == 'Randomly Use Selected Templates') ? "selected=\"selected\"" : "" }}}>Randomly Use Selected Templates</option>
                               <option value="No Preference(Random)" {{{ (isset($template['middle_frame_template']) && $template['middle_frame_template'] == 'No Preference(Random)') ? "selected=\"selected\"" : "" }}}>No Preference(Random)</option>
                           </select>
                           Select Colours
                           <select name="stateMiddleFrameColour" id="stateMiddleFrameColour" class="form-control mt-3 mb-3 col-10">
                               <option value="Agency Group Templates" {{{ (isset($template['middle_frame_colours']) && $template['middle_frame_colours'] == 'Agency Group Templates') ? "selected=\"selected\"" : "" }}}>Agency Group Templates</option>
                               <option value="Themed Templates" {{{ (isset($template['middle_frame_colours']) && $template['middle_frame_colours'] == 'Themed Templates') ? "selected=\"selected\"" : "" }}}>Themed Templates</option>
                               <option value="Customise Your Template" {{{ (isset($template['middle_frame_colours']) && $template['middle_frame_colours'] == 'Customise Your Template') ? "selected=\"selected\"" : "" }}}>Custom Colours</option>
                           </select>
                           <select name="stateMiddleFrameColourSub" id="stateMiddleFrameColourSub" class="form-control mt-3 mb-3 col-10">
                               @if(!empty($template['middle_frame_colours_sub']))
                                   <option value="{{ $template['middle_frame_colours_sub'] }}"> {{ $template['middle_frame_colours_sub'] }} </option>
                               @endif
                               {{--<option value="Theme 1"><5 Selections HERE + "Random"</option>--}}
                           </select>
                           <div id="stateMiddleFrameColourSelection" style='display:none;'>
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
                           <div class="header-title mb-4"><b>Middle Frame</b><br>You have 4 Middle Frame Template Formats</div>
                           <div class="row">
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-1.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="middle_frame[]" id="customCheck5" value="1"
                                               {{{ (isset($middleframe_list) && (in_array('1', $middleframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck5">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-2.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="middle_frame[]" id="customCheck6" value="2"
                                               {{{ (isset($middleframe_list) && (in_array('2', $middleframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck6">Select</label>
                                   </div>
                               </div>
                           </div>
                           <div class="row mt-3">
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-3.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="middle_frame[]" id="customCheck7" value="3"
                                               {{{ (isset($middleframe_list) && (in_array('3', $middleframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck7">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-4.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="middle_frame[]" id="customCheck8" value="4"
                                               {{{ (isset($middleframe_list) && (in_array('4', $middleframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck8">Select</label>
                                   </div>
                               </div>
                           </div>
                           <input type="hidden" name="middle_frame_order">
                       </div>
                   </div>
                   <hr>
                   <div class="row">
                       <div class="col-sm">
                           Select End Frame
                           <select name="stateEndFrame" class="form-control col-10">
                               <option value="Use One Template as Selected" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == 'Use One Template as Selected') ? "selected=\"selected\"" : "" }}}>Use One Template as Selected</option>
                               <option value="Randomly Use Selected Templates" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == 'Randomly Use Selected Templates') ? "selected=\"selected\"" : "" }}}>Randomly Use Selected Templates</option>
                               <option value="No Preference(Random)" {{{ (isset($template['end_frame_template']) && $template['end_frame_template'] == 'No Preference(Random)') ? "selected=\"selected\"" : "" }}}>No Preference(Random)</option>
                           </select>
                           Select Colours
                           <select name="stateEndFrameColour" id="stateEndFrameColour" class="form-control col-10">
                               <option value="Agency Group Templates" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Agency Group Templates') ? "selected=\"selected\"" : "" }}}>Agency Group Templates</option>
                               <option value="Themed Templates" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Themed Templates') ? "selected=\"selected\"" : "" }}}>Themed Templates</option>
                               <option value="Customise Your Template" {{{ (isset($template['end_frame_colours']) && $template['end_frame_colours'] == 'Customise Your Template') ? "selected=\"selected\"" : "" }}}>Custom Colours</option>
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
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck9" value="1"
                                               {{{ (isset($endframe_list) && (in_array('1', $endframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck9">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-2.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
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
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                   <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                       <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck11" value="3"
                                               {{{ (isset($endframe_list) && (in_array('3', $endframe_list))) ? "checked" : ""}}}>
                                       <label class="custom-control-label font12" for="customCheck11">Select</label>
                                   </div>
                               </div>
                               <div class="col-sm">
                                   <img src="{{ asset('storage/register/main-frame-4.jpg') }}"><br>
                                   <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
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
