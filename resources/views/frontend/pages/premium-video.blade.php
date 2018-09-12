@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form pb-5"> 
            <h3 class="my-account-title">Custom Video System</h3> 
            <table class="table-action" cellpadding="0" cellspacing="0" width="100%">
                <tr class="font-weight-bold bg-ccc"> 
                    <td width="170">Video #</td>
                    <td width="200">Address</td>
                    <td>Progress</td>
                </tr>
                <tr>
                    <td>{{ $premium['ID'] }}</td>
                    <td>{{ $premium['videoAddress'] }}</td>
                    <td>
                        <div class="p-v-progress">
                            <div class="progress">
                                @if($premium['progress_value'] == NULL)
                                    @php $progress_value = 0; @endphp
                                @else
                                    @php $progress_value = $premium['progress_value']; @endphp
                                @endif
                                <div class="progress-bar" role="progressbar" style="width: {{ $progress_value }}%;" aria-valuenow="{{ $progress_value }}" aria-valuemin="0" aria-valuemax="100"><span style="color: black">{{ $progress_value }}%</span></div>
                                <!-- <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><b>30%</b></div> -->
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table-action mt-5" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td width="170">Account Manager</td>
                    <td>{{ $premium['account_manager'] }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $premium['email'] }}</td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td>{{ $premium['telephone'] }}</td>
                </tr>
                <tr>
                    <td>Skype</td>
                    <td>{{ $premium['skype'] }}</td>
                </tr>
            </table>
            <div class="bg-ccc py-2 px-3"><b>Action Station</b></div>
            <table class="table-action" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td width="170"><i class="make-video-step v-pictures"></i><div class="d-inline-block align-top p-2">Pictures</div></td>
                    <td width="170">
                        <div class="d-flex justify-content-between">
                            <div>
                                @if($premium_progress['picture_progress'] < 15)
                                    To Complete
                                @elseif($premium_progress['picture_progress'] == 15)
                                    Done
                                @endif
                            </div>
                            <div><i class="action-icon"></i></div>
                        </div>
                    </td>
                    <td>We will obtain your pictures either directly or through <a href=" {{ route('account-premium-video-system-pictures') }} ">Picture Tool</a>.</td>
                </tr>
                <tr>
                    <td><i class="make-video-step v-script"></i><div class="d-inline-block align-top p-2">Script</div></td> 
                    <td>
                        <div class="d-flex justify-content-between">
                            <div>
                                @if($premium_progress['script_progress'] < 15)
                                    To Complete
                                @elseif($premium_progress['script_progress'] == 15)
                                    Done
                                @endif
                            </div>
                            <div><i class="action-icon"></i></div>
                        </div>
                    </td>
                    <td>We will work with you to write your script <a href=" {{ route('account-premium-video-system-script') }} ">Script Tool</a>.</td>
                </tr>
                <tr>
                    <td><i class="make-video-step v-template"></i><div class="d-inline-block align-top p-2">Template</div></td> 
                    <td>
                        <div class="d-flex justify-content-between">
                            <div>
                                @if($premium_progress['template_progress'] < 15)
                                    To Complete
                                @elseif($premium_progress['template_progress'] == 15)
                                    Done
                                @endif
                            </div>
                            <div><i class="action-icon"></i></div>
                        </div>
                    </td>
                    <td>We will apply your preferences or <a href=" {{ route('account-premium-video-system-template') }} ">Update Template</a>.</td>
                </tr>
                <tr>
                    <td><i class="make-video-step v-voice"></i><div class="d-inline-block align-top pl-2 py-2">Voice + Music</div></td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <div>
                                @if($premium_progress['edits'] < 40)
                                    To Complete
                                @elseif($premium_progress['voice_and_music'] == 40)
                                    Done
                                @endif
                            </div>
                            <div><i class="action-icon action-cross"></i></div>
                        </div>
                    </td>
                    <td>We will apply your preferences or <a href="">Update Voice + Music</a></td>
                </tr>
                <tr>
                    <td><i class="make-video-step v-finish"></i><div class="d-inline-block align-top p-2">Finish</div></td>
                    <td><div class="d-flex justify-content-between">
                            <div>
                                @if($premium_progress['edits'] < 40)
                                    To Complete
                                @elseif($premium_progress['voice_and_music'] == 40)
                                    Done
                                @endif
                            </div>
                            <div><i class="action-icon action-cross"></i></div>
                        </div>
                    </td>
                    <td>You will need to approve storyboard before for production. <a href=" {{ route('account-premium-video-system-storyboard') }} ">See Storyboard</a>.</td>
                </tr>
                <tr>
                    <td><b>>{{ $premium['ID'] }}</b></td>
                    <td colspan="2" class="my-account-subcription">
                        <div class="row">
                            <div class="col-sm align-self-center"><b>{{ $premium['videoAddress'] }}</b></div>
                            <div class="col-md-auto">
                                <div class="custom-control checkbox-margin custom-checkbox standard">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <button type="submit" class="btn btn-primary btn-no-border px-3  b-radius-7 bg-009900 mt-1"><b>APPROVED</b></button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            
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


