<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:33 PM
 */

namespace App\Business;


use App\Abstraction\RepositoryInterface\IAuthenticated;

class LoginBL
{
    private $iAuthenticated;

    public function __construct(IAuthenticated $authenticated)
    {
        $this->iAuthenticated = $authenticated;
    }

    public function oauthSyno($params)
    {
        return $this->iAuthenticated->oauthSyno($params);
    }
}
