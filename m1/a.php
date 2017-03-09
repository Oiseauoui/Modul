<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 06.03.2017
 * Time: 18:47
 */
$a = 7;
echo $a++;//8
echo '<br>';

$f = '10test';
//var_dump(is_integer($f));//nothing
//echo (is_string($f));//1
echo (is_bool($f));//nothing
echo 20*2 +5;// 45
echo "<br>";

$a = 1;
$b = 0;
$c ='';
var_dump($a = null);// hothing
var_dump($b = null);//null
var_dump($c = null);//null
$b = 5;
echo ${'b'};//5
echo '<br>';
$a = 'b';
echo ${'a'};//b
echo '<br>';
var_dump( ${'a'});

