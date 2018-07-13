@extends('frontend.layouts.main')

<link href="{{ asset('assets/vendors/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css" />

<style>
    .dropzone { text-align: center;}

    .dropzone .dz-preview .dz-details, .dropzone-previews .dz-preview .dz-details {
        width: auto !important;
        height: auto !important;
    }

    .dz-details img {
        width: auto !important;
        height: auto !important;
        position: relative !important;
    }

</style>

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

                @include('frontend.register.steps.pictures')

                @include('frontend.register.steps.logo')

            <form class="register-form" action="{{ route('processStep2') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

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
{{--    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>--}}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript" src=" {{ asset('assets/vendors/dropzone/js/dropzone.js') }}"></script>

    <script>

        var fileMainImage = "{!! $template['main_image'] !!}";
        var fileLogoImage = "{!! $template['logo'] !!}";
        var path = "{!! $template['path'] !!}";

        //dropZone codes for Main Image
        var FormDropzone = function() {
            var name="";
            Dropzone.options.myDropzone = {
                //uploadMultiple: true,
                //parallelUploads: 10,
                maxFiles: 1,
                paramName: 'mainImage',
                maxFilesize: 5, // MB
                addRemoveLinks: true,
                // thumbnailWidth: 250,
                // thumbnailHeight: 250,
                // thumbnailWidth: 576,
                // thumbnailHeight: 864,
                thumbnailWidth: 450,
                thumbnailHeight: 299,
                thumbnailMethod: "contain",
                dictRemoveFile: 'Remove Image',
                dictFileTooBig: 'Image is larger than 5MB',
                dictDefaultMessage: 'Drag Image Here',
                dictInvalidFileType: 'You can\'t upload files of this type.',
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                // previewsContainer: "#preview_image",
                // previewTemplate: document.getElementById('preview_image').innerHTML,
                timeout: 10000,
                renameFile: function (mainImage) {
                    name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + mainImage.name;
                    console.log("the name is ", name);
                    return name;
                },
                init: function() {

                    if(fileMainImage != "") {
                        console.log("the value of fileMainImage is ", fileMainImage);
                        var mockFile = { name: fileMainImage, size: 12.3, type: 'image/jpeg' };
                        this.emit("addedfile", mockFile);
                        this.emit("thumbnail", mockFile, path + fileMainImage);
                        //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
                        this.emit("complete", mockFile);
                        // this.addFile.call(this, mockFile);
                        // this.options.thumbnail.call(this, mockFile, fullpath);
                    }


                    // $('.dropzone').css('background-image', 'url("../../assets/vendors/dropzone/images/step-needed.jpg")');
                    this.on("maxfilesexceeded", function(mainImage){
                        alert("You are only allowed to upload 1 Image!");
                        this.removeFile(mainImage);
                    });

                    this.on("removedfile", function (mainImage) {
                        $.ajax({
                            headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                            type: 'GET',
                            url: '/imageMainDelete/' + mainImage.name,
                            dataType: 'json',
                        });
                        $('.dropzone').css('background-image', 'url("../../assets/vendors/dropzone/images/step-needed.jpg")');
                        filename = null;
                        fullpath = null;
                        // $('.dropzone').css('background', 'none');
                    });

                },
                success: function (mainImage, done) {
                    // $('.dropzone').css('background-image', 'none');
                    // $('.dropzone').css('background', 'white');
                    mainImage["customName"] = mainImage.name;
                    console.log("the file name is ", mainImage);
                }
            };
        }();


        //dropZone codes for Logo Image
        var FormDropzone = function() {
            var name="";
            Dropzone.options.myDropzoneLogo = {
                //uploadMultiple: true,
                //parallelUploads: 10,
                maxFiles: 1,
                paramName: 'logoImage',
                maxFilesize: 5, // MB
                addRemoveLinks: true,
                // thumbnailWidth: 250,//the "size of image" width at px
                // thumbnailHeight: 250,//the "size of image" height at px
                thumbnailWidth: 450,
                thumbnailHeight: 299,
                thumbnailMethod: "contain",
                dictRemoveFile: 'Remove Image',
                dictFileTooBig: 'Image is larger than 5MB',
                dictDefaultMessage: 'Drag Image Here',
                dictInvalidFileType: 'You can\'t upload files of this type.',
                acceptedFiles: ".jpeg,.jpg,.png,.gif",
                // previewsContainer: "#preview_image",
                // previewTemplate: document.getElementById('preview_image').innerHTML,
                timeout: 10000,
                renameFile: function (logoImage) {
                    name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + logoImage.name;
                    console.log("the name is ", name);
                    return name;
                },
                init: function() {

                    //code to pre-load the image to the image container
                    if(fileLogoImage != "") {
                        var mockFile = {name: fileLogoImage, size: 12.3, type: 'image/jpeg'};
                        this.emit("addedfile", mockFile);
                        this.emit("thumbnail", mockFile, path + fileLogoImage);
                        //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
                        this.emit("complete", mockFile);
                    }

                    this.on("maxfilesexceeded", function(logoImage){
                        alert("You are only allowed to upload 1 Image!");
                        this.removeFile(logoImage);
                    });

                    this.on("addedfile", function(logoImage){
                       alert("File Added");
                    });

                    this.on("removedfile", function (logoImage) {
                        $.ajax({
                            headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                            type: 'GET',
                            url: '/imageLogoDelete/' + logoImage.name,
                            dataType: 'json',
                        });
                        $('.dropzone').css('background-image', 'url("../../assets/vendors/dropzone/images/step-needed.jpg")');
                        // $('.dropzone').css('background-image', 'url("./../images/step-needed.jpg")');
                        // $('.dropzone').css('background', 'none');
                    });

                },
                success: function (logoImage, done) {

                    // this.on("thumbnail", function (logoImage) {
                    //     $('.dropzone').css('background-image', 'none');
                    // });
                    // $('.dropzone').css('background-image', 'none');
                    // $('.dropzone').css('background', 'white');
                    logoImage["customName"] = logoImage.name;
                    console.log("the file name is ", logoImage);
                }
            };
        }();



    </script>

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
                        $('#image1').attr('width', "100%");
                    else
                        $('#image1').attr('height', "100%");

                    // $('#image1').attr('style', "max-width=460px");
                    // $('#image1').attr('style', "max-height=234px");


                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        //for Main Image 2
        // function readURLMainImage2(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //
        //         reader.onload = function (e) {
        //             $('#image2').attr('src', e.target.result);
        //             $('#image2').attr('width', '460px');
        //             $('#image2').attr('height', '234px');
        //
        //         }
        //
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
        //
        // //for Main Image 3
        // function readURLMainImage3(input) {
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();
        //
        //         reader.onload = function (e) {
        //             $('#image3').attr('src', e.target.result);
        //             $('#image3').attr('width', '460px');
        //             $('#image3').attr('height', '234px');
        //         }
        //
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }

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
                        $('#logo').attr('style', "width=100%");
                    else
                        $('#logo').attr('style', "height=100%");

                    $('#logo').attr('style', "max-width=460px");
                    $('#logo').attr('style', "max-height=234px");

                }

                reader.readAsDataURL(input.files[0]);
            }
        }



        $(document).ready(function() {

            // var img = document.getElementById('image1');
            // var width = img.clientWidth;
            // var height = img.clientHeight;
            //
            // if(width > height)
            //     $('#image1').attr('width', "100%");
            // else
            //     $('#image1').attr('height', "100%");
            //
            // $('#image1').attr('style', "max-width=460px");
            // $('#image1').attr('style', "max-height=234px");

            // $('.dropzone').css('background-image', 'url("../../assets/vendors/dropzone/images/step-needed.jpg")');
            // $('.dropzone').css('background', 'white');


            //passing values from links of main templates

            var folder_name = $('#folder_name').val();

            $('#mainTemplateModal').on('show.bs.modal', function(e) {
                var mainTemplate = $(e.relatedTarget).attr('data-dbid');

                $("#mainTemplate").attr('src', '/storage/template_materials/' + folder_name + '/' + mainTemplate);
            });


            //passing values from links of end templates
            $('#endTemplateModal').on('show.bs.modal', function(e) {
                var endTemplate = $(e.relatedTarget).attr('data-dbid');

                // $("#endTemplate").attr('src', '/storage/register/' + endTemplate);
                $("#endTemplate").attr('src', '/storage/template_materials/' + folder_name + '/' + endTemplate);
            });


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

            if($('#stateMainFrameColour').val()=='Agency Group Colours') {
                $('#stateMainFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                $('#stateMainFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                $('#stateMainFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                $('#stateMainFrameColourSelection').hide();
            }

            if($('#stateEndFrameColour').val()=='Agency Group Colours'){
                $('#stateEndFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                $('#stateEndFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                $('#stateEndFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                $('#stateEndFrameColourSelection').hide();
            }

            //auto populating values of the dropdown Sub Colour based on the selection of the Colour Item
            //for State Main Frame
            $('#stateMainFrameColour').on('change', function(){
                $('#stateMainFrameColourSub').html('');
                if($('#stateMainFrameColour').val()=='Agency Group Colours'){
                    $('#stateMainFrameColourSub').show();
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateMainFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateMainFrameColourSelection').hide();
                }else if($('#stateMainFrameColour').val()=='Themed Colours'){
                    $('#stateMainFrameColourSub').show();
                    $('#stateMainFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateMainFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateMainFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateMainFrameColourSelection').hide();
                }else if($('#stateMainFrameColour').val()=='Customise Your Colours'){
                    $('#stateMainFrameColourSelection').show();
                    $('#stateMainFrameColourSub').hide();
                }
            });

            //for Middle Main Frame
            $('#stateMiddleFrameColour').on('change', function(){
                $('#stateMiddleFrameColourSub').html('');
                if($('#stateMiddleFrameColour').val()=='Agency Group Colours'){
                    $('#stateMiddleFrameColourSub').show();
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateMiddleFrameColourSelection').hide();
                }else if($('#stateMiddleFrameColour').val()=='Themed Colours'){
                    $('#stateMiddleFrameColourSub').show();
                    $('#stateMiddleFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateMiddleFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateMiddleFrameColourSelection').hide();
                }else if($('#stateMiddleFrameColour').val()=='Customise Your Colours'){
                    $('#stateMiddleFrameColourSelection').show();
                    $('#stateMiddleFrameColourSub').hide();
                }
            });

            //for End Main Frame
            $('#stateEndFrameColour').on('change', function(){
                $('#stateEndFrameColourSub').html('');
                if($('#stateEndFrameColour').val()=='Agency Group Colours'){
                    $('#stateEndFrameColourSub').show();
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 1">Agency Group 1</option>');
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 2">Agency Group 2</option>');
                    $('#stateEndFrameColourSub').append('<option value="Agency Group 3">Agency Group 3</option>');
                    $('#stateEndFrameColourSelection').hide();
                }else if($('#stateEndFrameColour').val()=='Themed Colours'){
                    $('#stateEndFrameColourSub').show();
                    $('#stateEndFrameColourSub').append('<option value="Professional">Professional</option>');
                    $('#stateEndFrameColourSub').append('<option value="Fun + Friendly">Fun + Friendly</option>');
                    $('#stateEndFrameColourSub').append('<option value="Random">Random</option>');
                    $('#stateEndFrameColourSelection').hide();
                }else if($('#stateEndFrameColour').val()=='Customise Your Colours'){
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

            $('#checkboxGroup input[type=checkbox]').change(function() {
                if (this.checked) {
                    $('#checkboxGroup input[type=checkbox]').not(
                        $(this)).prop('checked', false);
                }
            });

            $('#mainframe1').click(function() {
                if ($(this).is(":checked"))

                    // it is checked
                    alert("Template 1 is selected")

            });

            $('#mainframe2').click(function() {
                if ($(this).is(":checked"))

                // it is checked
                    alert("Template 2 is selected")

            });

            $('#mainframe3').click(function() {
                if ($(this).is(":checked"))

                // it is checked
                    alert("Template 3 is selected")

            });

            $('#mainframe4').click(function() {
                if ($(this).is(":checked"))

                // it is checked
                    alert("Template 4 is selected")

            });

            // $('input[type="checkbox"]').on('change', function() {
            //     $('input[name="main_frame"]').not(this).prop('checked', false);
            // });
            //
            //
            // $('input[type="checkbox"]').on('change', function() {
            //     $('input[name="end_frame"]').not(this).prop('checked', false);
            // });



        });
    </script>

{{--@stop--}}

