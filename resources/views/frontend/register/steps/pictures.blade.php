<style>
    img {
        width: 100%;
        height: auto;
    }
</style>
                <h3><div class="register-icon reg-picture mb-2"></div><span class="pl-2">Pictures</span></h3>
                <div class="row">
                    <div class="col reg-step-link">
                        @if(!empty($template['main_image']))
                            {{--<img id="image1" src="{{ $template['path'] . $template['main_image'] }}" width="460" height="235" style='border: 10px solid grey; margin-bottom: 10px;'>--}}
                            <img id="image1" src="{{ $template['path'] . $template['main_image'] }}">
                        @else
                            <img id="image1" src="{{ asset('storage/register/step-needed.jpg') }}">
                            {{--<img id="image1" src="{{ asset('storage/register/step-main.jpg') }}">--}}
                        @endif
                        <div class="text-right pt-2 pb-2">

                            <form action="{{ route('uploadMainImage') }}" class="dropzone" id="myDropzone" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="fallback">
                                    <input id="mainImage" name="mainImage" type="file" class="FileUpload"/>
                                </div>
                            </form>

                            {{--<input type='file' id="mainImage" name="mainImage" class="FileUpload"/>--}}
                            {{--<div style="clear: both"></div>--}}
                            {{--<div>Add/Change <span>+</span></div>--}}
                                {{--<a href="">Add/Change <span>+</span></a>--}}
                        </div>
                        {{--@if(!empty($template['extra_image1']))--}}
                            {{--<img id="image2" src="{{ $template['path'] . $template['extra_image1'] }}" width="460" height="235" style='border: 10px solid grey; margin-bottom: 10px;'>--}}
                            {{--<div class="text-right pt-2 pb-2">--}}
                                {{--<input type='file' id="mainImage2" name="mainImage2" class="FileUpload"/>--}}
                                {{--<div class="uploadOverlay5a">Add/Change <span>+</span></div>--}}
                                    {{--<a href="">Add/Change <span>+</span></a>--}}
                            {{--</div>--}}
                        {{--@else--}}
                            {{--<img id="image2" src="{{ asset('storage/register/step-optional.jpg') }}">--}}
                            {{--<div class="text-right pt-2 pb-2">--}}
                                {{--<input type='file' id="mainImage2" name="mainImage2" class="FileUpload"/>--}}
                                {{--<div class="uploadOverlay5">Add/Change <span>+</span></div>--}}
                                    {{--<a href="">Add/Change <span>+</span></a>--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--@if(!empty($template['extra_image2']))--}}
                            {{--<img id="image3" src="{{ $template['path'] . $template['extra_image2'] }}" width="460" height="235" style='border: 10px solid grey; margin-bottom: 10px;'>--}}
                            {{--<div class="text-right pt-2 pb-2">--}}
                                {{--<input type='file' id="mainImage3" name="mainImage3" class="FileUpload"/>--}}
                                {{--<div class="uploadOverlay6a">Add/Change <span>+</span></div>--}}
                                    {{--<a href="">Add/Change <span>+</span></a>--}}
                            {{--</div>--}}
                        {{--@else--}}
                            {{--<img id="image3" src="{{ asset('storage/register/step-optional.jpg') }}">--}}
                            {{--<div class="text-right pt-2 pb-2">--}}
                                {{--<input type='file' id="mainImage3" name="mainImage3" class="FileUpload"/>--}}
                                {{--<div class="uploadOverlay6">Add/Change <span>+</span></div>--}}
                                    {{--<a href="">Add/Change <span>+</span></a>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    </div>
                    <div class="col pl-5 align-bottom mt-5">
                        <p class="font-weight-bold header-title">
                            We need your pictures to set-up your <br>video templates.
                            <br><br>
                            Examples:</p>
                        <div class="border-bot3 pt-5">
                            <div class="row">
                                <div class="col-sm-4"><img src="{{ asset('storage/register/step-main.jpg') }}"></div>
                                <div class="col-sm-8 align-self-center">
                                    <p class="pl-4 mb-0">
                                        <b>Main Promotional Template Profile Image</b><br>
                                        Please upload your professional head shot portrait image here<br>
                                        Recommended Format: <br>
                                        Portrait: 720px wide x 1080px height pixels .jpg or .png<br>
                                        (Minimum 576px width x 864px height)
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{--<div class="border-bot3">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-4"><img src="{{ asset('storage/register/step-extra.jpg') }}"></div>--}}
                                    {{--<div class="col-sm-8 align-self-center">--}}
                                        {{--<p class="pl-4 mb-0">--}}
                                            {{--<b>EXTRA (Optional)</b><br>--}}
                                            {{--In Action or “Out and About”--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="border-bot3">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-sm-4"><img src="{{ asset('storage/register/step-extra-opt.jpg') }}"></div>--}}
                                    {{--<div class="col-sm-8">--}}
                                        {{--<p class="pl-4 mb-0">--}}
                                            {{--<b>EXTRA (Optional)</b><br>--}}
                                            {{--“Fun + Friendly” or<br>--}}
                                            {{--Team, Office or Location?--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>