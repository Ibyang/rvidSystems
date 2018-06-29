 <div class="container register-form">
     {{--<form class="register-info" method="POST" action="{{ route('registerAgent.store') }}">--}}
     @if(isset($details))
         {{--<form class="register-info" method="POST" action="{{ route('registerAgent.update', $details->ID) }}">--}}
         <form class="register-info" method="POST" action="{{ route('processStep1') }}">
             <h4>Add Your Details</h4>
             {{ csrf_field() }}
             <input name="_method" type="hidden" value="PATCH">
             <div class="row">
                 <div class="col-sm">
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <input id="emailadd" type="email" class="form-control" name="email" value="{{ $details->email }}" required>
                         @if ($errors->has('email'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                         <input id="firstname" type="text" class="form-control" name="firstname" required autofocus value="{{ $details->firstname }}">
                         @if ($errors->has('firstname'))
                             <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                       </span>
                         @endif
                     </div>
                     <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                         <input id="lastname" type="text" class="form-control" name="lastname" required autofocus value="{{ $details->lastname }}">
                         @if ($errors->has('name'))
                             <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                         @endif
                     </div>
                     <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                         <input id="mobile" type="text" class="form-control" name="mobile" required autofocus value="{{ $details->mobile }}">
                         @if ($errors->has('mobile'))
                             <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                         @endif
                     </div>
                     <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                         <input id="address" type="text" class="form-control" name="address" required autofocus placeholder="Address 1" value="{{ $details->address }}">

                         @if ($errors->has('address'))
                             <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                         @endif
                     </div>
                     <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                         <input id="address2" type="text" class="form-control" name="address2" placeholder="Address 2" value="{{ $details->address2 }}">

                         @if ($errors->has('address2'))
                             <span class="help-block">
                                        <strong>{{ $errors->first('address2') }}</strong>
                                    </span>
                         @endif
                     </div>
                     <div class="row">
                         <div class="col-sm-5">
                             <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                 <select name="state" id="state" class="form-control" >
                                     <option value=""> -- Select State -- </option>
                                     @if($states)
                                         @foreach($states as $state)
                                             <option value="{{ $state->state_code }}" {{ $details->state === $state->state_code ? 'selected' : '' }}> {{ $state->state_name }} </option>
                                         @endforeach
                                     @endif
                                 </select>
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group{{ $errors->has('suburb') ? ' has-error' : '' }}">
                                 <select name="suburb" id="suburb" class="form-control">
                                     @if(isset($details['suburb']))
                                         <option value="{{ $details['suburb'] }}"> {{ $details['suburb'] }} </option>
                                         {{--@else--}}
                                         {{--<option value="">Please Select State</option>--}}
                                     @endif
                                 </select>
                             </div>
                         </div>
                         <div class="col-sm-3">
                             <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                                 <input id="postcode" type="text" class="form-control" name="postcode" required placeholder="Postcode" value="{{{ $details->postcode }}}">
                                 @if ($errors->has('postcode'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('postcode') }}</strong>
                                     </span>
                                 @endif
                             </div>
                         </div>
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
                         <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required value="" Placeholder="Repeat Password">
                     </div>
                     <h3>Agency Details</h3>
                     <div class="form-group{{ $errors->has('group') ? ' has-error' : '' }}">
                         {{--<input id="group" type="text" class="form-control" name="group" required value="{{ $details->group }}">--}}
                         <select name="group" id="grouplist" class="form-control">
                             <option value="">Select Group</option>
                             @foreach($groups as $grp)
                                 <option value="{{ $grp->group }}" {{ $details['group'] === $grp->group ? 'selected' : '' }}> {{ $grp->group }} </option>
                             @endforeach
                         </select>
                     </div>
                     <div class="form-group{{ $errors->has('name_agency') ? ' has-error' : '' }}">
                         {{--<input id="name_agency" type="text" class="form-control" name="name_agency" required value="{{ $details->name_agency }}">--}}
                         {{--<input list="name_agency" name="name_agency" class="form-control">--}}
                         {{--<datalist id="name_agency">--}}
                         <select name="name_agency" id="agencylist" class="form-control">
                             <option value="">Select Name of Agency</option>
                             @foreach($agencies as $agency)
                                 <option value="{{ $agency->name_agency }}" {{ $details['name_agency'] === $agency->name_agency ? 'selected' : '' }}> {{ $agency->name_agency }} </option>
                                 {{--<option value="{{ $agency->name_agency }}"> {{ $agency->name_agency }} </option>--}}
                             @endforeach
                         </datalist>
                         </select>
                         @if ($errors->has('name_agency'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('name_agency') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                         <select name="state" id="state" class="form-control" >
                             @foreach($states as $state)
                                 <option value="{{ $state->state_code }}" {{ $details->state === $state->state_code ? 'selected' : '' }}> {{ $state->state_name }} </option>
                             @endforeach
                         </select>
                         {{--<select name="state" class="form-control">--}}
                         {{--<option>state</option>--}}
                         {{--</select>--}}
                     </div>
                     <div class="form-group{{ $errors->has('suburb') ? ' has-error' : '' }}">
                         <select name="suburb" class="form-control">
                             @if(isset($details->suburb))
                                 <option value="{{ $details->suburb }}"> {{ $details->suburb }} </option>
                             @endif
                         </select>
                         {{--<select name="suburb" class="form-control"></select>--}}
                         {{--<select name="suburb" class="form-control">--}}
                         {{--<option>Suburb</option>--}}
                         {{----}}
                     </div>

                     <input type="hidden" id="suburbValue" name="suburbValue" value=" {{ $details->suburb }} ">
                     <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                     <input type="hidden" name="modeAction" id="modeAction">
                     <input type="hidden" name="agentID" id="agentID">

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

     @else

         <form class="register-info" method="POST" action="{{ route('processStep1') }}">
             <h4>Add Your Details</h4>
             {{ csrf_field() }}
             <div class="row">
                 <div class="col-sm">
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         @if(!empty($email) || isset($email))
                             <input id="emailadd" type="email" class="form-control" name="email" value="{{ $email }}" required>
                         @else
                             <input id="emailadd" type="email" class="form-control" name="email" placeholder="Email" value="{{{ $agent['email'] or old('email') }}}" required>
                         @endif

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
                         <input id="address" type="text" class="form-control" name="address" placeholder="Address 1" required autofocus value="{{{ $agent['address'] or old('address') }}}">
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                     </div>
                     <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                         <input id="address2" type="text" class="form-control" name="address2" placeholder="Address 2" value="{{{ $agent['address2'] or old('address2') }}}">

                         @if ($errors->has('address2'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('address2') }}</strong>
                             </span>
                         @endif
                     </div>
                     <div class="row">
                         <div class="col-sm-5">
                             <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                 <select name="state" id="state" class="form-control" >
                                     <option value=""> -- Select State -- </option>
                                     @if($states)
                                         @foreach($states as $state)
                                             <option value="{{ $state->state_code }}" {{{ (isset($agent['state']) && $agent['state'] == $state->state_code) ? "selected=\"selected\"" : "" }}}> {{ $state->state_name }} </option>
                                         @endforeach
                                     @endif
                                 </select>
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group{{ $errors->has('suburb') ? ' has-error' : '' }}">
                                 <select name="suburb" id="suburb" class="form-control">
                                     @if(isset($agent['suburb']))
                                         <option value="{{ $agent['suburb'] }}"> {{ $agent['suburb'] }} </option>
                                     {{--@else--}}
                                         {{--<option value="">Please Select State</option>--}}
                                     @endif
                                 </select>
                             </div>
                         </div>
                         <div class="col-sm-3">
                             <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                                 <input id="postcode" type="text" class="form-control" name="postcode" required autofocus placeholder="Postcode" value="{{{ $agent['postcode'] or old('postcode') }}}">

                                 @if ($errors->has('postcode'))
                                     <span class="help-block">
                                 <strong>{{ $errors->first('postcode') }}</strong>
                             </span>
                                 @endif
                             </div>
                         </div>
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
                         {{--<input list="group-choice" name="group">--}}
                         {{--<datalist id="group-choice" class="form-control">--}}
                             {{--@foreach($groups as $grp)--}}
                                 {{--<option value="{{ $grp->group }}" {{{ (isset($agent['group']) && $agent['group'] == $grp->group) ? "selected=\"selected\"" : "" }}}> {{ $grp->group }}</option>--}}
                             {{--@endforeach--}}
                         {{--</datalist>--}}

                         {{--<select name="group" class="form-control">--}}
                             {{--<option value="">-- Select Group --</option>--}}
                             {{--@foreach($groups as $grp)--}}
                                 {{--<option value="{{ $grp->group }}" {{{ (isset($agent['group']) && $agent['group'] == $grp->group) ? "selected=\"selected\"" : "" }}}> {{ $grp->group }}</option>--}}
                             {{--@endforeach--}}
                         {{--</select>--}}

                         {{--<input type="text" id="group" name="group" class="form-control">--}}
                         <select name="group" id="grouplist" class="form-control">
                             <option value=""> -- Select Group -- </option>
                             @foreach($groups as $grp)
                                <option value="{{ $grp->group }}" {{{ (isset($agent['group']) && $agent['group'] == $grp->group) ? "selected=\"selected\"" : "" }}}> {{ $grp->group }}</option>
                             @endforeach
                         </select>

                     </div>
                     <div class="form-group{{ $errors->has('name_agency') ? ' has-error' : '' }}">
                         {{--<input id="name_agency" type="text" class="form-control" name="name_agency" required autofocus placeholder="Name Of Agency">--}}
                         <select name="name_agency" id="agencylist" class="form-control">
                             <option value="">-- Name of Agency --</option>
                             @foreach($agencies as $agency)
                                 <option value="{{ $agency['name_agency'] }}" {{{ (isset($agent['name_agency']) && $agent['name_agency'] == $agency->name_agency) ? "selected=\"selected\"" : "" }}}> {{ $agency->name_agency }} </option>
                             @endforeach
                         </select>
                     </div>
                     <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                         <select name="state" id="state" class="form-control" >
                             <option value=""> -- Select State -- </option>
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
                             {{--@else--}}
                                 {{--<option value="">Please Select State</option>--}}
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

     @endif
 </div>

