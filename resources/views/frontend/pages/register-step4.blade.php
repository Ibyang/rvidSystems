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
            //for selecting only one checkbox at a time
            $('input[type="checkbox"]').on('change', function() {
                $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });

            $("#accept_terms").click(function() {
                $("#btnAccept").attr("disabled", !this.checked);
            });

        });
    </script>

{{--@stop--}}

