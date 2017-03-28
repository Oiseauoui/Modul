<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 28.03.2017
 * Time: 12:50
 */

interface Baselogger
{
    public function baselog($param1, $param2);
}
interface Logger implements Baselogger {
    private function log();
}
class Mylog implements Logger {
    public  function baselog()
    {

    }
    public function log() {

    }
}
//Ответ - в интерфейсе не может
//быть закрытых методов, наследуются через extends
//декларация baselog не соответствует