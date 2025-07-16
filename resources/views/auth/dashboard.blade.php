@extends('layouts.app')

@section('content')
    <h2>Личный кабинет</h2>
    <p>Имя: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Телефон: {{ $user->phone ?? '-' }}</p>
    <p>Статус: {{ $user->status }}</p>
@endsection
