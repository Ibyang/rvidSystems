@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="row my-account-container">
            <div class="col-lg-4">
                @auth
                    @include('frontend.layouts.parts.sidebar')
                @endauth
            </div>
            <div class="col-lg-8 my-account-form">
                @include ('frontend.pages.my-account.details')

                @include ('frontend.pages.my-account.subscription')

                @include ('frontend.pages.my-account.billing')

                @include ('frontend.pages.my-account.invoice')

                @include ('frontend.pages.my-account.payment')
            </div>
        </div>
    </div>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script src="{{ asset('assets/tooltipster/dist/js/tooltipster.bundle.min.js') }}" type="text/javascript"></script>

    <script>
        $(document).ready(function(){

            //for showing tooltip
            $('.tooltip').tooltipster({
                animation: 'swing',
                delay: '200',
                side: 'bottom'
            });

            var invoice_to_type = $('#invoice_to').val();

            var agent = $('#fullname').val();
            var agencyValue = $('#agency').val();
            var companyValue = $('#company').val();

            $('select[name="invoice_to"]').on('change', function() {
                var invoice_to_type = $(this).val();

                if(invoice_to_type === 'Agent')
                {
                    $("#invoiceTo").val(agent);
                }
                else if(invoice_to_type === 'Agency')
                {
                    $("#invoiceTo").val(agencyValue);
                }
                else if(invoice_to_type === 'Company')
                {
                    $("#invoiceTo").val(companyValue);
                }

            });

            $('input[type="checkbox"]').on('change', function() {
                $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });


        });
    </script>

@stop

