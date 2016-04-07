<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 16/4/7
 * Time: 下午5:29
 */

function print_r2($expression, $return = null){
    echo '<pre>';
    print_r($expression);
    echo '</pre>';
}


function print_r_models($expression, $return = null){
    /**
     * @var \Phalcon\Mvc\Model $v
     */
    echo '<pre>';
    $data = [];
    foreach ($expression as $k => $v) {
        $data[]= $v->toArray();
    }
    print_r($data);
    echo '</pre>';
}