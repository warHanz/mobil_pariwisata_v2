<?php

namespace App\Filament\Resources\PackageTourResource\Pages;

use App\Filament\Resources\PackageTourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackageTour extends EditRecord
{
    protected static string $resource = PackageTourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
