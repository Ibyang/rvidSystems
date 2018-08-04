@extends('frontend.layouts.main')

    <style type="text/css">
        .modal-backdrop, .modal-backdrop.fade.in{ opacity: 0 !important; }
        .modal { top:100px; right:-480px; }
        .surge-popup .modal-content { border-radius:0px; border:1px solid #6600cc; background:#ffffff; }
    </style>

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title">My Video Tracker</h3>
            <h3 class="c-6600cc">Awaiting Action</h3>
            <div class="table-responsive">
              <table class="video-tracker mb-5">
                <tr>
                    <td></td>
                    <td></td>
                    <td>Progress</td>
                    <td class="text-center">Action Needed</td>
                </tr>
                @if(count($awaiting_videos) > 0)
                      @foreach($awaiting_videos as $awv)
                        <tr>
                            <td width="100">#{{ $awv->video_ID }}</td>
                            <td width="190">{{ $awv->videoAddress }}</td>
                            <td width="150">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: {{ $awv->total_progress }}%;" aria-valuenow="{{ $awv->total_progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                                  <span>{{ $awv->total_progress }}%</span>
                                </div>
                            </td>
                            <td width="200" class="text-right"><a href="{{ url('account/getPremiumVideoSystem/' . $awv->video_ID) }}">More Details +</a></td>
                        </tr>
                      @endforeach
                  @else
                        <tr><td colspan="4">No video available.</td></tr>
                  @endif
                
              </table>
            </div>
            <h3 class="c-6600cc">In Production</h3>
            <div class="table-responsive">
              <table class="table video-tracker mb-4">
                <tr>
                    <td></td>  
                    <td></td>
                    <td>Progress</td>
                    <td>Due Date</td>
                </tr>
                @if(count($production_videos) > 0)
                      @foreach($production_videos as $pv)
                        <tr>
                            <td width="100">#{{ $pv->video_ID }}</td>
                            <td width="190">{{ $pv->videoAddress }}</td>
                            <td width="150">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: {{ $pv->total_progress }}%;" aria-valuenow="{{ $pv->total_progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    <span>{{ $pv->total_progress }}%</span>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="d-flex">
                                  <div class="mr-auto">  
                                     {{ $pv->completion_date  != NULL ? $pv->completion_date : '12.01.2018' }}
                                  </div>
                                  <div><a href="" data-toggle="modal" data-target="#surgeModal" data-dbid="{{$pv->video_ID}}">Surge +</a></div>
                                </div>
                            </td>
                        </tr>
                      @endforeach
                  @else
                        <tr><td colspan="4">No video available.</td></tr>
                  @endif
              </table>
            </div>
            <h3 class="c-6600cc">What is the SURGE?</h3>
            <p class="text-justify">The Surge is a demand driven premium option for your Video production to have preferential delivery time within a 24-hour period (Surge) or a 2-hour period (Rush).<br><br>
            Each time you make a Video Order the system will ask you if you want to Surge or Rush and tell you the Cost of the Day (calculated from demand statistics). <br><br>
            Alternatively, you can select <b>SURGE ALWAYS ($15 fixed)</b> and <b>RUSH ALWAYS ($45 fixed)</b> and be guaranteed the preferential delivery time you want for a fixed cost - regardless of demand.</p>


            <form method="POST" action={{ route('account-update-surge') }}>
                {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-auto px-0 pt-2">Sign Up for</div>
                        <div class="col p-0">
                                <div class="row m-0">
                                    <div class="col-md-auto surge">
                                        <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" name="surgeoffer[]" id="chkSurge" value="Always Surge" {{$preference['surge_offer_option']  === "Always Surge" ? 'checked' : '' }}>
                                              <label class="custom-control-label" for="chkSurge"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-auto p-0">
                                        <div class="btn btn-primary surge-button">SURGE ALWAYS</div>
                                    </div>
                                    <div class="col-md-auto line-height18 pr-0">Less than 24 hours <br>$15.00 per Video</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-auto surge">
                                        <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" name="surgeoffer[]" id="chkRush" value="Always Rush" {{$preference['surge_offer_option']  === "Always Rush" ? 'checked' : '' }}>
                                              <label class="custom-control-label" for="chkRush"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-auto p-0">
                                        <div class="btn btn-primary surge-button">RUSH ALWAYS</div>
                                    </div>
                                    <div class="col-md-auto line-height18">Less than 2 hours <br>$45.00 per video</div>
                                </div>
                        </div>
                        <div class="col-md-auto p-0">
                            <button type="submit" class="btn btn-primary surge-button">APPLY</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 pl-0">
                            <h3 class="c-6600cc">Production Statistics</h3>
                                Delivery
                                <div class="row">
                                        <div class="col-sm-4 pl-0">Average Days <br>Production</div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control col-7" placeholder="Current Days">
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-4 pl-0">Forecast with <br>Surge Always</div>
                                        <div class="col-sm">
                                            <input type="text" class="form-control col-7" placeholder="Surge Always">
                                        </div>
                                </div>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="c-6600cc">Total Productions</h3><br>
                            <div class="pl-2">
                                <div class="my-2">
                                    <input type="text" class="form-control" placeholder="To Date">
                                </div>
                                <div class="mt-4">
                                    <input type="text" class="form-control" placeholder="To year">
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

            <div class="modal surge-popup" id="surgeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action=" {{ route('account-update-surge-video') }}">
                            {{ csrf_field() }}
                          <div class="modal-body">
                            <div class="btn btn-primary surge-button">SURGE ALWAYS</div>
                            <div class="row">
                                <div class="col-sm-3 pl-0">
                                    <b>#<span id="videoid"></span></b><br>
                                    <span id="videoAddress"></span>
                                    <!-- 63 North Rd
                                    Bassendean
                                    WA 6054 -->
                                </div>
                                <div class="col-sm step-three-register pr-0">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="custom-control custom-checkbox basic">
                                              <input type="checkbox" class="custom-control-input" name="surgeoption[]" id="customCheck3" value="Less than 24 hours">
                                              <label class="custom-control-label" for="customCheck3"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-auto">Less than 24 hours</div>
                                        <div class="col c-6600cc"><b>$xxx</b></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="custom-control custom-checkbox basic">
                                              <input type="checkbox" class="custom-control-input" name="surgeoption[]" id="customCheck4" value="Less than 12 hours">
                                              <label class="custom-control-label" for="customCheck4"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-auto">Less than 12 hours</div>
                                        <div class="col-md-auto c-6600cc"><b>$xxx</b></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-auto">
                                            <div class="custom-control custom-checkbox basic">
                                              <input type="checkbox" class="custom-control-input" name="surgeoption[]" id="customCheck5" value="Rush 2 hours">
                                              <label class="custom-control-label" for="customCheck5"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-auto">Rush 2 hours hours</div>
                                        <div class="col c-6600cc"><b>$xxx</b></div>
                                    </div>
                                </div>  
                            </div>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="align-items-end"><a href=" {{ route('account-terms-condition') }}" target="_blank">Terms and Conditions</a></div>
                                <div><button class="btn btn-primary bg-660">ACCEPT</button></div>
                            </div>
                          </div>
                     </form>     
                </div>
              </div>
            </div>
           
        </div>
    </div>
</div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">
        $(document).ready(function() {

            //for selecting only one checkbox at a time
            $('input[type="checkbox"]').on('change', function () {
                $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });

            $('#surgeModal').on('show.bs.modal', function(e) {

                $("#customCheck3").prop('checked', false);
                $("#customCheck4").prop('checked', false);
                $("#customCheck5").prop('checked', false);

                var vidid = $(e.relatedTarget).attr('data-dbid');
                console.log('the value of vidid is ', vidid);

                if(vidid) {
                    var stateSurge = '';
                    $.ajax({
                        url: '/getSurgeDetails/' + vidid,
                        type: "GET",
                        dataType: "JSON",
                        success:function(data) {
                            console.log("data is ", data);
                            $('#videoid').html(data.video_ID);
                            $('#vid').val(data.video_ID);
                            $('#videoAddress').html(data.videoAddress);
                            stateSurge = data.surge_offer;
                            console.log("the value of stateSurge is ", stateSurge);
                            if(stateSurge === 'Less than 24 hours'){
                                $("#customCheck3").prop('checked', true);
                                // $("#customCheck4").prop('checked', false);
                                // $("#customCheck5").prop('checked', false);
                            }
                            else if(stateSurge === 'Less than 12 hours'){
                                // $("#customCheck3").prop('checked', false);
                                $("#customCheck4").prop('checked', true);
                                // $("#customCheck5").prop('checked', false);
                            }
                            else if(stateSurge === 'Rush 2 hours'){
                                // $("#customCheck3").prop('checked', false);
                                // $("#customCheck4").prop('checked', false);
                                $("#customCheck5").prop('checked', true);
                            }

                        }
                    });
                }

            });


        });

    </script>
@stop