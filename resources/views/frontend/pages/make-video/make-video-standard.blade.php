@extends('frontend.layouts.main')

@section('content')
    {{--<div class="container make-video-con">--}}
        {{--<h3 class="border-title">Make My Video</h3>--}}

    <div class="container" id="content">
        <h1 class="c-6600cc">Make My Video</h1>

            <div class="col-8">
                 <div class="row make-my-video border-top-0066ff">
                    <div class="col-md-4">
                        <h3 class="color-0066ff">Standard</h3>
                        <div class="d-inline-block text-center">
                            <i class="make-video standard"></i>
                            <p class="text-center"><b>Upload</b></p>
                        </div>
                        <div class="d-inline-block align-top">
                            <p class="color-0066ff">You build <br>your <br>video</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-9"><h3 class="color-0066ff">$375</h3></div>
                            <div class="col-sm-3"><button type="submit" class="btn btn-primary bg-0066ff">Start</button></div>
                        </div>
                        <div class="row make-video-generic text-center">
                            <div class="col">
                                <i class="make-video-step v-picture"></i>
                                <p>STEP 1 <b>Pictures</b></p>
                            </div>
                            <div class="col">
                                <i class="arrow-small"></i>
                            </div>
                            <div class="col">
                                <i class="make-video-step v-script"></i>
                                <p>STEP 2 <b>Script</b></p>
                            </div>
                            <div class="col">
                                <i class="arrow-small"></i>
                            </div>
                            <div class="col">
                                <i class="make-video-step v-template"></i>
                                <p>STEP 3 <b>Template</b></p>
                            </div>
                            <div class="col">
                                <i class="arrow-small"></i>
                            </div>
                            <div class="col">
                                <i class="make-video-step v-voice"></i>
                                <p>STEP 4 <b>Voice</b></p>
                            </div>
                            <div class="col">
                                <i class="arrow-small"></i>
                            </div>
                            <div class="col">
                                <i class="make-video-step v-music"></i>
                                <p>STEP 5 <b>Music</b></p>
                            </div>
                        </div>
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