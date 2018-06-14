                Who will pay for Videos
                    <div class="row mb-3">
                        <div class="col-sm">
                            <input type="text" class="form-control" name="person_name" id="person_name" value="{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}">
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control" name="contact_name" id="contact_name" placeholder="Contact Name (if different)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm">
                            <input type="text" class="form-control" name="name_agency" name="name_agency" value="{{$agent['name_agency']}}">
                        </div>
                        <div class="col-sm">
                            <input type="email" class="form-control" name="email" id="email" value="{{$agent['email']}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm">
                            <textarea cols="10" rows="5" class="form-control" name="invoice_address" id="invoice_address">{{$agent['address']}}</textarea>
                        </div>
                        <div class="col-sm"><input type="text" class="form-control" name="mobile" id="mobile" value="{{$agent['mobile']}}"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm">
                            <div class="row">
                                <div class="col-sm">
                                    <input type="text" class="form-control" name="suburb" id="suburb" value="{{$agent['suburb']}}">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name="state" id="state" value="{{$agent['state']}}">
                                </div>
                                <div class="col-sm">
                                    <input type="text" class="form-control" name="postcode" id="postcode" value="{{$agent['postcode']}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm step-three-register">
                            <div class="custom-control custom-checkbox premium">
                                <input type="checkbox" class="custom-control-input" id="accept_terms" value="1" name="accept_terms">
                                <label class="custom-control-label" for="accept_terms">I accept terms and conditions of use</label>
                            </div>
                        </div>
                    </div>