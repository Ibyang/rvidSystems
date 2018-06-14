<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>REVid Systems</title>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/docs.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/tooltipster/dist/css/tooltipster.bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />--}}

  </head>
  <body>

    <header class="@if (Request::segment(1) == 'account') {{'bg-primary-account'}}  @else {{'bg-primary'}} @endif">
        <div class="container">
          <div class="row">
              <div class="float-l"><a href=" {{ route('home') }}"><img src={{ asset('storage/revid-icon.png') }} /></a></div>
              <div class="float-l">
                  @guest
                      <ul class="hdr-i-col">
                          <li>
                              <a href=" {{ route('about') }}"><i class="menu-icon about"></i>
                                  <p>About</p></a>
                          </li>
                          <li>
                              <a href=" {{ route('get-started') }}"><i class="menu-icon join"></i>
                                  <p>Join Today</p></a>
                          </li>
                          <a href=" {{ route('help') }}"><li>
                                  <i class="menu-icon help"></i>
                                  <p>Need Help?</p>
                              </li></a>
                      </ul>
                  @else
                      <ul class="hdr-i-col @if(Auth::check()) account-menu @endif">
                          <li>
                              <a href=" {{ route('account-help') }}"><i class="menu-icon help"></i>
                                  <p>Need Help?</p></a>
                          </li>
                          <li>
                              {{--                          <a href=" {{ route('account-home') }} "><i class="menu-icon about"></i>--}}
                              <a href=" {{ route('account-billing-history') }} "><i class="menu-icon about"></i>
                                  <p>My Billing</p></a>
                          </li>
                          <li>
                              <a href="{{ route('userLogout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="menu-icon logout"></i>
                                  <p>Log Out</p></a>
                              <form id="logout-form" action="{{ route('userLogout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                          <li>All your videos<br> are uploaded<br> to DriveBy</li>
                      </ul>
                  @endguest
              </div>
            <div class="clear"></div>
          </div>
          @guest
          <div class="sub-header row">
            <div class="col">
                <form class="form-header" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row">
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
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    GO
                                </button>
                            </div>
                        </div>

                      </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-auto">
              <ul class="sub-nav">
                  <li><a href=" {{ route('home') }} " class="main">Home</a></li>
                  <li><a href=" {{ route('pricing') }} " class="main">Pricing</a></li>
                  <li><a href=" {{ route('what-is-driveby') }} " class="sub">What is<br>DriveBy?</a></li>
                  <li><a href="  {{ route('what-is-lookfirst') }} " class="sub">What is<br>LookFirst?</a></li>
              </ul>
            </div>
        </div>
        @else 
            <br><br><br>
        @endguest
    </header>
  @yield('content')

