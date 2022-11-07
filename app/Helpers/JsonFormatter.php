<?php

namespace App\Helpers;

class JsonFormatter
{
    protected static $response =  [
        'data' => [
        'code' => null,
        'message' => null,
        ],
        'data' => null
    ];
    public static function createApi ($code = null, $message = null, $data = null){
        self::$response['data']['code'] = $code;
        self::$response['data']['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['data']['code']);
    }
}