<header class="header">
	<div class="header__container container">
		<a href="index.php" class="header__logo logo"><img src="image/logo.png" alt="ALEXANDR MORIENDI"
				class="header__logo-img logo-img"></a>
		<div class="header__user-menu">
			<?php
			if (isset($_COOKIE['admincook'])) {
				echo '<a href="user.php" class="reg__link link">Кабинет ПАПЫ</a>
					<a href="lib/logout.php" class="reg__link link">Выйти</a>';
			} else {
				if (isset($_COOKIE['logincook'])) {
					echo '<a href="user.php" class="reg__link link">Личный кабинет</a>
					<a href="lib/logout.php" class="reg__link link">Выйти</a>';
				} else {
					echo '<a href="reg.php" class="reg__link link">Регистрация</a>
					<a href="auth.php" class="reg__link link">Авторизация</a>';
				}
			}
			?>

			<a href="cart.php" class="header__cart header__cart-link"><img src="image/cart.png" alt="Корзина"
					class="header__cart-img"></a>
		</div>

	</div>
</header>