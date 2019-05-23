<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 6:03 PM
 */

namespace App\Exceptions;


class GetResourceException extends AException
{
    public function __construct($message)
    {
        parent::__construct($message, 401);
    }
}
