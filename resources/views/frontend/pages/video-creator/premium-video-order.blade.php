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
            <h3 class="my-account-title">Custom Video Order</h3>
            <form method="POST" action="{{ route('postVideoOrder') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-3 pl-0">Property Address <br>URL Address</div>
                    @if($url_premium != null || $url_premium != '')
                        <div class="col-sm-9">
                            <textarea name="url_premium" row="10" cols="60" class="form-control w-100 b-radius-0">{{ $url_premium }}</textarea>    
                        </div>
                    @else
                        <div class="col-sm-9">
                            <textarea name="url_premium" row="10" cols="60" class="form-control w-100 b-radius-0">{{ $agent->address . ' ' . $agent->suburb . ' ' . $agent->state . ' ' . $agent->postcode  }}</textarea>
                        </div>
                    @endif
                </div>
                <div class="row my-3">
                    <div class="col-sm-3 pl-0">Action Receipt #</div>
                    <div class="col-sm-9 pl-0">
                         Your Video Number is<br>
                         <!-- <div class="form-control b-radius-0">XXXX</div> -->
                         <input type="text" class="form-control" name="videonumber" required autofocus value="{{ $vidid }}" style="text-align: right" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0 pt-3">Account Manager</div>
                    <div class="col-sm-9 pl-0">
                         <div class="row">
                            <div class="col-md pl-0">
                                <input type="text" class="form-control mb-2" name="acct_manager" placeholder="Name" required autofocus>
                                <textarea name="telephone" rows="3" class="form-control w-100 b-radius-0" placeholder="Contact Details"></textarea>
                            </div>
                            <div class="col-md-auto">
                                Is your <br>Primary contact<br> for the Custom<br> Video Production<br> Process.<br>
                            </div>
                            <div class="col-md-4 pr-0">
                                <b>WILL CONTACT <br>YOU BEFORE</b>
                                <!-- <div class="form-control b-radius-0 mb-2"> &nbsp; </div>
                                <div class="form-control b-radius-0"> &nbsp; </div> -->
                                <input type="text" name="acct_manager"><br>
                                <input type="text" name="acct_details">
                            </div>
                         </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-sm-3 pl-0">Custom Video <br>Production <br>Process</div>
                    <div class="col-sm-9 pl-0 c-v-order">
                          <img class="img-fluid" src={{ asset('storage/steps-video-order.jpg') }} />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Your Preferences <br>Settings are</div>
                    <div class="col-sm-9 pl-0">
                        <!-- <div class="row m-0">
                            <div class="col-sm pl-0">Company Website</div>
                            <div class="col-sm">
                                 <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                    <div class="col-sm align-self-center text-right p-0">$5</div>
                                    <div class="col-sm-5 my-account-subcription pr-0">
                                          <div class="custom-control custom-checkbox basic a-v-box2">
                                              <input type="checkbox" class="custom-control-input" id="customCheck5">
                                              <label class="custom-control-label" for="customCheck5"></label>
                                          </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">External Site #1</div>
                            <div class="col-sm"><div class="form-control text-center b-radius-0 px-1">Realestate.com</div></div>
                            <div class="col-sm">
                                   <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                  <label class="custom-control-label" for="customCheck6"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">External Site #2</div>
                            <div class="col-sm">
                                 <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                  <label class="custom-control-label" for="customCheck7"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Facebook</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                 <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                  <label class="custom-control-label" for="customCheck8"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Youtube</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                 <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                  <label class="custom-control-label" for="customCheck9"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">LinkedIn</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                  <label class="custom-control-label" for="customCheck10"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Twitter</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                  <label class="custom-control-label" for="customCheck11"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Googple Plus</div>
                            <div class="col-sm">
                                  <div class="form-control b-radius-0">Sometimes</div>
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                  <label class="custom-control-label" for="customCheck12"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div> -->
                        <div class="my-4"><b>Email Distribution (on completion)</b></div>
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center">On</div>
                            <div class="col-sm">
                                  <!-- <div class="form-control b-radius-0">Sometimes</div> -->
                                  <input  type="text" class="form-control" name="emailist" required autofocus value="{{ $preference->email_distribution  == 1 ? 'On' : 'Off' }}">
                            </div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" name="chkEmailList" id="chkEmailList" {{ $preference->email_distribution  == 1 ? 'checked' : '' }}>
                                                  <label class="custom-control-label" for="chkEmailList"></label>
                                              </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        <div class="my-4"><b>Broadcast Distribution</b></div>
                        <div class="row">
                            <div class="col-sm pl-0">Agents in <br>Your Suburbs</div>
                            <div class="col-sm"><div class="form-control b-radius-0">On</div></div>
                            <div class="col-sm">
                                  <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$5</div>
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
                <div class="row border-bot3">
                    <div class="col-sm-3 pl-0 pt-3">Extra's</div>
                    <div class="col-sm-9 pl-0">
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center"><b>DriveBy</b></div>
                            <div class="col-sm"><button type="button" class="btn btn-primary w-100"><b>FREE</b></button></div>
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
                        <div class="row">
                            <div class="col-sm pl-0 align-self-center"><b>LookFirst</b></div>
                            <div class="col-sm"><button type="button" class="btn btn-primary w-100"><b>FREE</b></button></div>
                            <div class="col-sm">
                                <div class="row mt-2">
                                        <div class="col-sm align-self-center text-right p-0">$0</div>
                                        <div class="col-sm-5 my-account-subcription pr-0">
                                              <div class="custom-control custom-checkbox basic a-v-box2">
                                                  <input type="checkbox" class="custom-control-input" name="apply_lookfirst" value="1" id="customCheck16" checked>
                                                  <label class="custom-control-label" for="customCheck16"></label>
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
                                 <!-- <input type="text" class="form-control cost-summary" name="" value="$75.00" disabled> -->
                                 <input type="text" class="form-control" id="cost_premium_video" name="cost_premium_video" required autofocus value="{{ number_format($cost_premium_video, 2) }}" style="text-align: right">
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Surge</div>
                            <div class="col-sm-9 px-0">
                                 <input type="text" class="form-control cost-summary" name="" value="$75.00" disabled>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Preferences</div>
                            <div class="col-sm-9 px-0">
                                 <!-- <input type="text" class="form-control cost-summary" name="" value="$25.00" disabled> -->
                                  <input type="text" class="form-control cost-summary" id="cost_preferences" name="cost_preferences" required autofocus value="{{ number_format($cost_total_preference,2) }}" style="text-align: right">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center">Extra's</div>
                            <div class="col-sm-9 px-0">
                                 <!-- <input type="text" class="form-control cost-summary" name="" disabled value="$0.00"> -->
                                 <input type="text" class="form-control cost-summary" id="cost_extra" name="cost_extra" required autofocus value="{{ number_format($cost_extra, 2) }}" style="text-align: right">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0 align-self-center"><b>Total</b></div>
                            <div class="col-sm-9 px-0">
                                 <!-- <input type="text" class="form-control cost-summary cost-total" name="" value="$175.00" disabled> -->
                                 <input type="text" class="form-control cost-summary cost-total" id="total_cost" name="total_cost" required autofocus value="{{ number_format($total_cost,2) }}" style="text-align: right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mb-5">
                    <div><a href=" {{ route('account-terms-condition') }}" target="_blank">Terms and Conditions</a></div>
                    <div>
                        <div class="border-ccc p-3 mb-4 line-height20">Custom Video<br>
                            Productions<br>
                            are <b>NOT CHARGED</b><br>
                            to your ACCOUNT<br>
                            UNTIL COMPLETION<br>
                        </div>
                        <button type="submit" id="btnConfirm" class="btn btn-primary bg-009900 btn-no-border px-4 w-100"><b>CONFIRM</b></button>
                    </div>
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




@stop
