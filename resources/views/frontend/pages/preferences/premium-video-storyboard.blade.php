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
                        <td>#<b>{{ $videoid }}</b></td>
                        <td>
                            <div class="d-flex">
                                <div><b> {{ $videoAddress }}</b></div>
                                <div class="ml-auto"><a href=" {{ route('account-video-tracker') }} ">Return My Tracker</a></div>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-sm pl-0">Pictures # {{ $cnt_pics }}</div>
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

                    @foreach($pics as $pic)

                        <div class="row video-system-5 m-0">
                            <div class="col-sm-4 py-3 pr-2">
                                {{--<div class="bg-fff h-100">--}}
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
                                    <p>{{ $pic['statement'] }}</p>
                                </div>
                            </div>
                        </div><br>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // var checker = document.getElementById('check2');
        // var btnGo = document.getElementById('btnGo');
        // checker.onchange = function() {
        //     btnGo.disabled = true;
        // };

        $('#check2').click(function() {
            if ($(this).is(':checked')) {
                $('#btnGo').removeAttr('disabled');
            } else {
                $('#btnGo').attr('disabled', 'disabled');
            }
        });

        $('#btnGo').click(function() {
            $('frmStep5').submit();
        })

    });
</script>
