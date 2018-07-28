@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">

        @include('frontend.pages.pricing-data')
        <div class="register-title">
            <div class="d-flex justify-content-between">
                <div>JOIN BELOW</div>
                <div>STEP 1</div>
            </div>
        </div>
        <h4 class="color-424244 font20 mb-3"><b>4 Easy Steps (4 to Go!)</b></h4>
        @include('frontend.register.register-info')

    </div>

    @include('frontend.register.register-form')

    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')

@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">

        $(document).ready(function() {

        });

    </script>

@stop

