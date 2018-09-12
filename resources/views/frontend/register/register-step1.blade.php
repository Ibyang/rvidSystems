@extends('frontend.layouts.main')

<link href="{{ asset('assets/vendors/selectize/css/selectize.css') }}" rel="stylesheet" type="text/css" />

@section('content')
    <div class="container pb-0" id="content">
        <!-- <h3 class="header-border c-6600cc font-weight-bold">Let’s Get Started! Step 1</h3>

        @include('frontend.pages.pricing-data')

        <h5 class="step-1-title font-weight-bold py-2 mb-4">
            <div class="d-flex justify-content-between">
                <div class="color-6600cc">Login or <br>Let’s Get Started! Step 1</div>
                <div class="align-self-center color-424244 ">4 Easy Steps (4 to Go!)</div>
            </div>
        </h5> -->
        
         @include('frontend.register.register-join-info') 

        @include('frontend.register.register-info')
    </div>

    @include('frontend.register.register-form')

    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')

@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{ asset('assets/vendors/selectize/js/standalone/selectize.js') }}" type="text/javascript"></script>

    <script type="text/javascript">


        function combo(grouplist, group)
        {
            group = document.getElementById(group);
            var idx = grouplist.selectedIndex;
            var content = grouplist.options[idx].innerHTML;
            group.value = content;
        }


        $(document).ready(function() {

            //code to capture the pricing type selected

<<<<<<< HEAD


=======
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
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


            var suburbValue = $('#suburbValue').val();
            if(suburbValue != '' && suburbValue != undefined){
                $('select[name="suburb"]').append('<option value="'+ suburbValue +'">'+ suburbValue +'</option>');
            }
            else {
                /*$('select[name="suburb"]').append('<option value="">Please Select State</option>');*/
                $('select[name="suburb"]').append('<option value="">Suburb</option>');
            }


            //for dynamic populating name of agency when group is selected
            $('select[name="group"]').on('change', function() {
                var group = $(this).val();
                if(group) {
                    $.ajax({
                        url: './groupAgencyAjax/' + group,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            console.log("the return data is ", data);
                            $('select[name="name_agency"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="name_agency"]').append('<option value="'+ value +'">'+ value +'</option>');
                            });
                        }
                    });
                }else{
                    // $('select[name="name_agency"]').empty();
                }
            });


            //for dynamic populating suburb dropdown when state is selected
            $('select[name="state"]').on('change', function() {
                var stateCode = $(this).val();
                if(stateCode) {
                    $.ajax({
                        url: './stateAjaxUser/' + stateCode,
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
                        url: './getEmailAjax/' + email,
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
                                $('#agency').val(data.name_agency);
                                $('#address').val(data.address);
                                $('#suburbText').val(data.suburb);
                                $('#stateText').val(data.state);
                                $('#postcode').val(data.postcode);

                                
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

@stop

