<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', env('APP_NAME'))!</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="py-6  flex flex-col justify-between items-center min-h-screen">
<!-- On peut utiliser les variables de configuration
  pour afficher le nom de l'app en remplaçant
  env par config('app.name')
-->
    <main role="main" class="flex flex-col justify-center items-center">
        @yield('content')
    </main>


<footer>
    <!-- Par defaut le timeZone est utc. On peut le modifier
    dans le fichier app.php qui se trouve dans le rep config-->
    <p class="text-gray-400">
        &copy; Copyright {{ date('Y') }} &middot;
        @if(! Route::is('about'))
            <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-700 underline">About Us</a>
        @endif
    </p>
</footer>
</body>
</html>
