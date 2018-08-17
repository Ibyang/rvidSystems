@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-0" id="content">
        <h1 class="c-6600cc">How the System Works</h1>

        <div class="row">
            <div class="col-md-auto"><a href= {{ route('how-system-works-video') }}><img src={{ asset('storage/how-system-works.jpg') }} /></a></div>
            <div class="col-sm line-height19 text-justify">
                <p>The  system  provides  you  with  3  core  functions.  It  lets  you  Set-up  and  Manage  your  professional  Details,  including  Templates,  Selections  (such  as  voice  or  music  types)  and  Preferences.  It  acts  as  the  platform  to  <b>Order  and  Manage</b>  your  Video  productions  and  administrates,  tracks  and  delivers.  It  gives  you  <b>Value-added  Service  Options</b>;  such  as  Rush!  Or  Surge,  Uploads  to  Sites  or  Social  Media  and  Email  and  Broadcast  systems  you  can  take  advantage  of.</p>
                <p>REVid  then  uses  the  system  to  <b>Communicate  and  Manage</b>  with  you  as  we  produce  your  Video  and  execute  your  selected  options.  <b>It’s  all  online  and  onsite</b></p>
            </div>
        </div>

        @include('frontend.register.register-join-info')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>
    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')
    </div>

@endsection


{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/js/pricing-register.js') }}" type="text/javascript"></script>

@stop