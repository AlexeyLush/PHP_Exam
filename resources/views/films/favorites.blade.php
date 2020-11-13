@extends('layouts.main')
{{--Вывод всех записей постов--}}

@section('content')
    <div class="films">
        <h1>Избранное</h1>

        @include('components.list-films')
    </div>

@endsection
