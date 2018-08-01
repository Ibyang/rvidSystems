@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">

        <h3 class="header-border font-weight-bold color-424244">Copyright</h3>
        <div class="row">
            <div class="col-2 align-self-center color-666">Version 1.1</div>
            <div class="col-3 align-self-center color-666">Dated 1 Jan 2018</div>
            <div class="col-2 align-self-center color-666"><a href="{{ url('account/getDocumentPDF/2') }}" style="color: #666666"><i class="dl-pdf"></i> Download PDF</a></div>
            <div class="col-sm align-self-center text-right">
                {{--<div class="d-flex justify-content-end">--}}
                    {{--<div class="p-2"><div class="arrow-prev"></div></div>--}}
                    {{--<div class="pl-0 pr-2 py-2">Page</div>--}}
                    {{--<div class="my-2 arrow-data text-center">1</div>--}}
                    {{--<div class="p-2">of</div>--}}
                    {{--<div class="my-2 arrow-data text-center">1</div>--}}
                    {{--<div class="py-2 pl-2"><div class="arrow-next"></div></div>--}}
                {{--</div>--}}
            </div>
        </div>

        <div class="border-999">
            {{--<b>COPYRIGHT</b>--}}
            {{--<br>--}}
            <br>
            @if($content->content_text != null)
                {!! $content->content_text !!}
            @endif
        </div>
    </div>



@endsection
