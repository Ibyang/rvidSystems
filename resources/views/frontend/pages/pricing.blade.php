@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h3 class="header-title">You Get an Easy Low Cost Video Service Plus DriveBy and LookFirst for FREE</h3>
        <div class="row">
            <div class="col"><img src=""></div>
            <div class="col"><img src=""></div>
            <div class="col"><img src=""></div>
        </div>
        <h3 class="header-title-2 font-weight-bold">Pricing Membership</h3>
        <div class="border-666666">
            <div class="float-l">
                    <div class="bg-666666 guest-pricing">
                        <div class="d-inline-block font-weight-bold">Casual</div>
                        <div class="d-inline-block font-weight-bold">$11/month</div>
                    </div>
            </div>
            <div class="float-r guest-pricing-check bg-666666">
                 <div class="my-account-subcription">
                        <div class="custom-control custom-checkbox casual">
                          <input type="checkbox" class="custom-control-input" id="customCheck1" value="Casual" name="subscription[]">
                          <label class="custom-control-label" for="customCheck1">Join</label>
                        </div>
                 </div>
            </div>
            
            <div class="clear"></div>
            <div class="guest-pricing-con">
                <div class="row">
                    <div class="col-sm-2 font-weight-bold">Storage Plan</div>
                    <div class="col-sm-2">
                        3 Videos Active<br>
                        3 Videos Archive
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-2 font-weight-bold">Video Production</div>
                    <div class="col-sm-2">
                        Generic<br>
                        Standard<br>
                        Premium
                    </div>
                    <div class="col-sm-2 font-weight-bold">
                        $105<br>
                        $150<br>
                        $375<br>
                    </div>
                    <div class="col-sm-2">
                        <b>Includes</b>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="border-6600cc">
            <div class="float-l">
                    <div class="bg-6600cc guest-pricing">
                        <div class="d-inline-block font-weight-bold">Basic</div>
                        <div class="d-inline-block font-weight-bold">$13/month</div>
                    </div>
            </div>
            <div class="float-r guest-pricing-check bg-6600cc">
                 <div class="my-account-subcription">
                        <div class="custom-control custom-checkbox basic">
                          <input type="checkbox" class="custom-control-input" id="customCheck2" value="Basic" name="subscription[]">
                          <label class="custom-control-label" for="customCheck2">Join</label>
                        </div>
                 </div>
            </div>
            
            <div class="clear"></div>
            <div class="guest-pricing-con">
                <div class="row">
                    <div class="col-sm-2 font-weight-bold">Storage Plan</div>
                    <div class="col-sm-2">
                       12 Videos Active<br>
                       12 Videos Archive
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-2 font-weight-bold">Video Production</div>
                    <div class="col-sm-2">
                        Generic<br>
                        Standard<br>
                        Premium
                    </div>
                    <div class="col-sm-2 font-weight-bold color-6600cc">
                        $75<br>
                        $125<br>
                        $375<br>
                    </div>
                    <div class="col-sm-2">
                        <b>Includes</b>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="border-0066ff">
            <div class="float-l">
                    <div class="bg-0066ff guest-pricing">
                        <div class="d-inline-block font-weight-bold">Standard</div>
                        <div class="d-inline-block font-weight-bold">$66/month</div>
                    </div>
            </div>
            <div class="float-r guest-pricing-check bg-0066ff">
                 <div class="my-account-subcription">
                        <div class="custom-control custom-checkbox standard">
                          <input type="checkbox" class="custom-control-input" id="customCheck3" value="Standard" name="subscription[]">
                          <label class="custom-control-label" for="customCheck3">Join</label>
                        </div>
                 </div>
            </div>
            
            <div class="clear"></div>
            <div class="guest-pricing-con">
                <div class="row">
                    <div class="col-sm-2 font-weight-bold">Storage Plan</div>
                    <div class="col-sm-2">
                        36 Videos Active<br>
                        36 Videos Archive
                    </div>
                    <div class="col-sm-4">
                        <h3 class="header-title">BONUS</h3>
                        <p class="color-0066ff font-weight-bold">1 FREE GENERIC VIDEO<br>
                           Every 2 months</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-2 font-weight-bold">Video Production</div>
                    <div class="col-sm-2">
                        Generic<br>
                        Standard<br>
                        Premium
                    </div>
                    <div class="col-sm-2 font-weight-bold color-0066ff">
                        $75<br>
                        $125<br>
                        $375<br>
                    </div>
                    <div class="col-sm-2">
                        <b>Includes</b>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="border-ff0033">
            <div class="float-l">
                    <div class="bg-ff0033 guest-pricing">
                        <div class="d-inline-block font-weight-bold">Premium</div>
                        <div class="d-inline-block font-weight-bold">$99/month</div>
                    </div>
            </div>
            <div class="float-r guest-pricing-check bg-ff0033">
                 <div class="my-account-subcription">
                        <div class="custom-control custom-checkbox premium">
                          <input type="checkbox" class="custom-control-input" id="customCheck4" value="Premium" name="subscription[]">
                          <label class="custom-control-label" for="customCheck4">Join</label>
                        </div>
                 </div>
            </div>
            
            <div class="clear"></div>
            <div class="guest-pricing-con">
                <div class="row">
                    <div class="col-sm-2 font-weight-bold">Storage Plan</div>
                    <div class="col-sm-2">
                        Unlimited Active<br>
                        Unlimited Archive
                    </div>
                    <div class="col-sm-4">
                        <h3 class="header-title">BONUS</h3>
                        <p class="color-ff0033 font-weight-bold">1 FREE GENERIC VIDEO<br>
                           Every month</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-2 font-weight-bold">Video Production</div>
                    <div class="col-sm-2">
                        Generic<br>
                        Standard<br>
                        Premium
                    </div>
                    <div class="col-sm-2 font-weight-bold color-ff0033">
                        $75<br>
                        $125<br>
                        $375<br>
                    </div>
                    <div class="col-sm-2">
                        <b>Includes</b>
                    </div>
                </div>
            </div>
        </div><br>
        <h3 class="header-title-2 font-weight-bold">Service Extra’s (Only when selected)</h3>
        <div class="row">
            <div class="col-sm">
                <h3 class="header-title">Upload Services</h3>
                <div class="row">
                    <div class="col-sm">
                        Social Media<br>
                        Online Websites<br>
                        Email Systems<br>
                        Broadcast Service
                    </div>
                    <div class="col-sm font-weight-bold">
                        $5 per video<br>
                        $5 per video<br>
                        $5 per video<br>
                        $5 per video<br>
                    </div>

                </div>
            </div>
            <div class="col-sm">
                <h3 class="header-title">Surge Pricing</h3>
                <div class="row">
                    <div class="col-sm">
                        Ask Me<br>
                        Always Surge<br>
                        Always RUSH
                    </div>
                    <div class="col-sm font-weight-bold">
                        Price Set on Day<br>
                        $15 per video<br>
                        $45 per video
                    </div>

                </div>
            </div>
        </div>
        
    </div>
    </div>
    @include('frontend.register.register-form')

@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

        //for clicking the selected checkbox of the subscription as per selection during the SETUP

        var invoice_to_type = $('#invoice_to').val();

        var agent = $('#fullname').val();
        var agencyValue = $('#agency').val();
        var companyValue = $('#company').val();


        // $('input[type="checkbox"]:checked').each(function(i,v){
        //     //values.push($(v).val());
        //
        //     $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        //
        //     var checkboxvalue = $(v).val();
        //     console.log('the value of checkbox clicked is ', checkboxvalue);
        //
        // });

        $('input[type="checkbox"]').on('change', function() {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);

            // var checkboxvalue = $('input[name="' + this.name + '"]').val();
            // console.log('the value of checkbox clicked is ', checkboxvalue);

            $('input[type="checkbox"]:checked').each(function(i,v){
                //values.push($(v).val());

                var checkboxvalue = $(v).val();
                console.log('the value of checkbox clicked is ', checkboxvalue);

            });


        });



    });
</script>
