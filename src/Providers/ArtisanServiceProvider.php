<?php

namespace Landers\AmsApp\Providers;

use Landers\LaravelAms\Constraints\Providers\BaseArtisanServiceProvider;

class ArtisanServiceProvider extends BaseArtisanServiceProvider
{
    public function register()
    {
        $this->commands = package_config('commands', []);
        $this->crontabs = package_config('crontabs', []);

        parent::register();
    }
}