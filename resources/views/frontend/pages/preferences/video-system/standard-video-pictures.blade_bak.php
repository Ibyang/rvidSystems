@extends('frontend.layouts.main')

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

            <form id="frmStep1" method="POST" action="{{ route('account-video-system-processStep1')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row video-system-1">
                    <div class="col-sm-5 p-0">
                         <div class="row">
                            <div class="col-sm pl-0"><h3>Story Board</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                         </div>
                         <div class="story-board-block pl-3 pr-3" >
                             <button class="btn" id="btnSaveStoryboard" onclick="event.preventDefault();"><i class="standard-video sv-save"></i>SAVE</button>

                             <div id="storyContent">
                                 @if(count($pics) > 0)
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
                                         <select name="transition" style="margin-bottom: 10px;">
                                             <option value="Fade" {{ $pic['effect_style'] === 'Fade' ? 'selected' : '' }}>Fade</option>
                                             <option value="Slide" {{ $pic['effect_style'] === 'Slide' ? 'selected' : '' }}>Slide</option>
                                             <option value="Flip" {{ $pic['effect_style'] === 'Flip' ? 'selected' : '' }}>Flip</option>
                                             <option value="Wipe" {{ $pic['effect_style'] === 'Wipe' ? 'selected' : '' }}>Wipe</option>
                                             <option value="Split" {{ $pic['effect_style'] === 'Split' ? 'selected' : '' }}>Split</option>
                                             <option value="Zoom" {{ $pic['effect_style'] === 'Zoom' ? 'selected' : '' }}>Zoom</option>
                                             <option value="Page Peel" {{ $pic['effect_style'] === 'Page Peel' ? 'selected' : '' }}>Page Peel</option>
                                         </select>
                                     @endforeach
                                 @endif
                             </div>
                         </div>

                         <div class="text-right">
                             <a class="c0066ff"><b>Add +</b></a>
                         </div>
                    </div>
                    <div class="col-sm-7 pr-0">
                        <div class="row">
                            <div class="col-sm pl-0"><h3>Open Pictures</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                        </div>
                        <div class="video-system-pic-block h-100">
                                <div class="row mt-1">
                                    <div class="col-sm pr-1 pl-1">
                                        {{--<form method="POST" action="{{ route('account-video-system-storePics') }}" id="frmImages" enctype="multipart/form-data">--}}
{{--                                            {{ csrf_field() }}--}}
                                            <input type="file" name="image_files[]" id="image_files" accept=".jpg,.jpeg,.png,.gif" multiple>
                                            <button class="btn" id="btnBrowse"><i class="standard-video sv-browse"></i>Browse</button>
                                        {{--</form>--}}
                                    </div>
                                    <div class="col-sm pr-1 pl-1">
                                        <button class="btn" id="btnStoryboard" onclick="event.preventDefault();"><i class="standard-video sv-move"></i>Move Storyboard</button>
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
                                </ul>
                                <ul class="video-system-ul" id="image_preview1">
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="float-r mt-70 mb-5">
                    <input type="hidden" name="userid" id="userid" value="{{ $userid }}">
                    <input type="hidden" name="selectedImages" id="selectedImages">
                    <button class="btn btn-primary" id="btnStep1Save">SAVE : Next Step 2<i class="arrow-right"></i></button>
                </div>
                <div class="clear"></div>
            </form>
        </div>
    </div>
</div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

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

                    console.log(input.files[ctr].name);
                    // for(i=0; i<fileCount; i++){
                    //     $('#img_'+i).attr('src', e.target.result);
                    // }
                    $('#image_preview1').add();
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

            });

            // $('#frmImages').submit();

        });

        $('#btnStoryboard').click(function() {

           $('#image_preview1').hide();
           //$('#image_preview').add();
           $('#image_preview').show();
           var files_arr = [];

           var searchIDs = $('input:checked').map(function() {
               return $(this).val();
           });
           //console.log(searchIDs.get());
            var array_cnt = searchIDs.length;

            $('#storyContent').remove();
            //$('#moveStoryContent').empty();
            for(i=0; i<array_cnt; i++){
                var result = searchIDs[i].split('|');
                var src = result[0];
                var filename = result[1];
                files_arr.push(filename);
                console.log("the value of src is ", src);
                console.log("the value of filename is ", filename);

                $('#moveStoryContent').append("<input type='file' name='images[]' value='" + filename + "' multiple>" +
                                              "<img src='"+ src +"' width='268px' height='110px' style='border: 10px solid #ededed; margin-bottom: 10px;'>" +
                                              "<select name='transition[]' style='margin-bottom: 10px;'>" +
                                              "<option value='Fade'>Fade</option>" +
                                              "<option value='Slide'>Slide</option>" +
                                              "<option value='Flip'>Flip</option>" +
                                              "<option value='Wipe'>Wipe</option>" +
                                              "<option value='Split'>Split</option>" +
                                              "<option value='Zoom'>Zoom</option>" +
                                              "<option value='Page Peel'>Page Peel</option>" +
                                              "</select>");
            }
            $('#selectedImages').val(files_arr);
        });

        $('#btnSaveStoryboard').click(function () {
            $('#frmStep1').submit();
        })

    });

</script>
