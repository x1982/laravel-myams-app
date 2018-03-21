<?php
namespace Landers\AmsApp\System;

use Landers\LaravelAms\Constraints\Providers\BaseBootstrapProvider;

class BootstrapProvider extends BaseBootstrapProvider
{
    public function boot( )
    {
        $this->providers = package_config('providers', []);
        $this->registerAppServiceProvider();
    }
}
