<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->boolean('disponibilidade')->default(1);
            $table->integer('ano_lancamento')->nullable();

            $table->string("volume")->nullable();

            $table->integer('quantidade')->default(1);

            $table->unsignedBigInteger('id_editora');
            $table->foreign('id_editora')->references('id')->on('editoras')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
            $table->timestamps();
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