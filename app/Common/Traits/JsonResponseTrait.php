<?php
/**
 * Created by PhpStorm.
 * User: LINH
 * Date: 5/23/2019
 * Time: 4:51 PM
 */

namespace App\Common\Traits;


trait JsonResponseTrait
{
    public function responseJson($data, $meta = [], $link = [])
    {
        $responseData         = [];
        $responseData['data'] = (array) $data;

        if (is_array($meta) && !empty($meta)) {
            $responseData['meta'] = $meta;
        }

        if (is_array($link) && !empty($link)) {
            $responseData['link'] = array_merge([
                'first' => null,
                'last'  => null,
                'next'  => null,
                'prev'  => null,
            ], $link);
        }

        return response()->json($responseData);
    }

    public function responseJsonSuccess()
    {
        $responseData = [
            'data' => [
                'success' => true,
            ],
        ];
        return response()->json($responseData);
    }


    public function jsonResponse($data, $errors, $code = 200, $customData = [])
    {
        $response = [
            'data' => $data,
            'errors' => $errors
        ];

        if(count($customData)) {
            foreach ($customData as $key => $item) {
                $response[$key] = $item;
            }
        }

        return response()->json($response, $code);
    }
}
