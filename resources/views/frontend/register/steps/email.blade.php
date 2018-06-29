<h3 class="col-8 pl-0">Email</h3>
<span class="reg-title">EMAIL DISTRIBUTION</span> <a data-toggle="collapse" href="#emailExpanded" role="button" aria-expanded="false" aria-controls="collapseExample">What is this?</a><br>

<div class="collapse" id="emailExpanded" style="width: 65%;">
    <div class="rules-arrow" style="margin-left: 35%"></div>
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

<div class="mt-2 mb-2">Email on Completion to</div>
    <div class="row">
        <div class="col-sm"><input type="email" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email"></div>
        <div class="col-sm align-self-center"><span id="addEmailLink" style="color: blue; cursor: pointer">Add +</span></div>
    </div>

    <div class="mt-2 mb-2">Current List</div>
    <div class="row">
        <div class="col-sm">

            @if(is_array($emails))
                <select name="email_list" id="email_list" multiple class="form-control">
                    @foreach($emails as $em)
                        <option value="{{ $em }}">{{ $em }}</option>
                    @endforeach
                </select>
            @else
                <select name="email_list" id="email_list" multiple class="form-control" style="width: 340px">
                    <option value="">No emails on the list...</option>
                </select>
            @endif

        </div>
        <div class="col-sm reg-step-link"><span id="removeEmailLink" style="color: red; cursor: pointer">Remove -</span></div>
    </div>
