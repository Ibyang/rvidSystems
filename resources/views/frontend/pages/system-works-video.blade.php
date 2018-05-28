@extends('frontend.layouts.main')

@section('content')
    <div class="container" id="content">
       
        <div class="row">
          <div class="col-8">
              <h1 class="c-6600cc">How the System Works? Video</h1>
              <img src= />
          </div>
          <div class="col-4">
              <h1 class="c-6600cc" style="text-align: center; margin-bottom: 0">How to join?</h1>
              <p style="text-align: center">(Get started today)</p>
              <a href="" data-toggle="modal" data-target="#HowtoJoinVideoModal"><img src={{ asset('storage/how-to-join.jpg') }} /></a>
              <br><br><h1 class="c-6600cc" style="text-align: center;">How to use REVid<br>in your business?</h1><br>
              <img src=/>
          </div>
      
        </div>
        
    @include('frontend.register.register-info')
        
    @include('frontend.register.register-form')

    </div>

    @include('frontend.pages.frontpage.info-form')

    @include('frontend.pages.frontpage.use-revid')

    @include('frontend.pages.frontpage.footer')

    <!-- Video Modal for What is Revid -->
    <div class="modal fade" id="RevidBusinessVideoModal"
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
