@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="make-video-con">
            <h3 class="border-title">Make My Video</h3>
        </div>
            <div class="row m-0">
                <div class="col-sm-8">
                    
                     @include('frontend.pages.make-video.make-video-info') 
                    
                     <div class="row make-my-video border-top-0066ff">
                        <div class="col-md-auto">
                            <h3 class="color-0066ff">Manual Video</h3>
                            <div class="row">
                                <div class="col-sm text-center"><i class="f-standard-video"></i></div>
                                <div class="col-sm pl-0 color-0066ff line-height20 align-self-end">You <br>Help Us <br>Do It!</div>
                            </div>
                        </div>
                        <div class="col-sm h-145">
                            <div class="d-flex justify-content-between">
                                <div class="font-weight-bold">5-Step Process</div>
                                <div class="m-v-m-btn"><button type="submit" class="btn btn-primary bg-0066ff py-1 px-3">Start</button></div>
                            </div>
                            <div class="row f-s-video text-center mt-2">
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-pictures"></i>
                                        <p><b>STEP 1</b> Pictures</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-script"></i>
                                        <p><b>STEP 2</b> Script</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-template"></i>
                                        <p><b>STEP 3</b> Template</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-voice"></i>
                                        <p><b>STEP 4</b> Voice</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-music"></i>
                                        <p><b>STEP 5</b> Music</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-right-0">
                    <div class="border-0066ff py-3 px-5">
                       <h5 class="color-0066ff font-weight-bold my-3">Manual Video</h5>

                       <p class="font-weight-bold text-justify line-height20">If you are happy to spend the
                        time, you select and match
                        images to voice over tracks
                        and make the Video just like
                        you want it.</p>
                        <p class="font-weight-bold text-justify line-height20">You get to make the decisions
                        and we do the Video
                        production. It’s a little better
                        product than generic, and yet
                        still Fast, Low Cost and Easy.</p>
                    </div>
                </div>
            </div>
         <div class="pl-3">
                    <div class="m-13 my-4"><b>What Happens Next? (When you Press “START”)</b></div>
                    <ol class="make-v-ol pl-2 m-0 ol-0066ff text-justify color-000">
                        <li>You go to a confirmation page which asks you to Approve the order;</li>
                        <li>You get directed to the Video Builder System and start to compile your Video by directly uploading the pictures and selecting the script and voice and music features before passing over to us;</li>
                        <li>Your Video is edited - with the images rendered to the voice over and music.</li>
                        <li>Your Video is delivered.</li>
                    </ol>
        </div>
        <div class="d-flex justify-content-between step-1-title py-2 mt-2 mb-4">
            <div><h4 class="color-6600cc font-weight-bold">Login or <br>Let’s Get Started! Step 1</h4></div>
            <div class="align-self-center"><h5 class="font-weight-bold">4 Easy Steps (4 to GO!)</h5></div>
        </div>
        
        @include('frontend.register.register-info') 
        
        @include('frontend.register.register-form') 

    </div>
        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')
@endsection