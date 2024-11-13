<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/stronaglowna', function () {
    return view('home');
});


Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/aktualnosci', function () {
    return view('aktualnosci');
});