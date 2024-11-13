@extends('themes.classic.layout')

@section('content')
    <div class="container">
        <h1>Главная страница - Classic</h1>

        <form action="{{ route('theme.set') }}" method="POST">
            @csrf
            <label for="theme">Выберите тему:</label>
            <select name="theme" id="theme">
                <option value="classic">Classic</option>
                <option value="cuba">Cuba</option>
            </select>
            <button type="submit">Сохранить</button>
        </form>

        <nav>
            <a href="{{ route('home') }}">Главная</a> |
            <a href="{{ route('contacts') }}">Контакты</a>
        </nav>
    </div>
@endsection
