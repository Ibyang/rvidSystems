@extends('frontend.layouts.main')

    <!-- <link href="{{ asset('assets/vendors/dropzone/css/dropzone3.css') }}" rel="stylesheet" type="text/css" /> -->

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
                <div class="row m-r-l">
                    <div class="col-sm-10">
                        <div class="d-flex flex-column">
                            <div><input type="text" class="form-control" name="address1" placeholder="Address 1" required></div>
                            <div class="my-3"><input type="text" class="form-control" name="address2" placeholder="Address 2" required></div>
                            <div><input type="text" class="form-control" name="address3" placeholder="Address 3" required></div>
                            <div class="mt-3">
                                 <div class="row m-r-l">
                                     <div class="col-sm"><input type="text" class="form-control" name="suburb" placeholder="Suburb" required></div>
                                     <div class="col-sm"><input type="text" class="form-control" name="state" placeholder="State" required></div>
                                     <div class="col-sm"><input type="text" class="form-control" name="postcode" placeholder="Post Code" required></div>
                                 </div>
                            </div>
                        </div>
                        <h3 class="my-4">Property Features</h3>
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
                        <h5 class="color-414142 my-3"><b>Upload Property Description and Details</b></h5>
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
        $(document).ready(function() {

            $('#btnSave').click(function() {
                //alert('I am clicked...');
                $('#frmDirectPost').submit();
            });

         });
    </script>

@stop