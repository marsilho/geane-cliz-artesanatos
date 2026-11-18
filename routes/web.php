<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas do Site - Ateliê Geane Cliz
|--------------------------------------------------------------------------
*/

// Página Principal (Home)
Route::get('/', function () {
    return view('site.home.home');
})->name('site.home');

// Página de Produtos
Route::get('/produtos', function () {
    return view('site.home.produtos');
})->name('site.produtos');

// Página Sobre Nós
Route::get('/sobre', function () {
    return view('site.sobre.sobre');
})->name('site.sobre');

// Página de Contato
Route::get('/contato', function () {
    return view('site.home.conexao');
})->name('site.contato');