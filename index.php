<?php

function count($number,$value){
    $count = 0;
    for ($i = 0;$i < count($number);$i++){
        if ($number[$i] === $value){
            $count++;
        }
    }
    return $count;
}
echo count([2,9,3,8,2,6,7,9,0],9);
