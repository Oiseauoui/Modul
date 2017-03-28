<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 06.03.2017
 * Time: 21:47
 */
// Напишите функцию не использу функции unique


echo "<pre>";
$arr = [5, '5', 1, 2, 4, 6, '6', '2', 3, 10];

var_dump(array_unique($arr));
function my_array_unique($arr)
{
    $new_array = [];
    foreach ($arr as $value) {
        foreach ($new_array as $index =>$new_value) {
            if($value == $new_value) {
                unset($new_array[$index]);
                continue 2;
            } else {
                $new_array[] = $value;
            }

        }

    }
    return $new_array;
}
var_dump((my_array_unique($arr)));