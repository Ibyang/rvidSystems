@extends('frontend.layouts.main')

@section('content')
    {{--<div class="container make-video-con">--}}
        {{--<h3 class="border-title">Make My Video</h3>--}}

    <div class="container" id="content">
        <h1 class="c-6600cc">Make My Video</h1>

            <div class="col-8">
                 <div class="row make-my-video border-top-ff0033">
                    <div class="col-md-4">
                        <h3 class="color-ff0033">Premium</h3>
                        <div class="d-inline-block text-center">
                            <i class="make-video premium"></i>
                            <p class="text-center"><b>Custom Made</b></p>
                        </div>
                        <div class="d-inline-block align-top">
                            <p class="color-ff0033">We build <br>your <br>video</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-9"><h3 class="color-ff0033">$175</h3></div>
                            <div class="col-sm-3"><button type="submit" class="btn btn-primary bg-ff0033">GO</button></div>
                        </div>
                        <h4>URL OR ADDRESS</h4>
                        <form>
                            <input type="text" class="form-control">
                        </form>
                    </div>
                </div>
            </div>

        <hr>
        @include('frontend.register.register-info')

    </div>

    <div class="bg-eae">
        @include('frontend.register.register-form')
    </div>

@endsection