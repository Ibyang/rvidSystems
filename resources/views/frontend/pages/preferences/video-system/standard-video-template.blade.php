@extends('frontend.layouts.main')

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
                    <div class="col p-0"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
                </div>
                <div class="d-flex flex-row-reverse">
                  <div class="p-2"><a data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample">Change</a></div>
                </div>
            </div>

            <!-- for the section of collapsible for Main Template -->
            <form id="frmMainFrame" method="POST" action="{{ route('editMainFrame') }}">
                    {{ csrf_field() }}
                    <div class="collapse" id="Expanded1" style="background-color: #F4F4F4">
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
                                    <img src="{{ asset('storage/register/main-frame-1.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck1" value="main-frame-1"
                                               @if(in_array('main-frame-1', $mainframe_list))
                                               checked
                                                @endif>
                                        <label class="custom-control-label font12" for="customCheck1">Select</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <img src="{{ asset('storage/register/main-frame-2.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck2" value="main-frame-2"
                                               @if(in_array('main-frame-2', $mainframe_list))
                                                    checked
                                                @endif>
                                        <label class="custom-control-label font12" for="customCheck2">Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <img src="{{ asset('storage/register/main-frame-3.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck3" value="main-frame-3"
                                               @if(in_array('main-frame-3', $mainframe_list))
                                                    checked
                                                @endif>
                                        <label class="custom-control-label font12" for="customCheck3">Select</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <img src="{{ asset('storage/register/main-frame-4.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="main_frame[]" id="customCheck4" value="main-frame-4"
                                               @if(in_array('main-frame-4', $mainframe_list))
                                                    checked
                                                @endif>
                                        <label class="custom-control-label font12" for="customCheck4">Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row-mt-3">
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
                <div class="col p-0"><img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex flex-row-reverse">
              <div class="p-2"><a data-toggle="collapse" href="#Expanded3" role="button" aria-expanded="false" aria-controls="collapseExample">Change</a></div>
            </div>


            <!-- for the section of collapsible of End Template -->
            <form id="frmEndFrame" method="POST" action=" {{ route('editEndFrame') }}">
                    {{ csrf_field() }}

                    <div class="collapse" id="Expanded3" style="background-color: #F4F4F4">
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
                                    <img src="{{ asset('storage/register/main-frame-1.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck9" value="end-frame-1"
                                               @if(in_array('end-frame-1', $endframe_list))
                                                    checked
                                               @endif>
                                        <label class="custom-control-label font12" for="customCheck9">Select</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <img src="{{ asset('storage/register/main-frame-2.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck10" value="end-frame-2"
                                               @if(in_array('end-frame-2', $endframe_list))
                                                    checked
                                               @endif>
                                        <label class="custom-control-label font12" for="customCheck10">Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <img src="{{ asset('storage/register/main-frame-3.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck11" value="end-frame-3"
                                               @if(in_array('end-frame-3', $endframe_list))
                                                    checked
                                               @endif>
                                        <label class="custom-control-label font12" for="customCheck11">Select</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <img src="{{ asset('storage/register/main-frame-4.jpg') }}" class="img-fluid"><br>
                                    <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                    <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                        <input type="checkbox" class="custom-control-input" name="end_frame[]" id="customCheck12" value="end-frame-4"
                                               @if(in_array('end-frame-4', $endframe_list))
                                                    checked
                                               @endif>
                                        <label class="custom-control-label font12" for="customCheck12">Select</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row-mt-3">
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

        });
    </script>

@stop    
