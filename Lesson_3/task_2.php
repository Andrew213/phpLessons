<?php
$a = rand(1,9);
$b = 10 * rand(1,3);
var_dump($a, $b);
$c = $a * $b;

switch(true){
    case $c >= 0 && $c < 100:
        echo "Больше или равно нулю и меньше 100";
        break;
    case $c >= 100 && $c < 200:
        echo "Больше или равно 100 и меньше 200";
        break;
    case $c >=200 && $c < 300;
        echo "Больше или равно 200 и меньше 200";
        break;
    default:
        echo "все остальное";
}
