<?php

namespace Lasallesoftware\Laravelapp\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';
 

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        if (env('LASALLE_APP_NAME') == "adminbackendapp") {

            RateLimiter::for('api', function (Request $request) {
                return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
            });
        }

        // L8 Upgrade: Automatic Controller Namespace Prefixing
        // (https://laravel.com/docs/8.x/upgrade, scroll down)
        // the shipped App\Providers\RouteServiceProvider's namespace property defults to null
        // I am going to comment it out instead of deleting it for reference only
        if (env('LASALLE_APP_NAME') == "adminbackendapp") {

            $this->routes(function () {
                Route::prefix('api')
                    ->middleware('api')
                    ->namespace($this->namespace)
                    //->group(base_path('routes/api.php'));
                    ->group(__DIR__.'/../../routes/api.php')
                ;            
            });
        }

        $this->routes(function () {
            Route::middleware('web')
                ->namespace($this->namespace)
                //->group(base_path('routes/web.php'));
                ->group(__DIR__.'/../../routes/web.php')
            ;
        });
    }
}