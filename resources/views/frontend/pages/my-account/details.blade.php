<h3>My Account</h3>
            
<h3>Your Details</h3>
<form>
    <div class="row">
        <div class="col-8"><input type="text" class="form-control" name="name" Placeholder="" value="{{ $fullname }}" required autofocus></div>
        <div class="col-4">Name</div>
    </div>
    <div class="row">
        <div class="col-8"><input type="text" class="form-control" name="title" Placeholder="" value="{{ $agent->role_title }}" required autofocus></div>
        <div class="col-4">Title</div>
    </div>
    <div class="row">
        <div class="col-8"><input type="text" class="form-control" name="agency" Placeholder="" value="{{ $agent->group }}" required autofocus></div>
        <div class="col-4">Agency</div>
    </div>
    <div class="row">
        <div class="col-8"><input type="text" class="form-control" name="company" Placeholder="" value="{{ $agent->company }}" required autofocus></div>
        <div class="col-4">Company (if applicable)</div>
    </div>
    <h3>Password</h3>
    <div class="row">
        <div class="col-8"><input type="password" class="form-control" name="password" Placeholder="" value="{{ $passwd }}" required autofocus></div>
        <div class="col-4 align-middle"><a href="">Change</a></div>
    </div>
</form>