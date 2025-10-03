<?php

namespace App\Filament\Resources\DemoResource\Pages;

use App\Filament\Resources\DemoResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\Page;
use function __;

class AnotherPage extends ListRecords
{
    protected static string $resource = DemoResource::class;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationParentItem = "Demos";

    public static function getNavigationParentItem(): ?string
    {
        return "Demos";
    }


}
