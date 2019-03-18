<?php

namespace AlexBowers\NovaCategoriseResources;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'nova');

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-collapsible-groups', __DIR__ . '/../dist/js/nova-collapsible-groups.js');
        });
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
