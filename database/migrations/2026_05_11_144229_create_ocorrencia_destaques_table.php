<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ocorrencia_destaques', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('mes');
            $table->year('ano');
            $table->text('texto');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ocorrencia_destaques');
    }
};