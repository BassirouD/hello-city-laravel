<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('pages.welcome');
    // On peut utiliser le point(.) ou la virgule(,) comme separateur
});

Route::get('/about-us', function (){
    return view('pages/about');
});

