@extends('layouts.app')

@section('title', 'Detalhes Fornecedor - Gestão de Patrimônio')

@section('breadcrumb', 'Detalhes Fornecedor')

@section('content')
    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg flex items-center gap-3">
            <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <p class="text-green-700 dark:text-green-300 font-medium">{{ session('success') }}</p>
        </div>
    @endif

    <!-- Page Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">{{ $fornecedor->nome ?? 'Fornecedor' }}</h1>
            <p class="text-gray-600 dark:text-gray-400">Informações detalhadas do fornecedor</p>
        </div>
        <div class="mt-4 md:mt-0 flex gap-2">
            <a href="{{ route('fornecedores.edit', $fornecedor->id ?? 1) }}" class="inline-flex items-center gap-2 px-4 py-2 bg-amber-900 dark:bg-amber-700 text-white rounded-lg hover:bg-amber-800 dark:hover:bg-amber-600 transition-colors duration-200 font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                Editar
            </a>
            <a href="{{ route('fornecedores.index') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-gray-600 dark:bg-gray-700 text-white rounded-lg hover:bg-gray-700 dark:hover:bg-gray-600 transition-colors duration-200 font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Voltar
            </a>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <!-- Informações Básicas -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Informações do Fornecedor</h2>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Nome</p>
                        <p class="text-lg text-gray-900 dark:text-white mt-1">{{ $fornecedor->nome ?? '-' }}</p>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">CNPJ</p>
                        <p class="text-lg text-gray-900 dark:text-white mt-1">{{ $fornecedor->cnpj ?? '-' }}</p>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Email</p>
                        <a href="mailto:{{ $fornecedor->email ?? '#' }}" class="text-lg text-blue-900 dark:text-blue-400 hover:underline mt-1">{{ $fornecedor->email ?? '-' }}</a>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Telefone</p>
                        <a href="tel:{{ $fornecedor->telefone ?? '#' }}" class="text-lg text-blue-900 dark:text-blue-400 hover:underline mt-1">{{ $fornecedor->telefone ?? '-' }}</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Quick Stats -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Informações Gerais</h3>
                
                <div class="space-y-4">
                    <div class="pb-4 border-b border-gray-200 dark:border-gray-700">
                        <p class="text-sm text-gray-600 dark:text-gray-400">ID</p>
                        <p class="text-lg font-mono text-gray-900 dark:text-white mt-1">{{ $fornecedor->id ?? '-' }}</p>
                    </div>

                    <div class="pb-4 border-b border-gray-200 dark:border-gray-700">
                        <p class="text-sm text-gray-600 dark:text-gray-400">Cadastrado em</p>
                        <p class="text-gray-900 dark:text-white mt-1">
                            @if($fornecedor->created_at ?? false)
                                {{ $fornecedor->created_at->format('d/m/Y H:i') }}
                            @else
                                -
                            @endif
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Última atualização</p>
                        <p class="text-gray-900 dark:text-white mt-1">
                            @if($fornecedor->updated_at ?? false)
                                {{ $fornecedor->updated_at->format('d/m/Y H:i') }}
                            @else
                                -
                            @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Actions Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Ações</h3>
                
                <div class="space-y-2">
                    <a href="{{ route('fornecedores.edit', $fornecedor->id ?? 1) }}" class="block w-full px-4 py-2 text-center bg-amber-900 dark:bg-amber-700 text-white rounded-lg hover:bg-amber-800 dark:hover:bg-amber-600 transition-colors duration-200 font-medium">
                        Editar Fornecedor
                    </a>
                    
                    <form action="{{ route('fornecedores.destroy', $fornecedor->id ?? 1) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar este fornecedor?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full px-4 py-2 bg-red-600 dark:bg-red-700 text-white rounded-lg hover:bg-red-700 dark:hover:bg-red-600 transition-colors duration-200 font-medium">
                            Deletar Fornecedor
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
