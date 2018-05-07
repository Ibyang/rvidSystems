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

            <form method="POST" action="">
                {{ csrf_field() }}
                <div class="row video-system-1">
                    <div class="col-sm-5 p-0">
                         <div class="row">
                            <div class="col-sm pl-0"><h3>Story Board</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                         </div>
                         <div class="story-board-block pl-3 pr-3" >
                             <button class="btn"><i class="standard-video sv-save"></i>SAVE</button>
                             <input type="file" multiple>
                             <p>Add or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Picture</p>
                             <select name="" style="margin-bottom: 10px;">
                                <option>Fade</option>
                             </select>
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
                                        <input type="file" id="image_files" accept=".jpg,.jpeg,.png,.gif" multiple>
                                        <button class="btn"><i class="standard-video sv-browse"></i>Browse</button>
                                    </div>
                                    <div class="col-sm pr-1 pl-1">
                                        <button class="btn"><i class="standard-video sv-move"></i>Move Storyboard</button>
                                    </div>
                                </div>
                                <ul class="video-system-ul" id="image_preview">
                                    {{--@for ($i=0; $i<10; $i++)--}}
                                        {{--<li>--}}
                                            {{--<div><img id="img_{{ $i }}" src="" width="183" height="100"/></div>--}}
                                            {{--<img id="img_{{ $i }}" width="183" height="100" style="margin-top: 100px"></img>--}}
                                            {{--<div class="my-account-subcription step-three-register">--}}
                                                {{--<div class="custom-control custom-checkbox standard">--}}
                                                    {{--<input type="checkbox" class="custom-control-input" name="image_{{$i}}" id="customCheck{{$i}}">--}}
                                                    {{--<label class="custom-control-label" for="customCheck{{$i}}"></label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    {{--@endfor--}}
                                    <li>
                                        <div><img src="" width="183" height="100"/></div>
                                        <div class="img-block" width="183" height="100"></div>
                                        <div class="clear"></div>
                                        <div class="my-account-subcription step-three-register">
                                            <div class="custom-control custom-checkbox standard">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2"></label>
                                            </div>
                                        </div>
                                    </li>
                                    {{--<li>--}}
                                        {{--<div><img src="" width="183" height="100"/></div>--}}
                                        {{--<div class="img-block" width="183" height="100" style="margin-top: 100px"></div>--}}
                                        {{--<div class="my-account-subcription step-three-register">--}}
                                            {{--<div class="custom-control custom-checkbox standard">--}}
                                                {{--<input type="checkbox" class="custom-control-input" id="customCheck3">--}}
                                                {{--<label class="custom-control-label" for="customCheck3"></label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="float-r mt-70 mb-5">
                    <button class="btn btn-primary" type="submit">SAVE : Next Step 2<i class="arrow-right"></i></button>
                </div>
                <div class="clear"></div>

            </form>

        </div>
    </div>
</div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">

    function readURLImage(input) {

        if (input.files) {

            var filesCount = input.files.length;
            for(i=0; i<filesCount; i++){

                var reader = new FileReader();

                reader.onload = function (e) {
                    //console.log("the file is ", e.target.result);
                    $('#img_'+i).attr('src', e.target.result);
                    // $('#img_'+i).attr('src', e.target.result);
                    // $('#img_'+i).attr('width', '183px');
                    // $('#img_'+i).attr('height', '100px');
                }
                reader.readAsDataURL(input.files[i]);
            }

        }
    }


    $(document).ready(function() {

        $("#image_files").change(function(){

            readURLImage(this);

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
                {{--// $('#image_preview').append("<li><div><img src='"+URL.createObjectURL(event.target.files[i])+"' width='183px' height='100px'></div>" +--}}
                {{--//     "<div class='my-account-subcription step-three-register'><div class='custom-control custom-checkbox standard'>" +--}}
                {{--//     "<input type='checkbox' class='custom-control-input' name='image_" + i + "' id='customCheck1'></div></div></li>");--}}
                {{--// $('#img_'+i).attr('src', URL.createObjectURL(event.target.files[i]));--}}
                {{--// $('#img_'+i).attr('width', '183px');--}}
                {{--// $('#img_'+i).attr('height', '100px');--}}
            {{--}--}}
        });

    });

</script>
