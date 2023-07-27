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
            <!-- Show logout form for authenticated users -->
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endauth
    </ul>
</nav>
