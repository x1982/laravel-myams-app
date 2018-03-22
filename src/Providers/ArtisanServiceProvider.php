<?php

namespace Landers\AmsApp\Providers;

use Landers\LaravelAms\Constraints\Providers\BaseArtisanServiceProvider;

class ArtisanServiceProvider extends BaseArtisanServiceProvider
{
    protected static $commands = [
        // 抓取远程资源
        \Landers\AmsApp\Commands\ResourceFetchCommand::class,
    ];
}