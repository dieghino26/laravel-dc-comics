<header>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/dc-logo.png') }}" alt="DC logo">
        </div>
        <div class="nav">

            <nav>
                <ul>
                    @foreach (config('header') as $item)
                        <li>
                            <a href="{{ route("{$item['text']}") }}">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="search">
            <input type="text" placeholder="Search">
        </div>
    </div>
</header>
