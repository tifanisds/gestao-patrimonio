@extends('layouts.app')

@section('title', 'Novo Patrimônio - Gestão de Patrimônio')

@section('breadcrumb', 'Novo Patrimônio')

@section('content')
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Novo Patrimônio</h1>
        <p class="text-gray-600 dark:text-gray-400">Cadastre um novo patrimônio na instituição</p>
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
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Informações do Patrimônio</h2>
        </div>

        <!-- Form Content -->
        <form action="{{ route('patrimonios.store') }}" method="POST" class="p-6 space-y-6">
            @csrf

            <!-- Section 1: Identificação -->
            <div>
                <h3 class="text-md font-semibold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700">Identificação</h3>
                
                <!-- Código de Identificação -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Código de Identificação <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="codigo_identificacao" value="{{ old('codigo_identificacao') }}" placeholder="Ex: PAT-2025-001" required class="w-full px-4 py-2 rounded-lg border {{ $errors->has('codigo_identificacao') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('codigo_identificacao') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                    @error('codigo_identificacao')
                        <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Descrição -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Descrição <span class="text-red-600">*</span>
                    </label>
                    <textarea name="descricao" placeholder="Descreva detalhadamente o patrimônio..." rows="4" required class="w-full px-4 py-2 rounded-lg border {{ $errors->has('descricao') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('descricao') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }} resize-none">{{ old('descricao') }}</textarea>
                    @error('descricao')
                        <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Section 2: Classificação e Localização -->
            <div>
                <h3 class="text-md font-semibold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700">Classificação e Localização</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Categoria -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Categoria <span class="text-red-600">*</span>
                        </label>
                        <select name="categoria_id" required class="w-full px-4 py-2 rounded-lg border {{ $errors->has('categoria_id') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 {{ $errors->has('categoria_id') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                            <option value="">Selecione uma categoria...</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                        @error('categoria_id')
                            <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Localização -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Localização <span class="text-red-600">*</span>
                        </label>
                        <select name="localizacao_id" required class="w-full px-4 py-2 rounded-lg border {{ $errors->has('localizacao_id') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 {{ $errors->has('localizacao_id') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                            <option value="">Selecione uma localização...</option>
                            @foreach($localizacoes as $localizacao)
                                <option value="{{ $localizacao->id }}" {{ old('localizacao_id') == $localizacao->id ? 'selected' : '' }}>{{ $localizacao->nome }} - {{ $localizacao->setor }}</option>
                            @endforeach
                        </select>
                        @error('localizacao_id')
                            <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 3: Responsavelidade e Fornecedor -->
            <div>
                <h3 class="text-md font-semibold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700">Responsabilidade e Fornecedor</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Usuário Responsável -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Usuário Responsável</label>
                        <select name="usuario_responsavel_id" class="w-full px-4 py-2 rounded-lg border {{ $errors->has('usuario_responsavel_id') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 {{ $errors->has('usuario_responsavel_id') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                            <option value="">Selecione um usuário...</option>
                            @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}" {{ old('usuario_responsavel_id') == $usuario->id ? 'selected' : '' }}>{{ $usuario->name }}</option>
                            @endforeach
                        </select>
                        @error('usuario_responsavel_id')
                            <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Fornecedor -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Fornecedor</label>
                        <select name="fornecedor_id" class="w-full px-4 py-2 rounded-lg border {{ $errors->has('fornecedor_id') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 {{ $errors->has('fornecedor_id') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                            <option value="">Selecione um fornecedor...</option>
                            @foreach($fornecedores as $fornecedor)
                                <option value="{{ $fornecedor->id }}" {{ old('fornecedor_id') == $fornecedor->id ? 'selected' : '' }}>{{ $fornecedor->nome }}</option>
                            @endforeach
                        </select>
                        @error('fornecedor_id')
                            <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 4: Dados Financeiros e de Estado -->
            <div>
                <h3 class="text-md font-semibold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700">Dados Financeiros e Estado</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Data de Aquisição -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Data de Aquisição</label>
                        <input type="date" name="data_aquisicao" value="{{ old('data_aquisicao') }}" class="w-full px-4 py-2 rounded-lg border {{ $errors->has('data_aquisicao') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 {{ $errors->has('data_aquisicao') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                        @error('data_aquisicao')
                            <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Valor -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Valor (R$)</label>
                        <input type="number" name="valor" value="{{ old('valor') }}" placeholder="0.00" step="0.01" min="0" class="w-full px-4 py-2 rounded-lg border {{ $errors->has('valor') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('valor') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                        @error('valor')
                            <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Estado -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Estado <span class="text-red-600">*</span>
                        </label>
                        <select name="estado" required class="w-full px-4 py-2 rounded-lg border {{ $errors->has('estado') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 {{ $errors->has('estado') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }}">
                            <option value="bom" {{ old('estado') == 'bom' ? 'selected' : '' }}>Bom</option>
                            <option value="novo" {{ old('estado') == 'novo' ? 'selected' : '' }}>Novo</option>
                            <option value="regular" {{ old('estado') == 'regular' ? 'selected' : '' }}>Regular</option>
                            <option value="ruim" {{ old('estado') == 'ruim' ? 'selected' : '' }}>Ruim</option>
                            <option value="inservivel" {{ old('estado') == 'inservivel' ? 'selected' : '' }}>Inservível</option>
                        </select>
                        @error('estado')
                            <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 5: Observações -->
            <div>
                <h3 class="text-md font-semibold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-200 dark:border-gray-700">Observações</h3>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Observações Adicionais</label>
                    <textarea name="observacoes" placeholder="Adicione observações sobre o patrimônio..." rows="4" class="w-full px-4 py-2 rounded-lg border {{ $errors->has('observacoes') ? 'border-red-500 dark:border-red-400' : 'border-gray-300 dark:border-gray-600' }} bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 {{ $errors->has('observacoes') ? 'focus:ring-red-500 dark:focus:ring-red-400' : 'focus:ring-blue-900 dark:focus:ring-blue-400' }} resize-none">{{ old('observacoes') }}</textarea>
                    @error('observacoes')
                        <p class="text-red-600 dark:text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Form Actions -->
            <div class="pt-6 border-t border-gray-200 dark:border-gray-700 flex items-center justify-end gap-3">
                <a href="{{ route('patrimonios.index') }}" class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200 font-medium">
                    Cancelar
                </a>
                <button type="submit" class="px-6 py-2 bg-blue-900 dark:bg-blue-700 text-white rounded-lg hover:bg-blue-800 dark:hover:bg-blue-600 transition-colors duration-200 font-medium">
                    Cadastrar Patrimônio
                </button>
            </div>
        </form>
    </div>
@endsection
