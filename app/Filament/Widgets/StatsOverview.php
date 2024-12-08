<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $article = Article::count();

        return [Stat::make('Article', $article)->description('32k increase')->descriptionIcon('heroicon-m-arrow-trending-up')->color('success'), Stat::make('Bounce rate', '21%')->description('7% increase')->descriptionIcon('heroicon-m-arrow-trending-down')->color('danger'), Stat::make('Average time on page', '3:12')->description('3% increase')->descriptionIcon('heroicon-m-arrow-trending-up')->color('success')];
    }
}
