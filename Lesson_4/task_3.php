<?php
//Создайте переменную с ассоциативным массивом из трёх элементов,
// где ключами будут латинские буквы a, b и c, а значениями — любые строки на ваше усмотрение.
//Присвойте новой переменной значение в виде простого массива,
// являющегося набором ключей массива из первой переменной.
// И создайте третью переменную, значением которой должна быть строка,
// состоящая из значений второй (простого массива), разделённых пробелами.
// Выведите на экран значение третьей переменной с помощью конструкции echo.

$some_array = array("a" => "Andrew", "b" => "Bob", "c" => "Charlotte");
$new_arr = array();
foreach ($some_array as $key => $value){
     array_push($new_arr, $value);
}
$array_to_string = implode(" ",$new_arr);
echo $array_to_string;
