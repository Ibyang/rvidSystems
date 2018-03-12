@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
@stop

@section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <section class="content-header">
    <h1>User List</h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">
          <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
        </a>
      </li>
      <li>
          <a href="#">Users</a>
      </li>
      <li class="active">Production</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="panel panel-primary" id="hidepanel1">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
              Add User
            </h3>
            <span class="pull-right">
              <i class="glyphicon glyphicon-chevron-up clickable"></i>
              </span>
          </div>
          <div class="panel-body">

            <form class="form-horizontal" method="POST" action="{{ route('production.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
                {{--<form class="form-horizontal" action="#" method="post">--}}
                <fieldset>

                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="username">Username</label>
                      <div class="col-md-7">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" required>
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
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="password">Retype Password</label>
                      <div class="col-md-7">
                        <input type="password" name="password_confirmation" class="form-control" id="inputPassword" placeholder="Retype Password" required>
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
                      <label class="col-md-3 control-label" for="phone">Phone Number</label>
                      <div class="col-md-7">
                        <input type="text" name="phone" class="form-control" id="inputMobile" placeholder="Phone Number" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="status">Status</label>
                      <div class="col-md-7">
                        <select name="status" class="form-control">
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="role">Role</label>
                      <div class="col-md-7">
                        <select name="role" class="form-control">
                          <option value="Administrator">Administrator</option>
                          <option value="Production">Production</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Profile Picture Upload</label>
                    <div class="col-md-7">
                      <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput">
                          <i class="glyphicon glyphicon-file fileinput-exists"></i>
                          <span class="fileinput-filename"></span>
                        </div>
                        <span class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new">Select file</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="file_image"></span>
                        {{--<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>--}}
                      </div>
                    </div>
                  </div>

                  <!--div class="form-group">
                    <label for="inputPassword2" class="col-sm-2 control-label">Suburb</label>

                    <div class="col-sm-10">
                      <input type="text" name="retypepasswd" class="form-control" id="inputPassword2" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword2" class="col-sm-2 control-label">State</label>

                    <div class="col-sm-10">
                      <input type="text" name="retypepasswd" class="form-control" id="inputPassword2" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword2" class="col-sm-2 control-label">PostCode</label>

                    <div class="col-sm-10">
                      <input type="text" name="postcode" class="form-control" id="inputPassword2" placeholder="First Name">
                    </div>
                  </div-->

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

@stop