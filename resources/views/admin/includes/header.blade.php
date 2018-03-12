<?php
/**
 * Created by PhpStorm.
 * User: ivyO
 * Date: 21/02/2018
 * Time: 4:09 PM
 */

?>

<!-- Main Header -->
<header class="header">
    <a href="index.html" class="logo">
        {{--<img src="{{asset('assets/img/logo.png')}}" alt="Logo">--}}
        <img src="" alt="Logo">
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
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(!empty($pic))
                            <img src="/uploads/profile_pics/{{ $pic }}" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                        @else
                            <img src="{{asset('assets/img/authors/avatar_placeholder_small.png')}}" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                        @endif

                        <div class="riot">
                            <div>
                                {{ $fullname }}
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            @if(!empty($pic))
                                <img src="/uploads/profile_pics/{{ $pic }}" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
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
</header>

<!-- end of Main Header -->