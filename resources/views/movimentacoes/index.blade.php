@extends('layouts.app')

@section('title', 'Movimentações - Gestão de Patrimônio')

@section('breadcrumb', 'Movimentações')

@section('content')
    <!-- Page Header -->
    <div class="mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Movimentações de Patrimônios</h1>
            <p class="text-gray-600 dark:text-gray-400">Gerencie todas as movimentações e transferências de patrimônios</p>
        </div>
        <a href="{{ route('movimentacoes.create') }}" class="px-6 py-2 bg-blue-900 dark:bg-blue-700 text-white rounded-lg hover:bg-blue-800 dark:hover:bg-blue-600 transition-colors duration-200 font-medium">
            + Nova Movimentação
        </a>
    </div>

    <!-- Success Message -->
    @if ($message = Session::get('success'))
        <div class="mb-6 px-4 py-3 rounded-lg bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 text-green-800 dark:text-green-300">
            {{ $message }}
        </div>
    @endif

    <!-- Table -->
    <div class="overflow-hidden rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 shadow-sm">
        @if($movimentacoes->count())
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700">
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wide">Patrimônio</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wide">Origem</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wide">Destino</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wide">Data</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wide">Responsável</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 dark:text-gray-300 uppercase tracking-wide">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movimentacoes as $movimentacao)
                            <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-150">
                                <td class="px-6 py-4">
                                    <div>
                                        <p class="font-medium text-gray-900 dark:text-white">{{ $movimentacao->patrimonio->codigo_identificacao ?? '-' }}</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ \Str::limit($movimentacao->patrimonio->descricao ?? '', 50) }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-gray-900 dark:text-white">{{ $movimentacao->localizacaoOrigem->nome ?? '-' }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-gray-900 dark:text-white">{{ $movimentacao->localizacaoDestino->nome ?? '-' }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-gray-900 dark:text-white">{{ $movimentacao->data_movimentacao->format('d/m/Y H:i') }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-gray-900 dark:text-white">{{ $movimentacao->usuarioResponsavel->name ?? '-' }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('movimentacoes.show', $movimentacao) }}" class="px-3 py-1 text-sm bg-blue-100 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded hover:bg-blue-200 dark:hover:bg-blue-900/40 transition-colors duration-200">
                                            Ver
                                        </a>
                                        <a href="{{ route('movimentacoes.edit', $movimentacao) }}" class="px-3 py-1 text-sm bg-amber-100 dark:bg-amber-900/20 text-amber-700 dark:text-amber-300 rounded hover:bg-amber-200 dark:hover:bg-amber-900/40 transition-colors duration-200">
                                            Editar
                                        </a>
                                        <form action="{{ route('movimentacoes.destroy', $movimentacao) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja deletar esta movimentação?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1 text-sm bg-red-100 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded hover:bg-red-200 dark:hover:bg-red-900/40 transition-colors duration-200">
                                                Deletar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="px-6 py-12 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Nenhuma movimentação cadastrada</h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4">Comece criando uma nova movimentação de patrimônio</p>
                <a href="{{ route('movimentacoes.create') }}" class="inline-block px-6 py-2 bg-blue-900 dark:bg-blue-700 text-white rounded-lg hover:bg-blue-800 dark:hover:bg-blue-600 transition-colors duration-200 font-medium">
                    Criar Movimentação
                </a>
            </div>
        @endif
    </div>
@endsection
