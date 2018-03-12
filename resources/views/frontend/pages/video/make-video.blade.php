@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form make-video-con">
            <h3 class="border-title">Make My Video</h3>
            <div class="col-12">
                 <div class="row make-my-video border-top-6600cc">
                    <div class="col-md-4">
                        <h3 class="color-6600cc">Generic</h3>
                        <div class="d-inline-block text-center">
                            <i class="make-video generic"></i>
                            <p class="text-center"><b>URL Details</b></p>
                        </div>
                        <div class="d-inline-block align-top">
                            <p class="color-6600cc">We build <br>Template <br>video</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-9"><h3 class="color-6600cc">$75</h3></div>
                            <div class="col-sm-3"><button type="submit" class="btn btn-primary bg-6600cc ">GO</button></div>
                        </div>
                        <h4>URL</h4>
                        <form>
                            <input type="text" class="form-control">
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-12">
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
                            <div class="col-sm-9"><h3 class="color-0066ff">$125</h3></div>
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
            
            <div class="col-12">
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
                            <div class="col-sm-9"><h3 class="color-ff0033">$375</h3></div>
                            <div class="col-sm-3"><button type="submit" class="btn btn-primary bg-ff0033">GO</button></div>
                        </div>
                        <h4>URL OR ADDRESS</h4>
                        <form>
                            <input type="text" class="form-control">
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection