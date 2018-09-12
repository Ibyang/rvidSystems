<ul class="my-account-side">
    <li>
        <div class="d-inline-block align-top">
            @if($logo_pic != null || $logo_pic != '' || !empty($logo_pic))
                <img src="{{ $logo_pic }}" width="50" height="50">
            @else
                <img src="{{ asset('storage/app/public/my-account-icon.jpg') }}">
            @endif
        </div>
        <div class="d-inline-block">
            <span><b>{{ Auth::user()->name }}</b></span><br>
            <div class="account-position">{{ $agent->group }}</div>
            <div class="account-position">{{ $agent->name_agency }}</div> 
        </div>
    </li>
    <li>
        <i class="account-icon my-creator @if (Request::segment(3) == 'make-video') {{'my-creator-active'}} @else {{'my-creator'}} @endif"></i>
        <a href="{{ route('account-make-video') }}" class="@if (Request::segment(2) == 'make-video') {{'c-ff0033'}} @endif">Make Video</a>
    </li>
    <li>
        <i class="account-icon @if (Request::segment(3) == 'my-videos') {{'my-videos-active'}} @else {{'my-videos'}} @endif"></i>
        <a href="{{ route('account-my-videos') }}" class="@if (Request::segment(2) == 'my-videos') {{'c-ff0033'}} @endif">My Videos</a>
    </li>
    <li>
        <i class="account-icon my-tracker @if (Request::segment(3) == 'video-tracker') {{'my-tracker-active'}} @else {{'my-tracker'}} @endif"></i>
        <a href="{{ route('account-video-tracker') }}" class="@if (Request::segment(2) == 'video-tracker') {{'c-ff0033'}} @endif">My Video Tracker</a>
    </li>
    <li>
        <i class="account-icon @if (Request::segment(3) == 'home') {{'my-account-active'}} @else {{'my-account'}} @endif"></i>
        <a href="{{ route('account-home') }}" class="@if (Request::segment(2) == 'home') {{'c-ff0033'}} @endif">My Account</a>
    </li>
    <li>
        <i class="account-icon @if (Request::segment(3) == 'settings') {{'my-settings-active'}} @else {{'my-settings'}} @endif"></i>
        <a data-toggle="collapse" href="#Sidebar" role="button" aria-expanded="false" aria-controls="collapseExample">My Settings</a>
        <div class="collapse" id="Sidebar">
            <div class="d-flex flex-column setting-sidebar">
                <div class="mt-2"><a href="{{ route('account-explore-templates') }}" class="@if (Request::segment(4) == 'explore-templates') {{'c-ff0033'}} @endif">Templates</a></div>
                <div class="my-3"><a href="{{ route('account-explore-pictures') }}" class="@if (Request::segment(4) == 'explore-pictures') {{'c-ff0033'}} @endif">Pictures</a></div>
                <div><a href="{{ route('account-explore-voice-overs') }}" class="@if (Request::segment(4) == 'explore-voice-overs') {{'c-ff0033'}} @endif">Voice Overs</a></div>
                <div class="my-3"><a href="{{ route('account-explore-music') }}" class="@if (Request::segment(4) == 'explore-music') {{'c-ff0033'}} @endif">Music Selection</a></div>
            </div>
        </div>
    </li>
    <li>
        <i class="account-icon my-preferences @if (Request::segment(3) == 'preferences') {{'my-preferences-active'}} @else {{'my-preferences'}} @endif"></i>
        <a href="{{ route('account-preferences') }}" class="@if (Request::segment(3) == 'preferences') {{'c-ff0033'}} @endif">My Preferences</a>
    </li>
</ul>
<nav class="my-account-menu navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/account/preferences/">Make Video</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account/videos">My Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account/video-tracker">My Video Tracker</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account/home">My Account</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/account/settings/template">Templates</a>
          <a class="dropdown-item" href="/account/settings/explore-pictures">Pictures</a>
          <a class="dropdown-item" href="/account/settings/voice-overs-voice">Voice Overs</a>
          <a class="dropdown-item" href="/account/settings/voice-overs-music">Music Selection</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('account-preferences') }}">My Preferences</a>
      </li>
    </ul>
  </div>
</nav>