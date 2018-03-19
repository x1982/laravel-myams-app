<?php
return [
    'package' => [
        'providers' => [
            // 内置路由服务提供者
            \Landers\AmsApp\Providers\RouteServiceProvider::class,

            // Artisan服务提供者
            \Landers\AmsApp\Providers\ArtisanServiceProvider::class,
        ],

        'commands' => [
            // 抓取远程资源
            \Landers\LaravelAms\Commands\ResourceFetchCommand::class,
        ],

        'crontabs' => [
        ],
    ]
];