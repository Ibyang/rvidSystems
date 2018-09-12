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
            <h3 class="my-account-title">Direct Upload</h3>
            <form method="POST" action="{{ route('direct-post-details') }}" id="frmDirectPost" enctype="multipart/form-data">
            {{ csrf_field() }} 
                <h3 class="font-t-ms font16 color-424244"><b>Property Address</b></h3> 
                <div class="row m-r-l">
                    <div class="col-sm-10">
                        <div class="d-flex flex-column">
                            <div><input type="text" class="form-control" name="address1" placeholder="Address 1" required></div>
                            <div class="my-3"><input type="text" class="form-control" name="address2" placeholder="Address 2" required></div>
                            <div>
                                 <div class="row m-r-l my-0">
                                     <div class="col-sm"><input type="text" class="form-control" name="suburb" placeholder="Suburb" required></div>
                                     <div class="col-sm"><input type="text" class="form-control" name="state" placeholder="State" required></div>
                                     <div class="col-sm-3"><input type="text" class="form-control" name="postcode" placeholder="Post Code" required></div>
                                 </div>
                            </div>
                        </div>
                        <h3 class="font-t-ms font16 color-424244 my-3"><b>Property Features</b></h3>
                        <div class="d-flex flex-column">
                            <div>
                                <div class="row m-r-l">
                                    <div class="col-sm">
                                        <div class="d-flex flex-row">
                                            <div class="bg-eae px-2 pt-2"><i class="d-u-icon"></i></div>
                                            <input type="text" name="num_bedroom" class="form-control b-radius-0 ml-2 w-100" placeholder="Bedroom">
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                         <div class="d-flex flex-row">
                                             <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-bat"></i></div>
                                             <input type="text" name="num_bathrooms" class="form-control b-radius-0 ml-2 w-100" placeholder="Bathrooms">
                                         </div>
                                    </div>
                                    <div class="col-sm">
                                         <div class="d-flex flex-row">
                                             <div class="bg-eae p-2"><i class="d-u-icon d-u-icon-car"></i></div>
                                             <input type="text" name="num_cars" class="form-control b-radius-0 ml-2 w-100" placeholder="Cars">
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="register-form">
                                 <select name="property_type" class="form-control">
                                    <option disabled selected>Property Type</option>
                                    <option value="House">House</option>
                                    <option value="Unit">Unit</option>
                                    <option value="Townhouse">Townhouse</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Duplex">Duplex</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Rural">Rural</option>
                                 </select>
                            </div>
                        </div>
                        <h5 class="color-414142 my-3 font-t-ms"><b>Upload Property Description and Details</b></h5>
                    </div>
                </div>    
                <div class="direct-upload-3 d-flex flex-column p-4 mb-4">
                            <div class="color-666 text-justify">This information is used to assist our video compilers choose professional voice over statements that best suit your property listing. We need the
                            property description and information that tells us all about the features and benefits.</div>
                            <div class="pt-2">
                                <div class="row m-r-l">
                                    <div class="col-sm">
                                        <div class="d-flex flex-column col-10 p-0">
                                            <div class="pb-3">
                                                <input type="file" name="property_attach" accept="application/msword, application/pdf">
                                                <button class="btn btn-primary b-radius-0 w-100 py-2"><i class="standard-video sv-browse"></i> Browse</button>
                                            </div>
                                            <div><i class="standard-video sv-pdf"></i> Word or PDF Format</div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="story-board-block h-100">
                                             <div>
                                                <input type="file" multiple>
                                             </div>
                                             <p class="color-666 mb-0">Drag and Drop File Here <span class="c-6600cc"><b>+</b></span></p>
                                        </div>
                                    </div>
                              </div>
                            </div>
                </div>
              </form>  
               
               <link href="{{ asset('assets/vendors/dropzone/css/dropzone3.css') }}" rel="stylesheet" type="text/css" />

<<<<<<< HEAD
                <h5 class="color-414142 my-3 font-t-ms"><b>Upload Your Pictures</b></h5> 
=======
               <h5 class="color-414142 my-3"><b>Upload Your Pictures</b></h5>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
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
                    <div class="d-flex align-content-stretch flex-wrap px-3">
                        <div class="mx-2 mb-2">
                            <div class="story-board-block" style="width: 585px; height: auto; font-size: 16px;">
                                 <form method="POST" action="{{ route('uploadDirectImage') }}" enctype="multipart/form-data" class="dropzone" id="dropzone1">
                                        {{ csrf_field() }}
                                        <span>Click here to upload<br> or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Property Images</span><br>
                                        <div class="fallback">
                                            {{--<input id="image_{{ $ctr }}" name="image_{{ $ctr }}" type="file" class="FileUpload"/>--}}
                                            <input name="file" type="file" class="FileUpload"/>
                                        </div>
                                    </form>
                             </div>
                        </div>
                        
                    </div>
               </div>
               <div class="d-flex flex-row-reverse my-4">
                    <div><button class="px-5 btn btn-primary bg-6600cc btn-no-border b-radius-7 w-100 py-2" id="btnSave"><i class="standard-video sv-save"></i> <b>SAVE</b></button></div>
               </div>
            <!-- </form> -->
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

            $('#btnSave').click(function() {
                //alert('I am clicked...');
                if(count_images < 10)
                    alert("You are required to upload 10 images...");
                else
                    $('#frmDirectPost').submit();
            });

        });

        
        var count_images;
        
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
                            //$("#duration_bottom").html(timeString);
                            //$("#num_images").val(count_images);


                            $.ajax({
                                headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                                type: 'GET',
<<<<<<< HEAD
                                url: './rvidSystems/deleteDirectImage/' + name1 + '/1',
=======
                                url: '/deleteDirectImage/' + name1 + '/1',
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
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

                            console.log("the name of file uploaded is ", name1);

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
                        //$("#duration_bottom").html(timeString);
                        //$("#num_images").val(count_images);
                        console.log("the filename uploaded is " + file.name);
                    },
                    error: function(file, response)
                    {
                        console.log("the value of response is " , response)
                        return false;
                    }
                };


    </script>

@stop