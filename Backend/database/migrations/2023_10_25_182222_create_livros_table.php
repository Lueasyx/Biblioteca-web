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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', 20);
            $table->string('Titulo', 80);
            $table->integer('Edicao');
            $table->integer('Estoque');
            $table->unsignedBigInteger('Autor');
            $table->foreign('Autor')->references('id')->on('autors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
