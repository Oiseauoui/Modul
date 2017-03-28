<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 16:57
 */

class NewClass {
    public function getOne() {
        echo __FUNCTION__;
    }
    public function getTwo(){
        echo __METHOD__;
    }
}
$obj = new newClass();
$obj->getOne();
echo "<br>";
$obj->getTwo();
//getOne
//NewClass::getTwo