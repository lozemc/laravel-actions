<?php

namespace Lozemc\Actions\Providers;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\ServiceProvider;

class MakeActionProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands('command.make.action');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton(
            'command.make.action',
            function ($app) {
                return new \Lozemc\Actions\Console\ActionMakeCommand($app['files']);
            }
        );
    }
}
