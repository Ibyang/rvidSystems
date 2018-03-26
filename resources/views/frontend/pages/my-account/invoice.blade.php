<h3>Invoice Details</h3>

<form id="form-invoice-details" class="form-horizontal register-form border-bot2" method="POST" action="{{ route('editInvoice') }}">
    Invoice To
    {{ csrf_field() }}
    <input type="hidden" name="agentID" id="agentID" value=" {{ $invoice->agent_ID }}">
    <input type="hidden" name="invoiceTo" id="invoiceTo">
    <div class="row">
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
        <div class="row">
            <div class="col-9 pl-0">
                <textarea id="invoice_address" type="text" class="form-control" name="invoice_address" required autofocus>{{ $invoice->address }}</textarea>
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
        <div class="col-3 align-self-center"><a href="" onclick="event.preventDefault(); document.getElementById('form-invoice-details').submit();">Edit Details</a></div>
    </div>
</form>