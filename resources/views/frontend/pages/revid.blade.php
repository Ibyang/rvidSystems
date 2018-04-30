@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <div class="border-bot3">
            <h1 class="c-6600cc">What is REVid?</h1>
            <div class="row">
               <div class="col-sm"><a href=""><img src={{ asset('storage/what-is-revid.jpg') }} /></a></div>
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
        </div>

      @include('frontend.pages.frontpage.info')
        
    </div>
    @include('frontend.pages.frontpage.info-form')

    @include('frontend.pages.frontpage.use-revid')

    @include('frontend.pages.frontpage.footer')

@endsection
