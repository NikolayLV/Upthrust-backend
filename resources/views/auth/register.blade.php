@extends('layouts.app')

@section('content')
    <h2>Регистрация</h2>
    <form method="POST" action="/register">
        @csrf
        <input name="name" placeholder="Имя" value="{{ old('name') }}"><br>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <input type="password" name="password_confirmation" placeholder="Подтвердите пароль"><br>
        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection
