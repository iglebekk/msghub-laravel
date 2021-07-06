<?php

namespace Iglebekk\Msghub;

use Illuminate\Support\ServiceProvider;

class MsghubServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/msghub.php' => config_path('msghub.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(Msghub::class, function () {
            return new Msghub();
        });
    }
}
