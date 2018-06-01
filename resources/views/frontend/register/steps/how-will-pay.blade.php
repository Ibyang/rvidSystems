                How will you pay
                <div class="row step-three-register">
                    <div class="col-sm">
                        <div class="block-grey">
                            <div class="custom-control custom-checkbox premium">
                              <input type="checkbox" class="custom-control-input" id="credit_card" value="1" name="credit_card">
                              <label class="custom-control-label" for="credit_card">Credit Card</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="block-grey">
                            <div class="custom-control custom-checkbox premium">
                                  <input type="checkbox" class="custom-control-input" id="invoice" value="1" name="invoice">
                                  <label class="custom-control-label" for="invoice">Invoice</label>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row mb-3 mt-3">
                    <div class="col-sm"><input type="text" class="form-control" name="cardnumber" id="cardnumber" placeholder="Card Number"></div>
                    <div class="col-sm step-three-register">
                        <div class="custom-control custom-checkbox premium">
                              <input type="checkbox" class="custom-control-input" id="invoice_apply" value="1" name="invoice_apply">
                              <label class="custom-control-label" for="invoice_apply">$5 per invoice applied to costs</label>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm"><input type="text" class="form-control" name="expirymonth" id="expirymonth" placeholder="Expiry Month"></div>
                            <div class="col-sm"><input type="text" class="form-control" name="expiryyear" id="expiryyear" placeholder="Expiry Year"></div>
                            <div class="col-sm"><input type="text" class="form-control" name="ccv" id="ccv" placeholder="CCV"></div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
                </div>
                <div class="row mt-4">
                    {{--<div class="col-sm">--}}
                        {{--<div class="float-r">--}}
                            {{--<button class="btn btn-primary">Accept</button>--}}
                        {{--</div>--}}
                    {{--</div>  --}}
                    <div class="col-sm">
                        <div class="float-r">

                            @if(!empty($payment) || $payment != null)
                                <input type="hidden" name="modeAction" id="modeAction" value="editTemplate">
                            @else
                                <input type="hidden" name="modeAction" id="modeAction" value="addTemplate">
                            @endif

                            <button class="btn btn-primary" type="submit" id="btnAccept" disabled>
                                Accept
                            </button>
                        </div>
                    </div>
                </div>  