@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Let's Get Started! Step 2</h1>
        <hr>
        @include('frontend.register.register-info-step2')
    </div>

    <div class="bg-eae">
        @include('frontend.register.template-form')
    </div>

@endsection

{{--@extends('frontend.layouts.parts.footer-scripts')--}}

{{-- page level scripts --}}
{{--@section('footer_scripts')--}}
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {



        });
    </script>

{{--@stop--}}

