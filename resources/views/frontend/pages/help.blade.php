@extends('frontend.layouts.main')

@section('content')
    <div class="container help-content">
        <h3 class="border-title">Need Help?</h3>
        <h3 class="color-6600cc">FAQ’s (Frequently Asked Questions)</h3>
        Top 10 FAQ’s
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
              
              <h3 class="color-6600cc">Email</h3>
              <div class="row">
                <div class="col-sm">help@revid.com.au</div>
                <div class="col-sm">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-6600cc">
                           EMAIL
                        </button>
                    </div>  
                </div>
              </div>
              <h3 class="color-6600cc">Online Live Chat</h3>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <textarea id="name" type="text" class="form-control" name="" placeholder="" required autofocus></textarea>
              </div>
              <div class="row">
                <div class="col-sm">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">      
                      <input id="name" type="text" class="form-control" name="name" required autofocus placeholder="Start typing your message...">
                      @if ($errors->has('name'))
                           <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                           </span>
                      @endif
                   </div>  
                </div>
                <div class="col-sm">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-ff0033">
                           SEND
                        </button>
                    </div>  
                </div>
              </div>
              <h3 class="color-6600cc">Please telephone call me!</h3>
              <div class="row">
                <div class="col-sm">Please Call</div>
                <div class="col-sm"><input id="name" type="text" class="form-control" name="name" required autofocus></div>
                <div class="col-sm">Change</div>
              </div>
              or<br>
              <div class="row">
                <div class="col-sm">Mobile</div>
                <div class="col-sm"><input id="name" type="text" class="form-control" name="name" required autofocus></div>
                <div class="col-sm">Change</div>
              </div>
              <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-6600cc">
                           CALL
                        </button>
              </div>  
          </div>

          <!-- FAQ Modal -->
          <div class="modal fade" id="FAQModal"
             tabindex="-1" role="dialog"
             aria-labelledby="FAQModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">FAQ</h4>
                    </div>
                    <div class="modal-body">
                        <p>Question:</p>
                        <div id="modal-question"></div><br>
                        <p>Answer:</p>
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
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EmailModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
          </div>
        {{--</form>--}}
    </div>

@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>--}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $("#btnFAQ").click(function() {

            var question = $('#question').val();
            if(question){
                $.ajax({
                    url: '/getFAQAjax/' + question,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        // console.log("the return data is ", data);
                        $('#FAQModal').on('show.bs.modal', function(e) {
                            //display on specific location of the modal the data
                            $("#modal-question").html(data.question);
                            $("#modal-answer").html(data.answer);

                        });
                    }
                });
            }

        });
    });

</script>
