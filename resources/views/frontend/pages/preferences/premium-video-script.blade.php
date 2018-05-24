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
                        <td>#<b>{{ $videoid }}</b></td>
                        <td>
                            <div class="d-flex">
                                <div><b> {{ $videoAddress }}</b></div>
                                <div class="ml-auto"><a href=" {{ route('account-video-tracker') }} ">Return My Tracker</a></div>
                            </div>
                        </td>
                    </tr>
                </table>
                <h3 class="d-inline-block">Scripting Options</h3> <a href=""class="d-inline-block">What is this?</a>
                <form id="frmStep2" method="POST" action="{{ route('account-premium-video-system-processStep2')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row scripting-options py-3">
                        <div class="col-sm pr-2">
                            <button class="bg-eae"><i class="script-options upload-script"></i> Click here to Upload Script</button>
                            <button class="my-2"><i class="script-options write-script"></i> Write your own Script with Script Tool</button>
                            <button><i class="script-options interview-script"></i> We write professional script. (interview)</button>
                        </div>
                        <div class="col-sm pl-2">
                            <textarea name="" class="w-100" placeholder="Drag to Upload Your Script" style="height: 14% !important"></textarea>
                        </div>
                    </div>
                    <h3 class="d-inline-block">Script Tool</h3> <a href=""class="d-inline-block">What is this?</a>
                    <div class="video-system-con p-3 mb-4">
                        <div class="row mt-0">
                            <div class="col-sm-4 script-tool pl-0 pr-2"><button class="btn m-0" id="btnSaveScript" onclick="event.preventDefault();"><i class="standard-video sv-save"></i>SAVE</button></div>
                            <div class="col-sm-8"><button class="btn m-0" onclick="event.preventDefault();"><i class=""></i>Click to hear script (auto voice)</button></div>
                        </div>

                        @foreach($pics as $pic)
                            <div class="row video-system-5 m-0">
                                <div class="col-sm-4 py-3 pr-2">
                                    <div class="bg-fff" style="height: 20% !important">
                                        <div class="row my-0" style="height: 20% !important">
                                            <div class="col my-auto text-center">

                                                {{--<div class="mx-auto"><span class="c-6600cc"><b>+</b></span><br>Picture</div>--}}
                                                <div class="mx-auto"><img src={{ $path2 . $pic['old_filename'] }} class="w-100" style="padding-top: 20px; padding-bottom: 10px"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 py-3 pl-2">
                                    <div class="bg-fff" style="height: 20% !important">
                                        <div class="d-flex flex-row-reverse">
                                            <div class="p-1 c-6600cc">01m:14s</div>
                                            <div class="p-1 c-ff0033">Words: 17</div>
                                        </div>
                                        <textarea placeholder="Enter your Script Here" name="script[]" id="script" cols="49" rows="4" style="margin-left: 8px; margin-top: 7px">{{ $pic['statement'] }}</textarea>
                                        {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>--}}
                                    </div>
                                </div>
                            </div><br>
                        @endforeach
                    </div>
                    <input type="hidden" name="pics" id="pics" value="{{ $pics }}">
                </form>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#btnSaveScript').click(function () {
            $('#frmStep2').submit();
        });
    });
</script>