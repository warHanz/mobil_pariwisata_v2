<?php

namespace App\Filament\Resources\VehicleResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\VehicleResource;

class ListVehicles extends ListRecords
{
    protected static string $resource = VehicleResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\CreateAction::make()];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'publish' => Tab::make()->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'publish'), true),
            'private' => Tab::make()->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'private'), false),
        ];
    }
}
