<?php

namespace App\Filament\Resources\HeroiResource\Pages;

use App\Filament\Resources\HeroiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHeroi extends CreateRecord
{
    protected static string $resource = HeroiResource::class;
}
