<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        {{--CSRF Token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>REVid Systems</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/tooltipster/dist/css/tooltipster.bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/selectize/css/selectize.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        {{--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}

    </head>
    <body>

    <header class="@guest {{'bg-primary'}}  @else {{'bg-primary-account'}} @endif">

        <div class="container">
            <div class="float-l">
                @guest
                    <a href="/"><img class="img-fluid" src={{ asset('storage/revid-icon.png') }} /></a>
                @else
                    <img class="img-fluid" src={{ asset('storage/revid-icon-v4.png') }} />
                @endguest
            </div>
            <div class="float-l">
                @guest
                    <div class="guest-menu text-center d-flex flex-row">
                        <div>
                            <i class="menu-icon about"></i><br>
                            <a href="{{ route('about') }}">About</a>
                        </div>
                        <div class="px-3">
                            <i class="menu-icon join"></i><br>
                            {{--<a href="/how-to-join">Join Today</a>--}}
                            <a href="{{ route('get-started') }}">Join Today</a>
                        </div>
                        <div>
                            <i class="menu-icon pricing"></i><br>
                            <a href="{{ route('pricing') }}">Pricing</a>
                        </div>
                        <div class="px-3">
                            <i class="menu-icon make-videos"></i><br>
                            <a href="{{ route('get-started') }}">Make Video</a>
                        </div>
                    </div>
                @else
                    <div class="hdr-i-col @if(Auth::check()) account-menu @endif d-flex flex-row">
                        <div>
                            <i class="menu-icon help"></i><br>
                            <p><a href="{{ route('account-help') }}">Need Help?</a></p>
                        </div>
                        <div>
                            <i class="menu-icon billing"></i>
                            <p><a href="{{ route('account-billing-history') }}">My Billing</a></p>
                        </div>
                        <div>
                            <i class="menu-icon logout"></i>
                            <p><a href="{{ route('userLogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                            <form id="logout-form" action="{{ route('userLogout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form></p>
                        </div>
                        <div class="text-left">
                            <b>All your videos<br> are uploaded<br> to DriveBy</b>
                        </div>
                    </div>
                @endguest
            </div>
            <div class="clear"></div>
            @guest
                <div class="sub-header row">
                    <div class="col">
                        <form class="form-header" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="row col p-0">
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" Placeholder="Login" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <input id="password" type="password" class="form-control" name="password" Placeholder="Password"  required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                        <div class="forgot-password">
                                            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password?</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-auto">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">GO</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-auto">
                        <ul class="sub-nav">
                            <li><a href="/" class="main">Home</a></li>
                            <li><a href="{{ route('help') }}" class="main">Need Help?</a></li>
                            <li><a href="{{ route('what-is-driveby') }}" class="sub">What is<br>DriveBy?</a></li>
                        </ul>
                    </div>
                </div>
            @else
                <br><br><br>
        @endguest
    </header>
    @yield('content')

    <!-- global js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
    <!-- end of global js -->

    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->

    </body>
</html>


