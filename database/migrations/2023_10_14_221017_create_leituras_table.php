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
        Schema::create('leituras', function (Blueprint $table) {
            $table->id();
            $table->timestamp("data");
            $table->string("nome");
            $table->string("bi");
            $table->boolean('estado')->default(0);      
            $table->unsignedBigInteger('id_livro');
            $table->foreign('id_livro')->references('id')->on('livros')->onDelete('CASCADE')->onUpgrade('CASCADE');   
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leituras');
    }
};
