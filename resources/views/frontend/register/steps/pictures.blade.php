<h3 style="padding-top: 20px">
    <div class="d-flex flex-row">
        <div class="register-icon r-i-pictures mb-2"></div>
        <div class="align-self-center font25 pl-3 font-t-ms">Profile Photo</div>
    </div> 
</h3>
<div class="row">
<<<<<<< HEAD

  <div class="col reg-step-link">
        <div class="text-center py-2 pr-3">
          <link href="{{ asset('assets/vendors/dropzone/css/dropzone4.css') }}" rel="stylesheet" type="text/css" />
            <form action="{{ route('uploadMainImage') }}" class="dropzone" id="myDropzone" enctype="multipart/form-data">
              {{ csrf_field() }}
                <!-- <img id="image1" src="{{ asset('storage/app/public/register/step-needed.jpg') }}"> -->
                <div class="fallback">
                    <input id="mainImage" name="mainImage" type="file" class="FileUpload"/>
                </div>
            </form>
        </div>  
  </div> 

  <!-- @if(!empty($template['main_image']) || $template['main_image'] != null)
    <div class="col-sm reg-step-link">
      <img id="image1" src="{{ $path . $template['main_image'] }}">
          <div class="text-right py-2 pr-3">
          <div class="uploadOverlayLogo">
            <input type='file' id="mainImage" name="mainImage" class="FileUpload"/>
            Add/Change <span>+</span></div>
=======
  @if(!empty($template['main_image']) || $template['main_image'] != null)
    <div class="col-sm reg-step-link">
      <!-- <img id="image1" src="{{ $path . $template['main_image'] }}" width="460" height="235" style='border: 10px solid grey; margin-bottom: 10px;'> -->
      <img id="image1" src="{{ $path . $template['main_image'] }}">
          <div class="text-right py-2 pr-3">
          <input type='file' id="mainImage" name="mainImage" class="FileUpload"/>
          <div class="uploadOverlayLogo">Add/Change <span>+</span></div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                {{--<a href="">Add/Change <span>+</span></a>--}}
          </div>
                            
    </div>
  @else
    <div class="col reg-step-link">
<<<<<<< HEAD
      <img id="image1" src="{{ asset('storage/app/public/register/step-needed.jpg') }}">
          <div class="text-right py-2 pr-3">
          <input type='file' id="mainImage" name="mainImage" class="FileUpload"/>
          <div class="uploadOverlayLogo">Add/Change <span>+</span></div>
                {{--<a href="">Add/Change <span>+</span></a>--}}
          </div>
    </div>
  @endif -->


    <div class="col-sm align-bottom" style="padding-top: 5px;">
=======
      <img id="image1" src="{{ asset('storage/register/step-needed.jpg') }}">
          <div class="text-right py-2 pr-3">
          <input type='file' id="mainImage" name="mainImage" class="FileUpload"/>
          <div class="uploadOverlay4">Add/Change <span>+</span></div>
                {{--<a href="">Add/Change <span>+</span></a>--}}
          </div>
    </div>
  @endif
    <div class="col-sm align-bottom">
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
          <b>ADD YOUR PROFILE PHOTO</b>
          <p>Please upload your promotional head shot portrait
                photo here. This will be used in the framed versions
                of your videos.</p>
<<<<<<< HEAD
          <p class="mb-0">Recommended format:</p>
=======
          <p>Recommended format:</p>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
          <p>Portrait: 720 px wide x 1080 px height pixels .jpg
                or .png (Minimum 576 px width x 864 px height)</p>
    </div>

</div>

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
                       $('.dropzone').css('background-image', 'none');
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
                        $('.dropzone').css('background-image', 'url("./../images/profile-uploader.jpg")');
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
                    $('.dropzone').css('background-image', 'none');
                }
            };
        }();

</script>  