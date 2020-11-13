@extends('layouts.main')

@section('content')

    <h1>Вход</h1>

    @include('components.form-errors')

    <form class="login__register" method="post" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Email</label>
            <input class="input__text"  value="{{ old('email') }}" type="email" id="email" name="email" placeholder="someone@example.com">
        </div>

        <div>
            <label for="password">Пароль</label>
            <input class="input__text"  type="password" id="password" name="password">
        </div>

        <div>
            <label>
                <input {{ old('remember') ? 'checked' : '' }} type="checkbox" name="remember" value="1">
                Запомнить меня
            </label>
        </div>

        <button>Войти</button>

    </form>

@endsection
