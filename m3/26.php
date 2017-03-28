<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 15:20
 */

interface iTemplate {
    const MYCOST = 50;
    public function setVariable($var);
    public function getHtml($template);
}
class BadTemplate interface iTemplate {
    const MYCONST = 100;
    public function setVariable($var, $name)
    {
        //Код
    }
}
//Константы нельзя переопределять в интерфейсах,
//декларация setVariable должна быть совместима
//с интерфейсом, нет реализации getHtml