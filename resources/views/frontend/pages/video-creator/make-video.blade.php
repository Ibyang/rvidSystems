@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 make-video-con">
            <h3 class="border-title">Make My Video</h3>
            <div class="px-3 my-5">
                <div class="row make-my-video border-top-6600cc">
                        <div class="col-sm-4">
                            <div class="d-flex flex-row-reverse">
                                <div>
                                    <h3 class="color-6600cc">Automatic Video</h3>
                                    <div class="d-flex justify-content-between">
                                        <div><i class="make-video generic"></i></div>
                                        <div class="align-self-end"><p class="color-6600cc mb-0">We Build <br>your <br>Video</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm pr-1">
                            <div class="d-flex justify-content-between col-12">
                                <div class="align-self-center"><b>URL</b></div>
                                <div>
                                    <button type="button" id="btnGeneric" class="btn btn-primary py-1 b-radius-7 m-v-a-btn bg-009900" onclick="event.preventDefault(); document.getElementById('frmGeneric').submit();">GO</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <form id="frmGeneric" action="{{ route('getGenericVideo') }}" method="POST">
                                {{ csrf_field() }}
                                    <input type="text" class="form-control my-2" placeholder="Enter Here" name="url_generic" id="url_generic" required>
                                    <input type="hidden" name="user_id" id="user_id" value="{{  $userid }}">
                                </form>
                                <div class="d-flex justify-content-between">
                                   <div class="line-height20"><b>Direct Upload</b><br>
                                    Click here to upload images<br>
                                    and property details</div>
                                    <div class="align-self-end">
                                        <a href=" {{ route('getDirectUpload') }} "><button type="button" id="btnUpload" class="btn btn-primary px-3 py-1 b-radius-7 bg-009900">UPLOAD</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row make-my-video border-top-0066ff my-4">
                        <div class="col-md-auto">
                            <h3 class="color-0066ff">Manual Video</h3>
                            <div class="row">
                                <div class="col-sm text-center"><i class="f-standard-video"></i></div>
                                <div class="col-sm pl-0 color-0066ff line-height20 align-self-end">You <br>Help Us <br>Do It!</div>
                            </div>
                        </div>
                        <div class="col-sm h-145">
                            <div class="d-flex justify-content-between">
                                <div class="font-weight-bold">5-Step Process</div>
                                <div class="m-v-m-btn"><a href=" {{ route('getStandardVideo') }} "><button class="btn btn-primary bg-0066ff py-1 px-3">Start</button></a></div>
                            </div>
                            <div class="row f-s-video text-center mt-2">
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-pictures"></i>
                                        <p><b>STEP 1</b> Pictures</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-script"></i>
                                        <p><b>STEP 2</b> Script</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-template"></i>
                                        <p><b>STEP 3</b> Template</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-voice"></i>
                                        <p><b>STEP 4</b> Voice</p>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="bg-d8d8d8 pt-1">
                                        <i class="step-video2 s-v-music"></i>
                                        <p><b>STEP 5</b> Music</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row make-my-video border-top-ff0033">
                        <div class="col-md-auto">
                            <h3 class="color-ff0033">Custom Video</h3>
                            <div class="d-inline-block text-center">
                                <i class="make-video premium"></i>
                            </div>
                            <div class="d-inline-block align-bottom">
                                <p class="color-ff0033">Fully <br>Customised <br>Video</p>
                            </div>
                        </div>
                        <div class="col-sm pl-4">
                            <b>Property Address Details</b>
                            <form id="frmPremium" action="{{ route('getPremiumVideo') }}" method="POST">
                            {{ csrf_field() }}
                                <input type="text" class="form-control my-2" name="url_premium" id="url_premium" placeholder="Enter Here" required>
                                <div class="d-flex flex-row-reverse">
                                    <div class="col-sm-2 p-0"><button type="submit" class="btn btn-primary bg-ff0033 py-1">GO</button></div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">
        $(document).ready(function() {


            $('#url_generic').keyup(function(){

                 if ($(this).val().length > 0) {
                    $("#btnUpload").attr("disabled", true);
                 } else if($(this).val().length == 0) {  
                    $("#btnUpload").removeAttr("disabled");
                 }

            }); 

            // $('#url_generic').keypress(function(e){
            //     if(e.which == 13){
            //         alert('You pressed enter after entering URL Address in Generic Option!');
            //     }
            // });

            // $('#url_premium').keypress(function(e){
            //     if(e.which == 13){
            //         alert('You pressed enter after entering URL Address in Premium Option!');
            //     }
            // });

        });


    </script>

@stop

