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
        Schema::create('manutencoes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('patrimonio_id')->constrained('patrimonios')->cascadeOnDelete();;

            $table->text('descricao');
            $table->date('data_manutencao')->nullable();
            $table->decimal('custo', 10, 2)->nullable();

            $table->enum('tipo', ['preventiva', 'corretiva']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manutencoes');
    }
};
