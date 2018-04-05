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
                <br><h3 class="border-title">Need Help?</h3>
                <hr>
                <h3 class="color-6600cc">FAQ’s (Frequently Asked Questions)</h3>
                <br>Top 10 FAQ’s
                {{--<form class="form-horizontal" method="POST" action="">--}}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <form class="form-horizontal" method="POST" action="">
                        <div class="row">

                            <div class="col-sm">
                                <select name="question" class="form-control" id="question">
                                    @foreach($faqs as $faq)
                                        <option value="{{ $faq->ID }} "> {{ $faq->question }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm">
                                <div class="text-right">
                                    <button type="button" id="btnFAQ" class="btn btn-primary btn-ff0033" data-toggle="modal" data-target="#FAQModal">
                                        {{--<button type="button" id="btnFAQ" class="btn btn-primary btn-ff0033" onclick>--}}
                                        GO
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if (session('success_email'))
                        <div class="alert alert-success" id="success_email_faq">
                            <b>{{ session('success_email') }}</b>
                        </div>
                    @endif
                    <br><h3 class="color-6600cc">Email</h3>
                    <div class="row">
                        <div class="col-sm">help@revid.com.au</div>
                        <div class="col-sm">
                            <div class="text-right">
                                <button type="button" class="btn btn-primary btn-6600cc" data-toggle="modal" data-target="#EmailModal" data-whatever="help@revid.com.au">
                                    EMAIL
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--<h3 class="color-6600cc">Online Live Chat</h3>--}}
                    {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                        {{--<textarea id="name" type="text" class="form-control" name="" placeholder="" required autofocus></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm">--}}
                            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" required autofocus placeholder="Start typing your message...">--}}
                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('name') }}</strong>--}}
                           {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm">--}}
                            {{--<div class="text-right">--}}
                                {{--<button type="submit" class="btn btn-primary btn-ff0033">--}}
                                    {{--SEND--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <br><h3 class="color-6600cc">Please telephone call me!</h3>
                    <form id="frmFAQEmail" class="form-horizontal" method="post" action=" {{ route('callmeHelp') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm">Please Call</div>
                            <div class="col-sm">
                                <input id="contact_name" type="text" class="form-control" name="contact_name" value=" {{ $fullname }}" required autofocus>
                            </div>
                            {{--<div class="col-sm">Change</div>--}}
                            <div class="col-sm"></div>
                        </div>
                        <!--or--><br>
                        <div class="row">
                            <div class="col-sm">Mobile</div>
                            <div class="col-sm">
                                <input id="contact_mobile" type="text" class="form-control" name="contact_mobile" value="{{ $agent->mobile }}" required autofocus>
                            </div>
                            {{--<div class="col-sm">Change</div>--}}
                            <div class="col-sm"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm"></div>
                            <div class="col-sm">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-6600cc">
                                        CALL
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- FAQ Modal -->
                <div class="modal fade" id="FAQModal"
                     tabindex="-1" role="dialog"
                     aria-labelledby="FAQModalLabel">
                    <div class="modal-dialog" role="document" style="max-width: 700px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">FAQ</h4>
                                <button type="button" class="close"
                                        data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p><b>Question: </b><div id="modal-question"></div></p>
                                <br>
                                <p><b>Answer:</b></p>
                                <div id="modal-answer"></div><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                        class="btn btn-default"
                                        data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Email Modal -->
                <div class="modal fade" id="EmailModal" tabindex="-1" role="dialog" aria-labelledby="EmailModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style="max-width: 600px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="EmailModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form role="form" id="sendFAQEmailAcct" class="form-horizontal" method="post" action=" {{ route('sendFAQEmailAcct') }}" novalidate>
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                                        <input type="text" name="recipient" class="form-control" id="recipient-name" value="help@revid.com.au" style="width: 100%" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="sender-name" class="col-form-label">Name:</label>
                                        <input type="text" name="sender_name" class="form-control" id="sender_name" style="width: 100%" placeholder="Sender's Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="sender-email" class="col-form-label">Email:</label>
                                        <input type="email" name="sender_email" class="form-control" id="sender_email" style="width: 100%" placeholder="Sender's Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" name="message" id="message-text" rows="5" style="width: 100%" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="btnSubmitEmail">Send message</button>
                                </div>
                                <input type="hidden" name="recipient_email" class="form-control" id="recipient_name" value="help@revid.com.au">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>

<script type="text/javascript">

    $(document).ready(function() {

        // $('#frmFAQEmail').bootstrapValidator({
        //
        //     feedbackIcons: {
        //         valid: 'glyphicon glyphicon-ok',
        //         invalid: 'glyphicon glyphicon-remove',
        //         validating: 'glyphicon glyphicon-refresh'
        //     },
        //     fields: {
        //         sender_name: {
        //             validators: {
        //                 notEmpty: {
        //                     message: 'Sender Name is required'
        //                 }
        //             }
        //         },
        //         sender_email: {
        //             validators: {
        //                 notEmpty: {
        //                     message: 'Sender Email is required'
        //                 }
        //             }
        //         },
        //         message: {
        //             validators: {
        //                 notEmpty: {
        //                     message: 'Message is required'
        //                 }
        //             }
        //         },
        //     }
        // });

        setTimeout(function() {
            $('#success_email_faq').fadeOut('fast');
        }, 1000); // <-- time in milliseconds

        $('select[name="question"]').on('change', function() {
            var question = $('#question').val();
            console.log("the value of question is ", question);
            if(question) {
                $.ajax({
                    url: '/getFAQAjax/' + question,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //console.log("the return data is ", data);
                        //display on specific location of the modal the data
                        $("#modal-question").html(data.question);
                        $("#modal-answer").html(data.answer);
                    }
                });
            }
        });

        //process for FAQModal
        $('#FAQModal').on('show.bs.modal', function(event) {
            $('body').addClass('test');
        });

        $('#EmailModal').on('show.bs.modal', function(event) {

            $('body').addClass('test');
            $(this).find('form').validator()
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient = button.data('whatever'); // Extract info from data-* attributes
            var message = $('#message-text').val();
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('.modal-title').text('New message to ' + recipient);
        });

        $('#btnSubmitEmail').click(function(){

            $('#sendFAQEmailAcct').submit();
            // var recipient = $('#recipient-name').val();
            // var message = $('#message-text').val();
            //
            // //console.log("recipient: " + recipient + " message is: " + message);
            // //$('#formfield').submit();
            // $.ajax({
            //     url: '/sendFAQEmail/' + recipient + '/' + message,
            //     type: "GET",
            //     dataType: "json",
            //     success:function(data) {
            //         //console.log("the return data is ", data);
            //         //display on specific location of the modal the data
            //         //$("#modal-question").html(data.question);
            //         //$("#modal-answer").html(data.answer);
            //     }
            // });
        });


    });

</script>
