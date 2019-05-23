<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 5:53 PM
 */

namespace App\Dependency\Repositories\Sql;


use App\Abstraction\RepositoryInterface\IChartGetter;
use App\Common\DomainModels\Charts;
use App\Dependency\Repositories\Sql\Eloquent\ChartEloquent;
use App\Exceptions\GetResourceException;

class SQLChartGetter implements IChartGetter
{
    private $chartEloquent;

    public function __construct(ChartEloquent $chartEloquent)
    {
        $this->chartEloquent = $chartEloquent;
    }

    public function getChars()
    {
        try{
            $charts = $this->chartEloquent
                ->get()
                ->toArray();
            $result = array_map(function ($chart) {
                return new Charts($chart);
            }, $charts);
            return $result;
        }catch (\Exception $e){
            throw new GetResourceException("Get Chart Fail");
        }
    }
}
