<?php

namespace Landers\AmsApp\Providers;

use Landers\LaravelAms\Constraints\Providers\BaseRouteServiceProvider;
use Landers\LaravelAms\Facades\Route;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapCommonRoutes();
    }

    /**
     * Define the "Manger" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapCommonRoutes()
    {
        Route::middleware('web')
            ->namespace('Landers\AmsApp\Modules\Common')
            ->group(__DIR__ . '/../Routes/common.php');
    }
}
