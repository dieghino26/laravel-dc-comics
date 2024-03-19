<section id="info-nav">
    <div class="container">
        <nav>
            <ul>
                @foreach (config('more_info') as $item)
                    <li>
                        <a href="#">
                            <img class="icon" src="{{ asset("images/{$item['img']}") }}" alt="<?= $item['text'] ?>">
                            <span>
                                {{ $item['text'] }}
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>
