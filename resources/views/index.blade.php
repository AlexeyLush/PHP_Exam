@extends('layouts.main')

@section('content')
    <div class="index__info">
        <div class="site">
            <h1>Фильмотека</h1>
            <p>
                Фильмотека - сервис, с помощью которого можно получить информацию о кино.
            </p>
            <img src="{{ asset('images/movie.jpg') }}" alt="">
        </div>
        <div class="registration__info">
            <h1>Вы ещё не зарегистрированы? Сделайте это прямо сейчас!</h1>
            <a href="{{ route('register') }}">
                <button>Зарегистривоваться</button>
            </a>

        </div>
    </div>
@endsection
