@extends('frontend.layouts.main')

    <style>
        .sortable-placeholder {
           margin:10px;
           padding:10px;
           background:yellow;
           border:1px solid black;
        }

    </style>

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title mb-3">Manual Video System - Step 2</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            
            <div class="d-flex justify-content-between join-step-next p-1 mb-3">
                    <button class="btn btn-primary bg-333 btn-no-border px-4" type="button" onclick="{{ route('account-video-system-pictures') }}"><i class="arrow-left"></i> BACK</button>
            </div>

            <form id="frmManualStep2" method="POST" action="{{ route('account-video-system-processStep2')}}" enctype="multipart/form-data">
                {{ csrf_field() }}

            <div class="video-system-1">
                <span>Drag images to order/ Statement order is fixed</span>
                <div class="row m-0">
                    <div class="col-sm pl-0">
                        <div class="row m-0">
                            <div class="col-sm pl-0"><h3>Story Board</h3></div>
                            <div class="col-sm pr-0"><a href="">What is this?</a></div>
                         </div>
                    </div>
                    <div class="col-sm pr-0">
                         <div class="row m-0">
                            <div class="col-sm pl-0"><h3>Select Script</h3></div>
                            <div class="col-sm pr-0 text-right"><a href="">What is this?</a></div>
                         </div>
                    </div>
                </div>
            </div>

                <div class="row video-system-2 pb-3 m-0">
                    <div class="col-sm-5 story-board-block pr-0">
                         <button class="btn"><i class="standard-video sv-save"></i>SAVE</button>

                         <!-- original design -->
                         <!-- <div class="story-text">
                             <div class="row h-100">
                                <div class="col my-auto">
                                    <div class="mx-auto">This property is stylish and aspirational</div>
                                </div>
                            </div>
                         </div>
                         <img src={{ asset('storage/account/sample-image.png') }}  class="w-100"/>
                         <p class="mt-3"><span class="c-6600cc"><b>+</b></span><br>Picture 2</p> -->

                            <div class="script-container">
                                <div id="sortableContainer" style="position: relative; z-index: 300">
                                         @foreach($pics as $pic)
                                             @if($pic['statement'] != NULL)
                                                <div class="text-block" ondrop="drop(event)" ondragover="allowDrop(event)" id="text-block" style="height: 50px; background: #eeeeee; list-style: none">{{ $pic['statement'] }}</div>
                                             @else
                                                <div class="text-block" ondrop="drop(event)" ondragover="allowDrop(event)" id="text-block" style="height: 50px; background: #eeeeee; list-style: none"></div>
                                             @endif

                                             @if($pic['new_filename'] != NULL)
                                                 <div id="{{ $pic['ID'] }}">
                                                     <img src={{ $path2 . $pic['new_filename'] }} class="w-100" style='border: 10px solid #ededed; opacity: 0.5; max-width:100%; height:auto; cursor: move'>
                                                     <div class="text-container">
                                                         {{ $pic['statement'] }}
                                                     </div>
                                                 </div>
                                                 {{--<img draggable="true" src={{ $path2 . $pic['new_filename'] }} class="w-100" style='border: 10px solid #ededed; opacity: 0.5; max-width:100%; height:auto'>--}}
                                             @else
                                                  <div id="{{ $pic['ID'] }}">
                                                      <img src="{{ $path2 . $pic['old_filename'] }}" class="w-100" style='border: 10px solid #ededed; opacity: 0.5; max-width:100%; max-height:50%; cursor: move'>
                                                  </div>
                                                         {{--@if( $ctr < $num_images )--}}
                                                            {{--<span class="text-container" style="margin-top: 10px">--}}
                                                                {{--<p>{{ $stats[$ctr] }}</p>--}}
                                                            {{--</span>--}}
                                                         {{--@endif--}}
                                             @endif
                                             <input type="hidden" name="imageID" value="{{ $pic['ID'] }}">
                                             <input type="hidden" name="filename[]" id="filename" ondrop="drop(event)" ondragover="allowDrop(event)">
                                         @endforeach
                                </div>
<<<<<<< HEAD

                                <!-- commented this part -->
                                <!-- <div style="position: absolute; left:0; top:0;">
                                        <ul>
                                            @for($ctr=0; $ctr<$num_images; $ctr++)
                                                <li style="line-height: 250px; z-index: 100; padding-left: 50px; font-weight: bolder;">{{ $stats[$ctr] }}</li>
                                             @endfor    
                                        </ul>    
                                </div> -->  
=======
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754

                                <div style="position: absolute; left:0; top:0;">
                                        <ul>
                                            @for($ctr=0; $ctr<$num_images; $ctr++)
                                                <li style="line-height: 250px; z-index: 100; padding-left: 50px; font-weight: bolder;">{{ $stats[$ctr] }}</li>
                                             @endfor    
                                        </ul>    
                                </div>  
                            </div>
                    </div>


                    <div class="col-sm-7 video-system-pic-block">
                         <button class="btn mt-3"><i class="standard-video sv-move"></i>Move to Storyboard</button>
                         <div class="story-statement p-2 mt-3">
                            <h3>Statements</h3>
                            <ul>

                                <li ondragstart="dragStart(event)" draggable="true" id="No Voice Over">No Voice Over</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is an ideal family home">This property is an ideal family home</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is perfect for a professional couple">This property is perfect for a professional couple</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is your perfect start in life">This property is your perfect start in life</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is your step onto the real estate ladder">This property is your step onto the real estate ladder</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is stylish and aspirational">This property is stylish and aspirational</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is simply good value">This property is simply good value</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property exudes charm and character">This property exudes charm and character</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is close to public transport">This property is close to public transport</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is close to shops and transport">This property is close to shops and transport</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is in need of love and care">This property is in need of love and care</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is a renovator’s dream">This property is a renovator’s dream</li>
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
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also stylish and aspirational">"It is also stylish and aspirational</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It also exudes charm and character">It also exudes charm and character</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also close to shops and transport <br>But is in need of some love and care<br> And can grow with your family">It is also close to shops and transport <br>But is in need of some love and care<br> And can grow with your family</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also simply good value">It is also simply good value</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It also gives a taste of City living">It also gives a taste of City living</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It also has space for your caravan or boat And it is beautifully presented">It also has space for your caravan or boat And it is beautifully presented</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also an ideal family home">It is also an ideal family home</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also perfect for a professional couple">It is also perfect for a professional couple</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It could also be your perfect start in life">It could also be your perfect start in life</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It could also be your step into the property market">It could also be your step into the property market</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also close to play spaces and school">It is also close to play spaces and school</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also close to public transport">It is also close to public transport</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also sophisticated and elegant And it sits within a well established suburb">It is also sophisticated and elegant And it sits within a well established suburb</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="It is also an ideal family home <br>And it could change your life">It is also an ideal family home <br>And it could change your life</li>
                            </ul>
                         </div>
                    </div>
                </div>
                <div class="d-flex my-4 join-step-next">
                    <input type="hidden" name="sortOrder" id="sortOrder">
                    <input type="hidden" name="selectedStatements" id="selectedStatements">
                    <input type="hidden" name="pics" id="pics" value="{{ $pics }}">
                    <div><a href="/account/preferences/video-system/1"><button class="btn btn-primary bg-333 btn-no-border v-s-btn-t px-5" type="button" onclick="{{ route('account-video-system-pictures') }}"><i class="arrow-left"></i>BACK</button></a></div>
                    <div class="ml-auto"><button class="btn btn-primary v-s-btn-t" type="button" id="bntSaveScript">SAVE : Next Step 3<i class="arrow-right"></i></button></div>
                </div>
            </form>
                
        </div>
    </div>
</div>
@endsection



{{-- page level scripts --}}
@section('footer_scripts')


        <script src="http://code.jquery.com/jquery-2.1.3.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

        <script type="text/javascript">

            //function for draggable items
            var contents = [];

            function goBack(){
                window.history.back();
            }


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

                //stat_arr = []; 
                // var stat_arr = $('#stats').val();

                // var num_images = 12;


                // Initialize sortable
                $("#sortableContainer").sortable({
                    placeholder: 'sortable-placeholder',
                    opacity: 0.6,
                    sort: function(event,ui){
                        $(ui.placeholder).html('Drop me at position ' + Number($('#sortableContainer > div:visible').index(ui.placeholder)+1));

                    }  
                });

                //functionality when Next Button is clicked
                $("#bntSaveScript").click(function () {
                    var imageids_arr = [];

                    $('#sortableContainer div').each(function(){
                        var id = $(this).attr('id');
                        //var split_id = id.split("_");
                        imageids_arr.push(id);
                    });

                    console.log("the value of imageids array is ", imageids_arr);
                    $('#sortOrder').val(imageids_arr);

                    $('#frmManualStep2').submit();

                });

                //for highlighting when clicking an item from the list
                $("li").click(function() {
                    $(this).siblings("li").css("backgroundColor", "");
                    $(this).animate({
                        /*backgroundColor: '#ffff42'*/
                    }, 'fast');
                });

                $("#statement1").dblclick(function() {
                    drop(event);
                });

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

                });


            });

        </script>

@stop        