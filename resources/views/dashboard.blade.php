@extends('layouts.app')

@section('title', 'Dashboard - Gestão de Patrimônio')

@section('breadcrumb', 'Dashboard')

@section('content')
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Bem-vindo de volta!</h1>
        <p class="text-gray-600 dark:text-gray-400">Aqui está um resumo da sua gestão de patrimônio</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total de Patrimônios -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm font-medium mb-1">Total de Patrimônios</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">1.234</p>
                </div>
                <div class="rounded-lg bg-blue-100 dark:bg-blue-900 p-3">
                    <svg class="w-6 h-6 text-blue-900 dark:text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m0 0l8 4m-8-4v10l8 4m0-10l8 4m-8-4v10M9 9l3 2 3-2"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-4">+12 desde o último mês</p>
        </div>

        <!-- Valor Total -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm font-medium mb-1">Valor Total</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">R$ 5.2M</p>
                </div>
                <div class="rounded-lg bg-green-100 dark:bg-green-900 p-3">
                    <svg class="w-6 h-6 text-green-900 dark:text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-4">+5% em relação ao período</p>
        </div>

        <!-- Manutenções Pendentes -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm font-medium mb-1">Manutenções Pendentes</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">23</p>
                </div>
                <div class="rounded-lg bg-amber-100 dark:bg-amber-900 p-3">
                    <svg class="w-6 h-6 text-amber-900 dark:text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-4">5 vencidas</p>
        </div>

        <!-- Movimentações este mês -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 dark:text-gray-400 text-sm font-medium mb-1">Movimentações (Mês)</p>
                    <p class="text-3xl font-bold text-gray-900 dark:text-white">47</p>
                </div>
                <div class="rounded-lg bg-purple-100 dark:bg-purple-900 p-3">
                    <svg class="w-6 h-6 text-purple-900 dark:text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-500 dark:text-gray-400 mt-4">+8 em relação ao mês passado</p>
        </div>
    </div>

    <!-- Content Sections -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Patrimônios Recentes -->
        <div class="lg:col-span-2">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
                <!-- Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-200 dark:border-gray-700">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Patrimônios Recentes</h2>
                    <a href="#" class="text-blue-900 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 text-sm font-medium">Ver todos</a>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Código</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Descrição</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Categoria</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Valor</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <!-- Row 1 -->
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">PAT-001</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Monitor Dell 27"</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Eletrônicos</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">R$ 1.500,00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">Ativo</span>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">PAT-002</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Teclado Mecânico RGB</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Periféricos</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">R$ 450,00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">Ativo</span>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">PAT-003</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Servidor HPE Proliant</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Infraestrutura</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">R$ 25.000,00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200">Manutenção</span>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">PAT-004</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Webcam Logitech 4K</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Periféricos</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">R$ 320,00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">Ativo</span>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-150">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">PAT-005</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Notebook Lenovo i7</td>
                                <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">Computadores</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">R$ 3.800,00</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200">Inativo</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Sidebar Info -->
        <div class="space-y-6">
            <!-- Alertas -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Alertas</h3>
                
                <div class="space-y-3">
                    <!-- Alert 1 -->
                    <div class="flex gap-3 p-3 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-red-800 dark:text-red-300">Manutenção Vencida</p>
                            <p class="text-xs text-red-700 dark:text-red-400 mt-1">3 itens com manutenção vencida</p>
                        </div>
                    </div>

                    <!-- Alert 2 -->
                    <div class="flex gap-3 p-3 bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-lg">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-amber-600 dark:text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-amber-800 dark:text-amber-300">Manutenção Próxima</p>
                            <p class="text-xs text-amber-700 dark:text-amber-400 mt-1">7 itens vencem em breve</p>
                        </div>
                    </div>

                    <!-- Alert 3 -->
                    <div class="flex gap-3 p-3 bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zm-11-1a1 1 0 11-2 0 1 1 0 012 0zM8 9a1 1 0 000 2h6a1 1 0 100-2H8zm5-2a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-blue-800 dark:text-blue-300">Informação</p>
                            <p class="text-xs text-blue-700 dark:text-blue-400 mt-1">Backup realizado com sucesso</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Atividades Recentes -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Atividades Recentes</h3>
                
                <div class="space-y-4">
                    <!-- Activity 1 -->
                    <div class="flex gap-3">
                        <div class="flex-shrink-0 w-2 h-2 rounded-full bg-blue-600 dark:bg-blue-400 mt-2"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-gray-900 dark:text-white"><span class="font-medium">João</span> adicionou novo patrimônio</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Há 2 horas</p>
                        </div>
                    </div>

                    <!-- Activity 2 -->
                    <div class="flex gap-3">
                        <div class="flex-shrink-0 w-2 h-2 rounded-full bg-green-600 dark:bg-green-400 mt-2"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-gray-900 dark:text-white"><span class="font-medium">Maria</span> movimentou patrimônio</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Há 4 horas</p>
                        </div>
                    </div>

                    <!-- Activity 3 -->
                    <div class="flex gap-3">
                        <div class="flex-shrink-0 w-2 h-2 rounded-full bg-amber-600 dark:bg-amber-400 mt-2"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-gray-900 dark:text-white"><span class="font-medium">Pedro</span> registrou manutenção</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Há 6 horas</p>
                        </div>
                    </div>

                    <!-- Activity 4 -->
                    <div class="flex gap-3">
                        <div class="flex-shrink-0 w-2 h-2 rounded-full bg-purple-600 dark:bg-purple-400 mt-2"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-gray-900 dark:text-white"><span class="font-medium">Ana</span> atualizou localização</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Há 1 dia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
