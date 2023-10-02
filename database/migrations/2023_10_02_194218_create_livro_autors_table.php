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
        Schema::create('livro_autors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_livro');
            $table->foreign('id_livro')->references('id')->on('livros')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('id_autor')->nullable();
            $table->foreign('id_autor')->references('id')->on('autors')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livro_autors');
    }
};
