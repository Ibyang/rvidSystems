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
                <h3 class="my-account-title">Premium Video - Update Template</h3>
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
                <h3>Template Preferences</h3>
                Main Template (1)
                <div class="row">
                    <div class="col p-0"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a href="">Change</a></div>
                </div>

                Mid Template (2)
                <div class="row">
                    <div class="col p-0"><img src="{{ asset('storage/account/video-system-frame.jpg') }}" class="img-fluid"></div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a href="">Change</a></div>
                </div>

                End Template (3)
                <div class="row">
                    <div class="col p-0"><img src="{{ asset('storage/account/video-system-end-frame.jpg') }}" class="img-fluid"></div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2"><a href="">Change</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
