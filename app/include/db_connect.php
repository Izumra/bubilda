<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'contests_db');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connect)
{
    echo 'Ошибка подключения к БД (' . mysqli_connect_errno() . '): ' . mysqli_connect_error();
    exit();
}

?>