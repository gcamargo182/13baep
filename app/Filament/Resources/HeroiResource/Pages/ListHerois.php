<?php

namespace App\Filament\Resources\HeroiResource\Pages;

use App\Filament\Resources\HeroiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHerois extends ListRecords
{
    protected static string $resource = HeroiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
