<?php
$a = rand(0,1);
echo $a;
$b = $a == 0 ? null : rand(1,3);
echo "\n";
echo $b;
echo "\n";

switch ($b){
    case null:
        echo "это null";
        break;
    case 1:
        echo "это 1";
        break;
    default:
        echo "это по дефолту";
};
echo "\n";

var_dump(isset($b));

$c = $b ?: rand(20,30);
echo "\n";
echo $c;




