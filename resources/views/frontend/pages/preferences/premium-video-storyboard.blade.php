@extends('frontend.layouts.main')

@section('content')
<div class="container ">
    <div class="row my-account-container">
      <div class="col-lg-4">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>
        <div class="col-lg-8 my-account-form">
            <h3 class="my-account-title">Custom Video - Storyboard</h3>
            <table class="table-action mb-4" cellpadding="0" cellspacing="0" width="100%">
                <tr class="bg-eae">
                    <td><b>Video #</b></td>
                    <td><b>Address</b></td>
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
            <div class="d-flex border-bot py-3 mb-4">
              <div class="my-account-subcription mr-3"> 
                    <div class="custom-control custom-checkbox basic">
                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                          <label class="custom-control-label ml-1" for="customCheck2"></label>
                    </div>
              </div>
              <div class="mr-auto p-0 align-self-center">Ready to proceed, please commence building my video</div> 
              <div><button class="btn btn-primary btn-no-border b-radius-7 bg-009900 px-3"><b>GO</b></button></div> 
            </div>
            <div class="video-system-con p-3">

                @foreach($pics as $pic)

                    <div class="row video-system-5 m-0 mb-3">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto"><img src={{ $path2 . $pic['old_filename'] }} class="w-100" style="padding-top: 20px; padding-bottom: 10px"></div>
                                                <!-- <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 1</div>
                                                </div> -->
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">{{ $pic['statement'] }}</p>
                                </div>
                            </div>
                    </div>

                @endforeach    

                    <!-- <div class="row video-system-5 m-0 mb-3">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 2</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div>
                    <div class="row video-system-5 m-0 mb-3">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 3</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div>
                    <div class="row video-system-5 m-0 mb-3">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 4</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div>
                    <div class="row video-system-5 m-0 mb-0">
                            <div class="col-sm-4 py-3">
                                <div class="bg-fff h-100">
                                    <div class="row my-0 h-100 script-tool-text">
                                            <div class="col my-auto text-center">
                                                <div class="mx-auto">
                                                    <span class="c-6600cc"><b>+</b></span>
                                                    <div>Picture 5</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-sm-8 py-3">
                                <div class="bg-fff h-100">
                                    <div class="d-flex flex-row-reverse">
                                      <div class="p-1 c-6600cc">01m:14s</div>
                                      <div class="p-1 c-ff0033">Words: 17</div>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Pellentesque accumsan enim ac sagittis laoreet.
                                    Donec pretium, dui dictum tincidunt cursus, orci urna
                                    dapibus elit, eget egestas mauris lorem sit amet
                                    diam. Phasellus volutpat laoreet fringilla. Pellentesque ornare ac tellus nec egestas. In adipiscing</p>
                                </div>
                            </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>
@endsection

{{-- page level scripts --}}
@section('footer_scripts')


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

@stop    
