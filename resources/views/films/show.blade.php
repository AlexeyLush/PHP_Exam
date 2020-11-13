@extends('layouts.main')


@section('content')
    <div class="film__show">
        <div>
            @if($film->image_path == null)
                <img src="{{asset('images/no_image.png') }}" alt="">
            @else
                <img src="{{ Storage::url($film->image_path) }}" alt="">
            @endif

            @auth
                <button id="favorite-button" data-id="{{ $film->id }}">
                    {{ auth()->user()->isFavorite($film) ? 'В избранном' : 'Добавить в избранное' }}
                </button>
            @endauth

        </div>
        <div class="info">
            <table border="1">
                <tr>
                    <td class="table__td">
                        <strong>Название :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->title }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="table__td">
                        <strong>Год :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->year }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="table__td">
                        <strong>Страна :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->country }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="table__td">
                        <strong>Компания :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->company }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="table__td">
                        <strong>Режиссёр :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->genre }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="table__td">
                        <strong>Продюсер :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->producer }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="table__td">
                        <strong>Сценарист :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->screenwriter }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="table__td">
                        <strong>Бюджет :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->budget }} млн $</p>
                    </td>
                </tr>

                <tr>
                    <td class="table__td">
                        <strong>Сборы :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->fees }} млн $</p>
                    </td>
                </tr>

                <tr>
                    <td class="table__td">
                        <strong>Рейтинг :</strong>
                    </td>
                    <td class="table__td__end">
                        <p>{{ $film->rating }} / 10</p>
                    </td>
                </tr>

            </table>

        </div>
    </div>
    <strong>Описание :</strong>
    <p>{{ $film->description }}</p>
@endsection
