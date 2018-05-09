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

            <form id="frmStep1" method="POST" action="{{ route('account-video-system-processStep1')}}">
                {{ csrf_field() }}
                <div class="row video-system-1">
                    <div class="col-sm-5 p-0">
                         <div class="row">
                            <div class="col-sm pl-0"><h3>Story Board</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                         </div>
                         <div class="story-board-block pl-3 pr-3" >
                             <button class="btn" onclick="event.preventDefault();"><i class="standard-video sv-save"></i>SAVE</button>
                             <div id="storyContent">
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
                             </div>
                             <div id="moveStoryContent"></div>
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
                                            <input type="file" id="image_files" accept=".jpg,.jpeg,.png,.gif" multiple>
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

        var images = [];

        $("#image_files").change(function(){


            //readURLImage(this);

            {{--var total_file=document.getElementById("image_files").files.length;--}}
            {{--console.log(" the total files uploaded is ", total_file);--}}
            {{--for(var i=0;i<total_file;i++)--}}
            {{--{--}}
                {{--<li>--}}
                {{--<div><img src="" width="183" height="100"/></div>--}}
                {{--<div id="img_{{ $i }}" width="183" height="100" style="margin-top: 100px"></div>--}}
                {{--<div class="my-account-subcription step-three-register">--}}
                {{--<div class="custom-control custom-checkbox standard">--}}
                {{--<input type="checkbox" class="custom-control-input" name="image_{{$i}}" id="customCheck1">--}}
                {{--<label class="custom-control-label" for="customCheck1"></label>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--$('#img_'+i).append("<img src='"+URL.createObjectURL(event.target.files[i])+"' width='183px' height='100px'>");--}}

                {{--// console.log("the file uploaded is ", event.target.files[i]);--}}
                {{--// $('#img_'+i).append("<img src='"+URL.createObjectURL(event.target.files[i])+"' width='183px' height='100px'><br>");--}}
                 {{--$('#image_preview').append("<li><input type='textbox' id='customCheck1'></li>");--}}
                {{--// $('#img_'+i).attr('src', URL.createObjectURL(event.target.files[i]));--}}
                {{--// $('#img_'+i).attr('width', '183px');--}}
                {{--// $('#img_'+i).attr('height', '100px');--}}
            {{--}--}}


            //new codes
            $('#image_preview').hide();
            var fileCount = $(this)[0].files;
            var input = document.getElementById('image_files');
            var userid = document.getElementById('userid');
            console.log("the number of files selected is ", fileCount.length);
            var ctr = 0;
            $($(this)[0].files).each(function () {
                var file = $(this);
                console.log("the file is ", file);
                var fname = file[ctr].name;

                $.ajax({
                    url: "/account/preferences/video-system/storePics/" + fname,
                    type: "GET",
                    // dataType: "json",
                    // data: fname,
                    //processData: false,
                    //contentType: false,
                    success: function(res) {
                        console.log("the value of res is ", res);
                    },
                    error: function(res) {}
                });


                // var reader = new FileReader();
                // reader.onload = function (e) {
                //
                //     console.log(input.files[ctr].name);
                //     // for(i=0; i<fileCount; i++){
                //     //     $('#img_'+i).attr('src', e.target.result);
                //     // }
                //     $('#image_preview1').add();
                //     $('#image_preview1').append("<li><div><img src='"+e.target.result+"' width='183px' height='100px'></div>" +
                //         "<div class='my-account-subcription step-three-register'>" +
                //         "<div class='custom-control custom-checkbox standard'>" +
                //         "<input type='checkbox' class='custom-control-input' name='img[]' value='" + e.target.result + '|' + input.files[ctr].name + "' id='chkimg" + ctr + "' checked>" +
                //         "<label class='custom-control-label' for='chkimg" + ctr + "'></label>" +
                //         "</div></div></li>");
                //
                //     images.push(e.target.result);
                //     ctr = ctr + 1;
                // }
                // reader.readAsDataURL(file[0]);

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
            //$('#selectedImages').val(JSON.stringify(files_arr));
        });

    });

</script>
