<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 14:49
 */
class Foo {
    public static $cnt = 0;
    public function foo() {
        ++self::$cnt;
    }
    function __construct()
    {
        ++self::$cnt;
    }
}
$f = new Foo;
$d = $f;
$c = clone $d;
$f->foo();
$d->foo();
$c->foo();
echo Foo::$cnt;
//4