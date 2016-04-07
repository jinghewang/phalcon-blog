<?php

/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 16/4/7
 * Time: 下午5:37
 */


class BHelper
{
    public static function print_r2($expression, $return = null){
        echo '<pre>';
        print_r($expression);
        echo '</pre>';
    }
}