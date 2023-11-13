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
        Schema::create('emprestimo_livros', function (Blueprint $table) {
            $table->unsignedBigInteger('emprestimo_id');
            $table->foreign('emprestimo_id')->references('id')->on('emprestimos');
            $table->unsignedBigInteger('livro_id');
            $table->foreign('livro_id')->references('id')->on('livros');
            $table->date('data_previsao_devolucao');
            $table->boolean('devolvido');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimo_livros');
    }
};
