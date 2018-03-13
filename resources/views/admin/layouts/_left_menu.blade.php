<ul id="menu" class="page-sidebar-menu">
    <li {!! (Request::is('admin') ? 'class="active"' : '') !!}>
        <a href=" {{ route('admin') }} ">
            <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li {!! (Request::is('order') || Request::is('standard') || Request::is('premium') ? 'class="active"' : '') !!}>
        <a href="#">
            <i class="livicon" data-name="folder-add" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
            <span class="title">Orders</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('order') ? 'class="active"' : '') !!}>
                <a href="{{ route('order.index') }}">
                    <i class="fa fa-angle-double-right"></i> Generic
                </a>
            </li>
            <li {!! (Request::is('standard') ? 'class="active"' : '') !!}>
                <a href="{{ route('standard') }}">
                    <i class="fa fa-angle-double-right"></i> Standard
                </a>
            </li>
            <li {!! (Request::is('premium') ? 'class="active"' : '') !!}>
                <a href="{{ route('premium') }}">
                    <i class="fa fa-angle-double-right"></i> Premium
                </a>
            </li>
        </ul>
    </li>
    @if($role == 'Administrator')
        <li {!! (Request::is('content') || Request::is('socialmedia') ? 'class="active"' : '') !!}>
            <a href="#">
                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                <span class="title">Content Management</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="sub-menu">
                <li {!! (Request::is('content') ? 'class="active"' : '') !!}>
                    <a href="{{ route('content.index') }}">
                        <i class="fa fa-angle-double-right"></i> Content Pages
                    </a>
                </li>
                <li {!! (Request::is('socialmedia') ? 'class="active"' : '') !!}>
                    <a href="{{ route('socialmedia.index') }}">
                        <i class="fa fa-angle-double-right"></i> Social Media Links
                    </a>
                </li>
            </ul>
        </li>
    @endif
    <li {!! (Request::is('image') ? 'class="active"' : '') !!}>
        <a href="{{ route('image') }}">
            <i class="livicon" data-name="image" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
            <span class="title">Image Files</span>
        </a>
    </li>
    <li {!! (Request::is('audio') ? 'class="active"' : '') !!}>
        <a href="{{ route('audio') }}">
            <i class="livicon" data-name="music" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Audio Files</span>
        </a>
    </li>
    <li {!! (Request::is('video') ? 'class="active"' : '') !!}>
        <a href="{{ route('video') }}">
            <i class="livicon" data-name="microphone" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            <span class="title">Video Files</span>
        </a>
    </li>
    @if($role == 'Administrator')
        <li {!! (Request::is('agents') || Request::is('production') ? 'class="active"' : '') !!}>
            <a href="#">
                <i class="livicon" data-name="users" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                <span class="title">Users</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="sub-menu">
                <li {!! (Request::is('agents') ? 'class="active"' : '') !!}>
                    <a href="{{ route('agents.index') }}">
                        <i class="fa fa-angle-double-right"></i> Agents
                    </a>
                </li>
                <li {!! (Request::is('production') ? 'class="active"' : '') !!}>
                    <a href="{{ route('production.index') }}">
                        <i class="fa fa-angle-double-right"></i> Production
                    </a>
                </li>
            </ul>
        </li>
    @endif
</ul>