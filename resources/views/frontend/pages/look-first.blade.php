@extends('frontend.layouts.main')

@section('content')
    <div class="container" id="content">
        <div class="border-bot">
            <div class="row">
              <div class="col">
                  <h1 class="c-333">What is LookFirst</h1>
                  <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
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
              <div class="col">
                  <a href={{ route('look-first-video') }}><img src={{ asset('storage/look-first.png') }} /></a>
              </div>
            </div>
        </div>
        <h1 class="c0066ff">It “Supercharges” the value of the Signboard</h1>
        <img src={{ asset('storage/look-first-map.png') }} />
        <div class="text-center">
            <a href="" class="btn btn-danger">SEE INSIDE NOW</a>
        </div>

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')

    </div>

    @include('frontend.pages.frontpage.info-form')

    @include('frontend.pages.frontpage.use-revid')

    @include('frontend.pages.frontpage.footer')


@endsection
