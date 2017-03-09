<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 07.03.2017
 * Time: 8:55
 */
//check if user visited not [main || login] and
if (isset($_GET['page']) && $_GET['page'] != 'login') {
//check if user is not logged in
    if (!isset($_COOKIE['logged']) || ((isset($_COOKIE['logged'])&& $_COOKIE['logged']))){
header('Location:/?page =login');
}
}
//process post forms
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if ($_GET['page'] == 'login') {
        if ($_POST['name'] == 'test' && $_POST['pass'] ==){
            setcookie('logged', '1', time()+14400, '/');
        }
    }
if ($_GET['page'] == 'settings'){
        setcookie('fcolor', $_POST['fcolor'], time()+14400, '/');
}
// header('Location:/');

}
function prepareContent($buffer) {
    $menu = file_get_contents("tpls/menu.html");
    //default content
    $content = file_get_contents("content/index.html");
    //check if we have template for given page
    if (isset($_GET['page'])){
        if (file_exists("content/{$_GET['page']}.html")){
            $content = file_get_contents("content/{$_GET['page']}.html");
        }
    }
//prepare output buffer
    $buffer = str_replace("{{menu}}", $menu, $buffer);
    $buffer = str_replace("{{content}}", $content, $buffer);
    if (isset($_COOKIE['fcolor']) && isset($_COOKIE['logged'])){
        $buffer = str_replace("<main>", "<main style='color: {$_COOKIE['fcolor]}'>", $buffer);
    }
    return $buffer;
}
//start buffer writer with callback
ob_start("prepareContent");
echo file_get_contents("index.html");
ob_end_flush();
ob_start();

