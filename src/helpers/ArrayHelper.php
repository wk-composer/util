<?php
/**
 * array helper.
 * User: walkskyer
 * Date: 2016/9/22
 * Time: 14:02
 */

namespace walkskyer\util\helpers;


class ArrayHelper{
    /**
     * shuffle array and keep the origin key
     * @param $array
     */
    public static function shuffleKey(&$array){
        $arr_keys = array_keys($array);
        shuffle($arr_keys);
        $tmp = array();
        foreach($arr_keys as $k){
            $tmp[$k] = $array[$k];
        }
        $array = $tmp;
        unset($tmp);
        unset($arr_keys);
    }
}