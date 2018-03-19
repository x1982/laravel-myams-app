<?php
namespace Landers\AmsApp\System;

use Landers\LaravelAms\Constraints\Providers\BaseBootstrapProvider;

class BootstrapProvider extends BaseBootstrapProvider
{
    public function boot( )
    {
        $providers = package_config('package.providers', []);
        $this->registerAppServiceProvider($providers);
    }
}
