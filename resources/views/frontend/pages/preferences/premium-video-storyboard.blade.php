@extends('frontend.layouts.main')

@section('content')
    <div class="container ">
        <div class="row my-account-container">
            <div class="col-lg-3">
                @auth
                    @include('frontend.layouts.parts.sidebar')
                @endauth
            </div>
            <div class="col-lg-9 my-account-form">
                <h3 class="my-account-title">Premium Video - Storyboard</h3>
                <table class="table-action mb-4" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>Video #</td>
                        <td>Address</td>
                    </tr>
                    <tr>
                        <td>#XXXX</td>
                        <td>
                            <div class="d-flex">
                                <div>63 North Rd Bassendean</div>
                                <div class="ml-auto"><a href="">Return My Tracker</a></div>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-sm pl-0">Pictures # XX</div>
                    <div class="col-sm">Duration XX</div>
                </div>
                <div class="row">
                    <div class="col-sm pl-0">Voice XXXXXXXXXX</div>
                    <div class="col-sm">Music XXXXXXXXXXX</div>
                </div>
                <div class="row">
                    <div class="col-sm pl-0">Template XXXXXXX</div>
                    <div class="col-sm"></div>
                </div>
                <div class="d-flex">
                    <div class="mr-auto p-0">Ready to<br>Produce, proceed</div>
                    <div class="p-2 my-account-subcription">
                        <div class="custom-control custom-checkbox basic">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label ml-5" for="customCheck2"></label>
                        </div>
                    </div>
                    <div class="p-2"><button class="btn btn-primary">APPROVED</button></div>
                </div>
                <div class="video-system-con p-3">
                    <div class="row video-system-5 m-0">
                        <div class="col-sm-4 py-3 pr-2">
                            <div class="bg-fff h-100">
                                <div class="row my-0 h-100">
                                    <div class="col my-auto text-center">
                                        <div class="mx-auto"><span class="c-6600cc"><b>+</b></span><br>Picture</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 py-3 pl-2">
                            <div class="bg-fff h-100">
                                <div class="d-flex flex-row-reverse">
                                    <div class="p-1 c-6600cc">01m:14s</div>
                                    <div class="p-1 c-ff0033">Words: 17</div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
