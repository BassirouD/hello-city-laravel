@extends('base')

@section('title', config('app.name'))
@section('content')
        <h1>Hello from Senegal</h1>
        <p>It's currently {{ date('h:i A') }}.</p>
@endsection
