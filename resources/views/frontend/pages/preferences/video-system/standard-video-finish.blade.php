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
            <h3 class="my-account-title">Standard Video System - Step 5</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            
            <h3>Finish</h3>
            
            <div class="row">
                <div class="col-sm pl-0">Pictures # XX</div>
                <div class="col-sm">Duration XX</div>
            </div>
            <div class="row">
                <div class="col-sm pl-0">Voice XXXXXXXXXX</div>
                <div class="col-sm">Music XXXXXXXXXXX</div>
            </div>
            <div class="row">
                <div class="col-sm pl-0">Template XXXXXXX</div>
                <div class="col-sm"></div>
            </div>
            <div class="row">
                <div class="col-sm my-account-subcription">
                    <div class="custom-control custom-checkbox basic">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label ml-5" for="customCheck2">Ready to<br>Produce, proceed</label>
                    </div>
                </div>
                <div class="col-sm"><button class="btn btn-primary">GO</button></div>
            </div>
            <div class="video-system-con p-3">
                <div class="row video-system-5 m-0">
                    <div class="col-sm py-3 pr-2">
                        <div class="bg-fff h-100">
                            <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto"><span class="c-6600cc"><b>+</b></span><br>Picture</div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm py-3 pl-2">
                        <div class="bg-fff h-100">
                            <div class="d-flex flex-row-reverse">
                              <div class="p-1 c-6600cc">01m:14s</div>
                              <div class="p-1 c-ff0033">Words: 17</div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-r mt-3 mb-5">
                <button class="btn btn-primary">SAVE :UPDATE<i class=""></i></button>
            </div>
        </div>
    </div>
</div>
@endsection
