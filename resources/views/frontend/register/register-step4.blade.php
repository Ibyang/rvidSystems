@extends('frontend.layouts.main')

@section('content')
    <div class="container p-0" id="content">
        <h1 class="c-6600cc border-bot4">Let’s Get Started! Step 4</h1>
        
        @include('frontend.register.register-info')
        
        <div class="d-flex justify-content-between join-step-next p-1">
                <button class="btn btn-primary bg-333 btn-no-border px-4" onclick="goBack()"><i class="arrow-left"></i> BACK</button>
        </div>
    </div>
    <div class="bg-eae step-two-register">
         <div class="container" id="content">
                 <form class="register-form my-account-subcription" action="{{ route('processStep4') }}" method="POST">
                {{ csrf_field() }}
                   
                    @include('frontend.register.steps.payment-details')
                    
                    @include('frontend.register.steps.how-will-pay')
                    
                    @include('frontend.register.steps.who-will-pay')
                    
                </form>
                <form id="paypal-form" action="{{ route('postPaymentDetails') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    {{--<input type="hidden" name="item_id" id="item_id" value="{{ $user_id }}">--}}
                    <input type="hidden" name="item_name" id="item_name">
                    <input type="hidden" name="amount" id="amount">
                </form>
        </div>
    </div>
   
</div>
@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">

        function goBack(){
            window.history.back();
        }

        $(document).ready(function() {

            //validation to check that at least one of the checkbox is checked
            //$("input[type='checkbox'][name='subscription1']").change(function() {

            //})

            //fix to scroll the page to top
            $(this).scrollTop(0);
            

            if($("#accept_terms").is(':checked')){
                $("#btnAccept").attr("disabled", !this.checked);
            }

            $("#accept_terms").click(function() {
                $("#btnAccept").attr("disabled", !this.checked);
            });

            $("#chkInvoice").click(function() {
                if($("#chkInvoice").is(':checked')){
                    alert('checkbox is checked');
                    $("#invoice_apply").attr("checked", true);
                }
                else{
                    $("#invoice_apply").attr("checked", false);
                }
            });


            //script for the I Accept for the Terms and Conditions Page PopUp
            $("#chkTermsConditions").click(function() {
                if($("#chkTermsConditions").is(':checked')){
                    $('#finishTerms').hide();
                    $('#finishSubmit').show();
                    // $('#btnIAccept').prop('disabled', false);
                    $('#btnIAccept').show();
                }
                else{
                    $('#finishTerms').show();
                    $('#finishSubmit').hide();
                    $('#btnIAccept').hide();
                    // $('#btnIAccept').prop('disabled', true);
                }
            });


            //script if I Accept button is clicked from the Terms and Conditions Page
            $("#btnIAccept").click(function() {
                $('#TermsConditionsModal').modal('hide');
            });


            // $('#TermsConditionsModal').modal({
            //     backdrop: 'static',
            //     keyboard: false
            // });


            $('#TermsConditionsModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
            });


            // $('#TermsConditionsModal').on('hide.bs.modal', function (e) {
            //     e.preventDefault();
            //     e.stopPropagation();
            //     return false;
            // });




            //for selecting only one checkbox at a time
            // $('input[type="checkbox"]').on('change', function() {
            //     $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            // });



            // $("#btnAccept").click(function() {
            //     if ($("input[type='checkbox'][name='subscription1']:checked").length == 0){
            //         alert ( "ERROR! Please select at least one checkbox" );
            //     }
            // });

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

@stop

