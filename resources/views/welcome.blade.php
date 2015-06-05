@extends('app')

@section('content')
<div>
	<div class="home-1">
		<div class="inline article-left">
			<a class="block" href="{{ url('/') }}"><img class="logo" src="/images/LOGO-01.png"></a>
			<span class="block article-title-1">Nosotros</span>
			<span class="block article-parrafo-1">SOMOS UNA EMPRESA JOVEN CREATIVA DEDICADA AL DISEÑO TIPOGRAFICO PARA DIFUNDIRLO COMO ARTE</span>	
		</div>
		<div class="inline article-right">
			<div class="slide">
				<figure>
					<img class="article-image slide-img1 slide img" src="/images/slideshow/slideshow-1.jpg">
					<img class="article-image slide-img2 slide-img" src="/images/slideshow/slideshow-2.jpg">
					<img class="article-image slide-img3 slide-img" src="/images/slideshow/slideshow-3.jpg">
				</figure>
			</div>
		</div>
	</div>
	<div class="clear-left">
		<div class="inline article-left">
			<span class="block article-title-2">Quienes <b>somos & que</b> hacemos?</span>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates. 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates. 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates. 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates.</p>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates. 
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates.</p>
			<p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, minima nemo, placeat nostrum voluptas commodi 
			cupiditate fuga, dicta dolore unde quaerat reprehenderit blanditiis ad nam animi debitis quod, perferendis voluptates.</p>
		</div>
		<div class="inline article-right">
			
		</div>
	</div>
	<div class="clear-right">
		<div class="inline article-footer-list">
			<img src="" alt="">
		</div>
		<div>
			<a class="inline article-footer-button" href="#">
				<span class="button-me block">Me</span>
				<span class="button-signo">?</span>
				<span class="button-quedara block">quedará</span>
			</a>
		</div>
	</div>
</div>
@endsection