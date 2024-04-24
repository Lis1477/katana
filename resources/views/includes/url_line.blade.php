<div class="url-line">
	<a href="{{ asset('/') }}" title="Переход на Главную страницу">Главная</a> &raquo;

	@if(!isset($ur_2))

	<strong>{{ $ur_1['name'] }}</strong>

	@else

	<a href="{{ asset('/'.$ur_1['slug']) }}" title="Переход в раздел {{ $ur_1['name'] }}">
		{{ $ur_1['name'] }}
	</a> &raquo;

		@if(!isset($ur_3))

	<strong>{{ $ur_2['name'] }}</strong>

		@else

	<a href="{{ asset('/'.$ur_1['slug'].'/'.$ur_2['id'].'/'.$ur_2['slug']) }}" title="Переход в раздел {{ $ur_2['name'] }}">
		{{ $ur_2['name'] }}
	</a> &raquo;

	<strong>{{ $ur_3['name'] }}</strong>

		@endif

	@endif

</div>
