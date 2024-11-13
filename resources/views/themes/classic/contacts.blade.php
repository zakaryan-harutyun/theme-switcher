@extends('themes.classic.layout')

@section('content')
    <div class="container">
        <h1>Контакты - Classic</h1>

        <p>{{ $contactText }}</p>

        <nav>
            <a href="{{ route('home') }}">Главная</a> |
            <a href="{{ route('contacts') }}">Контакты</a>
        </nav>
    </div>
@endsection
