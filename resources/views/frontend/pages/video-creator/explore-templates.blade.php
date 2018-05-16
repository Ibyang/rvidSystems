@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="row my-account-container">
            <div class="col-lg-3">
                @auth
                    @include('frontend.layouts.parts.sidebar')
                @endauth
            </div>
            <div class="col-lg-9">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <h3 class="my-account-title">My Templates<br>Current Template</h3>
                Main Template (1)
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid">
{{--                        <img src="{{ $path2 . $template['main_frame_template_format'] }}" class="img-fluid">--}}
                    </div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample">Change</a></div>
                </div>
                <div class="collapse" id="Expanded1">
                    <div class="rules-arrow"></div>
                    <div class="ExpandForm p-3">
                        <div class="row register-form">
                            <div class="col-sm">
                                Select Main Frame
                                <select name="stateMainFrame" id="stateMainFrame" class="form-control mt-3 mb-3 col-10">
                                    <option value="Use One Template as Selected">Use One Template as Selected</option>
                                    <option value="Randomly Use Selected Templates">Randomly Use Selected Templates</option>
                                    <option value="No Preference(Random)">No Preference(Random)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                Select Colours
                                <select name="stateMainFrameColour" id="stateMainFrameColour" class="form-control mt-3 mb-3 col-10">
                                    <option value="Agency Group Templates">Agency Group Templates</option>
                                    <option value="Themed Templates">Themed Templates</option>
                                    <option value="Customise Your Template">Customise Your Template</option>
                                </select>
                                <select name="stateMainFrameColourSub" id="stateMainFrameColourSub" class="form-control mt-3 mb-3 col-10">
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
                        <h3>Video Frame (Main Frame)</h3>
                        You have 4 Main Frame Template Formats
                        <div class="row">
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-1.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck1">
                                    <label class="custom-control-label font12" for="customCheck1">Select</label>
                                </div>
                            </div>
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-2.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck2">
                                    <label class="custom-control-label font12" for="customCheck2">Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-3.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck3">
                                    <label class="custom-control-label font12" for="customCheck3">Select</label>
                                </div>
                            </div>
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-4.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck4">
                                    <label class="custom-control-label font12" for="customCheck4">Select</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                Mid Template (2)
                <div class="row">
                    <div class="col"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a data-toggle="collapse" href="#Expanded2" role="button" aria-expanded="false" aria-controls="collapseExample">Change</a></div>
                </div>
                <div class="collapse" id="Expanded2">
                    <div class="rules-arrow"></div>
                    <div class="ExpandForm p-3">
                        <div class="row register-form">
                            <div class="col-sm">
                                Select Middle Frame
                                <select name="stateMiddleFrame" class="form-control mt-3 mb-3 col-10">
                                    <option value="Use One Template as Selected">Use One Template as Selected</option>
                                    <option value="Randomly Use Selected Templates">Randomly Use Selected Templates</option>
                                    <option value="No Preference(Random)">No Preference(Random)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                Select Colours
                                <select name="stateMiddleFrameColour" id="stateMiddleFrameColour" class="form-control mt-3 mb-3 col-10">
                                    <option value="Agency Group Templates">Agency Group Templates</option>
                                    <option value="Themed Templates">Themed Templates</option>
                                    <option value="Customise Your Template">Custom Colours</option>
                                </select>
                                <select name="stateMiddleFrameColourSub" id="stateMiddleFrameColourSub" class="form-control mt-3 mb-3 col-10">
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
                        </div>
                        <h3>Video Frame (Middle Frame)</h3>
                        You have 4 Middle Frame Template Formats
                        <div class="row">
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-1.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck5">
                                    <label class="custom-control-label font12" for="customCheck5">Select</label>
                                </div>
                            </div>
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-2.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck6">
                                    <label class="custom-control-label font12" for="customCheck6">Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-3.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck7">
                                    <label class="custom-control-label font12" for="customCheck7">Select</label>
                                </div>
                            </div>
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-4.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck8">
                                    <label class="custom-control-label font12" for="customCheck8">Select</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                End Template (3)
                <div class="row">
                    <div class="col"><img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a data-toggle="collapse" href="#Expanded3" role="button" aria-expanded="false" aria-controls="collapseExample">Change</a></div>
                </div>
                <div class="collapse" id="Expanded3">
                    <div class="rules-arrow"></div>
                    <div class="ExpandForm p-3">
                        <div class="row register-form">
                            <div class="col-sm">
                                Select End Frame
                                <select name="stateEndFrame" class="form-control col-10">
                                    <option value="Use One Template as Selected">Use One Template as Selected</option>
                                    <option value="Randomly Use Selected Templates">Randomly Use Selected Templates</option>
                                    <option value="No Preference(Random)">No Preference(Random)</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                Select Colours
                                <select name="stateEndFrameColour" id="stateEndFrameColour" class="form-control col-10">
                                    <option value="Agency Group Templates">Agency Group Templates</option>
                                    <option value="Themed Templates">Themed Templates</option>
                                    <option value="Customise Your Template">Custom Colours</option>
                                </select>
                                <select name="stateEndFrameColourSub" id="stateEndFrameColourSub" class="form-control mt-3 mb-3 col-10">
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
                        <h3>Video Frame (Main Frame)</h3>
                        You have 4 Main Frame Template Formats
                        <div class="row">
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-1.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck9">
                                    <label class="custom-control-label font12" for="customCheck9">Select</label>
                                </div>
                            </div>
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-2.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck10">
                                    <label class="custom-control-label font12" for="customCheck10">Select</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-3.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck11">
                                    <label class="custom-control-label font12" for="customCheck11">Select</label>
                                </div>
                            </div>
                            <div class="col-sm">
{{--                                <img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid"><br>--}}
                                <img src="{{ asset('storage/register/main-frame-4.jpg') }}" class="img-fluid"><br>
                                <a href="" class="d-inline-block font12">< Click to Enlarge ></a>
                                <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck12">
                                    <label class="custom-control-label font12" for="customCheck12">Select</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
