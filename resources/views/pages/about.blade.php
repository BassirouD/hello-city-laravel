@extends('layouts.base', ['pageTitle' => 'About Us'])


@section('content')
    <img src="{{ asset('images/tdsi.png') }}" alt="TDSI logo" class="my-12 rounded shadow-md">
    <h2 class="mb-5 text-gray-700">
        Build with <span class="text-pink-500">&hearts;</span> by BASSIROU DIALLO.
    </h2>
    <p>
        <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-700 underline">
            Revenir a la page d'acceuil</a>
    </p>
@endsection
