<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PolicialMes extends Model
{
    protected $table = 'policial_mes';

    protected $fillable = [
        'nome',
        'graduacao',
        'mes',
        'mes_numero',
        'ano',
        'texto',
        'assinatura',
        'cargo_assinatura',
        'foto',
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $meses = [
                'Janeiro' => 1, 'Fevereiro' => 2, 'Março' => 3,
                'Abril' => 4, 'Maio' => 5, 'Junho' => 6,
                'Julho' => 7, 'Agosto' => 8, 'Setembro' => 9,
                'Outubro' => 10, 'Novembro' => 11, 'Dezembro' => 12
            ];
            $model->mes_numero = $meses[$model->mes] ?? 1;
        });
    }
}