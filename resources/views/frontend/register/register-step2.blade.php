@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Let's Get Started! Step 2</h1>
        <hr>
        @include('frontend.register.register-info')
    </div>

    {{--<div class="bg-eae">--}}
        {{--@include('frontend.register.template-form')--}}
    {{--</div>--}}

    <div class="bg-eae step-two-register">
        <div class="container" id="content">
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

@endsection

{{--@extends('frontend.layouts.parts.footer-scripts')--}}

{{-- page level scripts --}}
{{--@section('footer_scripts')--}}
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

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
                    $('#image1').attr('width', '460px');
                    $('#image1').attr('height', '234px');

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
                    $('#image2').attr('width', '460px');
                    $('#image2').attr('height', '234px');

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
                    $('#image3').attr('width', '460px');
                    $('#image3').attr('height', '234px');
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
                    $('#logo').attr('width', '460px');
                    $('#logo').attr('height', '234px');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }



        $(document).ready(function() {

            //for Main Image 1
            $("#mainImage").change(function(){
                readURLMainImage1(this);
            });

            //for Main Image 2
            $("#mainImage2").change(function(){
                readURLMainImage2(this);
            });

            //for Main Image 3
            $("#mainImage3").change(function(){
                readURLMainImage3(this);
            });

            //for logo Image
            $("#logoImage").change(function(){
                readURLLogoImage(this);
            });

            //to enable and disable the section of randomise text on Middle Frame
            $('#chkrandomiseMF').click(function(){
                if($(this).is(":checked"))
                    $("#statementMF").attr("disabled" , "disabled");
                else
                    $("#statementMF").removeAttr("disabled");
            });

            //to enable and disable the section of randomise text on Middle Frame
            $('#chkrandomiseEF').click(function(){
                if($(this).is(":checked"))
                    $("#statementEF").attr("disabled" , "disabled");
                else
                    $("#statementEF").removeAttr("disabled");
            });

            if($('#stateMainFrameColour').val()=='Agency Group Templates') {
                $('#stateMainFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                $('#stateMainFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                $('#stateMainFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                $('#stateMainFrameColourSelection').hide();
            }

            if($('#stateMiddleFrameColour').val()=='Agency Group Templates'){
                $('#stateMiddleFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                $('#stateMiddleFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                $('#stateMiddleFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                $('#stateMiddleFrameColourSelection').hide();
            }

            if($('#stateEndFrameColour').val()=='Agency Group Templates'){
                $('#stateEndFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                $('#stateEndFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                $('#stateEndFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                $('#stateEndFrameColourSelection').hide();
            }

            //auto populating values of the dropdown Sub Colour based on the selection of the Colour Item
            //for State Main Frame
            $('#stateMainFrameColour').on('change', function(){
                $('#stateMainFrameColourSub').html('');
                if($('#stateMainFrameColour').val()=='Agency Group Templates'){
                    $('#stateMainFrameColourSub').show();
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateMainFrameColourSelection').hide();
                }else if($('#stateMainFrameColour').val()=='Themed Templates'){
                    $('#stateMainFrameColourSub').show();
                    $('#stateMainFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateMainFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateMainFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateMainFrameColourSelection').hide();
                }else if($('#stateMainFrameColour').val()=='Customise Your Template'){
                    $('#stateMainFrameColourSelection').show();
                    $('#stateMainFrameColourSub').hide();
                }
            });

            //for Middle Main Frame
            $('#stateMiddleFrameColour').on('change', function(){
                $('#stateMiddleFrameColourSub').html('');
                if($('#stateMiddleFrameColour').val()=='Agency Group Templates'){
                    $('#stateMiddleFrameColourSub').show();
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateMiddleFrameColourSelection').hide();
                }else if($('#stateMiddleFrameColour').val()=='Themed Templates'){
                    $('#stateMiddleFrameColourSub').show();
                    $('#stateMiddleFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateMiddleFrameColourSelection').hide();
                }else if($('#stateMiddleFrameColour').val()=='Customise Your Template'){
                    $('#stateMiddleFrameColourSelection').show();
                    $('#stateMiddleFrameColourSub').hide();
                }
            });

            //for End Main Frame
            $('#stateEndFrameColour').on('change', function(){
                $('#stateEndFrameColourSub').html('');
                if($('#stateEndFrameColour').val()=='Agency Group Templates'){
                    $('#stateEndFrameColourSub').show();
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateEndFrameColourSelection').hide();
                }else if($('#stateEndFrameColour').val()=='Themed Templates'){
                    $('#stateEndFrameColourSub').show();
                    $('#stateEndFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateEndFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateEndFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateEndFrameColourSelection').hide();
                }else if($('#stateEndFrameColour').val()=='Customise Your Template'){
                    $('#stateEndFrameColourSelection').show();
                    $('#stateEndFrameColourSub').hide();
                }
            });

            //to determine the order for the selected template
            $('#chkrandomiseMF').click(function(){
                if($(this).is(":checked"))
                    $("#statementMF").attr("disabled" , "disabled");
                else
                    $("#statementMF").removeAttr("disabled");
            });


        });
    </script>

{{--@stop--}}

