@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="make-video-con">
            <h3 class="border-title">Make My Video</h3>
        </div>
        <div class="row m-0">
                <div class="col-sm-8">
                    
                     @include('frontend.pages.make-video.make-video-info') 
                    
                     <div class="row make-my-video border-top-ff0033">
                        <div class="col-md-auto">
                            <h3 class="color-ff0033">Custom Video</h3>
                            <div class="d-inline-block text-center">
                                <i class="make-video premium"></i>
                            </div>
                            <div class="d-inline-block align-bottom">
                                <p class="color-ff0033">Fully <br>Customised <br>Video</p>
                            </div>
                        </div>
                        <div class="col-sm pl-4">
                            <b>Property Address Details</b>
                            <form>
                                <input type="text" class="form-control my-2" placeholder="Enter Here">
                                <div class="d-flex flex-row-reverse pr-3">
                                    <div class="col-sm-2 p-0"><button type="submit" class="btn btn-primary bg-ff0033 py-1">GO</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-right-0">
                    <div class="border-ff0033 py-3 px-3">
                       <h5 class="color-ff0033 font-weight-bold mb-3">Custom Video</h5>

                       <p class="font-weight-bold text-justify line-height20">When the property is special
                        and you want to spend more
                        time and money to make a
                        ‘one-off’ Premium Video. You
                        get a professionally written
                        script that‘s recorded to
                        match your property.</p>
                        <p class="font-weight-bold text-justify line-height20">The Video is made to your
                        requirements with more time
                        and features - so it’s a very
                        good production available
                        for a reasonable Cost.</p>
                    </div>
                </div>
            </div>
        <div class="pl-3">
            <div class="m-13 my-4"><b>What Happens Next? (When you Press “GO”)</b></div>
                    <ol class="make-v-ol pl-2 m-0 ol-ff0033 text-justify color-000">
                        <li>You go to a confirmation page which asks you to Approve the order;</li>
                        <li>A Customer Service Officer will contact you to facilitate your customised Video. They will together with you and the team to develop your
                        Video (It’s a one-on-one service) by compiling your personalised one-off script, voice-over, any visual effects and other special
                        on-screen content. Your Premium Video production is made to your requirements;</li>
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