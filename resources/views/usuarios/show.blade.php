@extends('layouts.app')

@section('title', 'Visualizar Usuário - Gestão de Patrimônio')

@section('breadcrumb', 'Visualizar Usuário')

@section('content')
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">{{ $usuario->name }}</h1>
        <p class="text-gray-600 dark:text-gray-400">Informações do usuário</p>
    </div>

    <!-- Info Card -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Detalhes do Usuário</h2>
        </div>

        <!-- Content -->
        <div class="p-6 space-y-6">
            <!-- Nome -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nome</label>
                <p class="text-gray-900 dark:text-white text-base">{{ $usuario->name }}</p>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                <p class="text-gray-900 dark:text-white text-base">{{ $usuario->email }}</p>
            </div>

            <!-- Email Verificado -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Status Email</label>
                <div>
                    @if($usuario->email_verified_at)
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-300">
                            Verificado em {{ $usuario->email_verified_at->format('d/m/Y H:i') }}
                        </span>
                    @else
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 dark:bg-yellow-900/20 text-yellow-800 dark:text-yellow-300">
                            Não verificado
                        </span>
                    @endif
                </div>
            </div>

            <!-- Timestamps -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Criado em</label>
                    <p class="text-gray-900 dark:text-white text-base">{{ $usuario->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Atualizado em</label>
                    <p class="text-gray-900 dark:text-white text-base">{{ $usuario->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="pt-6 border-t border-gray-200 dark:border-gray-700 flex items-center justify-end gap-3">
                <a href="{{ route('usuarios.index') }}" class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 font-medium">
                    Voltar
                </a>
                <a href="{{ route('usuarios.edit', $usuario) }}" class="px-6 py-2 bg-amber-900 dark:bg-amber-700 text-white rounded-lg hover:bg-amber-800 dark:hover:bg-amber-600 transition-colors duration-200 font-medium">
                    Editar
                </a>
                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja deletar este usuário?')">
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
