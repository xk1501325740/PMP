<?php
function ReverseSentence($str){
    $res = explode(' ',$str);
   
    $res1 = array_reverse($res);
    
    $res2 = implode(' ',$res1);
    echo $res2;
}
 ReverseSentence('student. a am I');
