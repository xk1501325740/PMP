<?php
function PrintMinNumber($numbers){
    $array = [];
    //首先进行大小排序
    $array[0] = max($numbers);
    $array[2] = min($numbers);
    $a0 = array_keys($numbers,$array[0]);
    $a2 = array_keys($numbers,$array[2]);
    $c = array_diff($numbers,$array)[1];
    $array[1] = $c;
    echo $array[0].$array[1].$array[2];


}

PrintMinNumber([51,321,456]);