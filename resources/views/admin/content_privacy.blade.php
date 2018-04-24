@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" media="screen"/>
    <link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>

@stop

@section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
    <section class="content-header">
      <h1>Privacy</h1>
      <ol class="breadcrumb">
        <li>
          <a href="#">
            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
          </a>
        </li>
        <li>
          <a href="#">Content Management</a>
        </li>
        <li class="active">Privacy</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary" id="hidepanel1">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                Content Management - Privacy
              </h3>
              <span class="pull-right">
                  <i class="glyphicon glyphicon-chevron-up clickable"></i>
              </span>
            </div>
            <div class="panel-body">

                  <form class="form-horizontal" method="POST" action="{{ route('updateContent') }}">
                      {{ csrf_field() }}
                      {{--<input name="_method" type="hidden" value="PATCH">--}}
                      <input name="contentid" type="hidden" value="3">
                      <div class="text-left">

                          <section class="content paddingleft_right15">
                          {{--<div class="panel panel-danger">--}}
                          <!--main content-->
                              <div class="row">
                                  <!-- /.box -->
                                  <div class='box well well-sm' style="margin-top: 20px">
                                      <!-- /.box-header -->
                                      {{--<div class='box-body'>--}}
                                      <textarea rows="100" name="privacy" class="textarea editor-cls" placeholder="Place some text here">
                                          {{ $content->content_text != null ? $content->content_text : '' }}
                                      </textarea>
                                      {{--</div>--}}
                                      <input type="submit" style="text-align: center" value="Submit">
                                  </div>
                                  <!-- /.col-->
                              </div>
                          {{--</div>--}}
                          <!--main content ends-->
                          </section>

                      </div>
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

    <script src="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/editor2.js') }}" type="text/javascript"></script>

@stop