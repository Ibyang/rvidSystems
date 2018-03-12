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
        <div class="help-content">
            <h3 class="border-title">Need Help?</h3>
            <h3 class="color-6600cc">FAQ’s (Frequently Asked Questions)</h3>
            Top 10 FAQ’s
            <form class="form-horizontal" method="POST" action="">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <div class="row">
                    <div class="col-sm">
                        <select name="state" class="form-control">
                                <option>Question 1</option>
                        </select>
                    </div>
                    <div class="col-sm">
                      <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-ff0033">
                               GO
                            </button>
                        </div>
                    </div>
                  </div> 

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
            </form>
        </div>
    </div>
</div>
@endsection
