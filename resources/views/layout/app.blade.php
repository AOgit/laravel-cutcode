<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel с нуля @yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Laravel з нуля</h1>

    @yield('content')


<script src="/js/app.js"></script>

</body>
</html>
