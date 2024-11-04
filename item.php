<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ALEXANDR MORIENDI BUFFS in WHITE - ALEXANDR MORIENDI</title>
	<link rel="icon" type="image/png" href="image/icon.jpg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/item.css">
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	<main class="main">
		<div class="main__container container">
			<div class="maincard__slider slide">
				<img id="mainImage" src="image/slider-item/item-slide-1.jpg" alt="" class="item__main-slide">
				<ol class="maincard__slider-list slider-list">
					<li class="slider-list__item"><img id="thumbnail" src="image/slider-item/item-slide-1.jpg" alt=""
							class="slider-list__item-img" onclick="changeImage('image/slider-item/item-slide-1.jpg')">
					</li>
					<li class="slider-list__item">
						<img id="thumbnail" src="image/slider-item/item-slide-2.jpg" alt="" class="slider-list__item-img"
							onclick="changeImage('image/slider-item/item-slide-2.jpg')">
					</li>
					<li class="slider-list__item"><img id="thumbnail" src="image/slider-item/item-slide-3.jpg" alt=""
							class="slider-list__item-img" onclick="changeImage('image/slider-item/item-slide-3.jpg')"></li>
					<li class="slider-list__item"><img id="thumbnail" src="image/slider-item/item-slide-4.jpg" alt=""
							class="slider-list__item-img" onclick="changeImage('image/slider-item/item-slide-4.jpg')"></li>
					<li class="slider-list__item"><img id="thumbnail" src="image/slider-item/item-slide-5.jpg" alt=""
							class="slider-list__item-img" onclick="changeImage('image/slider-item/item-slide-5.jpg')"></li>
					<li class="slider-list__item"><img id="thumbnail" src="image/slider-item/item-slide-6.jpg" alt=""
							class="slider-list__item-img" onclick="changeImage('image/slider-item/item-slide-6.jpg')"></li>
				</ol>
			</div>
			<div class="maincard">
				<h2 class="maincard__title">ALEXANDR MORIENDI BUFFS in WHITE</h2>
				<p class="maincard__text">предзаказ</p>
				<ul class="maincard__list">
					<li class="maincard__list-item">соответствует размеру</li>
					<li class="maincard__list-item">100% нубук</li>
					<li class="maincard__list-item">брендированная подошва и стелька</li>
					<li class="maincard__list-item">пушистый материал внутри</li>
					<li class="maincard__list-item">ПВХ лейблы с 3D-текстом</li>
					<li class="maincard__list-item">широкие шнурки</li>
					<li class="maincard__list-item">тиснение логотипа на заднике</li>
					<li class="maincard__list-item">брендированная коробка на магнитах</li>
					<li class="maincard__list-item">отправка с 1-14 ноября</li>
				</ul>
				<p class="maincard__price">12000₽</p>
				<div class="maincard__size-guide size-guide">
					<a href="#" class="size-guide__link">SIZE GUIDE</a>
					<img src="image/table.png" alt="ТАБЛИЦА РАЗМЕРОВ" class="size-guide__img">
				</div>
				<select name="select-size" id="select-size" class="select__size">
					<option value="value 1" selected>размер</option>
					<option value="value 2">44EU / 10US / 9UK / 28СМ</option>
					<option value="value 3">42EU / 9US / 8UK / 27СМ</option>
					<option value="value 4">40EU / 8US / 7UK / 26СМ</option>
				</select>
				<button class="btn btn-add">заказать</button>
			</div>
		</div>
		<div class="line"></div>
	</main>
	<?php require_once "blocks/footer.php" ?>

	<script>
		function changeImage(imageSrc) {
			document.getElementById('mainImage').src = imageSrc;
		}

	</script>
</body>

</html>