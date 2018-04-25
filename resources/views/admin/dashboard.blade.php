@extends('admin.layouts.admin')

@section('header_styles')
    <link href="{{asset('assets/vendors/fullcalendar/css/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages/calendar_custom.css" rel="stylesheet')}}" type="text/css" />
    <link rel="stylesheet" media="all" href="{{asset('assets/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/only_dashboard.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

@stop

@section('content')
    <!-- Main content -->
    <section class="content-header">
        @if($role === 'Administrator')
            <h1>Welcome to Administrator Dashboard</h1>
        @else
            <h1>Welcome to Administrator Production Dashboard</h1>
        @endif
        <ol class="breadcrumb">
            <li class="active">
                <a href="#">
                    <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                </a>
            </li>
        </ol>
    </section>
    <section class="content">

        @if($role === 'Administrator')
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 text-right">
                                            <span>Views Today</span>
                                            <div class="number" id="myTargetElement1"></div>
                                        </div>
                                        <i class="livicon  pull-right" data-name="eye-open" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement1.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement1.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="redbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Today's Sales</span>
                                            <div class="number" id="myTargetElement2"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="piggybank" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement2.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement2.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="goldbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Subscribers</span>
                                            <div class="number" id="myTargetElement3"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="archive-add" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement3.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement3.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Users</span>
                                            <div class="number" id="myTargetElement4"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">Last Week</small>
                                            <h4 id="myTargetElement4.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label">Last Month</small>
                                            <h4 id="myTargetElement4.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row-->
        @endif

        <div class="row">
            @if($role === 'Production')
                <div class="col-lg-6 col-md-6 col-sm-6">

                    <!-- for Generic Videos -->
                    <div class="panel panel-primary panel-border">
                        <div class="panel-heading  border-light">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="file-export" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Generic Video Orders
                            </h4>
                        </div>
                        <div class="panel-body">

                            @if(count($generic_videos) > 0)
                                <div class="table-responsive">
                                    <table class="table table-bordered " id="table">
                                        <thead>
                                        <tr class="filters">
                                            <th>Video ID</th>
                                            <th>URL</th>
                                            <th>Agent Name</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($generic_videos as $video)
                                                <tr>
                                                    <td style="text-align: center">{{ $video->ID }}</td>
                                                    <td>{{ $video->url_address }}</td>
                                                    <td>{{ $video->name }}</td>
                                                    <td>
                                                        @if($video->status === 'Compiling')
                                                            <span style="color: red">{{ $video->status }}</span>
                                                        @else
                                                            {{ $video->status }}
                                                        @endif
                                                    </td>
                                                    <td>{{ \Carbon\Carbon::parse($video->created_at)->format('d/m/Y H:m:s') }}</td>
                                                    <td style="text-align: center">
                                                        <a href="{{ url('getVideoDetails/' . $video->ID . '/Generic') }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Update Generic Order"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        {{--<tr><td colspan="6">No data available yet...</td></tr>--}}
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                        </div> <!-- end of panel body -->
                    </div>

                    <!-- for Standard Videos -->
                    <div class="panel panel-default panel-border">
                        <div class="panel-heading  border-light">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="file-export" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Standard Video Orders
                            </h4>
                        </div>
                        <div class="panel-body">

                            @if(count($standard_videos) > 0)
                                <div class="table-responsive">
                                    <table class="table table-bordered " id="table2">
                                        <thead>
                                        <tr class="filters">
                                            <th>Order ID</th>
                                            <th>Agent Name</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($standard_videos as $video)
                                                <tr>
                                                    <td style="text-align: center">{{ $video->ID }}</td>
                                                    <td>{{ $video->name }}</td>
                                                    <td>
                                                        @if($video->status === 'Compiling')
                                                            <span style="color: red">{{ $video->status }}</span>
                                                        @else
                                                            {{ $video->status }}
                                                        @endif
                                                    </td>
                                                    <td>{{ \Carbon\Carbon::parse($video->created_at)->format('d/m/Y H:m:s') }}</td>
                                                    <td style="text-align: center">
                                                        <a href="{{ url('getVideoDetails/' . $video->ID . '/Standard') }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Update Standard Order"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        {{--<tr><td colspan="6">No data available yet...</td></tr>--}}
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                        </div> <!-- end of panel body -->
                    </div>

                    <!-- for Premium Videos -->
                    <div class="panel panel-info panel-border">
                        <div class="panel-heading  border-light">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="file-export" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Premium Video Orders
                            </h4>
                        </div>
                        <div class="panel-body">

                            @if(count($premium_videos) > 0)
                                <div class="table-responsive">
                                    <table class="table table-bordered " id="table3">
                                        <thead>
                                        <tr class="filters">
                                            <th>Video ID</th>
                                            <th>URL</th>
                                            <th>Agent Name</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($premium_videos as $video)
                                                <tr>
                                                    <td style="text-align: center">{{ $video->ID }}</td>
                                                    <td>{{ $video->url_address }}</td>
                                                    <td>{{ $video->name }}</td>
                                                    <td>
                                                        @if($video->status === 'Compiling')
                                                            <span style="color: red">{{ $video->status }}</span>
                                                        @else
                                                            {{ $video->status }}
                                                        @endif
                                                    </td>
                                                    <td>{{ \Carbon\Carbon::parse($video->created_at)->format('d/m/Y H:m:s') }}</td>
                                                    <td style="text-align: center">
                                                        <a href="{{ url('getVideoDetails/' . $video->ID . '/Premium') }}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Update Premium Order"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div> <!-- end of panel body -->
                    </div>

                </div>

            @endif
            <!-- Calendar -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel panel-success panel-border">
                    <div class="panel-heading  border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="#fff"></i> Calendar
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div id='external-events'></div>
                        <div id="calendar"></div>
                        <div class="box-footer pad-5">
                            <a href="#" class="btn btn-success btn-block createevent_btn" data-toggle="modal" data-target="#myModal">Create event
                            </a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            <i class="fa fa-plus" style="margin-top: 8px;"></i> Create Event
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group">
                                            <input type="text" id="new-event" class="form-control" placeholder="Event">
                                            <div class="input-group-btn">
                                                <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                    Type
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right" id="color-chooser">
                                                    <li>
                                                        <a class="palette-primary" href="#">Primary</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-success" href="#">Success</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-info" href="#">Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-warning" href="#">warning</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-danger" href="#">Danger</a>
                                                    </li>
                                                    <li>
                                                        <a class="palette-default" href="#">Default</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                        <!-- /input-group -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">
                                            Close
                                            <i class="fa fa-times" style="margin-top: 4px;"></i>
                                        </button>
                                        <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                            <i class="fa fa-plus" style="margin-top: 5px;"></i> Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of panel body -->
                </div>
            </div>
        </div>

    </section>
    <!-- right-side -->
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/smalotDatepicker/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- EASY PIE CHART JS -->
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jquery-easyPieChart/js/jquery.easingpie.js') }}"></script>
    <!--for calendar-->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/flotchart/js/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="{{ asset('assets/vendors/sparklinecharts/jquery.sparkline.js') }}"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="{{ asset('assets/vendors/countUp_js/js/countUp.js') }}"></script>
    <!--   maps -->
    <script src="{{ asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!--  todolist-->
    <script src="{{ asset('assets/js/pages/dashboard.js') }}" type="text/javascript"></script>
{{--    <script src="{{ asset('assets/js/pages/todolist.js') }}"></script>--}}

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>

    <script>
        $(document).ready(function() {
            $('#table').dataTable();
            $('#table2').dataTable();
            $('#table3').dataTable();
        });
    </script>

@stop