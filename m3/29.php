<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 16:49
 */

class Foo {
    public static $my_static = 'foo';
}
class Bar extends Foo {
    public function foostatic() {
        return parent::$my_static;
    }
}
$foo = new Bar();
$foo->my_static = "Bar";
echo
var_dump($foo->foostatic());
//foo
//strict standarts accessing static
// property Bar::$my_static as non stati foo