    <div class="block-grey text-center reg-title">Subscription + Storage Plans</div>

    <div class="row mb-3 mt-3">
        <div class="col-sm">
            <div class="row">
                <div class="col-sm-6">
                    <div class="c-subs">
                        <div class="row">
                            <div class="col">Casual</div>
                            <div class="col">$11/month</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="custom-control custom-checkbox casual">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="Casual" name="subscription1[]"
                                {{{ (!empty($subscription) && $subscription === 'Casual') ? "checked" : "" }}} >
                        <label class="custom-control-label" for="customCheck1"></label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="row">
                <div class="col-sm-6">
                    <div class="b-subs">
                        <div class="row">
                            <div class="col">Basic</div>
                            <div class="col">$33/month</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="custom-control custom-checkbox basic">
                        <input type="checkbox" class="custom-control-input" id="customCheck2" value="Basic" name="subscription1[]"
                                {{{ (!empty($subscription) && $subscription === 'Basic') ? "checked" : "" }}} >
                        <label class="custom-control-label" for="customCheck2"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <div class="row">
                <div class="col-sm-6">
                    <div class="s-subs">
                        <div class="row">
                            <div class="col">Standard</div>
                            <div class="col">$66/month</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="custom-control custom-checkbox standard">
                        <input type="checkbox" class="custom-control-input" id="customCheck3" value="Standard" name="subscription1[]"
                                {{{ (!empty($subscription) && $subscription === 'Standard') ? "checked" : "" }}} >
                        <label class="custom-control-label" for="customCheck3"></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-sm-6">
                    <div class="p-subs">
                        <div class="row">
                            <div class="col">Premium</div>
                            <div class="col">$99/month</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="custom-control custom-checkbox premium">
                        <input type="checkbox" class="custom-control-input" id="customCheck4" value="Premium" name="subscription1[]"
                                {{{ (!empty($subscription) && $subscription === 'Premium') ? "checked" : "" }}}>
                        <label class="custom-control-label" for="customCheck4"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=""><a href="">What do we get?</a></div>