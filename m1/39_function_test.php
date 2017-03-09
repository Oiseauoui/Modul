<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 07.03.2017
 * Time: 8:31
 */
//Что выведится на экран?

$a = 10;
function test() {
    //global $a; // если бы была
    // глобальная переменная, тогда условие
    // выполнялось бы
    if($a % 2) {
        echo 'A';
    }else {
        echo 'B';
    }
}
test($a); // Notice: Undefined variable: a and B