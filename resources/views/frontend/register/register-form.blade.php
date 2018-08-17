<div class="container register-form border-bot3">
    @if(isset($details) && $details != null)
        <form class="register-info" id="frmProcess1" method="POST" action="{{ route('processStep1') }}">
            <h3 class="color-000">Add Your Details</h3>
             {{ csrf_field() }}
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-sm">
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <input id="email" type="email" class="form-control" name="email" value="{{ $details->email }}" placeholder="Email" required>
                         @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                      <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">      
                          <input id="name" type="text" class="form-control" name="firstname" required autofocus placeholder="First Name" value="{{ $details->firstname }}">
                          @if ($errors->has('firstname'))
                               <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                               </span>
                          @endif
                     </div>
                     <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}"> 
                          <input id="name" type="text" class="form-control" name="lastname" required autofocus placeholder="Last Name" value="{{ $details->lastname }}">
                          @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                          @endif
                    </div>
                    
                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="mobile" required autofocus placeholder="Mobile Telephone" value="{{ $details->mobile }}">
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                         <input id="name" type="text" class="form-control" name="address"  required autofocus placeholder="Address 1" value="{{ $details->address }}">
                    </div>
                    <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                         <input id="name" type="text" class="form-control" name="address2" required autofocus placeholder="Address 2" value="{{ $details->address2 }}">
                    </div>
                    <div class="row">
                                 <div class="col-sm l-g-m"><input type="text" class="form-control" name="state" placeholder="Suburb" required value="{{ $details->suburb }}"></div>
                                 <div class="col-sm l-g-m"><input type="text" class="form-control" name="suburb" placeholder="State" required value="{{ $details->state }}"></div>
                                 <div class="col-sm l-g-m"><input type="text" class="form-control" name="postcode" placeholder="Post Code" required value="{{ $details->postcode }}"></div>
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
                    <div class="form-group">
                        <h3 class="m-0 py-2 font-t-ms">Agency Details</h3>
                    </div>
                    <div class="form-group{{ $errors->has('group') ? ' has-error' : '' }}">     
                        <select name="group" id="grouplist" class="form-control">
                            <!-- <option>Group</option> -->
                            <option value="">Select Group</option>
                             @foreach($groups as $grp)
                                 <option value="{{ $grp->group }}" {{ $details['group'] === $grp->group ? 'selected' : '' }}> {{ $grp->group }} </option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('name_agency') ? ' has-error' : '' }}">
                        <!-- <input id="name" type="text" class="form-control" name="agency" required autofocus placeholder="Name Of Agency"> -->
                        <select name="name_agency" id="agencylist" class="form-control">
                             <option value="">Select Name of Agency</option>
                             @foreach($agencies as $agency)
                                 <option value="{{ $agency->name_agency }}" {{ $details['name_agency'] === $agency->name_agency ? 'selected' : '' }}> {{ $agency->name_agency }} </option>
                                 {{--<option value="{{ $agency->name_agency }}"> {{ $agency->name_agency }} </option>--}}
                             @endforeach
                         </datalist>
                         </select>
                    </div>
                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                        <select name="state" id="state" class="form-control" >
                             @foreach($states as $state)
                                 <option value="{{ $state->state_code }}" {{ $details->state === $state->state_code ? 'selected' : '' }}> {{ $state->state_name }} </option>
                             @endforeach
                         </select>
                    </div>
                    <div class="form-group{{ $errors->has('suburb') ? ' has-error' : '' }}">
                        <!-- <select name="suburb" class="form-control">
                                <option>Suburb</option>
                        </select> -->
                        <select name="suburb" class="form-control">
                             @if(isset($details->suburb))
                                 <option value="{{ $details->suburb }}"> {{ $details->suburb }} </option>
                             @endif
                         </select>
                    </div>
                </div>
            </div>
        
            @if (Request::segment(1) != 'pricing') 
                @include('frontend.pages.pricing-data')
            @endif    

            <input type="hidden" id="suburbValue" name="suburbValue" value=" {{ $details->suburb }} ">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <input type="hidden" name="modeAction" id="modeAction">
            <input type="hidden" name="agentID" id="agentID">
            <input type="hidden" name="plantype" id="plantype">
            
            <div class="form-group">
                        <div class="text-right my-4">
                                <button type="button" class="btn btn-primary font-weight-bold join-step-next" id="btnSubmit">
                                    NEXT: Your Template <i class="arrow-right"></i>
                                </button>
                        </div>
            </div> 
        </form>

    @else
    
        <form class="register-info" id="frmProcess1" method="POST" action="{{ route('processStep1') }}">
            <h3 class="color-000">Add Your Detail</h3>
             {{ csrf_field() }}
            <div class="row">
                <div class="col-sm">
                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <!-- <input id="email" type="email" class="form-control" name="email" placeholder="Email" required> -->
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
                          <input id="name" type="text" class="form-control" name="firstname" value="{{{ $agent['firstname'] or old('firstname') }}}" required autofocus placeholder="First Name">
                          @if ($errors->has('firstname'))
                               <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                               </span>
                          @endif
                     </div>
                     <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}"> 
                          <input id="name" type="text" class="form-control" name="lastname" value="{{{ $agent['lastname'] or old('lastname') }}}" required autofocus placeholder="Last Name">
                          @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                          @endif
                    </div>
                    
                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="mobile" value="{{{ $agent['mobile'] or old('mobile') }}}" required autofocus placeholder="Mobile Telephone">
                        @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                         <input id="name" type="text" class="form-control" name="address" placeholder="Address 1" required autofocus value="{{{ $agent['address'] or old('address') }}}">
                    </div>
                    <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                         <input id="name" type="text" class="form-control" name="address2" placeholder="Address 2" value="{{{ $agent['address2'] or old('address2') }}}">
                    </div>
                    <div class="row">
                                 <div class="col-sm l-g-m"><input type="text" class="form-control" name="suburb" placeholder="Suburb" value="{{{ $agent['suburb'] or old('suburb') }}}" required></div>
                                 <div class="col-sm l-g-m"><input type="text" class="form-control" name="state" placeholder="State" value="{{{ $agent['state'] or old('state') }}}" required></div>
                                 <div class="col-sm l-g-m"><input type="text" class="form-control" name="postcode" placeholder="Post Code" value="{{{ $agent['postcode'] or old('postcode') }}}" required></div>
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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" Placeholder="Repeat Password" value="{{{ $agent['agent_password'] or old('password_confirmation') }}}" required>
                    </div>
                    <div class="form-group">
                        <h3 class="m-0 py-2  font-t-ms">Agency Details</h3>
                    </div>
                    <div class="form-group{{ $errors->has('group') ? ' has-error' : '' }}">     
                        <!-- <select name="group" class="form-control">
                                <option>Group</option>
                        </select> -->
                        <select name="group" id="grouplist" class="form-control">
                             <option value=""> -- Select Group -- </option>
                             @foreach($groups as $grp)
                                <option value="{{ $grp->group }}" {{{ (isset($agent['group']) && $agent['group'] == $grp->group) ? "selected=\"selected\"" : "" }}}> {{ $grp->group }}</option>
                             @endforeach
                         </select>
                    </div>
                    <div class="form-group{{ $errors->has('name_agency') ? ' has-error' : '' }}">
                        <!-- <input id="name" type="text" class="form-control" name="agency" required autofocus placeholder="Name Of Agency"> -->
                        <select name="name_agency" id="agencylist" class="form-control">
                             <option value="">-- Name of Agency --</option>
                             @foreach($agencies as $agency)
                                 <option value="{{ $agency['name_agency'] }}" {{{ (isset($agent['name_agency']) && $agent['name_agency'] == $agency->name_agency) ? "selected=\"selected\"" : "" }}}> {{ $agency->name_agency }} </option>
                             @endforeach
                         </select>
                        @if ($errors->has('name_agency'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                        <!-- <select name="state" class="form-control">
                                <option>State</option>
                        </select> -->
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
                        <!-- <select name="suburb" class="form-control">
                                <option>Suburb</option>
                        </select> -->
                        <select name="suburb" id="suburb" class="form-control">
                             @if(isset($agent['suburb']))
                                 <option value="{{ $agent['suburb'] }}"> {{ $agent['suburb'] }} </option>
                             @endif
                         </select>
                    </div>
                </div>
            </div>
            
            @if (Request::segment(1) != 'pricing') 
                @include('frontend.pages.pricing-data')
            @endif 

            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
            <input type="hidden" name="agentID" id="agentID">
            <input type="hidden" name="plantype" id="plantype">
            
            <div class="form-group">
                        <div class="text-right my-4">
                                <button type="button" class="btn btn-primary font-weight-bold join-step-next" id="btnSubmit">
                                    NEXT: Your Template <i class="arrow-right"></i>
                                </button>
                        </div>
            </div> 
        </form>

    @endif
            
</div>



