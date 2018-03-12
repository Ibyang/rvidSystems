
<ul class="my-account-side">
    <li>
        <img src="{{ asset('storage/my-account-icon.jpg') }}">
        {{ Auth::user()->name }}
    </li>
    <li>
        <i class="account-icon my-account"></i>
        <a href="/account/home">My Home</a>
    </li>
    <li>
        <i class="account-icon my-videos"></i>
        <a href="/account/my-videos">My Videos</a>
    </li>
    <li>
        <i class="account-icon my-creator"></i>
        <a href="">My Video Creator</a>
    </li>
    <li>
        <i class="account-icon my-tracker"></i>
        <a href="">My Video Tracker</a>
    </li>
    <li>
        <i class="account-icon my-preferences"></i>
        <a href="">My Preferences</a>
    </li>
</ul>
