<?php

// получаем данные от админа
$image = $_POST['image'];
$name = $_POST['name'];
$price = $_POST['price'];

// подключаемся к бд
require "db.php";

//запрос SQL
$sql = 'INSERT INTO products(image,name,price) VALUES(?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$image, $name, $price]);

header('Location: ../index.php');