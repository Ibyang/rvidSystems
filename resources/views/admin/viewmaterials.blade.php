@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Video Details</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Clients</a>
                </li>
                <li class="active">View Materials</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="video-play-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Video Materials
                            </h3>
                            <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>

                        <div class="panel-body">
                            <div class="bs-example">
                                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                                    <li class="active">
                                        <a href="#video_ordered" data-toggle="tab">Video Ordered</a>
                                    </li>
                                    <li>
                                        <a href="#preferences" data-toggle="tab">Preferences / Subscription Plan</a>
                                    </li>
                                    <li>
                                        <a href="#templates" data-toggle="tab">Templates</a>
                                    </li>
                                    <li>
                                        <a href="#pictures" data-toggle="tab">Pictures</a>
                                    </li>
                                    <li>
                                        <a href="#voice_overs" data-toggle="tab">Voice Overs</a>
                                    </li>
                                    <li>
                                        <a href="#music_selection" data-toggle="tab">Music Selection</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in" id="video_ordered">

                                            <!-- display Generic Videos Table -->
                                            <br><h5>Generic Videos</h5>
                                            @if(count($genvideos) > 0)
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Video ID</th>
                                                        <th>URL Address</th>
                                                        <th>Status</th>
                                                        <th>Apply DriveBy</th>
                                                        <th>Apply LookFirst</th>
                                                        <th>Progress Value</th>
                                                        <th>Due Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($genvideos as $genvideo)
                                                        <tr>
                                                            <td>{{ $genvideo->ID }}</td>
                                                            <td>{{ $genvideo->url_address }}</td>
                                                            <td>
                                                                @if($genvideo->status == 'Compiling')
                                                                    <span class="label label-sm label-success">{{ $genvideo->status }}</span>
                                                                @elseif($genvideo->status == 'In-Production')
                                                                    <span class="label label-sm label-info">{{ $genvideo->status }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($genvideo->apply_driveby == '1')
                                                                    <span>Yes</span>
                                                                @elseif($genvideo->apply_driveby == '0')
                                                                    <span>No</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($genvideo->apply_lookfirst == '1')
                                                                    <span>Yes</span>
                                                                @elseif($genvideo->apply_lookfirst == '0')
                                                                    <span>No</span>
                                                                @endif
                                                            </td>
                                                            <td>{{ $genvideo->progress_value }}</td>
                                                            <td>{{ $genvideo->due_date }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <table class="table table-striped table-hover">
                                                    <tr><td colspan="7">No Generic Video Orders at the moment...</td></tr>
                                                </table>
                                            @endif

                                            <!-- display Standard Videos Table -->
                                            <br><h5>Standard Videos</h5>
                                            @if(count($stdvideos) > 0)
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Video ID</th>
                                                        <th>Property Address</th>
                                                        <th>Status</th>
                                                        <th>Apply DriveBy</th>
                                                        <th>Apply LookFirst</th>
                                                        <th>Progress Value</th>
                                                        <th>Due Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($stdvideos as $stdvideo)
                                                        <tr>
                                                            <td>{{ $stdvideo->ID }}</td>
                                                            <td>{{ $stdvideo->videoAddress }}</td>
                                                            <td>
                                                                @if($stdvideo->status == 'Compiling')
                                                                    <span class="label label-sm label-success">{{ $stdvideo->status }}</span>
                                                                @elseif($stdvideo->status == 'In-Production')
                                                                    <span class="label label-sm label-info">{{ $stdvideo->status }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($stdvideo->apply_driveby == '1')
                                                                    <span>Yes</span>
                                                                @elseif($stdvideo->apply_driveby == '0')
                                                                    <span>No</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($stdvideo->apply_lookfirst == '1')
                                                                    <span>Yes</span>
                                                                @elseif($stdvideo->apply_lookfirst == '0')
                                                                    <span>No</span>
                                                                @endif
                                                            </td>
                                                            <td>{{ $stdvideo->progress_value }}</td>
                                                            <td>{{ $stdvideo->due_date }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <table class="table table-striped table-hover">
                                                    <tr><td colspan="7">No Standard Video Orders at the moment...</td></tr>
                                                </table>
                                            @endif



                                            <!-- display Premium Videos Table -->
                                            <br><h5>Premium Videos</h5>
                                            @if(count($premvideos) > 0)
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Video ID</th>
                                                        <th>URL Address</th>
                                                        <th>Property Address</th>
                                                        <th>Status</th>
                                                        <th>Apply DriveBy</th>
                                                        <th>Apply LookFirst</th>
                                                        <th>Progress Value</th>
                                                        <th>Due Date</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($premvideos as $premvideo)
                                                        <tr>
                                                            <td>{{ $premvideo->ID }}</td>
                                                            <td>{{ $premvideo->url_address }}</td>
                                                            <td>{{ $premvideo->videoAddress }}</td>
                                                            <td>
                                                                @if($genvideo->status == 'Compiling')
                                                                    <span class="label label-sm label-success">{{ $genvideo->status }}</span>
                                                                @elseif($genvideo->status == 'In-Production')
                                                                    <span class="label label-sm label-info">{{ $genvideo->status }}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($genvideo->apply_driveby == '1')
                                                                    <span>Yes</span>
                                                                @elseif($genvideo->apply_driveby == '0')
                                                                    <span>No</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if($genvideo->apply_lookfirst == '1')
                                                                    <span>Yes</span>
                                                                @elseif($genvideo->apply_lookfirst == '0')
                                                                    <span>No</span>
                                                                @endif
                                                            </td>
                                                            <td>{{ $genvideo->progress_value }}</td>
                                                            <td>{{ $genvideo->due_date }}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            @else
                                                <table class="table table-striped table-hover">
                                                    <tr><td colspan="7">No Premium Video Orders at the moment...</td></tr>
                                                </table>
                                        @endif


                                    </div>

                                    <div class="tab-pane fade" id="preferences">

                                        <div class="col-md-12">
                                            <br>
                                            <h5>Subscription Details</h5>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Subscription Tye</label>
                                                <div class="col-md-9">
                                                    <p>{{ $subscription['subscription_type'] }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Storage Plan</label>
                                                <div class="col-md-9">
                                                    <p>{{ $subscription['storage_plan'] }}</p>
                                                </div>
                                            </div><br>
                                            <br><br>
                                            <hr>
                                            <h5>Surge Offer</h5>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Surge Preference</label>
                                                <div class="col-md-9">
                                                    <p>{{ $preference['surge_offer_option'] }}</p>
                                                </div>
                                            </div>
                                            <br><br>
                                            <hr>
                                            <h5>Email Distribution (on completion)</h5>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Email Distribution</label>
                                                <div class="col-md-9">
                                                    <p>
                                                        @if($preference['email_distribution'] == 1)
                                                            On
                                                        @else
                                                            Off
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <br><br>
                                            <hr>
                                            <h5>Broadcast Distribution</h5>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Broadcast to Other Agents in Your Area</label>
                                                <div class="col-md-9">
                                                    <p>
                                                        @if($preference['broadcast_agent'] == 1)
                                                            On
                                                        @else
                                                            Off
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <br><br>
                                            <hr>
                                            <h5>Extra's</h5>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="agent_name">DriveBy</label>
                                                <div class="col-md-9">
                                                    <p>Video is loaded to Drive By</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="agent_name">LookFirst</label>
                                                <div class="col-md-9">
                                                    <p>Video is loaded to Look First</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="templates">
                                        <div class="col-md-10">
                                            <br>
                                            <h3>Main Template</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Main Frame Template Image</label>
                                                <div class="col-md-9">
                                                    <p><img src="../storage/register/{{ $template["main_frame_template_format"] }}"><br>
                                                        {{ $template["main_frame_template_format"] }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Main Frame Preference</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['main_frame_template'] }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Main Frame Colour Preference</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['main_frame_colours'] }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Main Frame Colour Settings</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['main_frame_colours_sub'] }}</p>
                                                </div>
                                            </div>
                                            <br>
                                            <div style="clear: both"></div>
                                            <hr>
                                            <h3>Middle Template</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Middle Frame Template Image</label>
                                                <div class="col-md-9">
                                                    <p><img src="../storage/register/{{ $template["middle_frame_template_format"] }}"><br>
                                                        {{ $template["middle_frame_template_format"] }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Middle Frame Preference</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['middle_frame_template'] }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Middle Frame Colour Preference</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['middle_frame_colours'] }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Middle Frame Colour Settings</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['middle_frame_colours_sub'] }}</p>
                                                </div>
                                            </div><br>
                                            <div style="clear: both"></div>
                                            <hr>
                                            <h3>End Template</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">End Frame Template Image</label>
                                                <div class="col-md-9">
                                                    <p><img src="../storage/register/{{ $template["end_frame_template_format"] }}"><br>
                                                        {{ $template["end_frame_template_format"] }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">End Frame Preference</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['end_frame_template'] }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">End Frame Colour Preference</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['end_frame_colours'] }}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">End Frame Colour Settings</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['end_frame_colours_sub'] }}</p>
                                                </div>
                                            </div><br>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pictures">
                                        <div class="col-md-10">
                                            <br>
                                            <h5>Main Picture (Studio Head Shot or Your Main Promotional Image)</h5><br>
                                            <div class="form-group">
                                                <img src="{{ $path . $template['main_image'] }}">
                                                {{--<label class="control-label col-md-3" for="video_id">Subscription Tye</label>--}}
                                                {{--<div class="col-md-9">--}}
                                                    {{--<p class="form-control-static"></p>--}}
                                                {{--</div>--}}
                                            </div>
                                            <br>
                                            <hr>
                                            <h5>Extra (Optional)</h5><br>
                                            <div class="form-group">
                                                <img src="{{ $path . $template['extra_image1'] }}">
                                                {{--<label class="control-label col-md-3" for="video_id">Surge Preference</label>--}}
                                                {{--<div class="col-md-9">--}}
                                                    {{--<p class="form-control-static"></p>--}}
                                                {{--</div>--}}
                                            </div>
                                            <br>
                                            <hr>
                                            <h5>Extra (Optional)</h5><br>
                                            <div class="form-group">
                                                <img src="{{ $path . $template['extra_image2'] }}">
                                                {{--<label class="control-label col-md-3" for="video_id">Your Email List</label>--}}
                                                {{--<div class="col-md-9">--}}
                                                    {{--<p class="form-control-static"></p>--}}
                                                {{--</div>--}}
                                            </div>
                                            <br>
                                            <hr>
                                            <h5>Corporate Logo as Provided</h5><br>
                                            <div class="form-group">
                                                <img src="{{ $path . $template['logo'] }}">
                                                {{--<label class="control-label col-md-3" for="video_id">Agents in Your Suburbs</label>--}}
                                                {{--<div class="col-md-9">--}}
                                                    {{--<p class="form-control-static"></p>--}}
                                                {{--</div>--}}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="voice_overs">
                                        <div class="col-md-10">
                                            <br>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Voice Format</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['voice_format'] }}</p>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Voice Over Selection</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['voice_file_selection'] }}</p>
                                                </div>
                                            </div><br>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="music_selection">
                                        <div class="col-md-10">
                                            <br>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Music Style</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['music_style'] }}</p>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="form-group">
                                                <label class="control-label col-md-3" for="video_id">Music Selection</label>
                                                <div class="col-md-9">
                                                    <p>{{ $template['music_file_format'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end myTabContent -->
                            </div> <!-- end of class panel -->

                        </div> <!-- end panel panel-primary -->

                    </div> <!-- col-md-12 -->
                </div> <!-- class row -->

            <!--main content ends-->
        </section>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')

@stop

