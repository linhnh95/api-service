<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:45 PM
 */

namespace App\Exceptions;


class AuthenException extends AException
{
    public function __construct($message = null)
    {
        $messageNew = $message ? $message : 'Token wrong or expire or not info user';
        parent::__construct($messageNew, 401, $messageNew);
    }
}
