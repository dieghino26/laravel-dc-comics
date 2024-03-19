<footer>
    <div class="footer-top">
        <div class="container">

            <nav class="links-container">
                @foreach (config('footer_links') as $item)
                    <div class="footer_links">
                        <h3>{{ $item['title'] }}</h3>
                        <ul>
                            @foreach ($item['links'] as $link)
                                <li>
                                    <a href="#">{{ $link['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </nav>
            <figure>
                <img src="{{ asset('images/dc-logo-bg.png') }}" alt="DC logo">
            </figure>
        </div>
    </div>
    <div class="footer-bottom">

        <div class="container">
            <button id="sign-up">SIGN-UP NOW!</button>
            <nav>
                <span>FOLLOW US</span>
                <div class="social">
                    <img src="{{ asset('images/footer-facebook.png') }}" alt="">
                </div>
                <div class="social">
                    <img src="{{ asset('images/footer-periscope.png') }}" alt="">
                </div>
                <div class="social">
                    <img src="{{ asset('images/footer-pinterest.png') }}" alt="">
                </div>
                <div class="social">
                    <img src="{{ asset('images/footer-twitter.png') }}" alt="">
                </div>
                <div class="social">
                    <img src="{{ asset('images/footer-youtube.png') }}" alt="">
                </div>

            </nav>
        </div>
    </div>
</footer>
