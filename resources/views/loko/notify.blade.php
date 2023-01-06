<html>
<head>
	<title>LOKO FINTESS - потдверждение Email</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="icon" type="image/png" href="/img/favicon.png">
	<meta charset="utf-8">
	<style>
		@font-face { 
		font-family: 'Nunito';
		src: url(fonts/nunito.ttf) format("truetype");
		}
		body {
			font-family: 'Nunito', sans-serif;
			background-color: #fbfbfb
		}
		.cabinet {
			height: 61.5%;
		}
		.header__bottom {
			background-color: #fbfbfb
		}
		.header__bottom_menu {
			padding-bottom: 3px;
			border-bottom: 1px solid #e5e5e5;
		}
		.notify_block {
			flex: 1 0 0;
			text-align: center;
			padding: 10px 16px;
		}
		.notify__title {
			font-size: 18px;
			font-weight: bold;
			padding-bottom: 15px;
			border-bottom: 1px solid #eee;
		}
		.notify_block > p {
			padding-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
			<header class="header">
				<div class="header__logo">
					<a href="{{ route('index') }}"><img src="/img/5D8yfDG.png" width="100px" height="40px"></a>
				</div>
				<div class="header__menu">
					<div class="header__icon">
							<img src="/img/timer.svg" width="20px" height="20px">
						</div>
					<div class="header__menu-item">
						<span class="header__title">РЕЖИМ РАБОТЫ</span> <br>
						<span class="header__subtitle">Ежедневно с 10:00 до 22:00</span>
					</div>
					<hr color="#eee" width="1px">
						<div class="header__icon">
							<img src="/img/iphone-reverse.svg" width="20px" height="20px">
						</div>
					<div class="header__menu-item">
						<span class="header__title">Фрунзе проспект, 50</span> <br>
						<a href="tel:+74852333707" class="header__subtitle">+7(4852) 333-707</a>
					</div>
					<hr color="#eee" width="1px">
						<div class="header__icon">
							<img src="/img/iphone-reverse.svg" width="20px" height="20px">
						</div>
					<div class="header__menu-item">
						<span class="header__title">Гагарина проспект, 34</span> <br>
						<a href="tel:+74852333707" class="header__subtitle">+7(4852) 333-707</a>
					</div>
					<hr color="#eee" width="1px">
				</div>	
				<div class="header__social">
					<a href="https://vk.com/hclokomotiv_official" target="_blank"><img src="/img/vk.svg" width="30px" height="30px"></a>
					<a href="https://www.instagram.com/hclokomotiv" target="_blank"><img src="/img/inst.png" width="30px" height="30px"></a>
				</div>
			</header>
		</div>
		<section class="header__bottom">
			<div class="container">
				<div class="header__bottom_menu">
					<ul class="header__bottom_nav">
						<li class="header__nav-item"><a href="{{ route('index') }}" target="_blank">Главная</a></li>
						<li class="header__nav-item"><a href="{{ route('comments') }}" target="_blank">Отзывы</a></li>
						<li class="header__nav-item"><a href="{{ route('team') }}" target="_blank">Команда</a></li>
						<li class="header__nav-item"><a href="{{ route('schedule') }}" target="_blank">Расписание</a></li>
						<li class="header__nav-item"><a href="{{ route('price') }}" target="_blank">Цены</a></li>
						@if (Auth::check())
						<li class="header__nav-item"><a href="{{ route('cabinet') }}" target="_blank">Личный кабинет</a></li>
						@else
						<li class="header__nav-item"><a href="{{ route('auth') }}" target="_blank">Войти</a></li>
						@endif
					</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="notify">
			<div class="wrapper">
			<div class="container">
				<div class="notify_block">
					<div class="notify__title">
						{{ $title }}
					</div>
					<p>
						{{ $text }}
					</p>
				</div>
			</div>
			</div>
		</section>
			<footer class="footer">
			<div class="footer__nav">
				<a class="footer__nav-item" href="{{ route('index') }}">Главная</a>
				<a class="footer__nav-item" href="{{ route('team') }}">Команда</a>
				<a class="footer__nav-item" href="{{ route('schedule') }}">Расписание</a>
				<a class="footer__nav-item" href="{{ route('price') }}">Цены</a>
				<a class="footer__nav-item" href="{{ route('cabinet') }}">Личный кабинет</a>
			</div>
			<div class="footer__social">
				<a href="https://vk.com/hclokomotiv_official" target="_blank"><img src="img/vk.svg" width="30px" height="30px"></a>
				<a href="https://twitter.com/hclokomotiv" target="_blank"><img src="img/twitter.svg" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/hclokomotiv" target="_blank"><img src="img/facebook.svg" width="30px" height="30px"></a>
				<a href="https://www.instagram.com/hclokomotiv" target="_blank"><img src="img/inst.png" width="30px" height="30px"></a>
			</div>
			</div>
			<div class="footer__company">
				ИП Марков В.М <br>
				ИНН: 773465029964 <br>
				ИГНРП: 316774600285846 <br>
				г. Ярославль, ул. Советская д.77
			</div>
		</footer>
		<div class="footer__copyright">
			© LOKO FITNESS 2020-2021 | Все права защищены.
			Копирование материалов данного сайта без разрешения правообладателя запрещено.
		</div>
</body>
</html>