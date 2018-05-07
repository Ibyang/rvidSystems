@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form">
            <h3 class="my-account-title">Standard Video System - Step 3</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            
            Main Template (1)
            <div class="row">
                <div class="col p-0"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex flex-row-reverse">
              <div class="p-2"><a href="">Change</a></div>
            </div>
            
            Mid Template (2)
            <div class="row">
                <div class="col p-0"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex flex-row-reverse">
              <div class="p-2"><a href="">Change</a></div>
            </div>
            
            End Template (3)
            <div class="row">
                <div class="col p-0"><img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
            </div>
            <div class="d-flex flex-row-reverse">
              <div class="p-2"><a href="">Change</a></div>
            </div>
            
            <div class="float-r mt-3 mb-5">
                    <button class="btn btn-primary">SAVE : Next Step 4<i class="arrow-right"></i></button>
            </div>
            
        </div>
    </div>
</div>
@endsection
