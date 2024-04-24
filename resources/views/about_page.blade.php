@extends('layouts.base')

@section('content')

<div class="about-page">
    <div class="container">

@include('includes.url_line')

        <h1>О компании</h1>

        <img src="{{ asset('img/about_pic_2.jpg') }}" class="text-image_right">

        <p>Компания Альфасад - первый импортер в Республику Беларусь садовой техники, строительного оборудования и инструмента торговой марки Katana, а также торговых марок Skiper, Brado, Spec, Darc, Welt, SBK, Altron.</p>
        <p>Компания начала свою деятельность с 2002 года. К настоящему времени является одним из крупнейших поставщиков садовой техники, строительного оборудования и инструмента в РБ.</p>
        <p>В штате компании – высококвалифицированные специалисты с многолетним опытом работы.</p>
        <p>Вся техника ввезена официально, имеет все необходимые сертификаты и обеспечена фирменной гарантией и сервисной поддержкой. На складе имеется более 5000 наименований запасных частей и принадлежностей, а электронная информационная система позволяет получать данные о наличии запчастей в режиме реального времени. Персонал сервисного центра - это на 100% сертифицированные специалисты.</p>
        <br>


        <div class="main-page_our-team_string">
            Каждый этап работы в надежных руках профессионалов, обладающих высочайшими знаниями в своих отраслях, объединенных в надежную команду
        </div>

        <div class="main-page_our-team_info-block">

            <div class="main-page_our-team_info-element element-1">

                <div class="main-page_our-team_info-hidden">
                    Выполняются следующие функции: заказ, приобретение, доставка, информационное сопровождение, испытание соответствия безопасности и качеству нормам Таможенного Союза
                </div>

                <div class="main-page_our-team_info-pic">
                    <img src="{{ asset('img/komanda_1_ico.png') }}">
                </div>

                <div class="main-page_our-team_info-header">
                    Отдел документации и логистики
                </div>

                <div class="main-page_our-team_info-line">
                </div>

                <div class="main-page_our-team_info-text">
                    Основной задачей отдела является обеспечение поставки оборудования и инструмента производства KATANA со всеми сопроводительными документами
                </div>

            </div>

            <div class="main-page_our-team_info-element element-2">

                <div class="main-page_our-team_info-hidden">
                    Благодаря тому, что мы являемся первым импортером инструмента KATANA, своим объемам продаж – мы имеем лучшие цены и предложения, которые готовы предложить Вам
                </div>

                <div class="main-page_our-team_info-pic">
                    <img src="{{ asset('img/komanda_2_ico.png') }}">
                </div>

                <div class="main-page_our-team_info-header">
                    Отдел оптовых продаж
                </div>

                <div class="main-page_our-team_info-line">
                </div>

                <div class="main-page_our-team_info-text">
                    Менеджеры оптового отдела готовы предложить своим клиентам особые условия сотрудничества и индивидуальный подход к каждому заказу
                </div>

            </div>

            <div class="main-page_our-team_info-element element-3">

                <div class="main-page_our-team_info-hidden">
                    Цель отдела маркетинга и продвижения заключается в том, чтобы увеличить общий спрос на инструмент KATANA. Для этого используется целый арсенал маркетинговых мероприятий
                </div>

                <div class="main-page_our-team_info-pic">
                    <img src="{{ asset('img/komanda_3_ico.png') }}">
                </div>

                <div class="main-page_our-team_info-header">
                    Отдел маркетинга и продвижения
                </div>

                <div class="main-page_our-team_info-line">
                </div>

                <div class="main-page_our-team_info-text">
                    Отдел выполняет роль буфера между рынком и компанией. Благодаря нашим специалистам по рекламе мы больше работаем над удержанием клиента и удовлетворением его потребностей
                </div>

            </div>

            <div class="main-page_our-team_info-element element-4">

                <div class="main-page_our-team_info-hidden">
                    Мы очень внимательно и ответственно подходим к вопросу обслуживания проданного нашей компанией оборудования и инструмента и уже более 15 лет предоставляем услуги по сервису и ремонту
                </div>

                <div class="main-page_our-team_info-pic">
                    <img src="{{ asset('img/komanda_4_ico.png') }}">
                </div>

                <div class="main-page_our-team_info-header">
                    Отдел сервисного обслуживания
                </div>

                <div class="main-page_our-team_info-line">
                </div>

                <div class="main-page_our-team_info-text">
                    Высококвалифицированные сотрудники всегда проконсультируют Вас по интересующему оборудованию и запчастям, сделают все возможное для быстрого и качественного ремонта
                </div>

            </div>

        </div>




        <h2>Выгоды сотрудничества с компанией оптовому покупателю:</h2>

        <ul>
        	<li><span>&bull;</span>Своевременное предоставление исчерпывающей информации о поступлении техники на наш склад, об изменениях цен и ассортимента</li>
        	<li><span>&bull;</span>Возможность доставки по республике нашим собственным транспортом</li>
        	<li><span>&bull;</span>Обеспечение технической документацией (описания материалов, инструкции по применению, сертификаты) и рекламными материалами</li>
        	<li><span>&bull;</span>Предоставляем привлекательную систему скидок, напрямую зависящую от объема заказа, а также, бонусные программы</li>
        	<li><span>&bull;</span>Различные варианты расчета</li>
        </ul>
        <br>


        <h2>Особенности:</h2>

        <ul>
        	<li><span>&bull;</span>Основаны в 2002 году</li>
        	<li><span>&bull;</span>Проектный ассортимент более 20 000 наименований</li>
        	<li><span>&bull;</span>Превосходный дизайн</li>
        	<li><span>&bull;</span>Гарантия от 1 года до 3-х лет</li>
        	<li><span>&bull;</span>Высококачественные материалы</li>
        </ul>

    </div>
</div>


@endsection

