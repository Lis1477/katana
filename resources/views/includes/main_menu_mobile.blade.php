<div class="main-menu_mobile" id="js-mobile">
    <div class="container">
        <nav>
            <ul>
                <li><a href="{{ asset('/') }}">Главная</a></li>
                <li class="main-menu_mobile_cat">

                    <div class="main-menu_mobile_product-link">
                        <a href="{{ asset('produktsiya') }}">Продукция</a>
                        <div class="main-menu_mobile_sub-menu-toggler" id="js-sub-cat-toggler">
                            <div>
                                &#9660;
                            </div>
                        </div>
                    </div>

                    <ul class="main-menu_mobile_subcat" id="js-sub-cat">
                        @foreach($cats as $cat)

                        <li><a href="{{ asset('produktsiya/'.$cat->{'1c_id'}.'/'.$cat->slug) }}">{{ $cat->name }}</a></li>

                        @endforeach

                    </ul>

                </li>
                <li><a href="{{ asset('service') }}">Сервис</a></li>
                <li><a href="{{ asset('gde-kupit') }}">Магазины</a></li>
                <li><a href="{{ asset('videoobzory') }}">Видеообзоры</a></li>
            </ul>
        </nav>
    </div>
</div>
