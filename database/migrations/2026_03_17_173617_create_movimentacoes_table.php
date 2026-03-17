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
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('patrimonio_id')->constrained('patrimonios')->cascadeOnDelete();;

            $table->foreignId('localizacao_origem_id')
                ->nullable()
                ->constrained('localizacoes')
                ->cascadeOnDelete();;

            $table->foreignId('localizacao_destino_id')
                ->nullable()
                ->constrained('localizacoes')
                ->cascadeOnDelete();

            $table->foreignId('usuario_responsavel_id')
                ->nullable()
                ->constrained('usuarios')
                ->cascadeOnDelete();

            $table->text('motivo')->nullable();

            $table->timestamp('data_movimentacao')->useCurrent();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacoes');
    }
};
