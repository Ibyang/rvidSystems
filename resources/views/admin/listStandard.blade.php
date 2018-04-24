@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Standard Videos</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Orders</a>
                </li>
                <li class="active">Standard Videos</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="panel panel-primary ">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left"><i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> List of Standard Video Orders</h4>
                        {{--<div class="pull-right">--}}
                            {{--<a href="{{ route('agents.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> Create New Agent</a>--}}
                        {{--</div>--}}
                    </div>
                    <br />
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered " id="table">
                                <thead>
                                <tr class="filters">
                                    <th>Order ID</th>
                                    <th>Agent Name</th>
                                    <th>Status</th>
                                    <th>Order Date</th>
                                    <th>Due Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(count($videos) > 0)
                                        @foreach($videos as $video)
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
                                                <td>{{ \Carbon\Carbon::parse($video->due_date)->format('d/m/Y H:m:s') }}</td>
                                                <td>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                {{--<tr><td colspan="6">No data available yet...</td></tr>--}}
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal for showing delete confirmation -->
                        <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="user_delete_confirm_title">
                                            Delete User
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to delete this user? This operation is irreversible.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <a href="deleted_users.html" class="btn btn-danger">Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row-->
        </section>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>

    {{--<script>--}}
        {{--$(function() {--}}
            {{--var table = $('#table').DataTable({--}}
                {{--processing: true,--}}
                {{--serverSide: true,--}}
                {{--ajax: '{!! route('admin.users.data') !!}',--}}
                {{--columns: [--}}
                    {{--{ data: 'id', name: 'id' },--}}
                    {{--{ data: 'first_name', name: 'first_name' },--}}
                    {{--{ data: 'last_name', name: 'last_name' },--}}
                    {{--{ data: 'email', name: 'email' },--}}
                    {{--{ data: 'status', name: 'status'},--}}
                    {{--{ data: 'created_at', name:'created_at'},--}}
                    {{--{ data: 'actions', name: 'actions', orderable: false, searchable: false }--}}
                {{--]--}}
            {{--});--}}
            {{--table.on( 'draw', function () {--}}
                {{--$('.livicon').each(function(){--}}
                    {{--$(this).updateLivicon();--}}
                {{--});--}}
            {{--} );--}}
        {{--});--}}

    {{--</script>--}}
    <script>
        $(document).ready(function() {
            $('#table').dataTable();
        });
    </script>

@stop

