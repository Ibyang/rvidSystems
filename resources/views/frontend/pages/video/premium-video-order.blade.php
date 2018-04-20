@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form"><br>
            <h3>Premium Video Order</h3><br>
            <hr>
            <form method="POST" action="{{ route('postVideoOrder') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-3 pl-0">Property Address #</div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="address" autofocus value=" {{ $agent->address }} ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0"></div>
                    <div class="col-sm-3">
                        <input  type="text" class="form-control" name="suburb" autofocus value=" {{ $agent->suburb }} ">
                    </div>
                    <div class="col-sm-3">
                        <input  type="text" class="form-control" name="state" autofocus value=" {{ $agent->state }} ">
                    </div>
                    <div class="col-sm-3">
                        <input  type="text" class="form-control" name="postcode" autofocus value=" {{ $agent->postcode }} ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">URL Address</div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="url" autofocus value="{{ $url_premium }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Action Receipt #</div>
                    <div class="col-sm-9">
                         Your Video Number is<br>
                         <input type="text" class="form-control" name="videonumber" required autofocus value="{{ $vidid }}" style="text-align: right" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Account Manager</div>
                    <div class="col-sm-3">
                        <input type="text" name="acct_manager" placeholder="Name"><br>
                        <input type="text" name="acct_details" placeholder="Contact Details">
                    </div>
                    <div class="col-sm-3">
                        Is your
                        Primary contact
                        for the Custom
                        Video Production
                        Process
                    </div>
                    <div class="col-sm-3">
                        WILL CONTACT YOU BEFORE
                        <input type="text" name="acct_manager"><br>
                        <input type="text" name="acct_details">
                    </div>
                </div>

                <!-- INSERT THE IMAGE FOR THE CUSTOM VIDEO PRODUCTION PROCESS -->

                <div class="row">
                    <div class="col-sm-3 pl-0">Your Preferences <br>Settings are</div>
                    <div class="col-sm-9">
                        <!--div class="row">
                            <div class="col-sm pl-0">Company Website</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck5">
                                      <label class="custom-control-label" for="customCheck5"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">External Site #1</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck6">
                                      <label class="custom-control-label" for="customCheck6"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">External Site #2</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck7">
                                      <label class="custom-control-label" for="customCheck7"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Facebook</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck8">
                                      <label class="custom-control-label" for="customCheck8"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Youtube</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck9">
                                      <label class="custom-control-label" for="customCheck9"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">LinkedIn</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck10">
                                      <label class="custom-control-label" for="customCheck10"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Twitter</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck11">
                                      <label class="custom-control-label" for="customCheck11"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Googple Plus</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck12">
                                      <label class="custom-control-label" for="customCheck12"></label>
                                  </div>
                            </div>
                        </div-->
                        <b>Email Distribution (on completion)</b>
                        <div class="row">
                            <div class="col-sm pl-0">Your Email List</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="emailist" required autofocus value="{{ $preference->email_distribution  === "1" ? 'On' : 'Off' }}"></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" name="chkEmailList" id="chkEmailList" {{ $preference->email_distribution  === "1" ? 'checked' : '' }}>
                                      <label class="custom-control-label" for="chkEmailList"></label>
                                  </div>
                            </div>
                        </div>
                        <b>Broadcast Distribution</b>
                        <div class="row">
                            <div class="col-sm pl-0">Agents in <br>Your Suburbs</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="broadcast" required autofocus value="{{ $preference->broadcast_agent  === "1" ? 'On' : 'Off' }}"></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" name="chkBroadcast" id="chkBroadcast" {{ $preference->broadcast_agent  === "1" ? 'checked' : '' }}>
                                      <label class="custom-control-label" for="chkBroadcast"></label>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Extra's</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm pl-0">DriveBy</div>
                            <div class="col-sm"><button type="button" class="btn btn-primary">FREE</button></div>
                            <div class="col-sm">
                                <p class="d-inline-block font-weight-bold">$0</p>
                                <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" name="apply_driveby" value="1" id="customCheck15" checked>
                                      <label class="custom-control-label" for="customCheck15"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">LookFirst</div>
                            <div class="col-sm"><button type="button" class="btn btn-primary">FREE</button></div>
                            <div class="col-sm">
                                <p class="d-inline-block font-weight-bold">$0</p>
                                <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" name="apply_lookfirst" value="1" id="customCheck16" checked>
                                      <label class="custom-control-label" for="customCheck16"></label>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Cost <br>Summary</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3 pl-0">Video</div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cost_premium_video" name="cost_premium_video" required autofocus value="{{ number_format($cost_premium_video, 2) }}" style="text-align: right">
                            </div>
                        </div>
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-3 pl-0">Surge</div>--}}
                            {{--<div class="col-sm-9">--}}
                                {{--<input type="text" class="form-control" name="" required autofocus value="${{ number_format($cost_surge,2) }}" style="text-align: right">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="row">
                            <div class="col-sm-3 pl-0">Preferences</div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cost_preferences" name="cost_preferences" required autofocus value="{{ number_format($cost_total_preference,2) }}" style="text-align: right">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0">Extra's</div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cost_extra" name="cost_extra" required autofocus value="{{ number_format($cost_extra, 2) }}" style="text-align: right">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0">Total</div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="total_cost" name="total_cost" required autofocus value="{{ number_format($total_cost,2) }}" style="text-align: right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <input type="checkbox" class="group1 custom-control-input" id="accept_terms" value="1" name="accept_terms">
                        <a href=" {{ route('account-terms-condition') }}" target="_blank">Terms and Conditions</a>
                    </div>
                    <div class="col-sm">
                        <input type="hidden" name="videotype" value="Premium">
                        <button type="submit" id="btnConfirm" class="btn btn-primary">CONFIRM</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //for selecting only one checkbox at a time

        var premium_video = $("#cost_premium_video").val();
        var cost_pref = $("#cost_preferences").val();
        var cost_extra = $("#cost_extra").val();
        var total_cost =  $("#total_cost").val();

        $("#chkEmailList").click(function() {
            if( $("#chkEmailList").is(':checked') && $("#chkBroadcast").is(':checked')){
                // Code in the case checkbox is checked.
                $('#emailist').val('On');

                var emailist = 5.00;
                var broadcast = 5;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(premium_video) +  parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
            else if($("#chkEmailList").not(':checked') && $("#chkBroadcast").is(':checked')){
                // Code in the case checkbox is checked.
                $('#emailist').val('Off');

                var emailist = 0;
                var broadcast = 5;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(premium_video) +  parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
            else if($("#chkEmailList").is(':checked') && $("#chkBroadcast").not(':checked')){
                // Code in the case checkbox is checked.
                $('#emailist').val('On');

                var emailist = 5;
                var broadcast = 0;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(premium_video) + parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
            else {

                $('#emailist').val('Off');

                var emailist = 0;
                var broadcast = 0;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(premium_video) +  parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
        });

        $("#chkBroadcast").click(function() {
            if( $("#chkEmailList").is(':checked') && $("#chkBroadcast").is(':checked')){
                // Code in the case checkbox is checked.
                $('#broadcast').val('On');

                var emailist = 5;
                var broadcast = 5;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(premium_video) + parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
            else if($("#chkEmailList").not(':checked') && $("#chkBroadcast").is(':checked')){
                // Code in the case checkbox is checked.
                $('#broadcast').val('On');

                var emailist = 0;
                var broadcast = 5;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(premium_video) + parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
            else if($("#chkEmailList").is(':checked') && $("#chkBroadcast").not(':checked')){
                // Code in the case checkbox is checked.
                $('#broadcast').val('Off');

                var emailist = 5;
                var broadcast = 0;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(premium_video) + parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
            else {

                $('#broadcast').val('Off');

                var emailist = 0;
                var broadcast = 0;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(premium_video) + parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
        });

        $('input[type="checkbox"]').on('change', function() {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });

        $("#accept_terms").click(function() {
            $("#btnConfirm").attr("disabled", !this.checked);
        });

    });
</script>
