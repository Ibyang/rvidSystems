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
            <h3 class="my-account-title">Standard Video System - Step 5</h3>
            
            @include('frontend.pages.preferences.video-system.steps')

            <form id="frmStep5" method="POST" action="{{ route('account-video-system-processStep5')}}">
                {{ csrf_field() }}
            
                <h3>Finish</h3>

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
                <div class="row">
                    <div class="col-sm my-account-subcription">
                        <div class="custom-control custom-checkbox basic">
                              <input type="checkbox" class="custom-control-input" id="check2" value="1" checked>
                              <label class="custom-control-label ml-5" for="check2">Ready to<br>Produce, proceed</label>
                        </div>
                    </div>
                    <div class="col-sm"><button class="btn btn-primary" id="btnGo">GO</button></div>
                </div>
                <div class="video-system-con p-3">

                    @if(count($pics) > 0)
                        @foreach($pics as $pic)
                            <div class="row video-system-5 m-0">
                                <div class="col-sm py-3 pr-2">
                                    <div class="bg-fff" style="height: 20% !important">
                                        <div class="row my-0" style="height: 20% !important">
                                                <div class="col my-auto text-center">
                                                    {{--<div class="mx-auto"><span class="c-6600cc"><b>+</b></span><br>Picture</div>--}}
                                                    <div class="mx-auto">
                                                        {{--<span class="c-6600cc"><b>+</b></span><br>Picture--}}
                                                        <img src="{{ $path2 . $pic['new_filename'] }}" width='316px' height='158px' style="padding-top: 10px; padding-bottom: 10px">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm py-3 pl-2">
                                    <div class="bg-fff" style="height: 20% !important">
                                        <div class="d-flex flex-row-reverse">
                                          <div class="p-1 c-6600cc">01m:14s</div>
                                          <div class="p-1 c-ff0033">Words: 17</div>
                                        </div>
                                        {{--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p>--}}
                                        <p><br>{{ $pic['statement'] }}</p>
                                    </div>
                                </div>
                            </div><br>
                        @endforeach
                    @endif

                </div>
                <div class="float-r mt-3 mb-5">
                    <button class="btn btn-primary" type="submit">SAVE :UPDATE<i class=""></i></button>
                </div>
            </form>
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


{{--<script type="text/javascript">--}}

    {{--// $(document).ready(function() {--}}
    {{--//--}}
    {{--//     $('.custom-control-input').click(function() {--}}
    {{--//         // alert("This is clicked...");--}}
    {{--//         if ($(this).is(':checked')) {--}}
    {{--//             $('#btnGo').removeAttr('disabled');--}}
    {{--//         } else {--}}
    {{--//             $('#btnGo').attr('disabled', 'disabled');--}}
    {{--//         }--}}
    {{--//     });--}}
    {{--//--}}
    {{--// });--}}
{{--</script>--}}
