<header>
    <div class="container">
        <a href="{{ route('comics') }}">
            <img class="brand-logo" src="{{ asset('images/dc-logo.png') }}" alt="dc-logo">
        </a>
        <nav class="main-navigation">
            <ul>
                <li>
                    <a class="active ttu" href="{{ route('comics') }}">Comics</a>
                </li>
                <li>
                    <a class="ttu" href="{{ route('news') }}">News</a>
                </li>
            </ul>
        </nav>
    </div>
</header>