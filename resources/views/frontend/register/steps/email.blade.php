<h3 class="col-8 pl-0">Email</h3>
<span class="reg-title">EMAIL DISTRIBUTION</span> <a href="">What is this?</a><br>

<div class="mt-2 mb-2">Email on Completion to</div>
    <div class="row">
        <div class="col-sm"><input type="email" class="form-control" name="emailAdd" id="emailAdd" placeholder="Enter Email"></div>
        <div class="col-sm align-self-center"><span id="addEmailLink" style="color: blue; cursor: pointer">Add +</span></div>
    </div>

    <div class="mt-2 mb-2">Current List</div>
    <div class="row">
        <div class="col-sm">

            @if(is_array($emails))
                <?php
                $cnt_email = count($emails);
                $ctr = 0; ?>
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
