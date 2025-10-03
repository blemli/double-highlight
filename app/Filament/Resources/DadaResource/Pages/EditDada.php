<?php

namespace App\Filament\Resources\DadaResource\Pages;

use App\Filament\Resources\DadaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDada extends EditRecord
{
    protected static string $resource = DadaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
