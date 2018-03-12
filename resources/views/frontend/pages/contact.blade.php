@extends('frontend.layouts.main')

@section('content')
    <div class="container" id="content">
        <div class="contact">
        <h1>Contact</h1>
            <div class="row">
              <div class="col col-lg-4"><img src={{ asset('storage/revid-icon-v2.png') }} /></div>
              <div class="col-12 col-lg-3"><b>REVid System Pty LTd</b><br>ACN 111 076 254</div>
              <div class="col col-lg-5"> 
                    <p>Suite 90, 102 Railway Street<br>
                    West Perth<br>
                    Western Australia 6005<br>
                    Telephone: 1300 100 333<br>
                    Email: corporate@revid.com.au<br></p>
              </div>
            </div>
            <div class="border-bot">
                <div class="row">
                    <div class="col-sm-8">
                       <h3>Terms and Conditions</h3>
                        <div class="row">
                            <div class="col-6 col-sm-1">Dated</div>
                            <div class="col-6 col-sm-4">October 2017</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-1">Version</div>
                            <div class="col-6 col-sm-4">1.1</div>
                        </div>
                        Use of the system is governed by the<br>
                        REVid Systems Terms and Conditions.
                    </div>
                    <div class="col-sm-4 d-flex align-items-end">
                     <a href="" class="btn btn-primary w-100">Click here for full Terms and Conditions</a>
                    </div>
                </div>
            </div>
            
            <div class="border-bot">
            <div class="row">
                <div class="col-sm-8">
                   <h3>Copyright</h3>
                   <br><br><br>
                </div>
                <div class="col-sm-4 d-flex align-items-end">
                 <a href="" class="btn btn-primary w-100">Click here for full Copyright Terms</a>
                </div>
            </div>
            </div>
            
            <div class="border-bot">
                <div class="row">
                    <div class="col-sm-8">
                       <h3>Privacy</h3>
                       <br><br><br>
                    </div>
                    <div class="col-sm-4 d-flex align-items-end">
                     <a href="" class="btn btn-primary w-100">Click here for full Privacy Terms</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@endsection
