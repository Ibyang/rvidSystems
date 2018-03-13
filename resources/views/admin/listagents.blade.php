@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Agents</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Users</a>
                </li>
                <li class="active">Agents</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="panel panel-primary ">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left"><i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Agents List</h4>
                        <div class="pull-right">
                            <a href="{{ route('agents.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> Create New Agent</a>
                        </div>
                    </div>
                    <br />
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered width100" id="table">
                                <thead>
                                <tr class="filters">
                                    <th>Group</th>
                                    <th>Agency Name</th>
                                    <th>Role/Title</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($agents as $agent)
                                    <tr>
                                        <td>{{$agent->group}}</td>
                                        <td>{{$agent->name_agency}}</td>
                                        <td>{{$agent->role_title}}</td>
                                        <td>{{$agent->firstname}} {{$agent->lastname}}</td>
                                        <td>{{$agent->email}}</td>
                                        <td>{{$agent->mobile}}</td>
                                        <td>{{$agent->address}}, {{$agent->suburb}} {{$agent->State}}{{$agent->postcode}}</td>
                                        <td><a href="{{ route('agents.edit', $agent->ID)}}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Update Agent"></i></a>

                                            <form action="{{action('AgentController@destroy', $agent->ID)}}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                                {{--<button type="submit" style="border: none;"><i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Delete Agent"></i><!--span class="glyphicon glyphicon-trash"></span--></button>--}}
                                            </form>
                                            {{--<a href="#" data-toggle="modal" data-target="#delete_confirm">--}}
                                                {{--<i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="Delete Agent"></i>--}}
                                            {{--</a>--}}

                                            {{--<a class="btn btn-primary btn-xs" href="{{ route('agents.edit', $agent->ID)}}" ><span class="glyphicon glyphicon-pencil"></span></a>--}}
                                            {{--<form action="{{action('AgentController@destroy', $agent->ID)}}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">--}}
                                                {{--{{csrf_field()}}--}}
                                                {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                {{--<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>--}}
                                            {{--</form>--}}
                                        </td>
                                    </tr>
                                @endforeach
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

