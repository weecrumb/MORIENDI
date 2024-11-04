<?php

//данные пользователя дял бд
$login = $_POST['login'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// хэшируем пароль
$salt = '43793gbbfherbf#$#hf924f___rere#';
$password = md5($salt . $password);

// подключаемся к базе данных
require "db.php";

//вставлояем в запрос данные пользователя
$sql = 'INSERT INTO users(login,username,email,password) VALUES(?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $username, $email, $password]);

header('Location: ../index.php');