<?php

namespace Lasallesoftware\Laravelapp\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        //require base_path('routes/channels.php');
        require __DIR__.'/../../routes/channels.php';
    }
}