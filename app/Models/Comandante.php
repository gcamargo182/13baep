<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comandante extends Model
{
    protected $fillable = [
        'nome',
        'graduacao',
        'periodo',
        'foto',
    ];
}