<?php

namespace Vendor\Template;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'template');

        $this->publishes([
            __DIR__.'/resources/assets/css' => public_path('vendor/template/css'),
            __DIR__.'/resources/assets/js' => public_path('vendor/template/js'),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
