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

                <form class="form-horizontal" method="POST" action="{{ route('account-preferences-process', $preference['agent_ID']) }}">
                    {{ csrf_field() }}
                    <br><h3>My Preferences</h3><br>
                    <h3>SURGE OFFER</h3> What is this?
                    <div class="row">
                        <div class="col-sm">
                            <div class="custom-control custom-checkbox premium">
                                <input type="checkbox" class="group1 custom-control-input" id="customCheck1" value="Always Surge" name="surgeoffer[]" {{ $preference['surge_offer_option']  === "Always Surge" ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck1"></label>
                                Always Surge (24 hours) ($5 fixed)
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="custom-control custom-checkbox premium">
                                <input type="checkbox" class="group1 custom-control-input" id="customCheck2" value="Always Rush" name="surgeoffer[]" {{ $preference['surge_offer_option']  === "Always Rush" ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck2"></label>
                                Always Rush (2 hours) ($45 fixed)
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="custom-control custom-checkbox premium">
                                <input type="checkbox" class="group1 custom-control-input" id="customCheck3" value="Sometimes" name="surgeoffer[]" {{ $preference['surge_offer_option']  === "Sometimes" ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck3"></label>
                                Sometimes (Ask Me) (Cost of the Day)
                            </div>
                        </div>
                    </div>
                    <br>
                    <h3>Email</h3>
                    <hr>
                    <h3>EMAIL DISTRIBUTION</h3> What is this?<br>
                    Email on Completion to <br>
                    <div class="row">
                        <div class="col-sm">
                            <input type="text" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email">
                        </div>
                        <div class="col-sm">
                            <span id="addEmailLink" style="float: left; color: blue; cursor: pointer">Add +</span>
                        </div>
                    </div>
                    <br>Current List <br>
                    <div class="row">
                        <div class="col-sm">
{{--                            @if($emails != null)--}}
                            @if($emails->count() > 0)
                                {{--<p>There is data</p>--}}
                                <select name="email_list" id="email_list" multiple class="form-control">
                                    @foreach($emails as $em)
                                        <option value="{{$em->email}}">{{$em->email}}</option>
                                    @endforeach
                                </select>
                            @else
                                {{--<p>There is no data</p>--}}
                                <select name="email_list" id="email_list" multiple class="form-control" style="width: 340px"></select>
                            @endif
                        </div>
                        <div class="col-sm">
                            <span id="removeEmailLink" style="float: left; color: red; cursor: pointer">Remove -</span>
                        </div>
                    </div>
                    <br>
                    <h3>Broadcast</h3>
                    <hr>
                    <h3>BROADCAST TO OTHER AGENTS IN YOUR AREA</h3> What is this?<br>
                    <div class="row">
                        <div class="col-sm">
                            <div class="custom-control custom-checkbox premium">
                                <input type="checkbox" class="group1 custom-control-input" id="customCheck4" value="1" name="broadcast_status" {{ $preference['broadcast_agent']  === "1" ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck4"></label>
                                Yes, send weekly New Video Update to REVid member real estate agents in the selected areas listed below.
                            </div>

                        </div>
                        <div class="col-sm">

                        </div>
                    </div>
                    Select Areas <br>
                    <div class="row">
                        <div class="col-sm">
                            {{--<input type="text" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email">--}}
                            <select name="suburb_area" class="form-control" id="suburb_area">
                                @foreach($suburbs as $sub)
                                    <option value="{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}">{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}</option>
                                    {{--                         <option value="{{$sub->ID}}">{{$sub->suburb}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub->state}}{{$sub->post_code}}</option>--}}
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm">
                            <span id="addSuburbLink" style="float: left; color: blue; cursor: pointer">Add +</span>
                        </div>
                    </div>
                    <br>Suburb Selection <br>
                    <div class="row">
                        <div class="col-sm">
                            {{--<select name="suburb_list" id="suburb_list" multiple class="form-control"></select>--}}

{{--                            @if($areas != null)--}}
                            @if($areas->count() > 0)
                                <select name="suburb_list" id="suburb_list" multiple class="form-control">
                                    @foreach($areas as $area)
                                        <option value="{{$area->suburb}}">{{$area->suburb}}</option>
                                    @endforeach
                                </select>
                            @else
                                <select name="suburb_list" id="suburb_list" multiple class="form-control" style="width: 290px"></select>
                            @endif
                        </div>
                        <div class="col-sm">
                            <span id="removeSuburbLink" style="float: left; color: red; cursor: pointer">Remove -</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary font-weight-bold">
                                        Update Data
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="emails_arr" name="emails_arr">
                    <input type="hidden" id="areas_arr" name="areas_arr">
                </form>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

        //for selecting only one checkbox at a time
        $('input[type="checkbox"]').on('change', function() {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });

        $('.register-form select').css('background-image', 'none');
        //var $list = $('#email_list').empty();
        var emails = [];
        var areas = [];
        $('span').on('click', function () {
            //alert(this.id);
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
                }
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
