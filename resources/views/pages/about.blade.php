@extends('base')


@section('title', 'About Us | ' . env('APP_NAME'))
 <!-- endsection equivant a stop -->
@section('content')
    <p>Build with &hearts; by BASSIROU DIALLO. </p>
    <p><a href="{{ route('home') }}">Revenir a la page d'acceuil</a></p>
@endsection
