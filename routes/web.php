<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Rotas de Fornecedores
Route::resource('fornecedores', FornecedorController::class, [
    'parameters' => [
        'fornecedores' => 'fornecedor'
    ]
]);

// Rotas de Categorias
Route::resource('categorias', CategoriaController::class, [
    'parameters' => [
        'categorias' => 'categoria'
    ]
]);
