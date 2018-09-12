@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="make-video-con">
            <h3 class="border-title">Make My Video</h3>
        </div>
            <div class="row m-0">
                <div class="col-sm-8">
                    
                     @include('frontend.pages.make-video.make-video-info') 
                    
                     <div class="row make-my-video border-top-6600cc">
                        <div class="col-sm-4">
                            <div class="d-flex flex-row-reverse">
                                <div>
                                    <h3 class="color-6600cc">Automatic Video</h3>
                                    <div class="d-flex justify-content-between">
                                        <div><i class="make-video generic"></i></div>
                                        <div class="align-self-end"><p class="color-6600cc mb-0">We Build <br>your <br>Video</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm pr-1">
                            <div class="d-flex justify-content-between col-12 m-r-l">
                                <div class="align-self-center"><b>URL</b></div>
                                <div><button type="submit" class="btn btn-primary py-1 b-radius-7 m-v-a-btn bg-009900">GO</button></div>
                            </div>
                            <form class="col-12 m-r-l">
                                <input type="text" class="form-control my-2" placeholder="Enter Here">
                                <div class="d-flex justify-content-between">
                                   <div class="line-height20"><b>Direct Upload</b><br>
                                    Click here to upload images<br>
                                    and property details</div>
                                    <div class="align-self-end"><button type="submit" class="btn btn-primary px-3 py-1 b-radius-7 bg-009900">UPLOAD</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-right-0">
                    <div class="border-6600cc pricing-box py-3 px-5">
                       <div class="pricing-ribbon2"><span>MOST POPULAR</span></div>

                       <h5 class="color-6600cc font-weight-bold my-3">Automatic Video</h5>

                       <p class="font-weight-bold text-justify line-height20">We do it all, and make your
                        Video using the images and
                        information in your online
                        property listing.</p>
                        <p class="font-weight-bold text-justify line-height20">It’s a really good Video but it’s
                        not a 'Hollywood’ production.
                        With Voice, Vision and Music
                        it covers the general property
                        features and benefits. It’s
                        Fast, Low Cost and Easy.</p>
                    </div>
                </div>
            </div>
        <div class="pl-3">
                    <div class="m-13 my-4"><b>What Happens Next? (When you Press “GO”)</b></div>
                    <ol class="make-v-ol pl-2 m-0 ol-6600cc text-justify color-000">
                        <li>You go to a confirmation page which asks you to Approve the order;</li>
                        <li>The REVid team takes over and the URL location property images and details are “Compiled” into your Video storyboard and your Script is built;</li>
                        <li>Your Video is edited - with the images rendered to the voice over and music.</li>
                        <li>Your Video is delivered.</li>
                    </ol>
                    <div class="m-13 my-4"><b>What Happens Next? (When you Press “UPLOAD”)</b></div>
                    <ol class="make-v-ol pl-2 m-0 ol-6600cc text-justify color-000">
                        <li>You go to a <b>Direct Upload</b> page which asks you to enter the property information, a description and from 10 to 25 images;</li>
                        <li>You go to a confirmation page which asks you to <b>Approve</b> the order;</li>
                        <li>The REVid team takes over and the property images and details are ‘Compiled’ into your video storyboard and your script is built.</li>
                        <li>Your Video is edited with images rendered to the voice over and music.</li>
                        <li>Your Video is delivered.</li>
                    </ol>
        </div>

        <!-- <div class="d-flex justify-content-between step-1-title py-2 mt-2 mb-4">
            <div><h4 class="color-6600cc font-weight-bold">Login or <br>Let’s Get Started! Step 1</h4></div>
            <div class="align-self-center"><h5 class="font-weight-bold">4 Easy Steps (4 to GO!)</h5></div>
        </div> -->

        @include('frontend.register.register-join-info') 
        
        @include('frontend.register.register-info') 
        
        @include('frontend.register.register-form') 
        
        </div>

        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')

@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/js/pricing-register.js') }}" type="text/javascript"></script>

@stop