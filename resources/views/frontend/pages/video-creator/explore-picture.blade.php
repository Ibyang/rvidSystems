@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form explore-pictures">
            
           <h3 class="my-account-title">Explore Pictures</h3>
           <div class="border-bot4">Profile  Photo</div>
           <div class="row">
                <div class="col-sm reg-step-link">
                          <!-- <img class="img-fluid" src="{{ asset('storage/register/step-needed.jpg') }}"> -->
                           @if($pic['main_image'] != null || !empty($pic['main_image']))
                                <img id="image1" src="{{ $path . $pic['main_image'] }}">
                            @else
                                <div class="img-block" id="image1"></div>
                            @endif
                          
                            <form class="register-form" id="postMainImage" action=" {{ route('account-explore-picture-postImages') }} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="text-right py-2">
                                    <input type="hidden" name="oldFileMainImage" value="{{ $pic['main_image'] }}">
                                    <input type='file' id="mainImage" name="mainImage" class="FileUpload" accept=".jpg,.jpeg,.png,.gif"/>
                                    <div class="uploadOverlay">Add/Change</div>
                                    <!-- <a href="" class="font14">Add/Change <span>+</span></a> -->
                                </div>
                            </form>
                </div>
                <div class="col-sm text-justify">
                           <b>ADD YOUR PROFILE PHOTO</b>
                           <p class="mt-0">Please upload your promotional head shot portrait
                            photo here. This will be used in the framed versions
                            of your videos.</p>
                           <p class="mb-0">Recommended format:</p>
                           <p class="mt-0">Portrait: 720 px wide x 1080 px height pixels .jpg
                            or .png (Minimum 576 px width x 864 px height)</p>
                </div>
            </div>
            <div class="border-bot4">Logo</div>
            <div class="row">
                <div class="col-sm reg-step-link">

                        @if($pic['extra_image1'] != null || !empty($pic['extra_image1']))
                            <!-- <img id="image2" src="{{ $path . $pic['extra_image1'] }}" width="545" height="195"> -->
                            <img class="img-fluid" id="image2" src="{{ $path . $pic['extra_image1'] }}" >
                        @else
                            <div id="image2" class="img-block"></div>
                        @endif
                        {{--<p class="text-right"><a href="">Change</a></p>--}}
                        <form class="register-form" id="postMainImage2" action=" {{ route('account-explore-picture-postImages') }} " method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="text-right py-2">
                                    <input type="hidden" name="oldFileMainImage2" value="{{ $pic['extra_image1'] }}">
                                    <input type='file' id="mainImage2" name="mainImage2" class="FileUpload" accept=".jpg,.jpeg,.png,.gif"/>
                                    <div class="uploadOverlay2">Add/Change <span>+</span></div>
                            </div>
                        </form>

                        <!-- <img class="img-fluid" src="{{ asset('storage/register/step-blank.jpg') }}">
                        <div class="text-right py-2">
                            <a href="" class="font14">Add/Change <span>+</span></a>
                        </div> -->
                </div>
                <div class="col-sm-6">
                        <b>ADD YOUR AGENCY LOGO</b>
                        <p class="mt-0">Recommended - 2000 px width <br>Minimum 1000 px)</p>

                        <p>Maximum 2mb upload file size</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">

        //for Main Image 1
        function readURLMainImage1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image1').attr('src', e.target.result);
                    $('#image1').attr('width', '545px');
                    $('#image1').attr('height', '195px');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        //for Main Image 2
        function readURLMainImage2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image2').attr('src', e.target.result);
                    $('#image2').attr('width', '545px');
                    $('#image2').attr('height', '195px');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        //for Main Image 3
        function readURLMainImage3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image3').attr('src', e.target.result);
                    $('#image3').attr('width', '545px');
                    $('#image3').attr('height', '195px');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        //for uploading logo Image
        function readURLLogoImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logo').attr('src', e.target.result);
                    $('#logo').attr('width', '272px');
                    $('#logo').attr('height', '195px');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(function() {

            //for Main Image 1
            $("#mainImage").change(function(){
                readURLMainImage1(this);
                $("#postMainImage").submit();
            });

            //for Main Image 2
            $("#mainImage2").change(function(){
                readURLMainImage2(this);
                $("#postMainImage2").submit();
            });

            //for Main Image 3
            $("#mainImage3").change(function(){
                readURLMainImage3(this);
                $("#postMainImage3").submit();
            });

            //for logo Image
            $("#logoImage").change(function(){
                readURLLogoImage(this);
                $("#postLogoImage").submit();
            });

        });
    </script>

@stop