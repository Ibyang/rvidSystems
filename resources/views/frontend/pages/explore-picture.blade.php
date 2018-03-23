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
           <h3>Explore Pictures</h3>
           <div class="row">
                <div class="col-sm-4">
                    <h3>MAIN PICTURE</h3>   
                    Studio Head Shot<br>
                    or Your Main<br>
                    Promotional Image
                </div> 
                <div class="col-sm-8">
                <p class="text-right"><a href="">Change</a></p>
                </div>
           </div>
           <div class="row">
                <div class="col-sm-4">
                    <h3>EXTRA (Optional)</h3>   
                    “Out and About” or<br>
                    Action Picture
                </div> 
                <div class="col-sm-8">
                <p class="text-right"><a href="">Change</a></p>
                </div>
           </div>
           <div class="row">
                <div class="col-sm-4">
                    <h3>EXTRA (Optional)</h3>   
                    “Fun + Friendly”<br>
                    or anything goes
                </div> 
                <div class="col-sm-8">
                <p class="text-right"><a href="">Change</a></p>
                </div>
           </div>
           <div class="row">
                <div class="col-sm-4">
                    <h3>Your Corporate <br>Logo as Provided</h3>   
                    Your logo.<br>
                    (The best is a<br>
                    JPEG at<br>
                    100-200mb)<br>
                </div> 
                <div class="col-sm-8">
                <p class="text-right"><a href="">Change</a></p>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection
