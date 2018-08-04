<ul class="my-account-side">
    <li>
        <div class="d-inline-block align-top">
            @if($logo_pic != null || $logo_pic != '' || !empty($logo_pic))
                <img src="{{ $logo_pic }}" width="50" height="50">
                {{--<img src="{{ asset('storage/app/public/' . $logo_pic) }}" width="50" height="50">--}}
            @else
                <img src="{{ asset('storage/my-account-icon.jpg') }}">
                {{--<img src="{{ asset('storage/app/public/my-account-icon.jpg') }}">--}}
            @endif
        </div>
        <div class="d-inline-block">
            <span><b>{{ Auth::user()->name }}</b></span><br>
            <div class="account-position">{{ $agent->name_agency }}</div>
        </div>
    </li>
    <li>
        {{--<i class="account-icon my-creator {!! ((Request::segment(2) == 'make-video') ? 'my-creator-active' : 'my-creator') !!}"></i>--}}
        <i class="account-icon my-creator"></i>
        <a href=" {{ route('account-make-video') }}" style="text-decoration: none">Make Video</a>
    </li>
    <li>
        {{--<i class="account-icon {!! ((Request::segment(2) == 'my-videos') ? 'my-videos-active' : 'my-videos') !!}"></i>--}}
        <i class="account-icon my-videos"></i>
        <a href="{{ route('account-my-videos') }}" style="text-decoration: none">My Videos</a>
    </li>
    <li>
        {{--<i class="account-icon my-tracker {!! ((Request::segment(2) == 'video-tracker') ? 'my-tracker-active' : 'my-tracker') !!}"></i>--}}
        <i class="account-icon my-tracker"></i>
        <a href="{{ route('account-video-tracker') }}" style="text-decoration: none">My Video Tracker</a>
    </li>
    <li>
        <i class="account-icon my-account"></i>
        <a href="{{ route('account-home') }}" style="text-decoration: none">My Account</a>
    </li>
    
    <li>
        <i class="account-icon my-settings"></i>
        <a href="#">My Settings</a>
    </li>
        <li style="margin-left: 70px">
            <a href="{{ route('account-explore-templates') }}">Templates</a>
        </li>
        <li style="margin-left: 70px">
            <a href="{{ route('account-explore-pictures') }}" style="text-decoration: none">Pictures</a>
        </li>
        <li style="margin-left: 70px">
            <a href="{{ route('account-explore-voice-overs') }}" style="text-decoration: none">Voice Overs</a>
        </li>
        <li style="margin-left: 70px">
            <a href="{{ route('account-explore-music') }}">Music Selection</a>
        </li>
    <li>
        {{--<i class="account-icon my-preferences {!! ((Request::segment(2) == 'preferences') ? 'my-preferences-active' : 'my-preferences') !!}"></i>--}}
        <i class="account-icon my-preferences"></i>
        <a href="{{ route('account-preferences') }}" style="text-decoration: none">My Preferences</a>
    </li>
</ul>




{{--<ul class="my-account-side">--}}
    {{--<li>--}}
        {{--<div class="d-inline-block align-top">--}}
            {{--<img src="{{ asset('storage/my-account-icon.jpg') }}">--}}
        {{--</div>--}}
        {{--<div class="d-inline-block">--}}
            {{--<span><b>{{ Auth::user()->name }}</b></span><br>--}}
            {{--<div class="account-position">Professionals Real Estate Bassendean</div>--}}
        {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<i class="account-icon my-creator @if (Request::segment(2) == 'video-creator') {{'my-creator-active'}} @else {{'my-creator'}} @endif"></i>--}}
        {{--<a href="">Make Video</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<i class="account-icon @if (Request::segment(2) == 'videos') {{'my-videos-active'}} @else {{'my-videos'}} @endif"></i>--}}
        {{--<a href="/account/videos">My Videos</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<i class="account-icon my-tracker @if (Request::segment(2) == 'video-tracker') {{'my-tracker-active'}} @else {{'my-tracker'}} @endif"></i>--}}
        {{--<a href="">My Video Tracker</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<i class="account-icon my-account"></i>--}}
        {{--<a href="/account/home">My Home</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<i class="account-icon my-settings"></i>--}}
        {{--<a href="/account/home">My Settings</a>--}}
    {{--</li>--}}
    {{--<li>--}}
        {{--<i class="account-icon my-preferences @if (Request::segment(2) == 'preferences') {{'my-preferences-active'}} @else {{'my-preferences'}} @endif"></i>--}}
        {{--<a href="">My Preferences</a>--}}
    {{--</li>--}}
{{--</ul>--}}
{{--<nav class="my-account-menu navbar navbar-expand-lg navbar-light bg-light">--}}
    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}
    {{--<div class="collapse navbar-collapse" id="navbarNavDropdown">--}}
        {{--<ul class="navbar-nav">--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">Make Video</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">My Videos</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">My Video Tracker</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">My Account</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--My Settings--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
                    {{--<a class="dropdown-item" href="#">Templates</a>--}}
                    {{--<a class="dropdown-item" href="#">Pictures</a>--}}
                    {{--<a class="dropdown-item" href="#">Voice Overs</a>--}}
                    {{--<a class="dropdown-item" href="#">Music Selection</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">My Preferences</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}