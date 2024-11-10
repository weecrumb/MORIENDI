<?php
require_once 'lib/db.php';
// получаем id товара из URL
if (isset($_GET['id'])) {
	$productId = (int) $_GET['id'];

	// получаем информацию из БД по id товара
	$sql = "SELECT * FROM products WHERE id = :id";
	$query = $pdo->prepare($sql);
	$query->execute(['id' => $productId]);
	$product = $query->fetch(PDO::FETCH_ASSOC);


	//если товара нет, то перенаправляем на главную страницу
	if (!$product) {
		header('Location: index.php');
		exit();
	}
} else {
	// если id не передан, перенаправляем на главную страницу 
	header('Location: index.php');
	exit();
}
$product['image'] = explode(',', $product['image']);
$product['size'] = explode(';', $product['size']);

// Обработка добавления товара в корзину
if (isset($_POST['add_to_cart'])) {
	$item_id = $productId; // ID товара из URL

	// Получаем текущие товары из куки
	$cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

	// Добавляем товар в корзину, если его там еще нет
	if (!in_array($item_id, $cart)) {
		$cart[] = $item_id;
	}

	// Сохраняем обновленный массив в куки
	setcookie('cart', json_encode($cart), time() + (86400 * 30), "/"); // Кука хранится 30 дней

	// Перенаправление на страницу корзины
	header("Location: cart.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo htmlspecialchars($product['name']); ?> - ALEXANDR MORIENDI
	</title>
	<link rel="icon" type="image/png" href="image/icon.jpg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/item.css">
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	<main class="main">
		<div class="main__container container">
			<!-- слайдер -->
			<?php if (count($product['image']) > 1): ?>
				<div class="maincard__slider slide">

					<!-- главная картинка в слайдере -->
					<img id="mainImage" src="image/products/<?php echo htmlspecialchars($product['image'][0]); ?>" alt=""
						class="item__main-slide">

					<!-- список картинок для слайдера -->
					<ol class="maincard__slider-list slider-list">
						<?php foreach ($product['image'] as $image): ?>
							<li class="slider-list__item">
								<img id="thumbnail" src="image/products/<?php echo htmlspecialchars($image); ?>" alt=""
									class="slider-list__item-img"
									onclick="changeImage('image/products/<?php echo htmlspecialchars($image); ?>')">
							</li>
						<?php endforeach; ?>
					</ol>
				</div>
			<?php else: ?>
				<!-- елси изображение только одно -->
				<img id="mainImage" src="image/products/<?php echo htmlspecialchars($product['image'][0]); ?>" alt=""
					class="item__main-slide">
			<?php endif; ?>
			<!-- описание карточки товара -->
			<div class="maincard">
				<!-- заголовок товара -->
				<h2 class="maincard__title">
					<?php echo htmlspecialchars($product['name']); ?>
				</h2>
				<!-- описание товара -->
				<?php $descriptionLines = explode(';', $product['description']); ?>
				<ul class="maincard__list">
					<?php foreach ($descriptionLines as $line): ?>
						<li class="maincard__list-item">
							<?php echo htmlspecialchars(trim($line)); ?>
						</li>
					<?php endforeach; ?>
				</ul>
				<!-- цена товара -->
				<p class="maincard__price">
					<?php echo htmlspecialchars($product['price']); ?>₽
				</p>
				<!-- табличка или изображение с информацией как выбрать товар -->
				<div class="maincard__size-guide size-guide">
					<a id="sizeGuideLink" href="#" class="size-guide__link">SIZE GUIDE</a>
					<img id="sizeGuideImage" src="image/table.png" alt="ТАБЛИЦА РАЗМЕРОВ" class="size-guide__img">
				</div>
				<!-- выбор размера -->
				<select name="select-size" id="select-size" class="select__size">
					<option value="" selected>размер</option>
					<?php foreach ($product['size'] as $size): ?>
						<option value="<?php echo htmlspecialchars(trim($size)); ?>">
							<?php echo htmlspecialchars(trim($size)); ?>
						</option>
					<?php endforeach; ?>
				</select>
				<form action="item.php?id=<?php echo $productId; ?>" method="post">
					<input type="hidden" name="item_id" value="<?php echo $productId; ?>"> <!-- ID товара -->
					<button type="submit" name="add_to_cart" class="btn btn-add">Заказать</button>
				</form>
			</div>
		</div>
		<div class="line"></div>
	</main>
	<?php require_once "blocks/footer.php" ?>

	<script>
		function changeImage(imageSrc) {
			document.getElementById('mainImage').src = imageSrc;
		}

		// функционал выбора размера
		const sizeGuideLink = document.getElementById('sizeGuideLink');
		const sizeGuideImage = document.getElementById('sizeGuideImage');
		// Добавляем обработчик события на клик по ссылке
		sizeGuideLink.addEventListener('click', function (event) {
			event.preventDefault(); // Предотвращаем переход по ссылке
			// Проверяем текущее состояние отображения изображения
			const isImageVisible = window.getComputedStyle(sizeGuideImage).display !== 'none';
			// Переключаем видимость изображения
			if (!isImageVisible) {
				sizeGuideImage.style.display = 'block'; // Показываем изображение
			} else {
				sizeGuideImage.style.display = 'none'; // Скрываем изображение
			}
		});
	</script>
	<script src="script.js"></script>
</body>

</html>