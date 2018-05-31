                <h3><div class="register-icon reg-logo mb-2"></div><span class="pl-3">Logo</span></h3>
                <div class="row">
                    @if(!empty($template) || $template != null)
                        <div class="col reg-step-link">
                            <img id="logo" src="{{ $path . $template['logo'] }}" width="460" height="236" style='border: 10px solid grey; margin-bottom: 10px;'>
                            <div class="text-right pt-2 pb-2">
                                <input type='file' id="logoImage" name="logoImage" class="FileUpload"/>
                                <div class="uploadOverlayLogo">Add/Change <span>+</span></div>
                                {{--<a href="">Add/Change <span>+</span></a>--}}
                            </div>
                        </div>
                    @else
                        <div class="col reg-step-link">
                            <img id="logo" src="{{ asset('storage/register/step-blank.jpg') }}">
                            <div class="text-right pt-2 pb-2">
                                <input type='file' id="logoImage" name="logoImage" class="FileUpload"/>
                                <div class="uploadOverlayLogo">Add/Change <span>+</span></div>
                                {{--<a href="">Add/Change <span>+</span></a>--}}
                            </div>
                        </div>
                    @endif
                    <div class="col header-title pt-3 pl-5">
                        <b>Logo</b><br><br>
                        Add in your logo.<br>
                        The best is JPEG at 100-200mb
                    </div>
                </div>
               