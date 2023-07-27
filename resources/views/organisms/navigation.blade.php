<nav>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('characters') }}">Characters</a></li>
        <!-- Add more navigation links for other pages as needed -->
        @guest
            <li><a href="{{ route('register') }}">Sign up</a></li>
            <li><a href="{{ route('login') }}">Sign in</a></li>
        @endguest
        @auth
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                    @csrf
                </form>
            </li>
        @endauth
    </ul>
</nav>
