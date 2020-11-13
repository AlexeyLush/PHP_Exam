@extends('layouts.main')

@section('content')
    <div class="films">
        <h1>Фильмы</h1>
        @if($films->isEmpty())
            <p>К сожалению, этот раздел пуст...</p>
        @else

            <div class="list__films">
                @foreach($films as $film)
                    <a href="{{ route('films.show', $film) }}">
                        <div class="card__film"
                             style="background: url({{ Storage::url($film->image_path) ? Storage::url($film->image_path) : asset('images/movie.jpg') }}); background-repeat: no-repeat; background-size: 100% 100%">
                            <div class="header">
                                <h2>{{ $film->title }}</h2>
                                <h3>Оценка: {{ $film->rating }}/10</h3>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        @endif
    </div>
@endsection
