@extends('frontend.layouts.main')

@section('content')

    <div class="container pb-2" id="content">
        <div class="border-bot3">
            <h1 class="c-6600cc">What is REVid?</h1>
            <div class="row">
                <div class="col-md-auto"><a href=" {{ route('revid-video') }} "><img src={{ asset('storage/what-is-revid.jpg') }} /></a></div>
                <div class="col-sm-3 line-height20">
                    <ul class="list ml-4 text-justify">
                        <li>We  <b>turn  your  online  listings  into  Video</b>  so  you  can  use  them  in  social  media,  online,  marketing  and  display  presentations.</li>
                        <li class="mt-2">Low cost video options</li>
                    </ul>
                </div>
                <div class="col-sm line-height20 px-5">
                    <ul class="list">
                        <li><b>Easy + Fast</b> with <b>No Fuss</b></li>
                        <li class="mt-2"><b>Valuable</b>; you  get  4  video  formats  fully  hosted</li>
                    </ul>
                    <div class="d-flex flex-column">
                        <div class="py-3">
                            <div class="row">
                                <div class="col-sm-2">Plus</div>
                                <div class="col-sm"><img class="img-fluid" src={{ asset('storage/drive-look-logo.png') }}></div></div>
                        </div>
                    </div>
                    Included  with  your  monthly  membership
                </div>
            </div>
        </div>

        @include('frontend.pages.frontpage.info')

    </div>

    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')

@endsection
