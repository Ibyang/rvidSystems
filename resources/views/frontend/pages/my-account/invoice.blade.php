<h3>Invoice Details</h3>

 <form class="form-horizontal" method="POST" action="">
     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
           <select name="agent" class="form-control">
                <option>Agent (As above)</option>
          </select>
     </div>
     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input id="name" type="text" class="form-control" name="agency" required autofocus placeholder="Agency">
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
     </div>
     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
         <div class="row">
             <div class="col-8">
                <textarea id="name" type="text" class="form-control" name="" required autofocus></textarea>

                @if ($errors->has('name'))
                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
             </div>
             <div class="col-4">Address</div>
         </div>
    </div>
    Person Name for Payment
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="row">
                <div class="col-8">
            <input id="name" type="text" class="form-control" name="agency" required autofocus placeholder="Agency">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
                </div>
            </div>
     </div>
     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
            <div class="row">
                <div class="col-8">
                    <input id="name" type="text" class="form-control" name="lastname" required autofocus placeholder="Last Name">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-4">Telephone</div>
            </div>
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="row">
                <div class="col-8">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
                <div class="col-4">Email</div>
            </div>
    </div>
    <div class="text-right">
     Edit Details
    </div>
</form>