@extends('layouts.app')
@section('navbar')
    <ul>
        <li>
            <a href="{{ route('films.index') }}">Фильмы</a>
        </li>
        <li>
            <a href="{{ route('user.favorites') }}">Избранное</a>
        </li>
        @auth
            @if(auth()->user()->isAdmin() )
                <li>
                    <a href="{{ route('admin.films.index') }}">Админ панель</a>
                </li>
            @endif
        @endauth
    </ul>

    <div class="auth">
        @if (auth()->check())
            <div class="username">{{ auth()->user()->name }}</div>
            <form method="post" action="{{ route('logout') }}"> @csrf
                <button>Выйти</button>
            </form>

        @else
            <a href="{{ route('login') }}">Войти</a>
            <a href="{{ route('register') }}">Регистрация</a>
        @endif
    </div>
@endsection
