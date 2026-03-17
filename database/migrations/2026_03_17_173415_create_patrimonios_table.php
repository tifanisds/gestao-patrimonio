<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patrimonios', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_identificacao')->unique();
            $table->text('descricao');

            $table->foreignId('categoria_id')->constrained('categorias')->cascadeOnDelete();;
            $table->foreignId('localizacao_id')->constrained('localizacoes')->cascadeOnDelete();;
            $table->foreignId('usuario_responsavel_id')->nullable()->constrained('users')->cascadeOnDelete();;

            $table->foreignId('fornecedor_id')->nullable()->constrained('fornecedores')->cascadeOnDelete();;

            $table->date('data_aquisicao')->nullable();
            $table->decimal('valor', 10, 2)->nullable();

            $table->enum('estado', ['novo', 'bom', 'regular', 'ruim', 'inservivel'])->default('bom');

            $table->text('observacoes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patrimonios');
    }
};
