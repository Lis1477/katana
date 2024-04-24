@extends('layouts.base')

@section('content')

<div class="video-page">
    <div class="container">

@include('includes.url_line')

        <h1>Видеообзоры</h1>

        <div class="video-page_element">

        	<div class="video-page_video first">

				<iframe src="https://www.youtube.com/embed/2VJ04-_Q89Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        	</div>

        	<div class="video-page_info-block">

	        	<h2>
	        		KATANA — Японский стандарт качества
	        	</h2>

	        	<p>УДОБНЫЙ - ПРОИЗВОДИТЕЛЬНЫЙ - НАДЕЖНЫЙ - НУЖНЫЙ</p>
	        	<p>Строительный и садовый электрический инструмент, изготовленный по японским стандартам качества.</p>

        	</div>


        </div>

        @foreach($videos as $video)

        <div class="video-page_element">

        	<div class="video-page_video">

				<iframe src="https://www.youtube.com/embed/{{ $video->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        	</div>

        	<div class="video-page_info-block">

	        	<h2>
	        		{{ $video->name }}
	        	</h2>

	        	<p>
	        		{{ $video->more_about }}
	        	</p>

        	</div>


        </div>

        @endforeach

    </div>
</div>


@endsection

@section('scripts')
@parent

<script type="text/javascript" src="{{ asset('js/map_activation.js') }}"></script>

@endsection