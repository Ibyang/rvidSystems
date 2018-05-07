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
            <h3 class="my-account-title">My Preferences</h3>
            <form class="step-three-register register-form">
               
                @include('frontend.register.steps.surge')

                @include('frontend.register.steps.sites')

                @include('frontend.register.steps.social')
                    
                @include('frontend.register.steps.email')
                    
                @include('frontend.register.steps.broadcast')
                
            </form>
        </div>
    </div>
</div>
@endsection
