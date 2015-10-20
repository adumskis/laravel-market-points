<?php

namespace Artme\MarketPoints;

use Illuminate\Support\ServiceProvider;

include __DIR__.'/routes.php';

class MarketPointsProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/market_points.php'
                => config_path('market_points.php'),
            __DIR__.'/migrations/2015_10_15_15000_create_market_points_table.php'
                => database_path('migrations/2015_10_15_15000_create_market_points_table.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Artme\MarketPoints\MarketPointsController');
    }
}
