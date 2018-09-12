<h3>Invoice Details</h3>

<form id="form-invoice-details" class="form-horizontal register-form border-bot2" method="POST" action="{{ route('editInvoice') }}">
    Invoice To
    {{ csrf_field() }}
    <input type="hidden" name="agentID" id="agentID" value=" {{ $invoice->agent_ID }}">
    <input type="hidden" name="invoiceTo" id="invoiceTo">
    <div class="row m-0">
        <div class="col-9 pl-0">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <select name="invoice_to" id="invoice_to" class="form-control">
                    <option value="Agent" {{ $invoice->invoice_to_type === 'Agent' ? 'selected' : '' }}>Agent (As above)</option>
                    <option value="Agency" {{ $invoice->invoice_to_type === 'Agency' ? 'selected' : '' }}>Agency</option>
                    <option value="Company" {{ $invoice->invoice_to_type === 'Company' ? 'selected' : '' }}>Company</option>
                </select>
            </div>
        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-9 pl-0">--}}
            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                {{--<input id="name" type="text" class="form-control" name="agency" required autofocus placeholder="Agency">--}}
                {{--@if ($errors->has('name'))--}}
                    {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="row m-0">
            <div class="col-9 pl-0">
                <input id="invoice_address" type="text" class="form-control" name="invoice_address" value="{{ $invoice->address }}" required ></input>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-3">Address</div>
        </div>
        <div class="row account-payment" style="padding-left: 0!important;">
            <div class="col-sm-9 pl-0">
                <div class="row">
                    <input style="width: 150px" id="invoice_suburb" type="text" class="form-control" name="invoice_suburb" placeholder="Suburb" value="{{ $invoice->suburb }}" required >

                    <div class="col-sm">
                        <select class="form-control" name="invoice_state" id="invoice_state" style="width: 250px">
                            @foreach($states as $state)
                                <option value="{{ $state->state_code }}" {{ $invoice->state === $state->state_code ? 'selected' : '' }}> {{ $state->state_name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm">
                        <input style="width: 90px" id="invoice_postcode" type="text" class="form-control" name="invoice_postcode" placeholder="Postcode" value="{{ $invoice->postcode }}" required>
                    </div>
                </div>
            </div>
        </div>

    </div>
    Person Name for Payment

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="row">
            <div class="col-9 pl-0">
                <input id="invoice_agent" type="text" class="form-control" name="invoice_agent" value="{{ $invoice->person_name }}" required autofocus>
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
                <input id="invoice_contact" type="text" class="form-control" name="invoice_contact" value="{{ $invoice->contact_num }}" required autofocus >
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
                <input id="invoice_email" type="email" class="form-control" name="invoice_email" value="{{ $invoice->email }}" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-3 align-self-center">Email</div>
        </div>
    </div>
    {{--<div class="row">--}}
        {{--<div class="col-9"></div>--}}
        {{--<div class="col-3 align-self-center"><a href="" onclick="event.preventDefault(); document.getElementById('form-details').submit();">Change</a></div>--}}
    {{--</div>--}}
    <div class="row">
        <div class="col-9"></div>
        <div class="col-3 pl-1 align-self-center"><a href="" onclick="event.preventDefault(); document.getElementById('form-invoice-details').submit();">Edit Details</a></div>
    </div>
</form>



<div class="border-bot2 pb-3">
        <h3>Invoice Details</h3>
        <div class="d-flex flex-column bd-highlight mb-3 col-9 p-0">
            <div class="mt-3">Will the Agency Pay</div> 
            <div class="my-3"><input type="text" class="form-control" name="" Placeholder="Entity Name" required autofocus></div>
            <div><input type="text" class="form-control" name="" Placeholder="ACN/ABN" required autofocus></div>
            <div class="register-form textarea"><textarea type="text" class="form-control" name="" Placeholder="Address" required="" autofocus=""></textarea></div>
            <div class="row m-r-l">
                <div class="col-sm l-g-m"><input type="text" class="form-control" name="" placeholder="Suburb" required></div>
                <div class="col-sm l-g-m"><input type="text" class="form-control" name="" placeholder="State" required></div>
                <div class="col-sm l-g-m"><input type="text" class="form-control" name="" placeholder="Post Code" required></div>
            </div>
            <div class="mt-4">Details For Payment</div>
            <div class="my-3"><input type="text" class="form-control" name="" Placeholder="Contact Name" required autofocus></div>
            <div><input type="text" class="form-control" name="" Placeholder="Contact Mobile" required autofocus></div>   
        </div>
        <div class="row m-r-l">
                <div class="col-sm-9 pr-1"><input type="email" class="form-control" name="" Placeholder="Email for Invoice" required autofocus></div>
                <div class="col-sm align-self-center"><a href="">Update Details</a></div>
        </div>
        <div class="step-three-register account-chk col-9 p-0">
                <div class="custom-control custom-checkbox premium">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label  text-justify" for="customCheck5">I accept that should my nominated payment party decline to accept my
                    purchase invoice I will be liable for payment</label>
                </div>
        </div>
</div>