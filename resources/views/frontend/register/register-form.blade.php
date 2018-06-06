 <div class="container register-form">
     {{--<form class="register-info" method="POST" action="{{ route('registerAgent.store') }}">--}}
     <form class="register-info" method="POST" action="{{ route('processStep1') }}">
         <h4>Add Your Details</h4>
         {{ csrf_field() }}
         <div class="row">
             <div class="col-sm">
                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     {{--@if(!empty($email) || isset($email))--}}
                         {{--<input id="emailadd" type="email" class="form-control" name="email" value="{{ $email }}" required>--}}
                     {{--@else--}}
                         {{--<input id="emailadd" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>--}}
                     {{--@endif--}}
                     <input id="emailadd" type="email" class="form-control" name="email" placeholder="Email" value="{{{ $agent['email'] or old('email') }}}" required>
                     @if ($errors->has('email'))
                         <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                     @endif
                 </div>
                 <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                     <input id="firstname" type="text" class="form-control" name="firstname" value="{{{ $agent['firstname'] or old('firstname') }}}" required autofocus placeholder="First Name">
                        @if ($errors->has('firstname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                 </div>
                 <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                     <input id="lastname" type="text" class="form-control" name="lastname" value="{{{ $agent['lastname'] or old('lastname') }}}" required autofocus placeholder="Last Name">
                        @if ($errors->has('lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                 </div>
                 <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                     <input id="mobile" type="text" class="form-control" name="mobile" value="{{{ $agent['mobile'] or old('mobile') }}}" required autofocus placeholder="Mobile Telephone">
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                 </div>
                 <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                     <textarea id="address" type="text" class="form-control" name="address" placeholder="Address" required autofocus>{{{ $agent['address'] or old('address') }}}</textarea>
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                 </div>
             </div>
             <div class="col-sm">
                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <input id="password" type="password" class="form-control" name="password" Placeholder="Password" value="{{{ $agent['agent_password'] or old('password') }}}" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                 </span>
                            @endif
                 </div>
                 <div class="form-group">
                     <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" Placeholder="Repeat Password" value="{{{ $agent['agent_password'] or old('password_confirmation') }}}" required>
                 </div>
                 <h3>Agency Details</h3>
                 <div class="form-group{{ $errors->has('group') ? ' has-error' : '' }}">
                     {{--<input id="group" type="text" class="form-control" name="group" required autofocus placeholder="Group">--}}
                     <select name="group" class="form-control">
                         @foreach($groups as $grp)
                             <option value="{{ $grp->group }}" {{{ (isset($agent['group']) && $agent['group'] == $grp->group) ? "selected=\"selected\"" : "" }}}> {{ $grp->group }}</option>
                         @endforeach
                     </select>
                 </div>
                 <div class="form-group{{ $errors->has('name_agency') ? ' has-error' : '' }}">
                     {{--<input id="name_agency" type="text" class="form-control" name="name_agency" required autofocus placeholder="Name Of Agency">--}}
                     <select name="name_agency" class="form-control">
                         @foreach($agencies as $agency)
                             <option value="{{ $agency['name_agency'] }}" {{{ (isset($agent['name_agency']) && $agent['name_agency'] == $agency->name_agency) ? "selected=\"selected\"" : "" }}}> {{ $agency->name_agency }} </option>
                         @endforeach
                     </select>
                 </div>
                 <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                     <select name="state" id="state" class="form-control" >
                         @if($states)
                             @foreach($states as $state)
                                 <option value="{{ $state->state_code }}" {{{ (isset($agent['state']) && $agent['state'] == $state->state_code) ? "selected=\"selected\"" : "" }}}> {{ $state->state_name }} </option>
                             @endforeach
                         @endif
                     </select>
                 </div>
                 <div class="form-group{{ $errors->has('suburb') ? ' has-error' : '' }}">
                     <select name="suburb" id="suburb" class="form-control">
                         @if(isset($agent['suburb']))
                             <option value="{{ $agent['suburb'] }}"> {{ $agent['suburb'] }} </option>
                         @else
                             <option value="{{ old('suburb') }}">{{ old('suburb') }}</option>
                         @endif
                     </select>
                 </div>

                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                 <input type="hidden" name="agentID" id="agentID">
                 <input type="hidden" name="subscription" id="subscription">

                 <div class="form-group">
                     <div class="text-right">
                         <button type="submit" class="btn btn-primary font-weight-bold">
                             NEXT: Your Template <i class="arrow-right"></i>
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </form>
 </div>

