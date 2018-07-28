@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">

        <div class="row">
            <div class="col-sm-8 mb-3">
                <h1 class="c-6600cc mb-3">What is REVid? Video</h1>
                <div>
                    <a href="" data-toggle="modal" data-target="#WhatisRevidVideoModal"><img class="img-fluid pt-4" src={{ asset('storage/revid-video.jpg') }}></a>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <h1 class="c-6600cc m-0">How to join?</h1>
                (Get started today)
                <div class="mt-3">
                    <a href="" data-toggle="modal" data-target="#HowtoJoinVideoModal"><img class="img-fluid" src={{ asset('storage/how-to-join.jpg') }} /></a>
                    <div class="m-35-0">
                        <h1 class="c-6600cc m-0">How the system works?</h1>
                        (It’s easy)
                    </div>
                    <a href="" data-toggle="modal" data-target="#HowSystemWorksVideoModal"><img class="img-fluid" src={{ asset('storage/how-system-works.jpg') }} /></a>
                </div>
            </div>
        </div>

        @include('frontend.register.register-join-info')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>
    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')
    </div>

    <!-- Video Modal for What is Revid -->
    <div class="modal fade" id="WhatisRevidVideoModal"
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


    <!-- Video Modal for How to Join -->
    <div class="modal fade" id="HowtoJoinVideoModal"
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
                    <video controlsList="nodownload" controls id="video2" style="width: 100%">
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


    <!-- Video Modal for How the System Works -->
    <div class="modal fade" id="HowSystemWorksVideoModal"
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
                    <video controlsList="nodownload" controls id="video3" style="width: 100%">
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

            $('#HowtoJoinVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video2')[0].play();
            });

            $('#HowSystemWorksVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video3')[0].play();
            });


            $('#WhatisRevidVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            });

        });

    </script>


@stop
