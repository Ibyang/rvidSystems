@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
  <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />

  <!--page level css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css') }}" />
  <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />

@stop

@section('content')

  <section class="content-header">
    <h1>Edit Video Order</h1>
    <ol class="breadcrumb">
      <li>
        <a href="#">
          <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
        </a>
      </li>
      <li>
          <a href="#">Orders</a>
      </li>
      <li class="active">Edit Video Order</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="panel panel-primary" id="hidepanel1">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
              Edit Video Order
            </h3>
            <span class="pull-right">
              <i class="glyphicon glyphicon-chevron-up clickable"></i>
              </span>
          </div>


          <div class="panel-body">
                <div class="panel-body">
                    <div class="row">
                        <form method="POST" class="form-horizontal" action="{{ route('postVideoProgress') }}">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="video_id">Video ID</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">{{ $video->ID }}</p>
                                    </div>
                                </div>
                                @if($videotype === 'Generic' || $videotype === 'Premium')
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="url">URL:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static">{{ $video->url_address }}</p>
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="agent_name">Agent Name</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">{{ $video->name }}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="order_date">Order Date</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">{{ \Carbon\Carbon::parse($video->created_at)->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="due_date">Due Date</label>
                                    <div class="col-md-9">
                                        <p class="form-control-static">
                                            {{ \Carbon\Carbon::parse($video->due_date)->format('d/m/Y') }}
                                            {{--<input type="text" class="form-control" id="datetime1" value="{{ \Carbon\Carbon::parse($video->due_date)->format('DD/MM/YYYY h:mm A') }}"/>--}}
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <h5>Video Production Progress </h5>
                                <div class="progress progress-striped">
                                    <div id="videoprogress" class="progress-bar" role="progressbar" data-transitiongoal="{{ $video->progress_value == null ? 0 : $video->progress_value }}"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-5" for="status">Completion Date</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="datetime1" name="completion_date" style="width: 200px" value="{{ $video->completion_date }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-5" for="status">Status</label>
                                    <div class="col-md-4">
                                        <select name="status" class="form-control" style="width: 200px">
                                            <option value="Compiling" {{ $video->status === 'Compiling' ? 'selected' : '' }}>Compiling</option>
                                            <option value="In-Production" {{ $video->status === 'In-Production' ? 'selected' : '' }}>In-Production</option>
                                            <option value="Completed" {{ $video->status === 'Completed' ? 'selected' : '' }}>Completed</option>
                                        </select>
                                    </div>
                                </div>
                                <h5>Video Components (Setting Up Progress)</h5>
                                <div class="form-group">
                                    <label class="control-label col-md-5" for="picture">Uploading of Picture &nbsp;&nbsp;&nbsp;(%)</label>
                                    <div class="col-md-4">
                                        <select name="picture_progress" id="picture_progress" class="form-control" style="width: 100px">
                                            @for ($i = 1; $i <= 15; $i++)
                                                <option value="{{ $i }}" {{ $progress->picture_progress == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-5" for="picture">Script &nbsp;&nbsp;&nbsp;(%)</label>
                                    <div class="col-md-4">
                                        <select name="script_progress" id="script_progress" class="form-control" style="width: 100px">
                                            @for ($i = 1; $i <= 15; $i++)
                                                <option value="{{ $i }}" {{ $progress->script_progress == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-5" for="picture">Template &nbsp;&nbsp;&nbsp;(%)</label>
                                    <div class="col-md-4">
                                        <select name="template_progress" id="template_progress" class="form-control" style="width: 100px">
                                            @for ($i = 1; $i <= 15; $i++)
                                                <option value="{{ $i }}" {{ $progress->template_progress == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-5" for="picture">Voice and Music &nbsp;&nbsp;&nbsp;(%)</label>
                                    <div class="col-md-4">
                                        <select name="voice_music" id="voice_music" class="form-control" style="width: 100px">
                                            @for ($i = 1; $i <= 15; $i++)
                                                <option value="{{ $i }}" {{ $progress->voice_and_music == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-5" for="edits">Edits &nbsp;&nbsp;&nbsp;(%)</label>
                                    <div class="col-md-4">
                                        <select name="edits" id="edits" class="form-control" style="width: 100px">
                                            @for ($i = 1; $i <= 40; $i++)
                                                <option value="{{ $i }}" {{ $progress->edits == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="hidden" name="videoid" value="{{ $video->ID }}">
                                            <input type="hidden" name="videotype" value="{{ $videotype }}">
                                            <button type="submit" class="btn btn-success ">Update</button>
                                            <button type="reset" class="btn btn-effect-ripple btn-default">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
          </div>
        </div>

      </div>
    </div>
    <!--row end-->
  </section>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')


  <!-- end of global js -->
  <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
{{--  <script src="{{ asset('assets/js/pages/form_examples.js') }}"></script>--}}

  <!-- global js -->
  <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/vendors/daterangepicker/js/daterangepicker.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
  <script src="{{ asset('assets/js/pages/datepicker.js') }}" type="text/javascript"></script>

  <!-- begining of page level js -->
  <script type='text/javascript' src="{{ asset('assets/vendors/bootstrap-progressbar/js/bootstrap-progressbar.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/pages/general.js') }}"></script>


@stop