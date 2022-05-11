<?php

namespace JosHoangTien\LaravelMoreCommand;

use Illuminate\Support\ServiceProvider;
use JosHoangTien\LaravelMoreCommand\Commands\CreateRepositoryCommand;
use JosHoangTien\LaravelMoreCommand\Commands\CreateTraitCommand;
use JosHoangTien\LaravelMoreCommand\Commands\CreateServiceCommand;
use JosHoangTien\LaravelMoreCommand\Commands\CreateBladeCommand;
use JosHoangTien\LaravelMoreCommand\Commands\ClearLogCommand;

use JosHoangTien\LaravelMoreCommand\Commands\CreateModuleRepositoryCommand;
use JosHoangTien\LaravelMoreCommand\Commands\CreateModuleTraitCommand;
use JosHoangTien\LaravelMoreCommand\Commands\CreateModuleServiceCommand;
use JosHoangTien\LaravelMoreCommand\Commands\CreateModuleBladeCommand;



class LaravelMoreCommandProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            CreateRepositoryCommand::class,
            CreateTraitCommand::class,
            CreateServiceCommand::class,
            CreateBladeCommand::class,
            ClearLogCommand::class,

            // For nWidart/laravel-modules:
            CreateModuleRepositoryCommand::class,
            CreateModuleTraitCommand::class,
            CreateModuleServiceCommand::class,
            CreateModuleBladeCommand::class
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-more-command.php' => config_path('laravel-more-command.php'),
        ], 'config');
    }
}
