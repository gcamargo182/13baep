<?php

namespace App\Filament\Resources\OcorrenciaDestaqueResource\Pages;

use App\Filament\Resources\OcorrenciaDestaqueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOcorrenciaDestaque extends EditRecord
{
    protected static string $resource = OcorrenciaDestaqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
