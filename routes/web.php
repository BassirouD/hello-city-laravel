<?php

use Illuminate\Support\Facades\Route;

/*
Route::name('home')->get('/', function (){
    return view('pages.welcome');
    // On peut utiliser le point(.) ou la virgule(,) comme separateur
});*/
//Les deux facons de nommer nos routes ->name('home')

//Nouveauté php 7 avec Route
//Route::get('/', fn() => view('page/home'));

//  -----------------------
Route::view('/', 'pages/welcome')->name('home');

Route::get('/about-us', function (){
    return view('pages/about');
})->name('about');



