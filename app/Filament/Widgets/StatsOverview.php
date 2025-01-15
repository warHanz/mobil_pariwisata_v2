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

        return [
            Stat::make('Article', $article)
                ->description('Jumlah Total Article')
                ->descriptionIcon('heroicon-m-arrow-trending-' . ($article >= Article::count() ? 'up' : 'down'))
                ->color($article >= Article::count() ? 'success' : 'danger'),
            Stat::make('Tour Package', $package_tour)
                ->description('Jumlah Total Tour Package')
                ->descriptionIcon('heroicon-m-arrow-trending-' . ($package_tour >= PackageTour::count() ? 'up' : 'down'))
                ->color($package_tour >= PackageTour::count() ? 'success' : 'danger'),
            Stat::make('Vehicle', $vehicle)
                ->description('Jumlah Total Vehicle')
                ->descriptionIcon('heroicon-m-arrow-trending-' . ($vehicle >= Vehicle::count() ? 'up' : 'down'))
                ->color($vehicle >= Vehicle::count() ? 'success' : 'danger'),
        ];
    }
}
