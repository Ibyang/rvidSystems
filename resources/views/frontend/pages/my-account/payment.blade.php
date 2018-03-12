 <h3>Payment Details</h3>

<form class="form-horizontal" method="POST" action="">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="row">
                <div class="col-8">
                    <select>
                        <option>Mastercard</option>
                    </select>
                </div>
                <div class="col-4">Type</div>
            </div>
     </div>
     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">      
            <input id="name" type="text" class="form-control" name="" required autofocus placeholder="First Name">
            @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
    </div>
    <div class="row">
        <div class="col-sm">Expiration Date</div>
        <div class="col-sm">
            <select>
                <option>Jan</option>
            </select>
        </div>
        <div class="col-sm">
             <select>
                <option>2020</option>
            </select>
        </div>
        <div class="col-sm">
            CCV
        </div>
        <div class="col-sm">
             <input id="name" type="text" class="form-control">
        </div>
        <div class="col-sm">
            what is this?
        </div>
    </div>
</form>