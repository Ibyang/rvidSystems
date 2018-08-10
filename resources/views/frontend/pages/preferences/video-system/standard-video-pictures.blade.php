@extends('frontend.layouts.main')

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
                        <div class="d-u-width align-self-center"><h2 class="color-6600cc m-0"><b>01m:15s</b></h2></div>
                    </div>
                    <div class="d-flex align-content-stretch flex-wrap px-3">
                        <div class="mx-2 mb-2">
                            <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 1</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 2</p>
                             </div>
                        </div>
                         <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 3</p>

                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 4</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                            <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 5</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 6</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 7</p>

                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 8</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 9</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                            <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 10</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 11</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 12</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 13</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 14</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                            <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 15</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 16</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 17</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <div>
                                    <input type="file" multiple>
                                 </div>
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 18</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 19</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                            <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 20</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 21</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 22</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 23</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 24</p>
                             </div>
                        </div>
                        <div class="mx-2 mb-2">
                             <div class="story-board-block">
                                 <p class="bg-f4 color-999">Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property image 25</p>
                             </div>
                        </div>
                    </div>
               </div>
            <div class="d-flex flex-row-reverse text-right my-4">
                <div>
                    <div class="row py-4">
                        <div class="col-auto">
                            Estimated Total Video Duration
                        </div>
                        <div class="col-auto p-0"><span class="color-6600cc"><b>01m:15s</b></span></div>
                    </div>
                    <button class="btn btn-primary v-s-btn">SAVE : Next Step 2<i class="arrow-right"></i></button>
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

        var ctr_uploaded_images = 0;
        var duration_seconds = 0;

        $(document).ready(function() {

            // Dropzone.autoDiscover = false;

            //var sortorder = 0;

            // sortorder = $('#sort_order').val();
            // console.log("the initial sortorder is ", sortorder);

            $('#btnSaveStoryboard').click(function() {
                if(ctr_uploaded_images < 10)
                    alert("You are required to upload 10 images...");
                else
                    $('#frmStoryBoard').submit();
            });


            $('#btnStep1Save').click(function() {
                if(ctr_uploaded_images < 10)
                    alert("You are required to upload 10 images...");
                else
                    $('#frmStoryBoard').submit();
            });

            {{--var id = 11;--}}

            {{--$('#addDropZone').click(function () {--}}

                {{--if(id <= 25){--}}

                    {{--var dropid = "singledropzone" + id;--}}
                    {{--$("#divStory").append('<form action="/uploadStandardImage" class="dropzone" enctype="multipart/form-data" ' +--}}
                        {{--'id="' + dropid + '">{{ csrf_field() }}<div class="fallback"><input name="file" type="file" class="FileUpload"/>\n' +--}}
                        {{--'<input type="hidden" name="sortorder" id="sort_order" value="' + id + '"></div></form>');--}}

                    {{--var singleDropzoneOptions = {--}}

                        {{--maxFiles: 1,--}}
                        {{--maxFilesize: 12,--}}
                        {{--renameFile: function(file) {--}}
                            {{--var dt = new Date();--}}
                            {{--var time = dt.getTime();--}}
                            {{--return time+file.name;--}}
                        {{--},--}}
                        {{--acceptedFiles: ".jpeg,.jpg,.png,.gif",--}}
                        {{--addRemoveLinks: true,--}}
                        {{--timeout: 5000,--}}
                        {{--// thumbnailWidth: 640,--}}
                        {{--// thumbnailHeight: 480,--}}
                        {{--// thumbnailMethod: "contain",--}}
                        {{--dictRemoveFile: 'Remove Image',--}}
                        {{--dictFileTooBig: 'Image is larger than 5MB',--}}
                        {{--dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image ' + id,--}}
                        {{--renameFile: function (file) {--}}
                            {{--eval("name" + id + " = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name");--}}
                            {{--return eval("name" + id);--}}
                        {{--},--}}
                        {{--init: function(){--}}
                            {{--this.on("maxfilesexceeded", function(file){--}}
                                {{--alert("You are only allowed to upload 1 Image!");--}}
                                {{--this.removeFile(file);--}}
                            {{--});--}}

                            {{--this.on("sending", function(file, xhr, formData){--}}
                                {{--formData.append('sortorder', id);--}}
                                {{--formData.append('duration', 5);--}}
                            {{--});--}}

                            {{--this.on("removedfile", function (file) {--}}
                                {{--$.ajax({--}}
                                    {{--headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url--}}
                                    {{--type: 'GET',--}}
                                    {{--url: '/deleteStandardImage/' + eval("name" + id),--}}
                                    {{--dataType: 'json',--}}

                                    {{--success: function(result){--}}
                                        {{--ctr_uploaded_images--;--}}
                                        {{--duration_seconds = duration_seconds - 5;--}}

                                        {{--var date = new Date(null);--}}
                                        {{--date.setSeconds(duration_seconds); // specify value for SECONDS here--}}
                                        {{--var timeString = date.toISOString().substr(11, 8);--}}

                                        {{--$("#duration").text(timeString);--}}
                                        {{--$("#num_images").val(ctr_uploaded_images);--}}
                                    {{--}--}}
                                {{--});--}}
                            {{--});--}}

                            {{--this.on("addedfile", function(file) {--}}
                                {{--ctr_uploaded_images++;--}}
                                {{--duration_seconds = duration_seconds + 5;--}}
                                {{--console.log("the number of uploaded images is ", ctr_uploaded_images);--}}

                                {{--$("#num_images").val(ctr_uploaded_images);--}}
                            {{--});--}}
                        {{--},--}}
                        {{--success: function(file, response)--}}
                        {{--{--}}
                            {{--var date = new Date(null);--}}
                            {{--date.setSeconds(duration_seconds); // specify value for SECONDS here--}}
                            {{--var timeString = date.toISOString().substr(11, 8);--}}

                            {{--$("#duration").text(timeString);--}}
                            {{--$("#num_images").val(ctr_uploaded_images);--}}

                            {{--console.log(response);--}}
                        {{--},--}}
                        {{--error: function(file, response)--}}
                        {{--{--}}
                            {{--return false;--}}
                        {{--}--}}

                    {{--};--}}

                    {{--$("form#" + dropid).dropzone(singleDropzoneOptions);--}}

                {{--}--}}

                {{--// Dropzone.autoDiscover = false;--}}

                {{--$('.story-board-block').append(--}}
                {{--'<form method="POST" action="{{ route('uploadStandardImage') }}" enctype="multipart/form-data" class="dropzone" id="dropzone11">' +--}}
                {{--'<div class="fallback">' +--}}
                {{--'<input name="file" type="file" class="FileUpload"/>' +--}}
                {{--'</div></form>'--}}
                {{--)--}}
                {{--//$('#divStory').append(--}}
                {{--// $("#moreDropZone").dropzone({ url: "/file/post", maxFiles: 1, autoProcessQueue: false, addRemoveLinks: true, acceptedFiles: 'image/*' })--}}
                {{--// $("#moreDropZone").addClass("dropzone").dropzone({ url: "/upload", maxFilesize: 2, maxFiles: 10, capture: "camera", dictDefaultMessage: "Please drop files to be uploaded here" })--}}
                {{--// )--}}

                {{--// var myDropzone = new Dropzone('div#divStory', { url: "/file/post", maxFiles: 1, autoProcessQueue: false, addRemoveLinks: true, acceptedFiles: 'image/*' });--}}

                {{--// $("#divStory").addClass("dropzone").dropzone({ url: "/upload", maxFilesize: 2, maxFiles: 10, capture: "camera", dictDefaultMessage: "Please drop files to be uploaded here" });--}}

                {{--id++;--}}

            {{--});--}}

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

        Dropzone.options.dropzone =
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
                    thumbnailWidth: 120,
                    thumbnailHeight: 120,
                    thumbnailMethod: "contain",
                    dictRemoveFile: 'Remove Image',
                    dictFileTooBig: 'Image is larger than 5MB',
                    dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 1 ',
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

                            ctr_uploaded_images++;
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

                            ctr_uploaded_images--;
                            duration_seconds = duration_seconds - 5;

                            var date = new Date(null);
                            date.setSeconds(duration_seconds); // specify value for SECONDS here
                            var timeString = date.toISOString().substr(11, 8);

                            $("#duration").text(timeString);
                            $("#num_images").val(ctr_uploaded_images);


                            $.ajax({
                                headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                                type: 'GET',
                                url: '/deleteStandardImage/' + name1 + '/1',
                                dataType: 'json',

                                success: function(result){
                                    image1 = null;
                                }
                            });
                        });

                        this.on("addedfile", function(file) {
                            ctr_uploaded_images++;
                            duration_seconds = duration_seconds + 5;

                            count_images = this.files.length;

                            console.log("the number of image uploaded " + count_images);

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

                        $("#duration").text(timeString);
                        $("#num_images").val(count_images);
                        console.log("the filename uploaded is " + file.name);
                    },
                    error: function(file, response)
                    {
                        return false;
                    }
                };



        // Dropzone.options.dropzone2 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 2 ',
        //         renameFile: function (file) {
        //             name2 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name2;
        //         },
        //         init: function(){
        //
        //             if(image2 != ""){
        //                 name2 = image2;
        //                 var mockFile = { name: image2, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image2);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 2);
        //                 formData.append('duration', 5);
        //                 formData.append('image2', name2);
        //             });
        //
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name2 + '/2',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //                         image2 = null;
        //                     }
        //                 });
        //             });
        //
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };
        //
        // Dropzone.options.dropzone3 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 3 ',
        //         renameFile: function (file) {
        //             name3 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name3;
        //         },
        //         init: function(){
        //
        //             if(image3 != ""){
        //                 name3 = image3;
        //                 var mockFile = { name: image3, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image3);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 3);
        //                 formData.append('duration', 5);
        //                 formData.append('image3', name3);
        //             });
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name3 + '/3',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //
        //                     }
        //                 });
        //             });
        //
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };
        //
        // Dropzone.options.dropzone4 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 4 ',
        //         renameFile: function (file) {
        //             name4 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name4;
        //         },
        //         init: function(){
        //
        //             if(image4 != ""){
        //                 name4 = image4;
        //                 var mockFile = { name: image4, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image4);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 4);
        //                 formData.append('duration', 5);
        //                 formData.append('image4', name4);
        //             });
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name4 + '/4',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //
        //                     }
        //                 });
        //             });
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };
        //
        // Dropzone.options.dropzone5 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 5 ',
        //         renameFile: function (file) {
        //             name5 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name5;
        //         },
        //         init: function(){
        //
        //             if(image5 != ""){
        //                 name5 = image5;
        //                 var mockFile = { name: image5, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image5);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 5);
        //                 formData.append('duration', 5);
        //                 formData.append('image5', name5);
        //             });
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name5 + '/5',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //
        //                     }
        //                 });
        //             });
        //
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };
        //
        // Dropzone.options.dropzone6 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 6 ',
        //         renameFile: function (file) {
        //             name6 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name6;
        //         },
        //         init: function(){
        //
        //             if(image6 != ""){
        //                 name6 = image6;
        //                 var mockFile = { name: image6, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image6);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 6);
        //                 formData.append('duration', 5);
        //                 formData.append('image6', name6);
        //             });
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name6 + '/6',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //
        //                     }
        //                 });
        //             });
        //
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };
        //
        // Dropzone.options.dropzone7 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 7 ',
        //         renameFile: function (file) {
        //             name7 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name7;
        //         },
        //         init: function(){
        //
        //             if(image7 != ""){
        //                 name7 = image7;
        //                 var mockFile = { name: image7, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image7);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 7);
        //                 formData.append('duration', 5);
        //                 formData.append('image7', name7);
        //             });
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name7 + '/7',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //
        //                     }
        //                 });
        //             });
        //
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };
        //
        // Dropzone.options.dropzone8 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 8 ',
        //         renameFile: function (file) {
        //             name8 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name8;
        //         },
        //         init: function(){
        //
        //             if(image8 != ""){
        //                 name8 = image8;
        //                 var mockFile = { name: image8, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image8);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 8);
        //                 formData.append('duration', 5);
        //                 formData.append('image8', name8);
        //             });
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name8 + '/8',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //
        //                     }
        //                 });
        //             });
        //
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };
        //
        //
        // Dropzone.options.dropzone9 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 9 ',
        //         renameFile: function (file) {
        //             name9 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name9;
        //         },
        //         init: function(){
        //
        //             if(image9 != ""){
        //                 name9 = image9;
        //                 var mockFile = { name: image9, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image9);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 9);
        //                 formData.append('duration', 5);
        //                 formData.append('image9', name9);
        //             });
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name9 + '/9',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //
        //                     }
        //                 });
        //             });
        //
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //
        //
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };
        //
        //
        // Dropzone.options.dropzone10 =
        //     {
        //         maxFiles: 1,
        //         maxFilesize: 12,
        //         renameFile: function(file) {
        //             var dt = new Date();
        //             var time = dt.getTime();
        //             return time+file.name;
        //         },
        //         acceptedFiles: ".jpeg,.jpg,.png,.gif",
        //         addRemoveLinks: true,
        //         timeout: 5000,
        //         thumbnailWidth: 640,
        //         thumbnailHeight: 480,
        //         thumbnailMethod: "contain",
        //         dictRemoveFile: 'Remove Image',
        //         dictFileTooBig: 'Image is larger than 5MB',
        //         dictDefaultMessage: '<br><br>Click here to upload or Drag and Drop<br><br>Property Image 10 ',
        //         renameFile: function (file) {
        //             name10 = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        //             return name10;
        //         },
        //         init: function(){
        //
        //             if(image10 != ""){
        //                 name10 = image10;
        //                 var mockFile = { name: image10, size: 12.3, type: 'image/jpeg' };
        //                 this.emit("addedfile", mockFile);
        //                 this.emit("thumbnail", mockFile, path + image10);
        //                 //this.createThumbnailFromUrl(file, fullpath, callback, crossOrigin);
        //                 this.emit("complete", mockFile);
        //             }
        //
        //             this.on("maxfilesexceeded", function(file){
        //                 alert("You are only allowed to upload 1 Image!");
        //                 this.removeFile(file);
        //             });
        //
        //             this.on("sending", function(file, xhr, formData){
        //                 formData.append('sortorder', 10);
        //                 formData.append('duration', 5);
        //                 formData.append('image10', name10);
        //             });
        //
        //             this.on("removedfile", function (file) {
        //
        //                 ctr_uploaded_images--;
        //                 duration_seconds = duration_seconds - 5;
        //
        //                 var date = new Date(null);
        //                 date.setSeconds(duration_seconds); // specify value for SECONDS here
        //                 var timeString = date.toISOString().substr(11, 8);
        //
        //                 $("#duration").text(timeString);
        //                 $("#num_images").val(ctr_uploaded_images);
        //
        //                 $.ajax({
        //                     headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
        //                     type: 'GET',
        //                     url: '/deleteStandardImage/' + name10 + '/10',
        //                     dataType: 'json',
        //
        //                     success: function(result){
        //
        //                     }
        //                 });
        //             });
        //
        //             this.on("addedfile", function(file) {
        //                 ctr_uploaded_images++;
        //                 duration_seconds = duration_seconds + 5;
        //             });
        //         },
        //         success: function(file, response)
        //         {
        //             var date = new Date(null);
        //             date.setSeconds(duration_seconds); // specify value for SECONDS here
        //             var timeString = date.toISOString().substr(11, 8);
        //
        //             $("#duration").text(timeString);
        //             $("#num_images").val(ctr_uploaded_images);
        //
        //             console.log(response);
        //         },
        //         error: function(file, response)
        //         {
        //             return false;
        //         }
        //     };



    </script>

@stop

