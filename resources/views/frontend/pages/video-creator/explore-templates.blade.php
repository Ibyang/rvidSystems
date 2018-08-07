@extends('frontend.layouts.main')

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
                                    <img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid">
                                </div>
                           </div>
                           <div class="d-flex flex-row-reverse">
                              <div class="p-2"><a data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample" class="color-ff0033">Change</a></div>
                           </div>

                           <form id="frmMainFrame" method="POST" action="{{ route('editMainFrame') }}">
                            {{ csrf_field() }}
                               <div class="collapse my-template-checkbox pb-3" id="Expanded1">
                                   <div class="rules-arrow7"></div>
                                   <div class="ExpandForm p-3">
                                       <div class="row register-form">
                                            <div class="col-sm">
                                                Select Main Frame
                                                <select name="stateMainFrame" id="stateMainFrame" class="form-control">
                                                    <option value="Use One Template as Selected" {{ $template['main_frame_template'] === 'Use One Template as Selected' ? 'selected' : '' }}>Use One Template as Selected</option>
                                                    <option value="Randomly Use Selected Templates" {{ $template['main_frame_template'] === 'Randomly Use Selected Templates' ? 'selected' : '' }}>Randomly Use Selected Templates</option>
                                                    <option value="No Preference(Random)" {{ $template['main_frame_template'] === 'No Preference(Random)' ? 'selected' : '' }}>No Preference(Random)</option>
                                                </select>
                                            </div>
                                            <div class="col-sm">
                                                Select Colours
                                                <select name="stateMainFrameColour" id="stateMainFrameColour" class="form-control mt-3 mb-3 col-10">
                                                    <option value="Agency Group Templates" {{ $template['main_frame_colours'] === 'Agency Group Templates' ? 'selected' : '' }}>Agency Group Templates</option>
                                                    <option value="Themed Templates" {{ $template['main_frame_colours'] === 'Themed Templates' ? 'selected' : '' }}>Themed Templates</option>
                                                    <option value="Customise Your Template" {{ $template['main_frame_colours'] === 'Customise Your Template' ? 'selected' : '' }}>Customise Your Template</option>
                                                </select>
                                                <select name="stateMainFrameColourSub" id="stateMainFrameColourSub" class="form-control mt-2">
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
                                       </div>
                                       <h3 class="font20 my-3"><b>Video Frame (Main Frame)</b><div>You have 4 Main Frame Template Formats</div></h3>
                                       <div class="row">
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid"><br>
                                                  <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck1">
                                                        <label class="custom-control-label font12" for="customCheck1">Select</label> -->
                                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck1" value="main-frame-1.jpg"
                                                           @if(in_array('1', $mainframe_list))
                                                                checked
                                                           @endif>
                                                        <label class="custom-control-label font12" for="customCheck1">Select</label>
                                                  </div>  
                                            </div>
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid"><br>
                                                  <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck2">
                                                        <label class="custom-control-label font12" for="customCheck2">Select</label> -->
                                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck2" value="main-frame-2.jpg"
                                                           @if(in_array('2', $mainframe_list))
                                                                checked
                                                           @endif>
                                                        <label class="custom-control-label font12" for="customCheck2">Select</label>
                                                  </div>  
                                            </div>
                                       </div>
                                       <div class="row mt-3">
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid"><br>
                                                  <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck3">
                                                        <label class="custom-control-label font12" for="customCheck3">Select</label> -->
                                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck3" value="main-frame-3.jpg"
                                                           @if(in_array('3', $mainframe_list))
                                                                checked
                                                           @endif>
                                                        <label class="custom-control-label font12" for="customCheck3">Select</label>    
                                                  </div>  
                                            </div>
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid"><br>
                                                  <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck4">
                                                        <label class="custom-control-label font12" for="customCheck4">Select</label> -->
                                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck4" value="main-frame-4.jpg"
                                                           @if(in_array('4', $mainframe_list))
                                                                checked
                                                           @endif>
                                                        <label class="custom-control-label font12" for="customCheck4">Select</label>
                                                  </div>  
                                            </div>
                                       </div>
                                   </div>
                                </div>
                            </form>    
           </div>
           
           <div class="border-bot pt-0 pb-2">
                               <div class="my-3">End Template (2)</div>
                               <div class="row">
                                  <div class="col"><img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
                               </div>
                               <div class="d-flex flex-row-reverse">
                                  <div class="p-2"><a data-toggle="collapse" href="#Expanded3" role="button" aria-expanded="false" aria-controls="collapseExample" class="color-ff0033">Change</a></div>
                               </div>

                               <form id="frmEndFrame" method="POST" action=" {{ route('editEndFrame') }}">
                                {{ csrf_field() }}
                                   <div class="collapse my-template-checkbox pb-3" id="Expanded3">
                                       <div class="rules-arrow7"></div>
                                       <div class="ExpandForm p-3">
                                           <div class="row register-form">
                                                <div class="col-sm">
                                                    Select End Frame
                                                    <!-- <select name="" class="form-control">
                                                        <option>Use Only One as Selected</option>
                                                    </select> -->
                                                    <select name="stateEndFrame" id="stateEndFrame" class="form-control col-10">
                                                        <option value="Use One Template as Selected" {{ $template['end_frame_template'] === 'Use One Template as Selected' ? 'selected' : '' }}>Use One Template as Selected</option>
                                                        <option value="Randomly Use Selected Templates" {{ $template['end_frame_template'] === 'Randomly Use Selected Templates' ? 'selected' : '' }}>Randomly Use Selected Templates</option>
                                                        <option value="No Preference(Random)" {{ $template['end_frame_template'] === 'No Preference(Random)' ? 'selected' : '' }}>No Preference(Random)</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm">
                                                    Select Colours
                                                    <!-- <select name="" class="form-control">
                                                        <option>Agency Standards</option>
                                                    </select>
                                                    <select name="" class="form-control mt-2">
                                                        <option>Professionals</option>
                                                    </select> -->

                                                    <select name="stateEndFrameColour" id="stateEndFrameColour" class="form-control">
                                                        <option value="Agency Group Templates" {{ $template['end_frame_colours'] === 'Agency Group Templates' ? 'selected' : '' }}>Agency Group Templates</option>
                                                        <option value="Themed Templates" {{ $template['end_frame_colours'] === 'Themed Templates' ? 'selected' : '' }}>Themed Templates</option>
                                                        <option value="Customise Your Template" {{ $template['end_frame_colours'] === 'Customise Your Template' ? 'selected' : '' }}>Customise Your Template</option>
                                                    </select>
                                                    <select name="stateEndFrameColourSub" id="stateEndFrameColourSub" class="form-control mt-2">
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
                                           </div>
                                          <h3 class="font20 my-3"><b>Video Frame (Main Frame)</b><div>You have 4 End Frame Template Formats</div></h3>
                                           <div class="row">
                                                <div class="col-sm">
                                                      <img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid"><br>
                                                      <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck9">
                                                            <label class="custom-control-label font12" for="customCheck9">Select</label> -->
                                                            <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck9" value="main-frame-1.jpg"
                                                               @if(in_array('1', $endframe_list))
                                                                    checked
                                                               @endif>
                                                            <label class="custom-control-label font12" for="customCheck9">Select</label>
                                                      </div>  
                                                </div>
                                                <div class="col-sm">
                                                      <img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid"><br>
                                                      <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck10">
                                                            <label class="custom-control-label font12" for="customCheck10">Select</label> -->
                                                            <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck10" value="main-frame-2.jpg"
                                                               @if(in_array('2', $endframe_list))
                                                                    checked
                                                               @endif>
                                                            <label class="custom-control-label font12" for="customCheck10">Select</label>
                                                      </div>  
                                                </div>
                                           </div>
                                           <div class="row mt-3">
                                                <div class="col-sm">
                                                      <img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid"><br>
                                                      <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck11">
                                                            <label class="custom-control-label font12" for="customCheck11">Select</label> -->
                                                            <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck11" value="main-frame-3.jpg"
                                                               @if(in_array('3', $endframe_list))
                                                                    checked
                                                               @endif>
                                                            <label class="custom-control-label font12" for="customCheck11">Select</label>
                                                      </div>  
                                                </div>
                                                <div class="col-sm">
                                                      <img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid"><br>
                                                      <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                      <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                            <!-- <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck12">
                                                            <label class="custom-control-label font12" for="customCheck12">Select</label> -->
                                                            <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck12" value="main-frame-4.jpg"
                                                               @if(in_array('4', $endframe_list))
                                                                    checked
                                                               @endif>
                                                            <label class="custom-control-label font12" for="customCheck12">Select</label>
                                                      </div>  
                                                </div>
                                           </div>
                                       </div>
                                    </div>
                                </form>    
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

        });
    </script>
    

@stop
