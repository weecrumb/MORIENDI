<?php

//данные пользователя дял бд
$login = $_POST['login'];
$password = $_POST['password'];

// хэшируем пароль
$salt = '43793gbbfherbf#$#hf924f___rere#';
$password = md5($salt . $password);
$adminPasswordHash = md5($salt . 'H6Eo4LRb');
// подключаемся к базе данных
require "db.php";

//ищем пользователя по инлдентификатору у которого логин и пароль такие какие ввёл пользователь
$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
// готовим запрос
$query = $pdo->prepare($sql);
// выполняем запрос
$query->execute([$login, $password]);

if ($query->rowCount() == 0) {
	echo "пользователь не найден";
} else {
	if ($login === 'admincrumb' && $password === $adminPasswordHash) {
		echo "вы вошли как администратор";
		setcookie('admincook', $login, time() + 3600 * 24 * 30, "/");
		header('Location: ../user.php');
	} else {
		setcookie('logincook', $login, time() + 3600 * 24 * 30, "/");
		header('Location: ../user.php');
	}

}