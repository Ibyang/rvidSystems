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
</div>