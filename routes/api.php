<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Can't Auth
Route::group([
    'prefix' => 'v1',
    'namespace' => 'Api'
], function () {
    Route::post('oauth-syno', ['as' => 'auth.oauth-syno', 'uses' => 'AuthController@oauthSyno']);
});

//Auth
Route::group([
    'prefix' => 'v1',
    'namespace' => 'Api',
    'middleware' => ['auth-jwt']
], function () {
    Route::get('charts', ['as' => 'charts.get-charts', 'uses' => 'ChartController@getCharts']);
});
