@extends('layouts.main')


@section('content')
    <div class="film__show">
        <div>
            <img src="{{ Storage::url($film->image_path) ? Storage::url($film->image_path) : asset('images/movie.jpg') }}" alt="">
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
            <strong>Описание</strong>
            <p>
                {{ $film->description }}
            </p>
        </div>
    </div>
@endsection
