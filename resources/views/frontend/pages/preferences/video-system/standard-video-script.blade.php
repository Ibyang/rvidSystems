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
            <h3 class="my-account-title">Standard Video System - Step 2</h3>

            @include('frontend.pages.preferences.video-system.steps')

            <form id="frmStep1" method="POST" action="{{ route('account-video-system-processStep2')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">

                    {{--<div id="top">--}}
                        {{--<div class="top-icon">YELLOW</div>--}}
                    {{--</div>--}}
                    {{--<div id="content"></div>--}}

                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm pl-0"><h3>Story Board</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                         </div>
                    </div>
                    <div class="col-sm">
                         <div class="row">
                            <div class="col-sm pl-0"><h3>Select Script</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                         </div>
                    </div>
                </div>
                <div class="row video-system-2 pb-3">
                    <div class="col-sm-5 story-board-block pr-0">
                         <button class="btn"><i class="standard-video sv-save"></i>SAVE</button>

{{--                    @foreach($stats as $stat)--}}
                        <?php $ctr=0; ?>
                         @foreach($pics as $pic)

                             <!--div class="story-text">
                                 <div class="row h-100">
                                    <div class="col my-auto">
                                        <div class="mx-auto">This property is stylish and aspirational</div>
                                    </div>
                                </div>
                             </div-->
                                 @if($pic['statement'] != NULL)
                                    {{--<div class="text-block" ondrop="drop(event)" ondragover="allowDrop(event)" id="text-block" style="height: 50px; background: #eeeeee; list-style: none">{{ $pic['statement'] }}</div>--}}
                                 @else
                                     <div class="text-block" ondrop="drop(event)" ondragover="allowDrop(event)" id="text-block" style="height: 50px; background: #eeeeee; list-style: none"></div>
                                 @endif
                                 {{--<div class="text-block" ondrop="drop(event)" ondragover="allowDrop(event)" id="text-block" style="height: 50px; background: #eeeeee">Drag Your Statement Here</div>--}}
                                 <div class="script-container">

                                         @if($pic['new_filename'] != NULL)
                                             <img draggable="true" src={{ $path2 . $pic['new_filename'] }} class="w-100" style='border: 10px solid #ededed; opacity: 0.5; max-width:100%; height:auto'>
                                             <div class="text-container">
                                                 {{ $pic['statement'] }}
                                             </div>
                                         @else
                                           <div>
                                             <img draggable="true" src={{ $path2 . $pic['old_filename'] }} class="w-100" style='border: 10px solid #ededed; opacity: 0.5; max-width:100%; height:auto'>
                                             <div class="text-container">
                                                 @if( $ctr < $num_images )
                                                    {{ $stats[$ctr] }}
                                                 @endif
                                             </div>
                                           </div>
                                         @endif
                                 </div>
                                 <input type="hidden" name="imageID" value="{{ $pic['ID'] }}">
                                 <input type="hidden" name="filename[]" id="filename" ondrop="drop(event)" ondragover="allowDrop(event)">
                                 {{--<select name="statement[]" class="mt-3 mb-3">--}}
                                     {{--<option>Introductory Statement</option>--}}
                                     {{--<option>General Descriptor</option>--}}
                                     {{--<option>Property Layout</option>--}}
                                     {{--<option>Signature Inclusion</option>--}}
                                     {{--<option>Lifestyle Descriptor</option>--}}
                                     {{--<option>Uniqueness Descriptor</option>--}}
                                     {{--<option>Additional Features</option>--}}
                                     {{--<option>Buy Descriptions</option>--}}
                                     {{--<option>Closing Statement</option>--}}
                                 {{--</select>--}}


                             {{--<p><br><span class="c-6600cc"><b>+</b></span><br>Picture</p>--}}
                             {{--<select name="" class="mb-3">--}}
                                {{--<option>Property Layout</option>    --}}
                             {{--</select>--}}
                            <?php $ctr++; ?>
                         @endforeach
                    {{--@endforeach--}}
                    </div>
                    <div class="col-sm-7 video-system-pic-block">
                         <button class="btn mt-3"><i class="standard-video sv-move"></i>Move to Storyboard</button>
                         <div class="story-statement p-3 mt-3">
                            <h3>Statements</h3>
                            <ul style="cursor: move">
                                {{--<li>This property is an ideal family home</li>--}}
                                {{--<li>This property is perfect for a professional couple</li>--}}
                                {{--<li>This property is your perfect start in life</li>--}}
                                {{--<li>This property is your step onto the real estate ladder</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is stylish and aspirational</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is simply good value</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property exudes charm and character</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is close to public transport</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is close to shops and transport</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is in need of love and care</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is a renovator’s dream</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property will set you up for life</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property gives a taste of City living</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is beautifully presented</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property could change your life</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property sits within a well established suburb</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is sophisticated and elegant</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property has room for a caravan or boat</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property can grow with your family</li>--}}
                                {{--<li ondragstart="dragStart(event)" draggable="true" id="statement">This property is close to a playground and school</li>--}}
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is an ideal family home"></li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is perfect for a professional couple"></li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is your perfect start in life"></li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is your step onto the real estate ladder">This property is your step onto the real estate ladder</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is stylish and aspirational">This property is stylish and aspirational</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is simply good value">This property is simply good value</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property exudes charm and character">This property exudes charm and character</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is close to public transport">This property is close to public transport</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is close to shops and transport">This property is close to shops and transport</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is in need of love and care">This property is in need of love and care</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is a renovator's dream">This property is a renovator's dream</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property will set you up for life">This property will set you up for life</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property gives a taste of City living">This property gives a taste of City living</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is beautifully presented">This property is beautifully presented</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property could change your life">This property could change your life</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property sits within a well established suburb">This property sits within a well established suburb</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is sophisticated and elegant">This property is sophisticated and elegant</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property has room for a caravan or boat">This property has room for a caravan or boat</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property can grow with your family">This property can grow with your family</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is close to a playground and school">This property is close to a playground and school</li>
                            </ul>
                            <h3>Extension Statements (optional)</h3>
                            <ul>
                                <li>It is also stylish and aspirational</li>
                                <li>It also exudes charm and character</li>
                                <li>It is also close to shops and transport But is in need of some love and care And can grow with your family</li>
                                <li>It is also simply good value</li>
                                <li>It also gives a taste of City living</li>
                                <li>It also has space for your caravan or boat And it is beautifully presented</li>
                                <li>It is also an ideal family home</li>
                                <li>It is also perfect for a professional couple</li>
                                <li>It could also be your perfect start in life</li>
                                <li>It could also be your step into the property market</li>
                                <li>It is also close to play spaces and school</li>
                                <li>It is also close to public transport</li>
                                <li>It is also sophisticated and elegant And it sits within a well established suburb</li>
                                <li>It is also an ideal family home And it could change your life</li>
                            </ul>
                         </div>
                    </div>
                </div>
                <div class="float-r mt-3 mb-5">
                    <input type="hidden" name="selectedStatements" id="selectedStatements">
                    <input type="hidden" name="pics" id="pics" value="{{ $pics }}">
                    <div style="float: left; margin-right: 10px"><a href="/account/preferences/video-system/1"><button class="btn btn-primary" type="button"><i class="arrow-left"></i> Previous Step</button></a></div>
                    <button class="btn btn-primary" type="submit">SAVE : Next Step 3<i class="arrow-right"></i></button>
                </div>
                <div class="clear"></div>
            </form>
        </div>
    </div>
</div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">

    //function for draggable items
    var contents = [];

    function dragStart(event) {
        event.dataTransfer.setData("Text", event.target.id);
        console.log("value is ", event.target.id);
        //document.getElementById("demo").innerHTML = "Started to drag the p element";
    }

    function allowDrop(event) {
        event.preventDefault();
    }

    function drop(event) {

        event.preventDefault();
        var data = event.dataTransfer.getData("Text");
        event.target.appendChild(document.getElementById(data));
        contents.push(data);
        console.log("the value is ", document.getElementById(data));
        console.log("the value of contents is ", contents);

        $('#selectedStatements').val(contents);

        //document.getElementById("demo").innerHTML = "The p element was dropped";
    }

    function myHelper(event) {
        return $(this).clone();
    }

    var i = 1;

    function handleDragStop(event, ui) {
        debugger;

        /*var current_text = '<div class="color-box"><b>Yellow Box ' + i + '</b>' + '<div class="yellow-content">' + '<div class="item">Item 1</div>' + '<div class="item">Item 2</div>' + '<div class="item">Item 3</div>' + '<div class="add-item">Add New Item</div>' + '</div>' + '</div>';*/
        var current_text = $('#statement').text();
        $('#text-block').append(current_text);

        // i++;
        //
        // var $new_insert_item = $('#content .top-icon').next();
        // $('#content .top-icon').remove(); // remove the clone .top-icon inside #content

        console.log('hi');
        // when click on Add New Item button

    }
    // end of handleDragStop

    function handleDragStop2(event, ui) {
        debugger;

        /*var current_text = '<div class="color-box"><b>Yellow Box ' + i + '</b>' + '<div class="yellow-content">' + '<div class="item">Item 1</div>' + '<div class="item">Item 2</div>' + '<div class="item">Item 3</div>' + '<div class="add-item">Add New Item</div>' + '</div>' + '</div>';*/
        var current_text = $('.top-icon').text();
        $('#content').append(current_text);

        i++;

        var $new_insert_item = $('#content .top-icon').next();
        $('#content .top-icon').remove(); // remove the clone .top-icon inside #content

        console.log('hi');
        // when click on Add New Item button

    }
    // end of handleDragStop

    $(document).ready(function() {
        //for highlighting when clicking an item from the list
        $("li").click(function() {
            $(this).siblings("li").css("backgroundColor", "");
            $(this).animate({
                backgroundColor: '#ffff42'
            }, 'fast');
        });

        $("#statement1").dblclick(function() {
            drop(event);
        })

        $('#text-block').sortable({
            placeholder: 'ui-state-highlight'
        });

        $("#statement").draggable({
            connectToSortable: '#text-block',
            helper: myHelper,
            stop: handleDragStop
        }).dblclick(function(e) {
            handleDragStop(e);
        });


        $('#content').sortable({
            placeholder: 'ui-state-highlight'
        });


        $(".top-icon").draggable({
            connectToSortable: '#content',
            helper: myHelper,
            stop: handleDragStop
        }).dblclick(function(e) {

            handleDragStop2(e);

        });;


    });

</script>