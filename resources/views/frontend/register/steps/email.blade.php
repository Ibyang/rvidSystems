<h3 class="col-8 pl-0 mt-4">Email</h3>
<span class="reg-title pr-2">EMAIL DISTRIBUTION</span> <a data-toggle="collapse" href="#emailExpanded" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a><br>

<div class="collapse" id="emailExpanded">
    <div class="rules-arrow" style="margin-left: 40%"></div>
    <div class="ExpandForm p-3" style="background-color: white">
        <h6>What is Email Distribution</h6>
        <p style="text-align: justify; font-size: small">
            <b>Email Distribution</b> is a service provided by the REVid System and available on request. The email
            distribution system is designed to automatically email the REVid Video on completion to your email
            distribution Current List.<br><br>
            You Add+/Remove- to update your email distribution Current List as required. This could include, your
            colleagues and support staff, prospective clients or other interested parties. <br><br>
            This is a value-added service and a fee applies.
        </p>
    </div>
</div><br>

<div class="my-2 font-weight-bold">Email on Completion to</div>
<div class="row">
    <div class="col-sm-5 pr-0 @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
        {{--<input type="email" name="email" class="form-control">--}}
        <input type="email" name="email" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email">
    </div>
    <div class="col-sm align-self-center">
        {{--<a href=""><b>Add +</b></a>--}}
        <span id="addEmailLink" style="float: left; color: blue; cursor: pointer"><b>Add +</b></span>
    </div>
</div>
<div class="my-2"><b>Current List</b></div>
<div class="row m-0">
    <!-- <div class="col-sm-5 pr-0 @if (Request::segment(1) == 'account') {{'m-0'}} @endif"> -->
    <div>     
        @if(is_array($emails))
            <select name="email_list" id="email_list" multiple class="form-control">
                @foreach($emails as $em)
                    <option value="{{ $em }}">{{ $em }}</option>
                @endforeach
            </select>
        @else
            <select name="email_list" id="email_list" multiple class="form-control" style="width: 270px">
                <option value="">No emails on the list...</option>
            </select>
        @endif
    </div>
    <div class="col-sm reg-step-link"><a href=""><span>Remove -</span></a></div>
</div><br>