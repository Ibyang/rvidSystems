@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

  <section class="content-header">
    <!--section starts-->
    <h1>Upload Video Files</h1>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">
          <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
        </a>
      </li>
      <li class="active">Upload Video File</li>
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
              <i class="livicon" data-name="upload-alt" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></i> Video File Drop Zone
            </h3>
          </div>
          <div class="panel-body" style="padding:0px !important;">
            <div class="col-md-12" style="padding:30px;">
              <form action="target" class="dropzone" id="myDropzone">
                <div class="fallback">
                  <input name="file" type="file" multiple />
                </div>
              </form>
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
          return {
              //main function to initiate the module
              init: function() {
                  Dropzone.options.myDropzone = {
                      init: function() {
                          this.on("success", function(file, responseText) {
                              var obj = jQuery.parseJSON(responseText);
                              file.id = obj.id;
                              file.filename = obj.filename;
                              // Create the remove button
                              var removeButton = Dropzone.createElement("<button style='margin: 10px 0 0 14px;'> Remove file</button>");

                              // Capture the Dropzone instance as closure.
                              var _this = this;

                              // Listen to the click event
                              removeButton.addEventListener("click", function(e) {
                                  // Make sure the button click doesn't submit the form:
                                  e.preventDefault();
                                  e.stopPropagation();

                                  $.ajax({
                                      url: "file/delete",
                                      type: "DELETE",
                                      data: {
                                          "id": file.id,
                                          "_token": '{{ csrf_token() }}'
                                      }
                                  });
                                  // Remove the file preview.
                                  _this.removeFile(file);
                              });

                              // Add the button to the file preview element.
                              file.previewElement.appendChild(removeButton);

                          });

                      }
                  }
              }
          };
      }();
      jQuery(document).ready(function() {
          FormDropzone.init();
      });
  </script>
  <!-- end of page level js -->

@stop