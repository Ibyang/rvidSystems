 <div class="container register-form">
     <form class="form-horizontal" method="POST" action="{{ route('processStep3') }}">
         {{ csrf_field() }}
         <h3>Your Preferences</h3><br>
         <h3>SURGE OFFER</h3> What is this?
         <div class="row">
             <div class="col-sm">
                 Uploader of Voice Files
             </div>
         </div>
         <br>
         <h3>Email</h3>
         <hr>
         <h3>EMAIL DISTRIBUTION</h3> What is this?
         <div class="row">
             <div class="col-sm">
                 Email on Completion to
             </div>
         </div>
         <br>
         <h3>Broadcast</h3>
         <hr>
         <h3>BROADCAST TO OTHER AGENTS IN YOUR AREA</h3> What is this?
         <div class="row">
             <div class="col-sm">
                 Email on Completion to
             </div>
         </div>
         <div class="row">
             <div class="col-sm">
                 <div class="form-group">
                     <div class="text-right">
                         <button type="submit" class="btn btn-primary font-weight-bold">
                             NEXT: Payment Details <i class="arrow-right"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </form>
 </div>

