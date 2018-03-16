@extends('frontend.layouts.main')

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Get Started Today!</h1>
        <div class="row">
           <div class="col-sm"><a href=""><img src={{ asset('storage/get-started.jpg') }} /></a></div>
           <div class="col-sm">
            <ul class="list">
                <li>It’s "Video" for social media marketing,
                    online marketing, on-site presentations
                    and email to prospective clients.</li>  
                <li>Low cost video options</li>
            </ul>
                 $75 Generic<br>
                 $125 Standard<br>
                 $145 Premium
           </div>
           <div class="col-sm">
            <ul class="list">
                <li>Easy + Quick with No Fuss</li>
                <li>Valuable; you get video’s (3 versions)Plus</li>
            </ul>
               
             with your monthly membership
           </div>
        </div>
        
        @include('frontend.register.register-info')
        
    </div>
    
    @include('frontend.register.register-form')

@endsection

{{--@extends('frontend.layouts.parts.footer-scripts')--}}

{{-- page level scripts --}}
{{--@section('footer_scripts')--}}
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            var suburbValue = $('#suburbValue').val();
            if(suburbValue != '' && suburbValue != undefined){
                $('select[name="suburb"]').append('<option value="'+ suburbValue +'">'+ suburbValue +'</option>');
            }
            else {
                $('select[name="suburb"]').append('<option value="">Please Select State</option>');
            }

            //for dynamic populating suburb dropdown when state is selected
            $('select[name="state"]').on('change', function() {
                var stateCode = $(this).val();
                if(stateCode) {
                    $.ajax({
                        url: '/stateAjaxUser/' + stateCode,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            console.log("the return data is ", data);
                            $('select[name="suburb"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="suburb"]').append('<option value="'+ value +'">'+ value +'</option>');
                            });
                        }
                    });
                }else{
                    $('select[name="suburb"]').empty();
                }
            });


            //for dynamic populating of postal code when suburb is selected
            // $('select[name="suburb"]').on('change', function() {
            //     var suburbValue = $(this).val();
            //     var sCode = $('#state').val();
            //     console.log("the value of suburbValue is", suburbValue);
            //     console.log("the value of sCode is", sCode);
            //     if (suburbValue) {
            //         $.ajax({
            //             url: '/agentPostalAjax/' + sCode + '/' + suburbValue,
            //             type: "GET",
            //             dataType: "json",
            //             success: function (data) {
            //                 // $('select[name="suburb"]').empty();
            //                 // $.each(data, function (key, value) {
            //                 $("#postalCode").val(data);
            //                 // $('select[name="suburb"]').append('<option value="' + key + '">' + value + '</option>');
            //                 // });
            //             }
            //         });
            //     } else {
            //         //$('select[name="suburb"]').empty();
            //     }
            //
            // });

        });
    </script>

{{--@stop--}}

