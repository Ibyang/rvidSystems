@extends('frontend.layouts.main')

@section('content')
    <div class="container pb-2" id="content">
        <div class="border-bot pt-1">
            <h1 class="c-333">What is LookFirst</h1>
            <div class="row">
                <div class="col-sm">
                    <p class="text-justify font-myriad-pro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                        volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                        molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                        eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
                        zzril delenit augue duis dolore te feugait nulla facilisi.
                        Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                </div>
                <div class="col-sm">
                    <a href={{ route('look-first-video') }}><img class="img-fluid" src={{ asset('storage/look-first.png') }} /></a>
                </div>
            </div>
        </div>
        <h1 class="c0066ff mt-3">It “Supercharges” the value of the Signboard</h1>
        <div class="d-flex flex-column border-bot">
            <div><img class="img-fluid" src={{ asset('storage/look-first-map.png') }} /></div>
            <div class="pt-4 text-center"><a href="" class="btn btn-primary btn-inside font-weight-bold col-sm-3">SEE INSIDE NOW</a></div>
        </div>
        @include('frontend.register.register-join-info')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>
    @include('frontend.pages.frontpage.why-use-revid')

    @include('frontend.pages.frontpage.footer')
    </div>
@endsection
