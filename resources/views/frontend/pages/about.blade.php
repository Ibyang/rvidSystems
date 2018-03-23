@extends('frontend.layouts.main')

@section('content')
    <div class="container" id="content">
        <h1 class="c-333">About</h1>

        <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
            erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
            consequat.
            <br><br>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            aliquam erat volutpat.</p>

        <div class="border-bot">
            <div class="row">
                <div class="col text-center">
                    <h1 class="c-6600cc mb-0">What is it?</h1>
                    <b>(Easy and valuable)</b><br><br>
                    <img src={{ asset('storage/what-is-revid.jpg') }} />
                </div>
                <div class="col text-center">
                    <h1 class="c-6600cc mb-0">How to join?</h1>
                    <b>(Get started today)</b><br><br>
                    <img src={{ asset('storage/how-to-join.jpg') }} />
                </div>
                <div class="col text-center">
                    <h1 class="c-6600cc mb-0">How the system works?</h1>
                    <b>(It’s easy)</b><br><br>
                    <img src={{ asset('storage/how-system-works.jpg') }} />
                </div>
            </div>
        </div>
        <h1 class="c-333 mb-0 mt-2">About the REVid Product</h1>

        <p class="text-justify border-bot">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
            erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
            consequat.
            <br><br>
            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
            vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            <br><br>
            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
            aliquam erat volutpat.</p>

        <div class="row">
            <div class="col">
                <h1 class="c-333">What is DriveBy</h1>

                <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                    ex ea commodo consequat</p>
            </div>
            <div class="col">
                <h1 class="c-333">What is LookFirst</h1>

                <p class="text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                    diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                    aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                    nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                    ex ea commodo consequat</p>
            </div>
        </div>

        @include('frontend.pages.frontpage.use-revid')

        @include('frontend.register.register-info')

        @include('frontend.register.register-form')
    </div>

    @include('frontend.pages.frontpage.footer')

@endsection
