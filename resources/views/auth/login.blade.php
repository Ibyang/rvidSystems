@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm-7 align-self-center">
                <div class="border-bot-top mt-2">
                    <h5 class="color-6600cc"><b>Login or <br>Let’s Get Started! Step 1</b></h5>
                    <p>Existing users who have already set-up and are ready to go please <b>LOGIN</b>.
                    Otherwise, Get Started Today! See <b>STEP 1</b> below and set-up your details
                    to order your Video.</p>
                </div>
            </div>
            <div class="col-sm">
                    <form class="frontpage-login h-col-1 mt-2" method="POST" action="{{ route('login') }}">
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
<<<<<<< HEAD
                                    <button type="submit" class="btn btn-primary bg-009900">GO</button>
=======
                                    <button type="submit" class="btn btn-primary">GO</button>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
                            </div>
                </form>
            </div>
        </div>
     
        @include('frontend.register.register-join-info')
        
        @include('frontend.register.register-info')
        
        @include('frontend.register.register-form')
        
    </div>
        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')

@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/js/pricing-register.js') }}" type="text/javascript"></script>

@stop
