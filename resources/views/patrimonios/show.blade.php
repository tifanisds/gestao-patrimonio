@extends('layouts.app')

@section('title', 'Visualizar Patrimônio - Gestão de Patrimônio')

@section('breadcrumb', 'Visualizar Patrimônio')

@section('content')
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">{{ $patrimonio->codigo_identificacao }}</h1>
        <p class="text-gray-600 dark:text-gray-400">{{ $patrimonio->descricao }}</p>
    </div>

    <!-- Info Cards Container -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Card 1: Identificação -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wide">Identificação</h3>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase">Código</p>
                    <p class="text-gray-900 dark:text-white font-medium">{{ $patrimonio->codigo_identificacao }}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase">Categoria</p>
                    <p class="text-gray-900 dark:text-white font-medium">{{ $patrimonio->categoria->nome ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase">Localização</p>
                    <p class="text-gray-900 dark:text-white font-medium">{{ $patrimonio->localizacao->nome ?? '-' }}</p>
                </div>
            </div>
        </div>

        <!-- Card 2: Estado e Valor -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wide">Estado e Valor</h3>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase">Estado</p>
                    <div class="mt-2">
                        @switch($patrimonio->estado)
                            @case('novo')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 dark:bg-green-900/20 text-green-800 dark:text-green-300">Novo</span>
                                @break
                            @case('bom')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 dark:bg-blue-900/20 text-blue-800 dark:text-blue-300">Bom</span>
                                @break
                            @case('regular')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 dark:bg-yellow-900/20 text-yellow-800 dark:text-yellow-300">Regular</span>
                                @break
                            @case('ruim')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-orange-100 dark:bg-orange-900/20 text-orange-800 dark:text-orange-300">Ruim</span>
                                @break
                            @case('inservivel')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 dark:bg-red-900/20 text-red-800 dark:text-red-300">Inservível</span>
                                @break
                        @endswitch
                    </div>
                </div>
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase">Valor</p>
                    <p class="text-gray-900 dark:text-white font-medium">
                        @if($patrimonio->valor)
                            R$ {{ number_format($patrimonio->valor, 2, ',', '.') }}
                        @else
                            -
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 3: Responsabilidade -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wide">Responsabilidade</h3>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase">Responsável</p>
                    <p class="text-gray-900 dark:text-white font-medium">{{ $patrimonio->usuarioResponsavel->name ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 dark:text-gray-400 uppercase">Fornecedor</p>
                    <p class="text-gray-900 dark:text-white font-medium">{{ $patrimonio->fornecedor->nome ?? '-' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Details Card -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden mb-6">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Detalhes Completos</h2>
        </div>

        <!-- Content -->
        <div class="p-6 space-y-6">
            <!-- Descrição -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Descrição</label>
                <p class="text-gray-900 dark:text-white whitespace-pre-wrap">{{ $patrimonio->descricao }}</p>
            </div>

            <!-- Dados Financeiros -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Data de Aquisição</label>
                    <p class="text-gray-900 dark:text-white">
                        @if($patrimonio->data_aquisicao)
                            {{ $patrimonio->data_aquisicao->format('d/m/Y') }}
                        @else
                            -
                        @endif
                    </p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Localização Completa</label>
                    <p class="text-gray-900 dark:text-white">
                        @if($patrimonio->localizacao)
                            {{ $patrimonio->localizacao->nome }} - {{ $patrimonio->localizacao->setor }}
                            @if($patrimonio->localizacao->bloco)
                                (Bloco {{ $patrimonio->localizacao->bloco }}, Andar {{ $patrimonio->localizacao->andar }})
                            @endif
                        @else
                            -
                        @endif
                    </p>
                </div>
            </div>

            <!-- Observações -->
            @if($patrimonio->observacoes)
                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Observações</label>
                    <p class="text-gray-900 dark:text-white whitespace-pre-wrap">{{ $patrimonio->observacoes }}</p>
                </div>
            @endif

            <!-- Timestamps -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Criado em</label>
                    <p class="text-gray-900 dark:text-white">{{ $patrimonio->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Atualizado em</label>
                    <p class="text-gray-900 dark:text-white">{{ $patrimonio->updated_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="flex items-center justify-end gap-3">
        <a href="{{ route('patrimonios.index') }}" class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 font-medium">
            Voltar
        </a>
        <a href="{{ route('patrimonios.edit', $patrimonio) }}" class="px-6 py-2 bg-amber-900 dark:bg-amber-700 text-white rounded-lg hover:bg-amber-800 dark:hover:bg-amber-600 transition-colors duration-200 font-medium">
            Editar
        </a>
        <form action="{{ route('patrimonios.destroy', $patrimonio) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja deletar este patrimônio?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-6 py-2 bg-red-900 dark:bg-red-700 text-white rounded-lg hover:bg-red-800 dark:hover:bg-red-600 transition-colors duration-200 font-medium">
                Deletar
            </button>
        </form>
    </div>
@endsection
