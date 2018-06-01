<h3 class="col-8 pl-0">Email</h3>
<span class="reg-title">EMAIL DISTRIBUTION</span> <a href="">What is this?</a><br>

<div class="mt-2 mb-2">Email on Completion to</div>
    <div class="row">
        <div class="col-sm"><input type="email" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email"></div>
        <div class="col-sm align-self-center"><span id="addEmailLink" style="color: blue; cursor: pointer">Add +</span></div>
    </div>

{{--    @if(!empty($emails) || $emails != null)--}}
    @if(count($emails) > 0)
        <div class="mt-2 mb-2">Current List</div>
            <div class="row">
                <div class="col-sm">
                    <select name="email_list" id="email_list" multiple class="form-control">
                        @foreach($emails as $email)
                            <option value={{$email['email']}}>{{ $email['email'] }}</option>
                        @endforeach
                    </select>
                </div>
            <div class="col-sm reg-step-link"><span id="removeEmailLink" style="color: red; cursor: pointer">Remove -</span></div>
        </div>
    @else
        <div class="mt-2 mb-2">Current List</div>
        <div class="row">
            <div class="col-sm">
                <select name="email_list" id="email_list" multiple class="form-control"></select>
                {{--<ul>--}}
                {{--<li>john@professionals.com.au</li>--}}
                {{--<li>mary@professionals.com.au</li>--}}
                {{--<li>admin@professionals.com.au</li>--}}
                {{--<li>other@professionals.com.au</li>--}}
                {{--<li>other@professionals.com.au</li>--}}
                {{--</ul>--}}
            </div>
            <div class="col-sm reg-step-link"><span id="removeEmailLink" style="color: red; cursor: pointer">Remove -</span></div>
        </div>
    @endif