<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>АВТОРИЗАЦИЯ - ALEXANDR MORIENDI</title>
	<link rel="icon" type="image/png" href="image/icon.jpg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	<main class="main">
		<div class="container">
			<h1>Авторизация</h1>
			<form action="lib/auth.php" method="post" class="formreg">

				<label>Логин</label>
				<input type="text" name="login">

				<label>Пароль</label>
				<input type="password" name="password">

				<button class="btn" type="submit">Войти</button>

			</form>
		</div>
	</main>
	<?php require_once "blocks/footer.php" ?>
</body>

</html>