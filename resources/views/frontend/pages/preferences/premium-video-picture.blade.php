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
            <h3 class="my-account-title">Premium Video Picture Tool</h3>
            <table class="table-action mb-4" cellpadding="0" cellspacing="0" width="100%">
                <tr class="bg-eae">
                    <td><b>Video #</b></td>
                    <td><b>Address</b></td>
                </tr>
                <tr>
                    <td>#<b>{{ $videoid }}</b></td>
                    <td>
                        <div class="d-flex">
                          <div>{{ $videoAddress }}</div>
                          <div class="ml-auto"><a href=" {{ route('account-video-tracker') }} ">Return My Tracker</a></div>
                        </div>
                    </td>
                </tr>
            </table>
            <form id="frmStep1" method="POST" action="{{ route('account-premium-video-system-processStep1')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row video-system-1">
                    <div class="col-sm-7 pl-0">
                        <div class="row">
                            <div class="col-md-auto pl-0"><h3>Open Pictures</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                        </div>
                        <div class="video-system-pic-block h-100">
                                <div class="row mt-1">
                                    <div class="col-sm pr-1 pl-1">
                                        <input type="file" name="image_files[]" id="image_files" accept=".jpg,.jpeg,.png,.gif" multiple>
                                        <button class="btn text-left"><i class="standard-video sv-browse"></i>Browse</button>
                                    </div>
                                    <div class="col-sm pr-1 pl-1">
                                        <button class="btn text-left" id="btnStoryboard" onclick="event.preventDefault();"><i class="standard-video sv-save"></i>Save Selection</button>
                                    </div>
                                </div>
                                <ul class="video-system-ul" id="image_preview">
                                    @for ($i=0; $i<10; $i++)
                                        <li>
                                            <div><img id="img_{{ $i }}" src="{{ asset('storage/register/step-blank.jpg') }}" width="183" height="100"/></div>
                                            <div class="my-account-subcription step-three-register">
                                                <div class="custom-control custom-checkbox standard">
                                                    <input type="checkbox" class="custom-control-input" name="image_1" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                            </div>
                                        </li>
                                    @endfor
                                    <!-- <li>
                                        <div class="bg-ed h-100"> &nbsp; </div>
                                        <div class="my-account-subcription step-three-register">
                                            <div class="custom-control custom-checkbox standard">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="bg-ed h-100"> &nbsp; </div>
                                        <div class="my-account-subcription step-three-register">
                                            <div class="custom-control custom-checkbox standard">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2"></label>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5 p-0">
                             <div class="row">
                                <div class="col-sm pl-0"><h3>Story Board</h3></div>
                                <div class="col-sm pr-0"><a href="">What is this?</a></div>
                             </div>
                             <div class="story-board-block pl-3 pr-3">
                                <!--  <button class="btn text-left pl-4">Save Storyboard</button> -->
                                 <button class="btn" id="btnSaveStoryboard" onclick="event.preventDefault();"><i class="standard-video sv-save"></i>Save Storyboard</button>
                                 <!-- <div>
                                      <input type="file" multiple>
                                      <p>Add or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Picture 1</p>
                                      <select name="">
                                            <option>Fade</option>    
                                      </select>
                                 </div>
                                 <div class="my-2">
                                      <input type="file" multiple>
                                      <p>Add or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Picture 2</p>
                                      <select name="">
                                            <option>Fade</option>    
                                      </select>
                                 </div> -->
                                 <div id="storyContent">
                                    @if(count($pics) == 0)
                                        <input type="file" multiple>
                                        <p>Add or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Picture</p>
                                        <select name="transition" style="margin-bottom: 10px;">
                                            <option value="Fade">Fade</option>
                                            <option value='Slide'>Slide</option>
                                            <option value='Flip'>Flip</option>
                                            <option value='Wipe'>Wipe</option>
                                            <option value='Split'>Split</option>
                                            <option value='Zoom'>Zoom</option>
                                            <option value='Page Peel'>Page Peel</option>
                                        </select>
                                    @endif
                                </div>
                                <div id="moveStoryContent">
                                    @if(count($pics) > 0)
                                        @foreach($pics as $pic)
                                            <input type="file" multiple>
                                            @if($pic['new_filename'] != NULL)
                                                <img src="{{ $path2 . $pic['new_filename'] }}" width='268px' height='110px' style='border: 10px solid #ededed; margin-bottom: 10px;'>
                                            @else
                                                <img src="{{ $path2 . $pic['old_filename'] }}" width='268px' height='110px' style='border: 10px solid #ededed; margin-bottom: 10px;'>
                                            @endif
                                            {{--<p>Add or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Picture</p>--}}
                                            <select name="transition[]" style="margin-bottom: 10px; width: 130px">
                                                <option value="Fade" {{ $pic['effect_style'] === 'Fade' ? 'selected' : '' }}>Fade</option>
                                                <option value="Slide" {{ $pic['effect_style'] === 'Slide' ? 'selected' : '' }}>Slide</option>
                                                <option value="Flip" {{ $pic['effect_style'] === 'Flip' ? 'selected' : '' }}>Flip</option>
                                                <option value="Wipe" {{ $pic['effect_style'] === 'Wipe' ? 'selected' : '' }}>Wipe</option>
                                                <option value="Split" {{ $pic['effect_style'] === 'Split' ? 'selected' : '' }}>Split</option>
                                                <option value="Zoom" {{ $pic['effect_style'] === 'Zoom' ? 'selected' : '' }}>Zoom</option>
                                                <option value="Page Peel" {{ $pic['effect_style'] === 'Page Peel' ? 'selected' : '' }}>Page Peel</option>
                                            </select>
                                            <span style="float: right">Remove Image</span>
                                        @endforeach
                                    @endif
                                </div>   
                             </div>
                        </div>
                </div>
                    <input type="hidden" name="userid" id="userid" value="{{ $userid }}">
                    <input type="hidden" name="pics" id="pics" value=" {{ $pics }}">
                    <input type="hidden" name="selectedImages" id="selectedImages">
            </form>
        </div>
    </div>
</div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">

        $(document).ready(function() {

            $('#storyContent').show();

            var images = [];

            $("#image_files").change(function(){

                //new codes
                $('#image_preview').hide();
                var fileCount = $(this)[0].files;
                var input = document.getElementById('image_files');
                var userid = document.getElementById('userid');
                var ctr = 0;

                $($(this)[0].files).each(function () {
                    var file = $(this);
                    var reader = new FileReader();
                    reader.onload = function (e) {

                        console.log("there is an image uploaded....");
                        console.log(input.files[ctr].name);
                        // for(i=0; i<fileCount; i++){
                        //     $('#img_'+i).attr('src', e.target.result);
                        // }
                        $('#image_preview1').show();
                        $('#image_preview1').append("<li><div><img src='"+e.target.result+"' width='183px' height='100px'></div>" +
                            "<div class='my-account-subcription step-three-register'>" +
                            "<div class='custom-control custom-checkbox standard'>" +
                            "<input type='checkbox' class='custom-control-input' name='img[]' value='" + e.target.result + '|' + input.files[ctr].name + "' id='chkimg" + ctr + "' checked>" +
                            "<label class='custom-control-label' for='chkimg" + ctr + "'></label>" +
                            "</div></div></li>");

                        images.push(e.target.result);
                        ctr = ctr + 1;
                    }
                    reader.readAsDataURL(file[0]);
                    console.log("the value of file is ", file[0]);

                });

                // $('#frmImages').submit();

            });

            $('#btnStoryboard').click(function() {

                $('#image_preview1').hide();
                //$('#image_preview').add();
                $('#image_preview').show();
                // $('#image_preview').empty();
                var files_arr = [];

                var searchIDs = $('input:checked').map(function() {
                    return $(this).val();
                });
                //console.log(searchIDs.get());
                var array_cnt = searchIDs.length;

                // $('#storyContent').remove();
                $('#storyContent').hide();
                //$('#moveStoryContent').empty();
                for(i=0; i<array_cnt; i++){
                    var result = searchIDs[i].split('|');
                    var src = result[0];
                    var filename = result[1];
                    files_arr.push(filename);
                    console.log("the value of src is ", src);
                    console.log("the value of filename is ", filename);

                    $('#moveStoryContent').append("<div id='divImg'><input type='file' name='images[]' value='" + filename + "' multiple>" +
                        "<img src='"+ src +"' width='268px' height='110px' style='border: 10px solid #ededed; margin-bottom: 10px;'>" +
                        "<select name='transition[]' style='margin-bottom: 10px; width: 130px'>" +
                        "<option value='Fade'>Fade</option>" +
                        "<option value='Slide'>Slide</option>" +
                        "<option value='Flip'>Flip</option>" +
                        "<option value='Wipe'>Wipe</option>" +
                        "<option value='Split'>Split</option>" +
                        "<option value='Zoom'>Zoom</option>" +
                        "<option value='Page Peel'>Page Peel</option>" +
                        "</select>" +
                        "<div style='float: right; font-size: medium' id='removeDiv'>Remove Image</div></div>");
                }
                $('#selectedImages').val(files_arr);
            });


            $('#btnSaveStoryboard').click(function () {
                $('#frmStep1').submit();
            });


            $('#close-div').on('click', function () {
                alert("hello world");
                //$("#divImg").remove();
                // $(this).parent().parent().remove();
            });

        });

    </script>
@stop    
