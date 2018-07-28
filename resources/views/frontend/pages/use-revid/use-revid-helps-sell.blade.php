@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm col-md-auto">
                <h1 class="c-6600cc">Why Use REVid?</h1>
                <a href="" data-toggle="modal" data-target="#RevidHelpsSellVideoModal"><img src={{ asset('storage/why-sell-thumb.jpg') }} /></a>
            </div>
            <div class="col-sm">
                <h1 class="c-6600cc">Helps Sell</h1>
                <ul class="list text-justify ml-4 line-height20">
                    <li class="mb-1">The voice-over tracks speak to your potential buyers when
                        describing the property and presenting the Video. Your online
                        property listing are complimented by adding Video to your listings.</li>
                    <li class="mb-1">It is easy and quick for potential buyers to watch your Video and look,
                        see and hear about it – it makes a better connection than just
                        pictures and words</li>
                    <li class="mb-1">Video supports your brand and profile – and video supports formats
                        like Social Media – which is becoming more important in the <br>sales
                        process.</li>
                    <li>Using <b>DriveBy</b> and <b>LookFirst</b> (Free for Members) gives you
                        more value-added exposure for your listing.</li>
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

    <!-- Video Modal for Revid Helps Sell -->
    <div class="modal fade" id="RevidHelpsSellVideoModal"
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

            $('#RevidHelpsSellVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            })

        });

    </script>

@stop