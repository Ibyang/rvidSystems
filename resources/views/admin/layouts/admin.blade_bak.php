<?php
/**
 * Created by PhpStorm.
 * User: ivyO
 * Date: 21/02/2018
 * Time: 3:39 PM
 */
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>REVid Systems</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
  <!-- global css -->
  <link href="{{asset('assets/css/app.css')}}" rel="stylesheet" type="text/css" />
  <!-- end of global css -->
  @yield('header_styles')

</head>

<body class="skin-josh">
  @include('includes.header')

  <div class="wrapper row-offcanvas row-offcanvas-left">
    @include('includes.sidebar')

    <aside class="right-side">

      <!-- Notifications -->
      <div id="notific">
        @include('notifications')
      </div>

      <!-- Content -->
        @yield('content')

    </aside>
  </div>
  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
  </a>

  <!-- global js -->
  <script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
  <!-- end of global js -->
  <!-- begin page level js -->
  <script>

      $(document).ready(function() {
          $('#back-to-top').on('hover', function () {
              $('.tooltip').addClass('display');
          });
      });
  </script>
  @yield('footer_scripts')

</body>

</html>