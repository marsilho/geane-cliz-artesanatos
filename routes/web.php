<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/produtos', function () {
    return view('site.produtos');
})->name('site.produtos');

Route::get('/sobre', function () {
    return view('site.sobre');
})->name('site.sobre');