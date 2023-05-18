<?php
$textStorage = array();

function add (string $title, string $text, array &$textStorage): void {
    $textStorage[] = array("title" => $title, "text" => $text);
}

function remove (int $text_index, array &$textStorage): bool {
    if(key_exists($text_index, $textStorage)){
        unset($textStorage[$text_index]);
        return true;
    }
        return false;
}

function edit (int $text_index, array &$textStorage, string $title = "", string $text = ""): bool {
    if(key_exists($text_index, $textStorage)){
        $old_title = $textStorage[$text_index]["title"];
        if((bool) $title){
            $old_title = $title;
        }
        $old_text = $textStorage[$text_index]["text"];
        if((bool) $text){
            $old_text = $text;
        }
        $textStorage[$text_index]["title"] =  $old_title;
        $textStorage[$text_index]["text"] =  $old_text;
        return true;
    }
        return false;
}

add("Тайтл 1", "текст 1", $textStorage);
add("Тайтл 2", "текст 2", $textStorage);
remove(0, $textStorage);
edit(0, $textStorage, "Изменил", "и текст");
edit(5, $textStorage, "Изменил", "и текст");



var_dump($textStorage);