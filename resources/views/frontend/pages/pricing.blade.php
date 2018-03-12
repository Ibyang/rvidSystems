@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h3>You Get an Easy Low Cost Video Service Plus DriveBy and LookFirst for FREE</h3>
        <div class="row">
            <div class="col"><img src=""></div>
            <div class="col"><img src=""></div>
            <div class="col"><img src=""></div>
        </div>
        <h3>Pricing Membership</h3>
        <div class="border-666666">
            <div class="row">
                <div class="col-sm">
                    <div class="d-inline-block">Casual</div>
                    <div class="d-inline-block">$11/month</div>
                </div>
                <div class="col-sm text-right my-account-subcription">
                        <div class="custom-control custom-checkbox casual">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Join</label>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"><b>Storage Plan</b></div>
                <div class="col-sm-2">
                    3 Videos Active<br>
                    3 Videos Archive
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"><b>Storage Plan</b></div>
                <div class="col-sm-2">
                    Generic<br>
                    Standard<br>
                    Premium
                </div>
                <div class="col-sm-2">
                    <b>$105</b><br>
                    <b>$150</b><br>
                    <b>$375</b><br>
                </div>
                <div class="col-sm-2">
                    <b>Includes</b>
                </div>
            </div>
            
            
        </div>
        <h3>Service Extra’s (Only when selected)</h3>
        <h3>Upload Services</h3>
    </div>
    
    @include('frontend.register.register-form')

@endsection
