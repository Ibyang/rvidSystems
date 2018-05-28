@extends('frontend.layouts.main')

@section('content')
    <div class="container" id="content">
        <h1 class="c-333">About</h1>

        <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
            erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
            consequat.
            <br><br>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            aliquam erat volutpat.</p>

        <div class="border-bot">
            <div class="row">
                <div class="col text-center">
                    <a href="" data-toggle="modal" data-target="#WhatisRevidVideoModal" style="color: black"><h1 class="c-6600cc mb-0">What is it?</h1>
                    <b>(Easy and valuable)</b><br><br>
                        <img src={{ asset('storage/what-is-revid.jpg') }} /></a>
                </div>
                <div class="col text-center">
                    <a href="" data-toggle="modal" data-target="#HowtoJoinVideoModal" style="color: black"><h1 class="c-6600cc mb-0">How to join?</h1>
                    <b>(Get started today)</b><br><br>
                        <img src={{ asset('storage/how-to-join.jpg') }} /></a>
                </div>
                <div class="col text-center">
                    <a href="" data-toggle="modal" data-target="#HowSystemWorksVideoModal" style="color: black"><h1 class="c-6600cc mb-0">How the system works?</h1>
                    <b>(It’s easy)</b><br><br>
                        <img src={{ asset('storage/how-system-works.jpg') }} /></a>
                </div>
            </div>
        </div>
        <h1 class="c-333 mb-0 mt-2">About the REVid Product</h1>

        <p class="text-justify border-bot">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
            erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
            consequat.
            <br><br>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            <br><br>
            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            aliquam erat volutpat.</p>

        <div class="row">
            <div class="col">
                <h1 class="c-333">What is DriveBy</h1>

                <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                    ex ea commodo consequat</p>
            </div>
            <div class="col">
                <h1 class="c-333">What is LookFirst</h1>

                <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                    ex ea commodo consequat</p>
            </div>
        </div>

        @include('frontend.pages.frontpage.use-revid')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')
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
                    <video controlsList="nodownload" controls id="video1" style="width: 100%" autoplay>
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
                    <video controlsList="nodownload" controls id="video1" style="width: 100%" autoplay>
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
                    <video controlsList="nodownload" controls id="video1" style="width: 100%" autoplay>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $('#HowtoJoinVideoModal').on('shown.bs.modal', function () {
            $('body').addClass('test');
            $('#HowtoJoinVideoModal')[0].play();
        })

        // $('#HowtoJoinVideoModal').on('hidden.bs.modal', function () {
        //     $('#HowtoJoinVideoModal')[0].pause();
        // })

        $('#HowSystemWorksVideoModal').on('shown.bs.modal', function () {
            $('body').addClass('test');
            $('#HowSystemWorksVideoModal')[0].play();
        })


        $('#RevidBusinessVideoModal').on('shown.bs.modal', function () {
            $('body').addClass('test');
            $('#RevidBusinessVideoModal')[0].play();
        })

        // $('#HowSystemWorksVideoModal').on('hidden.bs.modal', function () {
        //     $('#HowSystemWorksVideoModal')[0].pause();
        // })

    });

</script>
