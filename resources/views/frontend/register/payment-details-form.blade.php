 <div class="container register-form">
     <form class="form-horizontal" method="POST" action="{{ route('registerAgent.store') }}">
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
                         <input type="checkbox" class="group1 custom-control-input" id="customCheck1" value="Casual" name="subscription1[]"
                                 {{ $invoice->subscription_type  === "Casual" ? 'checked' : '' }}>
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
                         <input type="checkbox" class="group1 custom-control-input" id="customCheck3" value="Standard" name="subscription1[]"
                                 {{ $invoice->subscription_type  === "Standard" ? 'checked' : '' }}>
                         <label class="custom-control-label" for="customCheck3"></label>
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
                         <input type="checkbox" class="group1 custom-control-input" id="customCheck2" value="Basic" name="subscription1[]"
                                 {{ $invoice->subscription_type  === "Basic" ? 'checked' : '' }}>
                         <label class="custom-control-label" for="customCheck2"></label>
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
                         <input type="checkbox" class="group1 custom-control-input" id="customCheck4" value="Premium" name="subscription1[]"
                                 {{ $invoice->subscription_type  === "Premium" ? 'checked' : '' }}>
                         <label class="custom-control-label" for="customCheck4"></label>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm">
                 <div class="form-group">
                     <div class="text-right">
                         <button type="submit" class="btn btn-primary font-weight-bold">
                             Accept
                         </button>
                     </div>
                 </div>
             </div>
         </div>


     </form>
 </div>

