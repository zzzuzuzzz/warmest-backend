<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="text-center">
        <form action="{{ route('admin.auth') }}" method="post">
            @csrf
            <img class="mb-4" src="{{ asset('favicon.ico') }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Пожалуйста, войдите</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="login" placeholder="admin_login">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Пароль</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
        </form>
</body>
