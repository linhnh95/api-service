<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 5:53 PM
 */

namespace App\Business;


use App\Abstraction\RepositoryInterface\IChartGetter;

class GetChartBL
{
    private $iChartGetter;

    public function __construct(IChartGetter $chartGetter)
    {
        $this->iChartGetter = $chartGetter;
    }

    public function getCharts()
    {
        return $this->iChartGetter->getChars();
    }
}
