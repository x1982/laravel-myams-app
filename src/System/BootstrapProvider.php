<?php
namespace Landers\AmsApp\System;

use Landers\LaravelAms\Constraints\Providers\BaseBootstrapProvider;

class BootstrapProvider extends BaseBootstrapProvider
{
    protected static $extraProviders = [
        // 内置路由服务提供者
        \Landers\AmsApp\Providers\RouteServiceProvider::class,

        // Artisan服务提供者
        \Landers\AmsApp\Providers\ArtisanServiceProvider::class,
    ];
}
