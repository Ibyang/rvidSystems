<h3>Invoice Details</h3>

<form class="form-horizontal register-form border-bot2" method="POST" action="">
    <div class="row">
        <div class="col-9 pl-0">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <select name="agent" class="form-control">
                    <option>Agent (As above)</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9 pl-0">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
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
            <div class="col-9 pl-0">
                <textarea id="name" type="text" class="form-control" name="" required autofocus></textarea>

                @if ($errors->has('name'))
                    <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-3">Address</div>
        </div>
    </div>
    Person Name for Payment

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-9 pl-0">
                <input id="name" type="text" class="form-control" name="agency" required autofocus>
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
            <div class="col-9 pl-0">
                <input id="name" type="text" class="form-control" name="telephone" required autofocus placeholder="Telephone">
                @if ($errors->has('name'))
                    <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                @endif
            </div>
            <div class="col-3 align-self-center">Telephone</div>
        </div>
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-9 pl-0">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-3 align-self-center">Email</div>
        </div>
    </div>
    <div class="row">
        <div class="col-9"></div>
        <div class="col-3 align-self-center"><a href="">Edit Details</a></div>
    </div>
</form>