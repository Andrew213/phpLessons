<?php

/**
 * Реализуйте программу для поиска файла в файловой системе (на диске компьютера).
 * Чтобы не усложнять программу, будем искать только строгие совпадения имён: если ищем файл readme.txt, 
 * в результатах не будут отображаться файлы с именами __readme.txt, readme_new.txt, readme.html и так далее. 
 *  Будем искать все вхождения: если у вас есть файлы с одинаковыми именами в разных папках, нужно вывести их все.
 */

// папка (директория), с которой мы начинаем поиск,
 $searcRoot = "test";
 // имя искомого файла
 $searchName = "index.html";
 // результаты поиска.
 $searchResult = array();

 function fileSearch(string $searcRoot, string $searchName, array &$searchResult){
      $findedDirs = array_diff(scandir($searcRoot), array('..', '.'));

      foreach($findedDirs as $value){
        $checkIsDir = is_dir($searcRoot.DIRECTORY_SEPARATOR.$value);
        if($checkIsDir){
            fileSearch($searcRoot.DIRECTORY_SEPARATOR.$value, $searchName, $searchResult);
        } else {
            if($searchName === $value){
                $searchResult[] = array($searcRoot.DIRECTORY_SEPARATOR.$value => $value);
            }
        };
      }
 }

 fileSearch($searcRoot, $searchName, $searchResult);
 $filesWithSize = array_filter($searchResult, fn($el) => filesize(array_keys($el)[0]));
 var_dump($filesWithSize);