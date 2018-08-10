@if (Request::segment(1) != 'account')
    <h4 class="reg-title mb-4">Your Preferences</h4>
@endif
<div class="d-flex flex-row">
    <div class="reg-title pr-2">SURGE OFFER</div>
    <div class="align-self-center"><a class="c0066ff" data-toggle="collapse" href="#Expanded9" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a></div>
</div>
<div class="collapse rules-contents @if (Request::segment(1) != 'account') {{'col-8 pl-0'}} @endif" id="Expanded9">
    <div class="rules-arrow2"></div>
    <!-- <div class="ExpandForm text-justify bg-fff mb-3 @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> -->
    <div class="ExpandForm p-3" style="background-color: white">
        <b>What is the Surge</b>

        <p style="text-align: justify; font-size: small">The <b>Surge Offer</b> gives you the option to select 3 choices. The Surge is a demand driven
            premium option for your Video production to have preferential delivery with a 24-hour period
            (Surge) or a 2-hour period (Rush).<br><br>
            This <b>Surge Offer</b> is set on <b>SOMETIMES</b> – which means that each time you make a Video
            Order the system will ask you if you want to Surge or Rush and tell you the Cost of the Day
            (calculated from demand statistics).<br><br>
            Alternatively, you can select <b>SURGE ALWAYS ($15 fixed)</b> and <b>RUSH ALWAYS ($45 fixed)</b> and be guaranteed the preferential delivery time you want for a fixed cost – regardless of demand.</p>
    </div>
</div>
<div class="row">
    <div class="@if (Request::segment(1) == 'account') {{'col-sm-8'}} @else {{'col-sm-5'}} @endif">
        <div class="custom-control custom-checkbox standard">
            <input type="checkbox" class="custom-control-input" id="customCheck1" value="Always Surge" name="surgeoffer[]"
                    {{{ (!empty($surge_offer[0]) && $surge_offer[0] === 'Always Surge') ? "checked" : "" }}}>
            <label class="custom-control-label" for="customCheck1">Always Surge (24 hours) ($5 fixed)</label>
        </div>
        <div class="custom-control custom-checkbox standard">
            <input type="checkbox" class="custom-control-input" id="customCheck2" value="Always Rush" name="surgeoffer[]"
                    {{{ (!empty($surge_offer[0]) && $surge_offer[0] === 'Always Rush') ? "checked" : "" }}}>
            <label class="custom-control-label" for="customCheck2">Always Rush (2 hours) ($45 fixed)</label>
        </div>
    </div>
    <div class="col">
        <div class="custom-control custom-checkbox standard">
            <input type="checkbox" class="custom-control-input" id="customCheck3" value="Sometimes" name="surgeoffer[]"
                    {{{ (!empty($surge_offer[0]) && $surge_offer[0] === 'Sometimes') ? "checked" : "" }}}>
            <label class="custom-control-label" for="customCheck3">Sometimes (Ask Me) <br>(Cost of the Day)</label>
        </div>
    </div>
</div>