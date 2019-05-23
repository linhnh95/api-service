<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 5:54 PM
 */

namespace App\Http\Controllers\Api;

use App\BusinessService\GetChartBS;
use App\Common\Traits\JsonResponseTrait;
use App\Http\Requests\GetChartRequest;
use App\Http\ViewModels\ChartsVM;

class ChartController extends ApiController
{
    use JsonResponseTrait;

    private $getChartBS;

    public function __construct(GetChartBS $getChartBS)
    {
        $this->getChartBS = $getChartBS;
    }

    public function getCharts(GetChartRequest $request)
    {
        $charts = $this->getChartBS->getCharts();
        $data = array_map(function ($chart) {
            return new ChartsVM($chart);
        }, $charts);
        return $this->responseJson($data);
    }
}
