<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Vehicle;
use App\Models\PackageTour;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $article = Article::count();
        $package_tour = PackageTour::count();
        $vehicle = Vehicle::count();

        return [Stat::make('Article', $article)->description('32k increase')->descriptionIcon('heroicon-m-arrow-trending-up')->color('success'), Stat::make('Tour Package', $package_tour)->description('7% increase')->descriptionIcon('heroicon-m-arrow-trending-down')->color('danger'), Stat::make('Vehicle', $vehicle)->description('3% increase')->descriptionIcon('heroicon-m-arrow-trending-up')->color('success')];
    }
}
