<div class="bg-eae">
<div class="container register-form">
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
         <h3>Your Details</h3>
         {{ csrf_field() }}
        <div class="row">
            @if(!empty($details))
                <div class="col-sm">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" name="email" value="{{ $details->email }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <input id="name" type="text" class="form-control" name="firstname" required autofocus value="{{ $details->firstname }}">
                          @if ($errors->has('name'))
                               <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                               </span>
                          @endif
                     </div>
                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <input id="name" type="text" class="form-control" name="lastname" required autofocus value="{{ $details->lastname }}">
                          @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                          @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="mobile" required autofocus value="{{ $details->mobile }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea id="name" type="text" class="form-control" name="mobile" required autofocus>{{ $details->address }}</textarea>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" required value="" Placeholder="Password">
                        @if ($errors->has('password'))
                             <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                             </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required value="" Placeholder="Repeat Password">
                    </div>
                    <h3>Agency Details</h3>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <select name="group" class="form-control">
                                <option>group</option>
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="agency" required autofocus value="">
                        @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <select name="state" class="form-control">
                                <option>state</option>
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <select name="suburb" class="form-control">
                                <option>Suburb</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">
                                NEXT: Your Template
                            </button>
                        </div>
                    </div>

                </div>
            @else
                <div class="col-sm">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        @if(!empty($email) || isset($email))
                            <input id="email" type="email" class="form-control" name="email" value="{{ $email }}" required>
                        @else
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
                        @endif
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="firstname" required autofocus placeholder="First Name">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                               </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="lastname" required autofocus placeholder="Last Name">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="mobile" required autofocus placeholder="Mobile Telephone">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <textarea id="name" type="text" class="form-control" name="mobile" placeholder="Address" required autofocus></textarea>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" name="password" Placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                             </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" Placeholder="Repeat Password" required>
                    </div>
                    <h3>Agency Details</h3>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <select name="group" class="form-control">
                            <option>group</option>
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="agency" required autofocus placeholder="Name Of Agency">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <select name="state" class="form-control">
                            <option>state</option>
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <select name="suburb" class="form-control">
                            <option>Suburb</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">
                                NEXT: Your Template
                            </button>
                        </div>
                    </div>

                </div>

            @endif


        </div>
          
    </form>
    
</div>
</div>
