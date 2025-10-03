<?php

namespace App\Filament\Resources\DadaResource\Pages;

use App\Filament\Resources\DadaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDada extends CreateRecord
{
    protected static string $resource = DadaResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
