<div class="header_main-menu">
    <nav class="main-menu_navigation">
        <ul>
            <li><a href="{{ asset('/') }}">Главная</a></li>
            <li class="header_main-menu_cat">
                <a href="{{ asset('produktsiya') }}">Продукция</a>
                <ul class="header_main-menu_subcat">

                    @foreach($cats as $cat)

                    <li><a href="{{ asset('produktsiya/'.$cat->{'1c_id'}.'/'.$cat->slug) }}">{{ $cat->name }}</a></li>

                    @endforeach

                </ul>
            </li>
            <li><a href="{{ asset('service') }}">Сервис</a></li>
            <li><a href="{{ asset('gde-kupit') }}">Где купить</a></li>
            <li><a href="{{ asset('videoobzory') }}">Видеообзоры</a></li>
        </ul>
    </nav>

    <div class="main-menu_burger" id="js-burger">
        <hr class="hr-1">
        <hr class="hr-2">
        <hr class="hr-3">
    </div>

</div>
