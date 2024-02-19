<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];
$category = $_POST['category'];

mysqli_query($connect, "UPDATE `book` SET `name` = '$name', `number` = '$number', `address` = '$address', `category` = '$category' WHERE `book`.`id` = '$id'");

header('Location: /');