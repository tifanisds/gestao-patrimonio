<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LocalizacaoController;
use App\Http\Controllers\PatrimonioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ManutencaoController;

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

// Rotas de Localizações
Route::resource('localizacoes', LocalizacaoController::class, [
    'parameters' => [
        'localizacoes' => 'localizacao'
    ]
]);

// Rotas de Patrimônios
Route::resource('patrimonios', PatrimonioController::class, [
    'parameters' => [
        'patrimonios' => 'patrimonio'
    ]
]);

// Rotas de Usuários
Route::resource('usuarios', UsuarioController::class, [
    'parameters' => [
        'usuarios' => 'usuario'
    ]
]);

// Rotas de Movimentações
Route::resource('movimentacoes', MovimentacaoController::class, [
    'parameters' => [
        'movimentacoes' => 'movimentacao'
    ]
]);

// Rotas de Manutenções
Route::resource('manutencoes', ManutencaoController::class, [
    'parameters' => [
        'manutencoes' => 'manutencao'
    ]
]);
