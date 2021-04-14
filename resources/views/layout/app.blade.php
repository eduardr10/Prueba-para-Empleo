<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        td,th{
            text-align: left;
            padding: 5px 20px;
        }
    </style>
</head>
<body>
    <section>
        <h1>@yield('header')</h1>
        <h3>@yield('subtitle')</h3>
    </section>

    <section>
        @yield('content')
    </section>

    <footer>
        <p><small><i>Platilla de prueba</i></small></p>
    </footer>
</body>
</html>
