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
        Schema::create('respuestadebates', function (Blueprint $table) {
            $table->id();
            $table->string('texto')->nullable();
            $table->string('ip')->nullable();
            $table->string('navegador')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('region')->nullable();
            $table->unsignedBigInteger('debate_id')->nullable();
            $table->string('fecha')->nullable();
            $table->string('pregunta')->nullable();
            $table->foreign('debate_id')
            ->references('id')->on('debates')
            ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respuestadebates');
    }
};