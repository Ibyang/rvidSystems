<h4 class="reg-title">Your Preferences</h4>

        <div class="mt-2 mb-2">
            <span class="reg-title">SURGE OFFER</span> <a data-toggle="collapse" href="#surgeExpanded" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a>
        </div>

        <div class="collapse" id="surgeExpanded" style="width: 65%;">
            <div class="rules-arrow" style="margin-left: 25%"></div>
            <div class="ExpandForm p-3" style="background-color: white">
                <h6>What is Surge</h6>
                <p style="text-align: justify; font-size: small">
                    The <b>Surge Offer</b> gives you the option to select 3 choice. The Surge is a demand driven
                    premium option fro your Video production to have preferential delivery with a 24-hour period
                    (Surge) or a 2-hour period (Rush).<br><br>
                    This <b>Surge Offer</b> is set on <b>SOMETIMES</b> - which means that each time you make a Video
                    (calculate from demand statistics).<br><br>
                    Alternatively, you can select <b>SURGE ALWAYS ($15 fixed) </b>and <b>RUSH ALWAYS ($45
                    fixed) </b>and be guaranteed and preferential delivery time you want for a fixed cost -
                    regardless of demand.
                </p>
            </div>
        </div>

        <br><div class="row">
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