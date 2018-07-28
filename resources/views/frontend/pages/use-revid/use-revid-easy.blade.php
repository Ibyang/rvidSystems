@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm col-md-auto">
                <h1 class="c-6600cc">Why Use REVid?</h1>
                <a href="" data-toggle="modal" data-target="#RevidEasyUseVideoModal"><img class="img-fluid" src={{ asset('storage/why-use-revid-easy.jpg') }} /></a>
            </div>
            <div class="col-sm">
                <h1 class="c-6600cc pl-4">Easy to Use</h1>
                <ul class="list text-justify ml-4 line-height24">
                    <li class="mb-0">It takes 4 steps to set-up your video templates and select your
                        preferences – then you are ready to go –all you need to do is login
                        and order your video.</li>
                    <li class="mb-0"><b>To Order your Video</b> – simply login and enter (or copy) the existing
                        online property listing URL into the REVid System – <b>it really is <br>that easy</b>.</li>
                    <li class="mb-0"><b>Manage your Video Library</b> through the REVid System tools and
                        functions – making it easy to track progress and function Videos.</li>
                    <li class="mb-0"><b>Change</b> your templates and preference settings – using the My
                        Preference and Explore functions.</li>
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

    <!-- Video Modal for Revid Easy Use -->
    <div class="modal fade" id="RevidEasyUseVideoModal"
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

            $('#RevidEasyUseVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            })

        });

    </script>

@stop
