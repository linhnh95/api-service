<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 6:33 PM
 */

namespace App\Dependency\Repositories\Sql\Eloquent;


use Illuminate\Database\Eloquent\Model as Eloquent;

class ChartEloquent extends Eloquent
{
    protected $table = "data";

    protected $fillable = [
        "date", "value"
    ];
}
