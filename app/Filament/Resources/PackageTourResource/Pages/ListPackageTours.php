<?php

namespace App\Filament\Resources\PackageTourResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PackageTourResource;

class ListPackageTours extends ListRecords
{
    protected static string $resource = PackageTourResource::class;

    protected function getHeaderActions(): array
    {
        return [Actions\CreateAction::make()];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'publish' => Tab::make()->modifyQueryUsing(fn(Builder $query) => $query->where('status', '1'), true),
            'private' => Tab::make()->modifyQueryUsing(fn(Builder $query) => $query->where('status', '0'), false),
        ];
    }
}
