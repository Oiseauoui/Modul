<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 15:12
 */

class myClass
{
var
    private $property = "assigned";

    public function getProperty()
    {
        return $this->property;
    }
}
$obj = new myClass;
$obj->getProperty();
//Parse error: syntax error, unexpected 'private' (T_PRIVATE),
// expecting variable (T_VARIABLE) in C:\xampp\htdocs\modul\m3\25.php on line 12
