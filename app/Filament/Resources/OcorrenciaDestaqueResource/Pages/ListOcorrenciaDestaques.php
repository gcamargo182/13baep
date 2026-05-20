<?php

namespace App\Filament\Resources\OcorrenciaDestaqueResource\Pages;

use App\Filament\Resources\OcorrenciaDestaqueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOcorrenciaDestaques extends ListRecords
{
    protected static string $resource = OcorrenciaDestaqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
