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
            <h3 class="my-account-title">Manual Video System - Step 5</h3>
            
            @include('frontend.pages.preferences.video-system.steps')
            
            <div class="d-flex justify-content-between join-step-next p-1 mb-3 border-bot pb-3">
                    <button class="btn btn-primary bg-333 btn-no-border px-4" type="button" onclick="goBack()"><i class="arrow-left"></i> BACK</button>
            </div>

            <form id="frmStep5" method="POST" action="{{ route('account-video-system-processStep5')}}">
                {{ csrf_field() }}
            
                <h3>Finish</h3>
                
                <div class="row">
                    <div class="col-sm pl-0">Pictures # {{ $cnt_pics }}</div>
                    <div class="col-sm">Duration {{ $duration }}</div>
                </div>
                <div class="row">
                    <div class="col-sm pl-0">Voice XXXXXXXXXX</div>
                    <div class="col-sm">Music XXXXXXXXXXX</div>
                </div>
                <div class="row">
                    <div class="col-sm pl-0">Template XXXXXXX</div>
                    <div class="col-sm"></div>
                </div>
                <div class="border-bot5 pb-3 my-4">
                    <div class="row m-r-l">
                        <div class="col-sm my-account-subcription">
                            <div class="custom-control custom-checkbox basic">
                                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                                  <label class="custom-control-label ml-4 mt-2" for="customCheck2">Ready to proceed, please commence building my video</label>
                            </div>
                        </div>
                        <div class="col-md-auto"><button class="btn btn-primary bg-009900 btn-no-border b-radius-7 px-4 py-2"><b>GO</b></button></div>
                    </div>
                </div>
                <div class="video-system-con p-3">

                    @if(count($pics) > 0)
                        @foreach($pics as $pic)
                            <?php $num_words = str_word_count($pic['statement']); ?>
                            <div class="row video-system-5 m-0">
                                <div class="col-sm py-3 pr-2">
                                    <div class="bg-fff h-100">
                                        <div class="row my-0 h-100">
                                                <div class="col my-auto text-center">
                                                    <div class="mx-auto">
                                                        <!-- <span class="c-6600cc"><b>+</b></span><br>Picture -->
                                                        <img src="{{ $path2 . $pic['new_filename'] }}" class="w-100" style="padding-top: 10px; padding-bottom: 10px; max-width:100%; height:auto;">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm py-3 pl-2">
                                    <div class="bg-fff h-100">
                                        <div class="d-flex flex-row-reverse">
                                          <div class="p-1 c-6600cc">{{ $pic['duration'] }}s</div>
                                          <div class="p-1 c-ff0033">Words: {{ $num_words }}</div>
                                        </div>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut</p> -->
                                        <p><br>{{ $pic['statement'] }}</p>
                                    </div>
                                </div>
                            </div><br>
                        @endforeach
                    @endif    

                </div>

                <div class="d-flex flex-row my-4">
                  <div><button class="btn btn-primary bg-333 btn-no-border v-s-btn-t px-3" type="button" onclick="goBack()"><i class="arrow-left"></i>BACK</button></div>
                  <div class="px-3">
                        <div class="my-account-subcription">
                            <div class="custom-control custom-checkbox basic">
                                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                                  <label class="custom-control-label ml-4 mt-2" for="customCheck3">Ready to proceed, please commence building my video</label>
                            </div>
                        </div>
                  </div>
                  <div><button class="btn btn-primary bg-009900 btn-no-border b-radius-7 px-4 py-2" type="submit"><b>GO</b></button></div>
                </div>
        </div>
    </div>
</div>
@endsection



{{-- page level scripts --}}
@section('footer_scripts')


    <script type="text/javascript">

        function goBack(){
            window.history.back();
        }

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



