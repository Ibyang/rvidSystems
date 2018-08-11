@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-2" id="content">
        <div class="border-bot pt-1">
            <h1 class="c-333">What is LookFirst</h1>
            <div class="row">
                <div class="col-sm-7">
                  <p class="text-justify line-height18 l-k-text col-12 pl-0">
                    <b>LookFirst</b> is the online property listing site – for videos. It’s simple – a single page platform that lets you to Search, See and Hear without clicking back and forth.
                    <br><br>
                    The location based search give you a one-screen map – and by rolling
                    your mouse over the listing a Video window pops-up to showcase the
                    property and provide details. Then, just roll on to the next house to
                    continue your search. Easy.
                    <br><br>
                    It’s simple to use and no user registration is needed. LookFirst delivers
                    satisfying property information in your brand – allowing the potential
                    buyers to engage immediately with the property and the agent.</p>
                </div>
                <div class="col-sm">
                    <a href={{ route('look-first-video') }}><img class="img-fluid" src={{ asset('storage/look-first.png') }} /></a>
                </div>
            </div>
        </div>
        <h1 class="c0066ff mt-3">It “Supercharges” the value of the Signboard</h1>
        <div class="d-flex flex-column border-bot">
            <div><img class="img-fluid" src={{ asset('storage/look-first-map.png') }} /></div>
            <div class="pt-4 text-center"><a href="" class="btn btn-primary btn-inside font-weight-bold col-sm-3">SEE INSIDE NOW</a></div>
        </div>
        @include('frontend.register.register-join-info')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>
    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')
    </div>
@endsection
