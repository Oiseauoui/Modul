<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 06.03.2017
 * Time: 21:19
 */

//Вывести число 20

$a = 10;
function myfunc($var)
{
    global $a;
    if(!is_int($var)) {
        echo "not int!";
    } else {
        $var +=10;
    }
    $a=$var;
    }
myfunc($a);
echo "<br>";
echo "a = $a";//20