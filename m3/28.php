<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 16:37
 */
class MyExeption extends Exception {
    //code
}
class myClass {
    function  __destruct()
    {
     echo "Закрыть соединение с базой";
     throw new Exception("Ошибка при завершении транзакции");
    }

}
class myNewClass {
    function __destruct()
    {
     echo "Закрываю лог фаил";
     throw new Exception("Ошибка при закрытии лог фаила");
    }
}
try{    $db = new myClass();
    $log = new myNewClass();
}
catch (Exception $e) {
    echo $e->getMessage();
}
catch (MyExeption $m) {
    echo $m->getMessage();
}
//Закрываю лог фаил
//Fatal error: Uncaught exception 'Exception'
// with message 'Ошибка при закрытии лог фаила
//' in C:\xampp\htdocs\modul\m3\28.php:23 Stack
// trace: #0 [internal function]: myNewClass->__destruct()
// #1 {main} thrown in C:\xampp\htdocs\modul\m3\28.php on
// line 23
