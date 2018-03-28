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
            <h3>Generic Video Order</h3>
            <form>
                <div class="row">
                    <div class="col-sm-3 pl-0">URL Reference</div>
                    <div class="col-sm-9">
                         <input type="text" class="form-control" name="url" required autofocus placeholder="www...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Action Receipt #</div>
                    <div class="col-sm-9">
                         Your Video Number is<br>
                         <input  type="text" class="form-control" name="url" required autofocus placeholder="xxx">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Video Production</div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-9 pl-0">
                                 <b>Generic Video</b><br>
                                 Estimated completion time is<br>
                            </div>
                            <div class="col-sm-3 text-right my-account-subcription">
                                  <p class="d-inline-block font-weight-bold">$75</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck2">
                                      <label class="custom-control-label" for="customCheck2"></label>
                                  </div>
                            </div>
                         </div>
                         <div class="row">
                                <div class="col-sm p-0"><input  type="text" class="form-control" name="hours" required autofocus placeholder="## hours"></div>
                                <div class="col-sm p-0"><input  type="text" class="form-control" name="date" required autofocus placeholder="Date Due"></div>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Surge?</div>
                    <div class="col-sm-9">
                        <p class="font-weight-bold">Do you want to SURGE?</p>
                        <div class="row">
                            <div class="col-sm pl-0">Rush</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder="2 hours"></div>
                            <div class="col-sm">
                                 <p class="d-inline-block font-weight-bold">Add $45</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck3">
                                      <label class="custom-control-label" for="customCheck3"></label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm pl-0">Surge</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder="24 hours"></div>
                            <div class="col-sm">
                                 <p class="d-inline-block font-weight-bold">Add $15</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                                      <label class="custom-control-label" for="customCheck4"></label>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pl-0">Your Preferences <br>Settings are</div>
                    <div class="col-sm-9">
                        <div class="row">
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
                        </div>
                        <b>Email Distribution (on completion)</b>
                        <div class="row">
                            <div class="col-sm pl-0">Your Email List</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck13">
                                      <label class="custom-control-label" for="customCheck13"></label>
                                  </div>
                            </div>
                        </div>
                        <b>Broadcast Distribution</b>
                        <div class="row">
                            <div class="col-sm pl-0">Agents in <br>Your Suburbs</div>
                            <div class="col-sm"><input  type="text" class="form-control" name="" required autofocus placeholder=""></div>
                            <div class="col-sm">
                                  <p class="d-inline-block font-weight-bold">$5</p>
                                  <div class="d-inline-block custom-control custom-checkbox basic">
                                      <input type="checkbox" class="custom-control-input" id="customCheck14">
                                      <label class="custom-control-label" for="customCheck14"></label>
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
                                      <input type="checkbox" class="custom-control-input" id="customCheck15">
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
                                      <input type="checkbox" class="custom-control-input" id="customCheck15">
                                      <label class="custom-control-label" for="customCheck15"></label>
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
                                 <input type="text" class="form-control" name="" required autofocus placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0">Surge</div>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" name="" required autofocus placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0">Preferences</div>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" name="" required autofocus placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0">Extra's</div>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" name="" required autofocus placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 pl-0">Total</div>
                            <div class="col-sm-9">
                                 <input type="text" class="form-control" name="" required autofocus placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm"><a href="">Terms and Conditions</a></div>
                    <div class="col-sm"><button type="button" class="btn btn-primary">CONFIRM</button></div>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection
