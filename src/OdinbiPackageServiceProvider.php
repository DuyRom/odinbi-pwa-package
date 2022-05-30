<?php

namespace odinbi\pwa;

use Illuminate\Support\ServiceProvider;

class OdinbiPackageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPublish();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/pwa.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'pwa');
        // $this->publishes([
        //     __DIR__.'/resources/views' => resource_path('views/odinbi/pwa'),
        // ]);
    }


    /**
     * Register publishable assets.
     *
     * @return void
     */
    protected function registerPublish()
    {
        $publishable = [
            'odb.pwa.config'    => [
                __DIR__.'/config/pwa.php' => config_path('odb_pwa.php'),
            ],
            'odb.pwa.migrations'    => [
                __DIR__.'/database/migrations/' => database_path('migrations'),
            ],
            // 'pwa.tenant.migrations'    => [
            //     __DIR__.'/../database/migrations/' => database_path('migrations/tenant'),
            // ],
            // 'pwa.seeds'     => [
            //     __DIR__.'/database/seeds/' => database_path('seeds'),
            // ],
            'odb.pwa.views'     => [
                __DIR__.'/resources/views' => resource_path('views/odinbi/pwa'),
            ],
        ];

        foreach ($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}
