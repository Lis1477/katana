@extends('layouts.base')

@section('content')

<div class="contact-page">
    <div class="container">

@include('includes.url_line')

        <h1>Контакты</h1>

        <div class="contact-page_address-block">

            <h2>Почтовый адрес:</h2>

            <p><address>Республика Беларусь, 220015, г.Минск, ул.Пономаренко 41, офис 206</address></p>
            
        </div>

        <div class="contact-page_address-block">

            <h2>Фактический адрес офиса и склада:</h2>

            <p><address>Республика Беларусь, г.Минск, ул. Рогачевская, 14</address></p>
            <p>(Примечание: фактический адрес в Яндекс и Google картах определять как ул. Основателей, 27)</p>
            <p><a href="{{ asset('/files/route_schema_2022.pdf') }}" target="_blank" title="Жми, чтобы скачать">Скачать схему проезда</a></p>
            <p>Координаты для навигатора: 53.945328, 27.732426</p>

        </div>

        <div class="contact-page_address-block">

            <h2>Офис:</h2>

            <p>
                Многоканальный телефон: <a href="tel:+375173886288">+375 (17) 388-62-88</a><br>
                A1: <a href="tel:+375291226677">+375 (29) 122-66-77</a><br>
                Факс: <a href="tel:+375173886188">+375 (17) 388-71-88</a>
            </p>

            <br>

            <h2>Отдел оптовых продаж:</h2>

            <p>
                Моб: <a href="tel:+375291262626">+375 (29) 126-26-26</a>,
                    <a href="tel:+375295638228">+375 (29) 563-82-28</a>,
                    <a href="tel:+375297884896">+375 (29) 788-48-96</a><br>
            </p>

            <h2>Отдел розничных продаж:</h2>

            <p>
                Моб: <a href="tel:+375291252626">+375 (29) 125-26-26</a>,
                    <a href="tel:+375336332626">+375 (33) 633-48-96</a>
            </p>

            <h2>E-mail:</h2>

            <p>
                <a href="mailto:alfagrad@alfagrad.com">alfagrad@alfagrad.com</a>
            </p>
            
        </div>

        <div class="contact-page_address-block">

            <h2>Отдел по работе с рекламациями</h2>

            <p>
                Тел:
                <a href="tel:+375333251154">
                    +375 (33) 325-11-54
                </a>
                (Viber / WhatsApp / Telegram)<br>
            </p>
            <p>Skype:
                <a href="skype:skype.sklad2@alfastok.by">skype.sklad2@alfastok.by</a>
            </p>

        </div>

        <div class="contact-page_address-block">

            <h2>Время работы:</h2>

            <p>Пн-Пт: с 9-00 до 17-30<br>Сб-Вс: выходной</p>

        </div>

        <div class="contact-page_address-block">

            <h2>Мы на карте:</h2>

            <div class="main-page_map" id="map">
                <iframe  style="pointer-events: none;" src="https://yandex.ru/map-widget/v1/?um=constructor%3A8-bZi6ddmti9v5LpgeoxwoOj456qIdLH&amp;source=constructor" width="100%" height="550" frameborder="0"></iframe>
            </div>

        </div>

    </div>
</div>


@endsection

@section('scripts')
@parent

<script type="text/javascript" src="{{ asset('js/map_activation.js') }}"></script>

@endsection