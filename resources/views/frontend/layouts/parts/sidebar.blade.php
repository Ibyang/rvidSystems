
<ul class="my-account-side">
    <li>
        <div class="d-inline-block align-top">
            @if($logo_pic != null || $logo_pic != '' || !empty($logo_pic))
                <img src="{{ $logo_pic }}" width="50" height="50">
            @else
                <img src="{{ asset('storage/my-account-icon.jpg') }}">
            @endif
        </div>
        <div class="d-inline-block">
            <span><b>{{ Auth::user()->name }}</b></span><br>
            <div class="account-position">{{ $agent->name_agency }}</div>
        </div>
    </li>
    <li>
        <i class="account-icon my-account"></i>
        <a href="{{ route('account-home') }}" style="text-decoration: none">My Home</a>
    </li>
    <li>
        <i class="account-icon my-videos"></i>
        {{--<i class="account-icon @if (Request::segment(2) == 'my-videos') {{'my-videos-active'}} @else {{'my-videos'}} @endif"></i>--}}
        <a href="{{ route('account-my-videos') }}" style="text-decoration: none">My Videos</a>
    </li>
    <li>
        <i class="account-icon my-creator"></i>
        <a href=" {{ route('account-make-video') }}" style="text-decoration: none">My Video Creator</a>
    </li>
    <li>
        <i class="account-icon my-tracker"></i>
        <a href="{{ route('account-video-tracker') }}" style="text-decoration: none">My Video Tracker</a>
    </li>
    <!-- just added this part to integrate the links for the other pages -->
    <li>
        <i class="account-icon my-tracker"></i>
        <a href="#">Explore</a>
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
        <i class="account-icon my-preferences"></i>
        <a href="{{ route('account-preferences') }}" style="text-decoration: none">My Preferences</a>
    </li>
</ul>
