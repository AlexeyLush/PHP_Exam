@extends('layouts.main')

@section('content')
    <div class="films">
        <h1>Фильмы</h1>
        @include('components.list-films')
    </div>
@endsection
