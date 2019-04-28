<?php
/**
 * Created by PhpStorm.
 * user: reza
 * Date: 3/17/2019
 * Time: 1:20 PM
 */
 class  PerisanNumberconvertor
{
    public static function numberToFarsi($data)
    {
        $en_num = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $fa_num = array("۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹");
        return str_replace($en_num, $fa_num, $data);
    }

    public static function numberToEn($data)
    {
        $en_num = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $fa_num = array("۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹");
        return str_replace($fa_num, $en_num, $data);
    }

    public static function numberTreeSplitFa($str, $sep = ',')
    {
        $str = (string)$str;
        $result = '';
        $c = 0;
        $num = strlen("$str");
        for ($i = $num - 1; $i >= 0; $i--) {
            if ($c == 3) {
                $result = $sep . $result;
                $result = $str[$i] . $result;
                $c = 0;
            } else {
                $result = $str[$i] . $result;
            }

            $c++;
        }

        return Helper::numberToFarsi($result);
    }
}