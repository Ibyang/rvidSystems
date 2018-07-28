@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-0" id="content">
        <h1 class="c-333">About</h1>

        <p class="text-justify">REVid creates photo-based Video that includes voice-over tracks and music edited into a professional video production. We make
            it Easy – because REVid turns your existing property online listings into Video – meaning that all you need to do it let us know – we
            do the rest.</p>
        <p class="text-justify">We make these Video using your brand and image – your profile – making sure that the Video integrates both the property and
            <br>agent promotion.</p>
        <p class="text-justify">The Video production time is Fast, giving you options of 2-hour to 24-hour turn-around times. Meaning you get to use your Video
            quickly to use in social media, online property listings, marketing and display presentations.</p>

        <div class="border-bot pt-0">
            <div class="row">
                <div class="col text-center">
                    <h1 class="c-6600cc mb-0">What is it?</h1>
                    <b>(Easy and valuable)</b><br><br>
                    <a href="" data-toggle="modal" data-target="#WhatisRevidVideoModal" style="color: black"><img src={{ asset('storage/what-is-revid.jpg') }} /></a>
                </div>
                <div class="col text-center">
                    <h1 class="c-6600cc mb-0">How to join?</h1>
                    <b>(Get started today)</b><br><br>
                    <a href="" data-toggle="modal" data-target="#HowtoJoinVideoModal" style="color: black"><img src={{ asset('storage/how-to-join.jpg') }} /></a>
                </div>
                <div class="col text-center">
                    <h1 class="c-6600cc mb-0">How the system works?</h1>
                    <b>(It’s easy)</b><br><br>
                    <a href="" data-toggle="modal" data-target="#HowSystemWorksVideoModal" style="color: black"><img src={{ asset('storage/how-system-works.jpg') }} /></a>
                </div>
            </div>
        </div>
        <div class="border-bot py-2">
            <h1>About the REVid Product</h1>

            <p class="text-justify">The REVid product is designed to provide you with a Low Cost, Fast and Easy solution to creating engaging and informative Video
                of your property listings. It’s not a fully director film-crew production – it’s not meant to be – it’s a doable solution – quick to achieve.</p>
            <p class="text-justify">REVid brings your property images to life, using animation, movement and transition – after all a house doesn’t move anyway even
                when you video it! We enhance this vision with professional pre-recorded voice-over tracks that are scripted to match the inclusion
                and features described of your property.</p>
            <p class="text-justify">Together, the vision and the sound (plus sub-titles) gives an end-product that is perfect for use and genuinely achieves the objectives
                of being Low Cost, Fast and an Easy solution.</p>

            <h1 class="color-333">What Video Format do you Get?</h1>

            <p class="text-justify">You are provided with 4 video formats. These allow you to use the best format in different situations – such as mobile, social media
                or desk-top. The formats are:</p>
            <ul class="list-about">
                <li><b>Full-Screen</b></li>
                <li><b>Framed Screen</b></li>
                <li><b>Full-Screen with Sub-titles</b></li>
                <li><b>Frames-Screen with Sub-titles</b></li>
            </ul>
        </div>
        <div class="row mt-4">
            <div class="col-sm">
                <h1>What is DriveBy</h1>

                <p class="text-justify">DriveBy uses mobile phone geolocation to turn your For-Sale
                    signboard into a “See inside Now” experience by identifying and
                    playing the Video on demand. <a href="{{ route('what-is-driveby') }}" class="color-ff0033"><b>See more</b></a></p>
            </div>
            <div class="col-sm">
                <h1 class="c-333">What is LookFirst</h1>

                <p class="text-justify">LookFirst is the online property listing site – for videos. It’s
                    simple – a single page platform that lets you to Search, See and
                    Hear without clicking back and forth. <a href="{{ route('what-is-lookfirst') }}" class="color-ff0033"><b>See more</b></a></p>
            </div>
        </div>
        <div class="register-title">
            <div class="d-flex justify-content-between">
                <div>JOIN BELOW</div>
                <div>STEP 1</div>
            </div>
        </div>
        <h4 class="color-424244 font20 mb-3"><b>4 Easy Steps (4 to Go!)</b></h4>

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

        @include('frontend.pages.frontpage.why-use-revid')
    </div>

    @include('frontend.pages.frontpage.footer')

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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $('#HowtoJoinVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video2')[0].play();
            })


            $('#HowSystemWorksVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video3')[0].play();
            })


            $('#WhatisRevidVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            })

        });

    </script>


@stop



