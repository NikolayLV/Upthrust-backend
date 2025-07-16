@extends('layouts.app')

@section('content')
    <h2>Вход</h2>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
        <input type="password" name="password" placeholder="Пароль"><br>
        <button type="submit">Войти</button>
    </form>
@endsection
