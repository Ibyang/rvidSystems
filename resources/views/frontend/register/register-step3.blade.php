@extends('frontend.layouts.main')

@section('content')
    <div class="container p-0" id="content">
        <h1 class="c-6600cc">Let’s Get Started! Step 3</h1>
        
        @include('frontend.register.register-info')
        
        <div class="d-flex justify-content-between join-step-next p-1">
                <button class="btn btn-primary bg-333 btn-no-border px-4" onclick="goBack()"><i class="arrow-left"></i> BACK</button>
        </div>
    </div>
    <div class="bg-eae step-two-register">
         <div class="container" id="content">
                <form class="step-three-register register-form" method="POST" action="{{ route('processStep3') }}">
                {{ csrf_field() }}
                <input type="hidden" id="emails_arr" name="emails_arr">
                <input type="hidden" id="areas_arr" name="areas_arr">
                    @include('frontend.register.steps.surge')

                    <!-- @include('frontend.register.steps.sites') -->

                    <!-- @include('frontend.register.steps.social') -->
                    
                    @include('frontend.register.steps.email')
                    
                    @include('frontend.register.steps.broadcast')
                </form>
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

            //for selecting only one checkbox at a time
            $('input[type="checkbox"]').on('change', function() {
                $('input[name="' + this.name + '"]').not(this).prop('checked', false);
            });

            $('.register-form select').css('background-image', 'none');

            var emails = [];
            var areas = [];
            $('span').on('click', function () {
                //alert(this.id);
                //var $list = $('#email_list').empty();
                var spanId = this.id;

                //process for EMAIL Distribution List
                if(spanId === 'addEmailLink'){
                    var values = $('#emailAdd').filter(function(){ // discard fields with no value
                        return this.value != '';
                    }).map(function() {
                        return $(this).val();       // return the value
                    }).get();                         // get the values

                    for(var i in values) {
                        $('#email_list').append("<option value=" + values[i] + ">" +  values[i] + "</option>");
                        emails.push(values[i]); //put email values in an array
                    }

                    console.log('the content of array emails is ', emails);
                    $('#emails_arr').val(emails);
                    $('#emailAdd').val("");
                }

                if(spanId === 'removeEmailLink'){
                    var selectedItem = document.getElementById("email_list");

                    for (var i = 0; i < selectedItem.options.length; i++) {
                        if (selectedItem.options[i].selected) {
                            val = selectedItem.options[i].value;
                            selectedItem.options[i].remove();
                        }
                        else{
                            emails.push(selectedItem.options[i].value);
                        }
                    }
                    $('#emails_arr').val(emails);
                }


                //process for Broadcast Message List
                if(spanId === 'addSuburbLink'){
                    var values = $('#suburb_area').filter(function(){ // discard fields with no value
                        return this.value != '';
                    }).map(function() {
                        return $(this).val();       // return the value
                    }).get();                         // get the values

                    for(var i in values) {
                        $('#suburb_list').append("<option value='" + values[i] + "'>" +  values[i] + "</option>");
                        areas.push(values[i]); //put areas values in an array
                    }

                    //remove the item fom the List of Areas if added to list of Suburb Selection to prevent adding of duplicating values
                    var selectobject = document.getElementById("suburb_area");

                    for (var i = 0; i < selectobject.options.length; i++) {
                        val = selectobject.options[i].value;
                        if(values[0] === val){
                            selectobject.remove(i);
                        }
                    }

                    $('#areas_arr').val(areas);
                }

                if(spanId === 'removeSuburbLink'){

                    var selectedItem = document.getElementById("suburb_list");

                    for (var i = 0; i < selectedItem.options.length; i++) {
                        if (selectedItem.options[i].selected) {
                            val = selectedItem.options[i].value;
                            console.log("the value of value is ", val);
                            selectedItem.options[i].remove();

                            $('#suburb_area').append("<option value='" + val + "'>" +  val + "</option>");
                            $("#suburb_area").html($('#suburb_area option').sort(function(x, y) {
                                return $(x).val() < $(y).val() ? -1 : 1;
                            }))

                            var myDDL = $('#suburb_area');
                            myDDL[0].selectedIndex = 0;

                        }

                    }
                }
            });
        });
    </script>

@stop

