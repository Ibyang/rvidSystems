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
                <h3 class="my-account-title">Premium Video Picture Tool</h3>
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
                <form>
                    <div class="row video-system-1">
                        <div class="col-sm-7 pl-0">
                            <div class="row">
                                <div class="col-sm pl-0"><h3>Open Pictures</h3></div>
                                <div class="col-sm pr-0"><a href="">What is this?</a></div>
                            </div>
                            <div class="video-system-pic-block h-100">
                                <div class="row mt-1">
                                    <div class="col-sm pr-1 pl-1">
                                        <button class="btn text-left"><i class="standard-video sv-browse"></i>Browse</button>
                                    </div>
                                    <div class="col-sm pr-1 pl-1">
                                        <button class="btn text-left"><i class="standard-video sv-save"></i>Save Selection</button>
                                    </div>
                                </div>
                                <ul class="video-system-ul">
                                    <li>
                                        <div><img src="" width="183" height="100"/></div>
                                        <div class="my-account-subcription step-three-register">
                                            <div class="custom-control custom-checkbox standard">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div><img src="" width="183" height="100"/></div>
                                        <div class="my-account-subcription step-three-register">
                                            <div class="custom-control custom-checkbox standard">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2"></label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div><img src="" width="183" height="100"/></div>
                                        <div class="my-account-subcription step-three-register">
                                            <div class="custom-control custom-checkbox standard">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3"></label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5 p-0">
                            <div class="row">
                                <div class="col-sm pl-0"><h3>Story Board</h3></div>
                                <div class="col-sm pr-0"><a href="">What is this?</a></div>
                            </div>
                            <div class="story-board-block pl-3 pr-3">
                                <button class="btn text-left pl-4">Save Storyboard</button>
                                <input type="file" multiple>
                                <p>Add or Drag and Drop <br><span class="c-6600cc"><b>+</b></span><br>Picture</p>
                                <select name="">
                                    <option>Fade</option>
                                </select>
                                <div class="text-right">
                                    <a class="c0066ff"><b>Add +</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
