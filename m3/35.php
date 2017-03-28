<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 17:09
 */
class SimpleClass {
    //some code
}
$instance = new SimpleClass();
$assigned = $instance;
$reference = &$instance;
$instance->var = "some value";
$instance=null;
var_dump($instance);
var_dump($reference);
$var_dump($assigned);
//null
//Notice: Undefined variable: var_dump in
// C:\xampp\htdocs\modul\m3\35.php on line 18

//Fatal error: Function name must be a string
//in C:\xampp\htdocs\modul\m3\35.php on line 18