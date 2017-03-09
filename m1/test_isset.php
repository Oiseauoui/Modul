<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 07.03.2017
 * Time: 5:58
 */
// Вывести значение ключа на примере тернарного оператора

$arr = ['test' => 1];
$var = isset($arr['test'])  ? ['test'] : 'no key';
echo $var;

//$name = isset($_POST['test'])  ? $_POST['test'] : 'no key';
//echo $name;