<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:30 PM
 */

namespace App\Providers;


use App\Abstraction\RepositoryInterface\IAuthenticated;
use App\Abstraction\RepositoryInterface\IChartGetter;
use App\Dependency\Repositories\Sql\SQLAuthenticated;
use App\Dependency\Repositories\Sql\SQLChartGetter;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IAuthenticated::class, SQLAuthenticated::class);
        $this->app->bind(IChartGetter::class, SQLChartGetter::class);
    }
}
