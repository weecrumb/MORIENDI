<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Оформление заказа - ALEXANDR MORIENDI</title>
	<link rel="icon" type="image/png" href="image/icon.jpg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cart.css">
	<link rel="stylesheet" href="css/order.css">
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	<section class="order">
		<div class="order__container container">
			<form class="order__form" action="#" method="post">
				<label for="surname" class="order__form-label">фамилия</label>
				<input type="text" class="order__form-input" name="surname">

				<label for="name" class="order__form-label">имя</label>
				<input type="text" class="order__form-input" name="name">

				<label for="patronymic" class="order__form-label">отчество</label>
				<input type="text" class="order__form-input" name="patronymic">

				<label for="phone" class="order__form-label">телефон</label>
				<input type="tel" class="order__form-input" name="phone">

				<label for="email" class="order__form-label">email</label>
				<input type="email" class="order__form-input" name="email">

				<label for="city" class="order__form-label">город</label>
				<input type="text" class="order__form-input" name="city">

				<label for="address" class="order__form-label">адрес</label>
				<input type="text" class="order__form-input" name="address">

				<label for="indeks" class="order__form-label">индекс</label>
				<input type="text" class="order__form-input" name="indeks">
			</form>
			<p class="choose-price__text">Способ оплаты</p>
			<label for="sbp">
				СБП
				<input type="radio" name="sbp" id="sbp">
			</label>
			<label for="card">
				Банковская карта
				<input type="radio" name="card" id="card">
			</label>
			<label for="crypto">
				Криптовалюта
				<input type="radio" name="crypto" id="crypto">
			</label>
			<button class="order__btn btn-cart">перейти к оплате</button>
		</div>
	</section>
	<?php require_once "blocks/footer.php" ?>
</body>

</html>