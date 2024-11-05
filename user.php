<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ЛИЧНЫЙ КАБИНЕТ - ALEXANDR MORIENDI</title>
	<link rel="icon" type="image/png" href="image/icon.jpg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cart.css">
	<link rel="stylesheet" href="css/user.css">
</head>

<body>
	<?php require_once "blocks/header.php" ?>

	<section class="usercab">
		<div class="usercab__container">
			<div class="usercab__text">
				<h2 class="usercab__title">ЛИЧНЫЙ КАБИНЕТ</h2>
				<p class="usercab__desc">
					<?php
					if (isset($_COOKIE['admincook'])) {
						echo 'Добро пожловать в профиль администратора';
					} else {
						echo 'Пользователь:' . ' ' . $_COOKIE['logincook'];
					} ?>


				</p>
			</div>
			<p class="history__desc">Ваша история заказов</p>
			<ul class="usercab__history history">
				<li class="history__item"><a class="history__link link" href="#">1 заказ</a></li>
				<li class="history__item"><a class="history__link link" href="#">2 заказ</a></li>
				<li class="history__item"><a class="history__link link" href="#">3 заказ</a></li>
				<li class="history__item"><a class="history__link link" href="#">4 заказ</a></li>
				<li class="history__item"><a class="history__link link" href="#">5 заказ</a></li>
				<li class="history__item"><a class="history__link link" href="#">6 заказ</a></li>
				<li class="history__item"><a class="history__link link" href="#">7 заказ</a></li>
			</ul>

		</div>
	</section>

	<?php require_once "blocks/footer.php" ?>
</body>

</html>