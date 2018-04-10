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
                 <select name="email_list" id="email_list" multiple="multiple"></select>
             </div>
             <div class="col-sm">
                 <span id="removeEmailLink" style="float: left; color: red; cursor: pointer">Remove -</span>
             </div>
         </div>
         <br>
         <h3>Broadcast</h3>
         <hr>
         <h3>BROADCAST TO OTHER AGENTS IN YOUR AREA</h3> What is this?<br>
         Select Areas <br>
         <div class="row">
             <div class="col-sm">
                 {{--<input type="text" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email">--}}
                 <select name="area" class="form-control">
                     @foreach($suburbs as $sub)
                         <option value="{{$sub->suburb}} - {{$sub->postcode}}">{{$sub->suburb}} - {{$sub->postcode}}</option>
                     @endforeach
                 </select>
             </div>
             <div class="col-sm">
                 <span id="addSuburbLink" style="float: left; color: blue">Add +</span>
             </div>
         </div>
         <br>Suburb Selection <br>
         <div class="row">
             <div class="col-sm">
                 <select name="suburb_list" id="suburb_list" multiple="multiple"></select>
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
     </form>
 </div>

