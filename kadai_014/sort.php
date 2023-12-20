<?php

$order = true;
$nums = [5,10,15,24,8];

function sort_2way($array, $order) {
    // 昇順か降順か？
    if($order) {
        echo '昇順で並び替えます<br>';
        sort($array);
        foreach($array as $sort) {
            echo $sort.'<br>';
        }
    }else {
        echo '降順で並び替えます<br>';
        rsort($array);
        foreach($array as $r_sort) {
            echo $r_sort.'<br>';
        }
    }
}

sort_2way($nums, $order);
