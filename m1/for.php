<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 06.03.2017
 * Time: 18:29
 */
for ($i = 1; $i<100; $i++){
    if($i% 3==0) {
        $str .= "A";
        //echo 'A';
    }
    if ($i%5==0) {
        $str .= "B";

        //echo 'B';
    }
    echo $str ."\n";
}


