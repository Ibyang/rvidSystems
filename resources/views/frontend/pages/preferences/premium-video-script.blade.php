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
                <h3 class="my-account-title">Premium Video Script Tool</h3>
                <table class="table-action mb-4" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>Video #</td>
                        <td>Address</td>
                    </tr>
                    <tr>
                        <td>#XXXX</td>
                        <td>63 North Rd Bassendean <a href="">Return My Tracker</a></td>
                    </tr>
                </table>
                <h3 class="d-inline-block">Scripting Options</h3> <a href=""class="d-inline-block">What is this?</a>
                <form>
                    <div class="row scripting-options py-3">
                        <div class="col-sm pr-2">
                            <button class="bg-eae"><i class="script-options upload-script"></i> Click here to Upload Script</button>
                            <button class="my-2"><i class="script-options write-script"></i> Write your own Script with Script Tool</button>
                            <button><i class="script-options interview-script"></i> We write professional script. (interview)</button>
                        </div>
                        <div class="col-sm pl-2">
                            <textarea name="" class="h-100 w-100" placeholder="Drag to Upload Your Script"></textarea>
                        </div>
                    </div>
                    <h3 class="d-inline-block">Script Tool</h3> <a href=""class="d-inline-block">What is this?</a>
                    <div class="video-system-con p-3 mb-4">
                        <div class="row mt-0">
                            <div class="col-sm-4 script-tool pl-0 pr-2"><button class="btn m-0"><i class="standard-video sv-save"></i>SAVE</button></div>
                            <div class="col-sm-8"><button class="btn m-0"><i class=""></i>Click to hear script (auto voice)</button></div>
                        </div>
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
                </form>
            </div>
        </div>
    </div>
@endsection
