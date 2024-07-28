@extends('site.layouts.main')
@section('content')
    <div id="main-content-block">
        <div id="welcome-block" class="main-page-block" style="margin-top: 0px;">
            <div class="cards-container">
                <div class="title-container ipoteca-title">
                    <div class="title">Дом в ипотеку</div>
                    <div class="title-text">
                        Вложитесь в свое <b>будущее</b> прямо <b>сейчас!</b>
                    </div>
                    <a class="warmest-btn" href="#calculator-block"
                       style="width: fit-content; text-decoration: none; cursor: pointer;">
                        <span>Расчитать ипотеку</span>
                        <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
                <div class="house-container" style="padding: 10px;">
                    <img class="img-fluid" src="/assets/img/ipotecahouse.png">
                </div>
            </div>
        </div>
        <div id="calculator-block" class="main-page-block">
            <div class="warmest-container calculator-container">
                <div class="flag-title-container" style="width: fit-content;">
                    <div class="title">
                        <span style="color: #fff; font-weight: 300;">Калькулятор ипотеки</span>
                    </div>
                    <div class="triangle"></div>
                </div>
                <div class="warmest-container calc-container">
                    <div class="warmest-container calculator-input-container" style="width: 100%;">
                        <div class="warmest-container calculator-input-container-item">
                            <div class="title-of-value">Стоимость дома</div>
                            <div class="warmest-container input-values-container">
                                <input id="house-cost-value" class="value-of-range" value="0">
                                <input id="house-cost" type="range" value="0" min="0" max="999999999" step="1">
                                <div class="warmest-container" style="justify-content: space-between; width: 100%; padding: 0px 5px;">
                                    <span>0</span>
                                    <span>999 999 999</span>
                                </div>
                            </div>
                        </div>
                        <div class="warmest-container calculator-input-container-item">
                            <div class="title-of-value">Первоначальный взнос</div>
                            <div class="warmest-container input-values-container">
                                <input id="initial-payment-value" class="value-of-range" value="0">
                                <input id="initial-payment" type="range" value="0" min="0" max="999999999" step="99.9">
                                <div class="warmest-container" style="justify-content: space-between; width: 100%; padding: 0px 5px;">
                                    <span>0</span>
                                    <span>999 999 999</span>
                                </div>
                            </div>
                        </div>
                        <div class="warmest-container calculator-input-container-item">
                            <div class=" title-of-value">Срок ипотеки</div>
                            <div class="warmest-container input-values-container">
                                <input id="mortgage-term-value" class="value-of-range" value="1">
                                <input id="mortgage-term" type="range" value="1" min="1" max="30" step="1" style="width: 50%;">
                                <div class="warmest-container" style="justify-content: space-between; width: 50%; padding: 0px 5px;">
                                    <span>1</span>
                                    <span>30</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="warmest-btn" style="width: max-content">
                                <span>Подать заявку</span>
                                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="warmest-container calculator-values-container" style="width: 100%;">
                        <div class="calc-title">
                            <span style="color: var(--warmest-orange)">Стандартная ипотека</span>
                        </div>
                        <div class="calculator-values">
                            <div class="calc-value-container">
                                <div class="calc-value-title">Процентная ставка</div>
                                <div id="interest-rate" class="calc-value">8%</div>
                            </div>
                            <div class="calc-value-container">
                                <div class="calc-value-title">Ежемесячный платёж</div>
                                <div id="monthly-payment" class="calc-value">0</div>
                            </div>
                            <div class="calc-value-container">
                                <div class="calc-value-title">Переплата</div>
                                <div class="calc-value">
                                    <span id="overpayment"></span><span style="color: var(--warmest-orange);">₽</span>
                                </div>
                            </div>
                        </div>
                        <div class="warmest-title">
                            <span style="color: #FFA234;">WARM</span><span style="color: #FECE95">EST</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="our-products" class="main-page-block">
            <div class="our-products-container">
                <div class="title" style="color: var(--warmest-orange); font-weight: var(--warmest-xbig-font-weight);">Наши
                    объекты</div>
                <div class="my-swiper-container">
                    <div class="swiper my-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-img-container">
                                    <img src="/assets/img/beatifulHouse.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-button"></div>
                        <div class="swiper-button-prev swiper-button"></div>
                    </div>
                </div>
                <a class="warmest-btn" href="/pages/catalog.html"
                   style="width: fit-content; text-decoration: none; cursor: pointer;">
                    <span>Подробнее</span>
                    <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>
        <div id="consult-block" class="main-page-block">
            <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="page-link-container">
                    <span>Оставить заявку на консультацию</span>
                    <div>
                        <svg width="19" height="29" viewBox="0 0 19 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.32592 29C1.06361 29 0.807209 28.9361 0.589141 28.8164C0.371072 28.6967 0.201134 28.5267 0.100817 28.3277C0.000499394 28.1288 -0.0256906 27.9099 0.0255593 27.6988C0.0768092 27.4876 0.203196 27.2937 0.388738 27.1415L15.7984 14.4931L0.388738 1.84479C0.147158 1.63949 0.0134839 1.36452 0.0165056 1.0791C0.0195272 0.793684 0.159003 0.52066 0.404893 0.318832C0.650783 0.117004 0.983411 0.00252134 1.33114 4.11504e-05C1.67887 -0.00243904 2.01387 0.107282 2.26399 0.305571L18.6117 13.7239C18.8603 13.928 19 14.2048 19 14.4935C19 14.7821 18.8603 15.059 18.6117 15.2631L2.26399 28.6814C2.14078 28.7825 1.99452 28.8626 1.83357 28.9173C1.67261 28.972 1.50011 29.0001 1.32592 29Z"
                                fill="#472B0B" />
                        </svg>
                    </div>
                </div>
            </a>
            <div class="modal modal-xl fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" style="color: var(--warmest-orange)" id="exampleModalLabel">Заполните форму и наш менеджер свяжется с вами</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body warmest-body-modal">
                            <div class="modal-body-input">
                                <input type="text" placeholder="Ваше имя" class="form-control" style="font-size: var(--warmest-medium-font-size);">
                                <input type="text" placeholder="Телефон" class="form-control" style="font-size: var(--warmest-medium-font-size);">
                            </div>
                            <textarea placeholder="Сообщение" class="form-control" style="height: 30vh; resize: none; font-size: var(--warmest-medium-font-size);"></textarea>
                        </div>
                        <div class="modal-footer waremst-modal-footer">
                            <span style="font-size: var(--warmest-small-font-size); color: var(--warmest-gray)">Нажимая кнопку “Отправить”, я даю согласие на обработку персональных данных.</span>
                            <button type="button" class="warmest-btn">Отправить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
