<?php
/**
 * 随机产生指定长度的字符串
 * @param $length
 * @return string|null
 */
function getRandChar ($length) {
    $str = null;
    $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
    $max = strlen($strPol) - 1;
    for ($i = 0; $i< $length; $i++) {
        $str .= $strPol[mt_rand(0, $max)];
    }
    return $str;
}


