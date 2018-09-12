<footer class="py-3 bg-dark">
    <div class="container">
        <div class="footer-con">
            <h6 class="text-center">Your First Real Estate Video is <span>FREE</span>, Try Today!</h6>
            <form method="post" action="{{ route('getStarted') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-8"><input type="email" name="email" class="form-control" placeholder="Add Your Email Address" required></div>
                    <div class="col-sm-4 align-self-center"><button type="submit" class="btn btn-primary">TRY TODAY</button></div>
                </div>
            </form>
        </div>
        <div class="text-center footer-logo">
            <a href="/"><img class="img-fluid" src={{ asset('storage/app/public/revid-icon.png') }} /></a>
        </div>

        <div class="fv-mobile">
          <div class="row justify-content-center">
              <div class="col-auto p-0"><a href="{{ $social->facebook }}" target="_blank"><i class="social-icon2 fb2"></i></a></div>
              <div class="col-auto p-0"><a href="{{ $social->twitter }}" target="_blank"><i class="social-icon2 twt2"></i></a></div>
              <div class="col-auto p-0"><a href="{{ $social->linkedin }}" target="_blank"><i class="social-icon2 in2"></i></a></div>
              <div class="col-auto p-0"><a href="{{ $social->facebook }}" target="_blank"><i class="social-icon2 chk2"></i></a></div>
              <div class="col-auto p-0"><a href="{{ $social->youtube }}" target="_blank"><i class="social-icon2 ytb2"></i></a></div>
              <div class="col-auto p-0"><a href="{{ $social->pinterest }}" target="_blank"><i class="social-icon2 pin2"></i></a></div>
              <div class="col-auto p-0"><a href="{{ $social->googleplus }}" target="_blank"><i class="social-icon2 glg2"></i></a></div>
          </div>
          <div class="my-2 text-center text-white">REVid Systems Pty Ltd 2018 - <br><a href="{{ route('terms-condition') }}" style="color: white">Terms and Conditions</a> - <a href="{{ route('copyright') }}" style="color: white">Copyright</a> - <br><a href="{{ route('privacy-terms') }}" style="color: white">Privacy Policy</a> - <a href="{{ route('contact') }}" style="color: white">Contact</a></div>
        </div>

        <div class="fv-web text-center">
            <a href="{{ $social->facebook }}" target="_blank"><i class="social-icon fb"></i></a>
            <a href="{{ $social->twitter }}" target="_blank"><i class="social-icon twt"></i></a>
            <a href="{{ $social->linkedin }}" target="_blank"><i class="social-icon in"></i></a>
            <a href="{{ $social->facebook }}" target="_blank"><i class="social-icon chk"></i></a>
            <a href="{{ $social->youtube }}" target="_blank"><i class="social-icon ytb"></i></a>
            <a href="{{ $social->pinterest }}" target="_blank"><i class="social-icon pin"></i></a>
            <a href="{{ $social->googleplus }}" target="_blank"><i class="social-icon glg"></i></a>
            <p class="my-2 text-center text-white">REVid Systems Pty Ltd 2018 - <a href="{{ route('terms-condition') }}" style="color: white">Terms and Conditions</a> - <a href="{{ route('copyright') }}" style="color: white">Copyright</a> - <a href="{{ route('privacy-terms') }}" style="color: white">Privacy Policy</a> - <a href="{{ route('contact') }}" style="color: white">Contact</a></p>
        </div>
    </div>
</footer>