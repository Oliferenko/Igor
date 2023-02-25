<?php
$uploaddir = '../img/'; // <- это всего лишь строка
$uploadfile = $uploaddir.$_FILES['файл пользователя']['имя'];
move_uploaded_file($_FILES['файл пользователя']["tmp_name"], $uploadfile);
$ uploadfileecho;