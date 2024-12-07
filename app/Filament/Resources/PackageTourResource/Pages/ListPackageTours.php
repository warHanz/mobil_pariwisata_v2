<?php

namespace App\Filament\Resources\PackageTourResource\Pages;

use App\Filament\Resources\PackageTourResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPackageTours extends ListRecords
{
    protected static string $resource = PackageTourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
