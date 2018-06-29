@extends('frontend.layouts.main')

<link href="{{ asset('assets/vendors/dropzone/css/dropzone3.css') }}" rel="stylesheet" type="text/css" />
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">--}}

@section('content')
<div class="container">
    <div class="row my-account-container">
       <div class="col-lg-3">
            @auth
                @include('frontend.layouts.parts.sidebar')
            @endauth
        </div>
        <div class="col-lg-9 my-account-form">
            <h3 class="my-account-title">Standard Video System - Step 1</h3>

            @include('frontend.pages.preferences.video-system.steps')

            {{--<form id="frmStep1" method="POST" action="{{ route('account-video-system-processStep1')}}" enctype="multipart/form-data">--}}
{{--                {{ csrf_field() }}--}}
                <div class="row video-system-1">
                    <div class="col-sm-12 p-0">
                         <div class="row">
                            <div class="col-sm pl-0"><h3>Story Board</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                         </div>
                         <div class="story-board-block pl-3 pr-3" id="divStory">
                             <button class="btn" id="btnSaveStoryboard" style="width: 30%"><i class="standard-video sv-save"></i>SAVE</button>

                             @for($ctr=1; $ctr<=10; $ctr++)
                                 <form method="POST" action="{{ route('uploadStandardImage') }}" enctype="multipart/form-data" class="dropzone" id="dropzone{{ $ctr }}">
                                     {{ csrf_field() }}
                                     <div class="fallback">
                                        {{--<input id="image_{{ $ctr }}" name="image_{{ $ctr }}" type="file" class="FileUpload"/>--}}
                                        <input name="file" type="file" class="FileUpload"/>
                                        <input type="hidden" name="sortorder" id="sort_order" value="{{ $ctr }}">
                                     </div>
                                 </form>
                             @endfor

                             <div id="moreDropZone"></div>
                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data" class="dropzone" id="dropzone1">--}}
                                 {{--<div class="fallback">--}}
                                     {{--<input id="image_1" name="image_2" type="file" class="FileUpload"/>--}}
                                 {{--</div>--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data" class="dropzone" id="dropzone2">--}}
                                 {{--<div class="fallback">--}}
                                     {{--<input id="image_1" name="image_2" type="file" class="FileUpload"/>--}}
                                 {{--</div>--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data" class="dropzone" id="dropzone3">--}}
                                 {{--<div class="fallback">--}}
                                     {{--<input id="image_1" name="image_2" type="file" class="FileUpload"/>--}}
                                 {{--</div>--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data" class="dropzone" id="dropzone4">--}}
                                 {{--<div class="fallback">--}}
                                     {{--<input id="image_1" name="image_2" type="file" class="FileUpload"/>--}}
                                 {{--</div>--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data"--}}
                                   {{--class="dropzone" id="dropzone5">--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data"--}}
                                   {{--class="dropzone" id="dropzone6">--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data"--}}
                                   {{--class="dropzone" id="dropzone7">--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data"--}}
                                   {{--class="dropzone" id="dropzone8">--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data"--}}
                                   {{--class="dropzone" id="dropzone9">--}}
                             {{--</form>--}}

                             {{--<form method="post" action="{{url('/uploadImage')}}" enctype="multipart/form-data"--}}
                                   {{--class="dropzone" id="dropzone10">--}}
                             {{--</form>--}}

                         </div>

                         <div class="text-right">
                             <a class="c0066ff" id="addDropZone"><b>+ Add another image file</b></a><br><br>
                             <span>Estimated Total Video Duration:  <span id="duration" style="font-weight: bold"></span></span>
                         </div>
                    </div>
                </div>
                <div class="float-r mt-70 mb-5">
                    <input type="hidden" name="userid" id="userid" value="{{ $userid }}">
                    <input type="hidden" name="selectedImages" id="selectedImages">
                    <button class="btn btn-primary" id="btnStep1Save">SAVE : Next Step 2<i class="arrow-right"></i></button>
                </div>
                <div class="clear"></div>
            {{--</form>--}}
        </div>
    </div>
</div>
@endsection

{{--<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>--}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}

{{--<script type="text/javascript" src=" {{ asset('assets/vendors/dropzone/js/dropzone.js') }}"></script>--}}

{{--<script src="{{ asset('assets/js/script.js') }}"></script>--}}

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

<script type="text/javascript">



    $(document).ready(function() {

        // Dropzone.autoDiscover = false;

        //var sortorder = 0;

        // sortorder = $('#sort_order').val();
        // console.log("the initial sortorder is ", sortorder);

        $('#btnSaveStoryboard').click(function() {
            if(ctr_uploaded_images < 10)
                alert("You are required to upload 10 images...");
            else
                window.location.href = "http://yahoo.com";
        });


        $('#addDropZone').click(function () {

            // Dropzone.autoDiscover = false;

            {{--$('.story-board-block').append(--}}
            {{--'<form method="POST" action="{{ route('uploadStandardImage') }}" enctype="multipart/form-data" class="dropzone" id="dropzone11">' +--}}
            {{--'<div class="fallback">' +--}}
            {{--'<input name="file" type="file" class="FileUpload"/>' +--}}
            {{--'</div></form>'--}}
            {{--)--}}
            $('#divStory').append(
                // $("#moreDropZone").dropzone({ url: "/file/post", maxFiles: 1, autoProcessQueue: false, addRemoveLinks: true, acceptedFiles: 'image/*' })
                $("#moreDropZone").addClass("dropzone").dropzone({ url: "/upload", maxFilesize: 2, maxFiles: 10, capture: "camera", dictDefaultMessage: "Please drop files to be uploaded here" })
            )

            // var myDropzone = new Dropzone('div#divStory', { url: "/file/post", maxFiles: 1, autoProcessQueue: false, addRemoveLinks: true, acceptedFiles: 'image/*' });

            // $("#divStory").addClass("dropzone").dropzone({ url: "/upload", maxFilesize: 2, maxFiles: 10, capture: "camera", dictDefaultMessage: "Please drop files to be uploaded here" });


        });

    });



    var ctr_uploaded_images = 0;
    var duration_seconds = 0;

    //dropzone settings for dynamically created instance of DropZone.js
    Dropzone.options.dropzone =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 10 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 10);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });

                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });
            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);

                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };

    Dropzone.options.dropzone1 =
        {
            maxFiles: 1,
            maxFilesize: 15,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 1 ',
            dictInvalidFileType: 'You can\'t upload files of this type.',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            // resizeWidth: 640,
            // resizeHeight: 254,
            init: function(){
                var sortorder = $('#sort_order').val();

                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });


                // console.log("the initial sortorder is ", sortorder);
                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 1);
                    formData.append('duration', 5);
                });


                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;
                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });

                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });

                // this.on("addedfile", function(file) {
                //     var temp = file.previewTemplate;
                //     var FR= new FileReader();
                //     FR.onload = function(e) {
                //         console.log( e.target.result); //This is the base64 data of file(gif) dropped
                //         //if you want to display it somewhere in your previewTemplate
                //         temp.find('.dz-preview').attr('src',e.target.result); //setting as src of some img tag with class 'my-preview'
                //     };
                //     FR.readAsDataURL( file );
                //
                // })


            },
            success: function(file, response)
            {
                //convert given seconds to corresponding time format
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };


    Dropzone.options.dropzone2 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 2 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });


                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 2);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });


                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });

            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };

    Dropzone.options.dropzone3 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 3 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 3);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });


                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });
            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);

                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };

    Dropzone.options.dropzone4 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 4 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 4);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });

                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });
            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);

                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };

    Dropzone.options.dropzone5 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 5 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 5);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });


                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });

            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);

                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };

    Dropzone.options.dropzone6 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 6 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 6);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });


                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });
            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);

                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };

    Dropzone.options.dropzone7 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 7 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 7);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });


                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });

            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);

                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };

    Dropzone.options.dropzone8 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 8 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 8);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });


                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });

            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };


    Dropzone.options.dropzone9 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 9 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 9);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });


                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });


            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);

                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };


    Dropzone.options.dropzone10 =
        {
            maxFiles: 1,
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            thumbnailWidth: 640,
            thumbnailHeight: 480,
            thumbnailMethod: "contain",
            dictRemoveFile: 'Remove Image',
            dictFileTooBig: 'Image is larger than 5MB',
            dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 10 ',
            renameFile: function (file) {
                name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                return name;
            },
            init: function(){
                this.on("maxfilesexceeded", function(file){
                    alert("You are only allowed to upload 1 Image!");
                    this.removeFile(file);
                });

                this.on("sending", function(file, xhr, formData){
                    formData.append('sortorder', 10);
                    formData.append('duration', 5);
                });

                this.on("removedfile", function (file) {
                    ctr_uploaded_images--;
                    duration_seconds = duration_seconds - 5;

                    $.ajax({
                        headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                        type: 'GET',
                        url: '/deleteStandardImage/' + name,
                        dataType: 'json'
                    });
                });

                this.on("addedfile", function(file) {
                    ctr_uploaded_images++;
                    duration_seconds = duration_seconds + 5;
                });
            },
            success: function(file, response)
            {
                var date = new Date(null);
                date.setSeconds(duration_seconds); // specify value for SECONDS here
                var timeString = date.toISOString().substr(11, 8);

                $("#duration").text(timeString);

                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };





</script>

