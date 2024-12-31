<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ConfigProvider extends ServiceProvider
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
        View::composer(['layouts.frontend', 'frontend.homepage', 'frontend.contact'], function ($view) {
            $configKeys = ['logo', 'author', 'title', 'caption', 'description', 'keywords', 'og_type', 'og_title', 'og_description', 'og_locale', 'ads_widget', 'ads_header', 'ads_footer', 'phone', 'email', 'facebook', 'instagram', 'footer', 'robots', 'location', 'sitename'];

            $config = Config::whereIn('name', $configKeys)->pluck('value', 'name');

            $view->with('config', $config);
        });
    }
}
