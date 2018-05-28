  <div class="container">
    <div class="row f-page-info">
      <div class="col col-md-5">
          <a href=" {{ route('what-is-revid') }} " style="text-decoration: none; color: black"><h3>What is REVid?</h3>
        <p class="text-justify font-weight-bold">The REVid system allows you to create photo
            based real estate recorded voice-over and
            music to a fully edited video production</p></a>
      </div>
      <div class="col col-md-4">
        <a href=" {{ route('what-is-driveby') }} " style="text-decoration: none; color: black"><h3>What is DriveBy?</h3>
        <p class="text-justify font-weight-bold">DriveBy uses Geolocation to make the
            “drive-by” experience full service – <a href="">see
            demo</a> – means more buyer engagement.</p></a>
      </div>
      <div class="col col-md"><img src={{ asset('storage/drive-look-img.jpg') }} /></div>
    </div>
    <div class="row step-info">
        <div class="col-md-auto">
            <a href=" {{ route('make-video-generic') }}"><h3 class="c-6600cc">Generic Video <br>$75</h3></a>
            <div class="d-inline-block">
                <i class="video-icon url"></i>
                <p class="text-center">URL<br><b>Details</b></p>
            </div>
            <div class="d-inline-block align-top">
                <p><b>We do it<br>for you</b></p>
            </div>
        </div>
        <div class="col-md-auto">
            <a href=" {{ route('make-video-standard') }}"><h3 class="c0066ff">Standard Video <br>$125</h3></a>
            <div class="row step-info2 text-center">
                <div class="col-md-auto">
                    <i class="video-icon pic"></i><br>
                    <p>STEP 1<br><b>Pictures</b></p>
                </div>
                <div class="col-md-auto">
                    <i class="arrow"></i>
                </div>
                <div class="col-md-auto">
                    <i class="video-icon srpt"></i><br>
                    <p>STEP 2<br><b>Script</b></p>
                </div>
                <div class="col-md-auto">
                    <i class="arrow"></i>
                </div>
                <div class="col-md-auto">
                     <i class="video-icon tmpt"></i><br>
                    <p>STEP 3<br><b>Template</b></p>
                </div>
                <div class="col-md-auto">
                    <i class="arrow"></i>
                </div>
                <div class="col-md-auto">
                     <i class="video-icon voice"></i><br>
                     <p>STEP 4<br><b>Voice</b></p>
                </div>
                <div class="col-md-auto">
                    <i class="arrow"></i>
                </div>
                <div class="col-md-auto">
                     <i class="video-icon msc"></i><br>
                     <p>STEP 5<br><b>Music</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-auto">
            <a href=" {{ route('make-video-premium') }}"><h3 class="c-ff0033">Premium  Video <br>$375</h3></a>
            <div class="d-inline-block">
                <i class="video-icon cstm"></i><br>
                <p class="text-center">CUSTOM<br><b>Made</b></p>
            </div>
            <div class="d-inline-block align-top">
                <p><b>We Build<br>your video</b></p>
            </div>
        </div>
    </div>
  </div>