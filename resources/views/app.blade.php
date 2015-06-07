<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<title>La tipografía aplicada al diseño se apodera de la moda urbana</title>
	<link rel="stylesheet" href="/css/estilo.css">
	<link rel="stylesheet" href="/css/producto.css">	
	<script type="text/javascript" src="/js/angular-1.4.0.js"></script>
	<script type="text/javascript" src="/js/angular-route.js"></script>
	<script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/js/main.js"></script> 
</head>
<body ng-app="angularApp" ng-controller="mainController as vm">
	<div class="page">
		<header>
			<div class="inline">
				<a href="{{ url('/') }}"><img class="logo" src="/images/LOGO-01.png"></a>
			</div>
			<div class="inline social-header">
				<nav>
					<ul>
						<li class="inline"><a href=""><img class="icon" src="/images/social/facebook.svg"></img></a></li>
						<li class="inline"><a href=""><img class="icon" src="/images/social/twitter.svg"></a></li>
						<li class="inline"><a href=""><img class="icon" src="/images/social/pinterest.svg"></a></li>
						<li class="inline"><a href=""><img class="icon" src="/images/social/youtube.svg"></a></li>
						<li class="inline"><a href=""><img class="icon" src="/images/social/instagram.svg"></a></li>
					</ul>
				</nav>
			</div>
			<div>
				<nav class="menu-header center">
					<ul>
		       			<li class="inline menu-item"><a class="menu-item-link" href="{{ url('/') }}">HOME</a></li>
		       			<li class="inline menu-item"><a class="menu-item-link" href="{{ url('/') }}">QUIENES SOMOS</a></li>
		       			<li class="inline menu-item"><a class="menu-item-link" href="{{ url('/') }}">MUJERES</a></li>
		       			<li class="inline menu-item"><a class="menu-item-link" href="" ng-click="vm.getProductos()">HOMBRES</a></li>
		       			<li class="inline menu-item"><a class="menu-item-link" href="{{ url('/') }}">PRENSA</a></li>
		       			<li class="inline menu-item"><a class="menu-item-link" href="{{ url('/') }}">CONFECCIONES</a></li>
		       			<li class="inline menu-item last"><a class="menu-item-link" href="{{ url('/') }}">QUIERES SER TIPO</a></li>
		       		</ul>
				</nav>
			</div>
		</header>
		<section id="content">
			@yield('content')
		</section>
		<footer>
			<div class="footer-top clear-right">
				<div class="inline footer-left">
					<span class="block footer-title center"><b>La tipografía aplicada al diseño</b> se apodera de la moda urbana</span>
					<p class="block footer-parrafo justify">"Nuestro trabajo consta el ponerle en cada pieza nuestro esfuerzo, pasión y corazón, elementos 
					importantes para realizar un producto que tenga la calidad con la que producimos. Contamos con 
					líneas de ropa para hombres y mujeres y accesorios para ambos, al principio todo comenzó con la 
					elaboración de polos para hombres, pero el público femenino realizó pedidos con insistencia para 
					su género, por lo que se uniformizó la oferta, lo que fue recibido con una muy buena acogida", 
					señaló el diseñador gráfico Dante Guerra, creador de esta marca.</p>
					<nav class="block footer-icon-list center">
						<ul>
							<li class="inline"><a href=""><img class="icon footer-icon" src="/images/social/facebook-white.svg"></img></a></li>
							<li class="inline"><a href=""><img class="icon footer-icon" src="/images/social/twitter-white.svg"></a></li>
							<li class="inline"><a href=""><img class="icon footer-icon" src="/images/social/pinterest-white.svg"></a></li>
							<li class="inline"><a href=""><img class="icon footer-icon" src="/images/social/youtube-white.svg"></a></li>
							<li class="inline"><a href=""><img class="icon footer-icon" src="/images/social/instagram-white.svg"></a></li>
						</ul>
					</nav>
				</div>
				<div class="inline footer-right">
					<a href="{{ url('/') }}" class="block center"><img class="footer-logo" src="/images/LOGO-01.png"></a>
					<span class="block center footer-left-title">Suscríbete</span>
					<span class="block center footer-left-parrafo">Entérate de nuestras promociones y novedades en Tipo</span>
					<input class="block footer-left-inputtext" type="text">
					<a class="block footer-left-button" href="">ENVIAR</a>
				</div>
			</div>
			<div class="footer-bot">
				<ul class="footer-list center">
					<li class="inline footer-item"><a class="footer-item-link" href="">Logo Tipo tipo-ropayaccesorios.com</a></li>
					<li class="inline footer-item"><a class="footer-item-link" href="">Diseño de página web 2015</a></li>
					<li class="inline footer-item"><a class="footer-item-link" href="">Tipo. Todos los Derechos Reservados</a></li>
					<li class="inline footer-item"><a class="footer-item-link" href="">Política de Privacidad</a></li>
					<li class="inline footer-item last"><a class="footer-item-link" href="">Términos y Condiciones</a></li>
				</ul>
			</div>
		</footer>
	</div>
</body>
</html>