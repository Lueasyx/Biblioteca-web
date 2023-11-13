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
        Schema::create('devolucaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emprestimo');
            $table->unsignedBigInteger('livro');
            $table->unsignedBigInteger('elid');
            $table->date('DataDevolucao');
            $table->decimal('Multa', 5, 2);
            $table->foreign('emprestimo')->references('emprestimo_id')->on('emprestimo_livros');
            $table->foreign('livro')->references('livro_id')->on('emprestimo_livros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devolucaos');
    }
};
