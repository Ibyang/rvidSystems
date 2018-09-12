<div class="border-bot2 pb-4">
    <h3>Subscription + Storage Plan</h3>
    <div class="row my-account-subcription">
        <div class="col-sm-4 pl-0 mb-2"><button type="button" class="btn basic">{{ $invoice->subscription_type }}</button></div>
        <div class="col-sm-4 pl-0 mb-2"><button type="button" class="btn per-month">{{ $invoice->storage_plan }}/month</button></div>
    </div>
    <p>Upgrade my Subscription + Storage Plan</p>

    <form id="form-subscription-details" method="POST" action="/account/editSubscription">
        {{ csrf_field() }}
        <input type="hidden" name="subscription_type" value="{{ $invoice->subscription_type }}">
        <input type="hidden" name="agentID" value="{{ $invoice->agent_ID }}">
        <div class="my-account-subcription">
            <div class="row">
                <div class="col-6">
                    <div class="c-subs">
                        <span class="tooltip" title="Casual Subscription at $11/month">Some Text</span>
                        <div class="row">
                            <div class="col pl-2">Casual</div>
                            <div class="col font-t-ms">$11/month</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="custom-control custom-checkbox casual">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="Casual" name="subscription1[]"
                                {{ $invoice->subscription_type  === "Casual" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck1"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="b-subs">
                        <span class="tooltip" title="Basic Subscription at $33/month">Some Text</span>
                        <div class="row">
                            <div class="col pl-2">Basic</div>
                            <div class="col font-t-ms">$33/month</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="custom-control custom-checkbox basic">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" value="Basic" name="subscription1[]"
                                {{ $invoice->subscription_type  === "Basic" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck2"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="s-subs">
                        <span class="tooltip" title="Standard Subscription at $66/month">Some Text</span>
                        <div class="row">
                            <div class="col pl-2">Standard</div>
                            <div class="col font-t-ms">$66/month</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="custom-control custom-checkbox standard">
                        <input type="checkbox" class="custom-control-input" id="customCheck3" value="Standard" name="subscription1[]"
                                {{ $invoice->subscription_type  === "Standard" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck3"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="p-subs">
                        <span class="tooltip" title="Premium Subscription at $99/month">Some Text</span>
                        <div class="row">
                            <div class="col pl-2">Premium</div>
                            <div class="col font-t-ms">$99/month</div>
                        </div>
                    </div>
                </div>
                <div class="col-0 pl-0 pr-3">
                    <div class="custom-control custom-checkbox premium">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" value="Premium" name="subscription1[]"
                                {{ $invoice->subscription_type  === "Premium" ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck4"></label>
                    </div>
                </div>
                <div class="col line-height20">
                    <a href="" onclick="event.preventDefault(); document.getElementById('form-subscription-details').submit();">Change <br>subscription</a>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-row-reverse">
                    <span class="tooltip" title="What do we get in the subscription?">What Do We Get</span>
                    <div class="pl-5"><a href="">what do we get?</a></div>
                    <div class=""><i class="account-i"></i></div>
                </div>
            </div>

        </div>
    </form>
</div>










