<h3 class="col-8 ml-0 mt-4">Broadcast</h3>
<span class="reg-title pr-2">BROADCAST TO OTHER AGENTS IN YOUR AREA   </span><a class="c0066ff" data-toggle="collapse" href="#broadcastExpanded" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a>

<div class="collapse" id="broadcastExpanded">
    <div class="rules-arrow" style="margin-left: 80%"></div>
    <div class="ExpandForm p-3" style="background-color: white">
        <h6>What Broadcast</h6>
        <p style="text-align: justify; font-size: small">
            <b>Broadcast</b> is a service provided by the REVid System and available on request. Broadcast compiles and
            send a weekly email broadcast of your new REVid Videos to the REVid member real estate agents in the nominated
            suburb locations.<br><br>
            It allows your real estate peers to see your property video and helps keep the industry actively informed as to new
            listings whilst promoting your brand and property.<br><br>
            You Add+/Remove- Suburbs to update your Broadcast List as required. <br><br>
            This is a value-added service and a fee applies.
        </p>
    </div>
</div><br>

<div class="custom-control custom-checkbox standard">
    <input type="checkbox" class="custom-control-input" id="customCheck27" value="1" name="broadcast_status"
            {{{ (!empty($broadcast_status) && $broadcast_status == '1') ? "checked" : "" }}}>
    <label class="custom-control-label" for="customCheck27">Yes, send weekely New Video Update to REVid member <br>real estate agents in the selected areas listed below.</label>
</div>
<b>Select Areas</b>
<div class="row my-2">
    <div class="col-sm-5 pr-0 @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
        {{--<input type="text" name="area" class="form-control">--}}
        <select name="suburb_area" class="form-control" id="suburb_area">
            @foreach($suburbs as $sub)
                <option value="{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}">{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm align-self-center">
        <span id="addSuburbLink" style="color: blue; cursor: pointer"><b>Add +</b></span></a>
    </div>
</div>
<div class="my-2"><b>Suburb Selection</b></div>
<div class="row m-0">
    <!-- <div class="col-sm col-sm-5 h-100"> -->
    <div>    
        @if(count($areas) > 0)
            <?php
            $cnt_area = count($areas);
            $ctr = 0; ?>
            <!-- <select name="suburb_list" id="suburb_list" multiple class="form-control" style="width: 340px"> -->
            <select name="suburb_list" id="suburb_list" multiple class="form-control" style="width: 270px">
                @foreach($areas as $area)
                    <option value="{{ $area }}">{{ $area }}</option>
                @endforeach
            </select>
        @else
            <select name="suburb_list" id="suburb_list" multiple class="form-control" style="width: 270px">
                <!-- <option value="">No emails on the list...</option> -->
            </select>
        @endif

    </div>
    <div class="col-sm reg-step-link">
        <a href=""><span>Remove -</span></a>
        <!-- <span id="removeSuburbLink" style="color: red; cursor: pointer">Remove -</span> -->
    </div>
</div>
@if (Request::segment(1) != 'account')
    <div class="d-flex flex-row-reverse">
        <div class="p-2">
            <div class="col-sm align-items-end join-step-next">
                <button class="btn btn-primary font-weight-bold">NEXT : Payment Details <i class="arrow-right"></i></button>
            </div>
        </div>
    </div>
@else
    <div class="d-flex flex-row-reverse">
        <div class="p-2">
            <div class="col-sm align-items-end join-step-next">
                <button class="btn btn-primary font-weight-bold">UPDATE</button>
            </div>
        </div>
    </div>
@endif