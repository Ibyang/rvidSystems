@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
@stop

@section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <section class="content-header">
    <h1>Agents</h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">
          <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
        </a>
      </li>
      <li>
          <a href="#">Users</a>
      </li>
      <li class="active">Agents</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="panel panel-primary" id="hidepanel1">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
              Add Agent
            </h3>
            <span class="pull-right">
              <i class="glyphicon glyphicon-chevron-up clickable"></i>
              </span>
          </div>
          <div class="panel-body">

            <form class="form-horizontal" method="POST" action="{{ route('agents.store') }}">
              {{ csrf_field() }}
                {{--<form class="form-horizontal" action="#" method="post">--}}
                <fieldset>

                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="firstname">First Name</label>
                      <div class="col-md-7">
                        <input type="text" name="firstname" class="form-control" id="inputFirstName" placeholder="First Name" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="firstname">Last Name</label>
                      <div class="col-md-7">
                        <input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="Last Name" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="email">Email</label>
                      <div class="col-md-7">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="password">Password</label>
                      <div class="col-md-7">
                        <input type="password" name="passwd" class="form-control" id="inputPassword" placeholder="Password" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="password_confirmation">Retype Password</label>
                      <div class="col-md-7">
                        <input type="password" name="passwd_confirmation" class="form-control" id="inputPassword2" placeholder="Retype Password">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="mobile">Mobile Number</label>
                      <div class="col-md-7">
                        <input type="text" name="mobile" class="form-control" id="inputMobile" placeholder="Mobile Number" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="group">Group</label>
                      <div class="col-md-7">
                        <input type="text" name="group" class="form-control" id="inputGroup" placeholder="Group" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="name_agency">Name of Agency</label>
                      <div class="col-md-7">
                        <input type="text" name="name_agency" class="form-control" id="inputNameAgency" placeholder="Name of Agency" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="role_title">Role / Title</label>
                      <div class="col-md-7">
                        <select name="role_title" class="form-control" >
                          @foreach($roles as $role)
                            <option value="{{ $role->role_title }} "> {{ $role->role_title }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="address">Address</label>
                      <div class="col-md-7">
                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="address">State</label>
                      <div class="col-md-7">
                        <select name="state" id="state" class="form-control" >
                          @foreach($states as $state)
                            <option value="{{ $state->state_code }} "> {{ $state->state_name }} </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="address">Suburb</label>
                      <div class="col-md-7">
                        <select name="suburb" class="form-control"></select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="address">Postal Code</label>
                      <div class="col-md-7">
                        <input type="text" name="postcode" class="form-control" id="postalCode" placeholder="Postal Code" >
                      </div>
                    </div>
                  </div>
                  <!-- Form actions -->
                  <div class="form-group">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>

          </div>
        </div>

      </div>
    </div>
    <!--row end-->
  </section>

@endsection

{{-- page level scripts --}}
@section('footer_scripts')

  <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
  <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
  <script src="{{ asset('assets/js/pages/form_examples.js') }}"></script>

  <script type="text/javascript">
      $(document).ready(function() {

          //for dynamic populating suburb dropdown when state is selected
          $('select[name="state"]').on('change', function() {
              var stateCode = $(this).val();
              if(stateCode) {
                  $.ajax({
                      url: '/agentAjax/' + stateCode,
                      type: "GET",
                      dataType: "json",
                      success:function(data) {
                          //console.log("the return data is ", data);
                          $('select[name="suburb"]').empty();
                          $.each(data, function(key, value) {
                              $('select[name="suburb"]').append('<option value="'+ value +'">'+ value +'</option>');
                          });
                      }
                  });
              }else{
                  $('select[name="suburb"]').empty();
              }
          });


          //for dynamic populating of postal code when suburb is selected
          $('select[name="suburb"]').on('change', function() {
              var suburbValue = $(this).val();
              var sCode = $('#state').val();
              console.log("the value of suburbValue is", suburbValue);
              console.log("the value of sCode is", sCode);
              if (suburbValue) {
                  $.ajax({
                      url: '/agentPostalAjax/' + sCode + '/' + suburbValue,
                      type: "GET",
                      dataType: "json",
                      success: function (data) {
                          // $('select[name="suburb"]').empty();
                          // $.each(data, function (key, value) {
                              $("#postalCode").val(data);
                              // $('select[name="suburb"]').append('<option value="' + key + '">' + value + '</option>');
                          // });
                      }
                  });
              } else {
                  //$('select[name="suburb"]').empty();
              }

          });

      });
  </script>

@stop