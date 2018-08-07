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
                <div class="row make-my-video border-top-6600cc m-0">
                    <div class="col-md-4">
                        <h3 class="color-6600cc">Automatic</h3>
                        <div class="d-inline-block text-center">
                            <i class="make-video generic"></i>
                            <p class="text-center m-0"><b>URL Details</b></p>
                        </div>
                        <div class="d-inline-block align-top">
                            <p class="color-6600cc">We build <br>Template <br>video</p>
                        </div>
                    </div>
                    <div class="col-md-8 pr-0">
                        <div class="row">
                            <div class="col-sm-9"><h3 class="color-6600cc">$75</h3></div>
                            <!-- <div class="col-sm-3"><button type="submit" id="btnGeneric" class="btn btn-primary bg-6600cc" onclick="event.preventDefault(); document.getElementById('frmGeneric').submit();">GO</button></div> -->
                            <div class="col-sm-3"><a href=" {{ route('getDirectUpload') }} "><button class="btn btn-primary bg-6600cc">GO</button></a></div>
                        </div>
                        <h5 class="mt-2">URL</h5>
                        <!-- <form id="frmGeneric" action="{{ route('getGenericVideo') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="url" class="form-control" name="url_generic" id="url_generic" required>
                            <input type="hidden" name="user_id" id="user_id" value="{{  $userid }}">
                        </form> -->
                    </div>
                </div>
                <div class="row make-my-video border-top-0066ff mx-0 my-4">
                    <div class="col-md-4">
                        <h3 class="color-0066ff">Manual</h3>
                        <div class="d-inline-block text-center">
                            <i class="make-video standard"></i>
                            <p class="text-center m-0"><b>Upload</b></p>
                        </div>
                        <div class="d-inline-block align-top pl-4">
                            <p class="color-0066ff">You build <br>your <br>video</p>
                        </div>
                    </div>
                    <div class="col-md-8 pr-0">
                        <div class="row">
                            <div class="col-sm-9"><h3 class="color-0066ff">$125</h3></div>
                            <div class="col-sm-3"><a href=" {{ route('getStandardVideo') }} "><button class="btn btn-primary bg-0066ff">Start</button></a></div>
                        </div>
                        <div class="row make-video-generic text-center">
                            <div class="col">
                                <i class="make-video-step v-picture"></i>
                                <p>STEP 1 <b>Pictures</b></p>
                            </div>
                            <div class="col">
                                <i class="arrow-small"></i>
                            </div>
                            <div class="col">
                                <i class="make-video-step v-script"></i>
                                <p>STEP 2 <b>Script</b></p>
                            </div>
                            <div class="col">
                                <i class="arrow-small"></i>
                            </div>
                            <div class="col">
                                <i class="make-video-step v-template"></i>
                                <p>STEP 3 <b>Template</b></p>
                            </div>
                            <div class="col">
                                <i class="arrow-small"></i>
                            </div>
                            <div class="col">
                                <i class="make-video-step v-voice"></i>
                                <p>STEP 4 <b>Voice</b></p>
                            </div>
                            <div class="col">
                                <i class="arrow-small"></i>
                            </div>
                            <div class="col">
                                <i class="make-video-step v-music"></i>
                                <p>STEP 5 <b>Music</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row make-my-video border-top-ff0033 m-0">
                    <div class="col-md-4">
                        <h3 class="color-ff0033">Custom</h3>
                        <div class="d-inline-block text-center">
                            <i class="make-video premium"></i>
                            <p class="text-center m-0"><b>Custom Made</b></p>
                        </div>
                        <div class="d-inline-block align-top">
                            <p class="color-ff0033">We build <br>your <br>video</p>
                        </div>
                    </div>
                    <div class="col-md-8 pr-0">
                        <div class="row">
                            <div class="col-sm-9"><h3 class="color-ff0033">$375</h3></div>
                            <div class="col-sm-3"><button type="submit" class="btn btn-primary bg-ff0033" onclick="event.preventDefault(); document.getElementById('frmPremium').submit();">GO</button></div>
                        </div>
                        <h5 class="mt-2 p-m-30">URL OR ADDRESS</h5>
                        <form id="frmPremium" action="{{ route('getPremiumVideo') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="text" class="form-control" name="url_premium" id="url_premium" required>
                        </form>
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

            $('#url_generic').keypress(function(e){
                if(e.which == 13){
                    alert('You pressed enter after entering URL Address in Generic Option!');
                }
            });

            $('#url_premium').keypress(function(e){
                if(e.which == 13){
                    alert('You pressed enter after entering URL Address in Premium Option!');
                }
            });

        });


    </script>

@stop

