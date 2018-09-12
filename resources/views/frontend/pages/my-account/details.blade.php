<h3 class="my-account-title">My Account</h3>
<form id="form-details" class="border-bot2 pb-3" method="POST" action="{{ route('editAccount') }}">
    {{ csrf_field() }}
    <input type="hidden" name="email" value=" {{ $agent->email }}">
    <h3 class="mb-3">Your Details</h3>
    <div class="border-bot2 pb-3">
        <div class="d-flex flex-column bd-highlight mb-3 col-9 p-0">
          <div><input type="email" class="form-control" name="" Placeholder="Email" required autofocus value="{{ $agent->email }}"></div>
          <div class="my-3"><input type="text" class="form-control" name="" Placeholder="First Name" required autofocus value="{{ $agent->firstname }}"></div>
          <div><input type="text" class="form-control" name="" Placeholder="Last Name" required autofocus value="{{ $agent->lastname }}"></div>
          <div class="my-3"><input type="text" class="form-control" name="" Placeholder="Mobile Telephone" required autofocus value="{{ $agent->mobile }}"></div>
          <div><input type="text" class="form-control" name="" Placeholder="Address 1" required autofocus value="{{ $agent->address }}"></div>
          <div class="mt-3 mb-1"><input type="text" class="form-control" name="" Placeholder="Address 2" required autofocus value="{{ $agent->address2 }}"></div>
        </div>
        <div class="row m-r-l">
                <div class="col-sm l-g-m"><input type="text" class="form-control" name="" placeholder="Suburb" required value="{{ $agent->suburb }}"></div>
                <div class="col-sm l-g-m"><input type="text" class="form-control" name="" placeholder="State" required value="{{ $agent->state }}"></div>
                <div class="col-sm l-g-m pr-1"><input type="text" class="form-control" name="" placeholder="Post Code" required value="{{ $agent->postcode }}"></div>
                <div class="col-sm align-self-center"><a href="">Update Details</a></div>
        </div>
    </div>
    <div class="border-bot2 pb-3">
        <h3>Password</h3>
        <div class="d-flex flex-column bd-highlight mb-3 col-9 p-0">
          <div><input type="password" class="form-control" name="" Placeholder="Password" required autofocus value="{{ $passwd }}"></div>
        </div>
        <div class="row m-r-l">
                <div class="col-sm-9 pr-1"><input type="password" class="form-control" name="" Placeholder="Repeat Password" required autofocus value="{{ $passwd }}"></div>
                <div class="col-sm align-self-center"><a href="" onclick="event.preventDefault(); document.getElementById('form-details').submit();">Change</a></div>
        </div>
    </div>
</form>