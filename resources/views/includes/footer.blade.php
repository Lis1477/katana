<footer>
    <div class="container">

        <div class="footer_info-line">
            
            <div class="footer_links-block">
                <div class="footer_link-element">
                    <a href="{{ asset('/o-kompanii') }}" title="О компании">
                        О компании 
                    </a>
                    <a href="{{ asset('/kontakty') }}" title="Контакты">
                        Контакты
                    </a>
                </div>

                <div class="footer_link-element">
                    <a href="{{ asset('/stat-partniorom') }}" title="Стать партнером">
                        Стать партнером
                    </a>
                    <a href="{{ asset('service') }}" title="Сервис">
                        Сервис
                    </a>
                </div>
                <div class="footer_link-element">
                    <a href="{{ asset('produktsiya') }}" title="Продукция">
                        Продукция
                    </a>
                    <a href="{{ asset('gde-kupit') }}" title="Магазины">
                        Магазины
                    </a>
                </div>
            </div>

            <div class="footer_youtube-block">

                <a href="https://www.instagram.com/katana.by/" class="instagram" target="_blank" title="Наш Instagram">
                    <img src="{{ asset('img/instagram_ico.png') }}" alt="instagram icon">
                    <div class="title">Instagram</div>
                </a>

                <a href="https://www.youtube.com/channel/UCfknEny_iCcCkTVyNqhvDXA/videos" class="youtube" title="Наш Youtube канал" target="_blank">
                    <img src="{{ asset('img/footer_youtube_logo.png') }}">
                </a>

                <div class="footer_qr-code">
                    <img src="{{ asset('img/footer_qr_code.png') }}">
                </div>
            </div>

        </div>

        <div class="footer_copyright">
            &copy; ООО &laquo;Альфасад&raquo;
        </div>

    </div>
</footer>
