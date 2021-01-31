<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{page_title($pageTitle ?? null)}}!</title>

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

    @include('layouts/partials/_footer')
</body>
</html>
