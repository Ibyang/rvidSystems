@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="make-video-con">
            <h3 class="border-title">Make My Video</h3>
        </div>
        <div class="row m-0">
            <div class="col-sm-8">
                <div class="row make-my-video border-top-6600cc">
                    <div class="col-md-auto">
                        <h3 class="color-6600cc">Automatic Video</h3>
                        <div class="d-inline-block text-center">
                            <i class="make-video generic"></i>
                        </div>
                        <div class="d-inline-block align-bottom">
                            <p class="color-6600cc">We Do it <br>for you!</p>
                        </div>
                    </div>
                    <div class="col-sm pr-1">
                        <b>URL Details</b>
                        <form>
                            <input type="text" class="form-control my-2" placeholder="Enter Here">
                            <div class="row mt-1">
                                <div class="col-sm align-self-center pr-0">The URL details for the <br>Online Property Listing</div>
                                <div class="col-md-auto"><button type="submit" class="btn btn-primary bg-6600cc py-1 px-4">GO</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="m-13 my-4"><b>What Happens Next? (When you Press “GO”)</b></div>
                <ol class="make-v-ol pl-2 m-0 ol-6600cc text-justify">
                    <li>You go to a confirmation page which asks you to Approve the order;</li>
                    <li>The URL Location property images and details are “Compiled” into your Video Storyboard and your Script;</li>
                    <li>Your Video is editing with the images rendered to the voice over and music.</li>
                    <li>Your Video is delivered.</li>
                </ol>
            </div>
            <div class="col-sm-4 col-right-0">
                <div class="border-6600cc pricing-box py-3 px-5">
                    <div class="pricing-ribbon2"><span>MOST POPULAR</span></div>

                    <h5 class="color-6600cc font-weight-bold mb-3">Automatic Video</h5>

                    <p class="font-weight-bold text-justify">We do it all, and make your
                        Video using the images and
                        information in your online
                        property listing.</p>
                    <p class="font-weight-bold text-justify">It’s a really good Video but it’s
                        not a 'Hollywood’ production.
                        With Voice, Vision and Music
                        it covers the general property
                        features and benefits. It’s
                        Fast, Low Cost and Easy.</p>
                </div>
            </div>
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