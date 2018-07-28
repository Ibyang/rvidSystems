@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm col-md-auto">
                <h1 class="c-6600cc">Why Use REVid?</h1>
                <a href="" data-toggle="modal" data-target="#RevidBuyersVideoModal"><img class="img-fluid" src={{ asset('storage/why-use-revid-buyers.jpg') }} /></a>
            </div>
            <div class="col-sm">
                <h1 class="c-6600cc pl-4">Engages Buyers</h1>
                <ul class="list text-justify ml-4 line-height20">
                    <li class="mb-1"><b>86%</b> of potential buyers use Online as the main tool to search for a
                        property – making sure when they look at your property and
                        genuinely engage is what Video can help you achieve.</li>
                    <li class="mb-1"><b>Only 5%</b> of online property listing have Video and most of this is
                        simple “walk-thru” without the professional voice-over tracks –
                        <b>STAND OUT</b> – with an engaging REVid Video!</li>
                    <li class="mb-1">Using <b>DriveBy</b> and <b>LookFirst</b> (Free for Members) might help you
                        connect and engage with potential buyers, giving you more
                        value-added exposure for your listing.</li>
                    <li class="mb-0"><b>Your brand and profile</b> is strongly promoted in Video, engaging with your potential clients further.</li>
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

    <!-- Video Modal for Revid Buyers -->
    <div class="modal fade" id="RevidBuyersVideoModal"
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

            $('#RevidBuyersVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            })

        });

    </script>


@stop
