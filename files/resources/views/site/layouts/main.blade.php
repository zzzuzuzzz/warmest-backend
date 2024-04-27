<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/texts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/nav-bar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/card.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/swiper.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <script src="{{ asset('styles/js/index.js') }}" defer type="module"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4380d47dd2.js" crossorigin="anonymous"></script>
    <title>Warmest</title>
</head>

<body>
<nav class="navbar navbar-expand-lg">
    <div class="container justify-content-center">
        <a class="navbar-brand p-1" href="{{ route('site.index') }}">
            <span class="logo">Warmest</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('site.index#about-us-block') }}">О нас</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="#">Дома</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="#">Малые формы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.catalog') }}">Наши объекты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.index#our-services') }}">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.index#house-block') }}">Дом в ипотеку</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.index#contact-us-block') }}">Контакты</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="#">Для инвестора</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="main-content-block">
    @yield('content')
</div>
<div id="tmp-like"></div>
<div id="footer" class="d-flex flex-column bg-dark p-2 main-page-block" style="color: #fff;">
    <div class="d-flex p-1 justify-content-center">
        <span class="logo">Warmest</span>
    </div>
    <div id="warmest-footer-data" class="d-flex container p-2">
        <div class="d-flex flex-column gap-2" style="font-size: var(--warmest-medium-font-size);">
        <span style="font-weight: 500; color: var(--warmest-orange); text-decoration: underline;">
          Мы на связи
        </span>
            <div class="d-flex flex-column gap-1" style="font-size: var(--warmest-small-font-size);">
                <span>+7(977)197-47-47</span>
                <span>s9773237640@gmail.com</span>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    .service-small-container {
        font-size: var(--warmest-medium-font-size);
        color: #fff;
        flex: auto;
        display: flex;
        align-items: center;
    }

    .serviceSwiper {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .roboto-slab {
        font-family: "Roboto Slab", serif;
    }

    .photoSwiper {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }

    .active {
        fill: var(--warmest-orange);
    }

    .roboto-slab {
        font-family: "Roboto Slab", serif;
    }

    .photoSwiper {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }

    .active {
        fill: var(--warmest-orange);
    }
    .button-container {
        padding: 10px;
    }
    .warmest-btn {
        display: inline-block;
        background-color: var(--warmest-orange);
        border: 2px solid #ffffff00;
        padding: 5px 0px;
        width: 100%;
        border-radius: 4px;
    }

    .warmest-btn:hover {
        background-color: var(--warmest-dark-orange);
        transition: all 200ms;
    }

    .warmest-btn:active {
        border: 2px solid var(--bs-dark);
        transition: all 200ms;
    }
</style>

<script type="module" defer>
    import servicesData from '{{ asset('assets/js/servicesData.js') }}';
    import slider from '{{ asset('assets/js/slider.js') }}';
    {{--import cardsInfo from '{{ asset('assets/js/cardsInfo.js') }}'--}}
    {{--import warmestCard from '{{ asset('assets/js/warmestCard.js') }}';--}}


    document.addEventListener('DOMContentLoaded', main);

    function main() {
        new slider.Slider(
            '.serviceSwiper',
            {
                direction: 'horizontal',
                autoplay: true,
                loop: true,
                speed: 400,
                spaceBetween: 100,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    dynamicBullets: true,
                }
            },
            servicesData.BigSliderData
        );
    }

    // let tmp = document.querySelector('.products-container')
    // for (let item of cardsInfo) {
    //     const card = new warmestCard.WarmestCard(item)
    //     card.addCardTo(tmp)
    // }
</script>
