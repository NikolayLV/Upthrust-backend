<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upthrust</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/main.css', 'resources/js/app.js'])
</head>
<body>
<nav>
    @auth
        Привет, {{ auth()->user()->name }} |
        <form method="POST" action="/logout" style="display:inline">
            @csrf
            <button type="submit">Выйти</button>
        </form>
    @endauth
</nav>
<hr>
@yield('content')
</body>
</html>
