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
                <h3 class="border-title">Terms and Conditions</h3>
                <div class="row">
                    <div class="col">Version 1.1</div>
                    <div class="col">Dated 1 Jan 2018</div>
                    <div class="col">Download PDF</div>
                    <div class="col"></div>
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

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">

    $(document).ready(function() {

    });

</script>
