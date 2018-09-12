
@extends('frontend.layouts.main')

    <!-- <link href="{{ asset('assets/vendors/selectize/css/selectize.css') }}" rel="stylesheet" type="text/css" /> -->

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
           <div class="col-md-auto">
               <h1 class="c-6600cc">Get Started Today!</h1>
                    <a href=""><img class="img-fluid" src={{ asset('storage/app/public/get-started.jpg') }} /></a>
           </div>

           <div class="col-sm line-height20">
               <!-- <p class="text-justify m-0"><b>Online Membership</b> and Set-up is done in 4 Easy Steps. Once you have set-up your
                preferences and made your selections – we are ready to make your Videos.</p> -->
               <p class="text-justify m-0"><b>Online Membership and Set-up is done in 4 Easy Steps</b>. Once you have set-up your preferences and madeyour selections – we are ready to make your Videos</p> 

                <div class="d-flex justify-content-between mt-3">
                    <div>
                         <ul class="list ml-4">
                            <li><b>Add your Details</b></li>  
                            <li class="mt-2"><b>Upload your Brand Images</b></li>
                         </ul>
                    </div>

                    <div>
                         <ul class="list ml-4">
                            <li><b>Set-Up your Templates and Selections</b></li>  
                            <li class="mt-2"><b>Choose your Preferences and Payment Options</b></li>
                         </ul>
                    </div>
                </div>

                <ul class="list ml-4">
                    <li class="text-justify"><b>Ready to Go</b>; you can start straight away and order your video productions. At any
                    time, you can update your templates, selections and preferences and options; Plus
                    track your progress and use the systems tools or options as and when needed.</li>
                </ul>
           </div>
        </div>

        @include('frontend.register.register-join-info')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>

        @include('frontend.pages.frontpage.why-use-revid')

        @include('frontend.pages.frontpage.footer')

    </div>

@endsection


{{-- page level scripts --}}
@section('footer_scripts')


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

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


            //for clicking Submit button and validation that they should be able to select one plan to proceed
             $('#btnSubmit').click(function() {
                var subscriptiontype = $('#plantype').val();
                
                if(subscriptiontype == '') {
                    alert("Please select a plan.")
                }
                else{
                    $('#frmProcess1').submit();
                }
                
            });


            //script to select only one checkbox at a time
            $('input[type="checkbox"]').on('change', function() {
                $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });


            //script to pass value of selected subscription to the next page
            $('#chkCasual').click(function() {
                if ($(this).is(":checked"))

                    $('#plantype').val("Casual");
                    $('#free_offer').hide();

            });

            $('#chkStandard').click(function() {
                if ($(this).is(":checked"))

                    $('#plantype').val("Standard");

            });

            $('#chkBasic').click(function() {
                if ($(this).is(":checked"))

                    $('#plantype').val("Basic");

            });

            $('#chkPremium').click(function() {
                if ($(this).is(":checked"))

                    $('#plantype').val("Premium");

            });


            //scripts used by the registration form
            var suburbValue = $('#suburbValue').val();
            if(suburbValue != '' && suburbValue != undefined){
                $('select[name="suburb"]').append('<option value="'+ suburbValue +'">'+ suburbValue +'</option>');
            }
            else {
                $('select[name="suburb"]').append('<option value="">Suburb</option>');
            }


            //for dynamic display of State and Suburb based on Name of Agency selected
            $('select[name="name_agency"]').on('change keyup paste ', function() {
                var agency = $(this).val();
                console.log("the agency selected is ", agency);
                $('#suburb').empty();
                if(agency) {
                    $.ajax({
                        url: './stateSuburbAgencyAjax/' + agency,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            var stateval = data.state.trim();
                            var suburbval = data.suburb.trim();
                            $('select[name="suburb"]').append('<option value="'+ data.suburb +'">'+ data.suburb +'</option>');
                            $('[name=state]').val(stateval).attr("selected", true);
                            $('[name=suburb]').val(suburbval).attr("selected", true);
                            // 
                            // $.each(data, function(key, value) {
                            //     $('select[name="name_agency"]').append('<option value="'+ value +'">'+ value +'</option>');
                            // });
                        }
                    });
                }else{
                    // $('select[name="name_agency"]').empty();
                }
            });


            //for dynamic populating name of agency when group is selected
            $('select[name="group"]').on('change', function() {
                var group = $(this).val();
                if(group) {
                    $.ajax({
                        url: './groupAgencyAjax/' + group,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {
                            //console.log("the return data is ", data);
                            $('select[name="name_agency"]').empty();
                            $('select[name="name_agency"]').append('<option value="">Please Select Agency</option>');
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
                                    $('#state').prop('selectedIndex', 4);
                                else if(state_val === 'ACT')
                                    $('#state').prop('selectedIndex', 1);
                                else if(state_val === 'NSW')
                                    $('#state').prop('selectedIndex', 2);
                                else if(state_val === 'NT')
                                    $('#state').prop('selectedIndex', 3);
                                else if(state_val === 'SA')
                                    $('#state').prop('selectedIndex', 5);
                                else if(state_val === 'TAS')
                                    $('#state').prop('selectedIndex', 6);
                                else if(state_val === 'VIC')
                                    $('#state').prop('selectedIndex', 7);
                                else if(state_val === 'WA')
                                    $('#state').prop('selectedIndex', 8);

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


