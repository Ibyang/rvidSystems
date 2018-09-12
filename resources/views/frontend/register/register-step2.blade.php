@extends('frontend.layouts.main')

<<<<<<< HEAD
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src=" {{ asset('assets/vendors/dropzone/js/dropzone.js') }}"></script>

=======
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
<div id="css_container"></div>

@section('content')
    <div class="container pb-0" id="content">
        <h1 class="c-6600cc border-bot4">Let’s Get Started! Step 2</h1>
        
        @include('frontend.register.register-info')
        
        <div class="d-flex justify-content-between join-step-next p-1">
<<<<<<< HEAD
                <button class="btn btn-primary bg-333 btn-no-border px-3" onclick="goBack()"><i class="arrow-left"></i> BACK</button>
=======
                <button class="btn btn-primary bg-333 btn-no-border px-4" onclick="goBack()"><i class="arrow-left"></i> BACK</button>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
        </div>
    </div>
    <div class="bg-eae step-two-register">
         <div class="container color-000" id="content">
<<<<<<< HEAD
               
=======
                <form class="register-form" action="{{ route('processStep2') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}    

>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                    @include('frontend.register.steps.pictures')

                    @include('frontend.register.steps.logo')

<<<<<<< HEAD
            <form class="register-form" action="{{ route('processStep2') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}        

=======
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
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

<<<<<<< HEAD
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script>
    
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
                thumbnailWidth: 576,
                thumbnailHeight: 864,
                // thumbnailWidth: 450,
                // thumbnailHeight: 299,
                thumbnailMethod: "contain",
                dictRemoveFile: 'Remove Image',
                dictFileTooBig: 'Image is larger than 5MB',
                dictDefaultMessage: '',
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

                    this.on("addedfile", function(mainImage){
                       $('#image1').hide();
                    });

                    this.on("removedfile", function (mainImage) {
                        $.ajax({
                            headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                            type: 'GET',
                            url: '/imageMainDelete/' + mainImage.name,
                            dataType: 'json',
                        });
                        // $('.dropzone').css('background-image', 'url("../../assets/vendors/dropzone/images/step-needed.jpg")');
                        $('#image1').show();
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
                    $('#image1').hide();
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
                // thumbnailWidth: 450,
                // thumbnailHeight: 299,
                thumbnailWidth: 576,
                thumbnailHeight: 864,
                thumbnailMethod: "contain",
                dictRemoveFile: 'Remove Image',
                dictFileTooBig: 'Image is larger than 5MB',
                dictDefaultMessage: '',
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
                       $('#logoImage').hide();
                    });

                    this.on("removedfile", function (logoImage) {
                        $.ajax({
                            headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                            type: 'GET',
                            url: '/imageLogoDelete/' + logoImage.name,
                            dataType: 'json',
                        });
                        $('#logoImage').show();
                        // $('.dropzone').css('background-image', 'url("../../assets/vendors/dropzone/images/step-needed.jpg")');
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
                    $('#logoImage').hide();
                    console.log("the file name is ", logoImage);
                }
            };
        }();



    </script>

=======
    
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
    <script type="text/javascript">

        function goBack(){
            window.history.back();
        }

        //for Main Image 1
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

