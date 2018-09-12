<h3>
    <div class="d-flex flex-row">
        <div class="register-icon r-i-logo mb-2"></div>
        <div class="align-self-center font25 pl-3 font-t-ms">Logo</div>
    </div> 
</h3>
<div class="row">
    <div class="col reg-step-link">
        <div class="text-center py-2 pr-3">
            <link href="{{ asset('assets/vendors/dropzone/css/dropzone5.css') }}" rel="stylesheet" type="text/css" />
            <form action="{{ route('uploadLogoImage') }}" class="dropzone" id="myDropzoneLogo" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!-- <img id="logoImage" src="{{ asset('storage/app/public/register/step-needed.jpg') }}"> -->
                <div class="fallback">
                    <input type='file' id="logoImage" name="logoImage" class="FileUpload"/>
                </div>

            </form>

        </div>
    </div>


    <!-- @if(!empty($template['logo']) || $template['logo'] != null)
        <div class="col-sm reg-step-link">
            <img id="logo" src="{{ $path . $template['logo'] }}">
            <div class="text-right py-2 pr-3">
                <input type='file' id="logoImage" name="logoImage" class="FileUpload"/>
                <div class="uploadOverlayLogo">Add/Change <span>+</span></div>
                {{--<a href="">Add/Change <span>+</span></a>--}}
            </div>
        </div>
    @else
        <div class="col-sm reg-step-link">
            <img id="logo" src="{{ asset('storage/app/public/register/step-blank.jpg') }}">
            <div class="text-right py-2 pr-3">
                <div class="uploadOverlayLogo">
                    <input type='file' id="logoImage" name="logoImage" class="FileUpload"/>
                    Add/Change <span>+</span></div>
                {{--<a href="">Add/Change <span>+</span></a>--}}
            </div>
        </div>
    @endif -->

    <div class="col-sm align-bottom" style="padding-top: 5px;">
            <b>ADD YOUR AGENCY LOGO</b>
            <p>Recommended - 2000 px width <br>Minimum 1000 px)</p>
        
            <p>Maximum 2mb upload file size</p>
    </div>
</div>                 
        
<script>

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
                       $('.dropzone').css('background-image', 'none');
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
                        $('.dropzone').css('background-image', 'url("./../images/logo-uploader.jpg")');
                        // $('.dropzone').css('background-image', 'none');
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
                    $('.dropzone').css('background-image', 'none');
                    console.log("the file name is ", logoImage);

                }
            };
        }();


</script>                  