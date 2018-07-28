@extends('frontend.layouts.main')

@section('content')

    <div class="container">

        <div class="row m-0">
            <div class="col-sm-4 pr-4 pl-0">
                <div class="border-bot3 pb-4 mb-2">
                    <div class="d-inline-block align-top">
                        <img src="{{ asset('storage/my-account-icon2.jpg') }}">
                    </div>
                    <div class="d-inline-block">
                        <h4 class="font-weight-bold color-424244">{{ Auth::user()->name }}</h4>
                        <div class="account-position line-height20">Professionals Real Estate <br>Bassendean</div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="border-bot3 mb-2">
                    <h4 class="font-weight-bold color-424244 mb-1">Terms and Conditions</h4>
                    <div class="row mt-4 mb-3">
                        <div class="col-sm-3 align-self-center color-666">Version 1.1</div>
                        <div class="col-sm-3 align-self-center color-666">Dated 1 Jan 2018</div>
                        <div class="col-sm align-self-center color-666"><i class="dl-pdf"></i> Download PDF</div>
                    </div>
                </div>
            </div>
        </div>


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
                    <div class="col-sm-3 align-self-center color-666">Dated 1 Jan 2018</div>
                    <div class="col-sm align-self-center color-666"><i class="dl-pdf"></i> Download PDF</div>
                </div>
                <div class="border-999">
                    @if($content->content_text != null)
                        {!! $content->content_text !!}
                    @endif
                    {{--{{ $content->content_text != null ? htmlspecialchars($content->content_text) : '' }}--}}
                    {{--<b>TERMS AND CONDITIONS</b>--}}
                    {{--<br><br>--}}
                    {{--<p class="text-justify"><b>Lorem ipsum dolor sit amet consectetuer adipiscing elit, sed diam nonummy nibh</b>--}}
                        {{--<br><br>--}}
                        {{--Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis--}}
                        {{--nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.--}}
                        {{--Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt--}}
                        {{--Ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex--}}
                        {{--ea commodo consequat.--}}
                        {{--<br><br>--}}
                        {{--<b>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</b>--}}
                        {{--Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis--}}
                        {{--dolore te feugait nulla facilisi.</p>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function() {

        });

    </script>

@stop
