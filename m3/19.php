<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 12:44
 */
class newClass {
    public static $props=[];
    static function __set($n, $v)
    {
        self::$props[$n]=$v;
    }
}
newClass::__set("prop", "value");
print_r(newClass::$props);
//Warning: The magic method __set()
// must have public visibility and
// cannot be static in C:\xampp\htdocs\modul\m3\19.php on line 10

//Warning: Missing argument 2 for
//newClass::__set(), called in C:\xampp\htdocs\modul\m3\19.php on line 15 and defined in C:\xampp\htdocs\modul\m3\19.php on line 10

//Notice: Undefined variable:
// v in C:\xampp\htdocs\modul\m3\19.php on line 12
//Array ( [propvalue] => )