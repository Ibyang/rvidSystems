                <h3><div class="register-icon reg-picture mb-2"></div><span class="pl-2">Pictures</span></h3>
                <div class="row">
                    <div class="col reg-step-link">
                        <img id="image1" src="{{ asset('storage/register/step-needed.jpg') }}">
                        <div class="text-right pt-2 pb-2">
                            <input type='file' id="mainImage" name="mainImage" />
                            {{--<a href="">Add/Change <span>+</span></a>--}}
                        </div>
                        <img id="image2" src="{{ asset('storage/register/step-optional.jpg') }}">
                        <div class="text-right pt-2 pb-2">
                            <input type='file' id="mainImage2" name="mainImage2" />
                            {{--<a href="">Add/Change <span>+</span></a>--}}
                        </div>
                        <img id="image3" src="{{ asset('storage/register/step-optional.jpg') }}">
                        <div class="text-right pt-2 pb-2">
                            <input type='file' id="mainImage3" name="mainImage3" />
                            {{--<a href="">Add/Change <span>+</span></a>--}}
                        </div>
                    </div>
                    <div class="col pl-5 align-bottom mt-5">
                        <p class="font-weight-bold header-title">
                            We need your pictures to set-up your <br>video templates.
                            <br><br>
                            You can load up to 3 pictures to use in <br>different sections or frame of your videos.
                            <br><br>
                            Examples:</p>
                        <div class="border-bot3 pt-5">
                            <div class="row">
                                <div class="col-sm-4"><img src="{{ asset('storage/register/step-main.jpg') }}"></div>
                                <div class="col-sm-8 align-self-center">
                                    <p class="pl-4 mb-0">
                                        <b>MAIN (Needed)</b><br>
                                        Studio Head Shot or Your<br>
                                        Main Promotional Image
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="border-bot3">
                                <div class="row">
                                    <div class="col-sm-4"><img src="{{ asset('storage/register/step-extra.jpg') }}"></div>
                                    <div class="col-sm-8 align-self-center">
                                        <p class="pl-4 mb-0">
                                            <b>EXTRA (Optional)</b><br>
                                            In Action or “Out and About”
                                        </p>
                                    </div>
                                </div>
                        </div>
                        <div class="border-bot3">
                                <div class="row">
                                    <div class="col-sm-4"><img src="{{ asset('storage/register/step-extra-opt.jpg') }}"></div>
                                    <div class="col-sm-8">
                                        <p class="pl-4 mb-0">
                                            <b>EXTRA (Optional)</b><br>
                                            “Fun + Friendly” or<br>
                                            Team, Office or Location?
                                        </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>