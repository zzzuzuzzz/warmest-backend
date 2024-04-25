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
{{--            <div class="warmest-card">--}}
{{--              <div class="warmest-card-header">--}}
{{--                <div class="product-name">ProductName</div>--}}
{{--                <div class="like-container">--}}
{{--                  <i class="fa-solid fa-heart" style="color: #ff8a00; display: none;"></i>--}}
{{--                  <i class="fa-regular fa-heart" style="color: #ff8a00;"></i>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="warmest-card-photo-body" style="overflow: hidden; color: #fff;">--}}
{{--                <div class="swiper photoSwiper" id="product-00">--}}
{{--                  <div class="swiper-wrapper">--}}
{{--                  </div>--}}
{{--                  <div class="swiper-pagination" style="bottom: auto;"></div>--}}
{{--                  <div class="swiper-button-prev swiper-button"></div>--}}
{{--                  <div class="swiper-button-next swiper-button"></div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--              <div class="warmest-info-container">--}}
{{--                <div class="params-container">--}}
{{--                  <div class="option-container">--}}
{{--                    <div class="ico">--}}
{{--                      <object type="image/svg+xml" data="/assets/svg/square.svg"></object>--}}
{{--                    </div>--}}
{{--                    <div class="value">--}}
{{--                      <span class="text">999</span>--}}
{{--                      <span style="color: var(--warmest-orange);">м²</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="option-container">--}}
{{--                    <div class="ico">--}}
{{--                      <object type="image/svg+xml" data="/assets/svg/flours.svg"></object>--}}
{{--                    </div>--}}
{{--                    <div class="value">--}}
{{--                      <span class="text">1</span>--}}
{{--                      <span style="color: var(--warmest-orange);">этаж</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="option-container">--}}
{{--                    <div class="ico">--}}
{{--                      <object type="image/svg+xml" data="/assets/svg/rooms.svg"></object>--}}
{{--                    </div>--}}
{{--                    <div class="value">--}}
{{--                      <span class="text">5</span>--}}
{{--                      <span style="color: var(--warmest-orange);">комнат</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="option-container">--}}
{{--                    <div class="ico">--}}
{{--                      <object type="image/svg+xml" data="/assets/svg/size.svg"></object>--}}
{{--                    </div>--}}
{{--                    <div class="value">--}}
{{--                      <span class="text">1</span>--}}
{{--                      <span>x</span>--}}
{{--                      <span class="text">2</span>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="prices-container">--}}
{{--                  <div class="current-price">--}}
{{--                    <span class="text">5 900 000</span>--}}
{{--                    <span class="static-text" style="color: var(--warmest-orange);">₽</span>--}}
{{--                  </div>--}}
{{--                  <div class="current-price-with-comm">--}}
{{--                    <span class="text">7 900 000</span>--}}
{{--                    <span class="static-text" style="color: var(--warmest-orange);">₽</span>--}}
{{--                  </div>--}}
{{--                  <div class="old-price" style="display: none;">--}}
{{--                    <span class="text"></span>--}}
{{--                    <span class="static-text" style="color: var(--warmest-orange);">₽</span>--}}
{{--                  </div>--}}
{{--                  <div class="other-price"></div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            @foreach(['1'] as $it)--}}
                <div class="warmest-card">
                    <div class="warmest-card-header">
                        <div class="product-name">productName1</div>
                        <div class="like-container">
                            <i class="fa-heart fa-solid fa-lg" aria-hidden="true" style="color: rgb(255, 138, 0); display: none;"></i>
                            <i class="fa-heart fa-regular fa-lg" aria-hidden="true" style="color: rgb(255, 138, 0); display: block;"></i>
                        </div>
                    </div>
                    <div class="warmest-card-photo-body" style="overflow: hidden; color: rgb(255, 255, 255);">
                        <div class="swiper photoSwiper swiper-initialized swiper-horizontal swiper-ios swiper-backface-hidden" id="product-0">
                            <div class="swiper-wrapper" id="swiper-wrapper-15ec9a2d2c7100f62" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 8" style="width: 362px; margin-right: 100px;" data-swiper-slide-index="0">
                                    <div style="width: 80%;">
                                        <img src="/assets/img/houses/01/01_V0_010000.png" class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 8" data-swiper-slide-index="1" style="width: 362px; margin-right: 100px;">
                                    <div style="width: 80%;">
                                        <img src="/assets/img/houses/01/01_V0_020090.png" class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 8" data-swiper-slide-index="2" style="width: 362px; margin-right: 100px;">
                                    <div style="width: 80%;">
                                        <img src="/assets/img/houses/01/01_V0_030180.png" class="img-fluid">
                                    </div></div><div class="swiper-slide" role="group" aria-label="4 / 8" data-swiper-slide-index="3" style="width: 362px; margin-right: 100px;">
                                    <div style="width: 80%;">
                                        <img src="/assets/img/houses/01/01_V0_040270.png" class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="5 / 8" data-swiper-slide-index="4" style="width: 362px; margin-right: 100px;">
                                    <div style="width: 80%;">
                                        <img src="/assets/img/houses/01/01_V0_Ф10000.png" class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="6 / 8" data-swiper-slide-index="5" style="width: 362px; margin-right: 100px;">
                                    <div style="width: 80%;">
                                        <img src="/assets/img/houses/01/01_V0_Ф20090.png" class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="7 / 8" data-swiper-slide-index="6" style="width: 362px; margin-right: 100px;">
                                    <div style="width: 80%;">
                                        <img src="/assets/img/houses/01/01_V0_Ф30180.png" class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 362px; margin-right: 100px;">
                                    <div style="width: 80%;">
                                        <img src="/assets/img/houses/01/01_V0_Ф40270.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal" style="bottom: auto;">
                                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span>
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet"></span>
                                <span class="swiper-pagination-bullet"></span>
                            </div>
                            <div class="swiper-button-prev swiper-button" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-15ec9a2d2c7100f62" style="display: none;"></div>
                            <div class="swiper-button-next swiper-button" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-15ec9a2d2c7100f62" style="display: none;"></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                    <div class="warmest-info-container">
                        <div class="params-container">
                            <div class="option-container">
                                <div class="ico">
                                    <object type="image/svg+xml" data="/assets/svg/size.svg"></object>
                                </div>
                                <div class="value">
                                    <span class="text" style="">999</span>
                                    <span class="" style="color: var(--warmest-orange);">м²</span>
                                </div>
                            </div>
                            <div class="option-container">
                                <div class="ico">
                                    <object type="image/svg+xml" data="/assets/svg/floors.svg"></object>
                                </div>
                                <div class="value">
                                    <span class="text" style="">1</span>
                                    <span class="" style="color: var(--warmest-orange);">Этаж</span>
                                </div>
                            </div>
                            <div class="option-container">
                                <div class="ico">
                                    <object type="image/svg+xml" data="/assets/svg/rooms.svg"></object>
                                </div>
                                <div class="value">
                                    <span class="text" style="">3</span>
                                    <span class="" style="color: var(--warmest-orange);">Комнаты</span>
                                </div>
                            </div>
                            <div class="option-container">
                                <div class="ico">
                                    <object type="image/svg+xml" data="/assets/svg/square.svg"></object>
                                </div>
                                <div class="value">
                                    <span class="text" style="">1</span>
                                    <span class="" style="">x</span>
                                    <span class="text" style="">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="prices-container">
                            <div class="current-price value">
                                <span class="text" style="">5000000</span>
                                <span class="" style="color: var(--warmest-orange);">₽</span>
                            </div>
                            <div class="current-price-with-comm value">
                                <span class="text" style="">7000000</span>
                                <span class="" style="color: var(--warmest-orange);">₽</span>
                            </div>
                            <div class="other-price">
                                <span class="text" style="font-size: var(--warmest-small-font-size); font-weight: 300;">Тут будет текст про ипотеку</span>
                            </div>
                        </div>
                    </div>
                </div>
{{--            @endforeach--}}
        </div>
    </div>
@endsection
