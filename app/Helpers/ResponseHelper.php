<?php


namespace App\Helpers;


class ResponseHelper
{
    public static function response($type,$result = null) : Array
    {
        $arr = [
          'response' => $type,
            'result' => $result
        ];

        return $arr;
    }

}
