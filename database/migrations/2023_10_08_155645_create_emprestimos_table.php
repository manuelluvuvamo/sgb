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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->timestamp("data_levantamento");
            $table->timestamp('data_entrega');
            $table->boolean('estado')->default(0);
            $table->unsignedBigInteger('id_professor');
            $table->foreign('id_professor')->references('id')->on('professors')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
