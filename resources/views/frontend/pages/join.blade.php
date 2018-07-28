@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <div class="border-bot4">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="c-6600cc">How to Join? Video</h1>
                    <a href="" data-toggle="modal" data-target="#HowtoJoinVideoModal"><img class="img-fluid pt-4" src={{ asset('storage/how-to-join-video.jpg') }} ></a><br><br>
                </div>
                <div class="col-sm-4 text-center">
                    <h1 class="c-6600cc m-0">How to use REVid <br>in your business?</h1><br>
                    <a href="" data-toggle="modal" data-target="#HowToUseRevidVideoModal"><img class="img-fluid" src={{ asset('storage/get-started.jpg') }} /></a>
                    <div class="m-35-15">
                        <h1 class="c-6600cc m-0">How the system works?</h1>
                        <b>(It’s easy)</b>
                    </div>
                    <a href="" data-toggle="modal" data-target="#HowSystemWorksVideoModal"><img class="img-fluid pt-3" src={{ asset('storage/how-system-works.jpg') }} /></a>
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


    <!-- Video Modal for Revid Business -->
    <div class="modal fade" id="HowToUseRevidVideoModal"
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $('#HowtoJoinVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            });


            $('#HowToUseRevidVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video2')[0].play();
            });


            $('#HowSystemWorksVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video3')[0].play();
            });


        });

    </script>


@stop


