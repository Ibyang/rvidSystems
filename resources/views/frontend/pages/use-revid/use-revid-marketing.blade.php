@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Where do I use REVid?</h1>
        <div class="row">
           <div class="col-12 col-md-auto"><a href=""><img src={{ asset('storage/where-use-revid.jpg') }} /></a></div>
           <div class="col col-lg-2">
            <ul class="list">
                <li>Marketing</li>   
            </ul>
           </div>
        </div>
    @include('frontend.register.register-info')
        
    </div>
    <div class="bg-eae">
        @include('frontend.register.register-form')
    </div>
@endsection
