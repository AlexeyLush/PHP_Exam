@extends('layouts.app')
@section('navbar')
    <ul>
        <li>
            <a href="{{ route('films.index') }}">На сайт</a>
        </li>
        <li>
            <a href="{{ route('films.create') }}">Добавить фильм</a>
        </li>
    </ul>
@endsection
