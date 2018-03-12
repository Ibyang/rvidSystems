@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Why Use REVid?</h1>
        <div class="row">
           <div class="col-12 col-md-auto"><a href=""><img src={{ asset('storage/why-sell-thumb.jpg') }} /></a></div>
           <div class="col col-lg-2">
            <ul class="list">
                <li>Helps Sell</li>   
            </ul>
           </div>
        </div>
        
        @include('frontend.register.register-info')
        
    </div>
    
    @include('frontend.register.register-form')

@endsection
