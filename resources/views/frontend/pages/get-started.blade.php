@extends('frontend.layouts.main')

<link href="{{ asset('assets/vendors/selectize/css/selectize.css') }}" rel="stylesheet" type="text/css" />

@section('content')

    <div class="container" id="content">
        <h1 class="c-6600cc">Get Started Today!</h1>
        <div class="row">
           <div class="col-sm">
               <a href={{ route('how-to-join') }}><img src={{ asset('storage/get-started.jpg') }} /></a>
           </div>
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
        <hr>
        @include('frontend.register.register-info')
        
    </div>

    <div class="bg-eae">
        @include('frontend.register.register-form')
    </div>

@endsection

{{--@extends('frontend.layouts.parts.footer-scripts')--}}

{{-- page level scripts --}}
{{--@section('footer_scripts')--}}
{{--    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{ asset('assets/vendors/selectize/js/standalone/selectize.js') }}" type="text/javascript"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $('#grouplist').selectize({
                create: true,
                sortField: {
                    field: 'text',
                    direction: 'asc'
                }
            });

            $('#agencylist').selectize({
                create: true,
                sortField: {
                    field: 'text',
                    direction: 'asc'
                }
            });

            function combo(grouplist, group)
            {
                group = document.getElementById(group);
                var idx = grouplist.selectedIndex;
                var content = grouplist.options[idx].innerHTML;
                group.value = content;
            }

            var suburbValue = $('#suburbValue').val();
            if(suburbValue != '' && suburbValue != undefined){
                $('select[name="suburb"]').append('<option value="'+ suburbValue +'">'+ suburbValue +'</option>');
            }
            else {
                $('select[name="suburb"]').append('<option value="">Suburb</option>');
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


            //script to auto-populate the registration when email is entered directly to the registration  form

            $("#emailadd").on('change keyup paste', function () {
                var email = $(this).val();

                if(email){
                    $.ajax({
                        url: '/getEmailAjax/' + email,
                        type: "GET",
                        dataType: "json",
                        async: true,
                        success:function(data) {
                            if(data){
                                // $('#state').html('');

                                $('#suburb').html('');

                                $('#modeAction').val('edit');
                                console.log('Mod Action status is: EDIT');
                                $('#agentID').val(data.ID);
                                $('#firstname').val(data.firstname);
                                $('#lastname').val(data.lastname);
                                $('#mobile').val(data.mobile);
                                $('#group').val(data.group);
                                $('#name_agency').val(data.name_agency);
                                $('#address').val(data.address);

                                var state_val = data.state;
                                if(state_val === 'QLD')
                                    $('#state').prop('selectedIndex', 3);
                                else if(state_val === 'ACT')
                                    $('#state').prop('selectedIndex', 0);
                                else if(state_val === 'NSW')
                                    $('#state').prop('selectedIndex', 1);
                                else if(state_val === 'NT')
                                    $('#state').prop('selectedIndex', 2);
                                else if(state_val === 'SA')
                                    $('#state').prop('selectedIndex', 4);
                                else if(state_val === 'TAS')
                                    $('#state').prop('selectedIndex', 5);
                                else if(state_val === 'VIC')
                                    $('#state').prop('selectedIndex', 6);
                                else if(state_val === 'WA')
                                    $('#state').prop('selectedIndex', 7);

                                var suburb_val = data.suburb;
                                if(suburb_val != '' && suburb_val != undefined){
                                    $('select[name="suburb"]').append('<option value="'+ suburb_val +'">'+ suburb_val +'</option>');
                                }
                                else {
                                    $('select[name="suburb"]').append('<option value="">Please Select State</option>');
                                }
                            }

                        }
                    });
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

