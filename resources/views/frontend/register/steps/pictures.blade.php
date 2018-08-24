<h3><div class="register-icon r-i-pictures mb-2"></div><span class="pl-2">Profile Photo</span></h3>
<div class="row">
  @if(!empty($template['main_image']) || $template['main_image'] != null)
    <div class="col-sm reg-step-link">
      <!-- <img id="image1" src="{{ $path . $template['main_image'] }}" width="460" height="235" style='border: 10px solid grey; margin-bottom: 10px;'> -->
      <img id="image1" src="{{ $path . $template['main_image'] }}">
          <div class="text-right py-2 pr-3">
          <input type='file' id="mainImage" name="mainImage" class="FileUpload"/>
          <div class="uploadOverlayLogo">Add/Change <span>+</span></div>
                {{--<a href="">Add/Change <span>+</span></a>--}}
          </div>
                            
    </div>
  @else
    <div class="col reg-step-link">
      <img id="image1" src="{{ asset('storage/register/step-needed.jpg') }}">
          <div class="text-right py-2 pr-3">
          <input type='file' id="mainImage" name="mainImage" class="FileUpload"/>
          <div class="uploadOverlay4">Add/Change <span>+</span></div>
                {{--<a href="">Add/Change <span>+</span></a>--}}
          </div>
    </div>
  @endif
    <div class="col-sm align-bottom">
          <b>ADD YOUR PROFILE PHOTO</b>
          <p>Please upload your promotional head shot portrait
                photo here. This will be used in the framed versions
                of your videos.</p>
          <p>Recommended format:</p>
          <p>Portrait: 720 px wide x 1080 px height pixels .jpg
                or .png (Minimum 576 px width x 864 px height)</p>
    </div>
</div>
