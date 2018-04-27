@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Let's Get Started! Step 2</h1>
        <hr>
        @include('frontend.register.register-info')
    </div>

    {{--<div class="bg-eae">--}}
        {{--@include('frontend.register.template-form')--}}
    {{--</div>--}}

    <div class="bg-eae step-two-register">
        <div class="container" id="content">
            <form class="register-form" action="{{ route('processStep2') }}" method="POST">
                {{ csrf_field() }}
                @include('frontend.register.steps.pictures')

                @include('frontend.register.steps.logo')

                @include('frontend.register.steps.video-frame')

                @include('frontend.register.steps.content-video-frame')

                @include('frontend.register.steps.voice')

                @include('frontend.register.steps.music')
            </form>
        </div>
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

