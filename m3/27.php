<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 15:59
 */

abstract class AbstractClass {
    abstract protected function prefixName($name);
}
class ConcreteClass extends AbstractClass {
    public function prefixName($name, $value = "")(//код метода)
    }
    //да