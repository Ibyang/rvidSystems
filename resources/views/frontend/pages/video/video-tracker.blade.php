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
            <h3>My Video Tracker</h3>
            <h3 class="c-6600cc">Awaiting Action</h3>
            <div class="table-responsive">
              <table class="table video-tracker">
                <tr>
                    <td colspan="2"></td>  
                    <td>Progress</td>
                    <td>Action Needed</td>
                </tr>
                <tr>
                    <td>xxxx</td>
                    <td>63 north Rd</td>
                    <td>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            <span>25%</span>
                        </div>
                    </td>
                    <td><a href="">More Details +</a></td>
                </tr>
              </table>
            </div>
            <h3>In Production</h3>
            <div class="table-responsive">
              <table class="table video-tracker">
                <tr>
                    <td colspan="2"></td>  
                    <td>Progress</td>
                    <td>Action Needed</td>
                </tr>
                <tr>
                    <td>xxxx</td>
                    <td>63 north Rd</td>
                    <td>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            <span>25%</span>
                        </div>
                    </td>
                    <td><a href="">More Details +</a></td>
                </tr>
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
                                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                                  <label class="custom-control-label" for="customCheck1"></label>
                        </div>
                    </div>
                    <div class="d-inline-block btn btn-primary">SURGE ALWAYS</div><br>
                    <div class="surge d-inline-block">
                        <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                                  <label class="custom-control-label" for="customCheck2"></label>
                        </div>
                    </div>
                    <div class="d-inline-block btn btn-primary">RUSH ALWAYS</div>
                </div>
                <div class="col">
                    Less than 24 hours <br>$15.00 per Video<br><br>
                    Less than 2 hours <br>$45.00 per video
                
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">APPLY</button>
                </div>
            </div>
            
            <div class="row">
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

