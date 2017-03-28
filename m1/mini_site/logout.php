<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 16.03.2017
 * Time: 12:22
 */
session_start();
session_destroy();
header('Location: modul/m1/mini_site/login.php');