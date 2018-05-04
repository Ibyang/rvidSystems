@extends('frontend.layouts.main')

@section('content')
    <div class="container ">
        <div class="row my-account-container">
            <div class="col-lg-3">
                @auth
                    @include('frontend.layouts.parts.sidebar')
                @endauth
            </div>
            <div class="col-lg-9 my-account-form">
                <br><h3>My Templates</h3>
                <h3 class="my-account-title" style="color: red;">Current Templates</h3>
                <h3>Main Template (1)</h3>
                <div class="row border-bot2 mb-4">
                    <div class="col-sm-12 pl-0">
                        <div><img src="{{ asset('storage/register/example-frame.jpg') }}"></div>
                        <p class="text-right"><a href="">Change</a></p>
                    </div>
                </div>
                <h3>Mid Template (2)</h3>
                <div class="row border-bot2 mb-4">
                    <div class="col-sm-12 pl-0">
                        <div><img src="{{ asset('storage/register/example-frame.jpg') }}"></div>
                        {{--<p class="text-right"><input type='file' id="mainImage" name="mainImage" style="text-align: right!important;"/></p>--}}
                        <p class="text-right"><a href="">Change</a></p>
                    </div>
                </div>
                <h3>End Template (3)</h3>
                <div class="row border-bot2 mb-4">
                    <div class="col-sm-12 pl-0">
                        <div><img src="{{ asset('storage/register/end-frame.jpg') }}"></div>
                        <p class="text-right"><a href="">Change</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection