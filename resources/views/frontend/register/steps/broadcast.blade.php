<<<<<<< HEAD
<div class="border-top-999 pt-3 mt-4 col-8 p-0">
    <span class="reg-title pr-2">BROADCAST TO OTHER AGENTS IN YOUR AREA</span> <a class="c0066ff" data-toggle="collapse" href="#Expanded13" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a>
    <div class="collapse rules-contents col-11 pl-0" id="Expanded13">
        <div class="rules-arrow5"></div>
        <div class="ExpandForm text-justify bg-fff mb-3 p-3"> 
            <b>What is Broadcast?</b>

            <p class="mt-2"><b>Broadcast</b> is a service provided by the REVid System and available on request. Broadcast
            compiles and send a weekly email broadcast of your new REVid Videos to the REVid
            member real estate agents in the nominated suburb locations.</p>
            <p>It allows your real estate peers to see your property video and helps keep the industry
            actively informed as to new listings whilst promoting your brand and property.</p>
            <p>You Add+/Remove- Suburbs to update your Broadcast List as required.</p>
            <p class="m-0">This is a value-added service and a fee applies.</p>
        </div>           
    </div>          
    <div class="d-flex flex-row my-3">
        <div>
            <div class="custom-control custom-checkbox standard pl-0">
                <input type="checkbox" class="custom-control-input" id="customCheck27">
                <label class="custom-control-label" for="customCheck27"></label>
=======
<h3 class="col-8 ml-0 mt-4">Broadcast</h3>
<span class="reg-title pr-2">BROADCAST TO OTHER AGENTS IN YOUR AREA</span> <a class="c0066ff" data-toggle="collapse" href="#Expanded13" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a>
<div class="collapse rules-contents @if (Request::segment(1) != 'account') {{'col-8 pl-0'}} @endif" id="Expanded13">
    <div class="rules-arrow5"></div>
    <div class="ExpandForm text-justify bg-fff mb-3 @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> 
        <b>What is Broadcast?</b>
        
        <p class="mt-2"><b>Broadcast</b> is a service provided by the REVid System and available on request. Broadcast
        compiles and send a weekly email broadcast of your new REVid Videos to the REVid
        member real estate agents in the nominated suburb locations.</p>
        <p>It allows your real estate peers to see your property video and helps keep the industry
        actively informed as to new listings whilst promoting your brand and property.</p>
        <p>You Add+/Remove- Suburbs to update your Broadcast List as required.</p>
        <p>This is a value-added service and a fee applies.</p>
    </div>           
</div>          
<div class="custom-control custom-checkbox standard">
    <input type="checkbox" class="custom-control-input" id="customCheck27" value="1" name="broadcast_status"
            {{{ (!empty($broadcast_status) && $broadcast_status == '1') ? "checked" : "" }}}>
    <label class="custom-control-label" for="customCheck27">Yes, send weekely New Video Update to REVid member <br>real estate agents in the selected areas listed below.</label>
    <!-- <input type="checkbox" class="custom-control-input" id="customCheck27">
    <label class="custom-control-label" for="customCheck27">Yes, send weekely New Video Update to REVid member <br>real estate agents in the selected areas listed below.</label> -->
</div>
<b>Select Areas</b>
<div class="row my-2">
    <div class="col-sm-5 pr-0 @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
        <!-- <input type="text" name="area" class="form-control"> -->
        <select name="suburb_area" class="form-control" id="suburb_area">
            @foreach($suburbs as $sub)
                <option value="{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}">{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm align-self-center">
        <!-- <a href=""><b>Add +</b></a> -->
        <span id="addSuburbLink" style="color: blue; cursor: pointer"><b>Add +</b></span></a>
    </div>
</div>
<div class="my-2"><b>Suburb Selection</b></div>
<div class="row m-0">
    <!-- <div class="col-sm email-scroll col-sm-5 h-100"> -->
    <div>    
        @if(count($areas) > 0)
            <?php
            $cnt_area = count($areas);
            $ctr = 0; ?>
            <!-- <select name="suburb_list" id="suburb_list" multiple class="form-control" style="width: 340px"> -->
            <select name="suburb_list" id="suburb_list" multiple class="form-control" style="width: 408px">
                @foreach($areas as $area)
                    <option value="{{ $area }}">{{ $area }}</option>
                @endforeach
            </select>
        @else
            <select name="suburb_list" id="suburb_list" multiple class="form-control" style="width: 408px">
                <!-- <option value="">No emails on the list...</option> -->
            </select>
        @endif
    </div>
    <div class="col-sm reg-step-link">
        <!-- <a href=""><span>Remove -</span></a> -->
        <span id="removeSuburbLink" style="color: red; cursor: pointer">Remove -</span>
    </div>
</div>
@if (Request::segment(1) != 'account')
    <div class="d-flex flex-row-reverse">
        <div class="p-2">
            <div class="col-sm align-items-end join-step-next">
                <button class="btn btn-primary font-weight-bold">NEXT : Payment Details <i class="arrow-right"></i></button>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
            </div>
        </div>
        <div class="pl-3 line-height17 font13"><b>WHEN AVAILABLE</b>, Send weekly What’s New Broadcast to other REVid real estate<br>
            agents in the Selected Areas. I also <b>Agree to Receive</b> the weekly What’s New Broadcast</div>
    </div>
    <div class="font-t-ms color-424244"><b>Selected Areas</b></div>
    <div class="row m-r-l my-2">
        <div class="col-sm-10 pr-2"><input type="text" name="area" placeholder="Suburb Select/Search" class="form-control"></div>
        <div class="col-sm align-self-center"><a href="" class="c0066ff"><b>Add +</b></a></div>
    </div>
    <div class="row mt-3 mx-0">
        <div class="col-sm-10 email-scroll col-sm-5 h-100">
            <ul>
                <li>
                    <div class="row">
                        <div class="col-sm">Bassendean</div>
                        <div class="col-sm">WA6054</div>
                        <div class="col-sm">200</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm">Morley</div>
                        <div class="col-sm">WA6062</div>
                        <div class="col-sm">100</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm">Guildford</div>
                        <div class="col-sm">WA6052</div>
                        <div class="col-sm">100</div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-sm">Bayswater</div>
                        <div class="col-sm">WA6053</div>
                        <div class="col-sm">100</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-sm reg-step-link"><a href=""><span>Remove -</span></a></div>
    </div>
</div>
<div class="d-flex justify-content-between join-step-next mt-4">
            <div><a href="#" type="button" onclick="goBack()"><button class="btn btn-primary bg-333 btn-no-border px-4"><i class="arrow-left"></i> BACK</button></a></div>
            <div><button class="btn btn-primary" type="submit">NEXT : Payment Details <i class="arrow-right"></i></button></div>
</div>