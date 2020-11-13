<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config("app.name") }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar__container container">
            <a href="{{ route('index') }}">
                <h2>Фильмотека</h2>
            </a>
            <ul>
                <li>
                    <a href="{{ route('films.index') }}">Каталог</a>
                </li>
                <li>
                    <a href="">ХИТЫ</a>
                </li>
                <li>
                    <a href="">Новое</a>
                </li>
            </ul>

            <div class="auth">
                @if (auth()->check())
                    {{ auth()->user()->name }}
                    <form method="post" action="{{ route('logout') }}"> @csrf
                        <button>Выйти</button>
                    </form>

                @else
                    <a href="{{ route('login') }}">Войти</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                @endif
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
