@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" media="screen"/>
  <link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>

@stop

@section('content')

  <section class="content-header">
    <!--section starts-->
    <h1>Content Management</h1>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">
          <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="#">Content Management</a>
      </li>
      <li class="active">Content Pages</li>
    </ol>
  </section>
  <!--section ends-->
  <section class="content">
      <div class="row">
          <div class="col-lg-12">
              <ul class="nav  nav-tabs ">
                  <li class="active">
                      <a href="#tab1" data-toggle="tab">
                          <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i> Content Pages</a>
                  </li>
                  <li>
                      <a href="#tab2" data-toggle="tab">
                          <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i> Terms and Conditions </a>
                  </li>
              </ul>
              <div class="tab-content mar-top">

                  <div id="tab1" class="tab-pane fade active in">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="panel">
                                  <div class="panel-heading">
                                      <h3 class="panel-title"></h3>
                                  </div>

                                  <div class="panel-body">
                                      <div class="col-md-12">
                                          <div class="text-left">

                                              <section class="content paddingleft_right15">
                                                  <div class="panel panel-danger">
                                                      <div class="panel-heading">
                                                          <div class="text-muted bootstrap-admin-box-title editor-clr">
                                                              <h3 class="panel-title">
                                                                  <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                                  Front-End Content
                                                              </h3>
                                                          </div>
                                                      </div>
                                                      <!--main content-->
                                                      <div class="row">
                                                          <!-- /.box -->
                                                          <div class='box well well-sm'>
                                                              <!-- /.box-header -->
                                                              <div class='box-body'>
                                                                  <form>
                                                                      <textarea class="textarea editor-cls" placeholder="Place some text here"></textarea>
                                                                  </form>
                                                              </div>
                                                          </div>
                                                          <!-- /.col-->
                                                      </div>
                                                  </div>
                                                  <!--main content ends-->
                                              </section>

                                          </div>
                                      </div>
                                  </div> <!-- panel body -->

                              </div>
                          </div>
                      </div>
                  </div>

                  <div id="tab2" class="tab-pane fade">
                      <div class="row">
                          <div class="col-md-12 pd-top">

                              <section class="content paddingleft_right15">
                                  <div class="panel panel-danger">
                                      <div class="panel-heading">
                                          <div class="text-muted bootstrap-admin-box-title editor-clr">
                                              <h3 class="panel-title">
                                                  <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                  Terms and Conditions
                                              </h3>
                                          </div>
                                      </div>
                                      <!--main content-->
                                      <div class="row">
                                          <!-- /.box -->
                                          <div class='box well well-sm'>
                                              <!-- /.box-header -->
                                              <div class='box-body'>
                                                  <form>
                                                      <textarea class="textarea editor-cls" placeholder="Place some text here"></textarea>
                                                  </form>
                                              </div>
                                          </div>
                                          <!-- /.col-->
                                      </div>
                                  </div>
                                  <!--main content ends-->
                              </section>

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

  <script src="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/pages/tabs_accordions.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/pages/editor2.js') }}" type="text/javascript"></script>

@stop