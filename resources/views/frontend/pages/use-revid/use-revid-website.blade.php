@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm col-md-auto">
                <h1 class="c-6600cc">Where do I use REVid?</h1>
                <a href="" data-toggle="modal" data-target="#RevidWebsiteVideoModal"><img class="img-fluid" src={{ asset('storage/where-use-revid-website.jpg') }} /></a>
            </div>
            <div class="col-sm">
                <h1 class="c-6600cc pl-4">Online and Websites</h1>
                <ul class="list text-justify ml-4">
                    <li>Upload to the listing sites and online property-sale Sites the Video to
                        further compliment the photos and enhance your online listings.</li>
                    <li>Upload to your company Website.</li>
                    <li>Use the REVid service - <b>Upload to Websites</b> which is designed to
                        make it easy for you as the REVid team uploads the completed
                        REVid Video to the <b>online</b> sites or <b>websites</b> you have nominated.</li>
                    <li>Always available on <b>DriveBy</b> and <b>LookFirst</b> (free to members).</li>
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

    <!-- Video Modal for Revid Website -->
    <div class="modal fade" id="RevidWebsiteVideoModal"
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

            $('#RevidWebsiteVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            })

        });

    </script>


@stop
