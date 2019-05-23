<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:34 PM
 */

namespace App\BusinessService;


use App\Business\LoginBL;

class LoginBS
{
    private $loginBL;

    public function __construct(LoginBL $loginBL)
    {
        $this->loginBL = $loginBL;
    }

    public function oauthSyno($params)
    {
        return $this->loginBL->oauthSyno($params);
    }
}
