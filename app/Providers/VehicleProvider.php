<?php

namespace App\Providers;

use App\Models\VehicleCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class VehicleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.frontend', function ($view) {
            $vehicle_categories = VehicleCategory::latest()->get();

            $view->with('vehicle_categories', $vehicle_categories);
        });
    }
}
