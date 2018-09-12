@extends('frontend.layouts.main')

@section('content')
    <div class="container help-content">
        <h3 class="border-title font-weight-bold mt-3">Need Help?</h3>
        <h3 class="color-6600cc">FAQ’s (Frequently Asked Questions)</h3>
        Top 10 FAQ’s
        <!-- <form class="form-horizontal register-form form-live-chat" method="POST" action=""> -->
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <form class="form-horizontal" method="POST" action="">
                    <div class="row mb-5">
                        <div class="col-sm-7">
                            <select name="question" class="form-control" id="question">
                                @foreach($faqs as $faq)
                                    <option value="{{ $faq->ID }} "> {{ $faq->question }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm">
                            <div class="text-right">
                                <!-- <button type="submit" class="btn btn-primary btn-ff0033" > -->
                                <button type="button" id="btnFAQ" class="btn btn-primary bg-009900 p-0-28 btn-no-border b-radius-7" data-toggle="modal" data-target="#FAQModal">    
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
                <h3 class="color-6600cc">Email</h3>
                <div class="row mb-4">
                    <div class="col-sm">help@revid.com.au</div>
                    <div class="col-sm">
                        <div class="text-right">
                            <!-- <button type="submit" class="btn btn-primary btn-6600cc"> -->
                            <button type="button" class="btn btn-primary btn-6600cc" data-toggle="modal" data-target="#EmailModal" data-whatever="help@revid.com.au">    
                                EMAIL
                            </button>
                        </div>
                    </div>
                </div>
                <!-- <h3 class="color-6600cc">Online Live Chat</h3>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} m-0">
                    <textarea id="name" type="text" row="15" class="form-control" name="" placeholder="" required autofocus></textarea>
                </div>
                <div class="row form-live-text py-3 m-0">
                    <div class="col-sm">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-0">
                            <input id="name" type="text" class="form-control form-input-n-b" name="name" required autofocus placeholder="Start typing your message...">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                           </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-ff0033">SEND</button>
                        </div>
                    </div>
                </div> -->
                <h3 class="color-6600cc mt-4">Please telephone call me!</h3>
                <form id="callmeEmail" class="form-horizontal" method="post" action=" {{ route('callmeEmail') }}">
                    <div class="d-flex flex-column">
                        <div>
                            <div class="d-flex flex-row">
                                <div class="pl-0 align-self-center">Please Call</div>
                                <div class="p-2 w-50"><input id="name" type="text" class="form-control" name="contact_name" required autofocus></div>
                                <div class="p-2 align-self-center"><a href="">Change</a></div>
                            </div>
                        </div>
                        <div class="py-2">or</div>
                        <div>
                            <div class="d-flex flex-row">
                                <div class="pr-4 align-self-center">Mobile</div>
                                <div class="pl-3 w-50"><input id="name" type="text" class="form-control" name="contact_mobile" required autofocus></div>
                                <div class="px-3 align-self-center"><a href="">Change</a></div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-6600cc">CALL</button>
                        </div>
                    </div>
                </form>    
            </div>
        <!-- </form> -->


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
                    <form role="form" id="frmFAQEmail" class="form-horizontal" method="post" action=" {{ route('sendFAQEmail') }}" novalidate>
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



@endsection

{{-- page level scripts --}}
@section('footer_scripts')

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
                            url: './getFAQAjax/' + question,
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

                    $('#frmFAQEmail').submit();
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


@stop
