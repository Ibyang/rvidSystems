 <div class="join-container bg-660">
      <div class="container">
          <h3 class="text-center c-414 text-white">Join Today <span>FREE 30day Trial Membership</span> today
                <br>and receive your first video for $0</h3>
           <form method="post" action="{{ route('get-started-step1') }}">
               {{ csrf_field() }}
                  <div class="row">
                        <div class="col-8"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
                        <div class="col-4"><button type="submit" class="btn btn-primary">Free Offer</button></div>
                  </div>
            </form>
      </div>
  </div>