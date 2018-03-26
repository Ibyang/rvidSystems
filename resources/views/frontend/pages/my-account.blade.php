@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form">
            @include ('frontend.pages.my-account.details')
            
            @include ('frontend.pages.my-account.subscription')
            
            @include ('frontend.pages.my-account.billing')
            
            @include ('frontend.pages.my-account.invoice')
            
            @include ('frontend.pages.my-account.payment')
        </div>
    </div>
</div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

        var invoice_to_type = $('#invoice_to').val();

        var agent = $('#fullname').val();
        var agencyValue = $('#agency').val();
        var companyValue = $('#company').val();

        console.log("the value of invoice to type is", invoice_to_type);

        console.log("the value of agencyValue is", agencyValue);
        console.log("the value of companyValue is", companyValue);

        $('select[name="invoice_to"]').on('change', function() {
            var invoice_to_type = $(this).val();

            if(invoice_to_type === 'Agent')
            {
                $("#invoiceTo").val(agent);
                console.log("Invoice To Selected is Agent....");

                var invoiceTo = $("#invoiceTo").val();
                console.log("The value of Invoice To is ", invoiceTo);
            }
            else if(invoice_to_type === 'Agency')
            {
                $("#invoiceTo").val(agencyValue);
                console.log("Invoice To Selected is Agency....");

                var invoiceTo = $("#invoiceTo").val();
                console.log("The value of Invoice To is ", invoiceTo);
            }
            else if(invoice_to_type === 'Company')
            {
                $("#invoiceTo").val(companyValue);
                console.log("Invoice To Selected is Company....");

                var invoiceTo = $("#invoiceTo").val();
                console.log("The value of Invoice To is ", invoiceTo);
            }

        });

        
        $('input[type="checkbox"]').on('change', function() {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });




    });
</script>

