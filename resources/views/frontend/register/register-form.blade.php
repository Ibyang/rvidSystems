 <div class="container register-form">
        @if(!empty($details))
            <form class="form-horizontal" method="POST" action="{{ route('registerAgent.update', $details->ID) }}">
             <h3>Your Details</h3>
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
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                  <input id="firstname" type="text" class="form-control" name="firstname" required autofocus value="{{ $details->firstname }}">
                                  @if ($errors->has('name'))
                                       <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                       </span>
                                  @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                  <input id="lastname" type="text" class="form-control" name="lastname" required autofocus value="{{ $details->lastname }}">
                                  @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                  @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="mobile" type="text" class="form-control" name="mobile" required autofocus value="{{ $details->mobile }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <textarea id="address" type="text" class="form-control" name="address" required autofocus>{{ $details->address }}</textarea>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
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
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required value="" Placeholder="Repeat Password">
                            </div>
                            <h3>Agency Details</h3>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {{--<input id="group" type="text" class="form-control" name="group" required value="{{ $details->group }}">--}}
                                <select name="group" class="form-control">
                                    @foreach($groups as $grp)
                                        <option value="{{ $grp->group }}" {{ $details->group === $grp->group ? 'selected' : '' }}> {{ $grp->group }} </option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                {{--<input id="name_agency" type="text" class="form-control" name="name_agency" required value="{{ $details->name_agency }}">--}}
                                {{--<input list="name_agency" name="name_agency" class="form-control">--}}
                                  {{--<datalist id="name_agency">--}}
                                <select name="name_agency" class="form-control">
                                    @foreach($agencies as $agency)
                                        <option value="{{ $agency->name_agency }}" {{ $details->name_agency === $agency->name_agency ? 'selected' : '' }}> {{ $agency->name_agency }} </option>
                                    @endforeach
                                  {{--</datalist>--}}
                                </select>
                                @if ($errors->has('name'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('name_agency') }}</strong>
                                        </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <select name="state" id="state" class="form-control" >
                                    @foreach($states as $state)
                                        <option value="{{ $state->state_code }}" {{ $details->state === $state->state_code ? 'selected' : '' }}> {{ $state->state_name }} </option>
                                    @endforeach
                                </select>
                                {{--<select name="state" class="form-control">--}}
                                        {{--<option>state</option>--}}
                                {{--</select>--}}
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <select name="suburb" class="form-control"></select>
                                {{--<select name="suburb" class="form-control">--}}
                                        {{--<option>Suburb</option>--}}
                                {{--</select>--}}
                        </div>

                        <div class="form-group">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary font-weight-bold">
                                        NEXT: Your Template <i class="arrow-right"></i>
                                    </button>
                                </div>
                        </div>
                        <input type="hidden" id="suburbValue" name="suburbValue" value=" {{ $details->suburb }} ">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                        <input type="hidden" name="modeAction" id="modeAction">
                        <input type="hidden" name="agentID" id="agentID">

                </div>
            </div>
            </form>

        @else
            <form class="form-horizontal" method="POST" action="{{ route('registerAgent.store') }}">
                <h3>Your Details</h3>
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            @if(!empty($email) || isset($email))
                                <input id="emailadd" type="email" class="form-control" name="email" value="{{ $email }}" required>
                            @else
                                <input id="emailadd" type="email" class="form-control" name="email" placeholder="Email" required>
                            @endif
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="firstname" type="text" class="form-control" name="firstname" required autofocus placeholder="First Name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                   </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="lastname" type="text" class="form-control" name="lastname" required autofocus placeholder="Last Name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="mobile" type="text" class="form-control" name="mobile" required autofocus placeholder="Mobile Telephone">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <textarea id="address" type="text" class="form-control" name="address" placeholder="Address" required autofocus></textarea>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
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
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" Placeholder="Repeat Password" required>
                        </div>
                        <h3>Agency Details</h3>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{--<input id="group" type="text" class="form-control" name="group" required autofocus placeholder="Group">--}}
                            <select name="group" class="form-control">
                                @foreach($groups as $grp)
                                    <option value="{{ $grp->group }}"> {{ $grp->group }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{--<input id="name_agency" type="text" class="form-control" name="name_agency" required autofocus placeholder="Name Of Agency">--}}
                            <select name="name_agency" class="form-control">
                                @foreach($agencies as $agency)
                                    <option value="{{ $agency->name_agency }}"> {{ $agency->name_agency }} </option>
                                @endforeach
                            </select>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <select name="state" id="state" class="form-control" >
                                @if($states)
                                    @foreach($states as $state)
                                        <option value="{{ $state->state_code }} "> {{ $state->state_name }} </option>
                                    @endforeach
                                @endif

                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <select name="suburb" id="suburb" class="form-control"></select>
                        </div>

                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                        <input type="hidden" name="modeAction" id="modeAction">
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

