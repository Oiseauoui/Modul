<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 16.03.2017
 * Time: 11:50
 */
session_start();
if(!empty($_POST)) {
    $login = isset($_POST['login']) ? $_POST['login'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    if(!empty($login) && $password == "123") {
        $_SESSION['login'] = $login;
        $_SESSION['color'] = 'red';
       header('Location:/modul/m1/mini_site/secure_content.php');
        exit();
    }
}
?>
<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Войти">
</form>
