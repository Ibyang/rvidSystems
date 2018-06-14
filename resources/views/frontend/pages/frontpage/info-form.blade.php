  <div class="join-container bg-eae">
      <div class="container">
           <h3 class="text-center c-414 font-weight-bold">Join Today</h3>
          <form method="post" action="{{ route('get-started-step1') }}">
              {{ csrf_field() }}
                  <div class="row">
                        <div class="col-8"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
                        <div class="col-4"><button type="submit" class="btn btn-primary">Start</button></div>
                  </div>
          </form>
      </div>
  </div>