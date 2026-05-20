<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('policial_mes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('graduacao');
            $table->string('mes');
            $table->year('ano');
            $table->text('texto');
            $table->string('assinatura')->nullable();
            $table->string('cargo_assinatura')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('policial_mes');
    }
};