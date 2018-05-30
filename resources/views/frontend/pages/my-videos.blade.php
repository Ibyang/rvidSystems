@extends('frontend.layouts.main')

@section('content')
<div class="container">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-9 my-account-form">
            <br><h3>My Videos</h3>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm">
                        <select class="form-control" name="sortorder" style="width: 100%">
                            <option value="">Sort By</option>
                            <option value="date">Date</option>
                            <option value="active">Active</option>
                            <option value="archive">Archive</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    {{--<div class="row">--}}
                    {{--<div class="col-sm">--}}
                    <input type="text" name="search_text" placeholder="Search" class="form-control">
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-9">
                    <div class="col-sm"><button type="button" class="btn btn-primary">ACTION</button></div>
                    <div class="col-sm my-account-subcription">
                        <div class="custom-control custom-checkbox basic">
                            <input type="checkbox" class="custom-control-input" name="apply_lookfirst" value="1" id="customCheck16" checked>
                            <label class="custom-control-label" for="customCheck16" style="display: block"></label>
                        </div>
                    </div>
                    <div class="col-sm">
                        <select class="form-control" name="sortorder" style="width: 50%">
                            <option value="">Email</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    {{--<div class="row">--}}
                    {{--<div class="col-sm">--}}
                    <input type="text" name="search_text" placeholder="Search" class="form-control">
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
