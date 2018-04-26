 <div class="container register-form">
     <form class="form-horizontal" id="frmprocessStep4" method="POST" action="{{ route('processStep4') }}">
         <h3>Your Payment Details</h3>
         {{ csrf_field() }}
         <div class="row">
             <h3>Subscription + Storage Plans</h3>
         </div>
         <div class="row">
             <div class="col-sm">
                 <div class="col-sm-6">
                     <div class="c-subs">
                         <span class="tooltip" title="Casual Subscription at $11/month">Some Text</span>
                         <div class="row">
                             <div class="col">Casual</div>
                             <div class="col">$11/month</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="custom-control custom-checkbox casual">
                         <input type="checkbox" class="group1 custom-control-input" id="customCheck1" value="Casual" name="subscription1[]" required>
                         <label class="custom-control-label" for="customCheck1"></label>
                     </div>
                 </div>
             </div>
             <div class="col-sm">
                 <div class="col-sm-6">
                     <div class="s-subs">
                         <span class="tooltip" title="Standard Subscription at $66/month">Some Text</span>
                         <div class="row">
                             <div class="col">Standard</div>
                             <div class="col">$66/month</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="custom-control custom-checkbox standard">
                         <input type="checkbox" class="group1 custom-control-input" id="customCheck2" value="Standard" name="subscription1[]">
                         <label class="custom-control-label" for="customCheck2"></label>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm">
                 <div class="col-sm-6">
                     <div class="b-subs">
                         <span class="tooltip" title="Basic Subscription at $33/month">Some Text</span>
                         <div class="row">
                             <div class="col">Basic</div>
                             <div class="col">$33/month</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="custom-control custom-checkbox basic">
                         <input type="checkbox" class="group1 custom-control-input" id="customCheck3" value="Basic" name="subscription1[]">
                         <label class="custom-control-label" for="customCheck3"></label>
                     </div>
                 </div>
             </div>
             <div class="col-sm">
                 <div class="col-sm-6">
                     <div class="p-subs">
                         <span class="tooltip" title="Premium Subscription at $99/month">Some Text</span>
                         <div class="row">
                             <div class="col">Premium</div>
                             <div class="col">$99/month</div>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-4">
                     <div class="custom-control custom-checkbox premium">
                         <input type="checkbox" class="group1 custom-control-input" id="customCheck4" value="Premium" name="subscription1[]">
                         <label class="custom-control-label" for="customCheck4"></label>
                     </div>
                 </div>
             </div>
         </div>
         <hr>
         <br>
         <h3>Who will pay for Videos</h3>
         @if(!empty($details))
             <div class="row">
                 <div class="col-sm">
                     <div class="form-group">
                         <input id="person_name" type="text" class="form-control" name="person_name" required autofocus value="{{ $details->firstname }}&nbsp;{{ $details->lastname }}">
                         @if ($errors->has('person_name'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('person_name') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                         <input id="name_agency" type="text" class="form-control" name="name_agency" required autofocus value="{{ $details->name_agency }}">
                         @if ($errors->has('name_agency'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('name_agency') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group">
                         <textarea id="invoice_address" type="text" class="form-control" name="invoice_address" required autofocus>{{ $details->address }}</textarea>
                         @if ($errors->has('invoice_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('invoice_address') }}</strong>
                            </span>
                         @endif
                     </div>
                     <div class="row">
                         <div class="col-sm">
                             <input id="suburb" type="text" class="form-control" name="suburb" required autofocus value="{{ $details->suburb }}">
                             @if ($errors->has('suburb'))
                                 <span class="help-block">
                                 <strong>{{ $errors->first('suburb') }}</strong>
                             </span>
                             @endif
                         </div>
                         <div class="col-sm">
                             <input id="state" type="text" class="form-control" name="state" required autofocus value="{{ $details->state }}">
                             @if ($errors->has('state'))
                                 <span class="help-block">
                                 <strong>{{ $errors->first('state') }}</strong>
                             </span>
                             @endif
                         </div>
                         <div class="col-sm">
                             <input id="postcode" type="text" class="form-control" name="postcode" required autofocus value="{{ $details->postcode }}">
                             @if ($errors->has('postcode'))
                                 <span class="help-block">
                                 <strong>{{ $errors->first('postcode') }}</strong>
                             </span>
                             @endif
                         </div>
                     </div>
                 </div>
                 <div class="col-sm">
                     <div class="form-group">
                         <input id="contact_name" type="text" class="form-control" name="contact_name" autofocus placeholder="Contact Name(if different)">
                         @if ($errors->has('contact_name'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('contact_name') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group">
                         <input id="email" type="text" class="form-control" name="email" required autofocus value="{{ $details->email }}">
                         @if ($errors->has('email'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group">
                         <input id="mobile" type="text" class="form-control" name="mobile" required autofocus value="{{ $details->mobile }}">
                         @if ($errors->has('mobile'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('mobile') }}</strong>
                             </span>
                         @endif
                     </div><br><br>
                     <div class="custom-control custom-checkbox premium">
                         <input type="checkbox" class="group1 custom-control-input" id="accept_terms" value="1" name="accept_terms">
                         <label class="custom-control-label" for="accept_terms"></label>
                         I accept terms and conditions of use
                     </div>
                 </div>
             </div>
         @elseif(!empty($agent))
             <div class="row">
                 <div class="col-sm">
                     <div class="form-group">
                         <input id="person_name" type="text" class="form-control" name="person_name" required autofocus value="{{$agent['firstname']}}&nbsp;{{$agent['lastname']}}">
                         @if ($errors->has('person_name'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('person_name') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                         <input id="name_agency" type="text" class="form-control" name="name_agency" required autofocus value="{{$agent['name_agency']}}">
                         @if ($errors->has('name_agency'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('name_agency') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group">
                         <textarea id="invoice_address" type="text" class="form-control" name="invoice_address" required autofocus>{{$agent['address']}}</textarea>
                         @if ($errors->has('invoice_address'))
                             <span class="help-block">
                                <strong>{{ $errors->first('invoice_address') }}</strong>
                            </span>
                         @endif
                     </div>
                     <div class="row">
                         <div class="col-sm">
                             <input id="suburb" type="text" class="form-control" name="suburb" required autofocus value="{{$agent['suburb']}}">
                             @if ($errors->has('suburb'))
                                 <span class="help-block">
                                 <strong>{{ $errors->first('suburb') }}</strong>
                             </span>
                             @endif
                         </div>
                         <div class="col-sm">
                             <input id="state" type="text" class="form-control" name="state" required autofocus value="{{$agent['state']}}">
                             @if ($errors->has('state'))
                                 <span class="help-block">
                                 <strong>{{ $errors->first('state') }}</strong>
                             </span>
                             @endif
                         </div>
                         <div class="col-sm">
                             <input id="postcode" type="text" class="form-control" name="postcode" required autofocus value="">
                             @if ($errors->has('postcode'))
                                 <span class="help-block">
                                 <strong>{{ $errors->first('postcode') }}</strong>
                             </span>
                             @endif
                         </div>
                     </div>
                 </div>
                 <div class="col-sm">
                     <div class="form-group">
                         <input id="contact_name" type="text" class="form-control" name="contact_name" autofocus placeholder="Contact Name(if different)">
                         @if ($errors->has('contact_name'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('contact_name') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group">
                         <input id="email" type="text" class="form-control" name="email" required autofocus value="{{$agent['email']}}">
                         @if ($errors->has('email'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group">
                         <input id="mobile" type="text" class="form-control" name="mobile" required autofocus value="{{$agent['mobile']}}">
                         @if ($errors->has('mobile'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('mobile') }}</strong>
                             </span>
                         @endif
                     </div><br><br>
                     <div class="custom-control custom-checkbox premium">
                         <input type="checkbox" class="group1 custom-control-input" id="accept_terms" value="1" name="accept_terms">
                         <label class="custom-control-label" for="accept_terms"></label>
                         I accept terms and conditions of use
                     </div>
                 </div>
             </div>
         @endif
         <hr>
         <br>
         <h3>How will you pay</h3>
         <div class="row">
             <div class="col-sm">
                 <div class="custom-control custom-checkbox premium">
                     <input type="checkbox" class="group1 custom-control-input" id="credit_card" value="1" name="credit_card">
                     <label class="custom-control-label" for="credit_card"></label>
                     Credit Card
                 </div><br>
                 <div class="form-group">
                     <input id="card_number" type="textbox" class="form-control" name="card_number" placeholder="Card Number">
                 </div>
                 <div class="row">
                     <div class="col-sm">
                         <input id="expiry_month" type="text" class="form-control" name="expiry_month" placeholder="Expiry Month">
                         @if ($errors->has('expiry_month'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('expiry_month') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="col-sm">
                         <input id="expiry_year" type="text" class="form-control" name="expiry_year" placeholder="Expiry Year">
                         @if ($errors->has('expiry_year'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('expiry_year') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="col-sm">
                         <input id="ccv" type="text" class="form-control" name="ccv" placeholder="CCV">
                         @if ($errors->has('ccv'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('ccv') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div><br>
                 <div class="custom-control custom-checkbox premium">
                     <input type="checkbox" class="group1 custom-control-input" id="paypal" value="1" name="paypal">
                     <label class="custom-control-label" for="paypal"></label>
                     Paypal
                 </div>

             </div>
             <div class="col-sm">
                 {{--<div class="form-group">--}}
                     {{--<input id="invoice" type="checkbox" class="form-control" name="invoice">--}}
                     {{--Invoice--}}
                 {{--</div>--}}
                 <div class="custom-control custom-checkbox premium">
                     <input type="checkbox" class="group1 custom-control-input" id="invoice" value="1" name="invoice">
                     <label class="custom-control-label" for="invoice"></label>
                     Invoice
                 </div><br>
                 <div class="custom-control custom-checkbox premium">
                     <input type="checkbox" class="group1 custom-control-input" id="invoice_apply" value="1" name="invoice_apply">
                     <label class="custom-control-label" for="invoice_apply"></label>
                     $5 per invoice applied to costs
                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-sm">
                 <div class="form-group">
                     <div class="text-right">
                         <button type="submit" id="btnAccept" class="btn btn-primary font-weight-bold" disabled>
                             Accept
                         </button>
                     </div>
                 </div>
             </div>
         </div>

     </form>

     <form id="paypal-form" action="{{ route('postPaymentDetails') }}" method="POST" style="display: none;">
         {{ csrf_field() }}
         <input type="hidden" name="item_id" id="item_id" value="{{ $user_id }}">
         <input type="hidden" name="item_name" id="item_name">
         <input type="hidden" name="amount" id="amount">

     </form>
 </div>

