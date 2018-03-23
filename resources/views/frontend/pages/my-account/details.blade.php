<h3>My Account</h3>
            
<h3>Your Details</h3>

<form id="form-details" class="border-bot2 pb-3" method="POST" action="{{ route('registerAgent.store') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-9 pl-0"><input type="text" class="form-control" name="name" Placeholder="" value="{{ $fullname }}" required autofocus></div>
        <div class="col-3 align-self-center">Name</div>
    </div>
    <div class="row">
        <div class="col-9 pl-0"><input type="text" class="form-control" name="title" Placeholder="" value="{{ $agent->role_title }}" required autofocus></div>
        <div class="col-3 align-self-center">Title</div>
    </div>
    <div class="row">
        <div class="col-9 pl-0"><input type="text" class="form-control" name="agency" Placeholder="" value="{{ $agent->group }}" required autofocus></div>
        <div class="col-3 align-self-center">Agency</div>
    </div>
    <div class="row">
        <div class="col-9 pl-0"><input type="text" class="form-control" name="company" Placeholder="" value="{{ $agent->name_agency }}" required ></div>
        <div class="col-3 align-self-center">Company (if applicable)</div>
    </div>
    <h3>Password</h3>
    <div class="row">
        <div class="col-9 pl-0"><input type="password" class="form-control" name="password" Placeholder="" value="{{ $passwd }}" required autofocus></div>
        <div class="col-3 align-self-center"><a href="" onclick="event.preventDefault(); document.getElementById('form-details').submit();">Change</a></div>
    </div>
</form>