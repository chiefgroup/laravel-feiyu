<?php
namespace ChiefGroup\LaravelFeiyu;

use ChiefGroup\Feiyu\Feiyu;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Class ServiceProvider.
 *
 */
class ServiceProvider extends LaravelServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cg.feiyu', function ($app) {
            return new Feiyu();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['cg.feiyu'];
    }

}