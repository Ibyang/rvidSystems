@extends('frontend.layouts.main')

<div id="css_container"></div>

@section('content')
    <div class="container pb-0" id="content">
        <h1 class="c-6600cc border-bot4">Let’s Get Started! Step 2</h1>
        
        @include('frontend.register.register-info')
        
        <div class="d-flex justify-content-between join-step-next p-1">
                <button class="btn btn-primary bg-333 btn-no-border px-4" onclick="goBack()"><i class="arrow-left"></i> BACK</button>
        </div>
    </div>
    <div class="bg-eae step-two-register">
         <div class="container color-000" id="content">
                <form class="register-form" action="{{ route('processStep2') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}    

                    @include('frontend.register.steps.pictures')

                    @include('frontend.register.steps.logo')

                    @include('frontend.register.steps.video-frame')

                    @include('frontend.register.steps.content-video-frame')

                    @include('frontend.register.steps.voice')
                    
                    @include('frontend.register.steps.music')

                </form>
        </div>
    </div>
   
</div>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    
    <script type="text/javascript">

        function goBack(){
            window.history.back();
        }

        //for Main Image 1
        function readURLMainImage1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image1').attr('src', e.target.result);

                    var img = document.getElementById('image1');
                    var width = img.clientWidth;
                    var height = img.clientHeight;

                    if(width > height)
                        $('#image1').attr('width', "70%");
                    else
                        $('#image1').attr('height', "70%");

                    // $('#image1').attr('style', "max-width=460px");
                    // $('#image1').attr('style', "max-height=234px");


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

                    var img = document.getElementById('logo');
                    var width = img.clientWidth;
                    var height = img.clientHeight;

                    if(width > height)
                        $('#logo').attr('width', "70%");
                    else
                        $('#logo').attr('height', "70%");

                }

                reader.readAsDataURL(input.files[0]);
            }
        }

    </script>

    <script type="text/javascript" src=" {{ asset('assets/js/register-step2.js') }}"></script>   

@stop

