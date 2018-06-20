@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

  <section class="content-header">
    <!--section starts-->
    <h1>Upload Image Files</h1>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">
          <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
        </a>
      </li>
      <li class="active">Upload Image File</li>
    </ol>
    </ol>
  </section>
  <!--section ends-->
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <!-- First Basic Table strats here-->
        <div class="panel panel-info" style="overflow:auto;">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="livicon" data-name="upload-alt" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></i> Image File Uploader
            </h3>
          </div>
          <div class="panel-body" style="padding:0px !important;">
            <div class="col-md-12" style="padding:30px;">
              <form action="{{ route('uploadImage') }}" class="dropzone" id="myDropzone" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="fallback">
                  <input name="file" type="file" multiple />
                </div>
              </form><br>
              <div id="backdiv" style="display: none; text-align: center">
                    <a href="{{ route('image') }}">All Image Files Uploaded.... Click Back to Image Listing</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

  <script type="text/javascript" src=" {{ asset('assets/vendors/dropzone/js/dropzone.js') }}"></script>
  <script>
      var FormDropzone = function() {
          var name="";
          Dropzone.options.myDropzone = {
              uploadMultiple: true,
              parallelUploads: 10,
              paramName: 'file',
              maxFilesize: 5, // MB
              maxFiles: 20,
              addRemoveLinks: true,
              dictRemoveFile: 'Remove Image',
              dictFileTooBig: 'Image is larger than 5MB',
              dictDefaultMessage: 'Drag Here to Upload',
              dictInvalidFileType: 'You can\'t upload files of this type.',
              acceptedFiles: ".jpeg,.jpg,.png,.gif",
              timeout: 10000,
              renameFile: function (file) {
                  name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
                  return name;
              },
              init: function() {

                  this.on("removedfile", function (file) {
                      $.ajax({
                          headers:{ 'X-CSRF-Token':$('input[name="_token"]').val()}, //passes the current token of the page to image url
                          type: 'GET',
                          url: '/imageDelete/' + file.customName,
                          dataType: 'json',
                      });
                  });

                  this.on("success", function(file, responseText) {
                      //
                      var divbutton = document.getElementById("backdiv");
                      divbutton.style.display = "block";
                  });


              },
              success: function (file, done) {
                  file["customName"] = file.name;
              }
          };
      }();
      // jQuery(document).ready(function() {
      //
      //     FormDropzone.init();
      // });
  </script>
  <!-- end of page level js -->

@stop