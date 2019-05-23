<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 5:07 PM
 */

namespace App\Exceptions;


class ValidationException extends AException
{
    public function __construct($message, $errors)
    {
        $messageNew =  $message ? $message: "Field is invalid";
        parent::__construct($messageNew, 422, $errors);
    }
}
