@extends('layouts.main')
@section('title','Services')
@section('styles')
    <link rel = "stylesheet" href = "{{ asset('/css/services.css') }}">
@endsection
@section('scripts')
@endsection
@section('content')
    <section class = "hero light-primary-color">
        <div class = "container">
            <!--Special Items------------------------------------------------------------------------------------------>
            <div>
                <figure class = "has-text-centered" id = "special_items_heading">
                    <img src = "{{ asset('/images/elements/web_special_heading.png') }}">
                </figure>
                <div class = "columns is-multiline bottom-buffer">
                    @foreach($items['specialItems'] as $specialItem)
                        <div class = "column is-half">
                            <article class = "media">
                                <div class = "media-left">
                                    @if(count($specialItem->images) > 0)
                                        <figure class = "image-container">
                                            <img src = "{{ $specialItem->images[0]->url }}" class= "item-image">
                                        </figure>
                                    @endif
                                </div>
                                <div class = "media-content">
                                    <h1 class= "special_item_name">{{ $specialItem->name }}</h1>
                                    <p class = "strike-through was-regular-price" >WAS $ {{ number_format($specialItem->regular_price) }}</p>
                                    <p class = "special_price_tag">NOW $ {{ number_format($specialItem->special_price) }}</p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--Special Items------------------------------------------------------------------------------------------>
            <!--Signature Items---------------------------------------------------------------------------------------->
            <div>
                <figure class = "has-text-centered" id = "special_items_heading">
                    <img src = "{{ asset('/images/elements/web_signature_heading.png') }}">
                </figure>
                <figure class = "has-text-centered">
                    <img src = "{{ asset('/images/elements/web_menu_divider.png') }}">
                </figure>
                <div class = "columns is-multiline bottom-buffer">
                    @foreach($items['signatureItems'] as $signatureItem)
                        <div class = "column is-half">
                            <article class = "media">
                                <div class = "media-left">
                                    @if(count($signatureItem->images) > 0)
                                        <figure class = "image-container">
                                            <img src = "{{ $signatureItem->images[0]->url }}" class= "item-image">
                                        </figure>
                                    @endif
                                </div>
                                <div class = "media-content">
                                    <div class = "level">
                                        <div class = "level-left"><h1 class= "special_item_name">{{ $signatureItem->name }}</h1></div>
                                        <div class = "level-right"><p class = "subtitle" >$ {{ number_format($signatureItem->regular_price) }}</p></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--Signature Items---------------------------------------------------------------------------------------->
            <!--Classic Items------------------------------------------------------------------------------------------>
            <div>
                <figure class = "has-text-centered" id = "special_items_heading">
                    <img src = "{{ asset('/images/elements/web_classic_heading.png') }}">
                </figure>
                <figure class = "has-text-centered">
                    <img src = "{{ asset('/images/elements/web_menu_divider.png') }}">
                </figure>
                <div class = "columns is-multiline bottom-buffer">
                    @foreach($items['classicItems'] as $classicItem)
                        <div class = "column is-half">
                            <article class = "media">
                                <div class = "media-left">
                                    @if(count($classicItem->images) > 0)
                                        <figure class = "image-container">
                                            <img src = "{{ $classicItem->images[0]->url }}" class= "item-image">
                                        </figure>
                                    @endif
                                </div>
                                <div class = "media-content">
                                    <div class = "level">
                                        <div class = "level-left"><h1 class= "special_item_name">{{ $classicItem->name }}</h1></div>

                                        <div class = "level-right"><p class = "subtitle" >$ {{ number_format($classicItem->regular_price) }}</p></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--Classic Items------------------------------------------------------------------------------------------>
            <!--Fullset Items------------------------------------------------------------------------------------------>
            <div>
                <figure class = "has-text-centered" id = "special_items_heading">
                    <img src = "{{ asset('/images/elements/web_fullset_heading.png') }}">
                </figure>
                <figure class = "has-text-centered">
                    <img src = "{{ asset('/images/elements/web_menu_divider.png') }}">
                </figure>
                <div class = "columns is-multiline bottom-buffer">
                    @foreach($items['fullSetItems'] as $fullSetItem)
                        <div class = "column is-half">
                            <article class = "media">
                                <div class = "media-left">
                                    @if(count($fullSetItem->images) > 0)
                                        <figure class = "image-container">
                                            <img src = "{{ $fullSetItem->images[0]->url }}" class= "item-image">
                                        </figure>
                                    @endif
                                </div>
                                <div class = "media-content">
                                    <div class = "level">
                                        <div class = "level-left"><h1 class= "special_item_name">{{ $fullSetItem->name }}</h1></div>
                                        <div class = "level-right"><p class = "subtitle">
                                                <span>$ {{ number_format($fullSetItem->regular_price) }}</span>
                                            @if(count($fullSetItem->details) > 0)
                                                @if($fullSetItem->details[0]->minimum_pricing == 1)
                                                    <span> & Up</span>
                                                @endif
                                            @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--Fullset Items------------------------------------------------------------------------------------------>
            <!--Backfill Items----------------------------------------------------------------------------------------->
            <div>
                <figure class = "has-text-centered" id = "special_items_heading">
                    <img src = "{{ asset('/images/elements/web_backfill_heading.png') }}">
                </figure>
                <figure class = "has-text-centered">
                    <img src = "{{ asset('/images/elements/web_menu_divider.png') }}">
                </figure>
                <div class = "columns is-multiline bottom-buffer">
                    @foreach($items['backFillItems'] as $backFillItem)
                        <div class = "column is-half">
                            <article class = "media">
                                <div class = "media-left">
                                    @if(count($backFillItem->images) > 0)
                                        <figure class = "image-container">
                                            <img src = "{{ $backFillItem->images[0]->url }}" class= "item-image">
                                        </figure>
                                    @endif
                                </div>
                                <div class = "media-content">
                                    <div class = "level">
                                        <div class = "level-left"><h1 class= "special_item_name">{{ $backFillItem->name }}</h1></div>
                                        <div class = "level-right"><p class = "subtitle" >$ {{ number_format($backFillItem->regular_price) }}</p></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--Backfill Items----------------------------------------------------------------------------------------->
            <!--Additional Items--------------------------------------------------------------------------------------->
            <div>
                <figure class = "has-text-centered" id = "special_items_heading">
                    <img src = "{{ asset('/images/elements/web_additional_heading.png') }}">
                </figure>
                <figure class = "has-text-centered ">
                    <img src = "{{ asset('/images/elements/web_menu_divider.png') }}">
                </figure>
                <div class = "columns is-multiline bottom-buffer">
                    @foreach($items['additionalItems'] as $additionalItem)
                        <div class = "column is-half">
                            <article class = "media">
                                <div class = "media-left">
                                    @if(count($additionalItem->images) > 0)
                                        <figure class = "image-container">
                                            <img src = "{{ $additionalItem->images[0]->url }}" class= "item-image">
                                        </figure>
                                    @endif
                                </div>
                                <div class = "media-content">
                                    <div class = "level">
                                        <div class = "level-left"><h1 class= "special_item_name">{{ $additionalItem->name }}</h1></div>
                                        <div class = "level-right"><p class = "subtitle" >$ {{ number_format($additionalItem->regular_price) }}</p></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--Additional Items--------------------------------------------------------------------------------------->
            <!--Children Items----------------------------------------------------------------------------------------->
            <div>
                <figure class = "has-text-centered" id = "special_items_heading">
                    <img src = "{{ asset('/images/elements/web_children_heading.png') }}">
                </figure>
                <figure class = "has-text-centered">
                    <img src = "{{ asset('/images/elements/web_menu_divider.png') }}">
                </figure>
                <div class = "columns is-multiline bottom-buffer">
                    @foreach($items['childrenItems'] as $childrenItem)
                        <div class = "column is-half">
                            <article class = "media">
                                <div class = "media-left">
                                    @if(count($childrenItem->images) > 0)
                                        <figure class = "image-container">
                                            <img src = "{{ $childrenItem->images[0]->url }}" class= "item-image">
                                        </figure>
                                    @endif
                                </div>
                                <div class = "media-content">
                                    <div class = "level">
                                        <div class = "level-left"><h1 class= "special_item_name">{{ $childrenItem->name }}</h1></div>
                                        <div class = "level-right"><p class = "subtitle" >$ {{ number_format($childrenItem->regular_price) }}</p></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--Children Items----------------------------------------------------------------------------------------->
            <p class = "has-text-centered">Price and availability may change without notice. Please ask your technician before service.</p>
        </div>

    </section>

@endsection