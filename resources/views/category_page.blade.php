@extends('layouts.base')

@section('content')

<div class="category-page">
    <div class="container">

@include('includes.url_line')

        <h1>{{ $ur_2['name'] }}</h1>

        @foreach($items as $item)

        <div class="category-page_item-element">

            <div class="category-page_img-block">

                @if($item->images->count())

                <img src="https://alfastok.by/storage/{{ $item->images[0]->path_image }}">

                @else

                <img src="{{ asset('img/katana_tramb.png') }}">

                @endif

            </div>

            <div class="category-page_info-block">

                <h2>
                    {{ $item->name }}
                </h2>

                @if($item->more_about)

                <div class="category-page_description">
                    {{ $item->more_about }}
                </div>

                @endif

                @if($item->charValues->count())

                <div class="category-page_characteristics">

                @foreach($item->charValues as $charValues)

                    @if($charValues->characteristic)

                    <p><strong>{{$charValues->characteristic->name}}:</strong> {{$charValues->value}} {{$charValues->characteristic->unit}}</p>

                    @endif

                @endforeach

                </div>

                @endif

                <div class="category-page_more-button">
                    <a href="{{ asset($ur_2['slug'].'/'.$item->{'1c_id'}.'/'.$item->slug) }}" title="Смотреть подробнее {{ $item->name }}">Подробнее</a>
                </div>

            </div>

        </div>

        @endforeach
            
    </div>
</div>


@endsection

