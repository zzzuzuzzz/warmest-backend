@extends('site.layouts.main')
@section('content')
<div id="main-content-block" class="main-page-block">
    <div id="welcome-block" class="d-flex container flex-column align-items-center main-page-block ">
        <div class="container none-mobile" style="text-align: center;">
        <span style="font-size: var(--warmest-xxlarge-font-size); font-weight: 700;">
          <span style="color: var(--warmest-orange);">WARM</span><span style="color: #FECE95;">EST</span>
        </span>
        </div>
        <div class="container d-flex">
            <div id="welcome-block-text" class="container d-flex flex-column roboto-slab" style="gap: 10px;">
                <div class="title" style="font-weight: var(--warmest-xbig-font-weight);">
                    Наши бани
                </div>
                <span style="font-size: var(--warmest-medium-font-size);">
            Наше сердце всегда тепло к нашим клиентам, и мы готовы предложить вам лучшие решения для создания вашей
            личной зоны отдыха и уюта - <span style="font-weight: var(--warmest-big-font-weight);">бани</span>.
          </span>
                <div>
                    <a class="warmest-btn" href="#" style="width: fit-content; text-decoration: none; cursor: pointer;">
                        <span>Подробнее</span>
                        <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
            <div id="welcome-block-img-container" class="container d-flex none-mobile" style="position: relative;">
                <div style="position: absolute; bottom: 0; right: 0; width: 100%;">
                    <img src="/assets/img/houses/baths.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div id="stock-block" class="main-page-block">
        <div class="stock-container">
            <img src="/assets/img/Intersect.png" class="img-fluid">
            <div class="stock-text-container">
                <div class="stock-title">
                    <svg width="104" height="2" viewBox="0 0 104 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1H103.5" stroke="#472B0B" stroke-width="2" />
                    </svg>
                    <span>Акция</span>
                    <svg width="104" height="2" viewBox="0 0 104 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1H103.5" stroke="#472B0B" stroke-width="2" />
                    </svg>
                </div>
                <div class="stock-text">
                    При покупке дома стоимостью от 1 500 000 руб - <span
                        style="font-weight: var(--warmest-xbig-font-weight);">БАНЯ</span> в подарок
                </div>
                <a class="warmest-btn" href="#" style="width: fit-content; text-decoration: none; cursor: pointer;">
                    <span>Подробнее</span>
                    <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div id="our-products" class="main-page-block">
        <div class="our-products-container">
            <div class="title" style="color: var(--warmest-orange); font-weight: var(--warmest-xbig-font-weight);">Наши
                бани</div>
        </div>
    </div>
    <div id="stock-block" class="main-page-block">
        <div class="baths-container">
            <div class="warmest-grid-container">
                <div class="warmest-demo-card">
                    <div class="warmest-card-header">
                        <div>
                            <div class="warmest-card-title">Ванкувер</div>
                            <div class="house-sizes">
                                <span class="square">125 м²</span>
                                <span class="size text-small">9X8м</span>
                            </div>
                        </div>
                        <div class="warmest-card-actions">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">
                                <path fill="#FFA234"
                                      d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="house-img-container">
                        <img class="img-fluid" src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                    </div>
                    <div class="warmest-card-footer">
                        <div class="price-container price-left">
                            <div>
                                <span>от</span>
                                <span style="color: var(--warmest-orange)">5 284 600</span>
                                <span style="color: var(--warmest-orange)">руб</span>
                            </div>
                            <div class="text-small">
                                <span>В ипотеку - от</span>
                                <span>35 000</span>
                                <span>руб./мес.</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn-gray warmest-btn" style="font-size: var(--warmest-small-font-size); width: max-content;">
                                <span>Подробнее</span>
                                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="warmest-demo-card">
                    <div class="warmest-card-header">
                        <div>
                            <div class="warmest-card-title">Ванкувер</div>
                            <div class="house-sizes">
                                <span class="square">125 м²</span>
                                <span class="size text-small">9X8м</span>
                            </div>
                        </div>
                        <div class="warmest-card-actions">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">
                                <path fill="#FFA234"
                                      d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="house-img-container">
                        <img class="img-fluid" src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                    </div>
                    <div class="warmest-card-footer">
                        <div class="price-container price-left">
                            <div>
                                <span>от</span>
                                <span style="color: var(--warmest-orange)">5 284 600</span>
                                <span style="color: var(--warmest-orange)">руб</span>
                            </div>
                            <div class="text-small">
                                <span>В ипотеку - от</span>
                                <span>35 000</span>
                                <span>руб./мес.</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn-gray warmest-btn" style="font-size: var(--warmest-small-font-size); width: max-content;">
                                <span>Подробнее</span>
                                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="warmest-demo-card">
                    <div class="warmest-card-header">
                        <div>
                            <div class="warmest-card-title">Ванкувер</div>
                            <div class="house-sizes">
                                <span class="square">125 м²</span>
                                <span class="size text-small">9X8м</span>
                            </div>
                        </div>
                        <div class="warmest-card-actions">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">
                                <path fill="#FFA234"
                                      d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="house-img-container">
                        <img class="img-fluid" src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                    </div>
                    <div class="warmest-card-footer">
                        <div class="price-container price-left">
                            <div>
                                <span>от</span>
                                <span style="color: var(--warmest-orange)">5 284 600</span>
                                <span style="color: var(--warmest-orange)">руб</span>
                            </div>
                            <div class="text-small">
                                <span>В ипотеку - от</span>
                                <span>35 000</span>
                                <span>руб./мес.</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn-gray warmest-btn" style="font-size: var(--warmest-small-font-size); width: max-content;">
                                <span>Подробнее</span>
                                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="warmest-demo-card">
                    <div class="warmest-card-header">
                        <div>
                            <div class="warmest-card-title">Ванкувер</div>
                            <div class="house-sizes">
                                <span class="square">125 м²</span>
                                <span class="size text-small">9X8м</span>
                            </div>
                        </div>
                        <div class="warmest-card-actions">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">
                                <path fill="#FFA234"
                                      d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="house-img-container">
                        <img class="img-fluid" src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                    </div>
                    <div class="warmest-card-footer">
                        <div class="price-container price-left">
                            <div>
                                <span>от</span>
                                <span style="color: var(--warmest-orange)">5 284 600</span>
                                <span style="color: var(--warmest-orange)">руб</span>
                            </div>
                            <div class="text-small">
                                <span>В ипотеку - от</span>
                                <span>35 000</span>
                                <span>руб./мес.</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn-gray warmest-btn" style="font-size: var(--warmest-small-font-size); width: max-content;">
                                <span>Подробнее</span>
                                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="warmest-demo-card">
                    <div class="warmest-card-header">
                        <div>
                            <div class="warmest-card-title">Ванкувер</div>
                            <div class="house-sizes">
                                <span class="square">125 м²</span>
                                <span class="size text-small">9X8м</span>
                            </div>
                        </div>
                        <div class="warmest-card-actions">
                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">
                                <path fill="#FFA234"
                                      d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="house-img-container">
                        <img class="img-fluid" src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                    </div>
                    <div class="warmest-card-footer">
                        <div class="price-container price-left">
                            <div>
                                <span>от</span>
                                <span style="color: var(--warmest-orange)">5 284 600</span>
                                <span style="color: var(--warmest-orange)">руб</span>
                            </div>
                            <div class="text-small">
                                <span>В ипотеку - от</span>
                                <span>35 000</span>
                                <span>руб./мес.</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn-gray warmest-btn" style="font-size: var(--warmest-small-font-size); width: max-content;">
                                <span>Подробнее</span>
                                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <a class="warmest-btn" href="/pages/catalog.html" style="width: fit-content; text-decoration: none; cursor: pointer;">
                    <span>Смотреть еще</span>
                </a>
            </div>
        </div>
    </div>
    <div id="info-block-v3" class="main-page-block">
        <a href="#">
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
    </div>
</div>
@endsection
