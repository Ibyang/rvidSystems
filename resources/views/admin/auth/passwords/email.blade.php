<!DOCTYPE html>
<html>

<head>
    <title>REVid Systems | Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{asset('assets/css/pages/login2.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendors/iCheck/css/minimal/blue.css')}}" rel="stylesheet" />
    <!-- styles of the page ends-->
</head>

<body>
<div class="container">
    <div class="row vertical-offset-100">
        <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Reset Password</h3>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group input-group">
                            <div class="input-group-addon">
                                <i class="livicon" data-name="mail" data-size="18" data-c="#484848" data-hc="#484848" data-loop="true"></i>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Send Password Reset Link</button>
                        <div class="form-group">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js-->
<script src="{{asset('assets/js/TweenLite.min.js')}}"></script>
<script src="{{asset('assets/vendors/iCheck/js/icheck.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/pages/login2.js')}}" type="text/javascript"></script>
<!-- end of page level js-->
</body>
</html>
