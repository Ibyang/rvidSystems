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
                            <td><a href=" {{ route('account-premium-video') }}">More Details +</a></td>
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
                    <td>Action Needed</td>
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
                            <td><a href="">More Details +</a></td>
                        </tr>
                      @endforeach
                  @else
                        <tr><td colspan="4">No video available.</td></tr>
                  @endif
              </table>
            </div>
            <h3>What is the SURGE?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan enim ac sagittis
            laoreet. Donec pretium, dui dictum tincidunt cursus, orci urna dapibus elit, eget egestas mauris
            lorem sit amet diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas.
            In adipiscing lorem non orci placerat semper. Maecenas aliquam leo eget tincidunt elementum.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

            <div class="row">
                <div class="col">Sign Up for</div>
                <div class="col">
                    <div class="surge d-inline-block">
                        <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck1" value="Always Surge" name="surgeoffer[]" {{ $preference->surge_offer_option  === "Always Surge" ? 'checked' : '' }}>
                                  <label class="custom-control-label" for="customCheck1"></label>
                        </div>
                    </div>
                    <div class="d-inline-block btn btn-primary">SURGE ALWAYS</div><br>
                    <div class="surge d-inline-block">
                        <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck2" value="Always Rush" name="surgeoffer[]" {{ $preference->surge_offer_option  === "Always Rush" ? 'checked' : '' }}>
                                  <label class="custom-control-label" for="customCheck2"></label>
                        </div>
                    </div>
                    <div class="d-inline-block btn btn-primary">RUSH ALWAYS</div>
                    <div class="surge d-inline-block">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3" value="Sometimes" name="surgeoffer[]" {{ $preference->surge_offer_option  === "Sometimes" ? 'checked' : '' }}>
                            <label class="custom-control-label" for="customCheck3"></label>
                        </div>
                    </div>
                    <div class="d-inline-block btn btn-primary">SOMETIMES (Ask Me)</div>
                </div>
                <div class="col">
                    Less than 24 hours <br>$15.00 per Video<br>
                    Less than 2 hours <br>$45.00 per video
                
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">APPLY</button>
                </div>
            </div>
            
            <br><div class="row">
                <div class="col-sm">
                    <h3>Delivery</h3>
                    <div class="row">
                        <div class="col">Average Days <br>Production</div>
                        <div class="col"><input type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col">Forecast with <br>Surge Always</div>
                        <div class="col"><input type="text"></div>
                    </div>
                </div>
                <div class="col-sm">
                    <h3>Total Productions</h3>
                    <input type="text" placeholder="To Date">
                    <input type="text" placeholder="To year">
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection


<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

        //for selecting only one checkbox at a time
        $('input[type="checkbox"]').on('change', function () {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });

    });

</script>

