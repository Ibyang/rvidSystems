@extends('frontend.layouts.main')

@section('content')
<div class="container register-form">
    <div class="row my-account-container">
      <div class="col-lg-3">
        @auth
            @include('frontend.layouts.parts.sidebar')
        @endauth
        </div>

        <div class="col-lg-9 my-account-form">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <br><h3>My Videos</h3>
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-sm">
                            <select class="form-control" name="sortorder" style="width: 100%">
                                <option value="">Sort By</option>
                                <option value="date">Date</option>
                                <option value="active">Active</option>
                                <option value="archive">Archive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        {{--<div class="row">--}}
                        {{--<div class="col-sm">--}}
                        <input type="text" name="search_text" placeholder="Search" class="form-control">
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-3">
                        <div class="col-sm" style="float: right"><button type="button" class="btn btn-primary" style="width: 100px">ACTION</button></div>
                        <div class="col-sm my-account-subcription">
                            <div class="custom-control custom-checkbox basic" style="margin-left: 110px">
                                <input type="checkbox" class="custom-control-input" name="apply_lookfirst" value="1" id="customCheck16" checked>
                                <label class="custom-control-label" for="customCheck16" style="display: block"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <a data-toggle="collapse" href="#Expanded1" role="button" aria-expanded="false" aria-controls="collapseExample"><select class="form-control" name="sortorder" style="width: 400px;">
                            <option value="">Email</option>
                            </select>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="col-sm" style="float: right; width: 115px"><button type="button" class="btn btn-danger" style="width: 100px">SEND</button></div>
                    </div>
                </div>
            </form>

                <div class="collapse" id="Expanded1" style="margin-left: 50px; margin-top: 25px; background-color: #F4F4F4; width: 90%; text-align: center">
                    {{--<div class="rules-arrow"></div>--}}
                    <div class="ExpandForm p-3">
                        <table width="100%" cellspacing="2">
                            <tr>
                                <td style="border-right: 1px solid black; width: 50%">
                                    <p style="text-align: left">EMAIL TO</p>
                                    <div style="float: left">
                                        <input class="form-control" type="text" name="email" id="email" style="width: 225px">
                                    </div>
                                    <div style="margin-left: 110px; padding-left: 5px">
                                        <button type="button" id="btnAdd" class="btn btn-primary" style="width: 60px">ADD</button>
                                    </div>
                                    <div style="margin-top: 10px">
                                        <select name="emailList" id="emailList" multiple class="form-control" style="width: 297px; background-image: none"></select>
                                    </div>
                                    <div style="float: left; margin-top: 15px;">
                                        <a href="#" id="removeEmail">Remove - </a>
                                    </div>
                                    <div style="margin-left: 225px; margin-top: 15px;">
                                        <button type="button" id="btnAdd" class="btn btn-primary" style="width: 60px">SEND</button>
                                    </div>
                                </td>
                                <td style="padding-left: 10px; vertical-align: top">
                                    <p style="text-align: left">Your Current List</p>
                                    <form id="frmCurrentEmail" method="POST" action="{{ route('myvideos-updateEmail') }}">
                                        {{ csrf_field() }}
                                        <div style="margin-top: 10px">
                                            {{--<select name="emailCurrentList" id="emailCurrentList" multiple class="form-control" style="width: 297px; height: 140px; background-image: none">--}}
                                                {{--<option></option>--}}
                                            {{--</select>--}}
                                            @if(count($emails) > 0)
                                                <select name="emailCurrentList" id="emailCurrentList" multiple class="form-control" style="width: 297px; height: 140px; background-image: none">
                                                    @foreach($emails as $em)
                                                        <option value="{{ $em['email'] }}">{{ $em['email'] }}</option>
                                                    @endforeach
                                                </select>
                                            @else
                                                <select name="emailCurrentList" id="emailCurrentList" multiple class="form-control" style="width: 297px; height: 140px; background-image: none">
                                                    {{--<option value="">No emails on the list...</option>--}}
                                                </select>
                                            @endif
                                        </div>
                                        <input type="hidden" name="emails_arr" id="emails_arr">
                                    </form>
                                    <div style="float: left; margin-top: 15px;">
                                        <a href="#" id="removeEmailCurrent">Remove - </a>
                                    </div>
                                    <div style="margin-left: 235px; margin-top: 15px;">
                                        <button type="button" id="btnAdd" class="btn btn-primary" style="width: 60px">ADD</button>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            <hr>
            <br><h3>No Videos Available</h3>
        </div>
    </div>
</div>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        var emails = [];

        //functionality for double clicking an email from My Current List and will be added to the Email To List
        $('#emailCurrentList option').dblclick(function() {
            var valueSelected = $(this).val();

            if ( $("#emailList option[value='"+valueSelected+"']").length == 0 ){
                $(this).clone().appendTo("#emailList");
            }

            // $('#emailList  option').each(function(){
            //     if (this.value != valueSelected) {
            //         $(this).clone().appendTo("#emailList");
            //     }
            // });


        });

        $('#btnAdd').on('click', function () {

            //alert(this.id);
            //var $list = $('#email_list').empty();
            // var spanId = this.id;
            //
            //process for adding Email entered to the textbox and Current List
            //if(spanId === 'addEmailLink'){
                var values = $('#email').filter(function(){ // discard fields with no value
                    return this.value != '';
                }).map(function() {
                    return $(this).val();       // return the value
                }).get();                         // get the values

                console.log("the values are ", values);

                for(var i in values) {
                    $('#emailList').append("<option value=" + values[i] + ">" +  values[i] + "</option>");
                    $('#emailCurrentList').append("<option value=" + values[i] + ">" +  values[i] + "</option>");
                    emails.push(values[i]); //put email values in an array
                }

                console.log('the content of array emails is ', emails);
                $('#emails_arr').val(emails);
                $('#email').val("");

                $('#frmCurrentEmail').submit();
            //}

        });

        $('#removeEmail').on('click', function () {

            var selectedItem = document.getElementById("emailList");
            var selectedvalue = $("#emailList").val();

                for (var i = 0; i < selectedItem.options.length; i++) {
                    if (selectedItem.options[i].selected) {
                        val = selectedItem.options[i].value;
                        selectedItem.options[i].remove();
                    }
                }

            // $("#emailCurrentList").removeOption(selectedvalue);
            //
            // // $("#emailCurrentList option[value=' + selectedvalue + ']").remove();
            // //
            // // $("#emailCurrentList > option").each(function(ind) {
            // //     var ele = $("#emailCurrentList > option").eq(ind);
            // //     if (ele.val() === selectedvalue)
            // //         ele.remove();
            // // });

            // currentEmail = document.getElementById("emailCurrentList");
            //
            //     for (var j = 0; j < currentEmail.options.length; j++) {
            //         // console.log("the value is ", currentEmail.options[j].value);
            //         if (currentEmail.options[j].value === selectedvalue[0]) {
            //             currentEmail.options[j].remove();
            //         }
            //     }

        });


        $('#removeEmailCurrent').on('click', function () {

            currentEmail = document.getElementById("emailCurrentList");

            for (var i = 0; i < currentEmail.options.length; i++) {
                if (currentEmail.options[i].selected) {
                    val = currentEmail.options[i].value;
                    currentEmail.options[i].remove();
                }
            }

            $('#btnAdd').click();
        });



    });
</script>

