<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/global.css" />
	<link rel="stylesheet" href="css/_fonts.css" />


	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/_header.css" />
	<link rel="stylesheet" href="css/_section-main.css" />
	<link rel="stylesheet" href="css/_why_choose_diapers.css" />
	<link rel="stylesheet" href="css/_choose_color.css" />
	<link rel="stylesheet" href="css/_buy_with.css" />
	<link rel="stylesheet" href="css/_why_choose_us.css" />
	<link rel="stylesheet" href="css/_reviews.css" />
	<link rel="stylesheet" href="css/_reviews-slider.css" />
	<link rel="stylesheet" href="css/_gallery.css" />
	<link rel="stylesheet" href="css/_how_to_order.css" />
	<link rel="stylesheet" href="css/_contacts.css" />
	<link rel="stylesheet" href="css/_map.css" />
	<link rel="stylesheet" href="css/_social.css" />
	<link rel="stylesheet" href="css/_checkout__btn.css" />
	<link rel="stylesheet" href="css/_popUp.css" />
	<link rel="stylesheet" href="css/_header__mobile-menu.css" />
	<link rel="stylesheet" href="css/media.css" />

	<title>Document</title>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header-wrapper">
				<div class="logo">
					<img class="logo-img" src="images/logo-img.png" alt="logo" />
				</div>
				<nav class="header__nav">
					<ul class="menu__list">
						<li class="menu__item">
							<a class="menu__link" href="#why_choose_diapers">Преимущества</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="#choose_color">Каталог</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="#why_choose_us">Почему выбирают нас</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="#reviews">Отзывы</a>
						</li>
						<li class="menu__item">
							<a class="menu__link" href="#footer">Контакты</a>
						</li>
					</ul>
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
	<main class="content">
		<section class="main" id="main">
			<div class="container container__main">
				<div class="main__box-wrapper">
					<div class="main__box-left">
						<div class="main__info">
							<h1 class="page__title">
								Пеленки о которых мечтает каждая мама
							</h1>
							<p class="page__text">
								Наша компания заботится о здоровье детей
							</p>
						</div>
						<a class="btn btn-order" href="#">Заказать</a>
						<div class="main__benefits">
							<div class="benefits__item">
								<img class="benefits__img" src="images/benefits/benefits-1.svg" alt="benefits-1" />
								<p class="benefits__text">Экологичный товар</p>
							</div>
							<div class="benefits__item">
								<img class="benefits__img" src="images/benefits/benefits-2.svg" alt="benefits-2" />
								<p class="benefits__text">Официальный дистрибьютор</p>
							</div>
							<div class="benefits__item">
								<img class="benefits__img" src="images/benefits/benefits-3.svg" alt="benefits-3" />
								<p class="benefits__text">Доставка по всей Украине</p>
							</div>
						</div>
					</div>
					<div class="main__box-right">
						<div class="swiper main__slider">
							<span class="cloud"></span>
							<div class="swiper-wrapper main__slider-wrapper">
								<img class="main__slider-img swiper-slide" src="images/slider/slider-3.png" alt="slider-3" />
								<img class="main__slider-img swiper-slide" src="images/slider/slider-3.png" alt="slider-3" />
								<img class="main__slider-img swiper-slide" src="images/slider/slider-3.png" alt="slider-3" />
							</div>
							<div class="swiper-pagination"></div>
							<div class="main__slider-button-next"></div>
							<div class="main__slider-button-prev"></div>
						</div>
					</div>
					<a class="btn btn-order-mobile" href="#">Заказать</a>
					<div class="benefits-mobile-block">
						<div class="main__benefits-mobile">
							<div class="benefits__item">
								<img class="benefits__img" src="images/benefits/benefits-1.svg" alt="benefits-1" />
								<p class="benefits__text">Экологичный товар</p>
							</div>
							<div class="benefits__item">
								<img class="benefits__img" src="images/benefits/benefits-2.svg" alt="benefits-2" />
								<p class="benefits__text">Официальный дистрибьютор</p>
							</div>
							<div class="benefits__item">
								<img class="benefits__img" src="images/benefits/benefits-3.svg" alt="benefits-3" />
								<p class="benefits__text">Доставка по всей Украине</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="why_choose_diapers" id="why_choose_diapers">
			<div class="container">
				<h2 class="section__title">Почему выбирают наши пеленки?</h2>
				<div class="advantages">
					<div class="advantages__item">
						<div class="advantages__img">
							<img class="advantages__icon" src="images/advantages/icon-1.svg" alt="#" />
						</div>
						<h4 class="advantages__title">Высокая<br> прочность</h4>
						<p class="advantages__text">
							Для тканей изготовленных из хлопка характерны относительно высокая прочность, химическая стойкость, и
							малая доля упругой деформации, вследствие чего изделия из хлопка сильно сминаются.
						</p>
					</div>
					<div class="advantages__item">
						<div class="advantages__img">
							<img class="advantages__icon" src="images/advantages/icon-2.svg" alt="#" />
						</div>
						<h4 class="advantages__title">
							Антиаллергичные и противогрибковые свойства
						</h4>
						<p class="advantages__text">
							Для тканей изготовленных из хлопка характерны относительно высокая прочность, химическая стойкость, и
							малая доля упругой деформации, вследствие чего изделия из хлопка сильно сминаются.
						</p>
					</div>
					<div class="advantages__item">
						<div class="advantages__img">
							<img class="advantages__icon" src="images/advantages/icon-3.svg" alt="#" />
						</div>
						<h4 class="advantages__title">
							Ощущение прохлады в летний период
						</h4>
						<p class="advantages__text">
							Для тканей изготовленных из хлопка характерны относительно высокая прочность, химическая стойкость, и
							малая доля упругой деформации, вследствие чего изделия из хлопка сильно сминаются.
						</p>
					</div>
					<div class="advantages__item">
						<div class="advantages__img">
							<img class="advantages__icon" src="images/advantages/icon-4.svg" alt="#" />
						</div>
						<h4 class="advantages__title">Защита от ультрафиолета</h4>
						<p class="advantages__text">
							Для тканей изготовленных из хлопка характерны относительно высокая прочность, химическая стойкость, и
							малая доля упругой деформации, вследствие чего изделия из хлопка сильно сминаются.
						</p>
					</div>
					<div class="advantages__item">
						<div class="advantages__img">
							<img class="advantages__icon" src="images/advantages/icon-5.svg" alt="#" />
						</div>
						<h4 class="advantages__title">Тепло и уютно зимой</h4>
						<p class="advantages__text">
							Для тканей изготовленных из хлопка характерны относительно высокая прочность, химическая стойкость, и
							малая доля упругой деформации, вследствие чего изделия из хлопка сильно сминаются.
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="choose_color" id="choose_color">
			<div class="container">
				<h2 class="section__title">Выберите свой вариант расцветки</h2>
				<div class="cards">
					<div class="card__item">
						<div class="card__header">
							<img class="card__img" src="images/cards/card-1.jpg" alt="card-1" />
						</div>
						<div class="card__description">
							<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
							<p class="card__color">Голубой</p>
							<p class="card__price">735 грн</p>
						</div>
						<div class="card__footer">
							<div class="card-input-wrapper">
								<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
								<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
								<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
							</div>
							<button class="btn card__footer-btn">Купить</button>
						</div>
					</div>
					<div class="card__item">
						<div class="card__header">
							<img class="card__img" src="images/cards/card-2.jpg" alt="card-2" />
						</div>
						<div class="card__description">
							<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
							<p class="card__color">Серый</p>
							<p class="card__price">735 грн</p>
						</div>
						<div class="card__footer">
							<div class="card-input-wrapper">
								<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
								<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
								<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
							</div>
							<button class="btn card__footer-btn">Купить</button>
						</div>
					</div>
					<div class="card__item">
						<div class="card__header">
							<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
						</div>
						<div class="card__description">
							<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
							<p class="card__color">Розовый</p>
							<p class="card__price">735 грн</p>
						</div>
						<div class="card__footer">
							<div class="card-input-wrapper">
								<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
								<input class="card__footer-input" type="number" value="1" min="4" max="10" step="1" />
								<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
							</div>
							<button class="btn card__footer-btn">Купить</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="buy_with" id="buy_with">
			<div class="container">
				<h2 class="section__title">С этим товаром покупают</h2>
				<div class="cards__slider">
					<div class="swiper cards__slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="card__item">
									<div class="card__header">
										<img class="card__img" src="images/cards/card-3.jpg" alt="card-3" />
									</div>
									<div class="card__description">
										<h3 class="card__title">Пеленка Effiki 70x100 см</h3>
										<p class="card__price">735 грн</p>
									</div>
									<div class="card__footer">
										<div class="card-input-wrapper">
											<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
											<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
											<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<path
														d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
														fill="#414141" />
												</svg>
											</span>
										</div>
										<button class="btn card__footer-btn">Купить</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="cards__slider-button-next"></div>
				<div class="cards__slider-button-prev"></div>
		</section>
		<section class="why_choose_us" id="why_choose_us">
			<div class="container">
				<h2 class="section__title">Почему выбирают нас</h2>
				<div class="why_choose_us-content">
					<div class="why_choose_us-wrapper-left">
						<div class="why_choose_us-item">
							<div class="why_choose_us-item-header">
								<img class="why_choose_us-icon" src="images/why_choose_us/icon-1.svg" alt="icon-1" />
							</div>
							<div class="why_choose_us-item-description">
								<h4 class="why_choose_us-item-title">
									Все наши товары 100% экологичны
								</h4>
								<p class="why_choose_us-item-text">
									Товары, безопасные не только для здоровья человека, но и для окружающей среды
								</p>
							</div>
						</div>
						<div class="why_choose_us-item">
							<div class="why_choose_us-item-header">
								<img class="why_choose_us-icon" src="images/why_choose_us/icon-2.svg" alt="icon-2" />
							</div>
							<div class="why_choose_us-item-description">
								<h4 class="why_choose_us-item-title">
									Официальный дистрибьютор
								</h4>
								<p class="why_choose_us-item-text">
									Являемся официальным представителем компании производителя
								</p>
							</div>
						</div>
					</div>
					<div class="why_choose_us-center">
						<div class="why_choose_us-img">
							<img src="images/why_choose_us.png" alt="why_choose_us-main-img" />
						</div>
					</div>
					<div class="why_choose_us-wrapper-right">

						<div class="why_choose_us-item">
							<div class="why_choose_us-item-header">
								<img class="why_choose_us-icon" src="images/why_choose_us/icon-3.svg" alt="icon-3" />
							</div>
							<div class="why_choose_us-item-description">
								<h4 class="why_choose_us-item-title">
									Имеют Европейские сертификаты качества
								</h4>
								<p class="why_choose_us-item-text">
									Товары, безопасные не только для здоровья человека, но и для окружающей среды
								</p>
							</div>
						</div>
						<div class="why_choose_us-item">
							<div class="why_choose_us-item-header">
								<img class="why_choose_us-icon" src="images/why_choose_us/icon-4.svg" alt="icon-4" />
							</div>
							<div class="why_choose_us-item-description">
								<h4 class="why_choose_us-item-title">100% Гарантия</h4>
								<p class="why_choose_us-item-text">
									Вернем деньги если что то Вам не понравится
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="reviews" id="reviews">
			<h2 class="section__title">Что о нас пишут</h2>
			<div class="reviews__wrapper">
				<div class="swiper mySwiper reviews__slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img class="reviews__author-photo-img" src="images/reviews/reviews-1.png" alt="reviews-1-author" />
							<div class="reviews__author-info">
								<p class="reviews__author-name">Екатерина Минаева</p>
								<p class="reviews__authot-text">
									Заказала в данном онлайн-магазине в первые. Долго сомневалась, но вежливый менеджер ответил на все мои
									вопросы и посоветовал, какую лучше приобрести пеленку и аксессуары. Очень довольна покупками!!!
								</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img class="reviews__author-photo-img" src="images/reviews/reviews-1.png" alt="reviews-1-author" />
							<div class="reviews__author-info">
								<p class="reviews__author-name">Екатерина Минаева</p>
								<p class="reviews__authot-text">
									Заказала в данном онлайн-магазине в первые. Долго сомневалась, но вежливый менеджер ответил на все мои
									вопросы и посоветовал, какую лучше приобрести пеленку и аксессуары. Очень довольна покупками!!!
								</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img class="reviews__author-photo-img" src="images/reviews/reviews-1.png" alt="reviews-1-author" />
							<div class="reviews__author-info">
								<p class="reviews__author-name">Екатерина Минаева</p>
								<p class="reviews__authot-text">
									Заказала в данном онлайн-магазине в первые. Долго сомневалась, но вежливый менеджер ответил на все мои
									вопросы и посоветовал, какую лучше приобрести пеленку и аксессуары. Очень довольна покупками!!!
								</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img class="reviews__author-photo-img" src="images/reviews/reviews-1.png" alt="reviews-1-author" />
							<div class="reviews__author-info">
								<p class="reviews__author-name">Екатерина Минаева</p>
								<p class="reviews__authot-text">
									Заказала в данном онлайн-магазине в первые. Долго сомневалась, но вежливый менеджер ответил на все мои
									вопросы и посоветовал, какую лучше приобрести пеленку и аксессуары. Очень довольна покупками!!!
								</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img class="reviews__author-photo-img" src="images/reviews/reviews-1.png" alt="reviews-1-author" />
							<div class="reviews__author-info">
								<p class="reviews__author-name">Екатерина Минаева</p>
								<p class="reviews__authot-text">
									Заказала в данном онлайн-магазине в первые. Долго сомневалась, но вежливый менеджер ответил на все мои
									вопросы и посоветовал, какую лучше приобрести пеленку и аксессуары. Очень довольна покупками!!!
								</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img class="reviews__author-photo-img" src="images/reviews/reviews-1.png" alt="reviews-1-author" />
							<div class="reviews__author-info">
								<p class="reviews__author-name">Екатерина Минаева</p>
								<p class="reviews__authot-text">
									Заказала в данном онлайн-магазине в первые. Долго сомневалась, но вежливый менеджер ответил на все мои
									вопросы и посоветовал, какую лучше приобрести пеленку и аксессуары. Очень довольна покупками!!!
								</p>
							</div>
						</div>
						<div class="swiper-slide">
							<img class="reviews__author-photo-img" src="images/reviews/reviews-1.png" alt="reviews-1-author" />
							<div class="reviews__author-info">
								<p class="reviews__author-name">Екатерина Минаева</p>
								<p class="reviews__authot-text">
									Заказала в данном онлайн-магазине в первые. Долго сомневалась, но вежливый менеджер ответил на все мои
									вопросы и посоветовал, какую лучше приобрести пеленку и аксессуары. Очень довольна покупками!!!
								</p>
							</div>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section>
		<section class="gallery" id="gallery">
			<div class="container">
				<h2 class="section__title">Галерея</h2>

				<div class="swiper mySwiper gallery__slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide gallery__slide">
							<img src="images/gallery/slide-1.png" alt="slide-1">
							<img src="images/gallery/slide-2.png" alt="slide-2">
						</div>
						<div class="swiper-slide gallery__slide">
							<img src="images/gallery/slide-3.png" alt="slide-3">
							<img src="images/gallery/slide-4.png" alt="slide-4">
						</div>
						<div class="swiper-slide gallery__slide">
							<img src="images/gallery/slide-5.png" alt="slide-5">
							<img src="images/gallery/slide-6.png" alt="slide-6">
						</div>
						<div class="swiper-slide gallery__slide">
							<img src="images/gallery/slide-7.png" alt="slide-7">
							<img src="images/gallery/slide-8.png" alt="slide-8">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="how_to_order" id="how_to_order">
			<div class="container">
				<h2 class="section__title">Как заказать</h2>
				<div class="how_to_order-wrapper">
					<div class="how_to_order-item">
						<div class="how_to_order-img">
							<img src="images/how_to_order/icon-1.svg" alt="icon-1" />
						</div>
						<p class="how_to_order-text">Оставляем заявку</p>
					</div>
					<div class="how_to_order-item">
						<div class="how_to_order-img">
							<img src="images/how_to_order/icon-2.svg" alt="icon-2" />
						</div>
						<p class="how_to_order-text">
							Звонит менеджер и уточняет детали доставки
						</p>
					</div>
					<div class="how_to_order-item">
						<div class="how_to_order-img">
							<img src="images/how_to_order/icon-3.svg" alt="icon-3" />
						</div>
						<p class="how_to_order-text">
							Мы отправляем товар наложенным платежом
						</p>
					</div>
					<div class="how_to_order-item">
						<div class="how_to_order-img">
							<img src="images/how_to_order/icon-4.svg" alt="icon-4" />
						</div>
						<p class="how_to_order-text">
							Вы осматриваете и оплачиваете товар
						</p>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer class="footer" id="footer">
		<section class="contacts">
			<div class="container">
				<h2 class="section__title">Наши контакты</h2>
				<div class="contacts-wrapper">
					<div class="contacts__item">
						<img class="contacts__img" src="images/contacts/icon-1.svg" alt="#" />
						<a class="footer__phone" href="tel:+380977777777">+38 (097) 777 77 77</a>
					</div>
					<div class="contacts__item">
						<img class="contacts__img" src="images/contacts/icon-2.svg" alt="#" />
						<a class="footer__email" href="mailto:magazin@gmail.com">magazin@gmail.com</a>
					</div>
					<div class="contacts__item">
						<img class="contacts__img" src="images/contacts/icon-3.svg" alt="#" />
						<p class="footer__address">
							г. Киев, М «Дружбы Народов» бул. Дружбы Народов 5
						</p>
					</div>
					<div class="contacts__item">
						<img class="contacts__img" src="images/contacts/icon-4.svg" alt="#" />
						<p class="footer__schedule">
							<span>Пн - Пт 09:00 - 20:00</span>
							<span>Сб - Вс 09:00 - 18:00</span>
						</p>
					</div>
				</div>
			</div>
			<div class="map">
				<div class="map-description-wrapper">
					<img class="logo-img-footer" src="images/logo-img-footer.svg" alt="logo" />
					<span>Проспект В'ячеслава<br>Чорновола, 16і, Львів,<br> Львівська область, 79019</span>
				</div>
			</div>
			<div class="social">
				<p class="social-text">Мы в социальных сетях:</p>
				<img class="social-icon" src="images/social/instagramm.svg" alt="instagramm" />
				<img class="social-icon" src="images/social/facebook.svg" alt="facebook" />
				<img class="social-icon" src="images/social/youtube.svg" alt="youtube" />
			</div>
		</section>
	</footer>

	<!-- ==================Popup callback================== -->
	<div class="popUp-wrapper popUp__call_back">
		<div class="call_back-template">
			<h5 class="call_back-title">Заказать обратный звонок</h5>
			<input class="call_back-input nameUser" name="nameUser" type="text" placeholder="Ваше имя">
			<input class="call_back-input telNoUser" name="telNoUser" type="tel" placeholder="Номер телефона">
			<button class="btn call_back-btn">Отправить</button>
		</div>
	</div>


	<!-- ==================Popup success_purchase================== -->
	<div class="popUp-wrapper popUp__success_purchase">
		<div class="success_purchase-template">
			<img class="success_purchase-img" src="images/success_purchase-icon.svg" alt="success">
			<h5 class="success_purchase-title">Благодарим за покупку!</h5>
			<p class="success_purchase-text">Ваш заказ получен. Оставайтесь на связи, менеджер компании свяжется с вами в
				течение 15 минут</p>
		</div>
	</div>

	<!-- ==================Popup checkout================== -->
	<div class="popUp-wrapper popUp__checkout">
		<form class="checkout" action="#" method="post">
			<h4 class="checkout__title">Оформление заказа</h4>
			<fieldset class="my__order">
				<legend class="checkout_legend">Мой заказ</legend>
				<div class="order__header">
					<div class="order-row">
						<div class="order-col">Название позиции</div>
						<div class="order-col">Цена за позицию</div>
						<div class="order-col">Количество</div>
						<div class="order-col">Сумма</div>
					</div>
				</div>
				<div class="order__content">
					<div class="order-row">
						<div class="order-col">
							<div class="order__cards">
								<img class="order__cards-img" src="images/cards/card-1.jpg" alt="order__cards-img">
								<div class="order__cards-title">Пеленка Effiki</div>
								<div class="order__cards-size">70x100 см</div>
							</div>
						</div>
						<div class="order-col">
							<p class="order__price">735 грн</p>
						</div>
						<div class="order-col">
							<div class="card-input-wrapper">
								<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
								<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
								<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
							</div>
						</div>
						<div class="order-col">
							<p class="order__sum">735 грн</p>
						</div>
						<div class="order-col">
							<span class="order_btn_clear"></span>
						</div>
					</div>
				</div>
				<div class="order__content">
					<div class="order-row">
						<div class="order-col">
							<div class="order__cards">
								<img class="order__cards-img" src="images/cards/card-1.jpg" alt="order__cards-img">
								<div class="order__cards-title">Пеленка Effiki</div>
								<div class="order__cards-size">70x100 см</div>
							</div>
						</div>
						<div class="order-col">
							<p class="order__price">735 грн</p>
						</div>
						<div class="order-col">
							<div class="card-input-wrapper">
								<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
								<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
								<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
							</div>
						</div>
						<div class="order-col">
							<p class="order__sum">735 грн</p>
						</div>
						<div class="order-col">
							<span class="order_btn_clear"></span>
						</div>
					</div>
				</div>
				<div class="order__content">
					<div class="order-row">
						<div class="order-col">
							<div class="order__cards">
								<img class="order__cards-img" src="images/cards/card-1.jpg" alt="order__cards-img">
								<div class="order__cards-title">Пеленка Effiki</div>
								<div class="order__cards-size">70x100 см</div>
							</div>
						</div>
						<div class="order-col">
							<p class="order__price">735 грн</p>
						</div>
						<div class="order-col">
							<div class="card-input-wrapper">
								<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
								<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
								<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
							</div>
						</div>
						<div class="order-col">
							<p class="order__sum">735 грн</p>
						</div>
						<div class="order-col">
							<span class="order_btn_clear"></span>
						</div>
					</div>
				</div>
				<div class="order__content">
					<div class="order-row">
						<div class="order-col">
							<div class="order__cards">
								<img class="order__cards-img" src="images/cards/card-1.jpg" alt="order__cards-img">
								<div class="order__cards-title">Пеленка Effiki</div>
								<div class="order__cards-size">70x100 см</div>
							</div>
						</div>
						<div class="order-col">
							<p class="order__price">735 грн</p>
						</div>
						<div class="order-col">
							<div class="card-input-wrapper">
								<span class="dec"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
								<input class="card__footer-input" type="number" value="1" min="1" max="10" step="1" />
								<span class="inc"><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M-1.13054e-07 8.825L3.71159 5L-4.47446e-07 1.175L1.14825 1.88227e-07L6 5L1.14825 10L-1.13054e-07 8.825Z"
											fill="#414141" />
									</svg>
								</span>
							</div>
						</div>
						<div class="order-col">
							<p class="order__sum">735 грн</p>
						</div>
						<div class="order-col">
							<span class="order_btn_clear"></span>
						</div>
					</div>
				</div>
				<div class="total__order">Общая сумма заказа<span>1 470 грн</span></div>
			</fieldset>
			<fieldset class="personal__details">
				<legend class="checkout_legend">Введите личные данные</legend>
				<div class="order__footer">
					<input class="order__footer-input personal__name" type="text" placeholder="Ваше имя">
					<input class="order__footer-input personal__phone" type="tel" placeholder="Номер телефона">
					<textarea class="personal__comment" placeholder="Ваш комментарий"></textarea>
				</div>
			</fieldset>
			<button class="btn btn-checkout">Оформить заказ</button>
		</form>
	</div>


	<!-- ==================Checkout BTN================== -->

	<div class="checkout__btn">
		<img class="checkout__btn-img" src="images/supermarket.svg" alt="supermarket">
		<span>2</span>
	</div>
	


	<!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/popUP.js"></script>
	<script src="js/order.js"></script>
</body>

</html>