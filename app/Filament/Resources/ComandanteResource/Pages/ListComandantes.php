<?php

namespace App\Filament\Resources\ComandanteResource\Pages;

use App\Filament\Resources\ComandanteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComandantes extends ListRecords
{
    protected static string $resource = ComandanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
