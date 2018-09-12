@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <h1 class="color-000">What is DriveBy</h1> 
        <b>Coming soon in 2019.</b> 
        <div class="row mt-3 mb-4"> 
            <div class="col-sm">
                <p class="text-justify line-height20"><b>DriveBy</b> uses smartphone geolocation to turn your For-Sale signboard into a “See Inside Now” experience by identifying location and playing the property video on demand.
                    <br><br>
                    Simply display the <b>DriveBy</b> feature on your signboards and any buyer pulling up at your listing can use their smartphone to geolocate and “See Inside Now”. <b>DriveBy</b> streams the property video in mobile format to the user’s smartphone and prompts them to contact you.
                    <br><br>
                    It’s simple to use as no “App” is needed and delivers satisfying property information in your brand – allowing the potential buyers to engage immediately with the property and the agent.</p>
            </div>
            <div class="col-md-auto">
                <a href={{ route('driveby-video') }}><img class="img-fluid" src="{{ asset('storage/app/public/what-is-driveby3.jpg') }}"></a>
            </div>
        </div>
        <div class="border-top-bot-999 py-4 look-first mb-r">
            <h1 class="c0066ff">It “Supercharges” the value of the Signboard</h1>
            <div class="row text-center">
                <div class="col-sm-3"><img src="{{ asset('storage/app/public/account/what-is-drive-by-1.png') }}" class="img-fluid"></div>
                <div class="col-sm-3"><img src="{{ asset('storage/app/public/account/what-is-drive-by-2.png') }}" class="img-fluid"></div>
                <div class="col-sm-3"><img src="{{ asset('storage/app/public/account/what-is-drive-by-3.png') }}" class="img-fluid"></div>
                <div class="col-sm-3"><img src="{{ asset('storage/app/public/account/what-is-drive-by-4.png') }}" class="img-fluid"></div>
            </div>
            <div class="text-center mt-4"><button class="btn btn-primary col-sm-3 font-weight-bold">SEE INSIDE NOW</button></div> 
        </div>

        @include('frontend.register.register-join-info')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>
        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')
    </div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/js/pricing-register.js') }}" type="text/javascript"></script>

@stop
