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
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	<main class="main">
		<div class="main__container container">
			<div class="main__menu navigation">
				<ul class="navigation__list">
					<li class="navigation__item"><a class="navigation__link" href="#">все</a></li>
					<li class="navigation__item"><a class="navigation__link" href="#">футболки</a></li>
					<li class="navigation__item"><a class="navigation__link" href="#">худи и свитера</a></li>
					<li class="navigation__item"><a class="navigation__link" href="#">деним</a></li>
					<li class="navigation__item"><a class="navigation__link" href="#">обувь</a></li>
				</ul>
			</div>
			<div class="main__cards cards">
				<?php
				require_once "lib/db.php";

				$sql = "SELECT * FROM products ORDER BY id DESC";
				$query = $pdo->prepare($sql);
				$query->execute();
				$cards = $query->fetchAll(PDO::FETCH_OBJ);
				foreach ($cards as $el) {
					echo '
						<div class="cards__item">
							<img src="image/' . $el->image . '" alt="кроссовки" class="cards__item-img">
							<a href="item.php?id=' . $el->id . '" class="cards__item-link">' . $el->name . '</a>
							<p class="cards__item-desc">' . $el->price . ' ₽</p>
						</div>
						';
				}
				?>
			</div>
		</div>
		<div class="line"></div>
	</main>
	<?php require_once "blocks/footer.php" ?>
</body>

</html>