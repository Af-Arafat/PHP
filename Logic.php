<?php
// $n = 13;
// if($n %2 == 0){
//     echo "$n It's enven number";
// }else{
//     echo "$n is odd number";
// }

// if ($n >10){
//     echo "$n is greater then 10";
// }

$year = 2004;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 ==0){
    echo "{$year} is a leap year";
}elseif ($year %4 == 0 && $year % 100 == 0){
    echo "{$year} is not a leap year";
}elseif($year %4 == 0){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}