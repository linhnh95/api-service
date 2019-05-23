<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:40 PM
 */

namespace App\Http\Middleware;

use \Firebase\JWT\JWT;
use App\Exceptions\AuthenException;

class VerifyJWTToken
{
    public function handle($request, \Closure $next)
    {
        if(!$request->bearerToken()){
            throw new AuthenException();
        }
        $jwt = $request->bearerToken();
        $key = "testsyno";
        JWT::$leeway = 60; // $leeway in seconds
        $decoded = JWT::decode($jwt, $key, array('HS256'));
        if($decoded->exp < time()){
            throw new AuthenException();
        }
        $request->attributes->add(['isLogin' => true]);
        return $next($request);
    }
}
