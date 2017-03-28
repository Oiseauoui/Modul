<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 14:39
 */

class A {
    static $word = "hello";
    static function hello()
    {
        print static::$word;// если бы было self,то это было бы раннее стптистическое
                         // связывание -  hello
    }
}
class B extends A {
    static $word = "bye";
}
B::hello();
//bye Позднее статистическое связывание
