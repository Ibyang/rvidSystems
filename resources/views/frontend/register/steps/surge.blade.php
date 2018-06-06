<h4 class="reg-title">Your Preferences</h4>

        <div class="mt-2 mb-2">
            <span class="reg-title">SURGE OFFER</span> <a href="" class="">What is this?</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="custom-control custom-checkbox standard">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" value="Always Surge" name="surgeoffer[]"
                            {{{ (!empty($surge_offer[0]) && $surge_offer[0] === 'Always Surge') ? "checked" : "" }}} >
                    <label class="custom-control-label" for="customCheck1">Always Surge (24 hours) ($15 fixed)</label>
                </div>
                <div class="custom-control custom-checkbox standard">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" value="Always Rush" name="surgeoffer[]"
                            {{{ (!empty($surge_offer[0]) && $surge_offer[0] === 'Always Rush') ? "checked" : "" }}} >
                    <label class="custom-control-label" for="customCheck2">Always Rush (2 hours) ($45 fixed)</label>
                </div>
            </div>
            <div class="col">
                <div class="custom-control custom-checkbox standard">
                    <input type="checkbox" class="custom-control-input" id="customCheck3" value="Sometimes" name="surgeoffer[]"
                            {{{ (!empty($surge_offer[0]) && $surge_offer[0] === 'Sometimes') ? "checked" : "" }}} >
                    <label class="custom-control-label" for="customCheck3">Sometimes (Ask Me) <br>(Cost of the Day)</label>
                </div>
            </div>
        </div>