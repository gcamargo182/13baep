<?php

namespace App\Filament\Resources\PolicialMesResource\Pages;

use App\Filament\Resources\PolicialMesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPolicialMes extends ListRecords
{
    protected static string $resource = PolicialMesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
