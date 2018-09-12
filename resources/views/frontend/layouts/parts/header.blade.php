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
        <link href="{{ asset('css/twb337.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/tooltipster/dist/css/tooltipster.bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/selectize/css/selectize.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- embed ZOHO SalesIQ Code -->
        <script type="text/javascript"> var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"6f90467a55e8bcc608507f98c193aa302ea2173b1f0a472164107003e49e3fb7", values:{},ready:function(){}}; var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true; s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>"); </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W85D2QD');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W85D2QD"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <header class="@guest {{'bg-primary'}}  @else {{'bg-primary-account'}} @endif">

        <div class="container">
            <div class="float-l">
                @guest
                    <a href="{{ route('home') }}"><img class="img-fluid" src={{ asset('storage/app/public/revid-icon.png') }} /></a>
                @else
                    <img class="img-fluid" src={{ asset('storage/app/public/revid-icon-v4.png') }} />
                @endguest
            </div>
            <div class="float-l">
                @guest
                    <div class="guest-menu text-center d-flex flex-row">
                        <div>
                            <a href="{{ route('about') }}"><i class="menu-icon about"></i><br>
                            About
                        </div></a>
                        <div>
                            <a href="{{ route('get-started') }}"><i class="menu-icon join"></i><br>
                            {{--<a href="/how-to-join">Join Today</a>--}}
                            Join Today</a>
                        </div>
                        <div>
                            <a href="{{ route('pricing') }}"><i class="menu-icon pricing"></i><br>
                            Pricing</a>
                        </div>
                        <div>
                            <a href="{{ route('get-started') }}"><i class="menu-icon make-videos"></i><br>
                            Make Video</a>
                        </div>
                    </div>
                @else
                    <div class="hdr-i-col @if(Auth::check()) account-menu @endif d-flex flex-row">
                        <a href="{{ route('account-help') }}"><div>
                            <i class="menu-icon help"></i><br>
                            <p>Need Help?</p>
                        </div></a>
                        <a href="{{ route('account-billing-history') }}"><div>
                            <i class="menu-icon billing"></i>
                            <p>My Billing</p>
                        </div></a>
                        <a href="{{ route('userLogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><div>
                            <i class="menu-icon logout"></i>
                            <p>Log Out
                            <form id="logout-form" action="{{ route('userLogout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form></p>
                        </div></a>
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
                            <div class="row p-0">
                                <div class="col-md">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" Placeholder="Login" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script> -->
    <!-- end of global js -->

    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->

    </body>
</html>


