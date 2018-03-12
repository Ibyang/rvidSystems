@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Video Files</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                    </a>
                </li>
                <li class="active">Video Files</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="panel panel-primary ">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left"><i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Video File List</h4>
                        <div class="pull-right">
                            <a href="{{ route('showUploadVideo') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> Upload Video File</a>
                        </div>
                    </div>
                    <br />
                    <div class="panel-body">
                        <table class="table table-bordered " id="table">
                            <thead>
                            <tr class="filters">
                                <th>Filename</th>
                                <th>Video</th>
                                <th>Date Uploaded</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($videos as $video)
                                    <tr>
                                        <td>{{ $video->filename }}</td>
                                        <td>
                                            <video width="320" height="240" controls>
                                                <source src="{{ $video->filepath . '/' . $video->filename }}" type="video/{{ $video->extension }}">
                                            </video>
                                        </td>
                                        <td>{{ $video->created_at }}</td>
                                        <td>
                                            <form action="{{action('FileController@deleteVideo', $video->ID)}}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                {{csrf_field()}}
                                                {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            {{--@foreach($prods as $prod)--}}
                                {{--<tr>--}}
                                    {{--<td>{{$prod->name}}</td>--}}
                                    {{--<td>{{$prod->email}}</td>--}}
                                    {{--<td>{{$prod->address}}</td>--}}
                                    {{--<td>{{$prod->phone}}</td>--}}
                                    {{--<td>{{$prod->status}}</td>--}}
                                    {{--<td>--}}
                                        {{--<a href="{{ route('production.edit', $prod->id)}}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Update User"></i></a>--}}
                                        {{--<form action="{{action('ProductionController@destroy', $prod->id)}}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">--}}
                                            {{--{{csrf_field()}}--}}
                                            {{--<input name="_method" type="hidden" value="DELETE">--}}
                                            {{--<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>--}}
                                        {{--</form>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            </tbody>
                        </table>
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

