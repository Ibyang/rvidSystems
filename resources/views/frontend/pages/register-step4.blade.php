@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Let's Get Started! Step 4</h1>
        <hr>
        @include('frontend.register.register-info-step4')
    </div>

    <div class="bg-eae">
        @include('frontend.register.payment-details-form')
    </div>

@endsection

{{--@extends('frontend.layouts.parts.footer-scripts')--}}

{{-- page level scripts --}}
{{--@section('footer_scripts')--}}
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            //validation to check that at least one of the checkbox is checked
            //$("input[type='checkbox'][name='subscription1']").change(function() {

            //})

            if($("#accept_terms").is(':checked')){
                $("#btnAccept").attr("disabled", !this.checked);
            }

            //for selecting only one checkbox at a time
            $('input[type="checkbox"]').on('change', function() {
                $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });

            $("#accept_terms").click(function() {
                $("#btnAccept").attr("disabled", !this.checked);
            });

            $("#btnAccept").click(function() {
                if ($("input[type='checkbox'][name='subscription1']:checked").length == 0){
                    alert ( "ERROR! Please select at least one checkbox" );
                }
            });

            $("#paypal").click(function() {

                if($("#customCheck1").is(':checked')){
                    var item_name = 'Casual';
                    var amount = 11;
                }
                else if($("#customCheck2").is(':checked')){
                    var item_name = 'Standard';
                    var amount = 66;
                }
                else if($("#customCheck3").is(':checked')){
                    var item_name = 'Basic';
                    var amount = 33;
                }
                else if($("#customCheck4").is(':checked')){
                    var item_name = 'Premium';
                    var amount = 99;
                }
                else{
                    alert("Please Select Subscription + Storage Plans");
                    $('#paypal').prop('checked', false);
                }

                $('#item_name').val(item_name);
                $('#amount').val(amount);

                $('#paypal-form').submit();

                // $.ajax({
                //     url: '/postPaymentDetails/' + item_number + '/' + item_name + '/' + amount,
                //     type: "GET",
                //     // dataType: "json",
                //     success:function(data) {
                //
                //     }
                // });


            });


        });
    </script>

{{--@stop--}}

