<h3 class="my-account-title">My Account</h3>
<h3>Your Details</h3>
<form id="form-details" class="border-bot2 pb-3" method="POST" action="{{ route('editAccount') }}">
    {{ csrf_field() }}
    <input type="hidden" name="email" value=" {{ $agent->email }}">
    <div class="row">
        <div class="col-9 pl-0"><input type="text" class="form-control" name="name" id="fullname" Placeholder="" value="{{ $fname }}" required autofocus></div>
        <div class="col-3 pl-1 align-self-center">Name</div>
    </div>
    <div class="row">
        <div class="col-9 pl-0"><input type="text" class="form-control" name="title" Placeholder="" value="{{ $agent->role_title }}" required autofocus></div>
        <div class="col-3 pl-1 align-self-center">Title</div>
    </div>
    <div class="row">
        <div class="col-9 pl-0"><input type="text" class="form-control" name="agency" id="agency" Placeholder="" value="{{ $agent->group }}" required autofocus></div>
        <div class="col-3 pl-1 align-self-center">Agency</div>
    </div>
    <div class="row">
        <div class="col-9 pl-0"><input type="text" class="form-control" name="company" id="company" Placeholder="" value="{{ $agent->name_agency }}" required ></div>
        <div class="col-3 pl-1 pr-0 align-self-center">Company (if applicable)</div>
    </div>
    <h3>Password</h3>
    <div class="row">
        <div class="col-9 pl-0"><input type="password" class="form-control" name="password" Placeholder="" value="{{ $passwd }}" required autofocus></div>
        <div class="col-3 pl-1 align-self-center"><a href="" onclick="event.preventDefault(); document.getElementById('form-details').submit();">Change</a></div>
    </div>
</form>