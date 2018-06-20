                <h3><div class="register-icon reg-logo mb-2"></div><span class="pl-3">Logo</span></h3>
                <div class="row">
                    <div class="col reg-step-link">
                        @if(!empty($template['logo']))
                            <img id="logo" src="{{ $template['path'] . $template['logo'] }}" width="460" height="236" style='border: 10px solid grey; margin-bottom: 10px;'>
                        @else
                            <img id="logo" src="{{ asset('storage/register/step-blank.jpg') }}">
                        @endif
                        <div class="text-right pt-2 pb-2">
                            <input type='file' id="logoImage" name="logoImage" class="FileUpload"/>
                            <div style="clear: both"></div>
                            {{--<div class="uploadOverlayLogo">Add/Change <span>+</span></div>--}}
                            <div>Add/Change <span>+</span></div>
                                {{--<a href="">Add/Change <span>+</span></a>--}}
                        </div>
                    </div>
                    
                    <div class="col header-title pt-3 pl-5">
                        <b>Logo</b><br><br>
                        Add in your logo.<br>
                        Minimum: 1000px wide - recommended width 2000px wide - resolution<br>
                        Max file size: 2Mb
                    </div>
                </div>
               