<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>REVid Systems</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
  </head>
  <body>
      @include('frontend.pages.frontpage.header')

      @include('frontend.pages.frontpage.video')

      @include('frontend.pages.frontpage.join')

      @include('frontend.pages.frontpage.info')

      @include('frontend.pages.frontpage.info-form')
      
      @include('frontend.pages.frontpage.use-revid')

      @include('frontend.pages.frontpage.footer')
  </body>

</html>
