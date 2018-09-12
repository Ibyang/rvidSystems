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
                            <input type="text" class="form-control" name="address" id="address" value="{{$agent['address']}}">
                            {{--<textarea cols="10" rows="5" class="form-control" name="invoice_address" id="invoice_address">{{$agent['address']}}</textarea>--}}
                        </div>
                        <div class="col-sm"><input type="text" class="form-control" name="mobile" id="mobile" value="{{$agent['mobile']}}"></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm">
                            <input type="text" class="form-control" name="address2" id="address2" placeholder="Address2" value="{{$agent['address2']}}">
                            {{--<textarea cols="10" rows="5" class="form-control" name="invoice_address" id="invoice_address">{{$agent['address']}}</textarea>--}}
                        </div>
                        <div class="col-sm">

                        </div>
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



<div class="border-bot4 pb-4">
    <h4 class="reg-title mt-4 mb-3">Will the Agency Pay?</h4>
    <div class="row">
        <div class="col-sm">
            <input id="name" type="text" class="form-control" name="person_name" id="person_name" placeholder="Entity Name" value="{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}">
        </div>
        <div class="col-sm">
            <input id="name" type="text" class="form-control" name="contact_name" id="contact_name" placeholder="Contact Name">
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm">
            <input id="name" type="text" class="form-control" name="name_agency" name="name_agency" placeholder="ACN/ABN" value="{{$agent['name_agency']}}">
        </div>
        <div class="col-sm">
            <input id="name" type="text" class="form-control" name="mobile" id="mobile" placeholder="Contact Mobile" value="{{$agent['mobile']}}">
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <textarea class="form-control" name="address" id="address" placeholder="Address">{{$agent['address']}}</textarea>
        </div>
        <div class="col-sm">
            <input id="name" type="email" class="form-control" name="email" id="email" placeholder="Email for Invoice" value="{{$agent['email']}}">
        </div>
    </div>
    <div class="row my-3">
        <div class="col-sm">
                <div class="row">
                        <div class="col-sm"><input type="text" class="form-control" name="suburb" id="suburb" value="{{$agent['suburb']}}" placeholder="Suburb" required></div>
                        <div class="col-sm"><input type="text" class="form-control" name="state" id="state" value="{{$agent['state']}}" placeholder="State" required></div>
                        <div class="col-sm"><input type="text" class="form-control" name="postcode" id="postcode" value="{{$agent['postcode']}}" placeholder="Post Code" required></div>
                </div>
        </div>
        <div class="col-sm step-three-register">
                <div class="custom-control custom-checkbox premium">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label chck-a text-justify" for="customCheck5">I accept that should my nominated payment party decline to accept my
                    purchase invoice I will be liable for payment</label>
                </div>
        </div>
    </div>

    <div class="d-flex flex-row-reverse">
        <div id="finishTerms">
            <!-- <button class="btn btn-primary bg-009900 btn-no-border px-5 py-2 b-radius-7" type="submit" id="btnAccept" name="action" value="accept">Finish</button> -->
            <a href="" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#TermsConditionsModal"><button class="btn btn-primary bg-009900 btn-no-border px-5 py-2 b-radius-7" type="button" id="btnAccept">Finish</button></a>
        </div>
        <div id="finishSubmit" style="display: none">
            <!-- <button class="btn btn-primary bg-009900 btn-no-border px-5 py-2 b-radius-7" type="submit" id="btnAccept" name="action" value="accept">Finish</button> -->
            <button class="btn btn-primary bg-009900 btn-no-border px-5 py-2 b-radius-7" type="submit" id="btnSubmit" name="action" value="accept">Finish</button>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between join-step-next p-1">
            <button class="btn btn-primary bg-333 btn-no-border px-4" type="button" name="action" value="previousStep"><i class="arrow-left"></i> BACK</button>
</div>


<!-- Video Modal for What is Revid -->
<div class="modal fade" id="TermsConditionsModal"
         tabindex="-1" role="dialog"
         aria-labelledby="VideoModalLabel">
        <div class="modal-dialog" role="document" style="max-width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Terms and Conditions</h4>
                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" style="height:500px; overflow:auto;">
                    @if($content['content_text'] != null)
                            {!! $content['content_text'] !!}
                    @endif
                    <div class="col-sm step-three-register">
                        <div class="custom-control custom-checkbox termscondition">
                            <input type="checkbox" class="custom-control-input" id="chkTermsConditions" name="chkTermsConditions">
                            <label class="custom-control-label text-justify" for="chkTermsConditions" style="padding-right: 200px">I have read and understand the REVid systems terms and conditions above</label>
                            <button class="btn btn-primary bg-009900 btn-no-border py-2 b-radius-7" type="button" id="btnIAccept" data-dismiss="modal" style="display: none">I Accept</button>
                        </div>
                        <!-- <input type="checkbox" name="chkTermsConditions" id="chkTermsConditions" style=""> I have read and understand the REVid systems terms and conditions above -->
                    </div>    
                </div>
                <div class="modal-footer" id="modal-close" style="display: none;">
                    <button type="button"
                            class="btn btn-default"
                            data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
</div>


