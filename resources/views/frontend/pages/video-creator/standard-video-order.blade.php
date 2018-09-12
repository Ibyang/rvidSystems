@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title">Manual Video Order</h3>
            <form method="POST" action="{{ route('postVideoOrder') }}" class="a-v-order">
                {{ csrf_field() }}
                
                <div class="row m-r-l">
                    <div class="col-sm-3">Property Address #</div>
                    <div class="col-sm-9">
                        <div class="d-flex flex-column mb-3 p-0">
                            <div><input type="text" class="form-control" placeholder="Address 1" name="address" required autofocus value=" {{ $agent->address }} "></div>
                            <div class="my-3"><input type="text" class="form-control" placeholder="Address 2" name="address2" value=" {{ $agent->address }} "></div>
                            <div class="row m-0">
                                    <div class="col-sm p-0"><input type="text" placeholder="Suburb" class="form-control" name="suburb" required autofocus value=" {{ $agent->suburb }} "></div>
                                    <div class="col-sm p-0"><input type="text" placeholder="State" class="form-control" name="state" required autofocus value=" {{ $agent->state }} "></div>
                                    <div class="col-sm p-0"><input type="text" placeholder="Post Code" class="form-control" name="postcode" required autofocus value=" {{ $agent->postcode }} "></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-sm-3 pl-0 align-self-center">URL Reference</div>
                    <div class="col-sm-9 pl-0">
                         <input type="text" class="form-control" name="url" required autofocus placeholder="www...">
                    </div>
                </div> -->
                <div class="row m-r-l my-3">
                    <div class="col-sm-3">Action Receipt #</div>
                    <div class="col-sm-9">
                         Your Video Number is<br>
                         <input  type="text" class="form-control b-radius-0 text-right mt-3" name="videonumber" required autofocus value="{{ $vidid }}" style="text-align: right" readonly>
                         <!-- <div class="form-control b-radius-0 text-right mt-3">XXXX</div> -->
                    </div>
                </div>

                <div class="row m-r-l">
                    <div class="col-sm-3">Video Production</div>
                    <div class="col-sm-9">
                        <div class="row m-0">
                            <div class="col-sm-8 pl-0">
                                 <b>Manual Video</b>
                                 <div class="my-2">Estimated completion time is</div>
                            </div>
                            <div class="col-sm-4 align-self-center">
                                <div class="row m-0">
                                    <div class="col-sm align-self-center p-0"><div class="form-control b-radius-0">$</div></div>
                                    <div class="col-sm-5 my-account-subcription pr-0">
                                          <div class="custom-control custom-checkbox basic">
                                              <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                              <label class="custom-control-label" for="customCheck2"></label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="row">
                                <div class="col-sm p-0">
                                  <input  type="text" class="form-control b-radius-0" name="hours" value="{{ $due_arr['num_hrs'] }}"></div>
                                <!-- <div class="form-control b-radius-0">## hours</div> -->
                                <div class="col-sm p-0">
                                  <input  type="text" class="form-control b-radius-0" name="due_date" value="{{ $due_arr['due_date'] }}">
                                  <!-- <div class="form-control b-radius-0">Date Due</div> -->
                                </div>
                         </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 pl-0">Surge?</div>
                    <div class="col-sm-9 pl-0">
                        <p class="font-weight-bold">Do you want to SURGE?</p>
                        <div class="row">
                            <div class="col-sm pl-0">Rush</div>
                            <div class="col-sm">
                                <div class="form-control b-radius-0">2 hours</div>
                            </div>
                            <div class="col-sm">
                                 <div class="row mt-2">
                                    <div class="col-sm align-self-center text-center p-0">Add $45</div>
                                    <div class="col-sm-5 my-account-subcription pr-0">
                                          <div class="custom-control custom-checkbox basic a-v-box2">
                                              <input type="checkbox" class="custom-control-input" name="surgeoffer[]" value="Always Rush" id="chkRush" {{$preference->surge_offer_option  === "Always Rush" ? 'checked' : '' }}>
                                              <label class="custom-control-label" for="chkRush"></label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Surge</div>
                            <div class="col-sm">
                                <div class="form-control b-radius-0">24 hours</div>
                            </div>
                            <div class="col-sm">
                                 <div class="row mt-2">
                                    <div class="col-sm align-self-center text-center p-0">Add $15</div>
                                    <div class="col-sm-5 my-account-subcription pr-0">
                                          <div class="custom-control custom-checkbox basic a-v-box2">
                                              <input type="checkbox" class="custom-control-input" value="Always Surge" id="chkSurge" {{$preference->surge_offer_option  === "Always Surge" ? 'checked' : '' }}>
                                              <label class="custom-control-label" for="chkSurge"></label>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-r-l">
                    <div class="col-sm-3">Your Preferences <br>Settings are</div>
                    <div class="col-sm-9">
                        <div class="mb-4"><b>Email Distribution</b></div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">People on <br>Email List</div>
                            <div class="col-sm">
                                  <!-- <div class="form-control b-radius-0">On</div> -->
                                  <input  type="text" class="form-control b-radius-0" name="emailist" required autofocus value="{{ $preference->email_distribution  == 1 ? 'On' : 'Off' }}">
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$0</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" name="chkEmailList" id="chkEmailList"  {{ $preference->email_distribution  == 1 ? 'checked' : '' }}>
                                                  <label class="custom-control-label" for="chkEmailList"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="my-4"><b>Broadcast Distribution (When Available)</b></div>
                        <div class="row">
                            <div class="col-sm pl-0">Agents in <br>Selected Suburbs</div>
                            <div class="col-sm">
                              <!-- <div class="form-control b-radius-0">On</div> -->
                              <input  type="text" class="form-control b-radius-0" name="broadcast" id="broadcast" required autofocus value="{{ $preference->broadcast_agent  === "1" ? 'On' : 'Off' }}">
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$0</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" name="chkBroadcast" id="chkBroadcast" {{ $preference->broadcast_agent  === "1" ? 'checked' : '' }}>
                                                  <label class="custom-control-label" for="chkBroadcast"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bot3 m-r-l">
                    <div class="col-sm-3 align-self-center">Extra's</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center"><b>DriveBy</b></div>
                            <div class="col-sm"><button type="button" class="btn btn-primary w-100 b-radius-7"><b>FREE</b></button></div>
                            <div class="col-sm">
                                <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$0</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" name="apply_driveby" value="1" id="customCheck15" checked>
                                                  <label class="custom-control-label" for="customCheck15"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-3 pl-0">Cost <br>Summary</div>
                    <div class="col-sm-9 px-0">
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Video</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" id="cost_standard_video" name="cost_standard_video" required autofocus value="{{ number_format($cost_standard_video, 2) }}" style="text-align: right" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Surge</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" id="cost_surge" name="cost_surge" required autofocus value="{{ number_format($cost_surge,2) }}" style="text-align: right" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Preferences</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" id="cost_preferences" name="cost_preferences" required autofocus value="{{ number_format($cost_total_preference,2) }}" style="text-align: right" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Extra's</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" id="cost_extra" name="cost_extra" required autofocus value="{{ number_format($cost_extra, 2) }}" style="text-align: right" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center"><b>Total</b></div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary cost-total" id="total_cost" name="total_cost" required autofocus value="{{ number_format($total_cost,2) }}" style="text-align: right" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-5">
                    <div class="align-self-center"><a href="/terms-condition">Terms and Conditions</a></div>
                    <input type="hidden" name="videotype" value="Standard">
                    <div><button type="submit" class="btn btn-primary bg-009900 btn-no-border px-4 b-radius-7"><b>CONFIRM</b></button></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')

  <script type="text/javascript">
    $(document).ready(function() {
        //for selecting only one checkbox at a time

        var standard_video = $("#cost_standard_video").val();
        var cost_surge = $("#cost_surge").val();
        var cost_pref = $("#cost_preferences").val();
        var cost_extra = $("#cost_extra").val();
        var total_cost =  $("#total_cost").val();

        $("#chkRush").click(function() {
            if($("#chkRush").is(':checked')){
                // Code in the case checkbox is checked.
                cost_surge = 45;
                var roundedSurgeValue = cost_surge.toFixed(2);
                $('#cost_surge').val(roundedSurgeValue);

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
        });

        $("#chkSurge").click(function() {
            if($("#chkSurge").is(':checked')){
                // Code in the case checkbox is checked.
                cost_surge = 15;
                var roundedSurgeValue = cost_surge.toFixed(2);
                $('#cost_surge').val(roundedSurgeValue);

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
                var roundedTotalCost = total_cost.toFixed(2);
                $('#total_cost').val(roundedTotalCost);
            }
        });

        $("#chkEmailList").click(function() {
            if( $("#chkEmailList").is(':checked') && $("#chkBroadcast").is(':checked')){
                // Code in the case checkbox is checked.
                $('#emailist').val('On');

                var emailist = 5.00;
                var broadcast = 5;
                cost_pref = emailist + broadcast;
                var roundedPrefValue = cost_pref.toFixed(2);
                $('#cost_preferences').val(roundedPrefValue);

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
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

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
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

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
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

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
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

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
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

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
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

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
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

                total_cost = parseInt(standard_video) + parseInt(cost_surge) + parseInt(cost_pref) + parseInt(cost_extra);
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


@stop
