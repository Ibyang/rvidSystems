<h3>Payment Details</h3>

<form class="form-horizontal register-form" method="POST" action="">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-9 pl-0">
                <select class="form-control">
                    <option>Mastercard</option>
                </select>
            </div>
            <div class="col-3 align-self-center">Type</div>
        </div>
    </div>
    <div class="row">
        <div class="col-9 pl-0">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" name="" required autofocus placeholder="Card Number">
                @if ($errors->has('name'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row account-payment">
        <div class="col-sm-9 pl-0">
            <div class="row">
                <div class="col-md-auto align-self-center">Expiration Date</div>
                <div class="col-sm">
                    <select class="form-control">
                        <option>Jan</option>
                    </select>
                </div>
                <div class="col-sm">
                    <select class="form-control">
                        <option>2020</option>
                    </select>
                </div>
                <div class="col-md-auto align-self-center">CCV</div>
                <div class="col-sm pr-0">
                    <input id="name" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-sm-3 align-self-center"><a href="">what is this?</a></div>
    </div>
</form>