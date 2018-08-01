<h4 class="reg-title mb-4">Your Preferences</h4>
                    
<h4 class="reg-title">Your Payment Details</h4>

<div class="block-grey reg-title text-center">Subscription + Storage Plans / Pricing</div>

<div class="row">
    <div class="col-sm">
        <div class="row mt-3">
            <div class="col-sm-2 align-self-center">Plan</div>
            <div class="col-8">
                <div class="row">
                  <div class="col-8"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                  <div class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm align-self-center p-0 text-center">per month</div>
        </div>
        <div class="my-3">Video Costs</div>
        <div class="row">
            <div class="col-sm-2 align-self-center"></div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8">Generic</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row my-3">
            <div class="col-sm-2 align-self-center"></div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8">Standard</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-sm-2 align-self-center"></div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8">Premium</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>
    <div class="col-sm">
        <div class="row mt-3">
            <div class="col-md-auto align-self-center pr-0">Free Offer</div>
            <div class="col-8">
                <div class="row">
                  <div class="col-8"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                  <div class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-auto align-self-center p-0">FREE</div>
        </div>
        <div class="row my-3">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 text-right align-self-center">every</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm align-self-center p-0 text-center">months</div>
        </div>
        <div class="my-3">Selections Extras</div>
        <div class="row">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Voice</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
         <div class="row my-3">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Music</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Surge Setting</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row my-3">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Uploads Sites</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
                </div>
            </div>
            <div class="col-sm"></div>
        </div>
        <div class="row">
            <div class="col-auto align-self-center">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
            <div class="col-8">
                 <div class="row">
                  <div class="col-8 align-self-center">Uploads Social</div>
                  <div  class="col-4"><input id="name" type="text" class="form-control" name="" required autofocus></div>
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
