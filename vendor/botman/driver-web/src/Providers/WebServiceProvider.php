<?php

namespace BotMan\Drivers\Web\Providers;

use BotMan\Drivers\Web\WebDriver;
use Illuminate\Support\ServiceProvider;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Studio\Providers\StudioServiceProvider;

class WebServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->isRunningInBotManStudio()) {
            $this->loadDrivers();

            $this->publishes([
                __DIR__.'/../../stubs/web.php' => config_path('botman/web.php'),
            ]);

            $this->mergeConfigFrom(__DIR__.'/../../stubs/web.php', 'botman.web');
        }

        $this->loadRoutesFrom(__DIR__.'/../Laravel/routes.php');
        $this->loadViewsFrom(__DIR__.'/../Laravel/views', 'botman-web');
    }

    /**
     * Load BotMan drivers.
     */
    protected function loadDrivers()
    {
        DriverManager::loadDriver(WebDriver::class);
    }

    /**
     * @return bool
     */
    protected function isRunningInBotManStudio()
    {
        return class_exists(StudioServiceProvider::class);
    }
}
