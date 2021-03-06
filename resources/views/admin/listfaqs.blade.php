@extends('admin.layouts.admin')

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')
        <!-- Content Header (Page header) -->
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
        <!-- Main content -->
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="panel panel-primary ">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left"><i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> FAQ List</h4>
                        <div class="pull-right">
                            <a href="{{ route('faq.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> Create New Question</a>
                        </div>
                    </div>
                    <br />
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered width100" id="table">
                                <thead>
                                <tr class="filters">
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($faqs as $faq)
                                    <tr>
                                        <td>{{$faq->question}}</td>
                                        <td>{{$faq->answer}}</td>
                                        <td><a href="{{ route('faq.edit', $faq->ID)}}"><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Update Question"></i></a>

                                            <form action="{{action('FAQController@destroy', $faq->ID)}}" method="post" onsubmit="return confirm('Are you sure you want to delete this record?')">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                                {{--<button type="submit" style="border: none;"><i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="Delete Agent"></i><!--span class="glyphicon glyphicon-trash"></span--></button>--}}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal for showing delete confirmation -->
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

