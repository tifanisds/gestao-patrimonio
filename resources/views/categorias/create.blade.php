@extends('layouts.app')

@section('title', 'Nova Categoria - Gestão de Patrimônio')

@section('breadcrumb', 'Nova Categoria')

@section('content')
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Nova Categoria</h1>
        <p class="text-gray-600 dark:text-gray-400">Cadastre uma nova categoria de patrimônio</p>
    </div>

    <!-- Validation Errors -->
    @if($errors->any())
        <div class="mb-6 p-4 bg-red-100 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
            <h3 class="text-red-800 dark:text-red-200 font-semibold mb-2">Erro ao validar formulário:</h3>
            <ul class="text-red-700 dark:text-red-300 space-y-1 text-sm">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Card -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Dados da Categoria</h2>
        </div>

        <!-- Form Content -->
        <form action="{{ route('categorias.store') }}" method="POST" class="p-6 space-y-6">
            @csrf

            <!-- Nome -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Nome da Categoria <span class="text-red-600">*</span>
                </label>
                <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Ex: Informática" required class="w-full px-4 py-2 rounded-lg border {{ $errors->has('nome') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('nome') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                @error('nome')
                    <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Descrição -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Descrição</label>
                <textarea name="descricao" placeholder="Descreva a categoria..." rows="4" class="w-full px-4 py-2 rounded-lg border {{ $errors->has('descricao') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('descricao') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }} resize-none">{{ old('descricao') }}</textarea>
                @error('descricao')
                    <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Form Actions -->
            <div class="pt-6 border-t border-gray-200 dark:border-gray-700 flex items-center justify-end gap-3">
                <a href="{{ route('categorias.index') }}" class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 font-medium">
                    Cancelar
                </a>
                <button type="submit" class="px-6 py-2 bg-blue-900 dark:bg-blue-700 text-white rounded-lg hover:bg-blue-800 dark:hover:bg-blue-600 transition-colors duration-200 font-medium">
                    Cadastrar Categoria
                </button>
            </div>
        </form>
    </div>
@endsection
