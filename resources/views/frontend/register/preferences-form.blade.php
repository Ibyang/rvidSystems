 <div class="container register-form">
     <form class="form-horizontal" method="POST" action="{{ route('processStep3') }}">
         {{ csrf_field() }}
         <h3>Your Preferences</h3><br>
         <h3>SURGE OFFER</h3> What is this?
         <div class="row">
             <div class="col-sm">
                 <div class="custom-control custom-checkbox premium">
                     <input type="checkbox" class="group1 custom-control-input" id="customCheck1" value="Always Surge" name="surgeoffer[]">
                     <label class="custom-control-label" for="customCheck1"></label>
                     Always Surge (24 hours) ($15 fixed)
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm">
                 <div class="custom-control custom-checkbox premium">
                     <input type="checkbox" class="group1 custom-control-input" id="customCheck2" value="Always Rush" name="surgeoffer[]">
                     <label class="custom-control-label" for="customCheck2"></label>
                     Always Rush (2 hours) ($45 fixed)
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm">
                 <div class="custom-control custom-checkbox premium">
                     <input type="checkbox" class="group1 custom-control-input" id="customCheck3" value="Sometimes" name="surgeoffer[]" checked>
                     <label class="custom-control-label" for="customCheck3"></label>
                     Sometimes (Ask Me) (Cost of the Day)
                 </div>
             </div>
         </div>
         <br>
         <h3>Email</h3>
         <hr>
         <h3>EMAIL DISTRIBUTION</h3> What is this?<br>
         Email on Completion to <br>
         <div class="row">
             <div class="col-sm">
                 <input type="text" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email">
             </div>
             <div class="col-sm">
                 <span id="addEmailLink" style="float: left; color: blue; cursor: pointer">Add +</span>
             </div>
         </div>
         <br>Current List <br>
         <div class="row">
             <div class="col-sm">
                 <select name="email_list" id="email_list" multiple class="form-control"></select>
             </div>
             <div class="col-sm">
                 <span id="removeEmailLink" style="float: left; color: red; cursor: pointer">Remove -</span>
             </div>
         </div>
         <br>
         <h3>Broadcast</h3>
         <hr>
         <h3>BROADCAST TO OTHER AGENTS IN YOUR AREA</h3> What is this?<br>
         <div class="row">
             <div class="col-sm">
                 <div class="custom-control custom-checkbox premium">
                     <input type="checkbox" class="group1 custom-control-input" id="customCheck4" value="1" name="broadcast_status" checked>
                     <label class="custom-control-label" for="customCheck4"></label>
                     Yes, send weekly New Video Update to REVid member real estate agents in the selected areas listed below.
                 </div>

             </div>
             <div class="col-sm">

             </div>
         </div>
         Select Areas <br>
         <div class="row">
             <div class="col-sm">
                 {{--<input type="text" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email">--}}
                 <select name="suburb_area" class="form-control" id="suburb_area">
                     @foreach($suburbs as $sub)
                         <option value="{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}">{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}</option>
{{--                         <option value="{{$sub->ID}}">{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}</option>--}}
                     @endforeach
                 </select>
             </div>
             <div class="col-sm">
                 <span id="addSuburbLink" style="float: left; color: blue; cursor: pointer">Add +</span>
             </div>
         </div>
         <br>Suburb Selection <br>
         <div class="row">
             <div class="col-sm">
                 <select name="suburb_list" id="suburb_list" multiple class="form-control"></select>
             </div>
             <div class="col-sm">
                 <span id="removeSuburbLink" style="float: left; color: red; cursor: pointer">Remove -</span>
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
         <input type="hidden" id="emails_arr" name="emails_arr">
         <input type="hidden" id="areas_arr" name="areas_arr">
     </form>
 </div>

