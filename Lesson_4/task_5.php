<?php
// Скопируйте код предыдущего задания в новый файл с этим заданием.
// Возьмите значения массива из пункта 3 предыдущего задания
// с помощью одной из функций разбиения массива на ключи/значения
// и положите результат в новую переменную.
// Добавьте к полученному массиву дополнительный простой массив из одного (!) элемента,
// которого нет среди уже существующих элементов, а результат сохраните в новую переменную.
// Теперь объедините полученный простой массив на предыдущем шаге со списком значений массива, созданного в пункте 1 предыдущего задания.
//Полученный объединённый массив присвойте переменной и выведите её на экран.

$some_array = array("a" => "Andrew", "b" => "Bob", "c" => "Charlotte", "d" => "Andrew", "e" => "Charlotte");
$array_count = count($some_array);
$flipped_array = array_flip($some_array);
$array_count2 = count($flipped_array);


$values_from_flipped_array = array_values($flipped_array);
$merged_array = array_merge($values_from_flipped_array, array("f"));
var_dump($flipped_array);

$finally_array = array_combine($merged_array,array_values($some_array));
var_dump($finally_array);
