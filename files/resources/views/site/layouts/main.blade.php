<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/index.css') }}">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/swiper-11.1.5/swiper-bundle.css') }}">
    <script src="{{ asset('assets/bootstrap-5.3.3/dist/js/bootstrap.bundle.js') }}" defer></script>
    <script src="{{ asset('assets/swiper-11.1.5/swiper-bundle.js') }}" defer></script>
    <script src="{{ asset('assets/swiper-11.1.5/swiper-element-bundle.js') }}" defer></script>
    <script src="{{ asset('styles/js/index.js') }}" defer type="module"></script>
    <title>Warmest</title>
</head>
<body>
<div class="nav-container">
    <a href="{{ route('site.index') }}" style="position: relative; display: flex;">
        <div class="warmest-header-logo">
            <div>
                <div class="warmest-house-top"></div>
                <div class="warmest-house">
                    <span>WARM</span>
                </div>
            </div>
            <span class="">EST</span>
        </div>
    </a>
    <div class="warmest-nav-tabs desktop-tabs">
        <div><a aria-current="page" href="{{ route('site.about') }}">О нас</a></div>
        <div><a href="#">Дома</a></div>
        <div><a href="{{ route('site.baths') }}">Бани</a></div>
        <div><a href="{{ route('site.catalog') }}">Наши объекты</a></div>
        <div><a href="{{ route('site.credit') }}">Дом в ипотеку</a></div>
        <div><a href="#">Услуги</a></div>
        <div><a href="{{ route('site.index') }}">Главная</a></div>
    </div>
    <div class="warmest-nav-tabs desktop-tabs">
        <div><a>8 800 300 4322</a></div>
        <div class="icons-container">
            <a href="#">
                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.64083 10.0509L9.59346 16.5822C9.83296 16.8071 9.95266 16.9196 10.0939 16.9473C10.1575 16.9598 10.2229 16.9598 10.2865 16.9473C10.4277 16.9196 10.5474 16.8071 10.7869 16.5822L17.7395 10.0509C19.6957 8.21325 19.9332 5.18925 18.288 3.06872L17.9787 2.66999C16.0105 0.133231 12.0598 0.558661 10.6769 3.4563C10.4815 3.86561 9.89886 3.86561 9.70346 3.4563C8.32056 0.558661 4.36988 0.133231 2.4017 2.67L2.09235 3.06872C0.447106 5.18925 0.684655 8.21325 2.64083 10.0509Z"
                        stroke="#483723"/>
                </svg>
            </a>
{{--            <a href="#">--}}
{{--                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path--}}
{{--                        d="M0.530438 15.8749L5.80163 17.9798C5.83594 17.9939 5.87138 18 5.90625 18C5.94112 18 5.97712 17.9933 6.01087 17.9798L11.5363 15.7731L16.8688 17.7087C16.9622 17.743 17.0595 17.7593 17.1568 17.7593C17.3278 17.7593 17.4966 17.7075 17.6406 17.6069C17.8656 17.4494 18.0006 17.1906 18.0006 16.9155V5.17166C18.0006 4.81785 17.7773 4.49948 17.4448 4.37854L14.0715 3.15398C13.9241 3.10279 13.7638 3.17648 13.7109 3.32273C13.6575 3.46841 13.7329 3.62985 13.8791 3.68329L17.2524 4.90785C17.3627 4.94779 17.4375 5.0541 17.4375 5.17166V16.9161C17.4375 17.0089 17.3936 17.0927 17.3177 17.1467C17.2401 17.2002 17.1472 17.2125 17.0606 17.1805L11.8125 15.2753V10.6875C11.8125 10.5323 11.6865 10.4063 11.5312 10.4063C11.376 10.4063 11.25 10.5323 11.25 10.6875V15.2815L6.1875 17.3031V11.25C6.1875 11.0948 6.0615 10.9688 5.90625 10.9688C5.751 10.9688 5.625 11.0948 5.625 11.25V17.3037L0.739125 15.3529C0.631688 15.3096 0.5625 15.2072 0.5625 15.0914V3.36154C0.5625 3.26704 0.6075 3.1821 0.68625 3.12866C0.765 3.07579 0.860062 3.0651 0.948375 3.10054L2.77087 3.82841C2.91431 3.88691 3.07856 3.81548 3.13594 3.67148C3.19387 3.52748 3.12356 3.36379 2.97956 3.30585L1.15706 2.57798C0.896062 2.47335 0.602437 2.50654 0.370125 2.66291C0.138375 2.82041 0 3.08141 0 3.36154V15.0914C0 15.4384 0.208125 15.7461 0.530438 15.8749Z"--}}
{{--                        fill="#483723" stroke="#483723" stroke-width="0.448"/>--}}
{{--                    <path--}}
{{--                        d="M7.90709 12.6382C8.03646 12.826 8.25078 12.938 8.47915 12.938C8.70921 12.938 8.92409 12.8244 9.05234 12.6365L11.1313 9.65073L12.298 7.87548C13.1277 6.82473 13.4815 5.50905 13.2942 4.17086C12.9938 2.01705 11.2005 0.276671 9.0304 0.031983C6.08684 -0.294267 3.58484 1.99736 3.58484 4.86667C3.58484 5.98998 3.94934 6.9873 4.76384 8.0943L7.90709 12.6382ZM8.46396 0.562983C8.6299 0.562983 8.79809 0.572546 8.96796 0.591671C10.8861 0.807671 12.4718 2.34611 12.7373 4.24905C12.9027 5.43367 12.5893 6.59805 11.8418 7.54642L10.665 9.33517L8.58884 12.317C8.51965 12.4182 8.43809 12.4177 8.3689 12.3175L5.22115 7.76748C4.47809 6.75667 4.14678 5.86173 4.14678 4.86611C4.14734 2.49348 6.08346 0.562983 8.46396 0.562983Z"--}}
{{--                        fill="#483723" stroke="#483723" stroke-width="0.448"/>--}}
{{--                    <path--}}
{{--                        d="M8.4386 6.55371C9.36897 6.55371 10.1261 5.79659 10.1261 4.86621C10.1261 3.93584 9.36897 3.17871 8.4386 3.17871C7.50822 3.17871 6.7511 3.93584 6.7511 4.86621C6.7511 5.79659 7.50822 6.55371 8.4386 6.55371ZM8.4386 3.74121C9.05904 3.74121 9.5636 4.24577 9.5636 4.86621C9.5636 5.48665 9.05904 5.99121 8.4386 5.99121C7.81816 5.99121 7.3136 5.48665 7.3136 4.86621C7.3136 4.24577 7.81816 3.74121 8.4386 3.74121Z"--}}
{{--                        fill="#483723" stroke="#483723" stroke-width="0.448"/>--}}
{{--                </svg>--}}
{{--            </a>--}}
            <a
            @if(auth()->user())
                href="{{ route('site.profile') }}"
            @else
                href="{{ route('login') }}"
                @endif
            >
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.3366 9.3466L11.0766 8.9195C10.9083 9.022 10.8159 9.2137 10.8406 9.4092C10.8652 9.6046 11.0023 9.7674 11.1908 9.8249L11.3366 9.3466ZM6.66345 9.3466L6.80928 9.8249C6.99774 9.7674 7.13485 9.6046 7.15955 9.4092C7.18415 9.2137 7.09175 9.022 6.92344 8.9195L6.66345 9.3466ZM13.0001 5.5C13.0001 6.94799 12.231 8.2168 11.0766 8.9195L11.5966 9.7737C13.0366 8.8971 14.0001 7.3113 14.0001 5.5H13.0001ZM9.00005 1.5C11.2092 1.5 13.0001 3.29086 13.0001 5.5H14.0001C14.0001 2.73858 11.7615 0.5 9.00005 0.5V1.5ZM5.00001 5.5C5.00001 3.29086 6.79087 1.5 9.00005 1.5V0.5C6.23859 0.5 4.00001 2.73858 4.00001 5.5H5.00001ZM6.92344 8.9195C5.76909 8.2168 5.00001 6.948 5.00001 5.5H4.00001C4.00001 7.3113 4.96347 8.8971 6.40347 9.7737L6.92344 8.9195ZM6.51763 8.8683C3.36088 9.8309 0.983614 12.5804 0.565494 15.9402L1.55783 16.0637C1.92643 13.1018 4.02386 10.6742 6.80928 9.8249L6.51763 8.8683ZM0.565494 15.9402C0.454984 16.8282 1.1906 17.5 2.00001 17.5V16.5C1.70486 16.5 1.53193 16.2719 1.55783 16.0637L0.565494 15.9402ZM2.00001 17.5H16.0001V16.5H2.00001V17.5ZM16.0001 17.5C16.8095 17.5 17.5451 16.8282 17.4346 15.9402L16.4422 16.0637C16.4681 16.2719 16.2952 16.5 16.0001 16.5V17.5ZM17.4346 15.9402C17.0165 12.5804 14.6392 9.8309 11.4824 8.8683L11.1908 9.8249C13.9762 10.6742 16.0736 13.1018 16.4422 16.0637L17.4346 15.9402Z"
                        fill="#483723"/>
                </svg>
            </a>
        </div>
    </div>
    <button class="navbar-toggler mobile-tabs" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512">
          <path fill="#faa94f"
                d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
        </svg>
      </span>
    </button>
    <div class="offcanvas offcanvas-start mobile-tabs" style="background-color: #FFF0DF;" tabindex="-1"
         id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color:#FAA94A">Главное меню</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div style="display: flex; flex-direction: column; gap: 20px">
                <div class="warmest-nav-tabs" style="flex-direction: row;">
                    <div><a>8 800 300 4322</a></div>
                    <div class="icons-container">
                        <a href="#">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.64083 10.0509L9.59346 16.5822C9.83296 16.8071 9.95266 16.9196 10.0939 16.9473C10.1575 16.9598 10.2229 16.9598 10.2865 16.9473C10.4277 16.9196 10.5474 16.8071 10.7869 16.5822L17.7395 10.0509C19.6957 8.21325 19.9332 5.18925 18.288 3.06872L17.9787 2.66999C16.0105 0.133231 12.0598 0.558661 10.6769 3.4563C10.4815 3.86561 9.89886 3.86561 9.70346 3.4563C8.32056 0.558661 4.36988 0.133231 2.4017 2.67L2.09235 3.06872C0.447106 5.18925 0.684655 8.21325 2.64083 10.0509Z"
                                    stroke="#483723"/>
                            </svg>
                        </a>
                        <a style="display: none;">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.530438 15.8749L5.80163 17.9798C5.83594 17.9939 5.87138 18 5.90625 18C5.94112 18 5.97712 17.9933 6.01087 17.9798L11.5363 15.7731L16.8688 17.7087C16.9622 17.743 17.0595 17.7593 17.1568 17.7593C17.3278 17.7593 17.4966 17.7075 17.6406 17.6069C17.8656 17.4494 18.0006 17.1906 18.0006 16.9155V5.17166C18.0006 4.81785 17.7773 4.49948 17.4448 4.37854L14.0715 3.15398C13.9241 3.10279 13.7638 3.17648 13.7109 3.32273C13.6575 3.46841 13.7329 3.62985 13.8791 3.68329L17.2524 4.90785C17.3627 4.94779 17.4375 5.0541 17.4375 5.17166V16.9161C17.4375 17.0089 17.3936 17.0927 17.3177 17.1467C17.2401 17.2002 17.1472 17.2125 17.0606 17.1805L11.8125 15.2753V10.6875C11.8125 10.5323 11.6865 10.4063 11.5312 10.4063C11.376 10.4063 11.25 10.5323 11.25 10.6875V15.2815L6.1875 17.3031V11.25C6.1875 11.0948 6.0615 10.9688 5.90625 10.9688C5.751 10.9688 5.625 11.0948 5.625 11.25V17.3037L0.739125 15.3529C0.631688 15.3096 0.5625 15.2072 0.5625 15.0914V3.36154C0.5625 3.26704 0.6075 3.1821 0.68625 3.12866C0.765 3.07579 0.860062 3.0651 0.948375 3.10054L2.77087 3.82841C2.91431 3.88691 3.07856 3.81548 3.13594 3.67148C3.19387 3.52748 3.12356 3.36379 2.97956 3.30585L1.15706 2.57798C0.896062 2.47335 0.602437 2.50654 0.370125 2.66291C0.138375 2.82041 0 3.08141 0 3.36154V15.0914C0 15.4384 0.208125 15.7461 0.530438 15.8749Z"
                                    fill="#483723" stroke="#483723" stroke-width="0.448"/>
                                <path
                                    d="M7.90709 12.6382C8.03646 12.826 8.25078 12.938 8.47915 12.938C8.70921 12.938 8.92409 12.8244 9.05234 12.6365L11.1313 9.65073L12.298 7.87548C13.1277 6.82473 13.4815 5.50905 13.2942 4.17086C12.9938 2.01705 11.2005 0.276671 9.0304 0.031983C6.08684 -0.294267 3.58484 1.99736 3.58484 4.86667C3.58484 5.98998 3.94934 6.9873 4.76384 8.0943L7.90709 12.6382ZM8.46396 0.562983C8.6299 0.562983 8.79809 0.572546 8.96796 0.591671C10.8861 0.807671 12.4718 2.34611 12.7373 4.24905C12.9027 5.43367 12.5893 6.59805 11.8418 7.54642L10.665 9.33517L8.58884 12.317C8.51965 12.4182 8.43809 12.4177 8.3689 12.3175L5.22115 7.76748C4.47809 6.75667 4.14678 5.86173 4.14678 4.86611C4.14734 2.49348 6.08346 0.562983 8.46396 0.562983Z"
                                    fill="#483723" stroke="#483723" stroke-width="0.448"/>
                                <path
                                    d="M8.4386 6.55371C9.36897 6.55371 10.1261 5.79659 10.1261 4.86621C10.1261 3.93584 9.36897 3.17871 8.4386 3.17871C7.50822 3.17871 6.7511 3.93584 6.7511 4.86621C6.7511 5.79659 7.50822 6.55371 8.4386 6.55371ZM8.4386 3.74121C9.05904 3.74121 9.5636 4.24577 9.5636 4.86621C9.5636 5.48665 9.05904 5.99121 8.4386 5.99121C7.81816 5.99121 7.3136 5.48665 7.3136 4.86621C7.3136 4.24577 7.81816 3.74121 8.4386 3.74121Z"
                                    fill="#483723" stroke="#483723" stroke-width="0.448"/>
                            </svg>
                        </a>
                        <a style="display: none;">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.3366 9.3466L11.0766 8.9195C10.9083 9.022 10.8159 9.2137 10.8406 9.4092C10.8652 9.6046 11.0023 9.7674 11.1908 9.8249L11.3366 9.3466ZM6.66345 9.3466L6.80928 9.8249C6.99774 9.7674 7.13485 9.6046 7.15955 9.4092C7.18415 9.2137 7.09175 9.022 6.92344 8.9195L6.66345 9.3466ZM13.0001 5.5C13.0001 6.94799 12.231 8.2168 11.0766 8.9195L11.5966 9.7737C13.0366 8.8971 14.0001 7.3113 14.0001 5.5H13.0001ZM9.00005 1.5C11.2092 1.5 13.0001 3.29086 13.0001 5.5H14.0001C14.0001 2.73858 11.7615 0.5 9.00005 0.5V1.5ZM5.00001 5.5C5.00001 3.29086 6.79087 1.5 9.00005 1.5V0.5C6.23859 0.5 4.00001 2.73858 4.00001 5.5H5.00001ZM6.92344 8.9195C5.76909 8.2168 5.00001 6.948 5.00001 5.5H4.00001C4.00001 7.3113 4.96347 8.8971 6.40347 9.7737L6.92344 8.9195ZM6.51763 8.8683C3.36088 9.8309 0.983614 12.5804 0.565494 15.9402L1.55783 16.0637C1.92643 13.1018 4.02386 10.6742 6.80928 9.8249L6.51763 8.8683ZM0.565494 15.9402C0.454984 16.8282 1.1906 17.5 2.00001 17.5V16.5C1.70486 16.5 1.53193 16.2719 1.55783 16.0637L0.565494 15.9402ZM2.00001 17.5H16.0001V16.5H2.00001V17.5ZM16.0001 17.5C16.8095 17.5 17.5451 16.8282 17.4346 15.9402L16.4422 16.0637C16.4681 16.2719 16.2952 16.5 16.0001 16.5V17.5ZM17.4346 15.9402C17.0165 12.5804 14.6392 9.8309 11.4824 8.8683L11.1908 9.8249C13.9762 10.6742 16.0736 13.1018 16.4422 16.0637L17.4346 15.9402Z"
                                    fill="#483723"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="warmest-nav-tabs">
                    <div><a aria-current="page" href="{{ route('site.about') }}">О нас</a></div>
                    <div><a href="#">Дома</a></div>
                    <div><a href="{{ route('site.baths') }}">Бани</a></div>
                    <div><a href="{{ route('site.catalog') }}">Наши объекты</a></div>
                    <div><a href="{{ route('site.credit') }}">Дом в ипотеку</a></div>
                    <div><a href="#">Услуги</a></div>
                    <div><a href="{{ route('site.index') }}">Главная</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-content-block">
    @yield('content')
</div>
<div id="footer" class="main-page-block warmest-padding">
    <div id="footer-about-us" class="footer-info">
        <div class="footer-list">
            <span class="footer-list-title">О нас</span>
            <ul>
                <li><a href="#">Дома</a></li>
                <li><a href="{{ route('site.baths') }}">Бани</a></li>
                <li><a href="{{ route('site.catalog') }}">Наши объекты</a></li>
                <li><a href="{{ route('site.credit') }}">Дом в ипотеку</a></li>
                <li><a href="#">Услуги</a></li>
            </ul>
        </div>
        <div id="we-in-network" class="footer-list">
            <span class="footer-list-title">Мы в соцсетях</span>
            <ul>
                <li><a>YouTube</a></li>
                <li><a>Telegram</a></li>
                <li><a>Вконтакте</a></li>
            </ul>
        </div>
        <div id="contacts" class="footer-list">
            <span class="footer-list-title">Контакты</span>
            <ul>
                <li>WarmestKondr@yandex.ru</li>
                <li>+7 800 300-43-22</li>
                <li>+7 963 766-79-91</li>
            </ul>
        </div>
        <div class="map">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa53377652cd8c1cd38e40420d094db9bdbda90bc158b5e80788ddabc7949ab8d&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>
    <div class="footer-info" style="margin-top: 10px; align-items: center;">
        <div class="footer-legal-info">
            <span>Все права публикуемые на сайте warmest.ru принадлежат ООО ”ВОМИСТ”©️</span>
            <span>Любая информация на данном сайте, носит исключительно информационный характер и не является публичной
          офертой, согласно ст.437 ГК РФ. </span>
        </div>
        <div
            style="color: var(--warmest-orange); font-weight: var(--warmest-xxbig-font-weight); font-size: var(--warmest-xmedium-font-size)">
            WARMEST
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>

<style>
    @import url({{ asset('styles/css/navigation.css') }});
    @import url({{ asset('styles/css/cards-container.css') }});
    @import url({{ asset('styles/css/facts-container.css') }});
    @import url({{ asset('styles/css/warmest-card.css') }});
    @import url({{ asset('styles/css/delivery.css') }});
    @import url({{ asset('styles/css/invest.css') }});
    @import url({{ asset('styles/css/footer.css') }});
    @import url({{ asset('/styles/css/texts.css') }});
    @import url({{ asset('/styles/css/stock.css') }});
    @import url({{ asset('/styles/css/filters.css') }});
    @import url({{ asset('/styles/css/title.css') }});
    @import url({{ asset('/styles/css/certificates.css') }});
    @import url({{ asset('/styles/css/aboutus.css') }});
    @import url({{ asset('/styles/css/delivery.css') }});
    @import url({{ asset('/styles/css/flag-title.css') }});
    @import url({{ asset('/styles/css/swiper.css') }});
    @import url({{ asset('/styles/css/modal.css') }});


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

    @media screen and (max-width: 993px) {
        #welcome-block-img-container {
            display: none !important;
        }

        #welcome-block-text {
            text-align: center;
            align-items: center;
        }
    }

    #by-sizes-container {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .ipoteca-title {
        gap: 50px !important;
    }

    .calculator-container {
        flex-direction: column;
    }

    .calculator-input-container,
    .calculator-input-container-item {
        flex-direction: column;
        width: 100%;
        gap: 20px;
        padding: 10px;
    }

    .calculator-input-container {
        gap: 10px;
        padding: 0px;
    }

    .value-of-range {
        display: flex;
        padding: 10px 20px;
        font-size: var(--warmest-medium-font-size);
        width: 100%;
        border: 2px solid var(--warmest-black);
        border-radius: 100px;
    }

    .calculator-values-container,
    .calculator-values {
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        padding: 50px 30px;
        border: 2px solid var(--warmest-black);
        border-radius: 25px;
        position: relative;
    }

    .calculator-values {
        display: flex;
        width: 100%;
        padding: 0px;
        border: none;
        align-items: start;
    }

    .input-values-container {
        align-items: center;
        flex-direction: column;
    }

    .title-of-value {
        font-size: var(--warmest-xmedium-font-size);
    }

    .calc-title {
        padding: 10px;
        position: absolute;
        background-color: #FAF2E9;
        top: -5%;
        z-index: 1;
        font-size: var(--warmest-xmedium-font-size);
        border: 2px solid var(--warmest-black);
        border-radius: 22px;
        font-size: var(--warmest-medium-font-size);
        font-weight: var(--warmest-small-font-weight);
    }

    .calc-container {
        padding: 50px;
    }

    .calc-value-container {
        display: flex;
        font-size: var(--warmest-xmedium-font-size);
        font-weight: 300;
        flex-direction: column;
    }

    .calc-value {
        font-size: var(--warmest-xmedium-font-size);
        font-weight: var(--warmest-xbig-font-weight);
    }

    .warmest-title {
        font-size: var(--warmest-large-font-size);
        font-weight: var(--warmest-xxbig-font-weight);
    }

    @media screen and (max-width: 993px) {
        .calc-container {
            flex-direction: column;
            padding: 10px;
        }

        .calculator-input-container {
            margin-bottom: 40px;
            align-items: center;
        }

        .calc-title {
            top: -6%;
        }

    }

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
</style>

<script defer>
    let warmestHouse = document.getElementsByClassName('warmest-house')[0];
    let warmestHouseHeader = document.getElementsByClassName('warmest-house-top')[0];
    const widthOfHouse = Math.ceil(warmestHouse.getBoundingClientRect().width) / 2;
    warmestHouseHeader.style.borderLeft = `${widthOfHouse}px solid transparent`;
    warmestHouseHeader.style.borderRight = `${widthOfHouse}px solid transparent`;
</script>
<script type="module" defer>
    import MortgageCalc from '{{ asset('/assets/js/mortgage.js') }}'

    let calc = new MortgageCalc(
        'house-cost', 'house-cost-value',
        'initial-payment', 'initial-payment-value',
        'mortgage-term', 'mortgage-term-value',
        'interest-rate', 'monthly-payment', 'overpayment'
    )

    import slider from '{{ asset('/assets/js/slider.js') }}';
    document.addEventListener('DOMContentLoaded', main);

    function main() {
        new Swiper(
            '.my-swiper',
            {
                direction: 'horizontal',
                autoplay: true,
                loop: true,
                speed: 400,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 70
                    },
                    1000: {
                        slidesPerView: 2,
                        spaceBetween: 70
                    }
                }
            }
        )
    }

</script>
<script defer type="module">
    import servicesData from '{{ asset('/assets/js/servicesData.js') }}';
    import slider from '{{ asset('/assets/js/slider.js') }}';
    document.addEventListener('DOMContentLoaded', main);

    function main() {
        new slider.Slider(
            '.serviceSwiper',
            {
                direction: 'horizontal',
                autoplay:true,
                loop:true,
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
            }
        )
    }
</script>
