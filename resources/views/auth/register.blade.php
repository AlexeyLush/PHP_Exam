@extends('layouts.main')

@section('content')

    <h1>Регистрация</h1>

    @include('components.form-errors')

    <form class="form__register" method="post" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Имя</label>
            <input class="input__text" value="{{ old('name') }}" type="text" id="name" name="name">
        </div>

        <div>
            <label for="email">Email</label>
            <input class="input__text"  value="{{ old('email') }}" type="email" id="email" name="email" placeholder="someone@example.com">
        </div>

        <div>
            <label for="password">Пароль</label>
            <input class="input__text"  type="password" id="password" name="password">
        </div>

        <div>
            <label for="password_confirmation">Подтверждение</label>
            <input class="input__text"  type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <button>Зарегистрироваться</button>

    </form>

@endsection
