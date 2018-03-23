@extends('frontend.layouts.main')

@section('content')
    <div class="container" id="content">
       
        <div class="row">
          <div class="col-8">
              <h1 class="c-6600cc">What is REVid? Video</h1>
              <img src="">
          </div>
          <div class="col-4">
              <h1 class="c-6600cc">How to join?</h1>
              (Get started today)
              <img src={{ asset('storage/how-to-join.jpg') }} />
              <h1 class="c-6600cc">How the system works?</h1>
              (It’s easy)
              <img src={{ asset('storage/how-system-works.jpg') }} />
          </div>
      
        </div>
        
    @include('frontend.register.register-info')
        
    @include('frontend.register.register-form')

    </div>

    @include('frontend.pages.frontpage.info-form')

    @include('frontend.pages.frontpage.use-revid')

    @include('frontend.pages.frontpage.footer')
@endsection
