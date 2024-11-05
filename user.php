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
			<?php
			if (isset($_COOKIE['admincook'])) {
			} else {
				echo '
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
				';
			} ?>




			<?php
			if (isset($_COOKIE['admincook'])) {
				echo '
					<div class="admin-add container">
						<ul class="admin__links">
							<li><a href="#" id="open-popup" class="link">Добавить товар</a></li>
							
							<div class="popup" id="popup">
								<div class="popup-content">
									<span class="close-popup" id="close-popup">&times;</span>
									<form action="lib/additem.php" method="post" class="form-add">
											<label>Изображение</label>
											<input type="file" name="image">
											<label>Название</label>
											<input type="text" name="name">
											<label>Цена</label>
											<input type="text" name="price">
											<button class="btn-cart addcard-btn" type="submit">Добавить товар</button>
									</form>
								</div>
							</div>

							<li><a href="#" class="link link-add">Просмотр заказов</a></li>
						</ul>
					</div>
					';
			}
			?>


		</div>
	</section>

	<?php require_once "blocks/footer.php" ?>
	<script src="script.js"></script>
</body>

</html>