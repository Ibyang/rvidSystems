@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <div class="row">
            <div class="col-sm-12 col-md-auto pb3">
                <h1 class="c-6600cc">Where do I use REVid?</h1>
                <a href="" data-toggle="modal" data-target="#RevidCorporateVideoModal"><img class="img-fluid" src={{ asset('storage/app/public/where-use-revid-corporate.jpg') }} /></a>
            </div>
            <div class="col-sm">
                <h1 class="c-6600cc pl-4">Corporate</h1>
                <ul class="list text-justify ml-4">
                    <li><b>Home Open Video Display</b> – you can use the function in REVid to
                        download your Videos into a single presentation format – for use
                        during Home Opens.</li>
                    <li><b>In-Office Video Display</b> – you can use the Video (with Subtitles) as
                        a great In-office or Window Display.</li>
                    <li>You can use your <b>REVid library</b> as a tool to show prospective
                        buyers your listings or the properties available for sale.</li>
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

    <!-- Video Modal for Revid Corporate -->
    <div class="modal fade" id="RevidCorporateVideoModal"
         tabindex="-1" role="dialog"
         aria-labelledby="VideoModalLabel">
        <div class="modal-dialog" role="document" style="max-width: 700px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Video</h4>
                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <video controlsList="nodownload" controls id="video1" style="width: 100%">
                        <source src={{ asset('storage/app/public/videos/VIDDYOZE-REVid_V6.mp4') }} type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-default"
                            data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- page level scripts --}}
@section('footer_scripts')

    <script type="text/javascript">

        $(document).ready(function() {

            $('#RevidCorporateVideoModal').on('shown.bs.modal', function () {
                $('body').addClass('test');
                $('#video1')[0].play();
            });


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

        });

    </script>


@stop

