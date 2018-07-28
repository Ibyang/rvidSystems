<div class="frontpage-header container mb-4">
    <div class="row">
        <div class="col-sm h-col-1">
            <a href="{{ route('home') }}"><img class="img-fluid" src={{ asset('storage/revid-icon-v3.png') }} /></a>
            <form class="frontpage-login mt-2" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h3>Existing Users</h3>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" Placeholder="Email Login" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" Placeholder="Password"  required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">GO</button>
                </div>
            </form>
        </div>
        <div class="col-sm mt-4">
            <div class="h-col-2 p-3 h-100">
                <div class="row mx-0">
                    <div class="col text-center pl-0 pr-1">
                        <div class="col-bg pt-3 pb-2 h-100">
                            <a href=""><i class="f-video-icon f-pricing"></i></a>
                            <h3><a href="{{ route('pricing') }}">Pricing</a></h3>
                        </div>
                    </div>
                    <div class="col text-center pr-0 pl-1 h-100">
                        <div class="col-bg pt-3 pb-2">
                            <a href=""><i class="f-video-icon f-video"></i></a>
                            <h3><a href="{{ route('get-started') }}">Make Video</a></h3>
                        </div>
                    </div>
                </div>
                <h2>No Fuss <br>Real Estate <br>Videos</h2>
            </div>
        </div>
        <div class="col-sm mt-4">
            <div class="h-col-3 h-100">
                <h3 class="text-center py-2">FIRST VIDEO IS FREE</h3>
                <div class="fv-mobile">
                    @include('frontend.pages.frontpage.firstvideo.mobile-view')
                </div>
                <div class="fv-web">
                    @include('frontend.pages.frontpage.firstvideo.tablet-web')
                </div>
            </div>
        </div>
    </div>
</div>