
<ul class="my-account-side">
    <li>
        <img src="{{ asset('storage/my-account-icon.jpg') }}">
        {{ Auth::user()->name }}<br>
        {{ $agent->name_agency }}
    </li>
    <li>
        <i class="account-icon my-account"></i>
        <a href="{{ route('account-home') }}">My Home</a>
    </li>
    <li>
        <i class="account-icon my-videos"></i>
        <a href="{{ route('account-my-videos') }}">My Videos</a>
    </li>
    <li>
        <i class="account-icon my-creator"></i>
        <a href="">My Video Creator</a>
    </li>
    <li>
        <i class="account-icon my-tracker"></i>
        <a href="{{ route('account-video-tracker') }}">My Video Tracker</a>
    </li>
    <!-- just added this part to integrate the links for the other pages -->
    <li>
        <i class="account-icon my-tracker"></i>
        <a href="#">Explore</a>
    </li>
    <li style="margin-left: 70px">
        <a href="#">Templates</a>
    </li>
    <li style="margin-left: 70px">
        <a href="{{ route('account-explore-pictures') }}">Pictures</a>
    </li>
    <li style="margin-left: 70px">
        <a href="{{ route('account-explore-voice-overs') }}">Voice Overs</a>
    </li>
    <li style="margin-left: 70px">
        <a href="#">Music Selection</a>
    </li>
    <li>
        <i class="account-icon my-preferences"></i>
        <a href="{{ route('account-preferences') }}">My Preferences</a>
    </li>
</ul>
