<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\RoleCheck;
use Illuminate\Routing\Router;

class AppServiceProvider extends ServiceProvider
{
    public function boot(Router $router)
    {
        $router->aliasMiddleware('role', RoleCheck::class);
    }

    public function register()
    {
        //
    }
}
