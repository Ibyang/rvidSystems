<div class="frontpage-header container mb-4">
    <div class="row">
        <div class="col-sm h-col-1">
            <a href="{{ route('home') }}"><img class="img-fluid" src={{ asset('storage/app/public/revid-icon-v3.png') }} /></a>
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
                    <button type="submit" class="btn btn-primary"><b>GO</b></button>
                </div>
            </form>
        </div>
        <div class="col-sm mt-4">
            <div class="h-col-2 p-3 h-100">
                <div class="row mx-0">
                    <div class="col text-center pl-0 pr-1">
                        <a href="{{ route('pricing') }}"><div class="col-bg pt-3 pb-2 h-100">
                            <i class="f-video-icon f-pricing"></i>
                            <h3>Pricing</h3>
                        </div></a>
                    </div>
                    <div class="col text-center pr-0 pl-1 h-100">
                        <a href="{{ route('get-started') }}"><div class="col-bg pt-3 pb-2">
                            <i class="f-video-icon f-video"></i>
                            <h3>Make Video</h3>
                        </div></a>
                    </div>
                </div>
                <h2>No Fuss <br>Real Estate <br>Videos</h2>
            </div>
        </div>
        <div class="col-sm mt-4">
            <div class="h-col-3 h-100">
                <h3 class="text-center py-2"><b>FIRST VIDEO IS FREE</b></h3>
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