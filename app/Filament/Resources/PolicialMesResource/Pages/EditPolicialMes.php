<?php

namespace App\Filament\Resources\PolicialMesResource\Pages;

use App\Filament\Resources\PolicialMesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPolicialMes extends EditRecord
{
    protected static string $resource = PolicialMesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
