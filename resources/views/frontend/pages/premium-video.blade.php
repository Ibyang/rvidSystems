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
                <h3 class="my-account-title">Premium Video System</h3>
                <table class="table-action" cellpadding="0" cellspacing="0" width="100%">
                    <tr class="font-weight-bold">
                        <td width="170">Video #</td>
                        <td>Address</td>
                        <td>Progress</td>
                    </tr>
                    <tr>
                        <td>#XXXX</td>
                        <td>63 North Rd Basserd...</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%</div>
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="table-action mt-4" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td width="170">Account Manager</td>
                        <td>XXXXX XXXXX</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>xxxx@revid.com.au</td>
                    </tr>
                    <tr>
                        <td>Telephone</td>
                        <td>(08) XXXX XXXX</td>
                    </tr>
                    <tr>
                        <td>Skype</td>
                        <td>XXXXXXXXXXXX</td>
                    </tr>
                </table>
                Action Station
                <table class="table-action" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td width="170"><i class="make-video-step v-pictures"></i><div class="d-inline-block align-top pl-2">Pictures</div></td>
                        <td width="170">Done</td>
                        <td>We will obtain your picutres either directly or through <a href="">Picture Tool</a>.</td>
                    </tr>
                    <tr>
                        <td><i class="make-video-step v-script"></i><div class="d-inline-block align-top pl-2">Script</div></td>
                        <td>Done</td>
                        <td>We will work with you to write your script <a href="">Template</a>.</td>
                    </tr>
                    <tr>
                        <td><i class="make-video-step v-template"></i><div class="d-inline-block align-top pl-2">Template</div></td>
                        <td>Done</td>
                        <td>We will apply your preferences or <a href="">Update Template</a>.</td>
                    </tr>
                    <tr>
                        <td><i class="make-video-step v-voice"></i><div class="d-inline-block align-top pl-2">Voice + Music</div></td>
                        <td>To Complete</td>
                        <td>We will apply your preferences or <a href="">Update Voice + Music</a></td>
                    </tr>
                    <tr>
                        <td><i class="make-video-step v-finish"></i><div class="d-inline-block align-middle pl-2">Finish</div></td>
                        <td>To Complete</td>
                        <td>You will need to approve storyboard before for production. <a href="">See Storyboard</a>.</td>
                    </tr>
                    <tr>
                        <td><b>XXX</b></td>
                        <td colspan="2" class="my-account-subcription">
                            <div class="row">
                                <div class="col-sm-6"><b>63 North Rd Bassendean is</b></div>
                                <div class="col-md-auto">
                                    <div class="custom-control custom-checkbox standard">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </div>
                                <div class="col-md-auto">
                                    <button type="submit" class="btn btn-primary">APPROVED</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table><br>

            </div>
        </div>
    </div>
@endsection