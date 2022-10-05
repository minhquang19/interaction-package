<?php

namespace Minhquang\Interaction\Providers;

use Illuminate\Support\ServiceProvider;
use Minhquang\Interaction\Repositories\InteractionInterface;
use Minhquang\Interaction\Repositories\InteractionRepository;

class InteractionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'interaction');

        $this->publishes([
            __DIR__ . '/../../resources/sass/_interaction.scss' => base_path('/resources/sass/interaction/_interaction.scss'),
            __DIR__ . '/../../resources/js/interaction.js' => base_path('/resources/js/interaction/interaction.js'),
            __DIR__ . '/../../resources/views/show.blade.php' => base_path('/resources/views/interaction/show.blade.php'),
            __DIR__ . '/../../resources/images' => base_path('/public/images/interaction'),

        ]);

    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(InteractionInterface::class, InteractionRepository::class);
    }
}
