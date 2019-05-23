<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:32 PM
 */

namespace App\Abstraction\RepositoryInterface;

interface IAuthenticated
{
    public function oauthSyno(array $params);
}
