<?php namespace App\Utils\Helper;

// use Illuminate\Support\Facades\Config;

class Helper
{
    public function convertToKeyValue(array $data, $key = 'id', $value = 'name')
    {
        $arrRet = [];
        foreach ($data as $v) {
            $arrRet[$v[$key]] = $v[$value];
        }
        return $arrRet;
    }
}