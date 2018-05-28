@extends('frontend.layouts.main')

@section('content')
    <div class="container" id="content">
        <h1 class="color-424244">What is DriveBy</h1>
        <div class="row mb-4">
            <div class="col-sm">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                    volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-sm">
                <a href={{ route('driveby') }}><img src="{{ asset('/storage/what-is-driveby3.jpg') }}"></a>
            </div>
        </div>
        <div class="border-top-bot-999 py-4 look-first">
            <h1 class="c0066ff">It “Supercharges” the value of the Signboard</h1>
            <div class="row">
                <div class="col-sm-3"><img src="{{ asset('storage/account/what-is-drive-by-1.png') }}" class="img-fluid"></div>
                <div class="col-sm-3"><img src="{{ asset('storage/account/what-is-drive-by-2.png') }}" class="img-fluid"></div>
                <div class="col-sm-3"><img src="{{ asset('storage/account/what-is-drive-by-3.png') }}" class="img-fluid"></div>
                <div class="col-sm-3"><img src="{{ asset('storage/account/what-is-drive-by-4.png') }}" class="img-fluid"></div>
            </div>
            <div class="text-center my-4"><button class="btn btn-primary col-3 font-weight-bold">SEE INSIDE NOW</button></div>
        </div>

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>

    @include('frontend.pages.frontpage.info-form')

    @include('frontend.pages.frontpage.use-revid')

    @include('frontend.pages.frontpage.footer')

@endsection
