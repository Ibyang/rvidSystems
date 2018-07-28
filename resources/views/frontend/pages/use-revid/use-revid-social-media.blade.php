@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm col-md-auto pb-4">
                <h1 class="c-6600cc">Where do I use REVid?</h1>
                <a href="" data-toggle="modal" data-target="#RevidBuyersVideoModal"><img class="img-fluid" src={{ asset('storage/where-use-revid-media.jpg') }} /></a>
            </div>
            <div class="col-sm">
                <h1 class="c-6600cc pl-4">Social Media</h1>
                <ul class="list text-justify ml-4">
                    <li><b>Social Media</b> is a very important platform for <b>promoting your
                            brand and the listings</b> you have for sale.</li>
                    <li>Video is the <b>preferred format</b> for <b>Social Media</b> and is becoming
                        more important for <b>engagement and success</b>.</li>
                    <li>REVid Video format (full screen with sub-titles) is <b>ideal for Social
                            Media platforms</b>.</li>
                    <li>Today, your marketing program can include positive Social Media
                        interaction as <b>REVid gives you Easy, Fast and Low-Cost</b> solution.</li>
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

