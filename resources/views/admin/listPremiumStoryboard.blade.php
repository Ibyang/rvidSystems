@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Storyboard</h1>
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
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="panel panel-primary ">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left"><i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Images and Statements</h4>
                        <div class="pull-right">
                            <a href="{{ route('showUploadImage') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> Upload Image</a>
                        </div>
                    </div>
                    <br />
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered " id="table">
                                <thead>
                                <tr class="filters">
                                    <th>Image</th>
                                    <th>Statement</th>
                                    <th>Transition Style</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($premiums as $premium)
                                        <tr>
                                            <td><img src=" {{ $path2 . $premium->old_filename }}" width="250" height="150"></td>
                                            <td>{{ $premium->statement }}</td>
                                            <td>{{ $premium->effect_style }}</td>
                                            <td>
                                                {{--<form action="{{action('FileController@deleteImage', $image->ID)}}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">--}}
                                                    {{--{{csrf_field()}}--}}
                                                    {{--<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>--}}
                                                {{--</form>--}}
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
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

    <script>
        $(document).ready(function() {
            $('#table').dataTable();
        });
    </script>

@stop

