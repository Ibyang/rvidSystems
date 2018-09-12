<<<<<<< HEAD
<div class="border-top-999 pt-3 mt-3 col-8 p-0">
    <span class="reg-title pr-2">EMAIL DISTRIBUTION</span> <a class="c0066ff" data-toggle="collapse" href="#Expanded12" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a><br>
    <div class="collapse rules-contents col-11 pl-0" id="Expanded12">
        <div class="rules-arrow3"></div>
        <div class="ExpandForm text-justify bg-fff mb-3 p-3"> 
            <b>What is Email Distribution?</b>

            <p class="mt-2"><b>Email Distribution</b> is a service provided by the REVid System and available on request.
            The email distribution system is designed to automatically email the REVid Video on
            completion to your email distribution Current List</p>
            <p>You Add+/Remove- to update your email distribution Current List as required. This could
            include, your colleagues and support staff, prospective clients or other interested parties.</p>
            <p class="m-0">This is a value-added service and a fee applies.</p>
        </div>           
    </div>
    <div class="d-flex flex-row my-3">
        <div>
            <div class="custom-control custom-checkbox standard pl-0">
                <input type="checkbox" class="custom-control-input" id="customCheck27">
                <label class="custom-control-label" for="customCheck27"></label>
            </div>
        </div>
        <div class="pl-3 line-height17 font13"><b>EMAIL DISTRIBUTION</b>. Please send automatically to my Email List below <br>
        the completed Video production links.</div>
    </div>
    <div class="my-2 color-424244 font-t-ms"><b>Email List</b></div>
    <div class="row">
            <div class="col-sm-10 pr-2"><input type="email" name="email" placeholder="Enter Email" class="form-control"></div>
            <div class="col-sm align-self-center"><a href=""><b>Add +</b></a></div>
    </div>
    <div class="row mt-3 mx-0">
            <div class="col-sm-10 h-100 email-scroll @if (Request::segment(1) == 'account') {{'m-0'}} @endif">
                <ul>
                    <li>john@professionals.com.au</li>
                    <li>mary@professionals.com.au</li>
                    <li>admin@professionals.com.au</li>
                    <li>other@professionals.com.au</li>
                    <li>other@professionals.com.au</li>
                </ul>
            </div>
            <div class="col-sm reg-step-link"><a href=""><span>Remove -</span></a></div>
    </div>
=======
<h3 class="col-8 pl-0 mt-4">Email</h3>
<span class="reg-title pr-2">EMAIL DISTRIBUTION</span> <a class="c0066ff" data-toggle="collapse" href="#Expanded12" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a><br>
<div class="collapse rules-contents @if (Request::segment(1) != 'account') {{'col-8 pl-0'}} @endif" id="Expanded12">
    <div class="rules-arrow3"></div>
    <div class="ExpandForm text-justify bg-fff mb-3 @if (Request::segment(1) != 'account') {{'p-3'}} @endif"> 
        <b>What is Email Distribution?</b>
        
        <p class="mt-2"><b>Email Distribution</b> is a service provided by the REVid System and available on request.
        The email distribution system is designed to automatically email the REVid Video on
        completion to your email distribution Current List</p>
        <p>You Add+/Remove- to update your email distribution Current List as required. This could
        include, your colleagues and support staff, prospective clients or other interested parties.</p>
        <p>This is a value-added service and a fee applies.</p>
    </div>           
</div>
<div class="my-2 font-weight-bold">Email on Completion to</div>
<div class="row">
        <div class="col-sm-5 pr-0 @if (Request::segment(1) == 'account') {{'pl-0'}} @endif">
            <input type="email" name="email" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email">
        </div>
        <div class="col-sm align-self-center">
            <!-- <a href=""><b>Add +</b></a> -->
            <span id="addEmailLink" style="float: left; color: blue; cursor: pointer"><b>Add +</b></span>
        </div>
</div>
<div class="my-2"><b>Current List</b></div>
<div class="row m-0">
        <div>

            @if(is_array($emails))
                <select name="email_list" id="email_list" multiple class="form-control" style="width: 408px">
                    @foreach($emails as $em)
                        <option value="{{ $em }}">{{ $em }}</option>
                    @endforeach
                </select>
            @else
                <select name="email_list" id="email_list" multiple class="form-control" style="width: 408px">
                    <option value="">No emails on the list...</option>
                </select>
            @endif
    
            <!-- <ul>
                <li>john@professionals.com.au</li>
                <li>mary@professionals.com.au</li>
                <li>admin@professionals.com.au</li>
                <li>other@professionals.com.au</li>
                <li>other@professionals.com.au</li>
            </ul> -->
        </div>
        <div class="col-sm reg-step-link">
            <!-- <a href=""><span>Remove -</span></a> -->
            <span id="removeEmailLink" style="color: red; cursor: pointer">Remove -</span>
        </div>
>>>>>>> ffde0e72edfff07fd2a730d34e80d0599d0c4754
</div>