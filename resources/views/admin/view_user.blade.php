@extends('admin.layouts.admin')@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/vendors/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

  <section class="content-header">
    <!--section starts-->
    <h1>User Profile</h1>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">
          <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="#">User</a>
      </li>
      <li class="active">User Profile</li>
    </ol>
  </section>
  <!--section ends-->
  <section class="content">
    <div class="row">
      <div class="col-lg-12">
        <ul class="nav  nav-tabs ">
          <li class="active">
            <a href="#tab1" data-toggle="tab">
              <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i> User Profile</a>
          </li>
          <li>
            <a href="#tab2" data-toggle="tab">
              <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i> Change Password</a>
          </li>
        </ul>
        <div class="tab-content mar-top">

          <div id="tab1" class="tab-pane fade active in">
            <div class="row">
              <div class="col-lg-12">
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                      User Profile
                    </h3>
                  </div>

                  <form class="form-horizontal" method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="panel-body">
                      <div class="col-md-4">
                        <div class="text-center">
                          <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-file">
                              @if(!empty($user->profile_pic))
                                    <img src="uploads/profile_pics/{{ $user->profile_pic }}" width="200" class="img-responsive" height="150" alt="riot">
                              @else
                                    <img src="{{asset('assets/img/authors/avatar_placeholder_small.png')}}" width="200" class="img-responsive" height="150" alt="riot">
                              @endif
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-max">
                            </div>
                            <div>
                                  <span class="btn btn-default btn-file ">
                                  <span class="fileinput-new">Select image</span>
                                  <span class="fileinput-exists">Change</span>
                                  <input type="file" name="file_image">
                                  </span>
                              <!--a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a-->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="panel-body">
                          <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="users">
                              <tr>
                                <td>Role</td>
                                <td>{{ $user->role }}
                                  {{--<a href="#" data-pk="1" class="editable" data-title="Edit User Name">{{ $user->name }}</a>--}}
                                </td>
                              </tr>
                              <tr>
                                <td>User Name</td>
                                <td>
                                  <input type="text" name="name" class="form-control" id="inputUserName" value="{{ $user->name }}" required>
                                  {{--<a href="#" data-pk="1" class="editable" data-title="Edit User Name">{{ $user->name }}</a>--}}
                                </td>
                              </tr>
                              <tr>
                                <td>E-mail</td>
                                <td>
                                  <input type="text" name="email" class="form-control" id="inputUserName" value="{{ $user->email }}" required>
                                  {{--<a href="#" data-pk="1" class="editable" data-title="Edit E-mail">{{ $user->email }}</a>--}}
                                </td>
                              </tr>
                              <tr>
                                <td>Phone Number</td>
                                <td>
                                  <input type="text" name="phone" class="form-control" id="inputUserName" value="{{ $user->phone }}" required>
                                  {{--<a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">{{ $user->phone }}</a>--}}
                                </td>
                              </tr>
                              <tr>
                                <td>Address</td>
                                <td>
                                  <input type="text" name="address" class="form-control" id="inputUserName" value="{{ $user->address }}" required>
                                  {{--<a href="#" data-pk="1" class="editable" data-title="Edit Address">{{ $user->address }}</a>--}}
                                </td>
                              </tr>
                            </table>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-3 col-md-9">
                              <button type="submit" class="btn btn-primary">Update</button>&nbsp;
                              <!--input type="reset" class="btn btn-default hidden-xs" value="Reset"-->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> <!-- panel body -->
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div id="tab2" class="tab-pane fade">
            <div class="row">
              <div class="col-md-12 pd-top">
                <form action="#" class="form-horizontal">
                  <div class="form-body">
                    <div class="form-group">
                      <label for="inputpassword" class="col-md-3 control-label">
                        Password
                        <span class='require'>*</span>
                      </label>
                      <div class="col-md-9">
                        <div class="input-group">
                          <span class="input-group-addon">
                              <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                          </span>
                          <input type="password" name="password" id="inputpassword" class="form-control" value="{{ $user->password }}" />
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputnumber" class="col-md-3 control-label">
                        Confirm Password
                        <span class='require'>*</span>
                      </label>
                      <div class="col-md-9">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                          </span>
                          <input type="password" name="password_confirmation" id="inputpasswordconfirmation" class="form-control" value="{{ $user->password }}" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <div class="col-md-offset-3 col-md-9">
                      <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
                      <input type="reset" class="btn btn-default hidden-xs" value="Reset">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

  <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
  <script src="{{ asset('assets/vendors/jquery-mockjax/js/jquery.mockjax.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/pages/form_examples.js') }}"></script>

@stop