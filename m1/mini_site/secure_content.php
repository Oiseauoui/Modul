<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 16.03.2017
 * Time: 12:03
 */

session_start();
if(isset($_SESSION['login'])) {
    $colors = ['black', 'red', 'yellow', 'blue'];

    ?>
    <p style="color: <?php if (!empty($_GET))
    {
        $_SESSION['color'] = $_GET['color'];
        echo $_SESSION['color'];
    } else echo $_SESSION['color']; ?>"
 <p>
     Введение

Объектно-ориентированное программирование (ООП) - это подход к программированию, который использует объекты для взаимосвязи между компонентами системы при построении приложений.

Одним из основных преимуществ ООП перед структурным программированием является совмещение данных и функционала, что позволяет работать с объектами, суть которых максимально приближена к аналогичным объектам из реального мира.

Основные парадигмы объектно-ориентированного подхода это:

Инкапсуляция (encapsulation)
Наследование (inheritance)
Полиморфизм (polymorphism)
Инкапсуляция позволяет скрыть внутреннюю реализацию объекта, что делает API для работы с объектами понятным и неизбыточным.

Наследование позволяет строить иерархии объектов, в которых производные классы наследуют данные и поведение классов-предков.


 </p>


<form action="
}">
    <select name = "color" id="color">
        <?php foreach ($colors as $color) : ?>
         <option value="<?= $color ?>" <?php if (isset($_SESSION['color']) && $color == $_SESSION['color'])
             echo  'selected'; ?> > <?=$color?> </option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="Выбрать">
</form>
<p><a href="logout.php">Выйти</a> </p>
<?php
}else {
   header('Location:/modul/m1/mini_site/login.php');
}
?>