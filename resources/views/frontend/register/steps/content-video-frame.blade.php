  <h3><div class="register-icon reg-content mb-2"></div><span class="pl-1">Content for Video Frame Templates</span></h3>
            Required (Enter as you wish it to appear)
            <div class="row">
                <div class="col-sm">
                    <input type="text" class="form-control mt-3 mb-3" name="videoName" placeholder="Name" value="{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}">
                    <input type="text" class="form-control mt-3 mb-3" name="videoMobile" placeholder="Mobile" value="{{$agent['mobile']}}">
                    <input type="text" class="form-control mt-3 mb-3" name="videoEmailAdd" placeholder="Web or Email Address" value="{{$agent['email']}}">
                    <textarea placeholder="Agency Name and details (as required)" name="videoAgencyName" class="form-control mt-3 mb-3">{{$agent['name_agency']}}</textarea>
                    <textarea placeholder="Content or Other or Address (Optional)" name="videoContent" class="form-control mt-3 mb-3">{{$agent['address']}}&nbsp;{{$agent['suburb']}}&nbsp;{{$agent['state']}}</textarea>
                </div>
                <div class="col-sm header-title pl-5 select-form">
                    <b>Required</b>
                    <br><br>
                    Content is required for use in the three frame<br>
                    templates used in your videos.
                    <br><br>
                    Video Frame Templates
                    <br><br>
                    Example
                    <img src="{{ asset('storage/register/example-frame.jpg') }}">
                    <a href="" class="d-inline-block font12">< Click to Expand ></a>
                    {{--<div class="float-r">--}}
                        {{--<div class="d-inline-block font12">Change</div>--}}
                        {{--<div class="d-inline-block">--}}
                            {{--<select name="" class="form-control">--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <hr>
                    <div style="clear: both"></div>
                    <b>End Frame</b><br>
                    Example
                    <img src="{{ asset('storage/register/end-frame.jpg') }}">
                    <a href="" class="d-inline-block font12">< Click to Expand ></a>

                </div>
            </div>

            {{--<hr>--}}
            {{--<div class="row select-form">--}}
                {{--<div class="col-sm select-form">--}}
                    {{--<h3>Middle Frame</h3>--}}
                    {{--<div class="custom-control custom-checkbox premium">--}}
                        {{--<input type="checkbox" class="custom-control-input" name="chkrandomiseMF" id="chkrandomiseMF" value="1" checked>--}}
                        {{--<label class="custom-control-label" for="chkrandomiseMF">Let us randomise statement selections with voice over.</label>--}}
                    {{--</div>--}}
                    {{--<textarea placeholder="Your personalise statement or saying (optional)" class="mt-4" name="statementMF" id="statementMF" disabled></textarea>--}}
                {{--</div>--}}
                {{--<div class="col-sm header-title pl-5">--}}
                    {{--<b>Middle Frame</b><br><br>--}}
                    {{--Example--}}
                    {{--<img src="{{ asset('storage/register/example-frame.jpg') }}">--}}
                    {{--<a href="" class="d-inline-block font12">< Click to Expand ></a>--}}
                    {{--<div class="float-r">--}}
                        {{--<div class="d-inline-block font12">Change</div>--}}
                        {{--<div class="d-inline-block">--}}
                            {{--<select name="" class="form-control">--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="row select-form">--}}
                {{--<div class="col-sm">--}}
                    {{--<h3>End Frame</h3>--}}
                    {{--<div class="custom-control custom-checkbox premium">--}}
                        {{--<input type="checkbox" class="custom-control-input" name="chkrandomiseEF" id="chkrandomiseEF" value="1" checked>--}}
                        {{--<label class="custom-control-label" for="chkrandomiseEF">Let us randomise statement selections with voice over.</label>--}}
                    {{--</div>--}}
                    {{--<textarea placeholder="Your personalise statement or saying (optional)" class="mt-4" name="statementEF" id="statementEF" disabled></textarea>--}}
                {{--</div>--}}
                {{--<div class="col-sm pl-5 header-title">--}}
                    {{--<b>End Frame</b><br><br>--}}
                    {{--Example--}}
                    {{--<img src="{{ asset('storage/register/end-frame.jpg') }}">--}}
                    {{--<a href="" class="d-inline-block font12">< Click to Expand ></a>--}}
                    {{--<div class="float-r">--}}
                        {{--<div class="d-inline-block font12">Change</div>--}}
                        {{--<div class="d-inline-block">--}}
                            {{--<select name="" class="form-control">--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


