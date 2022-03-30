<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Document</title>

	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-wrapper">
				<div class="logo">
					<?php
					// if (function_exists('custom-logo')) {
					the_custom_logo();
					// }
					?>
				</div>
				<nav class="header__nav">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'menu_class' => 'menu__list',
						'container' => 'ul'
					));
					?>
					<ul class="mobile__menu-list">
						<li class="mobile__menu-item">
							<a class="mobile__menu-link" href="#">Преимущества</a>
						</li>
						<li class="mobile__menu-item">
							<a class="mobile__menu-link" href="#">Каталог</a>
						</li>
						<li class="mobile__menu-item">
							<a class="mobile__menu-link" href="#">Почему выбирают нас</a>
						</li>
						<li class="mobile__menu-item">
							<a class="mobile__menu-link" href="#">Отзывы</a>
						</li>
						<li class="mobile__menu-item">
							<a class="mobile__menu-link" href="#">Контакты</a>
						</li>
					</ul>
				</nav>
				<div class="header__contact">
					<a class="header__phone" href="tel:+380977777777">+3 8 097 777 77 77</a>
					<a class="header__callback" href="#callback"><button class="header__callback-btn">Обратный звонок</button></a>
				</div>
				<div class="header__mobile-contact">
					<img src="images/header__mobile-contact.svg" alt="header__mobile-contact">
				</div>
				<div class="header__mobile-menu-btn">
					<div class="burger">
						<span class="burger-line"></span>
					</div>
					<span class="header__mobile-name">Меню</span>
				</div>
			</div>
		</div>
	</header>