<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');  // Menamai rute ini

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');  // Menamai rute ini
