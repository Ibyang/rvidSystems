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
            <div class="row">
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

                         @foreach($pics as $pic)
                             <!--div class="story-text">
                                 <div class="row h-100">
                                    <div class="col my-auto">
                                        <div class="mx-auto">This property is stylish and aspirational</div>
                                    </div>
                                </div>
                             </div-->
                             {{--<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)"></div>--}}
                                 <div class="text-block" ondrop="drop(event)" ondragover="allowDrop(event)" id="text-block" style="list-style: none">Drag Your Statement Here</div>
                                 <img draggable="true" src={{ $path2 . $pic['image'] }} class="w-100" style='border: 10px solid #ededed; opacity: 0.5'>
                                 <select name="statement[]" class="mt-3 mb-3">
                                     <option>Introductory Statement</option>
                                     <option>General Descriptor</option>
                                     <option>Property Layout</option>
                                     <option>Signature Inclusion</option>
                                     <option>Lifestyle Descriptor</option>
                                     <option>Uniqueness Descriptor</option>
                                     <option>Additional Features</option>
                                     <option>Buy Descriptions</option>
                                     <option>Closing Statement</option>
                                 </select>


                             {{--<p><br><span class="c-6600cc"><b>+</b></span><br>Picture</p>--}}
                             {{--<select name="" class="mb-3">--}}
                                {{--<option>Property Layout</option>    --}}
                             {{--</select>--}}
                         @endforeach
                    </div>
                    <div class="col-sm-7 video-system-pic-block">
                         <button class="btn mt-3"><i class="standard-video sv-move"></i>Move to Storyboard</button>
                         <div class="story-statement p-3 mt-3">
                            <h3>Statements</h3>
                            <ul>
                                <li ondragstart="dragStart(event)" draggable="true" id="This property is an ideal family home">This property is an ideal family home</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="2">This property is perfect for a professional couple</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="3">This property is your perfect start in life</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is your step onto the real estate ladder</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is stylish and aspirational</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is simply good value</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property exudes charm and character</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is close to public transport</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is close to shops and transport</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is in need of love and care</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is a renovator’s dream</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property will set you up for life</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property gives a taste of City living</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is beautifully presented</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property could change your life</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property sits within a well established suburb</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is sophisticated and elegant</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property has room for a caravan or boat</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property can grow with your family</li>
                                <li ondragstart="dragStart(event)" draggable="true" id="dragtarget">This property is close to a playground and school</li>
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
                    <button class="btn btn-primary">SAVE : Next Step 3<i class="arrow-right"></i></button>
                </div>
                <div class="clear"></div>
        </div>
    </div>
</div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script type="text/javascript">

    //function for draggable items
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
        console.log("the value of data is ", data);
        event.target.appendChild(document.getElementById(data));
        console.log("the value is ", document.getElementById(data));

        //document.getElementById("demo").innerHTML = "The p element was dropped";
    }

    $(document).ready(function() {
        //for highlighting when clicking an item from the list
        $("li").click(function() {
            $(this).siblings("li").css("backgroundColor", "");
            $(this).animate({
                backgroundColor: '#ffff42'
            }, 'fast');
        });

    });

</script>