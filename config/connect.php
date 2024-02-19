<?php
//коннект до БД
$connect = mysqli_connect('localhost', 'root', '', 'basic');
//вивід помилки(якщо буде)
if(!$connect) {
    die('Connection failed');
}