 <div class="join-container bg-660">
     <div class="container">
         <h3 class="text-center c-414 text-white">Your First Real Estate Video is <span>FREE</span>, Try Today!</h3>
         <!-- <form method="post" action="{{ route('get-started-step1') }}"> -->
         <form method="post" method="post" action="{{ route('getStarted') }}">
         	 {{ csrf_field() }} 	
             <div class="row">
                 <div class="col-sm-8"><input type="email" name="email" class="form-control" placeholder="Add Your Email Address" required></div>
                 <div class="col-sm-4"><button type="submit" class="btn btn-primary">TRY TODAY</button></div>
             </div>
         </form>
     </div>
 </div>