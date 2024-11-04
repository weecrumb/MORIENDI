<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ALEXANDR MORIENDI</title>
	<link rel="icon" type="image/png" href="image/icon.jpg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/cart.css">
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	<main class="main container">
		<section class="product-cart cart">
			<div class="product-cart__container container">
				<div class="product-cart__item">
					<div class="product-cart__item-lc">
						<a href="#" class="delete-link">x</a>
						<img src="image/card1.png" alt="product1" class="product-cart-img">
						<a href="#" class="product-cart__desc">MARCELO MIRACLES BUFFS in WHITE - 39EU / 6.5US / 7UK /
							24.5CM</a>
					</div>
					<div class="product-cart__item-rc">
						<p class="product-cart__price-before price">12000₱</p>
						<input type="number" name="product-cart__count" id="product-cart__count" class="product-cart__count">
						<p class="product-cart__price-after price">12000₱</p>
					</div>
				</div>
				<button class="product-cart-btn btn-cart">обновить корзину</button>
			</div>
		</section>
		<section class="coupon-cart cart">
			<div class="coupon-cart__container container">
				<input type="text" class="coupon-input">
				<button class="coupon-btn btn-cart">применить</button>
			</div>
		</section>
		<section class="price-cart cart">
			<div class="price-cart__container container">
				<h2 class="price-cart__title">итог</h2>
				<div class="price__before">
					<p>подитог</p>
					<p>12000₱</p>
				</div>
				<p class="price-cart__desc description">доставка</p>
				<form action="#" method="post" class="price-cart__form">
					<label>
						<input type="radio" name="delivery" id="radio-delivery">
						самовывоз в москве
					</label>
					<label>
						<input type="radio" name="delivery" id="radio-delivery">
						курьерская доставка cdek по москве: 450₱
					</label>
					<label>
						<input type="radio" name="delivery" id="radio-delivery">
						почта россии: 500₱
					</label>
					<label>
						<input type="radio" name="delivery" id="radio-delivery">
						самовывоз в москве за бабки
					</label>
				</form>
				<p class="price-cart__desc description">Варианты доставки будут обновлены при оформлении заказа.</p>
				<div class="cart-line"></div>
				<div class="price__after">
					<p>итого</p>
					<p>12500₱</p>
				</div>
				<button class="btn-cart">оформить заказ</button>
			</div>
		</section>
	</main>
	<?php require_once "blocks/footer.php" ?>
</body>

</html>