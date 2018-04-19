
<ul class="my-account-side">
    <li>
        <img src="{{ asset('storage/my-account-icon.jpg') }}">
        {{ Auth::user()->name }}<br>
        {{ $agent->name_agency }}
    </li>
    <li>
        <i class="account-icon my-account"></i>
        <a href="{{ route('account-home') }}" style="text-decoration: none">My Home</a>
    </li>
    <li>
        <i class="account-icon my-videos"></i>
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
        <a href="#">Templates</a>
    </li>
    <li style="margin-left: 70px">
        <a href="{{ route('account-explore-pictures') }}" style="text-decoration: none">Pictures</a>
    </li>
    <li style="margin-left: 70px">
        <a href="{{ route('account-explore-voice-overs') }}" style="text-decoration: none">Voice Overs</a>
    </li>
    <li style="margin-left: 70px">
        <a href="#">Music Selection</a>
    </li>
    <li>
        <i class="account-icon my-preferences"></i>
        <a href="{{ route('account-preferences') }}" style="text-decoration: none">My Preferences</a>
    </li>
</ul>
