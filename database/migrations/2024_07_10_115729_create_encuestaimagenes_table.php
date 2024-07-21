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
        Schema::create('encuestaimagenes', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('candidato_id')->nullable();
            $table->string('nombre')->nullable();
            $table->string('opcion')->nullable();
            $table->integer('votos')->nullable()->default(0);
            $table->string('ip')->nullable();
            $table->string('estado')->nullable();
            $table->string('fecha')->nullable();
            $table->foreign('candidato_id')
            ->references('id')->on('candidatos')
            ->onDelete('set null');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encuestaimagenes');
    }
};
