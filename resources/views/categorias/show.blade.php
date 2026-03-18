@extends('layouts.app')

@section('title', 'Visualizar Categoria - Gestão de Patrimônio')

@section('breadcrumb', 'Visualizar Categoria')

@section('content')
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">{{ $categoria->nome }}</h1>
        <p class="text-gray-600 dark:text-gray-400">Informações da categoria</p>
    </div>

    <!-- Info Card -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Detalhes da Categoria</h2>
        </div>

        <!-- Content -->
        <div class="p-6 space-y-6">
            <!-- Nome -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nome</label>
                <p class="text-gray-900 dark:text-white text-base">{{ $categoria->nome }}</p>
            </div>

            <!-- Descrição -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Descrição</label>
                <p class="text-gray-900 dark:text-white text-base whitespace-pre-wrap">{{ $categoria->descricao ?? 'Sem descrição' }}</p>
            </div>

            <!-- Timestamps -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Criado em</label>
                    <p class="text-gray-900 dark:text-white text-base">{{ $categoria->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Atualizado em</label>
                    <p class="text-gray-900 dark:text-white text-base">{{ $categoria->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="pt-6 border-t border-gray-200 dark:border-gray-700 flex items-center justify-end gap-3">
                <a href="{{ route('categorias.index') }}" class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 font-medium">
                    Voltar
                </a>
                <a href="{{ route('categorias.edit', $categoria) }}" class="px-6 py-2 bg-amber-900 dark:bg-amber-700 text-white rounded-lg hover:bg-amber-800 dark:hover:bg-amber-600 transition-colors duration-200 font-medium">
                    Editar
                </a>
                <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja deletar esta categoria?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-6 py-2 bg-red-900 dark:bg-red-700 text-white rounded-lg hover:bg-red-800 dark:hover:bg-red-600 transition-colors duration-200 font-medium">
                        Deletar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
