<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 11:34
 */
class Myclass
{
    public $a=10;
    public $b=20;
    private $c=30;
}
$number=new Myclass();
foreach ($number as $var=>$value) {
    echo "$value";
}// 10,20 Приватное свойство находится вне доступа