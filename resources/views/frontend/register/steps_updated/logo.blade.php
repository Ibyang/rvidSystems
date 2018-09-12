<h3><div class="register-icon r-i-logo mb-2"></div><span class="pl-3">Logo</span></h3>
<div class="row">
    @if(!empty($template['logo']) || $template['logo'] != null)
        <div class="col-sm reg-step-link">
            <!-- <img id="logo" src="{{ $path . $template['logo'] }}" width="460" height="236" style='border: 10px solid grey; margin-bottom: 10px;'> -->
            <img id="logo" src="{{ $path . $template['logo'] }}">
            <div class="text-right py-2 pr-3">
                <input type='file' id="logoImage" name="logoImage" class="FileUpload"/>
                <div class="uploadOverlayLogo">Add/Change <span>+</span></div>
                {{--<a href="">Add/Change <span>+</span></a>--}}
            </div>
        </div>
    @else
        <div class="col-sm reg-step-link">
            <img id="logo" src="{{ asset('storage/app/public/register/step-blank.jpg') }}">
            <div class="text-right py-2 pr-3">
                <div class="uploadOverlayLogo">
                    <input type='file' id="logoImage" name="logoImage" class="FileUpload"/>
                    Add/Change <span>+</span></div>
                {{--<a href="">Add/Change <span>+</span></a>--}}
            </div>
        </div>
    @endif
    <div class="col-sm-6">
            <b>ADD YOUR AGENCY LOGO</b>
            <p>Recommended - 2000 px width <br>Minimum 1000 px)</p>
        
            <p>Maximum 2mb upload file size</p>
    </div>
</div>                 
               