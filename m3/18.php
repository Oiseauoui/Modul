<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 12:37
 */

Class A {
    public static function who() {
        echo __CLASS__;
    }
    public  static function test() {
        self::who();
    }
}
Class B extends A {
    public static function who()
    {
        echo __CLASS__;
    }
}
B::test(); //A