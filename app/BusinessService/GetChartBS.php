<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 5:53 PM
 */

namespace App\BusinessService;


use App\Business\GetChartBL;

class GetChartBS
{
    private $getChartBL;

    public function __construct(GetChartBL $getChartBL)
    {
        $this->getChartBL = $getChartBL;
    }

    public function getCharts()
    {
        return $this->getChartBL->getCharts();
    }
}
