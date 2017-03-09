
<form action ="/" method = "post" enctype ="multipart/form-data">
    <input type="text" name="fname">
    <input type="file" name="ffile">
    <input type="submit" value="submit">


</form>


<?php
// Напишите код, который будет
// сохранять загруженный
//через форму файл
//отправка формы на сервер
//сохранение скрипта

move_uploaded_file($_FILES['ffile']['tmp_name'] //откуда
    , '/uploads/'. $_POST['fname']); // куда загружаем

