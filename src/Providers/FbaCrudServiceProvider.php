<?php

namespace Fba\Crud\Providers;

use Illuminate\Support\ServiceProvider;
use Fba\Crud\Commands\Crud;

class FbaCrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([Crud::class]);
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('crud.php'),
            __DIR__.'/../simple-templates' => base_path('resources/views/template/simple-templates'),
            __DIR__.'/../lang' => base_path('resources/lang'),
            __DIR__.'/../css' => base_path('public/css'),
            __DIR__.'/../js' => base_path('public/js'),

        ],'Fba');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
