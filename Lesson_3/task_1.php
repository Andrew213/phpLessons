<?php
$a = 4;
$b = 10 * rand(1,3);
var_dump($a, $b);
$c = $a * $b;

if($c < 100){
    echo "Меньше 100";
}elseif($c < 200){
    echo "Меньше 200";
}else{
    echo "Все остальное";
}