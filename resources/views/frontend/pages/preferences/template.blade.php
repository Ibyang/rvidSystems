extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8">
           <h3 class="my-account-title pb-3 font-weight-bold mb-2">My Templates<br><div class="mt-3 color-ff0033">Current Template</div></h3>
           <div class="my-3">Main Template (1)</div>
           <div class="border-bot pt-0 pb-2">
                           <div class="row">
                                <div class="col"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
                           </div>
                           <div class="d-flex flex-row-reverse">
                              <div class="p-2"><a data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample" class="color-ff0033">Change</a></div>
                           </div>
                           <div class="collapse my-template-checkbox pb-3" id="Expanded1">
                               <div class="rules-arrow7"></div>
                               <div class="ExpandForm p-3">
                                   <div class="row register-form">
                                        <div class="col-sm">
                                            Select Main Frame
                                            <select name="" class="form-control">
                                                <option>Use Only One as Selected</option>
                                            </select>
                                        </div>
                                        <div class="col-sm">
                                            Select Colours
                                            <select name="" class="form-control">
                                                <option>Agency Standards</option>
                                            </select>
                                            <select name="" class="form-control mt-2">
                                                <option>Professionals</option>
                                            </select>
                                        </div>
                                   </div>
                                   <h3 class="font20 my-3"><b>Video Frame (Main Frame)</b><div>You have 4 Main Frame Template Formats</div></h3>
                                   <div class="row">
                                        <div class="col-sm">
                                              <img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid"><br>
                                              <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                              <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck1">
                                                    <label class="custom-control-label font12" for="customCheck1">Select</label>
                                              </div>  
                                        </div>
                                        <div class="col-sm">
                                              <img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid"><br>
                                              <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                              <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck2">
                                                    <label class="custom-control-label font12" for="customCheck2">Select</label>
                                              </div>  
                                        </div>
                                   </div>
                                   <div class="row mt-3">
                                        <div class="col-sm">
                                              <img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid"><br>
                                              <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                              <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck3">
                                                    <label class="custom-control-label font12" for="customCheck3">Select</label>
                                              </div>  
                                        </div>
                                        <div class="col-sm">
                                              <img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid"><br>
                                              <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                              <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck4">
                                                    <label class="custom-control-label font12" for="customCheck4">Select</label>
                                              </div>  
                                        </div>
                                   </div>
                               </div>
                            </div>
           </div>
           <div class="border-bot pt-0 pb-2">
                               <div class="my-3">End Template (2)</div>
                               <div class="row">
                                  <div class="col"><img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
                               </div>
                               <div class="d-flex flex-row-reverse">
                                  <div class="p-2"><a data-toggle="collapse" href="#Expanded3" role="button" aria-expanded="false" aria-controls="collapseExample" class="color-ff0033">Change</a></div>
                               </div>
                               <div class="collapse my-template-checkbox pb-3" id="Expanded3">
                                   <div class="rules-arrow7"></div>
                                   <div class="ExpandForm p-3">
                                       <div class="row register-form">
                                            <div class="col-sm">
                                                Select Main Frame
                                                <select name="" class="form-control">
                                                    <option>Use Only One as Selected</option>
                                                </select>
                                            </div>
                                            <div class="col-sm">
                                                Select Colours
                                                <select name="" class="form-control">
                                                    <option>Agency Standards</option>
                                                </select>
                                                <select name="" class="form-control mt-2">
                                                    <option>Professionals</option>
                                                </select>
                                            </div>
                                       </div>
                                      <h3 class="font20 my-3"><b>Video Frame (Main Frame)</b><div>You have 4 Main Frame Template Formats</div></h3>
                                       <div class="row">
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/video-frame-1.jpg') }}" class="img-fluid"><br>
                                                  <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck9">
                                                        <label class="custom-control-label font12" for="customCheck9">Select</label>
                                                  </div>  
                                            </div>
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/video-frame-2.jpg') }}" class="img-fluid"><br>
                                                  <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck10">
                                                        <label class="custom-control-label font12" for="customCheck10">Select</label>
                                                  </div>  
                                            </div>
                                       </div>
                                       <div class="row mt-3">
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/video-frame-3.jpg') }}" class="img-fluid"><br>
                                                  <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck11">
                                                        <label class="custom-control-label font12" for="customCheck11">Select</label>
                                                  </div>  
                                            </div>
                                            <div class="col-sm">
                                                  <img src="{{ asset('storage/account/video-frame-4.jpg') }}" class="img-fluid"><br>
                                                  <a class="d-inline-block font12 color-424244">< Click to Enlarge ></a>
                                                  <div class="custom-control custom-checkbox premium d-inline-block float-r">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck12">
                                                        <label class="custom-control-label font12" for="customCheck12">Select</label>
                                                  </div>  
                                            </div>
                                       </div>
                                   </div>
                                </div>
           </div>
        </div>
    </div>
</div>
@endsection

