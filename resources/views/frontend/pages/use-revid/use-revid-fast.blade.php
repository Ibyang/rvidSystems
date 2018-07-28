@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm col-md-auto">
                <h1 class="c-6600cc">Why Use REVid?</h1>
                <a href="" data-toggle="modal" data-target="#RevidFastVideoModal"><img class="img-fluid" src={{ asset('storage/where-use-revid-fast.jpg') }} /></a>
            </div>
            <div class="col-sm">
                <h1 class="c-6600cc pl-4">Fast</h1>
                <ul class="list text-justify ml-4">
                    <li class="mb-0"><b>REvid</b> can produce your Video with <b>2 Hours using the <br>RUSH!</b> function.</li>
                    <li class="mb-0"><b>REVid</b> can produce your Video with <b>24 hours using the <br>SURGE!</b> function.</li>
                    <li class="mb-0"><b>Typical</b> (no RUSH! or SURGE!) Video productions take between <b>2 to 3 days</b>.</li>
                    <li><b>Compared to the alternative</b> of getting a film crew on-site,
                        establishing directions, writing a script and having it professionally
                        recorded and then the editing – <b>REVid is lighting FAST!</b></li>
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

    <!-- Video Modal for Revid Fast -->
    <div class="modal fade" id="RevidFastVideoModal"
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
                    <video controlsList="nodownload" controls id="video1" style="width: 100%" >
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

            $('#RevidFastVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            })

        });

    </script>

@stop

