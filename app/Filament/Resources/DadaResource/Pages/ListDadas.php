<?php

namespace App\Filament\Resources\DadaResource\Pages;

use App\Filament\Resources\DadaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDadas extends ListRecords
{
    protected static string $resource = DadaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
