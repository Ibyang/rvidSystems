@extends('frontend.layouts.main')

    <link href="{{ asset('assets/vendors/dropzone/css/dropzone3.css') }}" rel="stylesheet" type="text/css" />

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title mb-3">Manual Video System - Step 1</h3>
            <div class="border-bot5">
                @include('frontend.pages.preferences.video-system.steps')
            </div>
               <h5 class="color-414142 my-3"><b>Upload Your Pictures</b></h5>
               <div class="direct-upload-4">
                    <div class="d-flex align-items-start mx-3 my-2">
                        <div class="p-2 d-u-width"><button class="btn btn-primary b-radius-0 w-100 py-2"><i class="standard-video sv-browse"></i> Browse</button></div>
                        <div class="p-2 mx-2 d-u-width color-666 line-height20">PRESS Browse to <br>Load Files all at once</div>
                    </div>
                    <div class="d-flex align-items-start mx-3 my-2 line-height20">
                        <div class="py-2 mx-2 d-u-width">
                                <div class="d-flex flex-row color-666">
                                    <div>Minimum 10 <br>Maximum 25</div>
                                    <div class="d-u-border">Estimated <br>Video Duration</div>
                                </div>
                        </div>
                        <div class="d-u-width align-self-center"><h2 class="color-6600cc m-0" id="duration"><b>0:00s</b></h2></div>
                    </div>

                    @if($pics == NULL)

                        <div class="d-flex align-content-stretch flex-wrap px-3" id="imgUploader">
                            <div class="mx-2 mb-2">
                                <div class="story-board-block" style="width: 585px; height: auto; font-size: 16px;">

                                    <form method="GET" action="{{ route('account-video-system-script') }}" id="frmStoryBoard">
                                         <ipput type="hidden" name="duration">
                                         <input type="hidden" name="num_images" id="num_images">
                                         <input type="hidden" name="userid" id="userid" value="{{ $userid }}">
                                     </form>
                                     
                                    <form method="POST" action="{{ route('uploadStandardImage') }}" enctype="multipart/form-data" class="dropzone" id="dropzone1">
                                        {{ csrf_field() }}
                                        <span>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property Images</span><br>
                                        <div class="fallback">
                                            {{--<input id="image_{{ $ctr }}" name="image_{{ $ctr }}" type="file" class="FileUpload"/>--}}
                                            <input name="file" type="file" class="FileUpload"/>
                                            <input type="hidden" name="sortorder" id="sort_order" value="">
                                        </div>
                                    </form>

                                </div> 
                            </div>    
                        </div>

                    @else
                    
                        <div class="d-flex align-content-stretch flex-wrap px-3" id="imgUploader2">
                            <div class="mx-2 mb-2">
                                <div class="story-board-block" style="width: 585px; height: auto; font-size: 16px;">

                                    <form method="GET" action="{{ route('account-video-system-script') }}" id="frmStoryBoard">
                                         <ipput type="hidden" name="duration">
                                         <input type="hidden" name="num_images" id="num_images">
                                         <input type="hidden" name="userid" id="userid" value="{{ $userid }}">
                                     </form>
                                     
                                    <form method="POST" action="{{ route('uploadStandardImage') }}" enctype="multipart/form-data" class="dropzone" id="dropzone1">
                                        {{ csrf_field() }}
                                        <span>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property Images</span><br>
                                        <div class="fallback">
                                            {{--<input id="image_{{ $ctr }}" name="image_{{ $ctr }}" type="file" class="FileUpload"/>--}}
                                            <input name="file" type="file" class="FileUpload"/>
                                            <input type="hidden" name="sortorder" id="sort_order" value="">
                                        </div>
                                    </form>

                                </div> 
                            </div>  


                        @foreach($pics as $pic)

                            <div class="mx-2 mb-2" id="{{ $pic['old_filename'] }}">
                                <div class="story-board-block">
                                    <img src="{{ $path2 . $pic['old_filename'] }}" style="max-width: 287px; max-height: 189px">
                                    <div><a href="#" class="link" id="{{ $pic['old_filename'] }}">Remove Image</a></div>
                                </div>
                            </div>

                        @endforeach



                        </div>

                    @endif    



               </div>
            <div class="d-flex flex-row-reverse text-right my-4">
                <div>
                    <div class="row py-4">
                        <div class="col-auto">
                            Estimated Total Video Duration
                        </div>
                        <div class="col-auto p-0"><span class="color-6600cc" id="duration_bottom"><b>0:00s</b></span></div>
                    </div>
                    <input type="hidden" id="path" value=" {{ $path2 }}">
                    <input type="hidden" name="selectedImages" id="selectedImages">
                    <input type="hidden" name="numimages" id="numimages">
                    <button class="btn btn-primary v-s-btn" id="btnStep1Save">SAVE : Next Step 2<i class="arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{-- page level scripts --}}
@section('footer_scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    <script type="text/javascript">

        //var ctr_uploaded_images = 0;
        var duration_seconds = 0;

        $(document).ready(function() {

            // Dropzone.autoDiscover = false;

            //var sortorder = 0;

            // sortorder = $('#sort_order').val();
            // console.log("the initial sortorder is ", sortorder);

            $('.link').click(function(e) {
                e.preventDefault();
                var picfname = $(this).attr("id");

                if(picfname) {
                    $.ajax({
                        url: './deleteStandardImage/' + picfname + '/1',
                        type: "GET",
                        //dataType: "JSON",
                        success:function(result) {
                            // console.log("the value of result is " + result);
                            $('#'+ picfname).remove();
                            location.reload();
                        }
                    });
                }


            });


            $('#btnSaveStoryboard').click(function() {
                if(count_images < 10)
                    alert("You are required to upload 10 images...");
                else if(count_images > 25)
                    alert("You can only upload 25 images...");
                else
                    $('#frmStoryBoard').submit();
            });


            $('#btnStep1Save').click(function() {
                if(count_images < 10)
                    alert("You are required to upload 10 images...");
                else if(count_images > 25)
                    alert("You can only upload 25 images...");
                else
                    $('#frmStoryBoard').submit();
            });

        });

        {{--var image1 = "{!! $img1 !!}";--}}
        {{--var image2 = "{!! $img2 !!}";--}}
        {{--var image3 = "{!! $img3 !!}";--}}
        {{--var image4 = "{!! $img4 !!}";--}}
        {{--var image5 = "{!! $img5 !!}";--}}
        {{--var image6 = "{!! $img6 !!}";--}}
        {{--var image7 = "{!! $img7 !!}";--}}
        {{--var image8 = "{!! $img8 !!}";--}}
        {{--var image9 = "{!! $img9 !!}";--}}
        {{--var image10 = "{!! $img10 !!}";--}}
        {{--var path = "{!! $path2 !!}";--}}
        {{--console.log("the path is ", path);--}}

        var count_images;
        var numimages = $('#numimages').val();
        if(numimages != null)
            count_images = numimages;
        else
            count_images = 0;


            Dropzone.options.dropzone1 =
                {
                    maxFiles: 25,
                    maxFilesize: 15,
                    renameFile: function(file) {
                        var dt = new Date();
                        var time = dt.getTime();
                        return time+file.name;
                    },
                    acceptedFiles: ".jpeg,.jpg,.png,.gif",
                    addRemoveLinks: true,
                    timeout: 5000,
                    thumbnailWidth: 150,
                    thumbnailHeight: 150,
                    thumbnailMethod: "contain",
                    dictRemoveFile: 'Remove Image',
                    dictFileTooBig: 'Image is larger than 5MB',
                    dictDefaultMessage: '',
                    dictInvalidFileType: 'You can\'t upload files of this type.',
                    renameFile: function (file) {
                        name1 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                        return name1;
                    },
                    // resizeWidth: 640,
                    // resizeHeight: 254,
                    init: function(){
                        var sortorder = $('#sort_order').val();

                        // if(image1 != ""){
                        //     name1 = image1;
                        //     var mockFile = { name: image1, size: 12.3, type: 'image/jpeg' };
                        //     // this.createThumbnailFromUrl(file, path);
                        //     this.emit("addedfile", mockFile);
                        //     this.emit("thumbnail", mockFile, path + image1);
                        //     this.emit("complete", mockFile);
                        // }

                        this.on("maxfilesexceeded", function(file){
                            alert("You are only allowed to upload 25 Image!");
                            this.removeFile(file);
                        });

                        this.on("drop", function (file) {

                            //ctr_uploaded_images++;
                            // var url = e.originalEvent.dataTransfer.getData('url');
                            // alert("the url of the file drag and drop from other website is " + url);
                            // $('#result').attr("src",url);

                        });


                        // console.log("the initial sortorder is ", sortorder);
                        this.on("sending", function(file, xhr, formData){
                            formData.append('sortorder', 1);
                            formData.append('duration', 5);
                            //console.log("the value of name1 to send is ", name1);
                            formData.append('image1', name1);
                        });


                        this.on("removedfile", function (file) {

                            console.log("the duration in seconds is ", duration_seconds);

                            //ctr_uploaded_images--;
                            count_images--;
                            duration_seconds = duration_seconds - 5;

                            var date = new Date(null);
                            date.setSeconds(duration_seconds); // specify value for SECONDS here
                            var timeString = date.toISOString().substr(11, 8);

                            $("#duration").html(timeString);
                            $("#duration_bottom").html(timeString);
                            $("#num_images").val(count_images);


                            $.ajax({
                                headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                                type: 'GET',
                                url: './deleteStandardImage/' + name1 + '/1',
                                dataType: 'json',

                                success: function(result){
                                    image1 = null;
                                }
                            });
                        });

                        this.on("addedfile", function(file) {
                            //ctr_uploaded_images++;
                            duration_seconds = duration_seconds + 5;

                            count_images = this.files.length;

                            console.log("the number of image uploaded " + count_images);
                            //console.log("the number of image uploaded " + ctr_uploaded_images);

                            // console.log("the name of file uploaded is ", name1);

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

                        $("#duration").html(timeString);
                        $("#duration_bottom").html(timeString);
                        $("#num_images").val(count_images);
                        $("#duration").val(timeString);
                        console.log("the filename uploaded is " + file.name);
                    },
                    error: function(file, response)
                    {
                        return false;
                    }
                };


    </script>

@stop

