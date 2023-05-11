<?php
/*
Во время войны с галлами император Римской империи Юлий Цезарь использовал в своих письмах шифр, чтобы враги не смогли их прочитать. Шифр был достаточно простым и заключался в замене каждой буквы латинского алфавита на другую, стоящую на несколько позиций левее или правее в алфавите.
Количество позиций в алфавите, на которое нужно отступить для замены буквы, — это сдвиг шифра.
Например, если мы зададим сдвиг шифра равным +3, то букву A следует заменить на D, букву E на H и так далее.
Если мы дошли до конца алфавита, то отсчёт начинается сначала.
Так, при сдвиге +3 Y меняется на B. Для расшифровки нужно выполнить действия в обратном порядке.
Выведите результат (расшифрованное слово) на экран.
Для самопроверки используйте фразу caesar cipher: 
при сдвиге на три позиции мы получим зашифрованное сообщение
fdhvdu flskhu, а при сдвиге на 18 позиций — uswksj uahzwj.
*/

$alphabet = ["a","b","c","d","e","f","g","h","i", "j", "k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
//  строка для шифровки
$initial_string = "caesar cipher";
// кол-во сдвига
$shift = 18;

//массив кодов алфавита
$alphabet_code = array();
$alphabet_count = count($alphabet);

// заполняю массив кодов алфавита
for($i=0; $i<$alphabet_count; $i++){
    $alphabet_code[] = ord($alphabet[$i]);
}

//разбиваю текст на массив слов по пробелу;
$words_array = explode(" ", trim($initial_string));

//цикл A - итерируюсь по словам в тексте
for($i=0;$i<count($words_array);$i++){
    $word = $words_array[$i];
// делю слово на массив
    $word_array = str_split($word);
//цикл B - итерируюсь по буквам слова
    foreach($word_array as $key => $letter){
        // тут будет буква со сдвигом
        $letter_mask;
        //цикл C - итерируюсь по алфавиту
        for($k=0; $k<$alphabet_count; $k++){
            // если коды совпали
            if($alphabet_code[$k] === ord($letter)){
                $placeToShift = $k + $shift;
                // если сдвиг выходит за рамки
                if($placeToShift >= $alphabet_count){
                    $letter_mask = $alphabet_code[$placeToShift - $alphabet_count];
                }else{
                    $letter_mask = $alphabet_code[$placeToShift];
                }
                break;
            }
        }
        //меняю букву на букву со сдвигом
        $word_array[$key] = chr($letter_mask);
    }
    $words_array[$i] = implode($word_array);
}
// результат
var_dump(implode(" ",$words_array));