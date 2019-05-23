<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:54 PM
 */

namespace App\Http\Controllers\Api;


use App\BusinessService\LoginBS;
use App\Common\Traits\JsonResponseTrait;
use App\Http\Requests\LoginRequest;

class AuthController extends ApiController
{
    use JsonResponseTrait;

    private $loginBS;

    public function __construct(LoginBS $loginBS)
    {
        $this->loginBS = $loginBS;
    }

    public function oauthSyno(LoginRequest $request)
    {
        $token = $this->loginBS->oauthSyno($request->all());
        return $this->responseJson($token);
    }
}
