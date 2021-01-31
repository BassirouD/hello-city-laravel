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
