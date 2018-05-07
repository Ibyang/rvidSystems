@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9">
           <h3 class="my-account-title">My Templates<br>Current Template</h3>
           Main Template (1)
           <p class="text-right"><a href="" class="c-ff0033">Change</a></p>
           Mid Template (2)
           <p class="text-right"><a href="" class="c-ff0033">Change</a></p>
           End Template (3)
           <p class="text-right"><a href="" class="c-ff0033">Change</a></p>
        </div>
    </div>
</div>
@endsection
