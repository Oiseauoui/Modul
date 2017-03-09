<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 07.03.2017
 * Time: 7:32
 */

//напишите функцию array_to_file, которая
//сoхранит массив в фаил
//для последующего чтения

echo 'Задание 36';
echo "<br>";

function array_to_file(){
    $var = [1,2,3,4,5,6];
   file_put_contents("array.txt",serialize($var));//записать фаил
// сохраняем строку
    var_dump(serialize($var));
    echo "<br>";

    echo 'Задание 37';

    echo"<pre>";

    $str = file_get_contents("array.txt");// читаем с файла
    var_dump(unserialize($str));
}
array_to_file();
