@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
@stop

@section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
    <section class="content-header">
      <h1>Social Media Links</h1>
      <ol class="breadcrumb">
        <li>
          <a href="#">
            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
          </a>
        </li>
        <li>
          <a href="#">Content Management</a>
        </li>
        <li class="active">Social Media Links</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary" id="hidepanel1">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                Social Media Links
              </h3>
              <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up clickable"></i>
              </span>
            </div>
            <div class="panel-body">

              @foreach($socials as $social)
                <form class="form-horizontal" method="POST" action="{{ route('socialmedia.update', 1) }}">
              {{--<form class="form-horizontal" action="#" method="post">--}}
                <fieldset>
                  <!-- Name input-->
                  <!-- Facebook input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="name">Facebook</label>
                    <div class="col-md-7">
                      <input type="text" name="facebook" value="{{ $social->facebook }}" class="form-control" id="name" placeholder="Facebook">
                    </div>
                  </div>
                  <!-- Twitter input-->
                  <div class="form-group">
                      <label class="col-md-3 control-label" for="email">Twitter</label>
                      <div class="col-md-7">
                        <input type="text" name="twitter" value="{{ $social->twitter }}" class="form-control" id="name" placeholder="Twitter">
                      </div>
                  </div>
                  <!-- LinkedIn input -->
                  <div class="form-group">
                        <label class="col-md-3 control-label" for="message">LinkedIn</label>
                        <div class="col-md-7">
                          <input type="text" name="linkedin" value="{{ $social->linkedin }}" class="form-control" id="inputLinkedIn" placeholder="LinkedIn">
                        </div>
                  </div>
                  <!-- YouTube input -->
                  <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Youtube</label>
                        <div class="col-md-7">
                          <input type="text" name="youtube" value="{{ $social->youtube }}" class="form-control" id="inputYoutube" placeholder="Youtube">
                        </div>
                  </div>
                  <!-- Pinterest input -->
                  <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Pinterest</label>
                        <div class="col-md-7">
                          <input type="text" name="pinterest" value="{{ $social->pinterest }}" class="form-control" id="inputPinterest" placeholder="Pinterest">
                        </div>
                  </div>
                  <!-- GooglePlus input -->
                  <div class="form-group">
                        <label class="col-md-3 control-label" for="message">GooglePlus</label>
                        <div class="col-md-7">
                          <input type="text" name="googleplus" value="{{ $social->googleplus }}" class="form-control" id="inputGooglePlus" placeholder="GooglePlus">
                        </div>
                  </div>
                  <!-- Form actions -->
                  <div class="form-group">
                    <div class="col-md-12 text-right">
                      <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
             @endforeach

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