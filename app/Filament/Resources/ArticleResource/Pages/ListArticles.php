<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ArticleResource;
use Illuminate\Database\Eloquent\Builder;

class ListArticles extends ListRecords
{
    protected static string $resource = ArticleResource::class;

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
