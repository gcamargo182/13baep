<?php

namespace App\Filament\Resources\ComandanteResource\Pages;

use App\Filament\Resources\ComandanteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditComandante extends EditRecord
{
    protected static string $resource = ComandanteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
