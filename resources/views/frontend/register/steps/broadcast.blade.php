                    <h3 class="col-8 ml-0">Broadcast</h3>
                    BROADCAST TO OTHER AGENTS IN YOUR AREA <a href="">What is this?</a>
                    <div class="custom-control custom-checkbox standard">
                            <input type="checkbox" class="custom-control-input" id="customCheck27" value="1" name="broadcast_status" checked>
                            <label class="custom-control-label" for="customCheck27">Yes, send weekely New Video Update to REVid member <br>real estate agents in the selected areas listed below.</label>
                    </div>
                    
                    Select Areas
                    <div class="row mt-2 mb-2">
                        <div class="col-sm">
                            {{--<input type="text" name="area" class="form-control">--}}
                            <select name="suburb_area" class="form-control" id="suburb_area">
                                @foreach($suburbs as $sub)
                                    <option value="{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}">{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm align-self-center"><span id="addSuburbLink" style="color: blue; cursor: pointer">Add +</span></div>
                    </div>
                    <div class="mt-2 mb-2">Suburb Selection</div>
                    <div class="row">
                        <div class="col-sm">
                            <select name="suburb_list" id="suburb_list" multiple class="form-control"></select>
                        </div>
                        <div class="col-sm reg-step-link"><span id="removeSuburbLink" style="color: red; cursor: pointer">Remove -</span></div>
                        {{--<div class="col-sm">--}}
                            {{--<span id="removeSuburbLink" style="color: red; cursor: pointer">Remove -</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm email-scroll">--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col">Bassendean</div>--}}
                                        {{--<div class="col">WA6054</div>--}}
                                        {{--<div class="col">200</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col">Morley</div>--}}
                                        {{--<div class="col">WA6062</div>--}}
                                        {{--<div class="col">100</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col">Guildford</div>--}}
                                        {{--<div class="col">WA6052</div>--}}
                                        {{--<div class="col">100</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col">Bayswater</div>--}}
                                        {{--<div class="col">WA6053</div>--}}
                                        {{--<div class="col">100</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <div class="col-sm align-items-end">
                                <button type="submit" class="btn btn-primary">NEXT : Payment Details <i class="arrow-right"></i></button>
                        </div>
                    </div>