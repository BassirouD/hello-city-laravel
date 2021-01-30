<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City!</title>

    </head>
    <body class="antialiased">
        <h1>Hello from Senegal</h1>
        <p>It's currently {{ date('h:i A') }}.</p>
        <footer>
            <!-- Par defaut le timeZone est utc. On peut le modifier
            dans le fichier app.php qui se trouve dans le rep config-->
            <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About Us</a></p>
        </footer>
    </body>
</html>
