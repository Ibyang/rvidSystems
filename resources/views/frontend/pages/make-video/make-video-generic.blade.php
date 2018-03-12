@extends('frontend.layouts.main')

@section('content')
    <div class="container make-video-con">
        <h3 class="border-title">Make My Video</h3>

            <div class="col-8">
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
    </div>

@endsection