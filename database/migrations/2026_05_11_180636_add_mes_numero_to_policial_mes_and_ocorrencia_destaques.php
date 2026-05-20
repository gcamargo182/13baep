<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('policial_mes', function (Blueprint $table) {
            $table->integer('mes_numero')->default(1)->after('mes');
        });

        Schema::table('ocorrencia_destaques', function (Blueprint $table) {
            $table->integer('mes_numero')->default(1)->after('mes');
        });
    }

    public function down(): void
    {
        Schema::table('policial_mes', function (Blueprint $table) {
            $table->dropColumn('mes_numero');
        });

        Schema::table('ocorrencia_destaques', function (Blueprint $table) {
            $table->dropColumn('mes_numero');
        });
    }
};