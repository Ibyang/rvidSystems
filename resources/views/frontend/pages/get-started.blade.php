@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Get Started Today!</h1>
        <div class="row">
           <div class="col-sm"><a href=""><img src={{ asset('storage/get-started.jpg') }} /></a></div>
           <div class="col-sm">
            <ul class="list">
                <li>It’s "Video" for social media marketing,
                    online marketing, on-site presentations
                    and email to prospective clients.</li>  
                <li>Low cost video options</li>
            </ul>
                 $75 Generic<br>
                 $125 Standard<br>
                 $145 Premium
           </div>
           <div class="col-sm">
            <ul class="list">
                <li>Easy + Quick with No Fuss</li>
                <li>Valuable; you get video’s (3 versions)Plus</li>
            </ul>
               
             with your monthly membership
           </div>
        </div>
        
        @include('frontend.register.register-info')
        
    </div>
    
    @include('frontend.register.register-form')

@endsection
