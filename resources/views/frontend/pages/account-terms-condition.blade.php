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
                <h4 class="font-weight-bold color-424244 mb-1">Terms and Conditions</h4>
                <div class="row mt-4 mb-3">
                    <div class="col-sm-3 align-self-center color-666">Version 1.1</div>
                    <div class="col-sm-3 align-self-center color-666">Dated 1 June 2018</div>
                    <div class="col-sm align-self-center color-666"><a href="{{ url('account/getDocumentPDF/1') }}" style="color: #666666"><i class="dl-pdf"></i> Download PDF</a></div>
                </div>
                <div class="border-999">
                    @if($content->content_text != null)
                        {!! $content->content_text !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    <!-- <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script> -->
    <script type="text/javascript">

        $(document).ready(function() {

        });

    </script>

@stop
