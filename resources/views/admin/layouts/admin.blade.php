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
  {{--CSRF Token--}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- global css -->
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css" />
  <!-- end of global css -->
  @yield('header_styles')

</head>

<body class="skin-josh">
<!-- Main Header -->
<header class="header">
  <a href=" {{ route('admin') }}" class="logo">
    <img src="{{asset('assets/img/revid-icon-3.png')}}" alt="Logo">
    {{--<img src="" alt="Logo">--}}
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <div>
      <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <div class="responsive_nav"></div>
      </a>
    </div>
    <div class="navbar-right">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu rtl_list">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            @if(!empty($pic))
              <img src="uploads/profile_pics/{{ $pic }}" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
            @else
              <img src="{{asset('assets/img/authors/avatar_placeholder_small.png')}}" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
            @endif

            <div class="riot">
              <div>
                {{ $fullname }}
                <span><i class="caret"></i></span>
              </div>
            </div>
          </a>
          <ul class="dropdown-menu profile">
            <!-- User image -->
            <li class="user-header bg-light-blue">
              @if(!empty($pic))
                <img src="uploads/profile_pics/{{ $pic }}" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
              @else
                <img src="{{asset('assets/img/authors/avatar_placeholder_small.png')}}" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
              @endif
              <p class="topprofiletext">{{ $fullname }}</p>
            </li>
            <!-- Menu Body -->
            <li>
              <a href="{{ route('user.index') }}">
                <i class="livicon" data-name="user" data-s="18"></i> My Profile
              </a>
            </li>
            <li role="presentation"></li>
          {{--<li>--}}
          {{--<a href="#">--}}
          {{--<i class="livicon" data-name="gears" data-s="18"></i> Account Settings--}}
          {{--</a>--}}
          {{--</li>--}}
          <!-- Menu Footer-->
            <li class="user-footer">
              <div style="text-align: center">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="livicon" data-name="sign-out" data-s="18"></i>Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header><!-- end of Main Header -->
<div class="wrapper fixed_menu">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="left-side ">
    <section class="sidebar ">
      <div class="page-sidebar sidebar-nav">
        <div class="nav_icons">
          {{--<ul class="sidebar_threeicons">--}}
            {{--<li>--}}
              {{--<a href="{{ URL::to('admin/advanced_tables') }}">--}}
                {{--<i class="livicon" data-name="table" title="Advanced tables" data-loop="true"--}}
                   {{--data-color="#418BCA" data-hc="#418BCA" data-s="25"></i>--}}
              {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
              {{--<a href="{{ URL::to('admin/tasks') }}">--}}
                {{--<i class="livicon" data-name="list-ul" title="Tasks" data-loop="true"--}}
                   {{--data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>--}}
              {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
              {{--<a href="{{ URL::to('admin/gallery') }}">--}}
                {{--<i class="livicon" data-name="image" title="Gallery" data-loop="true"--}}
                   {{--data-color="#F89A14" data-hc="#F89A14" data-s="25"></i>--}}
              {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
              {{--<a href="{{ URL::to('admin/users') }}">--}}
                {{--<i class="livicon" data-name="user" title="Users" data-loop="true"--}}
                   {{--data-color="#6CC66C" data-hc="#6CC66C" data-s="25"></i>--}}
              {{--</a>--}}
            {{--</li>--}}
          {{--</ul>--}}
        </div>
        <div class="clearfix"></div>
        <!-- BEGIN SIDEBAR MENU -->
      @include('admin.layouts._left_menu')
      <!-- END SIDEBAR MENU -->
      </div>
    </section>
  </aside>
  <aside class="right-side">

    <!-- Notifications -->
    <div id="notific">
      @include('admin.notifications')
    </div>

    <!-- Content -->
    @yield('content')

  </aside>
  <!-- right-side -->
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button">
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
<!-- end page level js -->
</body>
</html>