<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 17:36
 */
class Logger {
    public static function save($method) {
        $time = date('H-i-s');
        file_put_contents('log.txt', "[$time]".$method.PHP_EOL, FILE_APPEND);
    }
}
class Caller {
    public function hello()
    {
        Logger::save(__METHOD__);

    }
}
$caller = new Caller();
$caller->hello();
$caller->hello();
sleep(1);
$caller->hello();