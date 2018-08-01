@extends('frontend.layouts.main')

@section('content')
    <div class="container">
        <div class="row my-account-container">
            <div class="col-lg-4">
                @auth
                    @include('frontend.layouts.parts.sidebar')
                @endauth
            </div>
            <div class="col-lg-8 my-account-form">
                <h3 class="mt-4 mb-3">My Videos</h3>
                <div class="row select-form m-0">
                    <div class="col-sm pl-0">
                        <select name="" class="form-control" placeholder="Sort By">
                            <option disabled selected hidden>Sort By</option>
                        </select>
                    </div>
                    <div class="col-sm p-0"><input type="text" name="" class="form-control search-input" Placeholder="Search"></div>
                </div>
                <div class="row mt-3 mb-0">
                    <div class="col-sm-2 pl-0"><button <button data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary w-100">ACTION</button></div>
                    <div class="col-md-auto p-0 text-center font14"><b>Checked <br>Videos</b></div>
                </div>
                <div class="row m-0">
                    <div class="col-sm-2 pl-0"></div>
                    <div class="col-sm p-0">
                        <div class="d-flex flex-column">
                            <div>
                                <div class="row">
                                    <div class="col-md-auto my-account-video check-videos text-center">
                                        <div class="custom-control custom-checkbox premium d-inline-block">
                                            <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck1">
                                            <label class="custom-control-label font12" for="customCheck1"></label>
                                        </div>

                                    </div>
                                    <div class="col-8 pl-3"><input type="text" name="" class="form-control" Placeholder="Email Link or Links"></div>
                                    <div class="col p-0"><button class="btn btn-primary w-100 h-100 bg-ff0033 btn-no-border"><b>SEND</b></button></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-auto my-account-video text-center">
                                        <div class="custom-control custom-checkbox premium d-inline-block">
                                            <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck2">
                                            <label class="custom-control-label font12" for="customCheck2"></label>
                                        </div>
                                    </div>
                                    <div class="col-8 pl-3"><input type="text" name="" class="form-control" Placeholder="Download to File"></div>
                                    <div class="col p-0"><button class="btn btn-primary w-100 h-100 bg-ff0033 btn-no-border"><b>Browse</b></button></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-auto my-account-video text-center">
                                        <div class="custom-control custom-checkbox premium d-inline-block">
                                            <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck3">
                                            <label class="custom-control-label font12" for="customCheck3"></label>
                                        </div>
                                    </div>
                                    <div class="col-8 pl-3">
                                        <input type="text" name="" class="form-control" Placeholder="Download to USB">
                                    </div>
                                    <div class="col p-0"><button class="btn btn-primary w-100 h-100 bg-ff0033 btn-no-border"><b>Browse</b></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bot3">
                    <div class="collapse my-video-expanded my-4" id="Expanded1">
                        <div class="row m-0">
                            <div class="col-sm border-r-666666 py-3">
                                <h3>EMAIL TO</h3>
                                <div class="row">
                                    <div class="col-sm-9 pl-0"><input type="text" name="" class="form-control"></div>
                                    <div class="col-sm-3 p-0"><button class="btn btn-primary w-100">ADD</button></div>
                                </div>
                                <div class="email-scroll">
                                    <ul>
                                        <li>john@professionals.com.au</li>
                                    </ul>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-sm-9 pl-0"><a href="">Remove -</a></div>
                                    <div class="col-sm-3 p-0"><button class="btn btn-primary w-100">SEND</button></div>
                                </div>
                            </div>
                            <div class="col-sm py-3">
                                <h3>Your Current List</h3>
                                <div class="email-scroll h-150">
                                    <ul>
                                        <li>gavin@revid.com.au</li>
                                    </ul>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-sm-9 pl-0"></div>
                                    <div class="col-sm-3 p-0"><button class="btn btn-primary w-100">ADD</button></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <div class="my-2">
                        <div class="d-flex flex-row">
                            <div class="my-video-subcription border-999-2 px-1">
                                <div class="custom-control custom-checkbox premium d-inline-block">
                                    <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck5">
                                    <label class="custom-control-label font12" for="customCheck5"></label>
                                </div>
                            </div>
                            <div class="bg-424243 color-ffffff p-2 w-100">60 North Rd Basserdean WA 6054</div>
                        </div>
                        <div class="row">
                            <div class="col-md-auto pl-1"><img width="240" src="{{ asset('storage/account/my-video.jpg') }}" class="img-fluid"></div>
                            <div class="col-sm register-form pt-0">
                                <div class="row m-0">
                                    <div class="col-sm-8 p-0">
                                        <input type="text" name="" class="form-control" placeholder="XXXXX 12.12.2017">
                                    </div>
                                    <div class="col-md-auto pr-0 pl-3">
                                        <div class="row border-999-2 m-0">
                                            <div class="col-md-auto align-self-center px-2 pt-2 pb-1"><b>DriveBy</b></div>
                                            <div class="col-md-auto border-l-666666 px-1 pb-2">
                                                <div class="my-video-subcription">
                                                    <div class="custom-control custom-checkbox premium d-inline-block">
                                                        <input type="checkbox" class="custom-control-input" name="main-frame" id="customCheck5">
                                                        <label class="custom-control-label font12" for="customCheck5"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 p-0">
                                        <select name="" class="form-control w-100" placeholder="Sort By">
                                            <option disabled selected hidden>Format</option>
                                            <option>Type 1</option>
                                            <option>Type 2</option>
                                            <option>Type 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 p-0">
                                        <select name="" class="form-control w-100" placeholder="Sort By">
                                            <option disabled selected hidden>Status</option>
                                            <option>Active</option>
                                            <option>Archive</option>
                                        </select>
                                    </div>
                                    <div class="col-sm pr-0"><button class="btn btn-primary w-100 h-100 bg-ff0033 btn-no-border"><b>DOWNLOAD</b></button></button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')


@stop




