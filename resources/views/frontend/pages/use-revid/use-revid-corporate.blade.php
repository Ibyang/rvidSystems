@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm-12 col-md-auto">
                <h1 class="c-6600cc">Where do I use REVid?</h1>
                <a href="" data-toggle="modal" data-target="#RevidCorporateVideoModal"><img class="img-fluid" src={{ asset('storage/where-use-revid-corporate.jpg') }} /></a>
            </div>
            <div class="col-sm">
                <h1 class="c-6600cc pl-4">Corporate</h1>
                <ul class="list text-justify ml-4">
                    <li><b>Home Open Video Display</b> – you can use the function in REVid to
                        download your Videos into a single presentation format – for use
                        during Home Opens.</li>
                    <li><b>In-Office Video Display</b> – you can use the Video (with Subtitles) as
                        a great In-office or Window Display.</li>
                    <li>You can use your <b>REVid library</b> as a tool to show prospective
                        buyers your listings or the properties available for sale.</li>
                </ul>
            </div>
        </div>
        @include('frontend.register.register-join-info')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>
    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')
    </div>

    <!-- Video Modal for Revid Corporate -->
    <div class="modal fade" id="RevidCorporateVideoModal"
         tabindex="-1" role="dialog"
         aria-labelledby="VideoModalLabel">
        <div class="modal-dialog" role="document" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Video</h4>
                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <video controlsList="nodownload" controls id="video1" style="width: 100%">
                        <source src={{ asset('storage/videos/VIDDYOZE-REVid_V6.mp4') }} type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-default"
                            data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">

        $(document).ready(function() {

            $('#RevidCorporateVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            })

        });

    </script>


@stop

