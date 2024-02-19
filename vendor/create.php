<?php
require_once '../config/connect.php';

$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];
$category = $_POST['category'];

mysqli_query($connect, "INSERT INTO `book` (`id`, `name`, `number`, `address`, `category`) VALUES (NULL, '$name', '$number', '$address', '$category')");

header('Location: /index.php');