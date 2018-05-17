<?php namespace Bantenprov\CustomerRetribusi;

use Illuminate\Support\ServiceProvider;
use Bantenprov\CustomerRetribusi\Console\Commands\CustomerRetribusiCommand;

/**
 * The CustomerRetribusiServiceProvider class
 *
 * @package Bantenprov\CustomerRetribusi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerRetribusiServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('customer-retribusi', function ($app) {
            return new CustomerRetribusi;
        });

        $this->app->singleton('command.customer-retribusi', function ($app) {
            return new CustomerRetribusiCommand;
        });

        $this->commands('command.customer-retribusi');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'customer-retribusi',
            'command.customer-retribusi',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('customer-retribusi.php');

        $this->mergeConfigFrom($packageConfigPath, 'customer-retribusi');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'customer-retribusi-config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'customer-retribusi');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/customer-retribusi'),
        ], 'customer-retribusi-lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'customer-retribusi');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/customer-retribusi'),
        ], 'customer-retribusi-views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => public_path('vendor/customer-retribusi'),
        ], 'customer-retribusi-public');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'customer-retribusi-migrations');
    }
}
