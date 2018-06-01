@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form">
            <br><h3>My Video Tracker</h3>
            <hr>
            <h3 class="c-6600cc">Awaiting Action</h3>
            <div class="table-responsive">
              <table class="table video-tracker">
                <tr>
                    <td colspan="2"></td>  
                    <td>Progress</td>
                    <td>Action Needed</td>
                </tr>
                  @if(count($awaiting_videos) > 0)
                      @foreach($awaiting_videos as $awv)
                        <tr>
                            <td>#{{ $awv->video_ID }}</td>
                            <td>{{ $awv->videoAddress }}</td>
                            <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: {{ $awv->total_progress }}%;" aria-valuenow="{{ $awv->total_progress }}" aria-valuemin="0" aria-valuemax="100"><span style="color: black">{{ $awv->total_progress }}%</span></div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ url('account/getPremiumVideoSystem/' . $awv->video_ID) }}">More Details +</a>
                            </td>
                        </tr>
                      @endforeach
                  @else
                        <tr><td colspan="4">No video available.</td></tr>
                  @endif
              </table>
            </div>
            <br><h3>In Production</h3>
            <div class="table-responsive">
              <table class="table video-tracker">
                <tr>
                    <td colspan="2"></td>  
                    <td>Progress</td>
                    <td>Due Date</td>
                </tr>
                  @if(count($production_videos) > 0)
                      @foreach($production_videos as $pv)
                        <tr>
                            <td>#{{ $pv->video_ID }}</td>
                            <td>{{ $pv->videoAddress }}</td>
                            <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: {{ $pv->total_progress }}%;" aria-valuenow="{{ $pv->total_progress }}" aria-valuemin="0" aria-valuemax="100"><span style="color: black">{{ $pv->total_progress }}%</span></div>
{{--                                    <span>{{ $pv->total_progress }}%</span>--}}
                                </div>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#surgeModal" data-dbid="{{$pv->video_ID}}">Surge +</a></td>
                        </tr>
                      @endforeach
                  @else
                        <tr><td colspan="4">No video available.</td></tr>
                  @endif
              </table>
            </div>

            <h3 class="c-6600cc">What is the SURGE?</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan enim ac sagittis
                laoreet. Donec pretium, dui dictum tincidunt cursus, orci urna dapibus elit, eget egestas mauris
                lorem sit amet diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas.
                In adipiscing lorem non orci placerat semper. Maecenas aliquam leo eget tincidunt elementum.
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>


            <form method="POST" action={{ route('account-update-surge') }}>
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-auto pl-0">Sign Up for</div>
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
                            <div class="col-md-auto line-height18">Less than 24 hours <br>$15.00 per Video</div>
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
                        <div class="row col-8">
                            <div class="col-sm pl-0">Average Days <br>Production</div>
                            <div class="col-sm"><input type="text" placeholder="Current Days"></div>
                        </div>
                        <div class="row col-8">
                            <div class="col-sm pl-0">Forecast with <br>Surge Always</div>
                            <div class="col-sm"><input type="text" placeholder="Surge Always"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="c-6600cc">Total Productions</h3><br>
                        <div class="col-10">
                            <div class="my-2">
                                <input type="text" placeholder="To Date">
                            </div>
                            <div class="mt-4">
                                <input type="text" placeholder="To year">
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
                                    <div class="col-sm-3 pl-0" style="overflow: auto">
                                        <b>#<span id="videoid"></span></b><br>
                                        <span id="videoAddress"></span>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="row">
                                            <div class="col-md-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="surgeoption[]" id="customCheck3" value="Less than 24 hours">
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-auto">Less than 24 hours</div>
                                            <div class="col c-6600cc"><b>$xxx</b></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="surgeoption[]" id="customCheck4" value="Less than 12 hours">
                                                    <label class="custom-control-label" for="customCheck4"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-auto">Less than 12 hours</div>
                                            <div class="col c-6600cc"><b>$xxx</b></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-auto">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="surgeoption[]" id="customCheck5" value="Rush 2 hours">
                                                    <label class="custom-control-label" for="customCheck5"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-auto">Rush 2 hours</div>
                                            <div class="col c-6600cc"><b>$xxx</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm pl-0"><a href="">Terms and Conditions</a></div>
                                    <input type="hidden" name="vid" id="vid">
                                    <div class="col-sm"><button type="submit" class="btn btn-primary">ACCEPT</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .modal-backdrop, .modal-backdrop.fade.in{ opacity: 0 !important; }
                .modal { top:100px; right:-480px; }
                .modal-content { border-radius:0px; border:1px solid #6600cc; }
            </style>

        
        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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

