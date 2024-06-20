@extends('site.layouts.main')
@section('content')
    <div id="welcome-block" class="d-flex container flex-column align-items-center main-page-block ">
        <div class="container none-mobile" style="text-align: center;">
        <span style="font-size: var(--warmest-xxlarge-font-size); font-weight: 700;">
          <span style="color: var(--warmest-orange);">WARM</span><span>EST</span>
        </span>
        </div>
        <div class="container d-flex">
            <div class="container d-flex flex-column roboto-slab" style="gap: 10px;">
                <div class="title" style="font-weight: 600;">
                    Наши объекты
                </div>
                <div>
            <span style="font-size: var(--warmest-medium-font-size);">
              Для строительства Вашего дома мы используем самые качественные материалы,
              благодаря чему, наша строительная компания дает гарантию на конструкцию дома до 30 лет.
            </span>
                </div>
            </div>
            <div class="container d-flex none-mobile" style="position: relative;">
                <div style="position: absolute; bottom: 0; right: 0; width: 100%;">
                    <img src="/assets/img/houses/10X9_Домодедово_Античный_кирпич/10X9_Домодедово_Античный_кирпич_010000.png"
                         class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div id="block" class="d-flex container flex-column align-items-center main-page-block"
         style="gap:30px; text-align: justify;">
        <div class="title">
            <div>
                Готовые <span style="color: var(--warmest-orange);">решения</span></div>
            <div class="line"></div>
        </div>
        <div class="products-container">
            @foreach($housesList as $house)
                @if($house->is_published == 1)
                    <div class="warmest-card">
                        <div class="warmest-card-header">
                            <div class="product-name">{{ $house->title }}</div>
{{--                            <div class="like-container">--}}
{{--                                <i class="fa-solid fa-heart" style="color: #ff8a00; display: none;"></i>--}}
{{--                                <i class="fa-regular fa-heart" style="color: #ff8a00;"></i>--}}
{{--                            </div>--}}
                        </div>
                        <div class="warmest-card-photo-body" style="overflow: hidden; color: rgb(255, 255, 255);">
                            <div class="swiper photoSwiper product-tmp serviceSwiper">
                                <div class="swiper-wrapper">
                                    @foreach($house->images as $img)
                                        <div class="swiper-slide">
                                            <div style="width: 80%;">
                                                <img src="storage/{{ $img }}" class="img-fluid">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev swiper-button"></div>
                                <div class="swiper-button-next swiper-button"></div>
                            </div>
                        </div>
                        <div class="warmest-info-container">
                            <div class="params-container">
                                <div class="option-container">
                                    <div class="ico">
                                        <object type="image/svg+xml" data="/assets/svg/square.svg"></object>
                                    </div>
                                    <div class="value">
                                        <span class="text">{{ $house->params_size }}</span>
                                        <span style="color: var(--warmest-orange);">м²</span>
                                    </div>
                                </div>
                                <div class="option-container">
                                    <div class="ico">
                                        <object type="image/svg+xml" data="/assets/svg/flours.svg"></object>
                                    </div>
                                    <div class="value">
                                        <span class="text">{{ $house->params_floors }}</span>
                                        <span style="color: var(--warmest-orange);">{{ $house->params_floors == '1' ? 'этаж' : 'этажа'}}</span>
                                    </div>
                                </div>
                                <div class="option-container">
                                    <div class="ico">
                                        <object type="image/svg+xml" data="/assets/svg/size.svg"></object>
                                    </div>
                                    <div class="value">
                                        <span class="text">{{ $house->params_length }}</span>
                                        <span>x</span>
                                        <span class="text">{{ $house->params_width }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="prices-container">
                                <div class="current-price">
                                    <span class="text">{{ $house->main_price }}</span>
                                    <span class="static-text" style="color: var(--warmest-orange);">₽</span>
                                </div>
                                <div class="current-price-with-comm">
                                    <span class="text">{{ $house->add_price }}</span>
                                    <span class="static-text" style="color: var(--warmest-orange);">₽</span>
                                </div>
                                <div class="old-price" style="display: none;">
                                    <span class="text"></span>
                                    <span class="static-text" style="color: var(--warmest-orange);">₽</span>
                                </div>
                                <div class="other-price"></div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
