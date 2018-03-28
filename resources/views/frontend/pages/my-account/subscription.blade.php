<div class="border-bot2 pb-4">
    <h3>Subscription + Storage Plan</h3>
    <div class="row my-account-subcription">
        <div class="col-sm-4"><button type="button" class="btn basic">{{ $invoice->subscription_type }}</button></div>
        <div class="col-sm-4"><button type="button" class="btn per-month">{{ $invoice->storage_plan }}/month</button></div>
    </div>
    <p>Upgrade my Subscription + Storage Plan</p>

    <form id="form-subscription-details" method="POST" action="{{ route('editSubscription') }}">
        {{ csrf_field() }}
        <input type="hidden" name="subscription_type" value="{{ $invoice->subscription_type }}">
        <input type="hidden" name="agentID" value="{{ $invoice->agent_ID }}">
        <div class="my-account-subcription">
            <div class="row">
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
            <div class="row">
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
            <div class="row">
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
            <div class="row">
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
            <span class="tooltip" title="What do we get in the subscription?">What Do We Get</span>
            <a href="" onclick="event.preventDefault(); document.getElementById('form-subscription-details').submit();">Change subscription</a>
            {{--<a href="">Change subscription</a>--}}
            <a href="">what do we get</a>
        </div>

    </form>

</div>


