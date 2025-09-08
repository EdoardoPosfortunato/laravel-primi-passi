<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {

    $informazioni =  "informazioni di servizio per la pagina";
    return view('home', compact("informazioni"));
})->name('home');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/ordine', function () {
    return view('ordine');
})->name('ordine');
