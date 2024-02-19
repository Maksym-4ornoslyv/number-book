<?php
//підтягування данних з connect.php
require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/standart.css">
    <title>Тел. книга</title>
</head>
<body>

    <table>
        <tr>
            <th>Name</th>
            <th>Number</th>
            <th>Address</th>
            <th>Category</th>
        </tr>
        <?php
        $database = mysqli_query($connect, "SELECT * FROM `book`");
        $database = mysqli_fetch_all($database);
        //перебирання данних
        foreach ($database as $data) {
            ?>
                <!-- вивід данних з БД-->
            <tr>
                <td><?= $data[1]?></td>
                <td><?= $data[2]?></td>
                <td><?= $data[3]?></td>
                <td><?= $data[4]?></td>
                <td><a href="update.php?id=<?= $data[0]?>">Update</a></td>
                <td><a href="vendor/delete.php?id=<?= $data[0]?>" class="delete">Delete</a></td>
            </tr>
            <?php
        }

        ?>
    </table>

    <br>

    <form action="vendor/create.php" method="post">
        <label>Ім'я</label>
        <input type="text" name="name" placeholder="Ім'я" ><br><br>
        <label>Номер</label>
        <input type="number" name="number" placeholder="Номер"><br><br>
        <label>Адреса</label>
        <input type="text" name="address" placeholder="Адреса"><br><br>
        <label>Категорія</label>
        <select name="category"><br><br>
            <option>Друзі</option>
            <option>Родичі</option>
            <option>Знайомі</option>
            <option>Послуги</option>
        </select><br><br>
        <button type="submit">Add new contact</button>
    </form>


</body>
</html>
