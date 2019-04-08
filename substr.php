<?php

$pos = strstr('I wish a great mood and a hope for tomorrow to everyone on this beautiful day', 'a h');
$pos1 = strpos('I wish a great mood and a hope for tomorrow to everyone on this beautiful day', 'for');
echo $pos."\n";
echo $pos1;

//echo substr('great mood and a hope',-4, -3 );

//$a = 8;
//$d = 9;
//$v = 7;
//
//if ($a > $d && $a < $v || $a < $d && $a > $v){
//  echo  $a . ' среднее';
//}elseif ($a < $d && $d < $v || $a > $d && $d > $v){
//    echo $d . ' среднее';
//}
//else echo $v . ' среднее';