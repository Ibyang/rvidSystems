  <div class="frontpage-header container">
      <div class="row">
          <div class="col-sm-8">
              <div class="border-bot3">
                <a href=" {{ route('home') }}"><img src={{ asset('storage/revid-icon-v3.png') }} /></a>
              </div>
              <div class="row">
                  <div class="col-sm">
{{--                      <form class="frontpage-login" method="POST" action="{{ route('agent-login') }}">--}}
                      <form class="frontpage-login" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" Placeholder="Email Login" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="form-group">
                                        <input id="password" type="password" class="form-control" name="password" Placeholder="Password"  required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="text-right">
                                        <button type="submit" class="btn btn-primary">
                                            GO
                                        </button>
                                </div>
                        </form>
                    </div>
                    <div class="col-sm">
                        <p class="align-middle">
                            <h2 class="align-middle">No Fuss<br>
                            $75 Real Estate<br>
                            Videos</h2>
                        </p>
                    </div>
                </div>
          </div>
          <div class="col-sm-4">
              <br><br><br><br><br><br><br><br><br>
              <p class="text-center">
                <a href="">What <br>are <br>these?</a>    
              </p>
              <div class="row">
                  <div class="col-sm"><a href=" {{ route('what-is-driveby') }}"><i class="driveby-link"></i></a></div>
                  <div class="col-sm"><a href=" {{ route('what-is-lookfirst') }}"><i class="lookfirst-link"></i></a></div>
              </div>
              <div class="header-right-box">INCLUDED FREE</div>
          </div>
      </div>
  </div>