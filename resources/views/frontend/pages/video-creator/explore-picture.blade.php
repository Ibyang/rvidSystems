@extends('frontend.layouts.main')

@section('content')
    <div class="container ">
        <div class="row my-account-container">
            <div class="col-lg-3">
                @auth
                    @include('frontend.layouts.parts.sidebar')
                @endauth
            </div>
            <div class="col-lg-9 my-account-form explore-pictures">
                    <h3 class="my-account-title">Explore Pictures</h3>
                    <h3>MAIN PICTURE</h3>
                    <div class="row border-bot2 mb-4">
                        <div class="col-sm-3 pl-0">
                            <img src="{{ asset('storage/register/step-main.jpg') }}">
                            <p>Studio Head Shot<br>
                                or Your Main<br>
                                Promotional Image</p>
                        </div>
                        <div class="col-sm-9 pl-0 pr-0">
                            @if($pic->main_image != null || !empty($pic->main_image))
                                <img id="image1" src="{{ $path . $pic->main_image }}" width="545" height="195">
                            @else
                                <div class="img-block" id="image1"></div>
                            @endif
                            {{--<div class="img-block"></div>--}}
                            <form class="register-form" id="postMainImage" action=" {{ route('account-explore-picture-postImages') }} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p class="text-right">
                                    <input type="hidden" name="oldFileMainImage" value="{{ $pic->main_image }}">
                                    <input type='file' id="mainImage" name="mainImage" class="FileUpload" accept=".jpg,.jpeg,.png,.gif"/>
                                    <div class="uploadOverlay">Change</div>
                                </p>
                            </form>
                        </div>
                    </div>
                    <h3>EXTRA (Optional)</h3>
                    <div class="row border-bot2 mb-4">
                        <div class="col-sm-3 pl-0">
                            <img src="{{ asset('storage/register/step-extra.jpg') }}">
                            <p>“Out and About” or<br>
                                Action Picture</p>
                        </div>
                        <div class="col-sm-9 pl-0 pr-0">
                            @if($pic->extra_image1 != null || !empty($pic->extra_image1))
                                <img id="image2" src="{{ $path . $pic->extra_image1 }}" width="545" height="195">
                            @else
                                <div id="image2" class="img-block"></div>
                            @endif
                            {{--<p class="text-right"><a href="">Change</a></p>--}}
                            <form class="register-form" id="postMainImage2" action=" {{ route('account-explore-picture-postImages') }} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p class="text-right">
                                    <input type="hidden" name="oldFileMainImage2" value="{{ $pic->extra_image1 }}">
                                    <input type='file' id="mainImage2" name="mainImage2" class="FileUpload" accept=".jpg,.jpeg,.png,.gif"/>
                                    <div class="uploadOverlay2">Change</div>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="row border-bot2 mb-4">
                        <div class="col-sm-3 pl-0">
                            <h3>EXTRA (Optional)</h3>
                            <img src="{{ asset('storage/register/step-extra-opt.jpg') }}">
                            <p>“Fun + Friendly”<br>
                                or anything goes</p>
                        </div>
                        <div class="col-sm-9 pl-0 pr-0">
                            @if($pic->extra_image2 != null || !empty($pic->extra_image2))
                                <img id="image3" src="{{ $path . $pic->extra_image2 }}" width="545" height="195">
                            @else
                                <div id="image3" class="img-block"></div>
                            @endif
                            <form class="register-form" id="postMainImage3" action=" {{ route('account-explore-picture-postImages') }} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p class="text-right">
                                    <input type="hidden" name="oldFileMainImage3" value="{{ $pic->extra_image2 }}">
                                    <input type='file' id="mainImage3" name="mainImage3" class="FileUpload" accept=".jpg,.jpeg,.png,.gif"/>
                                    <div class="uploadOverlay3">Change</div>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 pl-0">
                            <h3>Your Corporate <br>Logo as Provided</h3>
                            <p>Your logo.<br>
                                (The best is a<br>
                                JPEG at<br>
                                100-200mb)</p>
                        </div>
                        <div class="col-sm-9 pl-0 pr-0">
                            @if($pic->logo != null || !empty($pic->logo))
                                <img id="logo" src="{{ $path . $pic->logo }}" width="272" height="195">
                            @else
                                <div id="logo" class="img-block2"></div>
                            @endif
                            <form class="register-form" id="postLogoImage" action=" {{ route('account-explore-picture-postImages') }} " method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <p class="text-right">
                                    <input type="hidden" name="oldLogoImage" value="{{ $pic->logo }}">
                                    <input type='file' id="logoImage" name="logoImage" class="FileUpload" accept=".jpg,.jpeg,.png,.gif"/>
                                    <div class="uploadOverlayLogo">Change</div>
                                </p>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

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