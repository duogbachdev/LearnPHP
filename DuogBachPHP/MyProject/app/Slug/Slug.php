<?php

namespace App\Slug;

class Slug
{
    public static function getSlug($str)
    {
        $utf8 = array(
            'a' => 'á|à|ả|ã|ạ|ă|ặ|ằ|ắ|ẵ|ẳ|ẩ|â|ầ|ấ|ậ|ẫ|Á|À|Ả|Ã|Ạ|Ă|Ặ|Ằ|Ắ|Ẵ|Ẳ|Ẩ|Â|Ầ|Ấ|Ậ|Ẫ',
            'd' => 'đ|Đ',
            'e' => 'é|è|ẽ|ẹ|ẻ|ê|ề|ế|ể|ễ|ệ|É|È|Ẽ|Ẹ|Ẻ|Ê|Ề|Ế|Ể|Ễ|Ệ',
            'i' => 'ỉ|í|ì|ĩ|ị|Ỉ|Í|Ì|Ĩ|Ị',
            'o' => 'ó|ò|õ|ọ|ỏ|ô|ồ|ố|ổ|ỗ|ộ|ơ|ờ|ớ|ở|ỡ|ợ|Ó|Ò|Õ|Ọ|Ỏ|Ô|Ồ|Ố|Ổ|Ỗ|Ộ|Ơ|Ờ|Ớ|Ở|Ỡ|Ợ',
            'u' => 'ù|ú|ủ|ũ|ụ|ư|ừ|ứ|ử|ự|ữ|Ù|Ú|Ủ|Ũ|Ụ|Ư|Ừ|Ứ|Ử|Ự|Ữ',
            'y' => 'ý|ỳ|ỵ|ỹ|ỷ|Ý|Ỳ|Ỵ|Ỹ|Ỷ'
        );

        foreach ($utf8 as $acii => $uni)
            $str = preg_replace("/($uni)/i", $acii, $str);
        $str = strtolower($str);
        $arr = explode(" ", $str);
        $slug = implode("-", $arr);
        return $slug;
    }
}
