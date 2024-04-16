<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/texts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nav-bar.css') }}">
    <script src="{{ asset('js/index.js') }}" defer></script>
    <title>Warmest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4380d47dd2.js" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg">
    <div class="container justify-content-center">
        <a class="navbar-brand p-1" href="#">
            <span class="logo">Warmest</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#about-us-block">О нас</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="#">Дома</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="#">Малые формы</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="#">Наши объекты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#our-services">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#house-block">Дом в ипотеку</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us-block">Контакты</a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link" href="#">Для инвестора</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="main-content-block">
    <div id="welcome-block" class="d-flex container align-items-center main-page-block block-with-image">
        <div class="container">
        <span style="font-size: var(--warmest-large-font-size);">
          Строим
          <span style="color: var(--warmest-orange);">тепло</span>
          и комфорт для вашего
          <span style="color: var(--warmest-orange);">счастья</span>
        </span>
        </div>
        <div class="container">
            <img src="../assets/img/welcome-block-image.png" class="img-fluid">
        </div>
    </div>
    <div id="about-us-block" class="d-flex container flex-column align-items-center main-page-block"
         style="gap:30px; text-align: justify;">
        <div class="title">
            <div>О нас</div>
            <div class="line"></div>
        </div>
        <div class="container">
        <span style="font-size: var(--warmest-medium-font-size);">
          Компания Warmest была основана группой профессионалов, имеющих многолетний опыт в области строительства. Мы
          специализируемся на проектировании и строительстве качественных и энергоэффективных домов, которые
          обеспечивают комфорт и уют для своих обитателей.
          <br>
          Наши дома отличаются не только высокими техническими характеристиками, но и оригинальным дизайном, который
          позволяет гармонично вписать здание в любой ландшафт. Мы используем только экологически чистые материалы и
          передовые технологии, чтобы обеспечить долговечность и надежность наших строений.
          <br>
          Warmest стремится создавать дома, которые станут настоящими семейными гнездами, где будет царить тепло и уют.
          Наша миссия - помочь каждому клиенту реализовать свою мечту о собственном доме, учитывая его потребности и
          пожелания.
          <br>
          Мы гордимся тем, что можем предложить нашим клиентам индивидуальный подход и внимательное отношение к каждому
          проекту. Наша команда всегда готова ответить на все ваши вопросы и помочь выбрать оптимальный вариант дома,
          который будет соответствовать вашим требованиям и бюджету.
        </span>
        </div>
    </div>
    <div id="our-services" class="main-page-block" style="background: linear-gradient(
      rgba(0, 0, 0, 0.3),
      rgba(0, 0, 0, 0.3)
      ), url('../assets/img/our-services-background.png') no-repeat center center;
      background-size: cover;
			color: var(--white);">
        <div class="d-flex container p-5 flex-column align-items-center" style="gap:30px; text-align: justify;">
            <div class="title">
                <div><span style="color: #fff;">Наши услуги</span></div>
                <div class="line"></div>
            </div>
            <div class="d-flex container justify-content-center gap-2">
                <div class="d-flex align-items-center text-center glassmorphizm rounded p-2">
            <span style="font-size: var(--warmest-medium-font-size); color: #fff;">
              Проектирование и дизайн
            </span>
                </div>
                <div class="d-flex flex-column gap-2">
                    <div class="container glassmorphizm text-center rounded p-2"
                         style="font-size: var(--warmest-medium-font-size); color: #fff;">
              <span style="font-size: var(--warmest-medium-font-size); color: #fff;">
                Техническое консультирование
              </span>
                    </div>
                    <div class="container glassmorphizm text-center rounded p-2"
                         style="background-color: rgba(255, 138, 0, 0.65);">
              <span style="font-size: var(--warmest-medium-font-size); color: #fff;">
                Управление строительством
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="house-block" class="d-flex container flex-column align-items-center main-page-block"
         style="gap:30px; text-align: justify;">
        <div class="title">
            <div>Дом в ипотеку</div>
            <div class="line"></div>
        </div>
        <div class="d-flex container align-items-center block-with-image">
            <div class="container">
          <span style="font-size: var(--warmest-medium-font-size);">
            <span style="color: var(--warmest-orange);">Warmest</span>
            предлагает помощь в оформлении ипотеки на строительство или покупку готового дома. Мы сотрудничаем с
            различными банками и поможем подобрать наиболее выгодные условия кредитования, учитывая ваши потребности и
            возможности.
          </span>
            </div>
            <div class="container">
                <img src="../assets/img/house-keys.jpg" class="img-fluid">
            </div>
        </div>
    </div>
    <div id="contact-us-block" class="d-flex container flex-column align-items-center main-page-block"
         style="gap:30px; text-align: justify;">
        <div class="title container text-center">
            <div>Контакты</div>
            <div class="line"></div>
        </div>
        <div class="warmest-grid container p-2">
            <a href="tel:+78003004322" style="text-decoration: none;">
                <div class="d-flex container align-items-center border p-2" style="height: 100%;">
                    <div class="d-flex container p-2">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center text-center glassmorphizm rounded-circle p-2 ico"
                                 style="background-color: var(--warmest-orange)">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <div class="container d-flex flex-column">
                <span style="font-size: var(--warmest-medium-font-size);color: var(--bs-body-color);">
                  Позвоните нам
                </span>
                            <span style="font-size: var(--warmest-small-font-size);color: var(--warmest-orange);">
                  +7(800)300-43-22
                </span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="mailto:s9773237640@gmail.com" style="text-decoration: none;">
                <div class="d-flex container border align-items-center p-2" style="height: 100%;">
                    <div class="d-flex container p-2">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center text-center glassmorphizm rounded-circle p-2 ico"
                                 style="background-color: var(--warmest-orange)">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                        <div class="container d-flex flex-column">
                <span style="font-size: var(--warmest-medium-font-size);color: var(--bs-body-color);">
                  Напишите нам
                </span>
                            <span style="font-size: var(--warmest-small-font-size);color: var(--warmest-orange);">
                  s9773237640@gmail.com
                </span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="d-flex container border p-2" style="height: 100%;">
                <div class="d-flex container p-2">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center text-center glassmorphizm rounded-circle p-2 ico"
                             style="background-color: var(--warmest-orange)">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                    </div>
                    <div class="container d-flex flex-column">
              <span style="font-size: var(--warmest-medium-font-size);color: var(--bs-body-color);">
                Мы находимся тут
              </span>
                        <span style="font-size: var(--warmest-small-font-size);color: var(--warmest-orange);">
                Каширское шоссе, владение 63к1, выставочный дом 11
              </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                <span>+7(800)300-43-22</span>
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
