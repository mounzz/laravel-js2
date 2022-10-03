<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
    @include('partials.header')
</header>

<main class="h-[48rem]">
    @yield('content')
</main>

<footer>
    @include('partials.footer')
</footer>

<script src={{url('perso.js')}}></script>
</body>
</html>
