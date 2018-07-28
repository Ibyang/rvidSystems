@extends('frontend.layouts.main')

@section('content')
    <div class="container" id="content">
        <div class="contact">
            <h1 class="c-6600cc">Contact</h1>
            <div class="border-bot">
                <div class="row">
                    <div class="col-sm"><img src={{ asset('storage/revid-icon-v2.png') }} /></div>
                    <div class="col-sm"><h5><b>REVid System Pty LTd</b><br>ABN 94 111 076 254</h5></div>
                    <div class="col-sm">
                        <b>Suite 90, 102 Railway Street<br>
                        West Perth<br>
                        Western Australia 6005<br><br>
                        Telephone: 1300 100 111<br>
                        Email: corporate@revid.com.au</b><br>
                    </div>
                </div>
            </div>
            <div class="border-bot">
                <div class="row">
                    <div class="col-sm-8 font-weight-bold">
                        <h3>Terms and Conditions</h3>
                        <div class="row">
                            <div class="col-6 col-sm-2">Dated</div>
                            <div class="col-6 col-sm-4">October 2017</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-2">Version</div>
                            <div class="col-6 col-sm-4">1.1</div>
                        </div><br>
                        <p>Use of the system is governed by the<br>
                            REVid Systems Terms and Conditions.</p>
                    </div>
                    <div class="col-sm-4 d-flex align-items-end">
                        <a href="{{ route('terms-condition') }}" class="btn btn-primary w-100">Click here <span>for full Terms and Conditions</span></a>
                    </div>
                </div>
            </div>
            <div class="border-bot">
                <div class="row">
                    <div class="col-sm-8">
                        <h3>Copyright</h3>
                        <p class="color-ccc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                            Pellentesque accumsan enim ac sagittis laoreet.</p>
                    </div>
                    <div class="col-sm-4 d-flex align-items-end">
                        <a href="{{ route('copyright') }}" class="btn btn-primary w-100">Click here <span>full Copyright Terms</span></a>
                    </div>
                </div>
            </div>
            <div class="border-bot">
                <div class="row">
                    <div class="col-sm-8">
                        <h3>Privacy</h3>
                        <p class="color-ccc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                            Pellentesque accumsan enim ac sagittis laoreet.</p>
                    </div>
                    <div class="col-sm-4 d-flex align-items-end">
                        <a href="{{ route('privacy-terms') }}" class="btn btn-primary w-100">Click here <span>for full Privacy Terms</span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

