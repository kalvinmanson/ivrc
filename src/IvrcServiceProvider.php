<?php

namespace Lavenir\Ivrc;

use Illuminate\Support\ServiceProvider;

class IvrcServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'lavenir');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'lavenir');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/ivrc.php', 'ivrc');

        // Register the service the package provides.
        $this->app->singleton('ivrc', function ($app) {
            return new Ivrc;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ivrc'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/ivrc.php' => config_path('ivrc.php'),
        ], 'ivrc.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/lavenir'),
        ], 'ivrc.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/lavenir'),
        ], 'ivrc.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/lavenir'),
        ], 'ivrc.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
