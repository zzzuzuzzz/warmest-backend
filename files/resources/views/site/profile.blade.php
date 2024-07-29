@extends('site.layouts.main')
@section('content')
    <div class="mainProfileBlock d-flex justify-content-center">
        <div class="card card-primary card-outline mt-3" style="max-width: 400px; min-width: 280px">
            <div class="card-body box-profile">
                <h3 class="profile-username text-center">{{ $user->name }}</h3>
                <p class="text-muted text-center">{{ $user->email }}</p>
                <ul class="list-group list-group-unbordered mb-3">
{{--                    <li class="list-group-item border-0">--}}
{{--                        <a class="float-right" href="{{ route('site.profile.favorite') }}">Избранное</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item border-0">--}}
{{--                        <a class="float-right" href="{{ route('site.profile.faq') }}">Вопрос - ответ</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item border-0">--}}
{{--                        <a class="float-right" href="{{ route('site.profile.setting') }}">Личный кабинет</a>--}}
{{--                    </li>--}}
{{--                    <li class="list-group-item border-0">--}}
{{--                        <a class="float-right" href="{{ route('site.profile.question') }}">Задать вопрос</a>--}}
{{--                    </li>--}}
                    <li class="list-group-item border-0">
                        <form action="{{ route('logout') }}" method="POST" class="float-right">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger w-75">Выход</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
{{--        @yield('profileContent')--}}
    </div>
@endsection
