@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" media="screen"/>
  <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <section class="content-header">
    <h1>FAQs (Frequently Asked Questions)</h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">
          <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
        </a>
      </li>
      <li>
          <a href="#">Content Management</a>
      </li>
      <li class="active">FAQs</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="panel panel-primary" id="hidepanel1">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
              Add Question
            </h3>
            <span class="pull-right">
              <i class="glyphicon glyphicon-chevron-up clickable"></i>
              </span>
          </div>
          <div class="panel-body">

            <form class="form-horizontal" method="POST" action="{{ route('faq.store') }}">
              {{ csrf_field() }}
                {{--<form class="form-horizontal" action="#" method="post">--}}
                <fieldset>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="question">Question</label>
                      <div class="col-md-7">
                        <input type="text" name="question" class="form-control" id="inputQuestion" placeholder="Question" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="firstname">Answer</label>
                      <div class="col-md-7">
                         {{--<textarea class="form-control" id="inputAnswer" name="answer" rows="5" required></textarea>--}}
                          <textarea class="textarea editor-cls" id="inputAnswer" name="answer" rows="5" required placeholder="Place your answer here"></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- Form actions -->
                  <div class="form-group">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button><br>
                      <button type="button" class="btn btn-responsive btn-primary btn-sm" data-toggle="modal" data-target="#favoritesModal">Submit</button>
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

  <div class="modal fade" id="favoritesModal"
       tabindex="-1" role="dialog"
       aria-labelledby="favoritesModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"
                  data-dismiss="modal"
                  aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"
              id="favoritesModalLabel">The Sun Also Rises</h4>
        </div>
        <div class="modal-body">
          <p>
            Please confirm you would like to add
            <b><span id="fav-title">The Sun Also Rises</span></b>
            to your favorites list.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button"
                  class="btn btn-default"
                  data-dismiss="modal">Close</button>
          <span class="pull-right">
                          <button type="button" class="btn btn-primary">
                            Add to Favorites
                          </button>
                        </span>
        </div>
      </div>
    </div>
  </div>

@endsection

{{-- page level scripts --}}
@section('footer_scripts')

  <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
  <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
  <script src="{{ asset('assets/js/pages/form_examples.js') }}"></script>

  <!-- for editor -->
  <script src="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/pages/editor2.js') }}" type="text/javascript"></script>

  <script type="text/javascript">
      $(document).ready(function() {

      });
  </script>

@stop