<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 07.03.2017
 * Time: 6:53
 */

// Написать функцию, которая выводит
//список файлов в заданной категории
//который содержит искомое слово,
//задается как параметр функции

function listDir($dir, $word)
{
    $handle = opendir($dir);
    while ($line = readdir($handle)) {
       if(strstr($line, $word)) {
           echo $line . "<br>";
       }
       // echo $line;

    }
    closedir($handle);
}
listDir('C:xampp/htdocs/Homeworks', 'index');