<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:35 PM
 */

namespace App\Dependency\Repositories\Sql;


use App\Abstraction\RepositoryInterface\IAuthenticated;
use App\Exceptions\AuthenException;
use \Firebase\JWT\JWT;

class SQLAuthenticated implements IAuthenticated
{
    public function oauthSyno(array $params)
    {
        try{
            $username = $params["username"];
            $password = $params["password"];
            if($username === "admin" && $password === "admin"){
                $key = "testsyno";
                $token = array(
                    "iss" => request()->getHost(),
                    "aud" => request()->getHost(),
                    "iat" => time(),
                    "nbf" => time(),
                    "exp" => time() + (24*60*60)
                );
                $jwt = JWT::encode($token, $key);
                return $jwt;
            }else{
                throw new AuthenException("Username or Password no invalid");
            }
        }catch (\Exception $e){
            throw new AuthenException($e->getMessage());
        }
    }
}
