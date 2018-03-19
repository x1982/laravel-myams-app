<?php

namespace Landers\AmsApp\Providers;

use Landers\LaravelAms\Constraints\Providers\BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapMangerRoutes();

        $this->mapInternetRoutes();

        $this->mapMemberRoutes();
    }

    /**
     * Define the "Manger" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapMangerRoutes()
    {
        $pack = [
            // 注册 routes/guards 中的路由
            [
                'middleware' => 'web',
                'namespace' => 'Landers\AmsApp\Modules\Manager',
                'file' => __DIR__ . '/../Routes/manager.php'
            ]
        ];

        $this->registeGuardRoute('admin', $pack);
    }

    /**
     * Define the "Internet" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapInternetRoutes()
    {
        $pack = [
            // 注册 routes/guards 中的路由
            [
                'middleware' => 'web',
                'namespace' => 'Landers\AmsApp\Modules\Internet',
                'file' => __DIR__ . '/../Routes/internet.php'
            ],
        ];

        $this->registeGuardRoute('internet', $pack);
    }

    /**
     * Define the "Member" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapMemberRoutes()
    {
        $pack = [
            // 注册 routes/guards 中的路由
            [
                'middleware' => 'web',
                'namespace' => 'Landers\AmsApp\Modules\Member',
                'file' => __DIR__ . '/../Routes/member.php'
            ],
        ];

        $this->registeGuardRoute('member', $pack);
    }
}
