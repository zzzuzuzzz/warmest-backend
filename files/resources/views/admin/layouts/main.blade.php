<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ панель</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <p class="animation__shake">Warmest</p>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    @if(count($questions) > 0)
                        <span class="badge badge-danger navbar-badge">{{ count($questions) }}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        @if(count($questions) > 0)
                            @foreach($questionsForMsg as $question)
                                <div class="media">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            {{ $question->name }}
                                        </h3>
                                        <p class="text-sm">{{ $question->theme }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <i class="fas fa-envelope mr-2"></i>
                            Нет новых сообщений
                        @endif
                    </a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('question.index') }}" class="dropdown-item dropdown-footer">Посмотреть все сообщения</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    @if($numberNotification > 0)
                        <span class="badge badge-warning navbar-badge">{{ $numberNotification }}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">{{ $numberNotification }} Уведомлений</span>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('question.index') }}" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i>
                        @if(isset($questions))
                            {{ count($questions) }} новых сообщений
                            <span class="float-right text-muted text-sm">{{ $passedTime }}</span>
                        @else
                            Нет новых сообщений
                        @endif
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('application.index') }}" class="dropdown-item">
                        <i class="fas fa-bell mr-2"></i>
                        @if(isset($applications))
                            {{ count($applications) }} новых заявок
                            <span class="float-right text-muted text-sm">{{ $passedTimeApplication }}</span>
                        @else
                            Нет новых заявок
                        @endif
                    </a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('site.index') }}" class="brand-link">
            <i><img src="{{ asset('favicon.ico') }}" alt="Логотип"></i>
            <span class="brand-text font-weight-light">Warmest</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('application.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>Заявки</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('house.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Каталог</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Категории</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('addService.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-warehouse"></i>
                            <p>Дополнительные услуги</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.admin.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Администраторы</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Пользователи</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('faq.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                            <p>Вопрос - ответ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('question.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-envelope"></i>
                            <p>Сообщения</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer d-flex justify-content-between">
        <div>
            <strong>Copyright &copy; 2014-{{ now()->year }} <a href="{{ route('admin.main.index') }}">Warmest</a>.</strong>
            Все права защищены.
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-primary">Выход</button>
        </form>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    //Initialize Select2 Elements
    $('.add_services_ids').select2()
</script>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

    const swiper = new Swiper('.swiper', {
        // direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
</script>
<script>
    document.querySelector('input[type=file]').onchange = function() {
        $('.fileName').remove()
        for (let i = 0; i < this.files.length; i++) {
            let p = document.createElement("p")
            p.textContent = this.files[i].name
            p.classList.add('fileName')
            document.querySelector('.previewBlock').append(p)
        }
    };
</script>
<script>
    let display = 'view'
    document.querySelector('.deleteIMG').addEventListener('click', function () {
        if (display === 'view') {
            document.querySelector('.swiper').classList.add('d-none')
            display = 'none'
        } else {
            document.querySelector('.swiper').classList.remove('d-none')
            display = 'view'
        }
    })
</script>
</body>
</html>
