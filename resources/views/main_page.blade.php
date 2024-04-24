@extends('layouts.base')

@section('content')

<div class="main-page_banner-line">
    <div class="container">

        <div class="main-page_banner-img-block">

{{--             <div class="main-page_banner-img js-pic-1" style="display: block; opacity: 1;">

                <img src="{{ asset('img/main_banner.jpg') }}">

                <div class="main-page_banner-plaque">
                    <img src="{{ asset('img/banner_plaque.png') }}">
                </div>

            </div>
 --}}
{{--             <div class="main-page_banner-img js-pic-2" style="display: block; opacity: 1;">

                <img src="{{ asset('img/main_banner_2.jpg') }}">

                <div class="main-page_banner-plaque">
                    <img src="{{ asset('img/banner_plaque_2.png') }}">
                </div>

            </div>
 --}}
        </div>

    </div>
</div>

<div class="main-page_advantages">
    <div class="container">
        <h1>
            KATANA - СТАБИЛЬНО ВЫСОКОЕ КАЧЕСТВО, МОЩНОСТЬ И ИЗНОСОСТОЙКОСТЬ
        </h1>

        <div class="main-page_advantages_string">
            Высокий уровень качества и надежности при умеренных ценах обеспечивает бренду уверенное лидерство на большинстве мировых рынков
        </div>

        <div class="main-page_advantages_info-block">

            <div class="main-page_advantages_info-element element-1">

                <div class="main-page_advantages_info-pic">
                    <img src="{{ asset('img/adv_world_standrd.png') }}">
                </div>

                <div class="main-page_advantages_info-header">
                    МИРОВЫЕ СТАНДАРТЫ
                </div>

                <div class="main-page_advantages_info-line">
                </div>

                <div class="main-page_advantages_info-text">
                    Производственные мощности бренда находятся в Японии, Китае и странах Европы
                </div>

            </div>

            <div class="main-page_advantages_info-element element-2">

                <div class="main-page_advantages_info-pic">
                    <img src="{{ asset('img/adv_sert.png') }}">
                </div>

                <div class="main-page_advantages_info-header">
                    СЕРТИФИКАТЫ КАЧЕСТВА
                </div>

                <div class="main-page_advantages_info-line">
                </div>

                <div class="main-page_advantages_info-text">
                    Все изделия проходят строгий контроль качества на всех этапах производства и имеют необходимые сертификаты соответствия
                </div>

            </div>

            <div class="main-page_advantages_info-element element-3">

                <div class="main-page_advantages_info-pic">
                    <img src="{{ asset('img/adv_guarantee.png') }}">
                </div>

                <div class="main-page_advantages_info-header">
                    ГАРАНТИЯ И СЕРВИС
                </div>

                <div class="main-page_advantages_info-line">
                </div>

                <div class="main-page_advantages_info-text">
                    На все изделия действует гарантия. Все запчасти и расходные материалы всегда в наличии, благодаря чему производится быстрое сервисное обслуживание и ремонт
                </div>

            </div>

            <div class="main-page_advantages_info-element element-4">

                <div class="main-page_advantages_info-pic">
                    <img src="{{ asset('img/adv_tehno.png') }}">
                </div>

                <div class="main-page_advantages_info-header">
                    ИННОВАЦИИ И ТЕХНОЛОГИИ
                </div>

                <div class="main-page_advantages_info-line">
                </div>

                <div class="main-page_advantages_info-text">
                    На всех производственных активах функционирует центр техразвития, направленный на внедрение существующих мировых технологий, а также создание собственных для улучшения качества
                </div>

            </div>

        </div>
    </div>
</div>

<div class="main-page_catalog-link">

    <div class="container">

        <div class="main-page_catalog-link-text">
            Каталог оборудования KATANA
        </div>

        <div class="main-page_catalog-link-button">
            <a href="{{ asset('/produktsiya') }}" title="Смотреть весь каталог оборудования KATANA">Смотреть</a>
        </div>

    </div>

</div>

<div class="main-page_about-us">
    <div class="container">
        <h2>
            История бренда KATANA
        </h2>

        <div class="main-page_about-us_string">
            <p>Katana — надёжный строительный и садовый электрический инструмент, изготовленный по японским стандартам качества.</p>

            <img src="{{ asset('img/about_pic_1.jpg') }}" class="about-image_right">

            <p>История бренда берет свое начало в 1998 году, в год очередного кризиса между Северной Кореей и Японией, когда Япония ощутила себя в наиболее уязвимом положении. Совместно с американцами для усиления японско-американской безопасности осуществлялась разработка практичного инструмента для военной индустрии под названием Katana (самурайский меч). Позднее компания начала производство электроинструмента для использования в домашних условиях.</p>

            <p>Сейчас бренд Katana хорошо узнаваем и занимает уверенные позиции по объемам продаж электроинструмента в США и Японии.</p>

            <p>Под брендом Katana выпускается две линейки электроинструмента: DIY и HD line Professional.</p>

            <p>Электроинструмент Katana для использования в домашних условиях - это стабильно высокое качество, безотказность в работе, обеспеченность расходниками.</p>

            <p>Katana HD line характеризуется значительным ресурсом и мощностью, имеет повышенную износостойкость и показатели прочности.</p>

            <p>Производственные мощности бренда находятся в Японии, Китае и странах Европы.</p>

        </div>

    </div>
</div>

<div class="main-page_map-block">

    <h2>
        <a href="{{ asset('gde-kupit') }}" target="_blank" title="Где купить"> ГДЕ КУПИТЬ
    </h2>

    <div class="main-page_map" id="shops_map">

        <a href="{{ asset('gde-kupit#karta') }}" class="cover" target="_blank" title="К карте"></a>              
    </div>

</div>

<div class="main-page_feedback-form" id="feedback-form">

    <div class="container">

        <h2>Напишите нам</h2>

        <form method="post" action="{{ asset('/feedback') }}">

            {{ csrf_field() }}

            <div class="input-block">
                <input type="text" name="name" placeholder="Ваше имя *" required>
                <input type="email" name="email" placeholder="Ваше email *" required>
                <input type="text" name="theme" placeholder="Тема *" required>
            </div>

            <textarea name="text" placeholder="Ваше сообщение *" required></textarea>

            <div class="main-page_feedback-button">
                <button type="subscribe">Отправить</button>
            </div>

        </form>
        
    </div>
        
</div>

@endsection

@section('scripts')
@parent

{{-- <script type="text/javascript" src="{{ asset('js/main_page_slider.js') }}"></script> --}}

<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?apikey=46a95b06-0fe3-4c2c-b2c9-5b441497848e&lang=ru_RU"></script>

<script type="text/javascript">

$(document).ready(function(){

    console.log('обработчик карт');

    var center = [53.902496, 27.561481];

    // Выводим карту с магазинами
    ymaps.ready(init);
    function init () {
        var myMap = new ymaps.Map("shops_map", {
            center: center,
            zoom: 6
        }, {
            searchControlProvider: 'yandex#search'
        });

        var myCollection = new ymaps.GeoObjectCollection();

        @foreach($addresses as $row)

        var myPlacemark = new ymaps.Placemark([
            {{ $row->latitude.", ".$row->longitude }}
        ], {
            balloonContent: '{!! '<strong>'.preg_replace('/(\r\n|\n|\r)/', " ", $row->address).'</strong><br>'.preg_replace('/(\r\n|\n|\r)/', " ", $row->contact).'<br><a href="http://'.$row->site_url.'" target="_blanc">'.$row->site_url.'</a>' !!}',
            hintContent: '{{ preg_replace('/(\r\n|\n|\r)/', " ", $row->address) }}'
        }, {
            preset: 'islands#icon',
            iconColor: 'red'
        });
        myCollection.add(myPlacemark);

        @endforeach
     
        myMap.geoObjects.add(myCollection);
    }

});

</script>

@endsection