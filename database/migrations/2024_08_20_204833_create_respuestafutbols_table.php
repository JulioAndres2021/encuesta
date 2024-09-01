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
        Schema::create('respuestafutbols', function (Blueprint $table) {
            $table->id();
            $table->string('texto')->nullable();
            $table->string('ip')->nullable();
            $table->unsignedBigInteger('futbols_id')->nullable();
            $table->string('fecha')->nullable();
            $table->string('pregunta')->nullable();
            $table->foreign('futbols_id')
            ->references('id')->on('futbols')
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestafutbols');
    }
};