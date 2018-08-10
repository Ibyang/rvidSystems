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


    <!-- embed ZOHO SalesIQ Code -->
        <script type="text/javascript"> var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"6f90467a55e8bcc608507f98c193aa302ea2173b1f0a472164107003e49e3fb7", values:{},ready:function(){}}; var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true; s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>"); </script>
    
    {{--<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>--}}
  </head>
  <body>
      @include('frontend.pages.frontpage.header')

      @include('frontend.pages.frontpage.video')

      @include('frontend.pages.frontpage.join')

      @include('frontend.pages.frontpage.info')

      @include('frontend.pages.frontpage.why-use-revid')

      @include('frontend.pages.frontpage.footer')
  </body>

</html>
