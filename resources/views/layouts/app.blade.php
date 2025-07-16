<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Upthrust</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
