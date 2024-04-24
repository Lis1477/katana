@extends('layouts.base')

@section('content')

<div class="our-shops-page">
    <div class="container">

		@include('includes.url_line')

		<h1>Где купить?</h1>

		<div class="our-shops-page_banner-block">
			
	{{-- 	        <div class="our-shops-page_banner js-pic-1" style="display: block; opacity: 1;">

				<img src="{{ 'img/our_shops_banner.jpg' }}" alt="banner">

				<a 
					href="http://www.alfagradm.by/catalog/proshedshie-akcii/akciya-katana---ckidka-20-na-shurupoverty.html"
					class="our-shops-page_button-link"
					target="_blank"
				>
					<div class="our-shops-page_button">
							КУПИТЬ со скидкой
					</div>
					</a>

			</div> --}}

	{{-- 	        <div class="our-shops-page_banner js-pic-2" style="display: block; opacity: 1;">

				<img src="{{ 'img/our_shops_banner_2.jpg' }}" alt="banner">

				<a 
					href="http://www.alfagradm.by/catalog/bolgarka-uglovaya-shlifovalnaya-mashinka/"
					class="our-shops-page_button-link"
					target="_blank"
				>
					<div class="our-shops-page_button">
							КУПИТЬ со скидкой
					</div>
					</a>

			</div> --}}

		</div>

		<div class="our-shops-page_sites">
			
			<h2>Интернет-магазины:</h2>

			<div class="our-shops-page_links">

				@foreach($sites as $site)

				<div class="our-shops-page_link-element">

					@php

						// если не пусто
						if (trim($site->logo_file)) {

							// путь к файлу
							$file = "https://alfastok.by/storage/item-images/".trim($site->logo_file);

							// если файл корректный
							if(@is_array(getimagesize($file))) {

								// определяем mime
								$mime = getimagesize($file)['mime'];
								if($mime == "image/jpeg" || $mime == "image/png") {
									$path = $file;
								} else {
									$path = asset('img/img_tr.jpg');
								}
							} else {
								$path = asset('img/img_tr.jpg');
							}
						} else {
							$path = asset('img/img_tr.jpg');
						}

					@endphp
					
					<a href="http://{{ $site->site_url }}" target="_blank">
						<div class="our-shops-page_site-logo">
							<img src="{{ $path }}" alt="{{ $site->site_url }}">
						</div>
						<div class="our-shops-page_site-url">
							{{ $site->site_url }}
						</div>
						<hr>
					</a>

				</div>

				@endforeach
				
			</div>

			<div id="karta"></div>

		</div>

		<div class="our-shops-page_addresses-block">

			<h2>Магазины на карте:</h2>

			<div class="our-shops-page_city-links">

				@if($addresses->where('city', 'Минск')->count())

				<div class="city active js-city" data-position="[53.902284, 27.561831]">Минск</div>

				@endif

				@if($addresses->where('city', 'Брест')->count())

				<div class="city js-city" data-position="[52.094246, 23.684568]">Брест</div>

				@endif

				@if($addresses->where('city', 'Витебск')->count())

				<div class="city js-city" data-position="[55.184217, 30.202878]">Витебск</div>

				@endif

				@if($addresses->where('city', 'Гомель')->count())

				<div class="city js-city" data-position="[52.424160, 31.014281]">Гомель</div>

				@endif

				@if($addresses->where('city', 'Гродно')->count())

				<div class="city js-city" data-position="[53.677839, 23.829529]">Гродно</div>

				@endif

				@if($addresses->where('city', 'Могилев')->count())

				<div class="city js-city" data-position="[53.894548, 30.330654]">Могилев</div>

				@endif

				@if($addresses
					->where('city', '!=', 'Минск')
					->where('city', '!=', 'Брест')
					->where('city', '!=', 'Витебск')
					->where('city', '!=', 'Гомель')
					->where('city', '!=', 'Гродно')
					->where('city', '!=', 'Могилев')
					->count())

				<div class="city our-shops-page_other-cities">
					Другие города
					<img src="{{ asset('img/triangle.png') }}" alt="triangle.png">
					<div class="our-shops-page_other-cities-links">
						
						@foreach($addresses
							->where('city', '!=', 'Минск')
							->where('city', '!=', 'Брест')
							->where('city', '!=', 'Витебск')
							->where('city', '!=', 'Гомель')
							->where('city', '!=', 'Гродно')
							->where('city', '!=', 'Могилев')
							->sortBy('city')
							->unique('city') as $other_city)

						<div class="js-other" data-position="{{ "[".$other_city->latitude.", ".$other_city->longitude."]" }}">
							{{ $other_city->city }}
						</div>

						@endforeach

					</div>
				</div>

				@endif

			</div>

			<div class="our-shops-page_map-block">

				<div class="our-shops-page_addresses-links">

					@foreach($addresses->sortBy('address') as $addr)

						@php
							// отображаем только Минск
							if($addr->city == "Минск") {
								$disp = "block";
							} else {
								$disp = "none";
							}
						@endphp

					<div
						class="our-shops-page_addresses-links-element js-addr"
						title="Посмотреть на карте {{ $addr->address }}"
						style="display: {{ $disp }}"
						data-position="{{ "[".$addr->latitude.", ".$addr->longitude."]" }}"
						data-lacation="{{ $addr->city }}"
					>

						<div class="address">
							{{ $addr->address }}
						</div>

						@if(!empty($addr->contact))

						<div class="url">
							
							{{ $addr->contact }}

						</div>

						@endif


						@if(!empty($addr->site_url))

						<div class="url">

							{{ $addr->site_url }}

						</div>

						@endif


					</div>

					@endforeach
					
				</div>

				<div class="our-shops-page_maps" id="shops_map">

					<div class="cover js-cover" title="Жми для активации карты"></div>        			
				</div>
				

			</div>

		</div>

		<div class="our-shops-page_write-us">
			Если Вы не нашли нужный Вам инструмент,
			<a href="{{ asset('/#feedback-form') }}" title="Напишите нам" target="_blank">напишите нам</a>
			или звоните
			<a href="tel:+375291252626" title="Позвоните нам">+375 29 125-26-26</a>.
		</div>

    </div>
</div>


@endsection

@section('scripts')
@parent

{{-- <script type="text/javascript" src="{{ asset('js/main_page_slider.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('js/map_activation_shops.js') }}"></script>

<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?apikey=46a95b06-0fe3-4c2c-b2c9-5b441497848e&lang=ru_RU"></script>

<script type="text/javascript">

$(document).ready(function(){

	console.log('обработчик карт');

	var center = [53.902284, 27.561831];

	// переключатель для Другие города
	$('.our-shops-page_other-cities').click(function(){
		$('.our-shops-page_other-cities-links').slideToggle();
	});


	// Выводим карту с магазинами
	ymaps.ready(init);
	function init () {
		var myMap = new ymaps.Map("shops_map", {
			center: center,
			zoom: 11
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

		// нажимаем на областные города
		$('.js-city').click(function(){

			// убираем везде класс active
			$('.js-city, .our-shops-page_other-cities').removeClass('active');
			$('.js-other').removeClass('active');

			// закрываем панель "Другие города", если открыта
			$('.our-shops-page_other-cities-links').css('display', 'none');

			// делаем активными ссылки городов
			$(this).addClass('active');

			// выводим адреса только выбранного города
			$('.js-addr').css('display', 'none');
			$("[data-lacation='"+$(this).text().trim()+"']").css('display', 'block');

			//Забираем координаты из кнопки
		var loc = $(this).attr('data-position');
		loc = JSON.parse(loc);

		//Увеличиваем карту до нужного размера
		myMap.setZoom(11,{smooth:true,centering:true});

		//Перемещаем карту к нужной метке
		myMap.panTo(loc);

		});

		// нажимаем на Другие города
		$('.js-other').click(function(){

			// удаляем класс active
			$('.js-other').removeClass('active');
			$('.js-city').removeClass('active');

			// делаем активной ссылку "Другие города"
			$('.our-shops-page_other-cities').addClass('active');

			// делаем активной ссылку города
			$(this).addClass('active');

			// выводим адреса только выбранного города
			$('.js-addr').css('display', 'none');
			$("[data-lacation='"+$(this).text().trim()+"']").css('display', 'block');
			//Забираем координаты из кнопки
		var loc = $(this).attr('data-position');
		loc = JSON.parse(loc);

		//Увеличиваем карту до нужного размера
		myMap.setZoom(11,{smooth:true,centering:true});

		//Перемещаем карту к нужной метке
		myMap.panTo(loc);

		});

		// нажимаем на адреса
		$('.js-addr').click(function(){

			// закрываем панель "Другие города", если открыта
			$('.our-shops-page_other-cities-links').css('display', 'none');

			// удаляем класс active
			$('.js-addr').removeClass('active');

			// делаем активной ссылку
			$(this).addClass('active');

			//Забираем координаты из кнопки
		var loc = $(this).attr('data-position');
		loc = JSON.parse(loc);

		//Увеличиваем карту до нужного размера
		myMap.setZoom(15,{smooth:true,centering:true});

		//Перемещаем карту к нужной метке
		myMap.panTo(loc);

		});

	}

});

</script>


@endsection