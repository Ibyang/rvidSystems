<h4 class="reg-title mb-4">Your Preferences</h4>
                    
<h4 class="reg-title">Your Payment Details</h4>

<div class="block-grey reg-title text-center">Subscription + Storage Plans / Pricing</div>

<div class="row">
    <div class="col-sm">
        <div class="row mt-3">
            <div class="col-sm-2 align-self-center">Plan</div>
            <div class="col-8">
                <div class="row">
                  <div class="col-8"><input id="plantype" name="plantype" type="text" class="form-control" required autofocus style="text-align: right" value="{{ $plan_arr['planName'] }}"></div>
                  <div class="col-4"><span class="input-dollar left"><input id="plan_month" name="plan_month" type="text" class="form-control" required autofocus style="text-align: right" value="{{ $plan_arr['planAmt'] }}"></span></div>
                </div>
            </div>
            <div class="col align-self-center p-0 text-center">per month</div>
        </div>
        <div class="my-3">Video Costs</div>
        <div class="row">
            <div class="col-sm-2 align-self-center"></div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8">Generic</div>
                  <div  class="col-4"><span class="input-dollar left"><input id="generic_cost" name="generic_cost" type="text" class="form-control" autofocus style="text-align: right" value="{{ $plan_arr['automaticAmt'] }}"></span></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row my-3">
            <div class="col-sm-2 align-self-center"></div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8">Standard</div>
                  <div  class="col-4"><span class="input-dollar left"><input id="standard_cost" name="standard_cost" type="text" class="form-control" autofocus style="text-align: right" value="{{ $plan_arr['manualAmt'] }}"></span></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-sm-2 align-self-center"></div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8">Premium</div>
                  <div  class="col-4"><span class="input-dollar left"><input id="premium_cost" name="premium_cost" type="text" class="form-control" autofocus style="text-align: right" value="{{ $plan_arr['customAmt'] }}"></span></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
    <div class="col-sm">
      @if($plan_arr['planName'] != 'Casual')
        <div id="free_offer">
          <div class="row mt-3">
              <div class="col-md-auto align-self-center pr-0">Free Offer</div>
              <div class="col-8">
                  <div class="row">
                    <div class="col-8"><input id="free_offer" name="free_offer" type="text" class="form-control" autofocus style="text-align: center" value="Video"></div>
                    <div class="col-4"><span class="input-dollar left"><input id="free_amt" name="free_amt" type="text" class="form-control" autofocus style="text-align: right" value="0"></span></div>
                  </div>
              </div>
              <div class="col-auto align-self-center p-0">FREE</div>
          </div>
          <div class="row my-3">
              <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
              <div class="col-8">
                   <div class="row">
                    <div class="col-8 text-right align-self-center">every</div>
                    <div  class="col-4"><input id="num_months" name="num_months" type="text" class="form-control" autofocus style="text-align: right" value="{{ $plan_arr['freeMonths'] }}"></div>
                  </div>
              </div>
              <div class="col-sm align-self-center p-0 text-center">months</div>
          </div>
        </div> <!-- end of free offer div -->
      @endif  
      
      @if($plan_arr['planName'] == 'Casual')
        <br><br>
      @endif
        <div class="my-3">Selections Extras</div>
        <div class="row">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Voice</div>
                  <div  class="col-4"><span class="input-dollar left"><input id="amt_voice" name="amt_voice" type="text" class="form-control" autofocus style="text-align: right"></span></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
         <div class="row my-3">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Music</div>
                  <div  class="col-4"><span class="input-dollar left"><input id="amt_music" name="amt_music" type="text" class="form-control" autofocus style="text-align: right"></span></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Surge Setting</div>
                  <div  class="col-4"><span class="input-dollar left"><input id="amt_surge" name="amt_surge" type="text" class="form-control" autofocus style="text-align: right"></span></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row my-3">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Uploads Sites</div>
                  <div  class="col-4"><span class="input-dollar left"><input id="amt_upload_sites" name="amt_upload_sites" type="text" class="form-control" autofocus style="text-align: right"></span></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Uploads Social</div>
                  <div  class="col-4"><span class="input-dollar left"><input id="amt_upload_socials" name="amt_upload_socials" type="text" class="form-control" autofocus style="text-align: right"></span></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
</div>
<div class="border-bot3 step-4-link">
    <div class="d-flex flex-row">
      <div class="p-2"><i class="account-i"></i></div>
      <div class="p-2"><a class="color-ff0033" data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample">What do we get? </a></div>
    </div>
    <div class="collapse rules-contents" id="Expanded1">
        <div class="rules-arrow6"></div>
        <div class="ExpandForm text-justify bg-fff mb-3 @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> 
                @include('frontend.register.steps.pricing')
        </div>           
    </div>
</div>
