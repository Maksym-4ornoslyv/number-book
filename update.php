<?php
    require_once 'config/connect.php';
    $people_id = $_GET['id'];

    $data =  mysqli_query($connect, "SELECT * FROM `book` WHERE `id` = '$people_id'");
    $data = mysqli_fetch_assoc($data);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id']?>">
        <label>Ім'я</label>
        <input type="text" name="name" placeholder="Ім'я" value="<?= $data['name'] ?>"><br><br>
        <label>Номер</label>
        <input type="number" name="number" placeholder="Номер" value="<?= $data['number'] ?>"><br><br>
        <label>Адреса</label>
        <input type="text" name="address" placeholder="Адреса" value="<?= $data['address'] ?>"><br><br>
        <label>Категорія</label>
        <select name="category" value="<?= $data['category'] ?>"><br><br>
            <option>Друзі</option>
            <option>Родичі</option>
            <option>Знайомі</option>
            <option>Послуги</option>
        </select><br><br>
        <button type="submit">Edit contact</button>
    </form>






</body>
</html>