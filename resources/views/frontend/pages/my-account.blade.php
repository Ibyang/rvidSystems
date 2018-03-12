@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form">
            @include ('frontend.pages.my-account.details')
            
            @include ('frontend.pages.my-account.subscription')
            
            @include ('frontend.pages.my-account.billing')
            
            @include ('frontend.pages.my-account.invoice')
            
            @include ('frontend.pages.my-account.payment')
        </div>
    </div>
</div>
@endsection
