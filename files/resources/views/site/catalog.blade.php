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
                        Наши объекты
                    </div>
                    <span style="font-size: var(--warmest-medium-font-size);">
            Для строительства Вашего дома мы используем самые качественные материалы,
            благодаря чему, наша строительная компания дает гарантию на конструкцию дома до 5 лет.
          </span>
{{--                    <div>--}}
{{--                        <a class="warmest-btn" href="#" style="width: fit-content; text-decoration: none; cursor: pointer;">--}}
{{--                            <span>Подробнее</span>--}}
{{--                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path--}}
{{--                                    d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"--}}
{{--                                    fill="white" />--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
                <div id="welcome-block-img-container" class="container d-flex none-mobile" style="position: relative;">
                    <div style="position: absolute; bottom: 0; right: 0; width: 100%;">
                        <img src="{{ asset('/assets/img/houses/10X9_Домодедово_Античный_кирпич/10X9_Домодедово_Античный_кирпич_010000.png') }}"
                             class="img-fluid" alt="Дом">
                    </div>
                </div>
            </div>
        </div>
        <div id="stock-block" class="main-page-block">
            <div class="stock-container">
                <img src="{{ asset('/assets/img/Intersect.png') }}" class="img-fluid" alt="Дом">
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
{{--                    <a class="warmest-btn" href="#" style="width: fit-content; text-decoration: none; cursor: pointer;">--}}
{{--                        <span>Подробнее</span>--}}
{{--                        <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path--}}
{{--                                d="M0.585813 16.3903C0.46992 16.3903 0.356637 16.3541 0.260291 16.2865C0.163945 16.2189 0.088864 16.1228 0.0445423 16.0103C0.00022064 15.8979 -0.0113505 15.7742 0.0112925 15.6548C0.0339354 15.5355 0.0897751 15.4259 0.17175 15.3399L6.97995 8.19126L0.17175 1.04264C0.0650167 0.92661 0.00595739 0.771201 0.0072924 0.609888C0.00862741 0.448576 0.07025 0.294268 0.178888 0.180198C0.287525 0.0661286 0.434485 0.00142502 0.588116 2.32575e-05C0.741747 -0.0013785 0.889757 0.0606336 1.00027 0.172704L8.22292 7.75649C8.33277 7.87187 8.39448 8.02833 8.39448 8.19146C8.39448 8.3546 8.33277 8.51106 8.22292 8.62643L1.00027 16.2102C0.94583 16.2673 0.88121 16.3126 0.810097 16.3435C0.738985 16.3744 0.662772 16.3903 0.585813 16.3903Z"--}}
{{--                                fill="white" />--}}
{{--                        </svg>--}}
{{--                    </a>--}}
                </div>
            </div>
        </div>
        <div id="our-products" class="main-page-block">
            <div class="our-products-container">
                <div class="title" style="color: var(--warmest-orange); font-weight: var(--warmest-xbig-font-weight);">Наши
                    объекты</div>
                <div class="filters-containers">
                    <div class="filter-title">
                        <div class="filter-line">
                            <svg fill="none" viewBox="0 0 100 0.1" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 1H103.5" stroke="#472B0B" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="filter-title-text-container">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 2.77778C1 2.1555 1 1.84436 1.1211 1.60668C1.22763 1.39761 1.39761 1.22763 1.60668 1.1211C1.84436 1 2.1555 1 2.77778 1H19.2222C19.8446 1 20.1557 1 20.3933 1.1211C20.6024 1.22763 20.7723 1.39761 20.8789 1.60668C21 1.84436 21 2.1555 21 2.77778V4.70807C21 4.97983 21 5.11571 20.9693 5.24359C20.9421 5.35697 20.8972 5.46534 20.8362 5.56476C20.7676 5.67689 20.6714 5.77298 20.4793 5.96514L13.7429 12.7016C13.5508 12.8937 13.4547 12.9898 13.386 13.1019C13.325 13.2013 13.2801 13.3097 13.2529 13.4231C13.2222 13.551 13.2222 13.6869 13.2222 13.9586V16.5556L8.77778 21V13.9586C8.77778 13.6869 8.77778 13.551 8.74708 13.4231C8.71986 13.3097 8.67497 13.2013 8.61405 13.1019C8.54533 12.9898 8.44924 12.8937 8.25708 12.7016L1.5207 5.96514C1.32853 5.77298 1.23244 5.67689 1.16373 5.56476C1.10281 5.46534 1.05792 5.35697 1.0307 5.24359C1 5.11571 1 4.97983 1 4.70807V2.77778Z"
                                    fill="#FFF1E1" stroke="#472B0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Фильтр</span>
                        </div>
                    </div>
                    <form method="get">
                        <div class="filter-construct">
                            <div id="by-materials">
                                <div class="filter-construct-title">
                                    <span>По материалу</span>
                                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.0838 0.125877C11.1239 0.165677 11.1558 0.212958 11.1775 0.265012C11.1993 0.317066 11.2104 0.37287 11.2104 0.429228C11.2104 0.485585 11.1993 0.541389 11.1775 0.593443C11.1558 0.645497 11.1239 0.692779 11.0838 0.732579L5.91036 5.87412C5.87032 5.91402 5.82274 5.94568 5.77036 5.96728C5.71799 5.98888 5.66184 6 5.60513 6C5.54842 6 5.49227 5.98888 5.4399 5.96728C5.38752 5.94568 5.33994 5.91402 5.2999 5.87412L0.126468 0.732579C0.0455151 0.652125 3.62396e-05 0.543006 3.62396e-05 0.429228C3.62396e-05 0.315449 0.0455151 0.20633 0.126468 0.125877C0.20742 0.0454229 0.317216 0.000224329 0.4317 0.000224329C0.546185 0.000224329 0.65598 0.0454229 0.736933 0.125877L5.60513 4.96493L10.4733 0.125877C10.5134 0.0859754 10.5609 0.0543181 10.6133 0.0327181C10.6657 0.0111181 10.7219 0 10.7786 0C10.8353 0 10.8914 0.0111181 10.9438 0.0327181C10.9962 0.0543181 11.0437 0.0859754 11.0838 0.125877Z"
                                              fill="#472B0B" />
                                    </svg>
                                </div>
                                <div class="filter-construct-inputs-container">
                                    @foreach($materialCategories as $materialCategory)
                                        <div class="form-checkbox-container">
                                            <span>{{$materialCategory->title}}</span>
                                            <input type="checkbox" name="materials[]" value="{{$materialCategory->id}}" class="form-check-input">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="by-cost">
                                <div class="filter-construct-title">
                                    <span>По стоимости</span>
                                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.0838 0.125877C11.1239 0.165677 11.1558 0.212958 11.1775 0.265012C11.1993 0.317066 11.2104 0.37287 11.2104 0.429228C11.2104 0.485585 11.1993 0.541389 11.1775 0.593443C11.1558 0.645497 11.1239 0.692779 11.0838 0.732579L5.91036 5.87412C5.87032 5.91402 5.82274 5.94568 5.77036 5.96728C5.71799 5.98888 5.66184 6 5.60513 6C5.54842 6 5.49227 5.98888 5.4399 5.96728C5.38752 5.94568 5.33994 5.91402 5.2999 5.87412L0.126468 0.732579C0.0455151 0.652125 3.62396e-05 0.543006 3.62396e-05 0.429228C3.62396e-05 0.315449 0.0455151 0.20633 0.126468 0.125877C0.20742 0.0454229 0.317216 0.000224329 0.4317 0.000224329C0.546185 0.000224329 0.65598 0.0454229 0.736933 0.125877L5.60513 4.96493L10.4733 0.125877C10.5134 0.0859754 10.5609 0.0543181 10.6133 0.0327181C10.6657 0.0111181 10.7219 0 10.7786 0C10.8353 0 10.8914 0.0111181 10.9438 0.0327181C10.9962 0.0543181 11.0437 0.0859754 11.0838 0.125877Z"
                                              fill="#472B0B" />
                                    </svg>
                                </div>
                                <div class="filter-construct-inputs-container">
                                    <div class="filter-construct-text-input-container">
                                        <input type="number" name="min_price" class="form-control" placeholder="0">
                                        <input type="number" name="max_price" class="form-control" placeholder="15 000 000">
                                    </div>
                                </div>
                            </div>
                            <div id="by-sizes-container">
                                <div id="by-floors">
                                    <div class="filter-construct-title">
                                        <span>По количеству этажей</span>
                                        <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M11.0838 0.125877C11.1239 0.165677 11.1558 0.212958 11.1775 0.265012C11.1993 0.317066 11.2104 0.37287 11.2104 0.429228C11.2104 0.485585 11.1993 0.541389 11.1775 0.593443C11.1558 0.645497 11.1239 0.692779 11.0838 0.732579L5.91036 5.87412C5.87032 5.91402 5.82274 5.94568 5.77036 5.96728C5.71799 5.98888 5.66184 6 5.60513 6C5.54842 6 5.49227 5.98888 5.4399 5.96728C5.38752 5.94568 5.33994 5.91402 5.2999 5.87412L0.126468 0.732579C0.0455151 0.652125 3.62396e-05 0.543006 3.62396e-05 0.429228C3.62396e-05 0.315449 0.0455151 0.20633 0.126468 0.125877C0.20742 0.0454229 0.317216 0.000224329 0.4317 0.000224329C0.546185 0.000224329 0.65598 0.0454229 0.736933 0.125877L5.60513 4.96493L10.4733 0.125877C10.5134 0.0859754 10.5609 0.0543181 10.6133 0.0327181C10.6657 0.0111181 10.7219 0 10.7786 0C10.8353 0 10.8914 0.0111181 10.9438 0.0327181C10.9962 0.0543181 11.0437 0.0859754 11.0838 0.125877Z"
                                                  fill="#472B0B" />
                                        </svg>
                                    </div>
                                    <div class="filter-construct-inputs-container">
                                        @foreach($floorCategories as $floorCategory)
                                            <div class="form-checkbox-container">
                                                <span>{{$floorCategory->title}}</span>
                                                <input type="checkbox" name="floors[]" value="{{$floorCategory->id}}" class="form-check-input">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div id="by-sqaure">
                                    <div class="filter-construct-title">
                                        <span>По площади</span>
                                        <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M11.0838 0.125877C11.1239 0.165677 11.1558 0.212958 11.1775 0.265012C11.1993 0.317066 11.2104 0.37287 11.2104 0.429228C11.2104 0.485585 11.1993 0.541389 11.1775 0.593443C11.1558 0.645497 11.1239 0.692779 11.0838 0.732579L5.91036 5.87412C5.87032 5.91402 5.82274 5.94568 5.77036 5.96728C5.71799 5.98888 5.66184 6 5.60513 6C5.54842 6 5.49227 5.98888 5.4399 5.96728C5.38752 5.94568 5.33994 5.91402 5.2999 5.87412L0.126468 0.732579C0.0455151 0.652125 3.62396e-05 0.543006 3.62396e-05 0.429228C3.62396e-05 0.315449 0.0455151 0.20633 0.126468 0.125877C0.20742 0.0454229 0.317216 0.000224329 0.4317 0.000224329C0.546185 0.000224329 0.65598 0.0454229 0.736933 0.125877L5.60513 4.96493L10.4733 0.125877C10.5134 0.0859754 10.5609 0.0543181 10.6133 0.0327181C10.6657 0.0111181 10.7219 0 10.7786 0C10.8353 0 10.8914 0.0111181 10.9438 0.0327181C10.9962 0.0543181 11.0437 0.0859754 11.0838 0.125877Z"
                                                  fill="#472B0B" />
                                        </svg>
                                    </div>
                                    <div class="filter-construct-inputs-container">
                                        <div class="form-checkbox-container">
                                            <span>По возрастанию</span>
                                            <input type="radio" name="asc" class="form-check-input">
                                        </div>
                                        <div class="form-checkbox-container">
                                            <span>По убыванию</span>
                                            <input type="radio" name="desc" class="form-check-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="other">
                                <div class="filter-construct-title">
                                    <span>Прочие услуги</span>
                                    <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.0838 0.125877C11.1239 0.165677 11.1558 0.212958 11.1775 0.265012C11.1993 0.317066 11.2104 0.37287 11.2104 0.429228C11.2104 0.485585 11.1993 0.541389 11.1775 0.593443C11.1558 0.645497 11.1239 0.692779 11.0838 0.732579L5.91036 5.87412C5.87032 5.91402 5.82274 5.94568 5.77036 5.96728C5.71799 5.98888 5.66184 6 5.60513 6C5.54842 6 5.49227 5.98888 5.4399 5.96728C5.38752 5.94568 5.33994 5.91402 5.2999 5.87412L0.126468 0.732579C0.0455151 0.652125 3.62396e-05 0.543006 3.62396e-05 0.429228C3.62396e-05 0.315449 0.0455151 0.20633 0.126468 0.125877C0.20742 0.0454229 0.317216 0.000224329 0.4317 0.000224329C0.546185 0.000224329 0.65598 0.0454229 0.736933 0.125877L5.60513 4.96493L10.4733 0.125877C10.5134 0.0859754 10.5609 0.0543181 10.6133 0.0327181C10.6657 0.0111181 10.7219 0 10.7786 0C10.8353 0 10.8914 0.0111181 10.9438 0.0327181C10.9962 0.0543181 11.0437 0.0859754 11.0838 0.125877Z"
                                              fill="#472B0B" />
                                    </svg>
                                </div>
                                <div class="filter-construct-inputs-container">
                                    @foreach($addServices as $addService)
                                        <div class="form-checkbox-container">
                                            <span>{{$addService->title}}</span>
                                            <input type="checkbox" name="addServices[]" value="{{$addService->id}}" class="form-check-input">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="filter-actions">
                            <button class="warmest-btn btn-gray" style="width: fit-content;">Сбросить</button>
                            <button class="warmest-btn" style="width: fit-content;">Применить</button>
                        </div>
                    </form>
                    <div class="filter-line" style="position: static;">
                        <svg fill="none" viewBox="0 0 100 0.1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1H103.5" stroke="#472B0B" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div id="stock-block" class="main-page-block">
            <div class="warmest-grid-container">
                @foreach($housesList as $house)
                    @if($house->is_published == 1)
                        <div class="warmest-demo-card">
                            <div class="warmest-card-header">
                                <div>
                                    <div class="warmest-card-title">{{ $house->title }}</div>
                                    <div class="house-sizes">
                                        <span class="square">{{ $house->params_size }} м²</span>
                                        <span class="size text-small">{{ $house->params_length }}X{{ $house->params_width }}м</span>
                                    </div>
                                </div>
{{--                                <div class="warmest-card-actions">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">--}}
{{--                                        <path fill="#FFA234"--}}
{{--                                              d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8l0-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5l0 3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20-.1-.1s0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5l0 3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2l0-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z" />--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
                            </div>
                            <div class="house-img-container">
                                <img src="/storage/{{ $house->images[0] }}" class="img-fluid">
                            </div>
                            <div class="warmest-card-footer">
                                <div class="price-container price-left">
                                    <div>
                                        <span>от</span>
                                        <span style="color: var(--warmest-orange)">{{ $house->main_price }}</span>
                                        <span style="color: var(--warmest-orange)">руб</span>
                                    </div>
                                    <div class="text-small">
                                        <span>В ипотеку - от</span>
                                        <span>{{ $house->credit }}</span>
                                        <span>руб./мес.</span>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('site.object', $house->id) }}" class="btn-gray warmest-btn" style="font-size: var(--warmest-small-font-size); width: max-content;">
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
                    @endif
                @endforeach
            </div>
        </div>
        <div id="info-block-v3" class="main-page-block">
{{--            <a href="#">--}}
{{--                <div class="page-link-container">--}}
{{--                    <span>Оставить заявку на консультацию</span>--}}
{{--                    <div>--}}
{{--                        <svg width="19" height="29" viewBox="0 0 19 29" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path--}}
{{--                                d="M1.32592 29C1.06361 29 0.807209 28.9361 0.589141 28.8164C0.371072 28.6967 0.201134 28.5267 0.100817 28.3277C0.000499394 28.1288 -0.0256906 27.9099 0.0255593 27.6988C0.0768092 27.4876 0.203196 27.2937 0.388738 27.1415L15.7984 14.4931L0.388738 1.84479C0.147158 1.63949 0.0134839 1.36452 0.0165056 1.0791C0.0195272 0.793684 0.159003 0.52066 0.404893 0.318832C0.650783 0.117004 0.983411 0.00252134 1.33114 4.11504e-05C1.67887 -0.00243904 2.01387 0.107282 2.26399 0.305571L18.6117 13.7239C18.8603 13.928 19 14.2048 19 14.4935C19 14.7821 18.8603 15.059 18.6117 15.2631L2.26399 28.6814C2.14078 28.7825 1.99452 28.8626 1.83357 28.9173C1.67261 28.972 1.50011 29.0001 1.32592 29Z"--}}
{{--                                fill="#472B0B" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
        </div>
    </div>
@endsection
