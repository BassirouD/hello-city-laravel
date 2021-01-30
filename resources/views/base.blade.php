<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', env('APP_NAME'))!</title>

</head>
<body class="antialiased">

    @yield('content')
    <!-- On peut utiliser les variables de configuration
        pour afficher le nom de l'app en remplaçant
        env par config('app.name')
    -->

<footer>
    <!-- Par defaut le timeZone est utc. On peut le modifier
    dans le fichier app.php qui se trouve dans le rep config-->
    <p>&copy; Copyright {{ date('Y') }} &middot; <a href="{{route('about')}}">About Us</a></p>
</footer>
</body>
</html>
