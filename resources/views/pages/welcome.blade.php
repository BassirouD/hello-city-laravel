@extends('base')

@section('title', config('app.name'))
@section('content')
    <img src="{{ asset('images/drp.png') }}" alt="Senegal Flag">
        <h1>Hello from Senegal</h1>
        <p>It's currently {{ date('h:i A') }}.</p>
@endsection
