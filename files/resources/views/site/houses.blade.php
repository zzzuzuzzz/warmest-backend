@extends('site.layouts.main')
@section('content')
        <div id="welcome-block" class="main-page-block">
            <div class="title-container w-100">
        <span class="warmest-text-border" style="font-size: var(--warmest-xxlarge-font-size); font-weight: 700;">
          <span style="color: var(--warmest-orange);">WARM</span><span style="color: #FECE95;">EST</span>
        </span>
                <div class="title">
          <span style="width: 70%; text-align: center;">
            Создайте дом своей мечты прямо сейчас
          </span>
                </div>
            </div>
        </div>
        <div id="facts-block" class="main-page-block" style="margin-top: 100px;">
            <div class="facts-container">
                <div class="fact-container">
                    <div class="ico">
                        <svg width="108" height="108" viewBox="0 0 116 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M80.2448 13.1253L59.4029 1.21506C58.7917 0.865813 58.0436 0.865813 57.4324 1.21506L1.86991 32.9651C1.25277 33.3183 0.869781 33.9751 0.869781 34.6875V114.062C0.869781 115.158 1.75878 116.047 2.85416 116.047H113.979C115.077 116.047 115.964 115.158 115.964 114.062V34.6875C115.964 33.9751 115.583 33.3183 114.965 32.9651L100.089 24.464V2.9375C100.089 1.84212 99.2015 0.953125 98.1042 0.953125H82.2292C81.1338 0.953125 80.2448 1.84212 80.2448 2.9375V13.1253ZM84.2135 15.3934L88.2577 17.7032C89.2082 18.247 89.5396 19.4594 88.9959 20.4119C88.4522 21.3624 87.2397 21.6938 86.2892 21.1501L58.4167 5.2235L4.83853 35.8384V112.078H111.995V35.8384L97.1199 27.3394C96.5028 26.9861 96.1198 26.3273 96.1198 25.6169V4.92188H84.2135V15.3934ZM86.3805 28.4903L59.4842 13.1213C58.875 12.7721 58.125 12.7721 57.5158 13.1213L11.8751 39.202C11.256 39.5552 10.875 40.212 10.875 40.9244V106.125C10.875 107.22 11.764 108.109 12.8594 108.109H104.141C105.236 108.109 106.125 107.22 106.125 106.125V40.9244C106.125 40.212 105.744 39.5552 105.125 39.202L92.0855 31.7506C91.135 31.2069 89.9206 31.5363 89.3769 32.4888C88.8351 33.4393 89.1645 34.6518 90.1151 35.1955L102.156 42.0753V104.141H14.8438V42.0753L58.5 17.1298L84.41 31.9352C85.3625 32.4789 86.5749 32.1475 87.1187 31.197C87.6624 30.2465 87.331 29.032 86.3805 28.4903ZM56.468 38.8626C54.817 38.1086 53.67 36.4417 53.67 34.5109C53.67 31.8697 55.8132 29.7266 58.4524 29.7266C61.0936 29.7266 63.2367 31.8697 63.2367 34.5109C63.2367 36.4417 62.0878 38.1086 60.4368 38.8626V80.342C61.8338 80.1733 63.1792 79.8221 64.4531 79.3181V61.1015C64.4531 60.782 64.5305 60.4685 64.6774 60.1847L74.5377 41.2062C73.7737 40.3588 73.3094 39.2377 73.3094 38.0093C73.3094 35.3681 75.4525 33.225 78.0937 33.225C80.7329 33.225 82.8761 35.3681 82.8761 38.0093C82.8761 40.6168 80.7825 42.7421 78.187 42.7917L68.4219 61.5857V77.0876C72.8629 73.7539 75.7581 68.3187 75.7581 62.4688C75.7581 61.3734 76.6471 60.4844 77.7425 60.4844H86.2812V53.5569C84.6302 52.8029 83.4813 51.138 83.4813 49.2052C83.4813 46.564 85.6264 44.4209 88.2656 44.4209C90.9048 44.4209 93.0499 46.564 93.0499 49.2052C93.0499 51.138 91.901 52.8029 90.25 53.5569V60.4844H93.4885C94.5839 60.4844 95.4729 61.3734 95.4729 62.4688C95.4729 64.0682 95.3657 66.4355 95.1554 68.025C95.0403 68.8981 94.3656 69.5907 93.4945 69.7276C93.4945 69.7276 89.4027 70.3685 89.4027 70.3666C89.2419 71.0651 89.0554 71.7576 88.847 72.4442L92.0697 75.0437C92.7563 75.5974 92.9944 76.536 92.6571 77.3476C91.4208 80.3341 89.7995 83.144 87.831 85.7078C87.2953 86.4063 86.3646 86.6662 85.5431 86.3507L81.6795 84.8585C81.1893 85.3823 80.6833 85.8903 80.1595 86.3785L81.6497 90.2421C81.9672 91.0636 81.7053 91.9963 81.0068 92.532C78.443 94.4986 75.6331 96.1218 72.6486 97.358C71.835 97.6934 70.8984 97.4553 70.3447 96.7707C70.3447 96.7707 67.7432 93.546 67.7452 93.546C67.0586 93.7564 66.3661 93.9409 65.6676 94.1037L65.0266 98.1954C64.8917 99.0646 64.1991 99.7413 63.326 99.8564C60.1232 100.277 56.8768 100.277 53.674 99.8564C52.8009 99.7413 52.1083 99.0646 51.9734 98.1954L51.3324 94.1037C50.6339 93.9409 49.9414 93.7564 49.2568 93.546L46.6553 96.7707C46.1016 97.4553 45.165 97.6934 44.3514 97.358C41.3669 96.1218 38.557 94.4986 35.9932 92.532C35.2947 91.9963 35.0328 91.0636 35.3503 90.2421C35.3503 90.2421 36.8405 86.3785 36.8405 86.3805C36.3167 85.8903 35.8107 85.3823 35.3205 84.8585L31.4569 86.3507C30.6354 86.6662 29.7047 86.4063 29.169 85.7078C27.2005 83.144 25.5792 80.3341 24.343 77.3476C24.0056 76.536 24.2437 75.5974 24.9303 75.0437L28.153 72.4442C27.9446 71.7596 27.7581 71.0651 27.5973 70.3685L23.5055 69.7276C22.6344 69.5907 21.9597 68.8981 21.8446 68.025C21.6343 66.4355 21.5271 64.0682 21.5271 62.4688C21.5271 61.3734 22.4161 60.4844 23.5115 60.4844H28.7344V53.5569C27.0834 52.8029 25.9344 51.138 25.9344 49.2052C25.9344 46.564 28.0795 44.4209 30.7188 44.4209C33.358 44.4209 35.5031 46.564 35.5031 49.2052C35.5031 51.138 34.3541 52.8029 32.7031 53.5569V60.4844H39.2575C40.3509 60.4844 41.2399 61.3734 41.2399 62.4688C41.2399 68.3187 44.1371 73.7539 48.5781 77.0876V47.9272L45.2999 44.6491C44.8277 44.8058 44.3197 44.8912 43.7938 44.8912C41.1546 44.8912 39.0115 42.748 39.0115 40.1088C39.0115 37.4676 41.1546 35.3245 43.7938 35.3245C46.435 35.3245 48.5781 37.4676 48.5781 40.1088C48.5781 40.7597 48.4472 41.3808 48.211 41.9483L51.9655 45.7028C52.3385 46.0738 52.5469 46.5799 52.5469 47.1057V79.3181C53.7931 79.8122 55.1067 80.1575 56.468 80.3301V38.8626ZM37.3644 64.4531H25.5415C25.5633 64.983 25.5951 65.5247 25.6328 66.0426L29.5658 66.6598C30.3973 66.7887 31.0561 67.4297 31.2089 68.2572C31.4748 69.6879 31.8518 71.0948 32.336 72.464C32.6178 73.2578 32.3678 74.1428 31.7129 74.6707L28.6034 77.1789C29.4071 78.8994 30.3576 80.5444 31.445 82.1002L35.1717 80.6635C35.9575 80.3599 36.8485 80.5861 37.3942 81.2251C38.3387 82.3304 39.3686 83.3603 40.4739 84.3048C41.1149 84.8525 41.3411 85.7435 41.0375 86.5293L39.5988 90.254C41.1546 91.3414 42.8016 92.2919 44.5201 93.0956L47.0283 89.9881C47.5562 89.3332 48.4412 89.0812 49.235 89.363C50.6062 89.8492 52.0131 90.2262 53.4418 90.4901C54.2693 90.6429 54.9103 91.3017 55.0412 92.1352L55.6584 96.0801C57.5495 96.2448 59.4505 96.2448 61.3416 96.0801L61.9588 92.1352C62.0897 91.3017 62.7307 90.6429 63.5582 90.4901C64.9869 90.2262 66.3938 89.8492 67.765 89.363C68.5588 89.0812 69.4438 89.3332 69.9717 89.9881L72.4799 93.0956C74.1984 92.2919 75.8454 91.3414 77.4012 90.254L75.9625 86.5293C75.6589 85.7435 75.8851 84.8525 76.5261 84.3048C77.6314 83.3603 78.6613 82.3304 79.6058 81.2251C80.1515 80.5861 81.0425 80.3599 81.8283 80.6635L85.555 82.1002C86.6424 80.5444 87.5929 78.8994 88.3966 77.1789L85.2871 74.6707C84.6322 74.1428 84.3822 73.2578 84.664 72.464C85.1482 71.0948 85.5252 69.6879 85.7911 68.2572C85.9439 67.4297 86.6027 66.7887 87.4342 66.6598L91.3672 66.0426C91.4049 65.5247 91.4367 64.983 91.4585 64.4531H79.6356C78.9371 72.0195 74.2956 78.7486 67.8087 82.126C67.515 82.4097 67.134 82.6022 66.7094 82.6598C64.1833 83.7928 61.4091 84.4278 58.5 84.4278C55.5909 84.4278 52.8168 83.7928 50.2906 82.6598C49.866 82.6022 49.485 82.4097 49.1913 82.126C42.7044 78.7486 38.0629 72.0195 37.3644 64.4531ZM88.2656 48.3896C88.7161 48.3896 89.0812 48.7547 89.0812 49.2052C89.0812 49.6537 88.7161 50.0188 88.2656 50.0188C87.8152 50.0188 87.4501 49.6537 87.4501 49.2052C87.4501 48.7547 87.8152 48.3896 88.2656 48.3896ZM30.7188 48.3896C31.1692 48.3896 31.5343 48.7547 31.5343 49.2052C31.5343 49.6537 31.1692 50.0188 30.7188 50.0188C30.2683 50.0188 29.9032 49.6537 29.9032 49.2052C29.9032 48.7547 30.2683 48.3896 30.7188 48.3896ZM43.7938 39.2932C44.2443 39.2932 44.6094 39.6584 44.6094 40.1088C44.6094 40.5573 44.2443 40.9224 43.7938 40.9224C43.3453 40.9224 42.9802 40.5573 42.9802 40.1088C42.9802 39.6584 43.3453 39.2932 43.7938 39.2932ZM78.0937 37.1938C78.5422 37.1938 78.9073 37.5589 78.9073 38.0093C78.9073 38.4578 78.5422 38.8229 78.0937 38.8229C77.6433 38.8229 77.2781 38.4578 77.2781 38.0093C77.2781 37.5589 77.6433 37.1938 78.0937 37.1938ZM58.4524 33.6953C58.9028 33.6953 59.268 34.0604 59.268 34.5109C59.268 34.9594 58.9028 35.3245 58.4524 35.3245C58.0039 35.3245 57.6388 34.9594 57.6388 34.5109C57.6388 34.0604 58.0039 33.6953 58.4524 33.6953Z"
                                  fill="#472B0B" />
                        </svg>
                    </div>
                    <div class="fact-title">СТРОИМ ДОМА ПО КАНАДСКОЙ ТЕХНОЛОГИИ</div>
                </div>
                <div class="fact-container">
                    <div class="ico">
                        <svg width="108" height="108" viewBox="0 0 108 108" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M82.4003 58.1255L71.8543 68.6714L64.6179 61.4365C70.984 54.5259 74.9821 48.8245 76.6951 44.1555C77.4246 42.1655 77.7669 40.3222 77.7265 38.6103C78.766 38.8843 79.8319 39.0623 80.9193 39.0623C81.5258 39.0623 82.1366 39.0162 82.7463 38.9261C94.5368 37.1485 96.4121 23.6706 96.4857 23.0971C97.6569 13.9895 103.883 10.0784 106.504 8.81933C107.513 8.33813 108.094 7.30103 107.987 6.18043C107.88 5.05544 107.078 4.11062 105.992 3.82498H105.987C85.3171 -1.54511 74.7747 9.31591 70.333 16.2636C67.9698 19.957 67.1252 24.0669 67.8859 27.9611C65.9233 27.7509 63.7906 28.0464 61.4462 28.9064C56.7763 30.6185 51.076 34.6168 44.1663 40.9829L19.2644 16.081V8.57741C19.2644 7.7864 18.8502 7.05472 18.1724 6.64823L7.62667 0.320142C6.74118 -0.209396 5.6074 -0.0687718 4.87791 0.658519L0.659187 4.87724C-0.0713997 5.60673 -0.210925 6.74051 0.32081 7.62601L6.6478 18.1706C7.05429 18.8474 7.78707 19.2627 8.57698 19.2627H16.0828L40.901 44.0808C40.3262 44.6409 39.7663 45.1731 39.1759 45.7637C26.8208 58.1189 -6.48738 96.5136 1.29969 104.301C2.09949 105.101 3.22228 105.467 4.60655 105.467C16.7002 105.467 48.7515 77.5118 59.8378 66.4267C60.4282 65.8363 60.9599 65.2764 61.52 64.7018L68.6727 71.853L58.1272 82.3985L78.699 102.971C81.9399 106.215 86.2509 107.999 90.8355 107.999C95.4201 107.999 99.73 106.215 102.972 102.971C109.663 96.2785 109.663 85.3912 102.972 78.6983L82.4003 58.1255ZM14.7644 14.7627H9.85139L5.08335 6.81742L6.81699 5.08159L14.7644 9.85182V14.7627ZM74.1232 18.6892C77.8047 12.9324 84.313 6.88333 95.4036 6.88333C97.0098 6.88333 98.7127 7.01077 100.517 7.28323C97.0416 9.99245 93.024 14.7341 92.0242 22.5146C91.9649 22.9518 90.4916 33.2064 82.0762 34.4742C79.775 34.8278 77.4705 34.1016 75.6358 32.6208C75.2713 32.1326 74.8661 31.6565 74.4056 31.1959C74.2324 31.0228 74.0485 30.8868 73.8714 30.7273C73.4019 30.0657 72.9824 29.3531 72.6752 28.5548C71.5217 25.5248 72.0501 21.9301 74.1232 18.6892ZM62.9952 33.1317C64.4531 32.5978 65.6682 32.3781 66.6965 32.3781C68.3073 32.3781 69.462 32.9157 70.3787 33.6248C70.9578 34.4002 71.6118 35.0989 72.3263 35.7262C73.2619 37.1997 73.6965 39.2618 72.4698 42.606C71.8053 44.4186 70.677 46.4833 69.1282 48.7722L56.8293 36.4742C59.1182 34.9251 61.1829 33.7966 62.9952 33.1317ZM56.6562 63.2451C35.7196 84.1805 8.58687 102.879 4.54832 101.209C2.71142 97.0014 21.4221 69.8808 42.3575 48.9453C46.3326 44.9703 49.9306 41.7322 53.1689 39.177L66.4256 52.4328C63.8702 55.6713 60.6316 59.2696 56.6562 63.2451ZM99.7904 99.7897C97.3976 102.183 94.2182 103.499 90.8355 103.499C87.4528 103.499 84.2723 102.183 81.8806 99.7897L64.4905 82.3985L82.4003 64.4887L99.7904 81.88C104.727 86.8172 104.727 94.8525 99.7904 99.7897Z"
                                fill="#472B0B" />
                        </svg>
                    </div>
                    <div class="fact-title">ДИЗАЙН ЛЮБОГО ОБЪЕКТА НА ВАШ ВЫБОР</div>
                </div>
                <div class="fact-container">
                    <div class="ico">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 512 512">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000">
                                <path
                                    d="M2395 5058 c-479 -205 -984 -313 -1567 -337 -183 -7 -187 -8 -235 -37 -29 -18 -59 -49 -78 -78 l-30 -49 -3 -986 c-2 -676 0 -1025 8 -1110 54 -594 299 -1121 715 -1536 71 -72 179 -167 238 -212 60 -46 331 -225 603 -399 403 -258 499 -315 522 -312 25 4 762 469 997 629 490 334 849 847 995 1422 77 307 75 263 75 1448 l0 1056 -30 49 c-19 29 -49 60 -78 78 -48 29 -52 30 -235 37 -598 25 -1117 139 -1625 360 -50 21 -100 38 -111 38 -12 -1 -84 -28 -161 -61z m314 -167 c496 -200 999 -307 1546 -327 170 -7 180 -8 203 -31 l23 -23 -4 -1037 c-3 -1149 -1 -1098 -71 -1377 -104 -411 -319 -782 -622 -1076 -184 -178 -197 -188 -808 -579 -266 -171 -415 -260 -425 -256 -32 13 -915 582 -999 645 -108 81 -304 269 -389 375 -214 264 -367 570 -449 891 -70 279 -68 228 -71 1377 l-4 1037 23 23 c23 23 33 24 203 31 534 20 1037 124 1519 315 70 28 134 55 144 60 25 15 23 16 181 -48z"
                                    fill="#472B0B" />
                                <path
                                    d="M2165 4464 c-236 -76 -525 -141 -790 -178 -104 -15 -309 -36 -348 -36 -10 0 -29 -11 -42 -25 l-25 -24 0 -818 c0 -471 4 -856 10 -908 65 -595 367 -1108 849 -1443 53 -37 84 -52 108 -52 44 0 73 30 73 76 0 42 -4 46 -155 158 -122 90 -296 268 -388 396 -132 186 -251 459 -297 685 -36 175 -40 271 -40 1042 l0 759 123 12 c325 34 694 112 999 211 134 44 158 61 158 111 -1 29 -16 52 -47 68 -30 17 -31 16 -188 -34z"
                                    fill="#472B0B" />
                                <path
                                    d="M2765 4498 c-46 -25 -59 -74 -30 -116 28 -39 444 -159 751 -216 144 -27 432 -66 484 -66 l30 0 0 -760 c0 -783 -4 -871 -42 -1050 -49 -233 -163 -494 -295 -680 -117 -162 -307 -349 -469 -458 -65 -43 -74 -56 -74 -103 0 -39 32 -69 74 -69 57 0 264 157 410 311 281 295 446 621 528 1044 21 106 22 140 25 987 l4 878 -24 24 c-20 20 -38 25 -108 30 -357 29 -748 106 -1092 215 -140 45 -143 45 -172 29z"
                                    fill="#472B0B" />
                                <path
                                    d="M3061 3173 c-16 -16 -171 -187 -346 -381 l-317 -354 -182 181 c-161 160 -186 181 -215 181 -43 0 -81 -38 -81 -82 0 -28 24 -56 218 -250 119 -120 227 -221 239 -224 13 -4 33 -4 45 0 20 4 214 215 686 743 103 115 113 143 67 188 -33 34 -77 33 -114 -2z"
                                    fill="#472B0B" />
                            </g>
                        </svg>
                    </div>
                    <div class="fact-title">ГАРАНТИЯ НА КОНСТРУКЦИЮ ДОМА ДО 5 ЛЕТ</div>
                </div>
            </div>
        </div>
        <div id="our-products" class="main-page-block">
            <div class="our-products-container">
                <div class="constuct-title">Выберите основу</div>
                <div class="my-swiper-container">
                    <div class="swiper my-swiper-base-house">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
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
                                            <span>Дом из кирпича</span>
                                        </div>
                                    </div>
                                    <div onclick="chooseNewHouse(event)" class="house-img-container">
                                        <img class="img-fluid"
                                             src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                                    </div>
                                    <div class="warmest-card-footer">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
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
                                            <span>Дом из кирпича</span>
                                        </div>
                                    </div>
                                    <div onclick="chooseNewHouse(event)" class="house-img-container">
                                        <img class="img-fluid"
                                             src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                                    </div>
                                    <div class="warmest-card-footer">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
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
                                            <span>Дом из кирпича</span>
                                        </div>
                                    </div>
                                    <div onclick="chooseNewHouse(event)" class="house-img-container">
                                        <img class="img-fluid"
                                             src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                                    </div>
                                    <div class="warmest-card-footer">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
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
                                            <span>Дом из кирпича</span>
                                        </div>
                                    </div>
                                    <div onclick="chooseNewHouse(event)" class="house-img-container">
                                        <img class="img-fluid"
                                             src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                                    </div>
                                    <div class="warmest-card-footer">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
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
                                            <span>Дом из кирпича</span>
                                        </div>
                                    </div>
                                    <div onclick="chooseNewHouse(event)" class="house-img-container">
                                        <img class="img-fluid"
                                             src="/assets/img/houses/Пущино_Готический_Кирпич/Пущино_Готический_Кирпич_01.png">
                                    </div>
                                    <div class="warmest-card-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-button"></div>
                        <div class="swiper-button-prev swiper-button"></div>
                    </div>
                </div>
                <div class="constuct-title" style="width: 50%; display: block;">
                    <span>Выберите комплектацию </span><span style="color: var(--warmest-orange);">из других материалов</span>
                </div>
                <div class="choose-complectation">
                    <div class="custom-table">
                        <div class="custom-tr">
                            <div class="custom-td td-1 td-left-pos td-border space-bottom">Тип комплектации</div>
                            <label class="custom-td td-2 td-border space-bottom">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="complectation">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border space-bottom">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="complectation">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border space-bottom">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="complectation">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-1 td-left-pos td-border">Тип фундамента</div>
                            <label class="custom-td td-2 td-border td-last">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="fundament">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border td-last">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="fundament">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border td-last">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="fundament">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr tr-title">
                            <div class="custom-td td-border td-title">
                                <svg width="76" height="76" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.6941 4.87859L6.53611 25.2484C6.19288 25.5016 5.98126 25.9249 5.98441 26.3518V63.0175C5.98441 63.7287 6.63139 64.3757 7.34258 64.3757H61.6599C62.3711 64.3757 63.0175 63.7287 63.018 63.0175V26.3518C63.018 25.9249 62.8096 25.5022 62.4663 25.2484L35.3084 4.87859C34.7482 4.51799 34.1913 4.56642 33.6959 4.87859H33.6941ZM34.5006 7.67916L60.3015 27.0302V61.6582H8.70104V27.0302L34.5006 7.67916Z"
                                        fill="#472B0B" stroke="#472B0B" stroke-width="0.390625" />
                                </svg>
                                <span>Конструктив</span>
                            </div>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Обвязка</div>
                            <label class="custom-td td-2 td-border-top">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_obvyazka" value="1">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-top">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_obvyazka" value="3">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-top">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_obvyazka" value="4">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Лаги пола первого этажа</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_lagi_pola_1_etazh" value="1">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_lagi_pola_1_etazh" value="3">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_lagi_pola_1_etazh" value="4">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Несущий каркас</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_nesushchiy_karkas" value="1">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_nesushchiy_karkas" value="3">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_nesushchiy_karkas" value="4">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Вентиляция фасада</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_ventilyatsiya_fasada" value="1">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_ventilyatsiya_fasada" value="3">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_ventilyatsiya_fasada" value="4">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Лаги межэтажного перекрытия</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_interstory_floor_lags">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_interstory_floor_lags">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_interstory_floor_lags">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Стропильная система</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_stropilnaya-systema">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_stropilnaya-systema">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_stropilnaya-systema">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Обрешетка и контробрешетка</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_obreshetka_i_kontrobreshetka">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_obreshetka_i_kontrobreshetka">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_obreshetka_i_kontrobreshetka">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Внутренние перегородки</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_vnutrenie_peregorodky">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_vnutrenie_peregorodky">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_vnutrenie_peregorodky">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1">Огнебиозащита</div>
                            <label class="custom-td td-2 td-border-bottom">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="konstruktiv_ognebiozashita">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-bottom">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="konstruktiv_ognebiozashita">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-bottom">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="konstruktiv_ognebiozashita">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr tr-title">
                            <div class="custom-td td-border td-title">
                                <svg width="76" height="76" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9751 19.7921L15.6121 18.334L17.2798 19.062L16.6428 20.5202L14.9751 19.7921Z"
                                          fill="#472B0B" stroke="#472B0B" stroke-width="0.390625" />
                                    <path d="M18.2661 21.172L18.9078 19.7158L32.5542 25.7324L31.9125 27.1886L18.2661 21.172Z"
                                          fill="#472B0B" stroke="#472B0B" stroke-width="0.390625" />
                                    <path
                                        d="M64.4356 19.5252C64.4356 19.2088 64.2482 18.9224 63.9581 18.7961L34.8178 6.07121C34.6151 5.98277 34.3845 5.98277 34.1813 6.07121L5.04095 18.7961C4.7509 18.9224 4.56348 19.2088 4.56348 19.5252C4.56348 19.8416 4.75088 20.1279 5.04095 20.2548L15.4121 24.7836L5.05995 28.9934C4.76358 29.114 4.56775 29.4003 4.56406 29.7204C4.55985 30.0405 4.74778 30.3316 5.041 30.46L15.1037 34.8541L5.06055 38.9233C4.76364 39.0439 4.56834 39.3302 4.5636 39.6503C4.55939 39.9704 4.74785 40.262 5.04107 40.3899L14.9643 44.7229L5.06061 48.7364C4.76371 48.8569 4.56841 49.1433 4.56367 49.4634C4.55945 49.7834 4.74792 50.0751 5.04114 50.203L34.1815 62.9278C34.3847 63.0163 34.6153 63.0163 34.818 62.9278L63.9583 50.203C64.2531 50.0746 64.4416 49.7813 64.4358 49.4597C64.43 49.138 64.231 48.8517 63.932 48.7338L53.8967 44.7844L63.9594 40.3904L63.9589 40.3899C64.2537 40.2614 64.4421 39.9682 64.4363 39.6466C64.4305 39.3249 64.2316 39.0385 63.9325 38.9206L53.7556 34.9155L63.9594 30.4599C64.2531 30.3315 64.4416 30.0393 64.4363 29.7187C64.4316 29.3981 64.2347 29.1117 63.9367 28.9922L53.5134 24.8161L63.9599 20.254V20.2546C64.2494 20.1272 64.4363 19.8408 64.4358 19.5249L64.4356 19.5252ZM61.5639 49.5132L34.5003 61.3315L7.41103 49.5027L17.0042 45.615L34.1814 53.1155C34.3846 53.2039 34.6152 53.2039 34.8179 53.1155L51.8347 45.6844L61.5639 49.5132ZM61.5639 39.7001L34.5003 51.5184L7.41103 39.6896L17.1437 35.7456L34.1821 43.1856C34.3853 43.274 34.6159 43.274 34.8185 43.1856L51.6952 35.816L61.5639 39.7001ZM61.5792 29.7633L34.5007 41.5879L7.40743 29.7575L17.4491 25.6729L34.1802 32.9798H34.1808C34.384 33.0682 34.6145 33.0682 34.8172 32.9798L51.4648 25.7108L61.5792 29.7633ZM34.5007 31.3826L7.34948 19.526L34.5007 7.66929L61.6519 19.526L34.5007 31.3826Z"
                                        fill="#472B0B" stroke="#472B0B" stroke-width="0.390625" />
                                </svg>
                                <span>Утепление</span>
                            </div>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Пол первого этажа</div>
                            <label class="custom-td td-2 td-border-top">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="uteplenie_pol_pervogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-top">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="uteplenie_pol_pervogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-top">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="uteplenie_pol_pervogo_etazha">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Наружные стены</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="uteplenie_naruzhnie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="uteplenie_naruzhnie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="uteplenie_naruzhnie_steni">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Внутренние стены</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="uteplenie_vnutrenie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="uteplenie_vnutrenie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="uteplenie_vnutrenie_steni">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Межэтажные перекрытия</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="uteplenie_mezhetazhnie_perekritiya">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="uteplenie_mezhetazhnie_perekritiya">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="uteplenie_mezhetazhnie_perekritiya">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Кровля</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="uteplenie_krovlya">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="uteplenie_krovlya">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="uteplenie_krovlya">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Утеплитель</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="uteplenie_uteplitel">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="uteplenie_uteplitel">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="uteplenie_uteplitel">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Тепло-звукоизоляция</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="uteplenie_teplo_zvucoizolyaciya">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="uteplenie_teplo_zvucoizolyaciya">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="uteplenie_teplo_zvucoizolyaciya">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1">Пароизоляция</div>
                            <label class="custom-td td-2 td-border-bottom">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="uteplenie_paroizolyzciya">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-bottom">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="uteplenie_paroizolyzciya">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-bottom">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="uteplenie_paroizolyzciya">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr tr-title">
                            <div class="custom-td td-border td-title">
                                <svg width="76" height="76" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M66.216 0H2.78414C2.02514 0 1.40967 0.615475 1.40967 1.37447V57.0534C1.40967 63.6408 6.76889 68.9999 13.3561 68.9999C17.9377 68.9999 21.9246 66.4067 23.9281 62.6114C25.9315 66.4068 29.9184 69 34.5 69C39.0816 69 43.0686 66.4068 45.072 62.6116C47.0755 66.4068 51.0623 69 55.6439 69C62.2313 69 67.5904 63.6408 67.5904 57.0536V1.37447C67.5905 0.615475 66.975 0 66.216 0ZM22.5536 57.0536C22.5536 62.1251 18.4276 66.2511 13.3561 66.2511C8.2846 66.2511 4.15862 62.1251 4.15862 57.0536V46.1875C6.35166 48.8315 9.66042 50.5186 13.3561 50.5186C17.0518 50.5186 20.3605 48.8318 22.5536 46.1875V57.0536ZM22.5536 38.4938V38.5719C22.5536 43.6434 18.4276 47.7694 13.3561 47.7694C8.2846 47.7694 4.15862 43.6434 4.15862 38.5719V38.4938V27.5496C6.35166 30.1937 9.66042 31.8807 13.3561 31.8807C17.0518 31.8807 20.3605 30.1938 22.5536 27.5496V38.4938ZM22.5536 19.9341C22.5536 25.0056 18.4276 29.1316 13.3561 29.1316C8.2846 29.1316 4.15862 25.0056 4.15862 19.9341V2.74895H22.5536V19.9341ZM43.6975 57.0536C43.6975 62.1251 39.5715 66.2511 34.5 66.2511C29.4285 66.2511 25.3025 62.1251 25.3025 57.0536V46.1875C27.4956 48.8315 30.8043 50.5186 34.5 50.5186C38.1957 50.5186 41.5045 48.8318 43.6975 46.1875V57.0536ZM43.6975 38.4939V38.5721C43.6975 43.6436 39.5715 47.7696 34.5 47.7696C29.4285 47.7696 25.3025 43.6436 25.3025 38.5721V38.4939V27.5497C27.4956 30.1937 30.8043 31.8808 34.5 31.8808C38.1957 31.8808 41.5045 30.194 43.6975 27.5497V38.4939ZM43.6975 19.9341C43.6975 25.0056 39.5715 29.1316 34.5 29.1316C29.4285 29.1316 25.3025 25.0056 25.3025 19.9341V2.74895H43.6975V19.9341ZM64.8414 57.0536C64.8414 62.1251 60.7154 66.2511 55.6439 66.2511C50.5724 66.2511 46.4465 62.1251 46.4465 57.0536V46.1875C48.6395 48.8315 51.9483 50.5186 55.6439 50.5186C59.3396 50.5186 62.6484 48.8318 64.8414 46.1875V57.0536ZM64.8414 38.4939V38.5721C64.8414 43.6436 60.7154 47.7696 55.6439 47.7696C50.5724 47.7696 46.4465 43.6436 46.4465 38.5721V38.4939V27.5497C48.6395 30.1937 51.9483 31.8808 55.6439 31.8808C59.3396 31.8808 62.6484 30.194 64.8414 27.5497V38.4939ZM64.8414 19.9341C64.8414 25.0056 60.7154 29.1316 55.6439 29.1316C50.5724 29.1316 46.4465 25.0056 46.4465 19.9341V2.74895H64.8414V19.9341Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M62.2651 4.26758C61.5061 4.26758 60.8906 4.88305 60.8906 5.64205V11.9647C60.8906 12.7237 61.5061 13.3392 62.2651 13.3392C63.0241 13.3392 63.6396 12.7237 63.6396 11.9647V5.64205C63.6396 4.88305 63.0241 4.26758 62.2651 4.26758Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M62.2651 14.7139C61.5061 14.7139 60.8906 15.3293 60.8906 16.0883V17.4628C60.8906 18.2218 61.5061 18.8373 62.2651 18.8373C63.0241 18.8373 63.6396 18.2218 63.6396 17.4628V16.0883C63.6396 15.3295 63.0241 14.7139 62.2651 14.7139Z"
                                        fill="#472B0B" />
                                </svg>
                                <span>Кровля</span>
                            </div>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Покрытие</div>
                            <label class="custom-td td-2 td-border-top">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="krovlya_pocritie">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-top">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="krovlya_pocritie">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-top">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="krovlya_pocritie">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Наружные стены</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="krovlya_naruzhnie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="krovlya_naruzhnie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="krovlya_naruzhnie_steni">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1">Водосточная система</div>
                            <label class="custom-td td-2 td-border-bottom">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="krovlya_vodostochnaya_systema">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-bottom">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="krovlya_vodostochnaya_systema">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-bottom">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="krovlya_vodostochnaya_systema">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr tr-title">
                            <div class="custom-td td-border td-title">
                                <svg width="76" height="76" viewBox="0 0 91 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M72.8992 68.6015H69.2279V16.0402C69.2279 15.5028 68.8697 15.1445 68.3323 15.1445H23.5592C23.0218 15.1445 22.6636 15.5028 22.6636 16.0402V68.6015H18.9923C18.4549 68.6015 18.0967 68.9598 18.0967 69.4972V73.7059C18.0967 74.2433 18.4549 74.6015 18.9923 74.6015H72.8085C73.3459 74.6015 73.7041 74.2433 73.7041 73.7059V69.4972C73.7944 68.9598 73.3466 68.6015 72.8988 68.6015H72.8992ZM24.4559 16.9342H67.4374V68.6015H65.1094V20.0676C65.1094 19.5303 64.7512 19.172 64.2138 19.172H27.6805C27.1431 19.172 26.7849 19.5302 26.7849 20.0676V68.6015H24.4569L24.4559 16.9342ZM28.5751 52.1256V37.4403H45.0509V52.1256H28.5751ZM46.8426 37.4403H63.3184V52.1256H46.8426V37.4403ZM63.3191 35.6491H46.8426V20.9637H63.3184L63.3191 35.6491ZM45.0516 35.6491H28.5751V20.9637H45.0509L45.0516 35.6491ZM28.5751 53.9166H63.3186V68.6019H28.5751V53.9166ZM72.0045 72.8098H19.9798V70.3922H72.0045V72.8098Z"
                                        fill="#472B0B" stroke="#472B0B" stroke-width="0.390625" />
                                </svg>
                                <span>Окна</span>
                            </div>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Тип</div>
                            <label class="custom-td td-2 td-border-top">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="okna_type">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-top">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="okna_type">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-top">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="okna_type">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Профиль</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="okna_profile">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="okna_profile">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="okna_profile">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Количество камер</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="okna_kolichestvo_kamer">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="okna_kolichestvo_kamer">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="okna_kolichestvo_kamer">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Отлив</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="okna_otliv">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="okna_otliv">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="okna_otliv">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1">Подоконники</div>
                            <label class="custom-td td-2 td-border-bottom ">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="okna_podoconnik">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-bottom ">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="okna_podoconnik">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-bottom ">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="okna_podoconnik">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr tr-title">
                            <div class="custom-td td-border td-title">
                                <svg width="76" height="76" viewBox="0 0 69 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M66.9781 10.3102C67.0089 8.46847 66.342 6.77029 65.1004 5.52864C64.4266 4.85502 63.3344 4.85502 62.6608 5.52872C61.9872 6.20242 61.9871 7.2946 62.6608 7.96822C63.2355 8.54281 63.5436 9.354 63.5287 10.2525C63.5144 11.1096 63.1899 11.9373 62.6608 12.4664C61.5633 13.5639 50.6229 23.1688 42.0785 30.6422L39.9844 28.5482C46.222 21.4113 53.9627 12.5865 56.9905 9.23566L57.6792 9.92454C58.3529 10.5982 59.4452 10.5983 60.1187 9.92471C60.7925 9.2511 60.7926 8.15892 60.119 7.48522L58.1628 5.52881C57.8393 5.20528 57.4005 5.02347 56.943 5.02347H56.9429C56.4854 5.02347 56.0467 5.2052 55.7232 5.52864C54.6734 6.5783 48.2524 13.8712 42.4586 20.4827C40.9005 18.1244 38.8194 16.0956 36.3439 14.5383C32.7258 12.2621 28.5077 11.108 23.8065 11.108C22.7722 11.108 21.749 11.1732 20.7655 11.302C19.8208 11.4256 19.1553 12.2916 19.2789 13.2363C19.4026 14.1809 20.2685 14.8464 21.2132 14.7228C22.0489 14.6134 22.9214 14.558 23.8064 14.558C30.9646 14.558 36.9692 17.7672 40.083 23.1956C37.1774 26.5158 34.6809 29.3755 33.4771 30.7553C31.3279 31.0481 29.7242 31.9276 28.5935 33.4358C27.5422 34.8379 27.0814 36.5126 26.5935 38.2855C26.0053 40.4233 25.3971 42.6339 23.6625 44.3684C23.1691 44.8617 23.0215 45.6037 23.2885 46.2483C23.5556 46.8929 24.1846 47.3132 24.8823 47.3132C29.5247 47.3132 33.2042 46.3237 35.8187 44.3722C38.1748 42.6135 39.5792 40.1165 39.9112 37.1181C44.356 33.2363 63.5062 16.5 65.1003 14.9059C66.2643 13.742 66.9488 12.0668 66.9781 10.3102ZM39.4753 32.9182C38.957 33.3711 38.4545 33.8101 37.9713 34.2319L36.3963 32.657C36.8178 32.1739 37.2567 31.671 37.7095 31.1525L39.4753 32.9182ZM33.755 41.6074C32.3981 42.6204 30.5923 43.2954 28.3636 43.626C29.122 42.101 29.5474 40.5548 29.9199 39.2007C30.7195 36.2951 31.2064 34.8368 33.1766 34.3164L36.3617 37.5014C36.011 39.1969 35.1384 40.5748 33.755 41.6074Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M15.3795 16.3826C15.6308 16.3826 15.886 16.3274 16.1274 16.211C16.2822 16.1363 16.4413 16.0629 16.6 15.993C17.4715 15.6082 17.8662 14.5898 17.4814 13.7182C17.0967 12.8468 16.0783 12.4521 15.2067 12.8368C15.0129 12.9223 14.8185 13.012 14.6291 13.1034C13.771 13.5171 13.4107 14.5482 13.8243 15.4063C14.1217 16.023 14.7378 16.3826 15.3795 16.3826Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M27.8449 49.2302C26.8931 49.2209 26.1113 49.9831 26.1005 50.9357C26.0261 57.5672 25.025 60.5256 19.2899 60.5256C16.0748 60.5256 12.7007 58.1737 10.0328 54.073C7.09112 49.5512 5.471 43.6804 5.471 37.5421C5.471 29.5732 7.87737 22.9426 12.2469 18.872C12.944 18.2226 12.9826 17.131 12.3332 16.4339C11.6838 15.7369 10.5923 15.6982 9.89519 16.3476C7.3214 18.7454 5.32998 21.861 3.97611 25.6077C2.67874 29.1979 2.021 33.2133 2.021 37.5421C2.021 44.3404 3.83941 50.8794 7.14106 55.9544C10.4575 61.0521 14.8856 63.9757 19.2899 63.9757C23.5024 63.9757 26.4385 62.4933 28.0162 59.5699C29.3709 57.0597 29.5184 53.8169 29.5503 50.9745C29.561 50.0218 28.7975 49.2408 27.8449 49.2302Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M36.3339 23.6844C36.3339 20.5156 33.7558 17.9375 30.5869 17.9375C27.418 17.9375 24.8398 20.5156 24.8398 23.6844C24.8398 26.8533 27.418 29.4315 30.5869 29.4315C33.7558 29.4314 36.3339 26.8533 36.3339 23.6844ZM28.2898 23.6844C28.2898 22.4178 29.3203 21.3875 30.5869 21.3875C31.8535 21.3875 32.8839 22.4178 32.8839 23.6844C32.8839 24.9511 31.8535 25.9815 30.5869 25.9815C29.3203 25.9814 28.2898 24.951 28.2898 23.6844Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M16.8901 31.4959C20.059 31.4959 22.6371 28.9178 22.6371 25.749C22.6371 22.5801 20.059 20.002 16.8901 20.002C13.7212 20.002 11.1431 22.5801 11.1431 25.749C11.1431 28.9178 13.7212 31.4959 16.8901 31.4959ZM16.8901 23.452C18.1567 23.452 19.1871 24.4824 19.1871 25.749C19.1871 27.0155 18.1567 28.0459 16.8901 28.0459C15.6235 28.0459 14.5931 27.0155 14.5931 25.749C14.5931 24.4824 15.6236 23.452 16.8901 23.452Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M18.2347 38.9541C18.2347 35.7852 15.6566 33.207 12.4877 33.207C9.31882 33.207 6.74072 35.7852 6.74072 38.9541C6.74072 42.123 9.31882 44.701 12.4877 44.701C15.6566 44.701 18.2347 42.123 18.2347 38.9541ZM12.4877 41.2511C11.2212 41.2511 10.1907 40.2207 10.1907 38.9541C10.1907 37.6875 11.2212 36.657 12.4877 36.657C13.7543 36.657 14.7847 37.6875 14.7847 38.9541C14.7847 40.2206 13.7543 41.2511 12.4877 41.2511Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M18.5257 58.1462C21.6946 58.1462 24.2728 55.5681 24.2728 52.3993C24.2728 49.2304 21.6946 46.6523 18.5257 46.6523C15.3569 46.6523 12.7788 49.2304 12.7788 52.3993C12.7788 55.5681 15.3569 58.1462 18.5257 58.1462ZM18.5257 50.1023C19.7924 50.1023 20.8228 51.1327 20.8228 52.3993C20.8228 53.6658 19.7924 54.6962 18.5257 54.6962C17.2592 54.6962 16.2288 53.6658 16.2288 52.3993C16.2288 51.1327 17.2592 50.1023 18.5257 50.1023Z"
                                        fill="#472B0B" />
                                </svg>
                                <span>Отделка</span>
                            </div>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Внешние стены</div>
                            <label class="custom-td td-2 td-border-top">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="otdelka_vneshnie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-top">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="otdelka_vneshnie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-top">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="otdelka_vneshnie_steni">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Пол открытых площадей</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="otdelka_pol_otkritih_ploshadey">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="otdelka_pol_otkritih_ploshadey">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="otdelka_pol_otkritih_ploshadey">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Внутренние стены первого этажа</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="otdelka_vnutrennie_steni_pervogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="otdelka_vnutrennie_steni_pervogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="otdelka_vnutrennie_steni_pervogo_etazha">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Покрытие пола первого этажа</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="otdelka_pokritiya_pola_pervogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="otdelka_pokritiya_pola_pervogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="otdelka_pokritiya_pola_pervogo_etazha">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Потолок первого этажа</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="otdelka_potolok_pervogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="otdelka_potolok_pervogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="otdelka_potolok_pervogo_etazha">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Внутренние стены второго этажа</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="otdelka_vnutrennie_steni_vtorogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="otdelka_vnutrennie_steni_vtorogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="otdelka_vnutrennie_steni_vtorogo_etazha">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Покрытие пола второго этажа</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="otdelka_pokritiya_pola_vtorogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="otdelka_pokritiya_pola_vtorogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="otdelka_pokritiya_pola_vtorogo_etazha">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Потолок второго этажа</div>
                            <label class="custom-td td-2 td-border-bottom space-bottom">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="otdelka_potolok_vtorogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-bottom space-bottom">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="otdelka_potolok_vtorogo_etazha">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-bottom space-bottom">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="otdelka_potolok_vtorogo_etazha">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1">Цвет кровли</div>
                            <div class="custom-td" style="background-color: #ffffff00; padding: 0px 10px; gap: 10px">
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/brown.png"class="img-fluid">
                                </label>
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/black.png"class="img-fluid">
                                </label>
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/blue.png" class="img-fluid">
                                </label>
                            </div>
                            <div class="custom-td" style="background-color: #ffffff00; padding: 0px 10px; gap: 10px">
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/gray.png" class="img-fluid"></label>
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/green.png" class="img-fluid"></label>
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/orange.png" class="img-fluid">
                                </label>
                            </div>
                            <div class="custom-td" style="background-color: #ffffff00; padding: 0px 10px; gap: 10px">
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/red.png" class="img-fluid">
                                </label>
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/vinous.png" class="img-fluid">
                                </label>
                                <label class="custom-td td-border" style="padding: 0px; background-color: #ffffff00;">
                                    <input type="radio" name="roof" style="position: absolute;">
                                    <img src="/assets/img/roof/white.png" class="img-fluid">
                                </label>
                            </div>
                        </div>
                        <div class="custom-tr tr-title">
                            <div class="custom-td td-border td-title">
                                <svg width="76" height="76" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M69.409 46.2783L64.9218 41.4471H64.9224C65.2952 38.8506 65.2372 36.2101 64.7501 33.6322L68.8258 28.5093V28.5099C69.103 28.1562 69.1632 27.6795 68.9829 27.2684L67.7114 24.4713C67.5177 24.0695 67.1182 23.8074 66.6723 23.7906L60.3005 23.4838V23.4844C58.6862 21.2874 56.7084 19.3832 54.4523 17.853L53.7043 11.6006C53.6579 11.1582 53.3703 10.7779 52.9569 10.6138L50.0849 9.52948C49.6622 9.37234 49.1879 9.46164 48.8511 9.76141L44.2443 13.942V13.9414C41.4826 13.5518 38.6739 13.6428 35.9434 14.2111L31.0525 10.3297C30.6907 10.0369 30.1932 9.9789 29.7734 10.1801L27.0064 11.4511C26.6051 11.6297 26.3349 12.0153 26.3036 12.4536L25.907 17.7632C25.8803 18.081 25.9824 18.3964 26.1906 18.6388C26.3987 18.8806 26.6956 19.0284 27.0139 19.0493C27.6656 19.0841 28.2264 18.593 28.278 17.9424L28.6519 13.3211L30.1479 12.6479L34.8891 16.3872H34.8886C35.1738 16.6168 35.549 16.7026 35.9056 16.6191C38.6998 15.9691 41.5943 15.8775 44.424 16.3495C44.7858 16.4081 45.1546 16.2979 45.4259 16.0503L49.9132 11.9822L51.4091 12.5429L52.0974 18.6307H52.0962C52.1409 18.9902 52.3438 19.3114 52.65 19.5056C55.0198 21.0161 57.0742 22.9719 58.7 25.264C58.9134 25.5637 59.2526 25.7481 59.6196 25.7649L65.8343 26.0717L66.4999 27.5299L62.5362 32.5108C62.3135 32.7902 62.2283 33.1555 62.3048 33.5052C62.8626 36.1637 62.9206 38.9022 62.4764 41.5823C62.4103 41.9493 62.5211 42.3262 62.7756 42.5993L67.1354 47.3034L66.5747 48.7994L60.0684 49.4801V49.4789C59.7071 49.5126 59.3813 49.7114 59.1859 50.0176C57.7438 52.2204 55.9145 54.1437 53.7865 55.6936C53.4623 55.9232 53.2716 56.2983 53.278 56.6955L53.0234 63.3213L51.5802 63.9719L50.4663 63.0523C50.2211 62.8221 49.8906 62.705 49.5554 62.7293C49.2197 62.7537 48.9101 62.9166 48.7002 63.1798C48.4908 63.4431 48.401 63.7817 48.452 64.114C48.5036 64.4462 48.6915 64.7419 48.9704 64.9298L50.6606 66.2831C50.874 66.4513 51.1372 66.5435 51.4086 66.5446C51.5785 66.5469 51.7472 66.511 51.9021 66.4402L54.6992 65.1762C55.1306 64.9982 55.4217 64.5883 55.4472 64.1221L55.7087 57.3317C57.7178 55.791 59.4723 53.9437 60.9064 51.8574L67.5919 51.1622V51.1616C68.0407 51.1222 68.4286 50.8329 68.5938 50.4142L69.6781 47.5422H69.6787C69.8434 47.1045 69.7384 46.6111 69.409 46.2783Z"
                                        fill="#472B0B" stroke="#472B0B" stroke-width="0.390625" />
                                    <path
                                        d="M44.1241 46.7259C43.5849 46.9358 43.2717 47.4999 43.3779 48.0682C43.484 48.637 43.9792 49.0498 44.5578 49.0516C44.7086 49.0504 44.8576 49.0226 44.9991 48.9692C47.7266 47.8774 49.9572 45.8195 51.266 43.1889C52.4187 40.8447 52.7503 38.1816 52.2082 35.6262C51.6655 33.0714 50.2803 30.7724 48.2746 29.0996C46.3218 27.4859 43.9015 26.542 41.3717 26.4073C38.8419 26.2727 36.3358 26.9541 34.2223 28.3516C33.933 28.5186 33.726 28.7986 33.6512 29.1245C33.5764 29.4498 33.6402 29.7925 33.8275 30.069C34.0147 30.3456 34.3087 30.5323 34.6386 30.5839C34.9692 30.6355 35.306 30.5474 35.5687 30.341C37.2578 29.2497 39.2477 28.7204 41.2556 28.8277C43.2635 28.9355 45.1858 29.6742 46.749 30.9389C48.3417 32.2644 49.4406 34.0886 49.868 36.1162C50.2959 38.1439 50.0268 40.2563 49.1043 42.1118C48.0687 44.2103 46.295 45.8529 44.1241 46.7261V46.7259Z"
                                        fill="#472B0B" stroke="#472B0B" stroke-width="0.390625" />
                                    <path
                                        d="M24.8601 32.4879C25.7803 30.7222 26.1468 28.7207 25.9119 26.7435C25.6771 24.7663 24.852 22.9056 23.5439 21.4049C21.6426 19.2729 18.922 18.0535 16.0652 18.0547C15.6233 18.0576 15.2186 18.3029 15.011 18.6931C14.8034 19.0833 14.826 19.5559 15.0707 19.9241L19.1388 26.0344C19.3447 26.3417 19.4177 26.7192 19.3406 27.081C19.2704 27.4405 19.0571 27.7565 18.7497 27.9559L15.3323 30.1993V30.1998C15.0093 30.415 14.6104 30.4857 14.2329 30.3941C13.8554 30.3234 13.5249 30.0984 13.3208 29.7731L9.67135 23.0429C9.46087 22.6597 9.06079 22.4196 8.62417 22.4144C8.18698 22.4248 7.7869 22.6631 7.57003 23.0429C6.32686 25.229 5.96735 27.8075 6.5646 30.2497C7.16182 32.6926 8.67108 34.8142 10.7823 36.1797C12.8935 37.5457 15.4471 38.0519 17.9201 37.5956L38.1269 61.1823C39.0082 62.1831 40.278 62.7561 41.6117 62.7525H41.7764C42.9517 62.7125 44.0674 62.226 44.8966 61.3916C45.7257 60.5578 46.2053 59.4394 46.2383 58.2635C46.2714 57.0881 45.855 55.9441 45.0746 55.0651L24.8601 32.4879ZM40.5642 58.0191C40.5723 57.7321 40.6999 57.4607 40.9162 57.2717C41.1069 57.1047 41.351 57.0119 41.6038 57.0096H41.6786C42.0271 57.034 42.3402 57.2305 42.5142 57.5338C42.6876 57.8365 42.6986 58.2064 42.5438 58.5189C42.3884 58.832 42.088 59.0471 41.7413 59.0924C41.3951 59.1376 41.049 59.0071 40.8188 58.7445C40.6419 58.5456 40.5503 58.2852 40.5642 58.0191Z"
                                        fill="#472B0B" />
                                    <path
                                        d="M40.5648 58.0191H40.5642M40.5642 58.0191C40.5723 57.7321 40.6999 57.4607 40.9162 57.2717C41.1069 57.1047 41.351 57.0119 41.6038 57.0096H41.6786C42.0271 57.034 42.3402 57.2305 42.5142 57.5338C42.6876 57.8365 42.6986 58.2064 42.5438 58.5189C42.3884 58.832 42.088 59.0471 41.7413 59.0924C41.3951 59.1376 41.0489 59.0071 40.8188 58.7445C40.6419 58.5456 40.5503 58.2852 40.5642 58.0191ZM24.8601 32.4879C25.7803 30.7222 26.1468 28.7207 25.9119 26.7435C25.6771 24.7663 24.852 22.9056 23.5439 21.4049C21.6426 19.2729 18.922 18.0535 16.0652 18.0547C15.6233 18.0576 15.2186 18.3029 15.011 18.6931C14.8034 19.0833 14.826 19.5559 15.0707 19.9241L19.1388 26.0344C19.3447 26.3417 19.4177 26.7192 19.3406 27.081C19.2704 27.4405 19.0571 27.7565 18.7497 27.9559L15.3323 30.1993V30.1998C15.0093 30.415 14.6104 30.4857 14.2329 30.3941C13.8554 30.3234 13.5249 30.0984 13.3208 29.7731L9.67135 23.0429C9.46087 22.6597 9.06079 22.4196 8.62417 22.4144C8.18698 22.4248 7.7869 22.6631 7.57003 23.0429C6.32686 25.229 5.96735 27.8075 6.5646 30.2497C7.16182 32.6926 8.67108 34.8142 10.7823 36.1797C12.8935 37.5457 15.4471 38.0519 17.9201 37.5956L38.1269 61.1823C39.0082 62.1831 40.278 62.7561 41.6117 62.7525H41.7764C42.9517 62.7125 44.0674 62.226 44.8966 61.3916C45.7257 60.5578 46.2053 59.4394 46.2383 58.2635C46.2714 57.0881 45.855 55.9441 45.0746 55.0651L24.8601 32.4879Z"
                                        stroke="#472B0B" stroke-width="0.390625" />
                                    <path
                                        d="M26.251 51.7078C26.0376 51.3164 25.6271 51.0723 25.1812 51.0717H22.6085H22.6091C21.9318 50.4646 21.1485 49.988 20.2979 49.6661L19.1464 47.5196C18.9359 47.1108 18.5062 46.8626 18.047 46.8841H17.1494C16.6943 46.8963 16.2855 47.1659 16.0953 47.5793L15.1681 49.5838H15.1675C14.3488 49.8784 13.5892 50.3162 12.9242 50.8774L10.8229 50.758C10.3672 50.7354 9.93753 50.969 9.70849 51.3633L9.26723 52.1113C9.03994 52.5062 9.05443 52.995 9.30492 53.3754L10.4118 55.0355C10.3127 55.5278 10.2628 56.0287 10.2622 56.5314C10.2396 56.9785 10.2622 57.4273 10.3295 57.8697L9.16285 59.5001C8.89555 59.8701 8.86075 60.36 9.07298 60.7642L9.49162 61.5568C9.7021 61.9522 10.1132 62.1998 10.5614 62.1998L12.6703 62.1552C13.5012 62.8991 14.491 63.4441 15.5642 63.7479L16.6485 65.7223C16.8607 66.1055 17.2648 66.3433 17.7032 66.3427H18.6379C19.078 66.3218 19.4729 66.0644 19.67 65.6695L20.7247 63.4262H20.7242C21.3307 63.1525 21.8966 62.7982 22.4068 62.372L24.7174 62.7083H24.8972C25.3285 62.7112 25.7269 62.4793 25.9368 62.1024L26.2806 61.504V61.5046C26.5259 61.0744 26.4842 60.538 26.1763 60.1507L24.8374 58.4906C24.9905 57.8968 25.0688 57.2862 25.0694 56.6734V55.9254C25.1158 55.879 25.1581 55.8291 25.1964 55.7758L26.61 53.7643C26.8698 53.3938 26.9016 52.9091 26.6923 52.5078L26.251 51.7078ZM15.0781 56.6357C15.0758 55.9509 15.346 55.294 15.829 54.8086C16.312 54.3232 16.9684 54.0496 17.6532 54.0485C18.338 54.0467 18.9949 54.3181 19.4797 54.8011C19.9644 55.2847 20.2375 55.941 20.2381 56.6258C20.2387 57.3106 19.9673 57.9676 19.4832 58.4517C18.9996 58.9365 18.3426 59.2084 17.6578 59.2084C16.9759 59.2067 16.3219 58.9347 15.8383 58.4535C15.3553 57.9717 15.0822 57.3182 15.0781 56.6357Z"
                                        fill="#472B0B" stroke="#472B0B" stroke-width="0.390625" />
                                </svg>
                                <span>Инженерия</span>
                            </div>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Внутренние стены</div>
                            <label class="custom-td td-2 td-border-top">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="inzheneriya_vnutrenie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-top">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="inzheneriya_vnutrenie_steni">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-top">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="inzheneriya_vnutrenie_steni">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Межэтажные перекрытия</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="inzheneriya_mezhetazhnie_perecritiya">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="inzheneriya_mezhetazhnie_perecritiya">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="inzheneriya_mezhetazhnie_perecritiya">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Кровля</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="inzheneriya_krovlya">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="inzheneriya_krovlya">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="inzheneriya_krovlya">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Утеплитель</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="inzheneriya_uteplitel">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="inzheneriya_uteplitel">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="inzheneriya_uteplitel">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1 space-bottom">Тепло-звукоизоляция</div>
                            <label class="custom-td td-2">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="inzheneriya_teplozvukoizolyaciya">
                                </div>
                            </label>
                            <label class="custom-td td-3">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="inzheneriya_teplozvukoizolyaciya">
                                </div>
                            </label>
                            <label class="custom-td td-4">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="inzheneriya_teplozvukoizolyaciya">
                                </div>
                            </label>
                        </div>
                        <div class="custom-tr">
                            <div class="custom-td td-border td-left-pos td-1">Пароизоляция</div>
                            <label class="custom-td td-2 td-border-bottom">
                                <span>1</span>
                                <div>
                                    <input type="radio" name="inzheneriya_paroizolyaciya">
                                </div>
                            </label>
                            <label class="custom-td td-3 td-border-bottom ">
                                <span>3</span>
                                <div>
                                    <input type="radio" name="inzheneriya_paroizolyaciya">
                                </div>
                            </label>
                            <label class="custom-td td-4 td-border-bottom">
                                <span>4</span>
                                <div>
                                    <input type="radio" name="inzheneriya_paroizolyaciya">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
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
                            <h1 class="modal-title" style="color: var(--warmest-orange)" id="exampleModalLabel">Заполните форму и наш
                                менеджер свяжется с вами</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body warmest-body-modal">
                            <div class="modal-body-input">
                                <input type="text" placeholder="Ваше имя" class="form-control"
                                       style="font-size: var(--warmest-medium-font-size);">
                                <input type="text" placeholder="Телефон" class="form-control"
                                       style="font-size: var(--warmest-medium-font-size);">
                            </div>
                            <textarea placeholder="Сообщение" class="form-control"
                                      style="height: 30vh; resize: none; font-size: var(--warmest-medium-font-size);"></textarea>
                        </div>
                        <div class="modal-footer waremst-modal-footer">
              <span style="font-size: var(--warmest-small-font-size); color: var(--warmest-gray)">Нажимая кнопку
                “Отправить”, я даю согласие на обработку персональных данных.</span>
                            <button type="button" class="warmest-btn">Отправить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
