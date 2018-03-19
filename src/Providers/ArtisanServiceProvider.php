<?php

namespace Landers\AmsApp\Providers;

use Landers\LaravelAms\Constraints\Providers\BaseArtisanServiceProvider;

class ArtisanServiceProvider extends BaseArtisanServiceProvider
{
    public function register()
    {
        $this->commands = package_config('package.commands', []);
        $this->crontabs = package_config('package.crontabs', []);

        parent::register();
    }
}