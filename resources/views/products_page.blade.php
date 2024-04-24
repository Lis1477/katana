@extends('layouts.base')

@section('content')

<div class="products-page">
    <div class="container">

@include('includes.url_line')

        <h1>Продукция KATANA</h1>

        <div class="products-page_pic">
            <img src="{{ asset('img/products_pic.jpg') }}">
        </div>

        <div class="products-page_categories">
            @foreach($cats as $cat)

                @php
                    // выбираем код товара из категории, у которого имеется изображение
                    $prods = \App\Item::where([['name', 'like', '%katana%'], ['1c_category_id', $cat->{'1c_id'}], ['1c_category_id', '!=', 3149]])->orderBy('1c_id')->with('images')->get(['1c_id']);
                    foreach($prods as $prod) {
                        if($prod->images->count()) {
                            $prod_code = $prod->{'1c_id'};
                            $url = "http://alfastok.by/storage/item-images/".$prod_code."_0.jpg";
                            break;
                        }
                    }
                    if(!isset($prod_code)) {
                        $url = asset('img/katana_tramb.png');
                    } unset($prod_code);
                    // проверяем существует ли файл
                    $headers = @get_headers($url);
                    $is_exist = strpos($headers[0], '200');

                @endphp

            <a href="{{ asset('produktsiya/'.$cat->{'1c_id'}.'/'.$cat->slug) }}"
                class="products-page_category-element"
                title="Жми, чтобы смотреть все {{ $cat->name }}">

                <div class="products-page_img-block">

                @if($is_exist !== false)

                    <img src="{{ $url }}">

                @endif

                </div>

                <div class="products-page_title">
                    {{ $cat->name }}
                </div>
            </a>

            @endforeach
            
        </div>
    </div>
</div>


@endsection

