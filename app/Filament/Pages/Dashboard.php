<?php
namespace App\Filament\Pages;

use Filament\Pages\Dashboard as Page;
use App\Filament\Widgets\TableOverview;

class Dashboard extends Page
{
    protected function getWidgets(): array
    {
        return [TableOverview::class];
    }
}
