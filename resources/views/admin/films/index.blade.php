@extends('layouts.admin')

<?php
$counter = 0
?>

@section('content')
    <div class="films">
        <h1>Фильмы</h1>
        @if($films->isEmpty())
            <p>К сожалению, этот раздел пуст...</p>
        @else
            <table border="1">
                <tr>
                    <th>№</th>
                    <th>Название</th>
                    <th>Год</th>
                    <th>Страна</th>
                    <th>Компания</th>
                    <th>Жанр</th>
                    <th>Режиссёр</th>
                    <th>Продюсер</th>
                    <th>Сценарист</th>
                    <th>Бюджет (млн в $)</th>
                    <th>Сборы (млн в $)</th>
                    <th>Рейтинг (от 1 - 10)</th>
                    <th>Функции</th>
                </tr>
                @foreach($films as $film)
                    <tr>
                        <th>{{ $counter += 1 }}</th>
                        <th>{{ $film->title }}</th>
                        <th>{{ $film->year }}</th>
                        <th>{{ $film->country }}</th>
                        <th>{{ $film->company }}</th>
                        <th>{{ $film->genre }}</th>
                        <th>{{ $film->director }}</th>
                        <th>{{ $film->producer }}</th>
                        <th>{{ $film->screenwriter}}</th>
                        <th>{{ $film->budget }}</th>
                        <th>{{ $film->fees }}</th>
                        <th>{{ $film->rating }}</th>
                        <th>

                            <a href="{{ route('admin.films.edit', $film) }}">Редактировать</a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                @csrf @method('delete')
                                Удалить</a>
                            <form id="delete-form" action="{{ route('admin.films.destroy', $film) }}" method="post">
                                @csrf @method('delete')
                            </form>
                        </th>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
