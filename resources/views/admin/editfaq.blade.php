@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
@stop

@section('content')

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
              Edit Question
            </h3>
            <span class="pull-right">
              <i class="glyphicon glyphicon-chevron-up clickable"></i>
              </span>
          </div>
          <div class="panel-body">

              <form class="form-horizontal" method="POST" action="{{ route('faq.update', $faq->ID) }}">
                  {{ csrf_field() }}
                  <input name="_method" type="hidden" value="PATCH">
                  {{--<form class="form-horizontal" action="#" method="post">--}}
                  <fieldset>
                      <div class="form-group">
                          <div class="form-group">
                              <label class="col-md-3 control-label" for="question">Question</label>
                              <div class="col-md-7">
                                  <input type="text" name="question" value="{{ $faq->question }}" class="form-control" id="inputQuestion" placeholder="Question" required>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-group">
                              <label class="col-md-3 control-label" for="firstname">Answer</label>
                              <div class="col-md-7">
                                  <textarea class="form-control" id="inputAnswer" name="answer" rows="5" required>{{ $faq->answer }}</textarea>
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

      });
  </script>

@stop