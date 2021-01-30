<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us | Hello City</title>

</head>
<body class="antialiased">
    <p>Build with &hearts; by BASSIROU DIALLO. </p>
    <p><a href="/">Revenir a la page d'acceuil</a></p>
    <footer>
        <!-- Par defaut le timeZone est utc. On peut le modifier
        dans le fichier app.php qui se trouve dans le rep config-->
        <p>&copy; Copyright {{ date('Y') }} &middot; </p>
    </footer>
</body>
</html>
